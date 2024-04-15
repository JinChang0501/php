<?php


header('content-type: application/json'); #純文字

$ar1 = [
    'name' => 'Dadid',
    'age' => 23,
];

echo json_encode($ar1, JSON_UNESCAPED_UNICODE);
