<?php

include('models/subjects.php');

$aSubjects = array(
    new Subjects("Angular", "Thomas", 42),
    new Subjects("English", "Delphine", 56)
);

Subjects::addSubject($aSubjects, "JS", "Greg", 32);

include('views/displaySubjectsViews.php');
