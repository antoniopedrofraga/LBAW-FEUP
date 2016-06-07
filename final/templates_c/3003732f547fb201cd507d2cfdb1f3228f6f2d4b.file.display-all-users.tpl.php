<?php /* Smarty version Smarty-3.1.15, created on 2016-06-04 22:37:20
         compiled from "/opt/lbaw/lbaw1512/public_html/proto/templates/admin/display-all-users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1977406813575147e74795c0-49897046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3003732f547fb201cd507d2cfdb1f3228f6f2d4b' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/proto/templates/admin/display-all-users.tpl',
      1 => 1465072609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1977406813575147e74795c0-49897046',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_575147e747c111_11347772',
  'variables' => 
  array (
    'groupOfUsers' => 0,
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575147e747c111_11347772')) {function content_575147e747c111_11347772($_smarty_tpl) {?><link href="../css/search.css" rel="stylesheet">
<div class="row">
			<div class="col-md-3">
				<p class="lead"><span class="glyphicon glyphicon-cog"></span>    Administrador</p>
				<div class="list-group">
					<a href="#" class="list-group-item">Leilões</a>
					<a href="#" class="list-group-item active">Utilizadores</a>
					<a href="#" class="list-group-item">Mensagens</a>
				</div>
			</div>
			<div class="col-md-9 well">
				<div class="form-group">
					<input id="searchTextBoxUsers" type="text" class="form-control" placeholder="Pesquisar utilizadores" autocomplete="off">
					<ul class="dropdown" id="searchDropdown">
					</ul>
				</div>
				<div class="form-group">
                <?php  $_smarty_tpl->tpl_vars['users'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['users']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groupOfUsers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['users']->key => $_smarty_tpl->tpl_vars['users']->value) {
$_smarty_tpl->tpl_vars['users']->_loop = true;
?>
                
					<label class="icon-title letter" for="comment"><?php echo $_smarty_tpl->tpl_vars['users']->value['letter'];?>
</label>
					<div class="well">
                        <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['user']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['user']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
 $_smarty_tpl->tpl_vars['user']->iteration++;
 $_smarty_tpl->tpl_vars['user']->last = $_smarty_tpl->tpl_vars['user']->iteration === $_smarty_tpl->tpl_vars['user']->total;
?>
                        
						<div class="row">
							<div class="col-md-12">
								<span><a class="usr-name vcenter" href="../pages/profile.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['idutilizador'];?>
&tab=6"><?php echo $_smarty_tpl->tpl_vars['user']->value['nomeutilizador'];?>
</a></span>
								<div class="col-md-2 pull-right">
									<div class="col-md-6">
										<button type="button" class="btn btn-warning round usr-btn"><span class="glyphicon glyphicon-asterisk"></span></button>
									</div>
									<div class="col-md-6">
										<button type="button" class="btn btn-warning round usr-btn"><span class="glyphicon glyphicon-trash"></span></button>
									</div>
								</div>
							</div>                        
						</div>
                        <?php if (!$_smarty_tpl->tpl_vars['user']->last) {?>
                        <hr>
                        <?php }?>
                        
                        <?php } ?>
					</div>
                    
				<?php } ?>
				</div>
			</div>
</div>





<!--div class="panel-body">
	<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['user']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['user']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
 $_smarty_tpl->tpl_vars['user']->iteration++;
 $_smarty_tpl->tpl_vars['user']->last = $_smarty_tpl->tpl_vars['user']->iteration === $_smarty_tpl->tpl_vars['user']->total;
?>
    <div class="">
			
		</div>
	<?php } ?>
</div--><?php }} ?>
