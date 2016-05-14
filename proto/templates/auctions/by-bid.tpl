
<div class="row">

	<!-- Row Title -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Mais Licitadas
			</h1>
		</div>
		{foreach $auctionsByBid as $auctionByBid}
		<div class="well col-md-2 col-md-offset-1 portfolio-item vcenter">
			<a href="#">
				<img class="img-responsive" src="https://placehold.it/800x600" alt="">
			</a>
			<h3>
				<a href="#" class="main-color auction-name">{$auctionByBid.nome}</a>
			</h3>
			<small>
				<p><span class="glyphicon glyphicon-euro"></span>
				{if $auctionByBid.licitacaoatual > 0}
					{$auctionByBid.licitacaoatual}
				{else}
					{$auctionByBid.licitacaobase}
				{/if}
				</p>
			</small>
		</div>
		{/foreach}

	</div>

</div>
