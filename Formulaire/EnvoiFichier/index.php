<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec envoi de fichier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="post" action="traitement-formulaire.php"  enctype="multipart/form-data">
    <div>
        <input type="radio" id="Mr" name="civilite" value="Mr">
        <label for="Mr" class="inline-label">Monsieur</label>
    </div>
    <div>
        <input type="radio" id="Mme" name="civilite" value="Mme">
        <label for="Mme" class="inline-label">Madame</label>
    </div>
    <label for="name">Votre nom</label>
    <input type="text" name="name" id="name" placeholder="Saisissez votre nom">
    <label for="picture">Votre photo</label>
    <input type="file" name="picture" id="picture">
    <label for="cardId">Votre justificatif d'identité</label>
    <input type="file" name="cardId" id="cardId">
    <label for="tos" class="inline-label">J'accepte les conditions générales d'utilisation</label>
    <input type="checkbox" name="tos" id="tos">
    <button type="reset">Réinitialiser les valeurs du formulaire</button>
    <button type="submit">Soumettre le formulaire</button>
</form>
</body>
</html>