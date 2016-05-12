<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="custom-modal-container" id="custom-content">
        <h1>Autenticar</h1><br>
        <form action="../actions/users/login.php" method="post" >
            <input id='login-user' type="text" name="username" placeholder="Utilizador" required>
            <input id='login-password' type="password" name="password" placeholder="Password" required>
            <input type="submit" name="login" class="login custom-modal-submit" value="Entrar">
        </form>
    </div>
</div>
</div>