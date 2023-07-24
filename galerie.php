<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:ital,wght@0,400;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/nav.css">
    <script src="animation.js" defer></script>
    <script src="index.js" defer></script>
    <title>Orgris_Draw - Galerie</title>
</head>
    <body>
    <?php include_once('header.php'); ?>

    <main>
        <section class="titre_galerie">
            <h1 class="hidden">Galerie</h1>
            <p>Ici vous trouverez quelque-unes de mes réalisations<br>Faites le choix du style pour votre futur projet</p>
        </section>

        <section class="portfolio-section-photo ">
            <h2>Stylisé</h2>
            <div class="grid-portrait">
                <div class="image hidden">
                    <img src="images/p1 2023.jpg" alt="portrait stylisé">   
                </div>
                <div class="image hidden">
                    <img src="images/portait_1.png" alt="portrait stylisé">  
                </div>
                <div class="image hidden">
                    <img src="images/portrai_6.png" alt="portrait stylisé"> 
                </div>
                <div class="image hidden">
                    <img src="images/portrait_4.jpg" alt="portrait stylisé"> 
                </div>
            </div>
            <div class="zone"></div>
            <h2>Colorée</h2>
            <div class="grid-couleur">
                <div class="image hidden">
                    <img src="images/couleur_1.png" alt=""> 
                </div>
                <div class="image hidden">
                <img src="images/galaxyy.jpg" alt="">
                 </div>
                 <div class="image hidden">
                <img src="images/couleur_2.jpg" alt="">
                </div>
                <div class="image hidden">
                <img src="images/image2.png" alt="">
                </div>
            </div>
            
            <div class="zone"></div>
            <h2>Traditionelle</h2>
            <div class="grid-tradi">
                <div class="image hidden">
                    <img src="images/tradi_1.jpg" alt="">
                </div>
                <div class="image hidden">
                    <img src="images/tradi_2.jpg" alt="">
                </div>
                <div class="image hidden">
                    <img src="images/tradi_4.jpg" alt="">
                </div>
                <div class="image hidden">
                    <img src="images/tradi_3.jpg" alt="">
                </div>
            </div>
    </section>
    </main>
    <?php include_once('footer.php'); ?>
    </body>
</html>