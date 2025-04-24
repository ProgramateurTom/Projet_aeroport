<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation - <?php echo htmlspecialchars($vol['titre']); ?></title>
    <link href="../../structure/Fonctionalité/fonct_réservation.php" rel="stylesheet">
</head>
<body>

<div class="container">
    <!-- Affichage de l'affiche du film -->
    <div class="vol-info">
        <p><strong>Destination :</strong> <?php echo htmlspecialchars($vol['Destination']); ?></p>
        <p><strong>Distance :</strong> <?php echo htmlspecialchars($vol['Distance']); ?> minutes</p>
    </div>
    <!-- Formulaire de réservation -->
    <h3>Choisissez un vol :</h3>
    <form action="../../structure/Modèle/Vol.php" method="post">
        <input type="hidden" name="idvol" value="<?php echo $idvol; ?>">
        <!-- Liste des séances -->
        <?php if (!empty($seances)): ?>
        <select name="idvol" required>
            <option value="">Sélectionnez un vol</option>
            <?php foreach ($vol as $vol): ?>
            <option value="<?php echo $seance['idvol']; ?>">
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

<a href="Page d'acceuille.php">Je ne veux pas faire de réservations</a>

<a href="Page de modification.php">Je veux faire des modifications sur ce compte</a>

<a href="Page de suppression.php">Je veux supprimer ce compte</a>

</body>
</html>