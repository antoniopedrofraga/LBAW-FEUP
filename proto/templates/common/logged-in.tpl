      <link href="../css/search.css" rel="stylesheet">

      <form class="navbar-form navbar-left searchForm" role="search">
        <div class="form-group">
          <input id="searchTextBox" type="text" class="form-control" placeholder="Pesquisa de automóveis" autocomplete="off">
          <ul class="dropdown" id="searchDropdown">
          </ul>
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
      </form>

      <div class="collapse navbar-collapse user-space" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li>
            <a id="username" href="#"><span class="glyphicon glyphicon-user"></span> {$USERNAME}</a>
          </li>
          <li>
            <a id="create-auction" class="glyphicon glyphicon-plus-sign" href="#"></a>
          </li>
          <li>
            <a id="notifications" class="glyphicon glyphicon-bell" href="#"></a>
          </li>
          <li>
            <a class="glyphicon glyphicon-off" href="../actions/users/logout.php"></a>
          </li>
        </ul>
      </div>

      <script src="../js/navbar/search.js"></script>
      <script src="../js/navbar/notifications.js"></script>