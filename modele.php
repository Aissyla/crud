<?php

function result()
{
    // On inclut la connexion à la base
    require_once('connect.php');

    session_start();

    $sql = 'SELECT * FROM `liste`';

    // On prépare la requête
    $query = $db->prepare($sql);

    // On exécute la requête
    $query->execute();

    // On stocke le résultat dans un tableau associatif
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    return $result;

    require_once('close.php');
}
