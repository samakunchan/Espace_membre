<?php
if($_POST['pseudo'] === $donnees['pseudo'] && sha1($_POST['password'])  === $donnees['password']){
    session_start();
    $_SESSION['pseudo'] = $donnees['pseudo'];
    $_SESSION['password'] = $donnees['password'];
    require 'index_membre.php';
}else{
    echo "Login ou mot de passe incorrect";
}