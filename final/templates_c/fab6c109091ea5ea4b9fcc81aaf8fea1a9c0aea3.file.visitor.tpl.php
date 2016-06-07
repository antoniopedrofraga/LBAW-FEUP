<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 13:08:45
         compiled from "/opt/lbaw/lbaw1512/public_html/final/templates/visitor/visitor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9712143655756a1cb93a603-19329800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fab6c109091ea5ea4b9fcc81aaf8fea1a9c0aea3' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/final/templates/visitor/visitor.tpl',
      1 => 1465297706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9712143655756a1cb93a603-19329800',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5756a1cb9d66b5_83776195',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5756a1cb9d66b5_83776195')) {function content_5756a1cb9d66b5_83776195($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	
    <!-- login and signin script -->
    <script src="../js/visitor.js"></script>
    <script type="text/javascript" src="../daterangepicker/moment.min.js"></script>
    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="../daterangepicker/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="../daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="../css/custom-modal.css" />
    <link rel="stylesheet" type="text/css" href="../css/visitor.css" />

<?php echo $_smarty_tpl->getSubTemplate ('popups/login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('popups/signin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>


</html><?php }} ?>
