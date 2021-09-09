<?php
// PDO veut dire PHP Data Object et c'est un
// ORM (object-relational mapping) un 'programme' qui se place en interface entre PHP et la base de données relationnelle

// Connexion à la base de données
try { $bdd = new PDO('mysql:host=localhost;dbname=real_estate;charset=utf8', 'root', '');
// $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Retour d'erreur à enlever en prod !!
// $bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);   // Evite de ne renvoyer que des Strings en tableau associatif
}
// host=serveur, dbname=nom de la base, charset=type d'encodage, root'= nom d'utilisateur, ''= mot de passe
// echo "Connecté à la base";
catch (Exception $e) { echo $e->getMessage(); }
// Si le try échoue, on capture l'erreur et on l'affiche
