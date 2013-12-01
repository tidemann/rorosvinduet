$(document).ready(function() {

	$('#myTab a').click(function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	});


	$('.content').flowtype({
	 minimum   : 500,
	 maximum   : 855,
	 minFont   : 11,
	 maxFont   : 16,
	 fontRatio : 30,
	 lineRatio : 1.4
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