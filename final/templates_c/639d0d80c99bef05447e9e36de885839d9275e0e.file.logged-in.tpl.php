<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 13:19:42
         compiled from "/opt/lbaw/lbaw1512/public_html/final/templates/common/logged-in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1164847555756a1efcfb982-34089300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '639d0d80c99bef05447e9e36de885839d9275e0e' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/final/templates/common/logged-in.tpl',
      1 => 1465297706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1164847555756a1efcfb982-34089300',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5756a1efd11c38_13575974',
  'variables' => 
  array (
    'USERNAME' => 0,
    'user' => 0,
    'notifCounter' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5756a1efd11c38_13575974')) {function content_5756a1efd11c38_13575974($_smarty_tpl) {?>      <link href="../css/search.css" rel="stylesheet">

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
