<link href="../css/profile.css" rel="stylesheet">

<div class="row">

	<div class="col-md-3 tabs">
		<p class="lead"><span class="glyphicon glyphicon-user"></span>    {$USERNAME}</p>
		<div class="list-group">
			<a href="../pages/profile.php?id={$user.idutilizador}&tab=1" class="list-group-item {if $tabIndex == 1}active{/if}">Página de feedback</a>
			<a href="../pages/profile.php?id={$user.idutilizador}&tab=2" class="list-group-item {if $tabIndex == 2}active{/if}">Os meus leilões</a>
			<a href="../pages/profile.php?id={$user.idutilizador}&tab=3" class="list-group-item {if $tabIndex == 3}active{/if}">As minhas licitações</a>
			<a href="../pages/profile.php?id={$user.idutilizador}&tab=4" class="list-group-item {if $tabIndex == 4}active{/if}">Mensagens</a>
			<a href="../pages/profile.php?id={$user.idutilizador}&tab=5" class="list-group-item {if $tabIndex == 5}active{/if}">Desejos</a>
			<a href="../pages/profile.php?id={$user.idutilizador}&tab=6" class="list-group-item {if $tabIndex == 6}active{/if}">Configurações</a>
		</div>
	</div>

	<div class="col-md-9">
		{if $tabIndex == 1}
		<div class="row preview">
			<div class="col-md-12 col-centered">
				{include file='users/tabs/display-feedback.tpl'}
			</div>
		</div>
		{else if $tabIndex == 2}
		{include file='users/tabs/display-auctions.tpl'}
		<script src="../js/auctions/myAuctions.js"></script>
		{else if $tabIndex == 3}
		{include file='users/tabs/display-auctions.tpl'}
		<script src="../js/auctions/myBids.js"></script>
		{else if $tabIndex == 4}
		{include file='users/tabs/display-chat.tpl'}
		<script src="../js/messages/get-rcv-msgs.js"></script>
		{else if $tabIndex == 6}
		{include file='users/tabs/display-config.tpl'}
		<script src="../js/users/config.js"></script>
		{/if}
	</div>

</div>