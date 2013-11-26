<!DOCTYPE html>
<html>
  <% include Head %>
  <body>

    <% include TopCarousel %>
	 
    <% include Logo %>
    <% include TopNav %>   

		</div><!-- container end -->

		
			<div class="thumbRow">
			<div class="container">
				<% loop Teasers %>
				  <div class="col-sm-12 col-md-4 col-lg-4">
					    <div class="thumbnail">
					    	<div class="circle">
						      <div class="stichCircle">
						      	<a href="$Link">$TeaserImage.SetWidth(220)</a>
						      	</div>
					    	</div><!-- circle -->
				      <div class="caption">
				        <h3>$Title</h3>
				        <% if TeaserText %>
				        <p>$TeaserText</p>
				        <% end_if %>
				        <p><a href="$Link" class="bigLink">Les mer</a></p>
				      </div>
				    </div>
				  </div>
			  <% end_loop %>
			</div><!-- thumb -->
			</div><!-- container end -->
			
			
			
			<div class="tabRow">
			<div class="tabContainer">
				<div class="container">
					<ul class="nav nav-tabs nav-justified" id="myTab">
					  <% loop SubPages %>
					  	<li<% if First %> class="active"<% end_if %>><a href="#{$ID}">$MenuTitle.XML</a></li>

					  <% end_loop %>
					</ul>
				</div><!-- container end -->
			</div>
				<div class="container">
					<div class="tab-content">
						<% loop SubPages %>
						<div class="tab-pane <% if First %>active<% end_if %> fade in" id="{$ID}">
						  	<div class="col-md-6">
								<h2>$Title</h2>
								$Content
							</div>
							<div class="col-md-6">
								<!--img class="righted" src="$" alt=".."-->
								$TeaserImage
							</div>
						</div>

						<% end_loop %>
					</div>
				</div><!-- container end -->
			
				
				
				
				
			</div><!-- tab -->
	  
    <% include Footer  %>
    <% include ScriptTags %>
  </body>
</html>


