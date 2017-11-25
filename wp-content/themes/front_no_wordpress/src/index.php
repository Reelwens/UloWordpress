<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Ulo — Votre nouvelle caméra de sécurité</title>
    <meta name="description" content="Ulo est une caméra de surveillance mignonne représentée par une chouette." />
    <link rel="icon" type="image/png" href="img/logo.png" sizes="64x64">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Ulo — Caméra de surveillance">
    <meta name="twitter:description" content="Ulo est une caméra de surveillance mignonne représentée par une chouette.">
    <!-- Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:image:src" content="http://image.noelshack.com/fichiers/2017/46/7/1511111565-home-header.png">

    <!-- Open Graph data -->
    <meta property="og:title" content="Ulo — Caméra de surveillance" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://image.noelshack.com/fichiers/2017/46/7/1511111565-home-header.png" />
    <meta property="og:description" content="Ulo est une caméra de surveillance mignonne représentée par une chouette." />
    <meta property="og:site_name" content="Ulo — Caméra de surveillance" />

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/app.min.css" rel="stylesheet" type="text/css" />
</head>
<body id="home">

    <div class="landing">
        <div class="container">

            <div class="menu">
                <div class="menuItem active">
                    <a href="index.php">Accueil</a>
                </div>
                <div class="menuItem">
                    <a href="features.php">Fonctionnalités</a>
                </div>
                <div class="menuItem">
                    <a href="press.php">Presse</a>
                </div>
                <div class="menuItem">
                    <a href="testimony.php">Témoignages</a>
                </div>
                <div class="menuItem">
                    <a href="testimony.php#contact">Contact</a>
                </div>
            </div>

            <h1>ULO, une chouette caméra de surveillance</h1>
            <div class="head-button"><a href="#">En savoir plus</a></div>

        </div>

        <img src="img/down-arrow.svg" alt="Descendre" class="downArrow">
    </div>

    <div class="presentation">
        <div class="container">

            <div class="title">
                <h2>Présentation</h2>
                <div class="line"></div>
            </div>

            <p class="content">Ulo est une adorable caméra de surveillance une chouette interargissant avec vous à travers l’expression de ses yeux.<br /><br />Aujourd’hui de plus en plus d’objets sont connectés, mais aucun ne connecte vraiment avec vous</p>
        </div>

        <div class="picturesPresentation">
            <img src="img/ULO-image4.jpg" alt="Présentation Ulo">
            <img src="img/ULO-image9.jpg" alt="Présentation Ulo 2">
        </div>
    </div>

    <div class="features">
        <div class="background">
            <div class="bkgTop"></div>
            <img src="img/bkgArrow.svg" alt="background">
        </div>

        <div class="floatGroup container">
            <div class="title">
                <h2>Fonctionnalités</h2>
                <div class="line"></div>
            </div>

            <div class="featuresPresentation">
                <div class="feature">
                    <img src="img/noun_192274_cc.svg" alt="Camera">
                    <h3>Surveillance</h3>
                    <p class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci laudantium quia necessitatibus aliquam repellat pariatur reiciendis. Tenetur laborum dolor obcaecati tempora. Cupiditate ducimus consequatur excepturi quo cum rerum aliquam earum</p>
                </div>

                <div class="feature">
                    <img src="img/noun_1129813_cc.svg" alt="Camera">
                    <h3>Sécurité</h3>
                    <p class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci laudantium quia necessitatibus aliquam repellat pariatur reiciendis. Tenetur laborum dolor obcaecati tempora. Cupiditate ducimus consequatur excepturi quo cum rerum aliquam earum</p>
                </div>

                <div class="feature">
                    <img src="img/noun_41030_cc.svg" alt="Camera">
                    <h3>Domotique</h3>
                    <p class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci laudantium quia necessitatibus aliquam repellat pariatur reiciendis. Tenetur laborum dolor obcaecati tempora. Cupiditate ducimus consequatur excepturi quo cum rerum aliquam earum</p>
                </div>
            </div>

            <div class="buttonContainer"><div class="button"><a href="">Découvrir</a></div></div>
        </div>
    </div>

    <div class="catchLines">
        <h3>Utilisable Partout</h3>
        <p>Elle peut être utilisée à domicile, dans un bureau, ou tout autre endroit du quotidien.<br />Il suffit de mettre sur le mur la petite magnette pour la tenir. Vous êtes rentré à la maison ou vous allez partir au boulot ?<br />C’est donc le moment d’allumer ou d’éteindre Ulo.</p>
    </div>

    <?php include('includes/footer.php') ?>
<!-- Scripts -->
<script src="js/script.js" charset="utf-8"></script>

</body>
</html>
