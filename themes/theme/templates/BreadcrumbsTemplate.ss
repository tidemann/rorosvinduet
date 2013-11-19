<% if $Pages %>
  <h5>
    <% loop $Pages %> 
    	<% if $Last %>$MenuTitle.XML
      <% else %> <a href="$Link" class="breadcrumb-$Pos">$MenuTitle.XML</a> <i class="icon-angle-right"></i><% end_if %>
    <% end_loop %>
  </h5>
<% end_if %>

