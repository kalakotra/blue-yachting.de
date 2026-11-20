<%--Include SubMenu recursively --%>
<% if $Children %>
	<ul>
		<% loop $Children %>
			<li class="$LinkingMode ">
				<a href="$Link" title="Zur Seite $Title springen" class="px-3 py-1 d-block">$MenuTitle.XML</a>
				<% include SubMenu %>
			</li>
		<% end_loop %>
	</ul>
<% end_if %>