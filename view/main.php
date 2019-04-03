<?php

// ob_start => arrete l'execution du code 
ob_start();

?>
<div class="main-page">

    <h1>Main Webpage</h1>
    <section>
    <h2>My Page</h2>
    <p>blablabla</p>
    </section>
<form class="no-class" action="">
    <button type="submit" name="disconnect">disconnect</button>
</form>

</div>

<ul>
<?php
//   <?= === <?php echo

foreach ($getUsers as $idUser => $user) {
    
    echo '<li>'.$user['name'].'</br>'.$user['pwd'].'</br>'.$user['mail'].'</li>';
    // echo '<li>'.$user['pwd'].'</li>';
    ?>
    <li><?= $user['mail'];?></li>
    <?php
}
var_dump($getUsers);
?>
</ul>

<?php


$content = ob_get_clean();

require('template.php');
