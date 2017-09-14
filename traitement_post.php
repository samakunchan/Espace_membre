<?php
if($_POST['passwordIns'] === $_POST['passwordConf']){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=infos_utilisateurs;charset=utf8', 'root', '',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }catch (Exception $e){
        die('Erreur : '.$e->getMessage());
    }
    $passwordCrypter = sha1($_POST['passwordIns']);
    $bdd = new PDO('mysql:host=localhost;dbname=infos_utilisateurs;charset=utf8', 'root', '',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $req = $bdd->prepare('INSERT INTO infos_membres(pseudo, mail, password, date_inscription) VALUE (?,?,?, NOW())');
    $req->execute(array($_POST['pseudo'], $_POST['email'], $passwordCrypter));
    require 'check_inscription.php';
}else{
    echo '<p>' . "Problème sur le mot de passe. Les deux valeurs sont différentes." . '</p>'; //MVC vue_erreur
}
//Faire le traitement email(regex)
//Faire le regex du pseudo
//check dela variable de session pour entrer sur index_membre

