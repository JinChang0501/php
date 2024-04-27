<?php

$hash = '$2y$10$zzqxCUfRBlj1Z7rSaXox5.ovDaJstvf1ysY797LH5mIy.etj6/1UC';
$pw = 1234567;

var_dump(password_verify($pw, $hash));
