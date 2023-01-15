<?php

$users = [
    [
        "id" => 111,
        "name" => "Irene",
        "age" => 62,
        "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis necessitatibus dignissimos accusantium magnam. Facilis, quasi odio, consectetur porro natus amet impedit ducimus voluptas nam nobis eveniet nisi sint earum quae."
    ],
    [
        "id" => 1111,
        "name" => "Logan",
        "age" => 72,
        "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis necessitatibus dignissimos accusantium magnam. Facilis, quasi odio, consectetur porro natus amet impedit ducimus voluptas nam nobis eveniet nisi sint earum quae."
    ],
    [
        "id" => 811,
        "name" => "Tillie",
        "age" => 71,
        "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis necessitatibus dignissimos accusantium magnam. Facilis, quasi odio, consectetur porro natus amet impedit ducimus voluptas nam nobis eveniet nisi sint earum quae."
    ],
    [
        "id" => 2221,
        "name" => "Luke",
        "age" => 68,
        "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis necessitatibus dignissimos accusantium magnam. Facilis, quasi odio, consectetur porro natus amet impedit ducimus voluptas nam nobis eveniet nisi sint earum quae."
    ],
    [
        "id" => 1021,
        "name" => "Alejandro",
        "age" => 86,
        "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis necessitatibus dignissimos accusantium magnam. Facilis, quasi odio, consectetur porro natus amet impedit ducimus voluptas nam nobis eveniet nisi sint earum quae."
    ]

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Liste d'utilisateurs</title>
</head>

<body>

    <div class="container">
        <h1>Nombre de personnes : <?php echo count($users); ?> </h1>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php 
            //for($i = 0; $i < count($users); $i++) {}
            foreach($users as $user){ 
            include 'user_card.php'; 
             }?>
        </div>
    </div>
</body>

</html>