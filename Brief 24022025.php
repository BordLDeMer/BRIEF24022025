<?php
// Démarre la session pour afficher un message de confirmation après l'envoi
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
</head>
<body>

    <h1 style='color:darkslateblue'>Formulaire de Contact</h1>

    <?php
    // Affiche le message de confirmation si la session est définie
    if (isset($_SESSION['message'])) {
        echo "<p style='color:green'>" . $_SESSION['message'] . "</p>";

    // Effacer le message après l'affichage
        unset($_SESSION['message']);
    }
    ?>

    <form style='border-style: solid', action="Brief%2024022025%20-%20Affichage.php" method="POST">
        <br>
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Envoyer">
    </form>

</body>
</html>
