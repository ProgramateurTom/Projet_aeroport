<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link href="../../structure/Fonctionalité/fonct_inscription.php">
</head>
<body>
<h1>Inscription</h1>
<div class="form-group">
    <label for= "Nom"><i class= "zmdi zmdi-account "></i></label>
    <input type= "text" name= "nom" id= "Nom" placeholder= "Votre nom" required/>
</div>
<div class="form-group">
    <label for= "Prenom"><i class= "zmdi zmdi-account"></i></label>
    <input type= "text" name= "prenom" id= "Prenom" placeholder= "Votre prenom" required/>
</div>

<div class="form-group">
    <label for= "e-mail"><i class= "zmdi zmdi-email"></i></label>
    <input type= "email" name= "email" id= "e-mail" placeholder= "Votre Email" required/>
</div>
<div class="form-group">
    <label for= "Mdp"><i class= "zmdi zmdi-lock"></i></label>
    <input type= "password" name= "mot_de_passe" id= "Mdp" placeholder= "Votre mot de passe" required/>
</div>
<div class="form-group">
    <label for= "Ddn"><i class= "zmdi zmdi-lock"></i></label>
    <input type= "date" name= "Date_de_naissance" id= "Ddn" placeholder= "Votre date de naissance" required/>
</div>
<div>
    <label for= "Résidence"><i class= "zmdi zmdi-lock"></i></label>
    <input type= "text" name= "Ville de résidence" id= "Résidence" placeholder= "Votre villie de résidence" required/>
</div>
<div class="form-group form-button">
    <input type= "submit" name= "signup" id= "signup" class= "form-submit" value= "S'inscrire"/>
</div>
<a href="Page de connexion.php">J'ai déja voyagé avec vous</a>
</body>
</html>