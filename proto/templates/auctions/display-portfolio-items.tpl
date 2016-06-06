		<div class="portfolio-item hvr-grow">
			<a href="../pages/auction.php?id={$auction.idleilao}">
				<img class="carousel-image" alt="" width=200 height=200 style='background: url("{if $auction.imagelink == null }https://placehold.it/800x600{else}{$auction.imagelink}{/if}") 50% 50% no-repeat; background-size: cover;'>
			</a>
			<h3>
				<a href="../pages/auction.php?id={$auction.idleilao}" class="main-color auction-name">{$auction.nome}</a>
			</h3>
			<small>
				<p><span class="glyphicon glyphicon-euro"></span>
					{if $auction.licitacaoatual > 0}
					{$auction.licitacaoatual}
					{else}
					{$auction.licitacaobase}
					{/if}
				</p>
			</small>
		</div>