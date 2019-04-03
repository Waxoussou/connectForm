<?php
 //index en MVC = le routeur qui appelle le controleur 

//session_start => demarre une session ou ça recupère l'ancienne qui a déjà été créée
 session_start();

require_once 'controller/frontend.php';
//verifie si un compte est déjà connecté
if (isset($_SESSION['login']))
    {
    myPage();
    echo 'dejà connecté';
    } 
//sinon je vérifie les différentes conditions 
else {
    if(isset($_POST['subscription']))
    {
        register($_POST['subscription'],$_POST['mail'],$_POST['pwd']);
    }
    else if (isset($_POST['register'])) 
    {
        registerForm();   
    }
    else if(isset($_POST['Log']))
    {
        login($_POST['login'], $_POST['pwd']);
    }
    else if (isset($_POST['login'])) 
    {
        loginForm();
    } 
    else 
    {
        loginForm();
    }
}
