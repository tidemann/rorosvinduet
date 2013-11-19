$(document).ready(function() {

	$('#myTab a').click(function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	});


	$('.content').flowtype({
	 minimum   : 500,
	 maximum   : 855,
	 minFont   : 11,
	 maxFont   : 19,
	 fontRatio : 30,
	 lineRatio : 1.7
	});

	$('#nav-wrapper').height($("#Nav").height());
	
	$('#Nav').affix({
    offset: {
    	top:
    	 function () {
    
        return $('#myCarousel').outerHeight(true) - 15;
      }
    }
  })
}) 