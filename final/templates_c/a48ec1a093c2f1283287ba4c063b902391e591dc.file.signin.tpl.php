<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 08:30:47
         compiled from "/opt/lbaw/lbaw1512/public_html/proto/templates/popups/signin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:626877590574f447427f3a9-57196144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a48ec1a093c2f1283287ba4c063b902391e591dc' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/proto/templates/popups/signin.tpl',
      1 => 1465280948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '626877590574f447427f3a9-57196144',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_574f4474282e80_68945789',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f4474282e80_68945789')) {function content_574f4474282e80_68945789($_smarty_tpl) {?><div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="custom-modal-container" id="custom-content">
            <h1>Registar</h1><br>
            <form action="../actions/users/register.php" method="post">
                <input name='name' placeholder='nome completo' type='text' required>
                <input name='username' placeholder='utilizador' type='text' required>
                <input data-intro="Insere um endereço de email válido." data-position="top" name='email' placeholder='e-mail' type='text' required>
                <input name='password' placeholder='password' class='alert-data' type='password' required>
                <input name='birthday' class='popup-element' type="text" placeholder='data de nascimento:' id='birthday' value="1995/08/03">
                <input type="submit" name="login" class="login custom-modal-submit" value="Concluir">
            </form>
        </div>
    </div>
</div>
<?php }} ?>
