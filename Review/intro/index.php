<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuto</title>
</head>
<body>
    <h1><?php echo 'Hello ' ?></h1>
    <?php 
    $age = 18; 
    echo "Il a $age ans";
    ?>
    <br>
    <?php
    echo "Elle a aussi $age ans.";
    $numero = 1;
    echo "<br />". $numero;
    $numero += 3 ;
    echo "<br />". $numero ; 
    ?>
</body>
</html>