<?php


header('content-type: application/json'); #純文字

$str = '{"name":"Dadid","age":23}';

$obj = json_decode($str); // 轉換成 php 的物件
$ary = json_decode($str, true); // 轉換成 php 的陣列

var_dump($obj);
var_dump($ary);
