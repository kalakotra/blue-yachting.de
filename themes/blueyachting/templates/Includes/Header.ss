<header class="sticky-top bg-white">
	<div class="bg-primary text-white">
		<div class="container">
			<div class="row justify-content-between py-1">
				<div class="col-auto flex-grow-1">
					<% if $SiteConfig.Facebook %>
						<a href="$SiteConfig.Facebook" rel="nofollow noopener" target="_blank" class="pr-1 text-white"><i class="fab fa-facebook"></i><span class="d-none-special">facebook</span></a>
					<% end_if %>
					<% if $SiteConfig.Twitter %>
						<a href="$SiteConfig.Twitter" rel="nofollow noopener" target="_blank" class="pr-1 text-white"><i class="fab fa-twitter"></i><span class="d-none-special">twitter</span></a>
					<% end_if %>
					<% if $SiteConfig.Instagram %>
						<a href="$SiteConfig.Instagram" rel="nofollow noopener" target="_blank" class="pr-1 text-white"><i class="fab fa-instagram"></i><span class="d-none-special">instagram</span></a>
					<% end_if %>
				</div>
				<% if $SiteConfig.Email %>
					<div class="col-auto text-right">
						<a href="mailto:$SiteConfig.Email" class="text-white" aria-label="Mailen Sie uns"><i class="fas fa-envelope"></i><span class="d-none d-md-inline"> $SiteConfig.Email</span></a>
					</div>
				<% end_if %>
				<% if $SiteConfig.Telephone %>
					<div class="col-auto text-right">
						<a href="tel:$SiteConfig.TelephoneLink" class="text-white" aria-label="Rufen Sie uns an"><i class="fas fa-phone-square-alt"></i><span class="d-none d-md-inline"> $SiteConfig.Telephone</span></a>
					</div>
				<% end_if %>
				<div class="col-auto">
					<% include LocaleMenu %>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row align-items-center  py-3">
			<div class="col-8 col-xxl-2">
				<a href="$BaseHref" class="brand" rel="home">
					<img src="$resourceURL('themes/blueyachting/images/blue-yachting-logo.png')" alt="blue yachting logo" />
				</a>
			</div>
			<div class="col-12 col-xxl-10 d-none d-xxl-block">
				<% cached $PartialCacheKey('nav-main', 1) %><% include Navigation %><% end_cached %>
			</div>
			<div class="col-4 d-block d-xxl-none text-right">
				<button class="hamburger hamburger--squeeze" type="button">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
						<span class="d-none-special">menu</span>
					</span>
				</button>
			</div>
		</div>
	</div>
</header>
<div id="mobileMenu" class="animated shadow">
	<a href="$BaseHref" class="d-block p-3" rel="home"><img src="$resourceURL('themes/blueyachting/images/blue-yachting-logo.png')" alt="blue yachting logo" /></a>
	<% cached $PartialCacheKey('nav-mobile', 1) %><% include MobileNavigation %><% end_cached %>
</div>