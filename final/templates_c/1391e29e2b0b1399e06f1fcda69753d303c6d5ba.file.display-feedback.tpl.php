<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 13:23:52
         compiled from "/opt/lbaw/lbaw1512/public_html/final/templates/users/tabs/display-feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19297211175756a1fc1a5f86-01976761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1391e29e2b0b1399e06f1fcda69753d303c6d5ba' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/final/templates/users/tabs/display-feedback.tpl',
      1 => 1465297706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19297211175756a1fc1a5f86-01976761',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5756a1fc1b7b82_55625128',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5756a1fc1b7b82_55625128')) {function content_5756a1fc1b7b82_55625128($_smarty_tpl) {?><link href="../css/feedback.css" rel="stylesheet">

<div class="thumbnail">
	<div class="caption-full">
		<h2>
			<p><span class="glyphicon glyphicon-user"></span>    <?php echo $_smarty_tpl->tpl_vars['user']->value['nomeutilizador'];?>
</p>
		</h2>
		<h4>
			<p>Descrição</p>
		</h4>

		<p><span class="text-muted"><?php if ($_smarty_tpl->tpl_vars['user']->value['descricaomembro']!=null) {?><?php echo $_smarty_tpl->tpl_vars['user']->value['descricaomembro'];?>
<?php } else { ?>Este utilizador ainda não definiu uma descrição<?php }?></span></p>
	</div>
</div>

<!-- Centered Tabs -->
<ul class="nav nav-tabs nav-justified">
	<li class="active"><a href="#">Leilões do utilizador</a></li>
</ul>
<div class="well col-center" id ='info'>

</div>

<script src="../lib/countdown-master/src/countdown.js"></script>
<script src="../js/auctions/feedback-auctions.js"></script><?php }} ?>
