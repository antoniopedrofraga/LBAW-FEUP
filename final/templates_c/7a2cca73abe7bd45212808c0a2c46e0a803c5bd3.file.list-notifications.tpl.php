<?php /* Smarty version Smarty-3.1.15, created on 2016-06-06 23:33:10
         compiled from "/opt/lbaw/lbaw1512/public_html/proto/templates/users/list-notifications.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11279471135753dffdcd8202-06609669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a2cca73abe7bd45212808c0a2c46e0a803c5bd3' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/proto/templates/users/list-notifications.tpl',
      1 => 1465248743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11279471135753dffdcd8202-06609669',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5753dffdcdafb4_39669349',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5753dffdcdafb4_39669349')) {function content_5753dffdcdafb4_39669349($_smarty_tpl) {?><div class="notifications-body" style="margin-top: 10%">
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
