<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 13:34:10
         compiled from "/opt/lbaw/lbaw1512/public_html/final/templates/admin/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13277240875756b1322e81d1-09846137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f669eea83bcf18b55510cbc61a7e5d5ebe4b4447' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/final/templates/admin/profile.tpl',
      1 => 1465297705,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13277240875756b1322e81d1-09846137',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5756b132355650_17425741',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5756b132355650_17425741')) {function content_5756b132355650_17425741($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
