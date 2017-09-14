<?php session_start();?>
    <!doctype html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <title>Site de Samkunchan</title>
    </head>
    <body>
    <header>
        <h1>Site de Samakunchan</h1>
        <h3>Page de deconnection</h3>
    </header>
    <section id="contenu">
        <?php
        $_SESSION = array();
        session_destroy();
        //mettre un bouton pour le retour
        ?>
        <p>Vous avez été déconnecté</p>
        <?php var_dump($_SESSION)?>
    </section>

    </body>
    </html>

