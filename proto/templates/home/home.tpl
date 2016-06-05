{include file='common/header.tpl'}

<link rel="stylesheet" type="text/css" href="../css/home.css">
<link rel="stylesheet" type="text/css" href="../css/custom-modal.css" />
<link rel="stylesheet" type="text/css" href="../css/create-auction.css" />
<link href="../css/hover.min.css" rel="stylesheet">
<link rel="stylesheet" href="../lib/flickity/flickity.css" media="screen">

<div class="container">
	{include file='auctions/recents.tpl'}
	{include file='auctions/by-bid.tpl'}
	{foreach $preferences as $preference}
	<div class="panel-body">
		<h1 class="page-header">Marca {$preference.nome}
		</h1>
		{if empty($preference.auctions)}
		<br>
		<br>
		<h3 class="text-muted" style="text-align: center;">Não há registo de leilões com esta marca</h3>
		<br>
		<br>
		{else if count($preference.auctions) < 4}
		{foreach $preference.auctions as $auction}
		{include file='auctions/display-portfolio-items.tpl'}
		{/foreach}
		{else}
		<div class="main-carousel">
			{foreach $preference.auctions as $auction}
			{include file='auctions/display-portfolio-items.tpl'}
			{/foreach}
		</div>
		{/if}
	</div>
	{/foreach}
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

</html>