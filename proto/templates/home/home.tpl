{include file='common/header.tpl'}

<link rel="stylesheet" type="text/css" href="../css/home.css">
<link rel="stylesheet" type="text/css" href="../css/custom-modal.css" />
<link rel="stylesheet" type="text/css" href="../css/create-auction.css" />

<body>
	<div class="container">
		{include file='auctions/recents.tpl'}
		{include file='auctions/by-bid.tpl'}
	</div>
</body>

<script type="text/javascript" src="../daterangepicker/moment.min.js"></script>
<!-- Include Date Range Picker -->
<script type="text/javascript" src="../daterangepicker/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="../daterangepicker/daterangepicker.css" />

{include file='popups/createAuction.tpl'}

<script src="../js/index.js"></script>
</html>