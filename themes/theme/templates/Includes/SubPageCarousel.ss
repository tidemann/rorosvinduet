

<div id="InlineCarousel_{$ID}" class="carousel slide tilbehorSlide" data-interval="false">

	<div class="carousel-inner img-rounded">
	<% loop GalleryImages  %>
		<div class="item <% if First %>active<% end_if %>">
			<div style="height: 300px; width: 380px; display:table-cell; vertical-align: middle; text-align: center;">
			$SetRatioSize( 380, 300 )
			</div>
			<div class="container">
				<div class="carousel-caption2">
					 $Title
				</div>
			</div>
		</div>
	<% end_loop %>
	</div>
	<ol class="carousel-indicators">
		<% loop CarouselImages %>
		<li data-target="#InlineCarousel_{$ID}" data-slide-to="{$Pos(0)}" <% if First %>class="active"<% end_if %>></li>
		<% end_loop %>
	</ol>
	<a class="left carousel-control" href="#InlineCarousel_{$ID}" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	<a class="right carousel-control" href="#InlineCarousel_{$ID}" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>



