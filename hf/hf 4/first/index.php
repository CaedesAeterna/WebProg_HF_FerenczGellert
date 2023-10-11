<?php

include 'ArrayManipulator.php';

$first = new ArrayManipulator(['a', 'b', 'c']);


echo $first . "\n";
$second = new ArrayManipulator([]);
$second = clone $first;
echo $second . "\n";

//
//unset($first);
//echo $first;