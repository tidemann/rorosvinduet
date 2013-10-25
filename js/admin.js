$(document).ready(function() {

	$('#myTab a').click(function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	});


	$('.content').flowtype({
	 minimum   : 500,
	 maximum   : 855,
	 minFont   : 12,
	 maxFont   : 20,
	 fontRatio : 40,
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