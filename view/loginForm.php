<?php

// ob_start => arrete l'execution du code 
ob_start();

?>
<div class="connect-form">

    <h1>Connexion</h1>
    <form method="POST">
        <label for="login">login</label>
        <input type="text" name="login" id="logInput">
        <label for="pwd">Password</label>
        <input type="password" name="pwd" id="pwdInput">
        <button type="submit" name="Log">Connexions</button>
    </form>

    <form action="" method="POST">
        <p>vous n'avez pas encore de compte ?</p>
        <button type="submit" name="register" value="1">Inscrivez vous</button>
    </form>
    <!--<a href="index.php?register=1">inscrivez vous</a> -->

</div>

<?php

$content = ob_get_clean();

require('template.php');
