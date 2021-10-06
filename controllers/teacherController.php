<?php

include ("models/teachers.php");

$ex4 = new Teachers("Thomas", "Chevalier", "ThomasCorp");

echo $ex4->getFirstName();
echo $ex4->getLastName();
echo $ex4->getBusiness();
