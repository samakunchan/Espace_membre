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
    <h3>Page de connection</h3>
</header>
<section>
    <article>
        <form action="traitement_co.php" method="post">
            <label>Veuillez inscrire votre pseudo</label>
            <p>
                <input type="text" name="pseudo" placeholder="ex : Samakunchan">
            </p>
            <label>Mot de passe</label>
            <p>
                <input type="password" name="password">
            </p>
            <p>
                <input type="submit" value="Connection">
            </p>
        </form>
    </article>
</section>
<section id="contenu">
    <p>Formulaire pour se connecter au site</p>
</section>

</body>
</html>