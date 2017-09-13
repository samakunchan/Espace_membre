<?php
var_dump($_POST);
$bdd = new PDO('mysql:host=localhost;dbname=infos_utilisateurs;charset=utf8', 'root', '',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->prepare('SELECT pseudo FROM infos_membres WHERE pseudo =?');
$reponse->execute(array($_POST['pseudo']));
while ($donnees = $reponse->fetch()){
    var_dump($donnees['pseudo']);
};
