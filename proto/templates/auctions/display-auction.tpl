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
                <small>
                    <p><span class="glyphicon glyphicon-euro"></span> {if $auction.licitacaoatual > 0}{$auction.licitacaoatual}{else}{$auction.licitacaobase}{/if}</p>
                    <p><span class="glyphicon glyphicon-time"></span> 3 dias, 9 horas, 20 minutos</p> 
                </small>
                
                <form class="span4 offset4 text-center">
                    <input type='text' placeholder="{if $auction.licitacaoatual > 0}{$auction.licitacaoatual}{else}{$auction.licitacaobase}{/if}€">
                    <button type="button" class="btn btn-warning btn-lg round bid-btn">Licitar!</button>
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
                    <span class="glyphicon glyphicon-user"></span>    <a href="#">{$auctioner.nomeutilizador}</a>
                </p>
                <br>
                <h3 class="text-center">{$auctionCount} {if $auctionCount == 1}leilão{else}leilões{/if}</h3>
                <br>
                <p class="text-center">
                    <small>Registado desde<br>
                    {$auctioner.datainscricao}</small>
                </p>
                <div class="span4 offset4 text-center">
                    <button type="button" class="btn btn-warning btn-larg round bid-btn"><span class="glyphicon glyphicon-envelope"></span>  Contactar</button>
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