<%-- Technical SEO head tags (YWLI audit 2026-11-16) --%>
<link rel="canonical" href="$CanonicalURL.ATT">
<% if $SeoNoIndex %><meta name="robots" content="noindex, nofollow"><% end_if %>
<meta property="og:type" content="$OGType.ATT">
<meta property="og:site_name" content="$SiteConfig.Title.ATT">
<meta property="og:locale" content="$OGLocale.ATT">
<meta property="og:title" content="$OGTitle.ATT">
<% if $OGDescription %><meta property="og:description" content="$OGDescription.ATT"><% end_if %>
<meta property="og:url" content="$CanonicalURL.ATT">
<% if $OGImage %><% with $OGImage %>
<meta property="og:image" content="$AbsoluteURL.ATT">
<meta property="og:image:width" content="$Width">
<meta property="og:image:height" content="$Height">
<meta name="twitter:card" content="summary_large_image">
<% end_with %><% end_if %>
<% if $SchemaJSONLD %><script type="application/ld+json">$SchemaJSONLD.RAW</script><% end_if %>
