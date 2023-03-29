<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    try {
        $mail = $_POST['your-subject'] ." - ". $_POST['your-message']
        $retour = mail('eude.adrien27@gmail.com', 'Envoi depuis la page Contact', $mail, 'From: '.$_POST['your-email']);
        if ($retour)
           echo '<p>Votre message a bien été envoyé.</p>';
        } catch (Exception $e) {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
        }
    ?>
</body>
</html>