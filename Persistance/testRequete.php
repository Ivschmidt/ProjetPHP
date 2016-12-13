<?php
/**
 * Created by PhpStorm.
 * User: antho
 * Date: 13/12/2016
 * Time: 11:14
 */

require_once('connexionPDO.php');
$reponse = $bdd->query("Select * from morceau order by titre");

while ($donnees = $reponse->fetch())
{
    $chanteur = $donnees['auteur'];
    $reponse2 = $bdd->prepare('Select * from auteur where identifiant =?');
    $reponse2->execute(array($chanteur));
    $donnees2 = $reponse2->fetch();
    echo "chanson : ";
    echo $donnees['titre'];
    echo" chanteur : ";
    echo $donnees2['prenom'];
    echo " ";
    echo $donnees2['nom'];
    echo " ";
    echo $donnees['details'];
    echo "<br/>";




}

$reponse->closeCursor(); // Termine le traitement de la requête


?>