<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=infos_utilisateurs;charset=utf8', 'root', '',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}catch (Exception $e){
    die('Erreur : '.$e->getMessage());
}
$bdd = new PDO('mysql:host=localhost;dbname=infos_utilisateurs;charset=utf8', 'root', '',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->prepare('SELECT pseudo, password FROM infos_membres WHERE pseudo =? ');
$reponse->execute(array($_POST['pseudo']));
while ($donnees = $reponse->fetch()){
    require 'check_connection.php';
};
