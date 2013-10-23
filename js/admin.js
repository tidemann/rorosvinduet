$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
});


$('.content').flowtype({
 minimum   : 500,
 maximum   : 1200,
 minFont   : 12,
 maxFont   : 20,
 fontRatio : 40,
 lineRatio : 1.7
});

$('.carousel-caption h1').flowtype({
 minimum   : 300,
 maximum   : 1200,
 minFont   : 18,
 maxFont   : 52,
 fontRatio : 18,
 lineRatio : 1.8
});

