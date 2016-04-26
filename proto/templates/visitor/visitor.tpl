{include file='common/header.tpl'}
    <body>
    
        <!-- Put your page content here! -->

        <!-- jQuery -->
        <script src="../js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <script src="../sweetalert/dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="../sweetalert/dist/sweetalert.css">

        <!-- login and signin script -->
        <script src="../js/index.js"></script>

        <script type="text/javascript" src="../daterangepicker/moment.min.js"></script>
        <!-- Include Date Range Picker -->
        <script type="text/javascript" src="../daterangepicker/daterangepicker.js"></script>
        <link rel="stylesheet" type="text/css" href="../daterangepicker/daterangepicker.css" />

    </body>


    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
        <div class="loginmodal-container" id="login-content">
            <h1>Autenticar</h1><br>
            <form>
                <input type="text" name="user" placeholder="Utilizador">
                <input type="password" name="pass" placeholder="Password">
                <input type="submit" name="login" class="login loginmodal-submit" value="Entrar">
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="loginmodal-container" id="login-content">
        <h1>Registar</h1><br>
        <form>
            <input placeholder='utilizador' type='text'>
            <input placeholder='e-mail' type='text'>
            <input placeholder='password' class='alert-data' type='password'>
            <input class='popup-element' type="text" id="birthday" placeholder='data de nascimento:' value="" />
            <input type="submit" name="login" class="login loginmodal-submit" value="Concluir">
        </form>
    </div>
</div>
</div>


</html>