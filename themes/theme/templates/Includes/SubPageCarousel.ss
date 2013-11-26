

<div id="InlineCarousel_{$ID}" class="carousel slide tilbehorSlide" data-interval="false">

	<% loop CarouselImages %>
	<div class="carousel-inner img-rounded">

		<div class="item <% if First %>active<% end_if %>">
				

			<img src="../../../img/produkter/vindu_isoler/Vrider7.JPG" />
			<div class="container">
				<div class="carousel-caption2">
					TODO:add image caption
				</div>
			</div>
		</div>
	</div>
	<% end_loop %>
	<ol class="carousel-indicators">
		<% loop CarouselImages %>
		<li data-target="#InlineCarousel_{$ID}" data-slide-to="{$Pos(0)}" <% if First %>class="active"<% end_if %>></li>
		<% end_loop %>
	</ol>
	<a class="left carousel-control" href="#InlineCarousel_{$ID}" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	<a class="right carousel-control" href="#InlineCarousel_{$ID}" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
