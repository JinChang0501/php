<?php

require __DIR__ . './../config/pdo-connect.php';

$per_page = 20; #每頁有幾筆


#總筆數
$t_sql = "SELECT COUNT(*) FROM address_book";

$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

$totalPages = ceil($totalRows / $per_page);

echo json_encode([$totalRows, $totalPages]);
