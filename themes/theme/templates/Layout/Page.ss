<div class="col-sm-12 col-md-9 content">

	<% if Level(2) %>
    <div class="breadcrumbs">
      $Breadcrumbs
    </div>
  <% end_if %>     
  
  <% with MainImage.SetWidth(825) %>
    <div class="col-md-12 nopad"><img src="$URL" alt="$Title" class="img-rounded"/><p></p></div>
  <% end_with %>

  <% include Introduction %>  

  <!--div class="tilbehorSection row"></div-->
    <div class="tinyContent">
    <% include LeftRightBlocks %>
    $Content
    </div>
    $Form


  <% loop SubPages %>
    <% include SubPage %>        
  <% end_loop %>

</div>        

<% include SideNav %>
