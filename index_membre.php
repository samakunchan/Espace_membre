<?php
if($_SESSION['pseudo'] && $_SESSION['password'] ){
    ?>
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
            <a href="deconnection.php">
                <button>Déconnection au site</button>
            </a>
        </p>
    </article>
</section>
<section id="contenu">
    <p>Bravo, vous êtes connecté</p>
    <?php var_dump($_SESSION)?>
</section>

</body>
</html>
<?php
}else{
    header('Location: index.php');
}
?>
