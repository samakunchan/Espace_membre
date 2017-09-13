<?php
if($_POST['pseudo'] === $donnees['pseudo']){
    header('Location: index_membre.php');
}else{
    echo "Login ou mot de passe incorrect";
}