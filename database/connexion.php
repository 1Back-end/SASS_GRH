<?php
// Configuration de la base de données
$host = 'localhost'; // Adresse du serveur
$db = 'sass_grh'; // Nom de la base de données
$user = 'root'; // Nom d'utilisateur
$pass = ''; // Mot de passe

try {
    // Création de la connexion
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8"; // Data Source Name
    $connexion = new PDO($dsn, $user, $pass);
    
    // Définir le mode d'erreur PDO pour lancer des exceptions
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connexion réussie à la base de données !";
} catch (PDOException $e) {
    // Gestion des erreurs de connexion
    echo "Échec de la connexion : " . $e->getMessage();
}
?>
