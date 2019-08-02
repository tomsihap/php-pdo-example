<?php
/**
 * Connexion à la BDD
 */
const DB_NAME = 'phpform';
const DB_HOST = '127.0.0.1';
const DB_PORT = '8889';
const DB_USER = 'root';
const DB_PSWD = 'root';

try {
    $bdd = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_HOST . ';port=' . DB_PORT, DB_USER, DB_PSWD);
} catch (PDOException $e) {
    dump($e);
}
