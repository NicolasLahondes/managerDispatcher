<?php

include("models/promotions.php");

$aPromos = array(
    new Promotions("DWWC", 8, 8),
    new Promotions("APPP", 7, 2)
);

Promotions::addPromo($aPromos, "DYUX", 8, 7);

include("views/displayPromoViews.php");
