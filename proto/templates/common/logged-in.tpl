      <link href="../css/search.css" rel="stylesheet">

      <form class="navbar-form navbar-left searchForm" role="search">
        <div class="form-group">
          <input id="searchTextBox" type="text" class="form-control" placeholder="Pesquisa de automóveis" autocomplete="off">
          <ul class="dropdown" id="searchDropdown">
          </ul>
        </div>
      </form>

      <div class="collapse navbar-collapse user-space" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li>
            <a id="username" href="../actions/users/redirectUser.php?username={$USERNAME}" title="Página do utilizador"><span class="glyphicon glyphicon-user"></span>{$USERNAME}</a>
          </li>
          <li>
            <a id="create-auction" class="glyphicon glyphicon-plus-sign" href="#" title="Criar leilão"></a>
          </li>
          <li>
            <a id="notifications" class="glyphicon glyphicon-bell" title="Notificações">{if $notifCounter > 0}<span style="font-size:0.8em; font-family: 'Roboto'"class="badge badge-notify">{$notifCounter}</span>{/if}</a>
          </li>
          <li>
            <a class="glyphicon glyphicon-off" href="../actions/users/logout.php" title="Sair"></a>
          </li>
        </ul>
        <ul class="dropdown" id="notificationsDropdown">
        </ul>
      </div>

      <script src="../js/navbar/search.js"></script>
      <script src="../js/navbar/notifications.js"></script>
