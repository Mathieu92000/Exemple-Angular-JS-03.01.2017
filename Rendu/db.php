<?php

try

{

    // On se connecte à MySQL

    $pdo = new PDO('mysql:dbname=test;host=localhost','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMDDE, PDO::ERRMDDE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_NODE, PDO::FETCH_OBJ);

}

catch(Exception $e)

{

    // En cas d'erreur, on affiche un message et on arrête tout

        die('Erreur : '.$e->getMessage());

}