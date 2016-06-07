<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 05:02:58
         compiled from "/opt/lbaw/lbaw1512/public_html/proto/templates/admin/popups/banishUser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3558227935755a77765dce8-03887605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fec69fa35eda986e3ff9e44752aa98c08ee886f' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/proto/templates/admin/popups/banishUser.tpl',
      1 => 1465268533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3558227935755a77765dce8-03887605',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5755a777661052_72123777',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5755a777661052_72123777')) {function content_5755a777661052_72123777($_smarty_tpl) {?>
    <div class="modal fade" id="banish-user-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="custom-modal-container" id="custom-content2">
            <form action="../actions/admin/banish.php" method="post" enctype="multipart/form-data" >
                <input id="id-user-banish" type ="hidden" name="id-user-banish">
                
                <div>
                    <h1>Escolheu banir o utilizador: <input id="username-banish" type="text" class="form-control" name="username-banish" readonly></h1><br>
                </div>               
                
                <div>
					<textarea name='reasonbanned' class='form-control popup-element' rows='2' id='reasonbanned' maxlength='300' placeholder="Motivo" required></textarea>
				</div>
                <div id='block1'>
						<h4>Data de fim</h4>
						<input name="enddate" id="end-date-banish" class='popup-element' type="text" title="Insert a future date"/>
				</div>
                <input type="submit" name="banish" class="login custom-modal-submit" value="Banir">
            </form>
            </div>
        </div>
    </div>
<?php }} ?>
