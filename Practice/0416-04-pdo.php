<?php

require './../config/connect-config.php';

// echo $db_name;
$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8mb4";

$pdo = new PDO($dsn, "$db_user", "$db_pass");
