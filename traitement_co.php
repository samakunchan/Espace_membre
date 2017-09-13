<?php
session_start();
$_SESSION['pseudo'] = $_POST['pseudo'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];
var_dump($_SESSION);
$bdd = new PDO('mysql:host=localhost;dbname=infos_utilisateurs;charset=utf8', 'root', '',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->prepare('SELECT pseudo FROM infos_membres WHERE pseudo =?');
$reponse->execute(array($_POST['pseudo']));
while ($donnees = $reponse->fetch()){
    require 'check_connection.php';
};
