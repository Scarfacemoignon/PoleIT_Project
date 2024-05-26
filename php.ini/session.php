<?php
// Démarrez la session
session_start();

// Définissez une variable de session
$_SESSION['test'] = 'Hello World';

// Affichez l'identifiant de session
echo "Session ID: " . session_id() . "<br>";

// Affichez le contenu de la variable de session
echo "Contenu de la session: " . $_SESSION['test'] . "<br>";
