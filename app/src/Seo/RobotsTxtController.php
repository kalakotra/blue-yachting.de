<?php

namespace App\Seo;

use SilverStripe\Control\Controller;
use SilverStripe\Control\Director;
use SilverStripe\Control\HTTPResponse;

/**
 * Serves /robots.txt (TSEO-001).
 * Live: everything crawlable except admin/system paths, plus the sitemap.
 * Any other environment (dev, test/staging): disallow everything.
 */
class RobotsTxtController extends Controller
{
    /**
     * Paths blocked on live. Keep this list short: blocking does not de-index,
     * and blocked URLs cannot pass canonical/noindex signals.
     */
    private static array $disallow = [
        '/admin/',
        '/dev/',
        '/Security/',
        '/_graphql/',
    ];

    public function index(): HTTPResponse
    {
        $lines = ['User-agent: *'];

        if (Director::isLive()) {
            foreach ($this->config()->get('disallow') as $path) {
                $lines[] = 'Disallow: ' . $path;
            }
            $lines[] = '';
            $lines[] = 'Sitemap: ' . Director::absoluteURL('sitemap.xml');
        } else {
            $lines[] = 'Disallow: /';
        }

        $response = HTTPResponse::create(implode("\n", $lines) . "\n", 200);
        $response->addHeader('Content-Type', 'text/plain; charset=utf-8');
        $response->addHeader('Cache-Control', 'public, max-age=3600');
        return $response;
    }
}
