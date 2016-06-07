<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 11:50:45
         compiled from "/opt/lbaw/lbaw1512/public_html/proto/templates/popups/createAuction.tpl" */ ?>
<?php /*%%SmartyHeaderCode:446564189574f2c5cc61276-93527222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91693316ce15bbcc112c30b7a7323e7821d93ec9' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/proto/templates/popups/createAuction.tpl',
      1 => 1465293040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '446564189574f2c5cc61276-93527222',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_574f2c5cc66444_74426747',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f2c5cc66444_74426747')) {function content_574f2c5cc66444_74426747($_smarty_tpl) {?><div class="modal fade" id="create-auction-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="custom-modal-container create-auction" id="custom-content">
			<h1>Criar leilão</h1><br>
			<form id="criarleilao" name="leilao" action="../actions/upload/create-auction.php" method="post">
				<div data-intro="Introduz o nome do leilão." data-position="top">
					<textarea name='nome' class='form-control popup-element' rows='1' id='nome' placeholder="Nome do leilão" required></textarea>
				</div>
				<div data-intro="Descrição que aparecerá nas vistas simplificadas." data-position="left">
					<textarea name='descricaobreve' class='form-control popup-element' rows='2' id='descricaobreve' maxlength='300' placeholder="Breve descrição" required></textarea>
				</div>
				<div data-intro="Descrição mais detalhada que aparecerá na página do leilão." data-position="right">
					<textarea name='descricaocompleta' class='form-control popup-element' rows='4' id='descricaocompleta' maxlength='900' placeholder="Descrição completa" required></textarea>
				</div>
				<div class="form-group" data-intro="Escolhe uma marca que se adeque ao teu leilão." data-position="left">
					<h4 for="brand">Marca</h4>
					<select id="brand" name="brand" class="form-control">
					</select>
				</div>
				<div>
					<h4>Licitação base</h4>
					<input id="licitacaoBase" name="licitacaoBase" type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder"Licitação base" data-intro="Licitação base que terá que tomar um valor maior que zero." data-position="right" required>
				</div>

				<div id='block1'>
					<h4>Data de fim</h4>
					<input data-intro="A data final terá que ser uma data futura." data-position="left" name="enddate" id="end-date" class='popup-element' type="text" title="Insert a future date"/>
				</div>
				<div id='block2'>
					<h4>Carrega fotografias</h4>
					<input multiple id="images" name="images[]" type="file" accept="image/*" data-intro="Carrega até 5 fotografias por leilão" data-position="right" required>
				</div>
				<input id='create-auction' type="submit" name="create-auction" class="create-auction custom-modal-submit" value="Criar" form="criarleilao">
				<br>
				<a href"#" id='help-modal' class="pull-right">Ajuda (?)</a>
			</form>
		</div>
	</div>
</div>

<script language="JavaScript" type="text/javascript"> 
	var id = '<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
'; 
</script> 

<link href="../lib/uploadFileLib/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<script src="../lib/uploadFileLib/js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>
<script src="../lib/uploadFileLib/js/fileinput.js"></script>
<script src="../lib/uploadFileLib/js/fileinput_locale_pt.js"></script>
<script src="../js/importBd.js" type="text/javascript"></script><?php }} ?>
