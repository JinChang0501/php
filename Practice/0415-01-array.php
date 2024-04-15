<?php


header('content-type: text/plain'); #純文字

echo '<h2>123</h2>';

$ar1 = array(1, 2, 3);

$ar2 = [1, 2, 3];

$ar3 = array(
    'name' => 'David',
    'age' => 22,
);


$ar4 = [
    'name' => 'David',
    'age' => 22,
];

print_r($ar1);
print_r($ar2);
print_r($ar3);
print_r($ar4);
