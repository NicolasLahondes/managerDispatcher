<?php

require_once("models/trainees.php");

$aTrainees = array(
    new Trainees("Nothomb", "Amélie", 1888),
    new Trainees("Damien", "François", 1996)
);

Trainees::addRankTable($aTrainees, "l'Ours", "Alan", 8);

// Trainees::removeRankTable($aTrainees, 2);

Trainees::changeRankTable($aTrainees, 0, "Bloodhoof", "Cairn", 45);

// $aTrainees[1]->setBirthdate(333);


Trainees::listAll($aTrainees);


include("views/displayTraineesView.php");
