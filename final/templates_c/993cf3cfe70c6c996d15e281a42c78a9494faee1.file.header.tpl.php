<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 13:08:45
         compiled from "/opt/lbaw/lbaw1512/public_html/final/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20977836765756a1cb9dc5f9-81163923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '993cf3cfe70c6c996d15e281a42c78a9494faee1' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/final/templates/common/header.tpl',
      1 => 1465297706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20977836765756a1cb9dc5f9-81163923',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5756a1cba4ade6_99869403',
  'variables' => 
  array (
    'USERNAME' => 0,
    'ERROR_MESSAGES' => 0,
    'error' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5756a1cba4ade6_99869403')) {function content_5756a1cba4ade6_99869403($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AutoLeilões</title>

  <link href="../css/navigation-bar.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="../lib/chardin.js/chardinjs.css" rel="stylesheet">
  <script src="../lib/chardin.js/chardinjs.min.js"></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  

</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <!--<a href="#" class="pull-left" id="logo"><img src="../images/logo.png"></a>-->
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../pages/home.php">AutoLeilões</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <!-- /.navbar-collapse -->
      <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
      <?php echo $_smarty_tpl->getSubTemplate ('common/logged-in.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php } else { ?>
      <?php echo $_smarty_tpl->getSubTemplate ('common/logged-out.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php }?>
    </div>
  </nav>

  <?php if (!empty($_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value)) {?>
    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
    <div class="alert alert-danger">
      <a href="#" class="close" data-dismiss="alert">&times;</a>
      <strong>Error!</strong> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
.
    </div>
    <?php } ?>
  <?php }?>

  <?php if (!empty($_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value)) {?>
    <?php  $_smarty_tpl->tpl_vars['success'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['success']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['success']->key => $_smarty_tpl->tpl_vars['success']->value) {
$_smarty_tpl->tpl_vars['success']->_loop = true;
?>
    <div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert">&times;</a>
      <strong>Success!</strong> <?php echo $_smarty_tpl->tpl_vars['success']->value;?>
.
    <?php } ?>
  </div>
  <?php }?>
<?php }} ?>
