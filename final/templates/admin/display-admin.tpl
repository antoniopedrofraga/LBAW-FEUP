<link href="../css/profile.css" rel="stylesheet">

<div class="row">

			<div class="col-md-3 tabs">
				<p class="lead"><span class="glyphicon glyphicon-cog"></span>    Administrador</p>
				<div class="list-group">
					<a href="../pages/admin.php?id={$user.idutilizador}&tab=1" class="list-group-item {if $tabIndex == 1}active{/if}">Leilões</a>
					<a href="../pages/admin.php?id={$user.idutilizador}&tab=2" class="list-group-item {if $tabIndex == 2}active{/if}">Utilizadores</a>
					<a href="../pages/admin.php?id={$user.idutilizador}&tab=3" class="list-group-item {if $tabIndex == 3}active{/if}">Mensagens</a>
			
				</div>
			</div>
			
			<div class="col-md-9">
				{if $tabIndex == 1}
					{include file='admin/tabs/display-auctions.tpl'}
					<script src="../js/admin/allAuctions.js"></script>
				{else if $tabIndex == 2}
					{include file='admin/tabs/display-users.tpl'}
					<script src="../js/admin/users.js"></script>
				{else if $tabIndex == 3}	
					{include file='users/tabs/display-chat.tpl'}
					<script src="../js/messages/get-rcv-msgs.js"></script>
				{/if}
			</div>
</div>