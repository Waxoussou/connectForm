<?php

ob_start();

?>

<h3> les informations que vous avez rentrés ne sont pas bonnes !</h3>
<h4>vous pouvez réessayer de vous connecter ou inscrivez vous si vous n'avez pas de compte</h4>
<form action="" method="post">
    <button type="submit" name="register">inscription</button>
</form>

<?php

$warning = ob_get_clean();


