<?php
include 'Database.php';

$newEntity = new Person();
$newEntity->FName = 'Clem';
$newEntity->LName = 'Ferreol';
$newEntity->Gender = 'Female';
$newEntity->Age = 24;
$newEntity->add();
echo 'Saved changes successfully';

?>
