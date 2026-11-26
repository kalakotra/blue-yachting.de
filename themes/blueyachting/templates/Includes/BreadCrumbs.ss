<% if ClassName!="HomePage" %>
	<section>
		<div id="Breadcrumbs" class="container py-2">
			<div class="row">
				<div class="col-12">
		   			<% cached $PartialCacheKey('breadcrumbs', 1) %>$Breadcrumbs<% end_cached %>
				</div>
			</div>
		</div>
	</section>
<% end_if %>
