
<?php
$albums = file_get_contents('http://localhost:3001/albums');
echo $albums;

$members = file_get_contents('http://localhost:3001/members');
echo $members;

$concertTours = file_get_contents('http://localhost:3001/concertTours');
echo $concertTours;

$labels = file_get_contents('http://localhost:3001/labels');
echo $labels;
?>
