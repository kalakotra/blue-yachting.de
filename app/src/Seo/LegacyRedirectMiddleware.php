<?php

namespace App\Seo;

use SilverStripe\Control\Director;
use SilverStripe\Control\HTTPRequest;
use SilverStripe\Control\HTTPResponse;
use SilverStripe\Control\Middleware\HTTPMiddleware;
use SilverStripe\Core\Config\Configurable;

/**
 * 301 redirects: alias host → canonical host, /<locale>/home/ → /<locale>/ (TSEO-002),
 * and removed URLs (TSEO-003).
 *
 * Map in YAML (paths without leading/trailing slash, lower case):
 *   App\Seo\LegacyRedirectMiddleware:
 *     redirects:
 *       'de/neuboote/elan-yachts': 'de/neuboote/'
 *
 * Only applied when the request would otherwise be routed to the CMS (static files are
 * served by the web server before PHP runs). Existing pages always win: a redirect is
 * only issued if the CMS answers with 404.
 */
class LegacyRedirectMiddleware implements HTTPMiddleware
{
    use Configurable;

    private static array $redirects = [];

    /**
     * Also redirect every sub path of a mapped path (e.g. old model pages under a removed brand).
     */
    private static bool $match_children = true;

    /**
     * Canonical host (e.g. www.example.com). Empty = no host redirect.
     */
    private static string $canonical_host = '';

    /**
     * Hosts that are 301-redirected to $canonical_host (exact match, lower case).
     */
    private static array $redirect_hosts = [];

    /**
     * Scheme for the host redirect. Fixed instead of detected, because behind the Plesk
     * nginx proxy the request scheme is not reliable without SS_TRUSTED_PROXY_IPS.
     */
    private static string $canonical_scheme = 'https';

    public function process(HTTPRequest $request, callable $delegate)
    {
        $hostRedirect = $this->hostRedirect($request);
        if ($hostRedirect) {
            return $hostRedirect;
        }

        $path = strtolower(trim($request->getURL(), '/'));

        // /de/home/ and /home/ duplicate the start page.
        if ($request->httpMethod() === 'GET' && preg_match('#^(?:([a-z]{2}(?:-[a-z]{2})?)/)?home$#', $path, $m)) {
            $target = isset($m[1]) && $m[1] !== '' ? $m[1] . '/' : '';
            return $this->redirect($target, $request);
        }

        /** @var HTTPResponse $response */
        $response = $delegate($request);

        if ($response->getStatusCode() !== 404 || $request->httpMethod() !== 'GET') {
            return $response;
        }

        $target = $this->findTarget($path);
        return $target === null ? $response : $this->redirect($target, $request);
    }

    private function hostRedirect(HTTPRequest $request): ?HTTPResponse
    {
        $canonical = (string) static::config()->get('canonical_host');
        $host = strtolower((string) $request->getHost());
        $host = preg_replace('/:\d+$/', '', $host);
        if ($canonical === '' || !in_array($host, (array) static::config()->get('redirect_hosts'), true)) {
            return null;
        }
        // Keep the original path incl. trailing slash and query string.
        $uri = (string) ($_SERVER['REQUEST_URI'] ?? '/');
        $scheme = (string) static::config()->get('canonical_scheme') ?: 'https';
        $response = HTTPResponse::create('', 301);
        $response->addHeader('Location', $scheme . '://' . $canonical . $uri);
        return $response;
    }

    private function findTarget(string $path): ?string
    {
        $map = array_change_key_case((array) static::config()->get('redirects'), CASE_LOWER);
        $candidate = $path;
        while ($candidate !== '') {
            $key = trim($candidate, '/');
            if (array_key_exists($key, $map)) {
                return (string) $map[$key];
            }
            if (!static::config()->get('match_children')) {
                return null;
            }
            $pos = strrpos($candidate, '/');
            $candidate = $pos === false ? '' : substr($candidate, 0, $pos);
        }
        return null;
    }

    private function redirect(string $target, HTTPRequest $request): HTTPResponse
    {
        $url = preg_match('#^https?://#', $target) ? $target : Director::absoluteURL($target);
        $query = $request->getVars();
        unset($query['url']);
        if ($query) {
            $url .= (str_contains($url, '?') ? '&' : '?') . http_build_query($query);
        }
        $response = HTTPResponse::create('', 301);
        $response->addHeader('Location', $url);
        return $response;
    }
}
