<?php


#header('content-type: text/plain'); #純文字

$ar1 = [
    'name' => 'Dadid',
    'Hello',
    'age' => 23,
    99,
];

foreach ($ar1 as $key => $value) {
    echo " $key : $value <br>";
};
