
<aside class="col-sm-12 col-md-3">
	<ul>
    <% with Level(1) %>
      <li class="$LinkingMode"><a href="$Link">$MenuTitle.XML</a></li>    
    <% end_with %>
   	<% loop Menu(2) %>
    		<li class="$LinkingMode"><a href="$Link">$MenuTitle.XML</a>
        <% if NavChildren %>
          <ul>
            <% loop NavChildren %>
			        <li class="$LinkingMode"><a href="$Link">$MenuTitle.XML</a>
                <% if NavChildren %>
                  <ul>
                    <% loop NavChildren %>
			                <li class="$LinkingMode"><a href="$Link">$MenuTitle.XML</a></li>            
                    <% end_loop %>            
                  </ul>
                <% end_if  %> 
                </li>           
            <% end_loop %>            
          </ul>
        <% end_if  %>
        </li>
    <% end_loop %>
  </ul>
</aside>
