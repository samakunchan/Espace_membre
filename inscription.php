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
    <h3>Page principale</h3>
</header>
<section>
    <article>
        <form action="traitement_post.php" method="post">
            <label>Veuillez inscrire votre pseudo</label>
            <p>
                <input type="text" name="pseudo" placeholder="ex : Samakunchan">
            </p>
            <label>Veuillez indiquer votre adresse mail</label>
            <p>
                <input type="email" name="email">
            </p>
            <label>Mot de passe</label>
            <p>
                <input type="password" name="password">
            </p>
            <label>Confirmer le mot de passe</label>
            <p>
                <input type="password" name="password">
            </p>
            <p>
                <input type="submit" value="Inscription">
            </p>
        </form>
    </article>
</section>
<section id="contenu">
    <p>Formulaire d'inscription</p>
    <p><?php require 'check_pseudo.php';?></p>
</section>

</body>
</html>