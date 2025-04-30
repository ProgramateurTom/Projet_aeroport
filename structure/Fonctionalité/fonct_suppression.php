<?php
require_once '../bdd/a__roport.sql';
require_once '../../visuelle/Pages principales/Page de suppression.php';
require_once '../Modèle/Utilisateurs.php';

session_start();
$client = new Utilisateurs([
    "e-mail" => $_SESSION['e-mail'],
]);
$utilisateurRepository = new UtilisateursRepository();
$resultat = $utilisateurRepository->suppUtilisateurs($client);
if($resultat){
    header("Location: ../../vue/ConnexionEM.php");
    exit();
}