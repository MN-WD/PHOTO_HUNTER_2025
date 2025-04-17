<?php

try {
    $connexion = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
} catch (PDOException $e) {
    // tenter de réessayer la connexion après un certain délai, par exemple
    echo $e->message;
}