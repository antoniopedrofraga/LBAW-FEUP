<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 13:23:51
         compiled from "/opt/lbaw/lbaw1512/public_html/final/templates/home/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14863063835756a1fc0ddc70-94821155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba44cf24b8b5712b6b45ccdbabc458889fd67c52' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/final/templates/home/profile.tpl',
      1 => 1465297706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14863063835756a1fc0ddc70-94821155',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5756a1fc1384a3_77314212',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5756a1fc1384a3_77314212')) {function content_5756a1fc1384a3_77314212($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
