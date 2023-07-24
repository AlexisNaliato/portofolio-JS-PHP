<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:ital,wght@0,400;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/contact.css">
    <link rel="stylesheet" href="styles/style.css">
    <script src="animation.js" defer></script>
    <script src="index.js" defer></script>
    
    <title> Orgris_Draw - Contact</title>
</head>
<body>
    <?php include_once('header.php'); ?>
    <main>
            <section>
                <div class="form_container">
                    <div class="showForm">
                        <button>Parlons de votre Projet !</button>
                    </div>
                    <div class="form_content hide">
                    <form action="submit-contact.php" method="post">
                        <p>Tous les champs sont obligatoire</p>
                        <label  for="nom">Nom :</label>
                            <input class="form-hide" type="text" id="nom" name="nom" placeholder="Votre nom ...">
                       
                        <label  for="prenom">Prénom :</label>
                            <input class="form-hide " type="text" id="prenom" name="prenom" placeholder="Votre prénom ...">
                        
                        <label  for="email">Email :</label>
                            <input class="form-hide " type="email" id="email" name="email" aria-describedby="email-help" placeholder="Votre email ...">

                        <label  for="textarea">Sujet :</label>     
                            <textarea class="form-hide " id="textarea" name="textarea" placeholder="Decrivez votre projet en quelques phrases"></textarea>

                        <input  class="form-hide" type="submit" value="Envoyer !">
                    </form>
                </div>
            </div>
            </section>
        </main>
    <?php include_once('footer.php'); ?>
</body>
</html>