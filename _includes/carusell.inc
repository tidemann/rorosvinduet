  <div id="myCarousel" class="carousel slide karrusell">
	      <div class="carousel-inner">
	        <div class="item active">
	        
	        
	          
	          {% if page.title == "Vinduer" %}<img src="{{ site.baseurl }}/img/vindu.jpg" alt="First slide">
		          <div class="container">
		            <div class="carousel-caption">
		              <h1>Skapt for et langt og hardt liv.</h1>
		            </div>
		          </div> 
	          {% elsif page.title == "Dører" %}<img src="{{ site.baseurl }}/img/dorer.jpg" alt="First slide">
		          <div class="container">
		            <div class="carousel-caption">
		              <h1>Skapt for et langt og hardt liv.</h1>
		            </div>
		          </div>
	          {% elsif page.title == "Historien" %}<img src="{{ site.baseurl }}/img/omoss.jpg" alt="First slide">
		          <div class="container">
		            <div class="carousel-caption">
		              <h1>Skapt for et langt og hardt liv.</h1>
		            </div>
		          </div>
	          {% else %}<img src="{{ site.baseurl }}/img/Vindu_Rondane.jpg" alt="First slide">
		          <div class="container">
		            <div class="carousel-caption">
		              <h1>Skapt for et langt og hardt liv.</h1>
		            </div>
		          </div>
	          {% endif %}
	          
	        </div>
	        <!--<div class="item">
	          <img src="{{ site.baseurl }}/img/hytte.jpg" alt="Second slide">
	          <div class="container">
	            <div class="carousel-caption">
	              <h1>Another example headline.</h1>
	            </div>
	          </div>
	        </div>
	        <div class="item">
	          <img src="{{ site.baseurl }}/img/kids.jpg" alt="Third slide">
	          <div class="container">
	            <div class="carousel-caption">
	              <h1>One more for good measure.</h1>
	            </div>
	          </div>
	        </div>-->
	      </div>
	      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div><!-- carousel -->
