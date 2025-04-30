<?php
require_once '../bdd/a__roport.sql';
require_once '../Modèle/Utilisateurs.php';
require_once '../../visuelle/Pages principales/Page inscription.php';

if (empty($_POST["Nom"]) || empty($_POST["Prenom"]) || empty($_POST["e-mail"]) || empty($_POST["Mdp"]) || empty($_POST["Ville de résidence"]) || empty($_POST["Date de naissance"])) {
    echo "C'est pas bien ...";
    header("Location: ../../visuelle/inscription.html");
    exit();
} else {
    $client = new Utilisateurs([
        'Nom' => $_POST['Nom'],
        'Prenom' => $_POST["Prenom"],
        'e-mail' => $_POST['e-mail'],
        'Mdp' => password_hash($_POST['Mdp'], PASSWORD_DEFAULT),
        'Ville de résidence' => $_POST["Ville de résidence"],
        'Date de naissance' => $_POST['Date de naissance'],
        'role' => "Client",
    ]);
    $UtilisateursRepository = new UtilisateursRepository();
    $resultat = $UtilisateursRepository->ajoutUtilisateurs($client);
    if ($resultat) {
        header("Location: ../../visuelle/connexion.php");
    } else {
        header("Location: ../../visuelle/inscription.php");
    }
}
?>