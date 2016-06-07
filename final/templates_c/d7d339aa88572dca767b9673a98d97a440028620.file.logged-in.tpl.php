<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 08:18:08
         compiled from "/opt/lbaw/lbaw1512/public_html/proto/templates/common/logged-in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:923726696574f2c5cbd4b95-52104097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7d339aa88572dca767b9673a98d97a440028620' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/proto/templates/common/logged-in.tpl',
      1 => 1465280285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '923726696574f2c5cbd4b95-52104097',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_574f2c5cbe0cd4_00647326',
  'variables' => 
  array (
    'USERNAME' => 0,
    'user' => 0,
    'notifCounter' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f2c5cbe0cd4_00647326')) {function content_574f2c5cbe0cd4_00647326($_smarty_tpl) {?>      <link href="../css/search.css" rel="stylesheet">

      <form class="navbar-form navbar-left searchForm" role="search">
        <div class="form-group">
          <input id="searchTextBox" type="text" class="form-control" placeholder="Pesquisa de automóveis" autocomplete="off" data-intro="Pesquisa por leilões." data-position="bottom">
          <ul class="dropdown" id="searchDropdown">
          </ul>
        </div>
      </form>

      <div class="collapse navbar-collapse user-space" id="bs-example-navbar-collapse-1" data-intro="Passa o rato por cima das ações par as conhecer." data-position="bottom">
        <ul class="nav navbar-nav">
          <li>
            <a id="username" href="../actions/users/redirectUser.php?username=<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
" title="Página do utilizador"><span class="glyphicon glyphicon-user"></span><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</a>
          </li>
          <?php if ($_smarty_tpl->tpl_vars['user']->value['tipomembro']=="Cliente") {?>
          <li>
            <a id="create-auction" class="glyphicon glyphicon-plus-sign" href="#" title="Criar leilão"></a>
          </li>
          <?php }?>
          <li>
            <a id="notifications" class="glyphicon glyphicon-bell" title="Notificações"><?php if ($_smarty_tpl->tpl_vars['notifCounter']->value>0) {?><span style="font-size:0.8em; font-family: 'Roboto'"class="badge badge-notify"><?php echo $_smarty_tpl->tpl_vars['notifCounter']->value;?>
</span><?php }?></a>
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
<?php }} ?>
