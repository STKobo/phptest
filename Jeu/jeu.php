<?php 
$aDeviner = 150;
require 'header.php'; 
?>


<?php if (isset($_GET['chiffre'])): ?>
    <?php if($_GET['chiffre'] > $aDeviner) : ?>
        Votre chiffre est trop grand
    <?php elseif ($_GET['chiffre'] < $aDeviner): ?>
        Votre chiffre est trop petit
    <?php else : ?>
        Bravo ! Vous avez deviné le chiffre <?= $aDeviner ?>
    <?php endif ?>
<?php endif ?>

<form action="/jeu.php" method="GET">
    <input type="number" name="chiffre" placeholder="entre 0 et 1000" value="<?php if (isset($_GET['chiffre'])) { echo htmlentities($_GET['chiffre']) ; } ?>" > 
    <input type="text" name="demo" value="test">
    <button type="submit">Deviner</button>
</form>

<?php require 'footer.php' ?>
