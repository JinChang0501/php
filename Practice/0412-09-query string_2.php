<?php
$a = isset($_GET["a"]) ? intval($_GET["a"]) : 0;
$b = !empty($_GET["b"]) ? floatval($_GET["b"]) : 0;


echo $a + $b;
