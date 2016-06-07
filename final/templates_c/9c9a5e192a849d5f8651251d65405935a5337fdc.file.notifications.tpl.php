<?php /* Smarty version Smarty-3.1.15, created on 2016-06-06 23:29:54
         compiled from "/opt/lbaw/lbaw1512/public_html/proto/templates/home/notifications.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8896468295753dffdc24f17-92323505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c9a5e192a849d5f8651251d65405935a5337fdc' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/proto/templates/home/notifications.tpl',
      1 => 1465248589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8896468295753dffdc24f17-92323505',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5753dffdccbe50_42591399',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5753dffdccbe50_42591399')) {function content_5753dffdccbe50_42591399($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<link rel="stylesheet" type="text/css" href="../css/custom-modal.css" />
<link rel="stylesheet" type="text/css" href="../css/create-auction.css" />
<link href="../css/hover.min.css" rel="stylesheet">

  <div class="container">
    <?php echo $_smarty_tpl->getSubTemplate ('users/list-notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </div>

<?php echo $_smarty_tpl->getSubTemplate ('popups/createAuction.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script type="text/javascript" src="../daterangepicker/moment.min.js"></script>
<!-- Include Date Range Picker -->
<script type="text/javascript" src="../daterangepicker/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="../daterangepicker/daterangepicker.css" />


</body>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
