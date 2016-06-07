<link href="../css/feedback.css" rel="stylesheet">

<div class="thumbnail">
	<div class="caption-full">
		<h2>
			<p><span class="glyphicon glyphicon-user"></span>    {$user.nomeutilizador}</p>
		</h2>
		<br>
		<h4>
			<p>Descrição</p>
		</h4>

		<p><span class="text-muted">{if $user.descricaomembro != null}{$user.descricaomembro}{else}Este utilizador ainda não definiu uma descrição{/if}</span></p>
	</div>
	<div class="ratings ratings-size">
		<p class="pull-right">3 críticas</p>
		<p>
			<span class="glyphicon glyphicon-star"></span>
			<span class="glyphicon glyphicon-star"></span>
			<span class="glyphicon glyphicon-star"></span>
			<span class="glyphicon glyphicon-star-empty"></span>
			<span class="glyphicon glyphicon-star-empty"></span>
			3.0
		</p>
	</div>
</div>

<!-- Centered Tabs -->
<ul class="nav nav-tabs nav-justified">
	<li class="active"><a href="#">Todos os feedbacks</a></li>
	<li><a href="#">De vendedores</a></li>
	<li><a href="#">De compradores</a></li>
	<li><a href="#">Leilões</a></li>
</ul>
<div class="well col-center">

	<div class="row">
		<div class="col-md-12">
			<span class="glyphicon glyphicon-star"></span>
			<span class="glyphicon glyphicon-star"></span>
			<span class="glyphicon glyphicon-star"></span>
			<span class="glyphicon glyphicon-star"></span>
			<span class="glyphicon glyphicon-star-empty"></span>
			Cliente 1
			<span class="pull-right">há 10 dias</span>
			<p>Produto excelente!</p>
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-md-12">
			<span class="glyphicon glyphicon-star"></span>
			<span class="glyphicon glyphicon-star"></span>
			<span class="glyphicon glyphicon-star-empty"></span>
			<span class="glyphicon glyphicon-star-empty"></span>
			<span class="glyphicon glyphicon-star-empty"></span>
			Cliente 2
			<span class="pull-right">há 12 dias</span>
			<p>Não estou muito satisfeito...</p>
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-md-12">
			<span class="glyphicon glyphicon-star"></span>
			<span class="glyphicon glyphicon-star"></span>
			<span class="glyphicon glyphicon-star"></span>
			<span class="glyphicon glyphicon-star-empty"></span>
			<span class="glyphicon glyphicon-star-empty"></span>
			Cliente 3
			<span class="pull-right">há 15 dias</span>
			<p>Poderia ter mais consideração por quem licita, não responde com frequência a mensagens privadas.</p>
		</div>
	</div>

</div>