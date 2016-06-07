<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 05:02:16
         compiled from "/opt/lbaw/lbaw1512/public_html/proto/templates/admin/popups/deleteAuction.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79697592057558e7de14129-57134376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af46a45e5f3869be464ed3a3bd0076d2d7b5f135' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/proto/templates/admin/popups/deleteAuction.tpl',
      1 => 1465268533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79697592057558e7de14129-57134376',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57558e7de15bc9_75829968',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57558e7de15bc9_75829968')) {function content_57558e7de15bc9_75829968($_smarty_tpl) {?>    <div class="modal fade" id="deleteAuction-user-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="custom-modal-container" id="custom-content">
            <form action="../actions/admin/deleteAuction.php" method="post" enctype="multipart/form-data" >
                <input id='auctionid' type = "hidden" name="auctionid">
                <input id='auctionerid' type = "hidden" name="auctionerid">
                
                <div>
                    <h1>Escolheu eliminar o leilao: <input id='nameleilao' type="text" class="form-control" name="nameleilao" readonly></h1><br>
                </div> 
                
                <input type="submit" name="delete" class="login custom-modal-submit" value="Eliminar">
            </form>
            </div>
        </div>
    </div><?php }} ?>
