	
$( document ).ready(function() {

  $('.main-carousel').flickity({
  	autoPlay: 5000,
  	wrapAround: true,
  	pageDots: false,
  	cellAlign: 'center',
  	resize: false,
  	contain: true
	});

	$('.photos-carousel').flickity({
  	autoPlay: 2500,
  	wrapAround: true,
  	pageDots: false,
  	cellAlign: 'center',
  	resize: false,
  	contain: true
	});
  
});