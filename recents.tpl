
<div class="row">

	<!-- Row Title -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Mais recentes
			</h1>
		</div>
		<div class="slick-slider">
			{foreach $recentAuctions as $recentAuction}
			<div>
				<img src="https://fillmurray.com/300/300" alt="" class="img-responsive" />
				<a href="#" class="main-color auction-name">{$auctionByBid.nome}</a>
			</div>
			{/foreach}
		</div>

	</div>

</div>


