<!DOCTYPE html>
<!--
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
Silverstripe Theme By Brandfisher - www.brandfisher.de
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
-->

<html lang="$ContentLocale">
<head>
	<% base_tag %>
	<title><% if $MetaTitle %>$MetaTitle<% else %>$Title<% end_if %> &raquo; $SiteConfig.Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=1, viewport-fit=cover">
	$MetaTags(false)

	<link rel="preload" href="$resourceURL('themes/blueyachting/webfonts/fa-brands-400.woff2')" as="font" type="font/woff2" crossorigin="anonymous">
	<link rel="preload" href="$resourceURL('themes/blueyachting/webfonts/fa-solid-900.woff2')" as="font" type="font/woff2" crossorigin="anonymous">

	<link rel="preload" href="$resourceURL('themes/blueyachting/webfonts/CeraPro-Medium.woff')" as="font" type="font/woff" crossorigin="anonymous">
	<link rel="preload" href="$resourceURL('themes/blueyachting/webfonts/CeraPro-Bold.woff')" as="font" type="font/woff" crossorigin="anonymous">
	<link rel="preload" href="$resourceURL('themes/blueyachting/webfonts/CeraPro-Regular.woff')" as="font" type="font/woff" crossorigin="anonymous">

	<link rel="apple-touch-icon" sizes="60x60" href="{$BaseHref}apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="{$BaseHref}favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="{$BaseHref}favicon-16x16.png">
	<link rel="manifest" href="{$BaseHref}site.webmanifest">
	<link rel="mask-icon" href="{$BaseHref}safari-pinned-tab.svg" color="#253a6c">
	<meta name="msapplication-TileColor" content="#253a6c">
	<meta name="theme-color" content="#ffffff">

	<meta property="og:image" content="{$BaseHref}og-image.jpg">
	<meta property="og:image:width" content="23">
	<meta property="og:image:height" content="34">
	<meta property="og:description" content="Als Exklusiv-Importeur unserer ausgesuchten Vertretungen sind wir Ihr Ansprechpartner f&uuml;r den Verkauf und den After Sales in Deutschland, &Ouml;sterreich und der deutschsprachigen Schweiz.">
	<meta property="og:title" content="Blue Yachting">
	<meta property="og:url" content="$BaseHref">
	
	<!-- Begin Brevo Form -->

	<!-- START - We recommend to place the below code in head tag of your website html  -->

	<style>

	@font-face {

		font-display: block;

		font-family: Roboto;

		src: url(https://assets.brevo.com/font/Roboto/Latin/normal/normal/7529907e9eaf8ebb5220c5f9850e3811.woff2) format("woff2"), url(https://assets.brevo.com/font/Roboto/Latin/normal/normal/25c678feafdc175a70922a116c9be3e7.woff) format("woff")

	}

	

	@font-face {

		font-display: fallback;

		font-family: Roboto;

		font-weight: 600;

		src: url(https://assets.brevo.com/font/Roboto/Latin/medium/normal/6e9caeeafb1f3491be3e32744bc30440.woff2) format("woff2"), url(https://assets.brevo.com/font/Roboto/Latin/medium/normal/71501f0d8d5aa95960f6475d5487d4c2.woff) format("woff")

	}

	

	@font-face {

		font-display: fallback;

		font-family: Roboto;

		font-weight: 700;

		src: url(https://assets.brevo.com/font/Roboto/Latin/bold/normal/3ef7cf158f310cf752d5ad08cd0e7e60.woff2) format("woff2"), url(https://assets.brevo.com/font/Roboto/Latin/bold/normal/ece3a1d82f18b60bcce0211725c476aa.woff) format("woff")

	}

	

	#sib-container input:-ms-input-placeholder {

		text-align: left;

		font-family: Helvetica, sans-serif;

		color: #c0ccda;

	}

	

	#sib-container input::placeholder {

		text-align: left;

		font-family: Helvetica, sans-serif;

		color: #c0ccda;

	}

	

	#sib-container textarea::placeholder {

		text-align: left;

		font-family: Helvetica, sans-serif;

		color: #c0ccda;

	}

	

	#sib-container a {

		text-decoration: underline;

		color: #2BB2FC;

	}

	.checkbox_tick_positive {
		margin-bottom: 0px !important;
	}

	</style>

	<link rel="stylesheet" href="https://sibforms.com/forms/end-form/build/sib-styles.css">

	<!--  END - We recommend to place the above code in head tag of your website html -->
</head>
<body class="$ClassName.ShortName" <% if $i18nScriptDirection %>dir="$i18nScriptDirection"<% end_if %>>
<%-- The label should always be the same, dont translate it --%>
<nav class="skipnav" aria-label="Skipnavigation">
	<ul>
		<li><a href="{$Link}#header-nav" class="sr-only-focusable">Zur Hauptnavigation</a></li>
		<li><a href="{$Link}#main-content" class="sr-only-focusable">Zur Inhalt</a></li>
		<li><a href="{$Link}#footer" class="sr-only-focusable">Zur Fußnavigation</a></li>
	</ul>
</nav>
<% include Header %>
<% include Slider %>
<% include BreadCrumbs %>
<div id="main-content" role="main">
	$Layout
</div>
<% include Footer %>
<script src="https://app.jurafox.de/bot/ccLoader/8d27e1ba2c853c8d2357ea89aa7facee/54ad131f75eec0e8b49f3d440bb9e324"></script>

<!-- START - We recommend to place the below code in footer or bottom of your website html  -->
<script>
  window.REQUIRED_CODE_ERROR_MESSAGE = 'Wähle bitte einen Ländervorwahl aus.';
  window.LOCALE = 'de';
  window.EMAIL_INVALID_MESSAGE = window.SMS_INVALID_MESSAGE = "Die eingegebenen Informationen sind nicht gültig. Bitte überprüfen Sie das Feldformat und versuchen es erneut.";

  window.REQUIRED_ERROR_MESSAGE = "Dieses Feld darf nicht leer sein. ";

  window.GENERIC_INVALID_MESSAGE = "Die eingegebenen Informationen sind nicht gültig. Bitte überprüfen Sie das Feldformat und versuchen es erneut.";




  window.translation = {
    common: {
      selectedList: '{quantity} Liste ausgewählt',
      selectedLists: '{quantity} Listen ausgewählt',
      selectedOption: '{quantity} ausgewählt',
      selectedOptions: '{quantity} ausgewählt',
    }
  };

  var AUTOHIDE = Boolean(0);
</script>

<script defer src="https://sibforms.com/forms/end-form/build/main.js"></script>

<script src="https://www.google.com/recaptcha/api.js?render=6LcnG1csAAAAAHjL_b3tPnDXGlCQ3CpaLg8mmmj-&hl=de" async defer></script>

<!-- END - We recommend to place the above code in footer or bottom of your website html  -->
<!-- End Brevo Form -->
</body>
</html>