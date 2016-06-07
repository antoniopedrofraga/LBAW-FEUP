$( document ).ready(function() {
	if (!sameuser) {
		$('#licitacao').keyup(function() {
			if ($(this).val() && parseFloat($(this).val()) > bid) {
				$('#licitar').removeClass('disabled');
			} else {
				$('#licitar').addClass('disabled');
			}
		});
	}

	$('#licitar').click(function() {
		$.ajax({
			method: "POST",
			url: "../actions/bids/bid.php",
			data: { auctionid: auctionid, bid: parseInt($('#licitacao').val())}
		})
		.done(function( msg ) {
			location.reload();
		});
	});

	$('#clock').countdown(datafinal)
    .on('update.countdown', function(event) {
        var format = '%H:%M:%S';
        if(event.offset.days > 0) {
            format = '%-d day%!d ' + format;
        }
        if(event.offset.weeks > 0) {
            format = '%-w week%!w ' + format;
        }
        $(this).html(event.strftime(format));
    })
    .on('finish.countdown', function(event) {
        $(this).html('Este leilão terminou')
        .parent().addClass('disabled');
        $('#licitar').addClass('disabled');
        $.getJSON("../ajax/get-higher-bid.php", {auctionid: auctionid}, function(data) {
        	alert(data);
        });
    });
});