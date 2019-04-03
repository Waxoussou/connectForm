<?php

require_once 'model/frontend.php';

function loginForm()
{
    require 'view/loginForm.php';
}

function warning()
{
    require 'view/badLogin.php';
    echo $warning;
}

function login($login, $pwd)
{
    $user = getUser($login);
    //var_dump($user);
    // var_dump($pwd);
    if (password_verify($pwd, $user['pwd'])) {
        $_SESSION['login'] = $user['name'];
        echo 'Vous êtes Connecté';
        myPage();
        }
        else {
            // echo 'mauvais login/password ';
            warning();
        }

    // var_dump($user);
}

function myPage()
{
    $getUsers = getUsers();
    require 'view/main.php';
}

function registerForm()
{
    require 'view/registerForm.php';
}


function register($login, $mail, $pwd)
{
    setUser($login, $mail, $pwd);
    $user = getUser($login);
    var_dump($user);
}

