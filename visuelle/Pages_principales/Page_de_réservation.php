<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Pages_css/Css_principale.css">
    <?php
    // Vérifier si $idvol est défini, sinon initialiser avec des valeurs par défaut
    if (!isset($idvol)) {
        $idvol = array(
            'idvol' => '',
            'Destination' => '',
            'Distance' => ''
        );
    }
    ?>
    <title>Réservation - <?php echo htmlspecialchars($idvol['idvol']); ?></title>
    <link href="../../structure/Fonctionalité/fonct_réservation.php" rel="stylesheet">
    <link rel="stylesheet" href="../Page_css/Css_principale.css">
</head>
<body>

<div class="container">
    <!-- Affichage de l'affiche du film -->
    <div class="vol-info">
        <p><strong>Destination :</strong> <?php echo isset($idvol['Destination']) ? htmlspecialchars($idvol['Destination']) : ''; ?></p>
        <p><strong>Distance :</strong> <?php echo isset($idvol['Distance']) ? htmlspecialchars($idvol['Distance']) : ''; ?> minutes</p>
    </div>
    <!-- Formulaire de réservation -->
    <h3>Choisissez un vol :</h3>
    <form action="../../structure/Modèle/Vol.php" method="post">
        <input type="hidden" name="idvol" value="<?php echo $idvol; ?>">
        <!-- Liste des séances -->
        <?php if (!empty($seances)): ?>
        <select name="idvol" required>
            <option value="">Sélectionnez un vol</option>
            <?php foreach ($idvol as $vol): ?>
            <option value="<?php echo $idvol['Destination']; ?>">
                <?php echo $vol['Date_départ'] . " - " . $vol['Destination'] . " (Avion " . $vol['ref_avion'] . ")"; ?>
            </option>
            <?php endforeach; ?>
        </select>
        <br><br>
        <!-- Nombre de places à réserver -->
        <label for="NB_places">Nombre de places :</label>
        <input type="number" name="NB_places" min="1" required>

        <br><br>
        <!-- Bouton de soumission -->
        <input type="submit" value="Réserver">
        <?php else: ?>
        <p>Aucun vol disponnible pour cette destination</p>
        <?php endif; ?>
    </form>
</div>

<a href="Page_d'acceuille.php">Je ne veux pas faire de réservations</a>

<a href="Page_de_modification.php">Je veux faire des modifications sur ce compte</a>

<a href="Page_de_suppression.php">Je veux supprimer ce compte</a>

</body>
</html>