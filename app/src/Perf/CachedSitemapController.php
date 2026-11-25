<?php

namespace App\Perf;

use Psr\SimpleCache\CacheInterface;
use SilverStripe\Core\Injector\Injector;
use Wilr\GoogleSitemaps\Control\GoogleSitemapController;

/**
 * Caches the rendered sub-sitemaps (the expensive part) until content changes.
 * The index stays uncached: it is cheap and also serves the .gz variant.
 * The DE sitemap took ~13 s on live and once ran into a gateway timeout (504).
 */
class CachedSitemapController extends GoogleSitemapController
{
    /**
     * Overridden actions must be allowed on the class that defines them.
     */
    private static array $allowed_actions = [
        'sitemap',
    ];

    public function sitemap()
    {
        $p = $this->getRequest()->params();
        $key = implode('_', ['sitemap', $p['ID'] ?? '', $p['OtherID'] ?? '', $p['ThirdID'] ?? '']);
        return $this->cached($key, fn () => parent::sitemap());
    }

    private function cached(string $name, callable $render)
    {
        $cache = Injector::inst()->get(CacheInterface::class . '.sitemapCache');
        $key = md5($name . '|' . ContentVersion::context() . '|' . ContentVersion::get());

        $hit = $cache->get($key);
        if (is_array($hit)) {
            $response = $this->getResponse();
            foreach ($hit['headers'] as $header => $value) {
                $response->addHeader($header, $value);
            }
            return $response->setBody($hit['body']);
        }

        $result = $render();
        $response = $result instanceof \SilverStripe\Control\HTTPResponse ? $result : $this->getResponse();
        $body = $result instanceof \SilverStripe\Control\HTTPResponse ? (string) $result->getBody() : (string) $result;

        // Only cache successful XML output.
        if ($response->getStatusCode() === 200 && $body !== '') {
            $cache->set($key, [
                'body' => $body,
                'headers' => array_intersect_key($response->getHeaders(), array_flip(['content-type', 'x-robots-tag'])),
            ]);
        }
        return $result;
    }
}
