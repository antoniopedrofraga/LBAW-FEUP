<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 13:34:10
         compiled from "/opt/lbaw/lbaw1512/public_html/final/templates/admin/popups/deleteAuction.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15368472005756b1323af488-61621979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b1d48fa55480c620add6cbb251d23259da98db7' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/final/templates/admin/popups/deleteAuction.tpl',
      1 => 1465297706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15368472005756b1323af488-61621979',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5756b1323b1877_12715772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5756b1323b1877_12715772')) {function content_5756b1323b1877_12715772($_smarty_tpl) {?>    <div class="modal fade" id="deleteAuction-user-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
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
