<?php
require_once 'Student.php';
require_once 'Room.php';
require_once 'Floor.php';

$student = new Student(1, 1, "email@oui.com", "Jean");
var_dump(($student));

$room = new Room(1, "Salle 1", 10);
var_dump($room);

$floor = new Floor(1, "Rez-de-chaussée", 0);

$floor2 = new Floor();

$floor-> setId(4);

$getIdfloor = $floor-> getId();
var_dump($floor, $floor2);

?>