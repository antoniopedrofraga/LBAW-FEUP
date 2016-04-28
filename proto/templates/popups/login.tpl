<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="loginmodal-container" id="login-content">
        <h1>Autenticar</h1><br>
        <form action="../actions/users/login.php" method="post" >
            <input id='login-user' type="text" name="username" placeholder="Utilizador">
            <input id='login-password' type="password" name="password" placeholder="Password">
            <input type="submit" name="login" class="login loginmodal-submit" id="submit-login" value="Entrar">
        </form>
    </div>
</div>
</div>