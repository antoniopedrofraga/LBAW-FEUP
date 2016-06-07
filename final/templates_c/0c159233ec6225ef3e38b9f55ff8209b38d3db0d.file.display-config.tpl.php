<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 14:22:14
         compiled from "/opt/lbaw/lbaw1512/public_html/final/templates/users/tabs/display-config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17109164245756a1fdec2519-67092141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c159233ec6225ef3e38b9f55ff8209b38d3db0d' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/final/templates/users/tabs/display-config.tpl',
      1 => 1465297706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17109164245756a1fdec2519-67092141',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5756a1fdf16bb6_00107016',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5756a1fdf16bb6_00107016')) {function content_5756a1fdf16bb6_00107016($_smarty_tpl) {?>
<div class="form-group">
	<label class="icon-title" for="comment"><span class="glyphicon glyphicon-pencil"></span>    Breve descrição</label>
	<br>
	<textarea data-intro="Escolhe a descrição a aparecer na tua página de feedback" data-position="right" class="form-control" rows="3" id="description" maxlength="300" placeholder="Adicione uma descrição à sua página de feedback"></textarea>
</div>
<hr>
<div class="form-group" data-intro="Escolhe as marcas a listar na página principal" data-position="bottom">
	<label class="icon-title" for="comment"><span class="glyphicon glyphicon-list"></span>    Marcas a listar na página principal</label>
	<br>
	<div id="marcas">
		<div class="row">
			<div class="col-md-3">
				<label><input type="checkbox" value="Ford">   Ford</label>
			</div>
			<div class="col-md-3">
				<label><input type="checkbox" value="Renault">   Renault</label>
			</div>
			<div class="col-md-3">
				<label><input type="checkbox" value="Seat">   Seat</label>
			</div>
			<div class="col-md-3">
				<label><input type="checkbox" value="Citroen">   Citroen</label>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<label><input type="checkbox" value="Toyota">   Toyota</label>
			</div>
			<div class="col-md-3">
				<label><input type="checkbox" value="Mercedes">   Mercedes</label>
			</div>
			<div class="col-md-3">
				<label><input type="checkbox" value="Nissan">   Nissan</label>
			</div>
		</div>
	</div>
</div>
<hr>
<hr>
<?php }} ?>
