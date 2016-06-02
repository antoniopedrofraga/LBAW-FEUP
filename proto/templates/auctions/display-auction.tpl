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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
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
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta congue aliquet. Sed justo ante, egestas ac leo id, convallis eleifend urna. In rutrum felis sem, quis aliquam ante aliquet sed. Donec luctus mauris eros, vel suscipit justo vulputate ut. Nulla ultricies varius tellus. Proin vehicula lacus id semper volutpat. Aliquam porta, magna ut imperdiet ultricies, velit purus finibus mi, lobortis tristique arcu nisi id justo. Donec at pretium diam, nec aliquam ante. In egestas placerat ligula eget hendrerit. Aenean aliquam odio non nulla mattis laoreet. Cras condimentum tristique varius. Suspendisse tellus libero, feugiat vel fringilla id, faucibus in dui.
                        </p>
                        <br>
                        <p>
                            In turpis nunc, eleifend in velit id, sodales accumsan purus. Nulla vitae viverra urna. Donec viverra leo metus, vitae vehicula magna lacinia vitae. Curabitur congue rutrum risus sed ultrices. Duis dui sapien, tristique ullamcorper diam nec, interdum mollis tortor. Integer a lacinia purus. Sed ac pretium risus. Suspendisse a mi vestibulum, faucibus lectus id, scelerisque felis. Suspendisse pellentesque ligula a augue imperdiet, vel tristique urna maximus. Morbi at pellentesque ante. Curabitur tellus justo, lacinia at consequat et, facilisis vel sapien. Sed eget sagittis quam, in varius nibh. Aliquam augue ex, commodo sed ligula in, maximus blandit nibh. Proin tincidunt tristique ipsum, id rhoncus massa volutpat a. Integer aliquam finibus leo eu ultricies. In consectetur ante mi, venenatis facilisis eros cursus et.
                        </p>
                        <br>
                        <p>
                            Maecenas eu placerat leo. Sed in ipsum mollis urna euismod molestie sed at odio. Proin cursus pulvinar pellentesque. Aliquam pellentesque egestas urna, sit amet feugiat neque ornare quis. Etiam bibendum libero eget pharetra ultrices. Nam vel placerat leo. Phasellus eu risus dui. Donec fringilla massa non magna consequat, ut pretium nisi imperdiet. Proin pretium dolor a nibh auctor, molestie consequat dolor ornare.
                        </p>
                        <br>
                        <p>
                            Vestibulum tincidunt justo ac finibus accumsan. Sed hendrerit sem non congue consectetur. Phasellus a varius nisl, id accumsan enim. Etiam vel aliquet lorem. Etiam tincidunt nibh nisi, eu ornare dui vestibulum aliquet. Phasellus et sem vel leo interdum rhoncus non id nulla. Pellentesque vel magna ipsum. Nulla ullamcorper quam eget efficitur faucibus. Cras sit amet augue vel risus posuere aliquet. Quisque pulvinar erat malesuada lacus finibus, vel tincidunt turpis finibus. Nulla euismod purus a lacinia bibendum. Praesent vulputate, tortor at cursus iaculis, odio ex mattis lacus, vitae finibus ante elit ut sapien. Sed elementum quam interdum lorem vehicula dictum. Curabitur nec eros ullamcorper, tristique neque vel, posuere mi. Ut vulputate odio at porta posuere.
                        </p>
                    </div>
                </div>
            </div>
        </div>