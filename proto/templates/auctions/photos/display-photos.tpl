{if count($imagens) == 0}
<div class="photos-carousel">
	<div class="portfolio-item">
		<img class="carousel-image" alt="" width=400 height=400 style='background: url("https://placehold.it/800x600") 50% 50% no-repeat; background-size: cover;'>
	</div>
	<div class="portfolio-item">
		<img class="carousel-image" alt="" width=400 height=400 style='background: url("https://placehold.it/800x600") 50% 50% no-repeat; background-size: cover;'>
	</div>
	<div class="portfolio-item">
		<img class="carousel-image" alt="" width=400 height=400 style='background: url("https://placehold.it/800x600") 50% 50% no-repeat; background-size: cover;'>
	</div>
	<div class="portfolio-item">
		<img class="carousel-image" alt="" width=400 height=400 style='background: url("https://placehold.it/800x600") 50% 50% no-repeat; background-size: cover;'>
	</div>
	<div class="portfolio-item">
		<img class="carousel-image" alt="" width=400 height=400 style='background: url("https://placehold.it/800x600") 50% 50% no-repeat; background-size: cover;'>
	</div>
	<div class="portfolio-item">
		<img class="carousel-image" alt="" width=400 height=400 style='background: url("https://placehold.it/800x600") 50% 50% no-repeat; background-size: cover;'>
	</div>
</div>
{else if count($imagens) == 1}
<div class="portfolio-item">
	<img class="carousel-image" alt="" width=400 height=400 style='background: url("{$imagens[0].link}") 50% 50% no-repeat; background-size: cover;'>
</div>
{else}
<div class="photos-carousel">
	{foreach $imagens as $img}
	<div class="portfolio-item">
		<img class="carousel-image" alt="" width=400 height=400 style='background: url("{$img.link}") 50% 50% no-repeat; background-size: cover;'>
	</div>
	{/foreach}
</div>
{/if}
