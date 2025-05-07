<?php
require_once '../bdd/a__roport.sql';
require_once '../../visuelle/Pages_principales/Page de connexion.html';

if (!isset($_POST["e-mail"]) || !isset($_POST["Mdp"]) || empty($_POST["e-mail"]) || empty($_POST["Mdp"])){
    echo "C'est pas bien, vous avez laissé une case vide";
    header("Location: ../..//Pages_principales/Page_de_connexion.php");
} else {
    $utilisateurs = new Utilisateurs([
        'e-mail' => $_POST["e-mail"],
        'Mdp' => $_POST["Mdp"]
    ]);

    $utilisateursRepository = new UtilisateursRepository();
    $resultat = $utilisateursRepository->connexionUtilisateurs($utilisateurs);
    if ($resultat){
        session_start();
        $_SESSION['e-mail'] = $utilisateurs->getEmail();
        header("Location: ../../Pages_principales/visuelle/Page_d'acceuille.php");
    } else{
        session_destroy();
        header("Location: ../../Pages_principales/visuelle/Page_de_connexion.php");
    }
}