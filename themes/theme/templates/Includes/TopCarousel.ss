<div id="myCarousel" class="carousel slide<% if LargeTopCarousel %> karrusell<% end_if %>">
	<div class="carousel-inner">
	<% loop GalleryImages %>
		<div class="item <% if First %>active<% end_if %>">
			$setWidth(1280) 
	    <div class="container">
		    <div class="carousel-caption">
		      <h1>$Title</h1>
		    </div>
		  </div>
		  
	  </div>
	  <% end_loop %>
	</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>