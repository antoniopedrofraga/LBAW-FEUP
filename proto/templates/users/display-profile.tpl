<link href="../css/profile.css" rel="stylesheet">

<div class="row">

	<div class="col-md-3">
		<p class="lead"><span class="glyphicon glyphicon-user"></span>    {$USERNAME}</p>
		<div class="list-group">
			<a href="#" class="list-group-item {if tabIndex == 0}active{/if}">Página de feedback</a>
			<a href="#" class="list-group-item {if tabIndex == 1}active{/if}">Os meus leilões</a>
			<a href="#" class="list-group-item {if tabIndex == 2}active{/if}">As minhas licitações</a>
			<a href="#" class="list-group-item {if tabIndex == 3}active{/if}">Mensagens</a>
			<a href="#" class="list-group-item {if tabIndex == 4}active{/if}">Desejos</a>
			<a href="#" class="list-group-item {if tabIndex == 5}active{/if}">Configurações</a>
		</div>
	</div>

	<div class="col-md-9">
		{if tabIndex == 0}
			{include file='users/tabs/display-feedback.tpl'}
		{/if}
	</div>

</div>