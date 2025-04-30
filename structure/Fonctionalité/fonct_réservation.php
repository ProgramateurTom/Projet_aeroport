<?php
require_once '../bdd/a__roport.sql';
require_once '../../visuelle/Pages principales/Page de réservation.php';

if(empty($_POST["ref_client"]) || empty($_POST["ref_vol"])){
    echo "C'est pas bien ...";
    header("Location: ../../vue/AjoutReservationEM.php");
}else{
    // Création d'un objet Reservations
    $reservation = new Reservations(['ref_utilisateur' => $_POST['ref_utilisateur'],
        'ref_sceance' => $_POST['ref_sceance'],
    ]);
    // Initialisation du repository
    $reservationRepository = new ReservationsRepository();
    // Appel de la méthode d'ajout de réservation
    $resultat = $reservationRepository->ajouterReservation($reservation);
    if($resultat){
        header("Location: ../../visuelle/Pages principales/Page d'accueil.php");
    }else{
        header("Location: ../../visuelle/Pages principales/Page de réservation.php");
    }
}