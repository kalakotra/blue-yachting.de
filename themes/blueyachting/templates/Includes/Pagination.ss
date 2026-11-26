<%-- Pagination for a PaginatedList passed as Items=... (Bootstrap 4 markup) --%>
<% if $Items.MoreThanOnePage %>
	<nav aria-label="Seitennavigation" class="pt-4">
		<ul class="pagination justify-content-center flex-wrap">
			<% if $Items.NotFirstPage %>
				<li class="page-item"><a class="page-link" href="$Items.PrevLink" rel="prev">Zurück<span class="sr-only"> zur vorherigen Seite</span></a></li>
			<% end_if %>
			<% loop $Items.PaginationSummary(2) %>
				<% if $CurrentBool %>
					<li class="page-item active" aria-current="page"><span class="page-link">$PageNum<span class="sr-only"> (aktuelle Seite)</span></span></li>
				<% else_if $Link %>
					<li class="page-item"><a class="page-link" href="$Link"><span class="sr-only">Seite </span>$PageNum</a></li>
				<% else %>
					<li class="page-item disabled" aria-hidden="true"><span class="page-link">…</span></li>
				<% end_if %>
			<% end_loop %>
			<% if $Items.NotLastPage %>
				<li class="page-item"><a class="page-link" href="$Items.NextLink" rel="next">Weiter<span class="sr-only"> zur nächsten Seite</span></a></li>
			<% end_if %>
		</ul>
	</nav>
<% end_if %>
