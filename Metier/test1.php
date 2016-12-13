<?php
/**
 * Created by PhpStorm.
 * User: antho
 * Date: 13/12/2016
 * Time: 11:55
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

$reponse = $bdd->query("Select * from morceau order by titre");

while ($donnees = $reponse->fetch())
{
    // ne trouve pas la class morceau regler le robleme des namespace.
   $morceau = new \Metier\Morceau($donnees['titre'],$donnees['auteur'],$donnees['chemin'],$donnees['nbAvisFav'],$donnees['nbAvisDefav'],$donnees['nbAvisIndif'],$donnees['details'],$donnees['dureeEcoute'],$donnees['anneeParution'],$donnees['periodeMiseEnLigne']);




}

$reponse->closeCursor(); // Termine le traitement de la requête

?>