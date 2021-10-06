<?php

// if (!empty($_GET['subjects']) and $_GET['subjects'] == "Afficher les matières") {
//     include "controllers/subjectController.php";
// }

// if (!empty($_GET['trainees']) and $_GET['trainees'] == "Afficher les élèves") {
//     include "controllers/traineesController.php";
// }


if (!empty($_GET['subjects'])) {
    switch ($_GET['subjects']) {

        case "Afficher les matières":
            include "controllers/subjectController.php";
            break;

        case "Afficher les élèves":
            include "controllers/traineesController.php";
            break;
        case "Afficher les promos":
            include "controllers/promoController.php";
            break;
        case "Afficher les professeurs":
            include "controllers/teacherController.php";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Gestion des notes</h1>
    <form action="index.php" method="get">
        <p>
            <label for="subjects"></label>
            <input type="submit" id="subjects" name="subjects" value="Afficher les matières">
        </p>
        <p>
            <label for="subjects"></label>
            <input type="submit" id="subjects" name="subjects" value="Afficher les élèves">
        </p>
        <p>
            <label for="subjects"></label>
            <input type="submit" id="subjects" name="subjects" value="Afficher les promos">
        </p>
        <p>
            <label for="subjects"></label>
            <input type="submit" id="subjects" name="subjects" value="Afficher les professeurs">
        </p>
    </form>


</body>

</html>