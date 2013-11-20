<div class="col-sm-12 col-md-9 content">

	<% if Level(2) %>
    <div class="breadcrumbs">
      $Breadcrumbs
    </div>
  <% end_if %>     

  <% include Introduction %>  

  <div class="tilbehorSection row">	        
    <% include LeftRightBlocks %>
    $Content
    $Form
	</div>

  <% loop SubPages %>
    <% include SubPage %>        
  <% end_loop %>

</div>        

<% include SideNav %>
