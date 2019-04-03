<?php

// ob_start => arrete l'execution du code 
ob_start();

?>
<div class="subscribe-form">

    <h1>Inscription</h1>
    <form method="POST">
        <label for="">login</label>
        <input type="text" name="subscription" id="subLogin">
        <label for="">mail</label>
        <input type="mail" name="mail" id="subMailInput">
        <label for="pwd">password</label>
        <input type="password" name="pwd" id="subPwdInput">
        <button type="submit">inscription</button>
    </form>

    <form action="" method="POST">
        <p>Vous avez déjà un compte ?</p>
        <button type="submit" name="login" value="">Login</button>
    </form>
</div>

<!-- <a href="#">Vous avez déjà un compte</a> -->

<?php

$content = ob_get_clean();

require('template.php');
