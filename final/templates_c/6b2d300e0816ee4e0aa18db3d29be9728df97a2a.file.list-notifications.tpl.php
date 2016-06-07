<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 14:47:36
         compiled from "/opt/lbaw/lbaw1512/public_html/final/templates/users/list-notifications.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14221320345756c26815f488-39368973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b2d300e0816ee4e0aa18db3d29be9728df97a2a' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/final/templates/users/list-notifications.tpl',
      1 => 1465297706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14221320345756c26815f488-39368973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5756c26816d8c8_70894920',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5756c26816d8c8_70894920')) {function content_5756c26816d8c8_70894920($_smarty_tpl) {?><div class="notifications-body" style="margin-top: 10%">
  <h2>Notificações</h2>
  <div class="list-group notifications-container" style="margin-top: 5%">
    <a href="#" class="list-group-item active">
      <h4 class="list-group-item-heading" style="text-align: center">Não tem notificações</h4>
    </a>
  </div>
</div>
<script type="text/javascript"> 
    var userid = <?php echo $_smarty_tpl->tpl_vars['user']->value['idutilizador'];?>
;
</script>
<script src="../js/all-notifications.js"></script>
<?php }} ?>
