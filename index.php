<?php session_start()?>
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
    <section id="principal">
        <article>
            <p>
                <a href="connection.php">
                    <button>Connection au site</button>
                </a>
            </p>
        </article>
        <article>
            <p>
                <a href="inscription.php">
                    <button>Inscription au site</button>
                </a>
            </p>
        </article>
    </section>
    <section id="contenu">
        <p>Ici on trouve la page de connection au site et le formulaire d'inscription</p>
        <?php var_dump($_SESSION)?>
    </section>

</body>
</html>