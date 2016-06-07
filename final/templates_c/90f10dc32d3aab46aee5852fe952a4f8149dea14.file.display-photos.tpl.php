<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 13:19:50
         compiled from "/opt/lbaw/lbaw1512/public_html/final/templates/auctions/photos/display-photos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11481195815756add6039169-86196190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90f10dc32d3aab46aee5852fe952a4f8149dea14' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/final/templates/auctions/photos/display-photos.tpl',
      1 => 1465297706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11481195815756add6039169-86196190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'imagens' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5756add607d565_74488730',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5756add607d565_74488730')) {function content_5756add607d565_74488730($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['imagens']->value)==0) {?>
<div class="photos-carousel">
	<div class="portfolio-item">
		<img class="carousel-image" alt="" width=400 height=400 style='background: url("https://placehold.it/800x600") 50% 50% no-repeat; background-size: cover; display: block;'>
	</div>
	<div class="portfolio-item">
		<img class="carousel-image" alt="" width=400 height=400 style='background: url("https://placehold.it/800x600") 50% 50% no-repeat; background-size: cover; display: block;'>
	</div>
	<div class="portfolio-item">
		<img class="carousel-image" alt="" width=400 height=400 style='background: url("https://placehold.it/800x600") 50% 50% no-repeat; background-size: cover; display: block;'>
	</div>
	<div class="portfolio-item">
		<img class="carousel-image" alt="" width=400 height=400 style='background: url("https://placehold.it/800x600") 50% 50% no-repeat; background-size: cover; display: block;'>
	</div>
	<div class="portfolio-item">
		<img class="carousel-image" alt="" width=400 height=400 style='background: url("https://placehold.it/800x600") 50% 50% no-repeat; background-size: cover; display: block;'>
	</div>
	<div class="portfolio-item">
		<img class="carousel-image" alt="" width=400 height=400 style='background: url("https://placehold.it/800x600") 50% 50% no-repeat; background-size: cover; display: block;'>
	</div>
</div>
<?php } elseif (count($_smarty_tpl->tpl_vars['imagens']->value)==1) {?>
<div class="portfolio-item">
	<img class="carousel-image" alt="" width=400 height=400 style='background: url("<?php echo $_smarty_tpl->tpl_vars['imagens']->value[0]['link'];?>
") 50% 50% no-repeat; background-size: cover; display: block;'>
</div>
<?php } else { ?>
<div class="photos-carousel">
	<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imagens']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
	<div class="portfolio-item">
		<img class="carousel-image" alt="" width=400 height=400 style='background: url("<?php echo $_smarty_tpl->tpl_vars['img']->value['link'];?>
") 50% 50% no-repeat; background-size: cover; display: block;'>
	</div>
	<?php } ?>
</div>
<?php }?>
<?php }} ?>
