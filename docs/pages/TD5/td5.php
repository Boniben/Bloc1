
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <link rel="stylesheet" href="../../assets/css/TD5/td5.css">
</head>
<body>
    <?php
    // Vérifie si la variable 'message' est présente dans l'URL
    $message = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : "Message par défaut";
    ?>

    <!-- Affichage du message -->
    <h1><?php echo $message; ?></h1>

    <!-- Liens hypertextes pour afficher des messages différents -->
  
        <ul>
            <li><a href="Message.php?message=Bonjour%20le%20monde">Afficher "Bonjour le monde"</a></li>
            <li><a href="Message.php?message=Bienvenue%20en%20BTS%20SIO">Afficher "Bienvenue en BTS SIO"</a></li>
            <li><a href="Message.php?message=PHP%20est%20génial">Afficher "PHP est génial"</a></li>
        </ul>
  
</body>
</html>