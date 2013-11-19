<div class="col-sm-12 col-md-9 content">

	<% if Level(2) %>
    <div class="breadcrumbs">
      $Breadcrumbs
    </div>
  <% end_if %>     
  
  <p class="ingress">Vinduer og dører fra Røros Bruk er tuftet på en lang industrihistorie.</p>
  
  <div class="tilbehorSection row">	        
    $Content
    $Form
	</div>

  <% loop SubPages %>
  <% include SubPage %>        
  <% end_loop %>

</div>        

<% include SideNav %>
