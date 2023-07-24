<!----- Verification des champs du Formulaire ----->
<?php session_start(); ?>
<?php 

    $postdata = $_POST;

    if (
        (!isset($postdata['email']) || !filter_var($postdata['email'], FILTER_VALIDATE_EMAIL))
    ||  (!isset($postdata['textarea']) || empty($postdata['textarea']))
    ||  (!isset($postdata['prenom']) || empty($postdata['prenom']))
    ||  (!isset($postdata['nom']) || empty($postdata['nom'])) 
        
        )
    
    {
        
        echo ("Tous les champs doivent être remplis pour soumettre votre demande.");
        header("Location: contact.php");
        exit;
    }

    $email = $postdata['email'];
    $textarea = $postdata['textarea'];
    $prenom = $postdata['prenom'];
    $nom = $postdata['nom'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/submit.css" rel="stylesheet">
    <title>Orgris_Draw - Message reçu</title>
</head>
<body>
    <?php include_once('header.php'); ?>

    <main>
        <div class="submit_content">
            <h1>Message bien reçu !</h1>

            <div class="submit_content-recap">
                <div class="recap-content">
                    <h5>Rappel de vos informations</h5>
                    <p><b>Email</b> : <?php echo($email)?>
                    <p><b>Nom</b> : <?php echo strip_tags($nom)?>
                    <p><b>Prenom</b> : <?php echo strip_tags($prenom) ?>
                    <p><b>Message</b> : <?php echo  strip_tags($textarea) ?>        
                </div>
             </div>
             <a class="cta" href="index.php">Revenir à l'accueil</a>
        </div> 





    <?php include_once('footer.php'); ?>
</body>
</html>