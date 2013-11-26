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
			  <div class="col-sm-12 col-md-4 col-lg-4">
				    <div class="thumbnail">
				    	<div class="circle">
					      <div class="stichCircle">
					      	<img src="img/thumb1.jpg" alt="...">
					      	</div>
				    	</div><!-- circle -->
			      <div class="caption">
			        <h3>Vinduer</h3>
			        <p>Et isolervindu med 2 eller 3- lags glass med ulike utenpåliggende sprosse-løsninger. Kan kombineres med et utall hengsleløsninger og glassvalg.</p>
			        <p><a href="/rorosvinduet/vinduer" class="bigLink">Les mer</a></p>
			      </div>
			    </div>
			  </div>
			  
			  <div class="col-sm-12 col-md-4 col-lg-4">
			    <div class="thumbnail">
			    	<div class="circle">
				    	<div class="stichCircle">
							<img src="img/thumb2.jpg" alt="...">
				    	</div>
			    	</div><!-- circle -->
			      <div class="caption">
			        <h3>Hvordan velge vindu</h3>
			        <p>Her kan du se hvordan du velge riktig Røros Vindu. Guiden tar for seg alle detaljer og varer.</p>
			        <p><a href="/rorosvinduet/vinduer" class="bigLink">Les mer</a></p>
			      </div>
			    </div>
			  </div>
			  
			  <div class="col-sm-12 col-md-4 col-lg-4">
			    <div class="thumbnail">
			    	<div class="circle">
				    	<div class="stichCircle">
							<img src="img/thumb3.jpg" alt="...">
				    	</div>
					</div><!-- circle -->
			      <div class="caption">
			        <h3>Dører</h3>
			        <p>Røros Døren har topp kvalitet ned til minste detalj. Døren er laget av vakuumimpregnert furu og leveres i mange forskjellige varianter for hus og hytte.</p>
			        <p><a href="/rorosvinduet/dorer" class="bigLink">Les mer</a></p>
			      </div>
			    </div>
			  </div>
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


