<?php

echo date("Y-m-d H:i:s") . "\n\n";
echo date("Y-m-d H:i:s", time()) . "\n\n";
echo date("Y-m-d H:i:s", time() + 30 * 24 * 60 * 60) . "\n\n";
$t = strtotime('2024-08-07');
echo date('Y-m-d H:i:s', $t) . "\n\n";
