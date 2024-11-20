<?php

try{

    $db = new PDO('mysql:host=localhost;dbname=resto', 'root', '');

} catch(PDOException $e){

    die('Erreur de connexion à la base de données : '.$e->getMessage());

}