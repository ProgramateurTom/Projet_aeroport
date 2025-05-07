<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Modification</title>
    <link href="../../structure/Fonctionalité/fonct_modification.php">
    <link rel="stylesheet" href="../Pages_css/Css_principale.css">
</head>
<body>
<hr>
<h1>Modification du compte</h1>
<hr>

<form action="Page_de_modification.php" method="post">
    <p>Modifier le nom :</p>
    <input type= "text" name= "nom">
    <p>Modifier le prenom :</p>
    <input type= "text" name= "prenom">
    <p>Modifier la ville de résidence</p>
    <input type= "text" name= "ville">
    <p>Modifier le mot de passe :</p>
    <input type= "password" name= "mot_de_passe">
    <input type = "submit" name = "validation">
</form>

<a href="Page_d'acceuille.php">Je ne veux pas faire de modifications sur ce compte</a>

<a href="Page_de_réservation.php">Je veux réserver un vol</a>

<a href="Page_de_suppression.php">Je veux supprimer ce compte</a>
</body>
</html>