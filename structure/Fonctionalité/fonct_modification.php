<?php
require_once '../bdd/a__roport.sql';
require_once '../../visuelle/Pages principales/Page de modification.html';

if(empty($_POST["nom"]) ||
    empty($_POST["prenom"]) ||
    empty($_POST["mot_de_passe"]))
{header("Location: ../../visuelle/Page principales/Page de modification.php");}

else{
    $utilisateurs = new Utilisateurs();
    $utilisateurs->setNom($_POST["nom"]);
    $utilisateurs->setPrenom($_POST["prenom"]);
    $utilisateurs->setMotDePasse($_POST["mot_de_passe"]);

    $utilisateursRepository = new UtilisateursRepository();
    $resultat = $utilisateursRepository->modifUtilisateurs($utilisateurs);

    if($resultat == true){
        header("Location: ../vue/ConnexionEM.php");
    }else{
        header("Location: ../vue/Modification.php");
    }
}