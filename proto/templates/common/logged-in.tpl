      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input id="input" type="text" class="form-control" placeholder="Pesquisa de automóveis">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
      </form>

      <div class="collapse navbar-collapse user-space" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li>
            <a href="#"><span class="glyphicon glyphicon-user"></span>  {$USERNAME}</a>
          </li>
          <li>
            <a id="create-auction" class="glyphicon glyphicon-plus-sign" href="#"></a>
          </li>
          <li>
            <a class="glyphicon glyphicon-bell" href="#"></a>
          </li>
          <li>
          <a class="glyphicon glyphicon-off" href="../actions/users/logout.php"></a>
          </li>
        </ul>
      </div>