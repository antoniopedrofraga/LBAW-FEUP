<div class="panel-body">
	<h1 class="page-header">Mais recentes
	</h1>
	<div class="main-carousel">
		{foreach $recentAuctions as $recentAuction}
		<div class="portfolio-item hvr-grow">
			<a href="../pages/auction.php?id={$recentAuction.idleilao}">
				<img class="carousel-image" alt="" width=200 height=200 style='background: url("{if $recentAuction.imagelink == null }https://placehold.it/800x600{else}{$recentAuction.imagelink}{/if}") 50% 50% no-repeat; background-size: cover; display:block;'>
			</a>
			<h3>
				<a href="../pages/auction.php?id={$recentAuction.idleilao}" class="main-color auction-name">{$recentAuction.nome}</a>
			</h3>
			<small>
				<p><span class="glyphicon glyphicon-euro"></span>
					{if $recentAuction.licitacaoatual > 0}
						{$recentAuction.licitacaoatual}
					{else}
						{$recentAuction.licitacaobase}
					{/if}
				</p>
			</small>
		</div>
		{/foreach}
	</div>
</div>


