	
$( document ).ready(function() {

	$('#create-auction').click(function(){
		$('#create-auction-modal').modal({
			show: true
		});
	});

	$('.main-carousel').flickity({
  	autoPlay: 1500,
  	wrapAround: true,
  	pageDots: false,
  	cellAlign: 'center',
  	resize: false,
  	contain: true
	});

});