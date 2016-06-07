<link href="../css/feedback.css" rel="stylesheet">

<div class="thumbnail">
	<div class="caption-full">
		<h2>
			<p><span class="glyphicon glyphicon-user"></span>    {$user.nomeutilizador}</p>
		</h2>
		<h4>
			<p>Descrição</p>
		</h4>

		<p><span class="text-muted">{if $user.descricaomembro != null}{$user.descricaomembro}{else}Este utilizador ainda não definiu uma descrição{/if}</span></p>
	</div>
</div>

<!-- Centered Tabs -->
<ul class="nav nav-tabs nav-justified">
	<li class="active"><a href="#">Leilões do utilizador</a></li>
</ul>
<div class="well col-center" id ='info'>

</div>

<script src="../lib/countdown-master/src/countdown.js"></script>
<script src="../js/auctions/feedback-auctions.js"></script>