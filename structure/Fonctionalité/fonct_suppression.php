<?php
require_once '../bdd/a__roport.sql';
require_once '../../visuelle/Pages principales/Page de suppression.html';
require_once '../Modèle/Utilisateurs.php';

session_start();
$utilisateurs = new Utilisateurs([
    "email" => $_SESSION['email'],
]);
$utilisateurRepository = new UtilisateursRepository();

$resultat = $utilisateurRepository->suppUtilisateurs($utilisateurs);

if($resultat){
    header("Location: ../../vue/ConnexionEM.php");
    exit();
}