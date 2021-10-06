<?php

include('models/subjects.php');
$subjectAssoc = new Subjects('', '', 8);
$subjectAssoc = $subjectAssoc->getAllSubjects();

$ex2 = new Subjects("Angular", "Thomas", 8);
echo $ex2->getName();
echo $ex2->getTeacher();
echo $ex2->getDuration();

include('views/displaySubjectsViews.php');
