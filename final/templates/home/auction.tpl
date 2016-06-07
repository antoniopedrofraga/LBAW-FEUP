{include file='common/header.tpl'}

<link href="../css/auction.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/custom-modal.css" />
<link rel="stylesheet" type="text/css" href="../css/create-auction.css" />
<link href="../css/hover.min.css" rel="stylesheet">
<link rel="stylesheet" href="../lib/flickity/flickity.css" media="screen">

	<div class="container">
		{include file='auctions/display-auction.tpl'}
		<script src="../js/auctions/auction.js"></script>
	</div>

{include file='popups/createAuction.tpl'}

<script type="text/javascript" src="../daterangepicker/moment.min.js"></script>
<!-- Include Date Range Picker -->
<script type="text/javascript" src="../daterangepicker/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="../daterangepicker/daterangepicker.css" />

<script src="../lib/flickity/flickity.js"></script>
<script src="../js/flickity.js"></script>

</body>

{include file='common/footer.tpl'}