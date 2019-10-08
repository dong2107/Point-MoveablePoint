<?php
include 'Point.php';
include 'MoveablePoint.php';
$point = new Point(5, 10);
echo $point->toString() . '<br>';
$moveablePoint = new MoveablePoint(5, 10, 50, 100);
echo $moveablePoint->toString();
