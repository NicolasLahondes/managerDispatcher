<?php

include("models/teachers.php");

$aTeacher = array(
    new Teachers("Greg", "Desplaces", "GregCorp"),
    new Teachers("Cindy", "Poncin", "CindyCorp")
);

Teachers::addTeacher($aTeacher, "Thomas", "Chevalier", "ThomasCorp");

include("views/displayTeacherViews.php");
