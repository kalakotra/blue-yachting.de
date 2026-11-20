<main>
	<div class="container">
		<div class="row pt-3 justify-content-center">
			<% if ContentTitle %>
				<div class="col-12">
					<h1>$ContentTitle</h1>
				</div>
			<% end_if %>
			<div class="col-12 col-md-6  py-3 py-lg-5">
				$Content
			</div>
			<div class="w-100 d-none"></div>
			<div class="col-12 col-md-6 py-3 py-lg-5">
				<% include NewsletterSibForm %>
			</div>
		</div>
	</div>
</main>