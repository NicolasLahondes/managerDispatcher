<?php

include("models/promotions.php");

$ex3 = new Promotions("DWWM4", 05, 12);
echo $ex3->getName();
echo $ex3->getDebutDate();
echo $ex3->getEndDate();

