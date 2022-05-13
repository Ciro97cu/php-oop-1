<?php
include_once "php/data.php";
include_once "php/import.php";
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>OOP</title>
</head>

<body>
    <div class="container-sm">
        <h1 class="text-center py-4">PHP ~ Movie</h1>
        <div class="row text-center">
            <?php foreach ($arrayMovie as $movie) {
                echo $movie->printFilm();
            } ?>
        </div>
    </div>
</body>

</html>