<div class="col-sm-12 col-md-9 content">

	<% if Level(2) %>
    <div class="breadcrumbs">
      $Breadcrumbs
    </div>
  <% end_if %>     

  <% include Introduction %>  

  <!--div class="tilbehorSection row"></div-->
    <% include LeftRightBlocks %>
    $Content
    $Form


  <% loop SubPages %>
    <% include SubPage %>        
  <% end_loop %>

</div>        

<% include SideNav %>
