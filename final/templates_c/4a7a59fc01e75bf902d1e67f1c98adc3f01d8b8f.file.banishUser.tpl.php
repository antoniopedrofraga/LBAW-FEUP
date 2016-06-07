<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 13:34:14
         compiled from "/opt/lbaw/lbaw1512/public_html/final/templates/admin/popups/banishUser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3636499745756b1364bc476-19919604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a7a59fc01e75bf902d1e67f1c98adc3f01d8b8f' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/final/templates/admin/popups/banishUser.tpl',
      1 => 1465297706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3636499745756b1364bc476-19919604',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5756b1364bdbb8_30892855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5756b1364bdbb8_30892855')) {function content_5756b1364bdbb8_30892855($_smarty_tpl) {?>
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
