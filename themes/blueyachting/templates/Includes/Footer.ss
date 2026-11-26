<% if ClassName!='NewsletterPage' %>
<section class="wave-bg" style="overflow:visible;">
	<div class="container pt-5">
		<div class="row py-5 align-items-center">
			<div class="col-12 col-lg-6 order-lg-2 pt-5 mt-5 text-white-">
				<% cached $PartialCacheKey('footer-newsletter-text') %><% loop getMyClass("HomePage").limit(1) %>$OurNewsletter<% end_loop %><% end_cached %>
			</div>
			<div class="col-12 col-lg-6 order-lg-1 py-5  mt-lg-5">
				
          <% include NewsletterSibForm %>
        
			</div>
		</div>
	</div>
</section>
<% end_if %>
<footer class="bg-secondary text-white py-5" id="footer">
	<div class="container ">
		<div class="row justify-content-between">
			<div class="col-12 col-lg-9">
				<% cached $PartialCacheKey('footer-nav') %>
				<div class="row no-gutters">
					<div class="col-12 col-md-6 col-lg-3 pb-4" >
						<% loop Menu(1) %>
							<% if isFirst %><% else %>
								<% if Children.Count > 1 %>
									</div><div class="col-12 col-md-6 col-lg-3 pb-4" >
								<% else %>
									<div class="w-100 pt-3"></div>
								<% end_if %>
							<% end_if %>
							<a href="$Link" class="text-uppercase font-weight-bold d-block pb-1 text-white">$Title</a>
							
							<% if Children %>
								<% loop Children %>
									<a href="$Link" class="text-white">$Title</a><br />
								<% end_loop %>
							<% end_if %>
							
						<% end_loop %>
					</div>
				</div>
				<% end_cached %>
			</div>
			<div class="col-12 col-lg-3">
				$SiteConfig.FooterText
			</div>
		</div>
	</div>
</footer>
