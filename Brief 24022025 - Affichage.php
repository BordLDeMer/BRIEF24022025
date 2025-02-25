<?php

// Démarre la session pour gérer les messages de confirmation
session_start();

// Vérifier que le formulaire a bien été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Sauvegarder les données dans un fichier texte
    $file = 'messages.txt';

    // Créer une chaîne contenant les informations à enregistrer
    $data = 'Nom:' . $nom . "<br> Email :" . $email ."<br> Message :" . $message . "<br><br>";

    // Ouvrir le fichier en mode ajout
    file_put_contents($file, $data, FILE_APPEND);

    // Ajouter un message de confirmation à la session
    $_SESSION['message'] = "Message envoyé !";

    // Rediriger vers la page du formulaire avec le message de confirmation
    header("Location: index.php");
    exit;
}

?>