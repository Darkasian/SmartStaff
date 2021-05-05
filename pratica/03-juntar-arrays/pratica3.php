<?php

$array1 = array(0, 1, 2, 3, 4, 5);

$array2 = array (
    6 =>  'The',
    7 => 'quick',
    8 => 'brown',
    9 => 'fox',
    10 => 'jumps',
    11 => 'over',
    12 => 'the',
    13 => 'lazy',
    14 => 'dog');

$array3 = array (
    15 => 6,
    16 => 7,
    17 => 8,
    18 => 9,
    19 => 10);

$arrayresultado = $array1 + $array2 + $array3;

print_r ($arrayresultado); 
