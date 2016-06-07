<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 13:34:14
         compiled from "/opt/lbaw/lbaw1512/public_html/final/templates/admin/popups/unBanUser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:973156315756b1364bf5c1-81456728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fddf08648a7c7da13a2cbb2974479d4bd1cbad5f' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/final/templates/admin/popups/unBanUser.tpl',
      1 => 1465297706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '973156315756b1364bf5c1-81456728',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5756b1364c0da1_41921813',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5756b1364c0da1_41921813')) {function content_5756b1364c0da1_41921813($_smarty_tpl) {?>    <div class="modal fade" id="unbanuser-user-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="custom-modal-container" id="custom-content">
            <form action="../actions/admin/unBanUser.php" method="post" enctype="multipart/form-data" >
                <input id='id-user-unBanUser' type = "hidden" name="id-user-unBanUser">
                
                <div>
                    <h1>Escolheu devolver a posição de utilizador ao utilizador banido: <input id='username-unBanUser' type="text" class="form-control" name="username-unBanUser" readonly></h1><br>
                </div> 
                
                <input type="submit" name="unBanUser" class="login custom-modal-submit" value="Deixar de estar banido">
            </form>
            </div>
        </div>
    </div><?php }} ?>
