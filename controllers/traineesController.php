<?php

require_once("models/trainees.php");

$aTrainees = array(
    new Trainees("Amélie", "Nothomb", 1888),
    new Trainees("Damien", "François", 1996)
);

// addTrain($aTrainees, "Alan", "l'Ours", 1888);

// function addTrain(&$arrayToBePushed, $name, $lastname, $date)
// {
//     array_push($arrayToBePushed, new Trainees($name, $lastname, $date));

//     return;
// };

Trainees::addRankTable($aTrainees, "Alan", "l'ours", 8);

include("views/displayTraineesView.php");
