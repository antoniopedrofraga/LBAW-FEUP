<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 05:02:16
         compiled from "/opt/lbaw/lbaw1512/public_html/proto/templates/admin/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:673021415575103c96a1d36-62942122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb7891b4e3a8726f173bdb3414e709e3935f6f6c' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/proto/templates/admin/profile.tpl',
      1 => 1465268533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '673021415575103c96a1d36-62942122',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_575103c9735901_69468424',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575103c9735901_69468424')) {function content_575103c9735901_69468424($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<link href="../css/admin.css" rel="stylesheet">
<link href="../css/profile.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/custom-modal.css" />
<link rel="stylesheet" type="text/css" href="../css/create-auction.css" />
<link href="../css/hover.min.css" rel="stylesheet">

    <div class="container">
		<?php echo $_smarty_tpl->getSubTemplate ('admin/display-admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>

<script src="../js/admin/importDate.js" type="text/javascript"></script>
<script type="text/javascript" src="../daterangepicker/moment.min.js"></script>
<!-- Include Date Range Picker -->
<script type="text/javascript" src="../daterangepicker/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="../daterangepicker/daterangepicker.css" />

</body>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</html>




<?php }} ?>
