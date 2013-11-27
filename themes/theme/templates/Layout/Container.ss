
<div class="col-sm-12 col-md-9 content" >
	<% if Level(1) %>
    <div class="breadcrumbs">
      $Breadcrumbs
    </div>
  	<% end_if %>  
    <% loop $TeaserChildren %>


		<div class="col-sm-{$Parent.TeaserCols} col-md-{$Parent.TeaserCols} img-rounded productContainer <% if Parent.TeaserCols>3 %>bigpC<% end_if %>">
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
<div class="tinyContent">  
  <% include LeftRightBlocks %>
  $Content
</div>
	
 </div>
<% include SideNav %>

