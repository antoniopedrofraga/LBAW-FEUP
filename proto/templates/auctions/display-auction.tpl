
<!-- Portfolio Item Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            {$auction.nome}
        </h1>
    </div>
</div>
<!-- /.row -->

<!-- Portfolio Item Row -->
<div class="row">

    <div class="col-md-5">
        {include file='auctions/photos/display-photos.tpl'}
    </div>

    <div class="well col-md-3 bid-well">
        <h3>Descrição breve</h3>
        <p>{$auction.descricaobreve}</p>
        <h3>Detalhes</h3>
        <small class='info'>
            <p><span class="glyphicon glyphicon-euro"></span> {if $auction.licitacaoatual > 0}{$auction.licitacaoatual}{else}{$auction.licitacaobase}{/if}</p>
            <p><span class="glyphicon glyphicon-time"></span> <span id="clock"></span></p>
        </small>

        <form class="span4 offset4 text-center">
            <input id="licitacao" type='text'placeholder="{if $auction.licitacaoatual > 0}{$auction.licitacaoatual}{else}{$auction.licitacaobase}{/if}€" {if $auctioner.nomeutilizador == $username}disabled{/if} onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 110 || event.charCode == 190">
            <button id='licitar' type="button" class="btn btn-warning btn-lg round bid-btn" disabled>Licitar!</button>
        </form>
    </div>
    <div class="well col-md-3 bid-well">
        <h3>Informação</h3>
        <br>
        <p>
            <span class="pull-right ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </span>
            <span class="glyphicon glyphicon-user"></span>    <a href="../pages/feedbackpage.php?id={$auctioner.idutilizador}">{$auctioner.nomeutilizador}</a>
        </p>
        <br>
        <h3 class="text-center">{$auctionCount} {if $auctionCount == 1}leilão{else}leilões{/if}</h3>
        <br>
        <p class="text-center">
            <small>Registado desde<br>
                {$auctioner.datainscricao}</small>
            </p>
            <div class="span4 offset4 text-center">
                <button type="button" class="btn btn-warning btn-larg round bid-btn" {if $auctioner.nomeutilizador != $username} data-toggle="modal" data-target="#messageModal"{/if} {if $auctioner.nomeutilizador == $username}disabled{/if}><span class="glyphicon glyphicon-envelope"></span>  Contactar</button>
            </div>
            <br>
            <br>
            <div class="span4 offset4 text-center feedback">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="well">
                <h3>Especificações completas</h3>
                <br>
                <p>
                    {$auction.descricaocompleta}
                </p>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="messageModal" role="dialog">
    <div class="modal-dialog">
        <form name="enq" method="post" action="../actions/messages/send-message.php" novalidate>
            <div class="modal-content">
                <fieldset>
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Contactar</h4>
                    <br>
                </div>
                <div class="modal-body" style="word-wrap: break-word;">
                    <label class="icon-title" for="comment"><span class="glyphicon glyphicon-user"></span>    Destinatário</label>
                    <br>
                    <textarea name="username" class="form-control" rows="1" maxlength="30" placeholder="Username do destinatário">{$auctioner.nomeutilizador}</textarea>
                    <br>
                    <label class="icon-title" for="comment"><span class="glyphicon glyphicon-pencil"></span>    Mensagem</label>
                    <br>
                    <textarea name="message" class="form-control" rows="4" maxlength="5000" placeholder="Escreve a mensagem a enviar"></textarea>
                </div>
                <div class="modal-footer">
                    <input type="submit" value="Enviar" name="submit" id="submitButton" class="btn btn-info pull-right" title="Clica para enviar a tua mensagem!" />
                </div>
            </fieldset>
        </div>

    </div>
</div>

<script src="../lib/countdown-master/src/countdown.js"></script>
<script src="../lib/star-rating/js/star-rating.js" type="text/javascript"></script>
<script type="text/javascript">
    var sameuser = '{$auctioner.nomeutilizador}' == '{$username}';
    var idcliente = '{$user.idutilizador}';
    var bid = {if $auction.licitacaoatual > 0}{$auction.licitacaoatual}{else}{$auction.licitacaobase}{/if};
    var username = '{$username}';
    var auctionid = {$auction.idleilao};
    var datafinal = '{$auction.datafinal}';
</script>
