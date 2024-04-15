<?php


header('Content-Type: application/json');


$ar3 = array(
    'name' => 'David',
    'age' => 22,
);

echo json_encode($ar3);
