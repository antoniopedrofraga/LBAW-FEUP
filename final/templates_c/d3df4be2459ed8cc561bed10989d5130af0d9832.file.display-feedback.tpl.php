<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 04:15:25
         compiled from "/opt/lbaw/lbaw1512/public_html/proto/templates/users/tabs/display-feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85216075750f8d1a42760-06832384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3df4be2459ed8cc561bed10989d5130af0d9832' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/proto/templates/users/tabs/display-feedback.tpl',
      1 => 1465265721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85216075750f8d1a42760-06832384',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5750f8d1a47b59_23673681',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5750f8d1a47b59_23673681')) {function content_5750f8d1a47b59_23673681($_smarty_tpl) {?><link href="../css/feedback.css" rel="stylesheet">

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
