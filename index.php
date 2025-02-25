<?php
// Démarre la session pour gérer les messages de confirmation
session_start();

// Lire le contenu du fichier messages.txt
$file = 'messages.txt';
if (file_exists($file)) {
    $messages = file_get_contents($file);
} else {
    $messages = "Aucun message n'a été enregistré.";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages enregistrés</title>
</head>
<body>

    <h1>Messages enregistrés</h1>

    <pre style='border-style: solid'><?php echo $messages; ?></pre>

    <a href="Brief%2024022025.php">Retour au formulaire</a>

</body>
</html>
