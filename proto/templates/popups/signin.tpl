<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="loginmodal-container" id="login-content">
            <h1>Registar</h1><br>
            <form action="../actions/users/register.php" method="post">
                <input name='name' placeholder='nome completo' type='text'>
                <input name='username' placeholder='utilizador' type='text'>
                <input name='email' placeholder='e-mail' type='text'>
                <input name='password' placeholder='password' class='alert-data' type='password'>
                <input name='birthday' class='popup-element' type="text" placeholder='data de nascimento:' id='birthday' value="1995/08/03" />
                <input type="submit" name="login" class="login loginmodal-submit" value="Concluir">
            </form>
        </div>
    </div>
</div>