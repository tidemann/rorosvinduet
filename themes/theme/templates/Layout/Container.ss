
<div class="col-sm-12 col-md-9 content" >
	<% if Level(1) %>
    <div class="breadcrumbs">
      $Breadcrumbs
    </div>
  	<% end_if %>  
    
    <% loop $TeaserChildren %>
		<div class="col-sm-6 col-md-6 img-rounded productContainer bigpC">
			<a href="$Link">
				<div class="innerRec">
					<div class="center">
						$TeaserImage.SetWidth(230)
						<p class="bigLink">$Title</p>
						<% if TeaserText %>
							<p class="productText">$TeaserText</p>
						<% end_if %>
					</div>
				</div>
			</a>
		</div>
    <% end_loop %>
	<div class="clearfix"></div>

  <% include Introduction %>    
  <% include LeftRightBlocks %>
  $Content
	
 </div>
<% include SideNav %>

