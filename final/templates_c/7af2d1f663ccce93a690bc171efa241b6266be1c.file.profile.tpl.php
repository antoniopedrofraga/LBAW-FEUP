<?php /* Smarty version Smarty-3.1.15, created on 2016-06-03 18:10:54
         compiled from "/opt/lbaw/lbaw1512/public_html/proto/templates/home/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192707595750d98536aa16-83206291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7af2d1f663ccce93a690bc171efa241b6266be1c' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/proto/templates/home/profile.tpl',
      1 => 1464970249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192707595750d98536aa16-83206291',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5750d985413404_80945846',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5750d985413404_80945846')) {function content_5750d985413404_80945846($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="../css/custom-modal.css" />
<link rel="stylesheet" type="text/css" href="../css/create-auction.css" />
<link href="../css/hover.min.css" rel="stylesheet">

<div class="container">
	<?php echo $_smarty_tpl->getSubTemplate ('users/display-profile.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<?php echo $_smarty_tpl->getSubTemplate ('popups/createAuction.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script type="text/javascript" src="../daterangepicker/moment.min.js"></script>
<!-- Include Date Range Picker -->
<script type="text/javascript" src="../daterangepicker/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="../daterangepicker/daterangepicker.css" />

</body>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</html><?php }} ?>
