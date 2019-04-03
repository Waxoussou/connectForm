<?php

function connect() 
{
    try {
        $bdd = new PDO('mysql:host=localhost;port=3307;dbname=formphp;charset=utf8', 'root', '');
    }
    catch(Exception $e) {
        die('Erreur : '. $e->getMessage());
    }
    return $bdd;
}

function getUser($login)
{
    $bdd = connect();
    $request = $bdd ->prepare('SELECT * FROM user where name = :name'); // le ':quelquechose' permet de changer cette information par une donnée plus tard 
    
    //execute prend en argument une clés et une valeur qui remplacera la donnée :name
    $request->execute([
        ':name' => $login
        //on peut en mettre pleins à la suite selon les besoins de la requete   
        ]);  
    $user = $request->fetch(); // renvoi le premier tuple de la requete ou false si il n'y en a pas. 
                                //donc $user renvoie un tableau avec les données que je souhaite
    return $user;
                                

}

function setUser($login, $mail, $pwd)
{
    $bdd = connect();
    $request = $bdd ->prepare('INSERT INTO user VALUES (null, :name, :mail, :pwd)');
    $request->execute([
        ':name' => $login,
        ':mail' => $mail,
        ':pwd' => password_hash($pwd, PASSWORD_DEFAULT) 
    ]);
}

function getUsers() 
{
    $bdd = connect();
    $request = $bdd->query('SELECT * FROM user');
    $users=[];
    while ($user = $request->fetch())
    {
        $users[] = $user;
    }
    return $users;
}