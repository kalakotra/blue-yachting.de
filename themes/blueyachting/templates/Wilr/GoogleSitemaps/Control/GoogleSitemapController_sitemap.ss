<?xml version="1.0" encoding="UTF-8"?>
<?xml-stylesheet type='text/xsl' href='{$AbsoluteLink('styleSheet')}'?>
<%-- Overrides the Fluent version: hreflang via App\Seo\SeoPageExtension::getHreflangLinks() (TSEO-005) --%>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
        xmlns:xhtml="http://www.w3.org/1999/xhtml">
<% loop $Items %>
    <url>
        <loc>$AbsoluteLink</loc>
        <% if $LastEdited %><lastmod>$LastEdited.Rfc3339()</lastmod><% end_if %>
        <% if $HreflangLinks %><% loop $HreflangLinks %>
        <xhtml:link rel="alternate" hreflang="$HrefLang.ATT" href="$Href.ATT"/>
        <% end_loop %><% end_if %>
        <% if $ImagesForSitemap %><% loop $ImagesForSitemap %>
        <image:image><image:loc>{$AbsoluteLink}</image:loc></image:image>
        <% end_loop %><% end_if %>
    </url>
<% end_loop %>
</urlset>
