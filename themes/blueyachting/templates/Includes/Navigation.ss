<nav class="primary animatedMenu" id="header-nav" aria-label="Hauptnavigation">
	<ul >
		<% loop $Menu(1) %>
			<li class="$LinkingMode px-3 py-4 <% if $Children %>have-children-<% end_if %>">
				<a href="$Link" title="Zur Seite $Title springen">$MenuTitle.XML <% if $Children %><i class="fas fa-chevron-down fa-xs"></i><% end_if %></a>
				<% include SubMenu %>
			</li>
		<% end_loop %>
	</ul>
</nav>
