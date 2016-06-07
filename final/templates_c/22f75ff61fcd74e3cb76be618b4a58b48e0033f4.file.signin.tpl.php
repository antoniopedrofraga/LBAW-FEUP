<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 13:08:45
         compiled from "/opt/lbaw/lbaw1512/public_html/final/templates/popups/signin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12566604065756a1cba5c5e9-40880513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22f75ff61fcd74e3cb76be618b4a58b48e0033f4' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/final/templates/popups/signin.tpl',
      1 => 1465297706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12566604065756a1cba5c5e9-40880513',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5756a1cba5fd51_41069061',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5756a1cba5fd51_41069061')) {function content_5756a1cba5fd51_41069061($_smarty_tpl) {?><div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog">
        <div class="custom-modal-container">
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
