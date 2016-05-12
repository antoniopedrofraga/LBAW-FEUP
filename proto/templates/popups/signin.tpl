<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="custom-modal-container" id="custom-content">
            <h1>Registar</h1><br>
            <form action="../actions/users/register.php" method="post">
                <input name='name' placeholder='nome completo' type='text' required>
                <input name='username' placeholder='utilizador' type='text' required>
                <input name='email' placeholder='e-mail' type='text' required>
                <input name='password' placeholder='password' class='alert-data' type='password' required>
                <input name='birthday' class='popup-element' type="text" placeholder='data de nascimento:' id='birthday' value="1995/08/03">
                <input type="submit" name="login" class="login custom-modal-submit" value="Concluir">
            </form>
        </div>
    </div>
</div>