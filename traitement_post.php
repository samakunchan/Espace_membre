<?php
var_dump($_POST);
$bdd = new PDO('mysql:host=localhost;dbname=infos_utilisateurs;charset=utf8', 'root', '',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$req = $bdd->prepare('INSERT INTO infos_membres(pseudo, mail, password, date_inscription) VALUE (?,?,?, NOW())');
$req->execute(array($_POST['pseudo'], $_POST['email'], $_POST['password']));
header('Location: inscription.php');