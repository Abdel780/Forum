<?php

try{
    // ici je me connect à la base de données
    $mysqlClient =  new PDO('mysql:host=localhost;dbname=forum;charset=utf8', 'root');
} catch(Exception $e){
    // ici je récupère et affiche l'erreur
    die('ERREUR : ' . $e->getMessage());
}