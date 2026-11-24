<%-- Overrides tractorcow/silverstripe-fluent: real language codes, one x-default, only for translated pages (TSEO-005) --%>
<% loop $HreflangLinks %>
<link rel="alternate" hreflang="$HrefLang.ATT" href="$Href.ATT">
<% end_loop %>
