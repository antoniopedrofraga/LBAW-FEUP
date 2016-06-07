<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 08:30:47
         compiled from "/opt/lbaw/lbaw1512/public_html/proto/templates/visitor/visitor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1545379780574f44742203b0-85689638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d8b5e356c3219ee65785eb7ba0d62d184e75ea0' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/proto/templates/visitor/visitor.tpl',
      1 => 1465281042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1545379780574f44742203b0-85689638',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_574f44742c3960_23551195',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f44742c3960_23551195')) {function content_574f44742c3960_23551195($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body>
	
    <!-- login and signin script -->
    <script src="../js/visitor.js"></script>
    <script type="text/javascript" src="../daterangepicker/moment.min.js"></script>
    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="../daterangepicker/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="../daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="../css/custom-modal.css" />
    <link rel="stylesheet" type="text/css" href="../css/visitor.css" />


</body>

<?php echo $_smarty_tpl->getSubTemplate ('popups/login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('popups/signin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<link href="../lib/chardin.js/chardinjs.css" rel="stylesheet">
<script src="../lib/chardin.js/chardinjs.min.js"></script>

</html><?php }} ?>
