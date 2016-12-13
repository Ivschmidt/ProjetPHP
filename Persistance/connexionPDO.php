<?php
/**
 * Created by PhpStorm.
 * User: antho
 * Date: 12/12/2016
 * Time: 22:00
 */
    $mySqlUser = "anbrousse1";
    $mySqlPassWord = "11/05/1997";
    $dataBase = "musique";
    $dataError = array();

    try{
        $bdd = new PDO('mysql:host=localhost;dbname='.$dataBase,$mySqlUser,$mySqlPassWord);
    }catch(PDOException $e){
        $dataError["connexion"] = "erreur de connexion à la base de données.";
        die();
    }
?>