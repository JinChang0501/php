<?php


header('content-type: text/plain'); #純文字

$ar1 = [
    'name' => 'Dadid',
    'Hello',
    'age' => 23,
    99,
];

$ar2 = $ar1;

$ar2['name'] = 'Tim';

print_r([
    'ar1' => $ar1,
    'ar2' => $ar2,
]);

#------------------------------------
echo "\n";

$a = 10;
$b = &$a;
$b = 5;
echo "\n \$a =$a,\$b =$b ";
