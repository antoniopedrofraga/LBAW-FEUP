<div class="panel-body">
	<h1 class="page-header">Mais licitadas
	</h1>
	<div class="main-carousel">
		{foreach $auctionsByBid as $auctionByBid}
		<div class="portfolio-item hvr-grow">
			<a href="../pages/auction.php?id={$auctionByBid.idleilao}">
				<img class="carousel-image" alt="" width=200 height=200 style='background: url("{if $auctionByBid.imagelink == null }https://placehold.it/800x600{else}{$auctionByBid.imagelink}{/if}") 50% 50% no-repeat; background-size: cover;'>
			</a>
			<h3>
				<a href="../pages/auction.php?id={$auctionByBid.idleilao}" class="main-color auction-name">{$auctionByBid.nome}</a>
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

