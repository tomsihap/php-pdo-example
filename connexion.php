<?php

/**
 * Import des dépendances Composer
 */
require_once __DIR__ . '/vendor/autoload.php';

/**
 * Import de la connexion à la BDD
 */
require_once 'db.php';

/**
 * Requête: vérifier si l'user existe en BDD
 */
$request = 'SELECT * FROM users WHERE email = :email AND password = :password';

$response = $bdd->prepare($request);

$result = $response->execute([
    'email'     => $_POST['email'],
    'password'  => $_POST['password'],
]);

// Si oui :
if ($result) {
    Header('Location: adminPanel.php');
}
else {
    echo "L'utilisateur n'existe pas.";
}



?>
