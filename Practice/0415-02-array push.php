<?php


header('content-type: text/plain'); #純文字

for ($i = 1; $i < 43; $i++) {

    $ar[] = $i;
};

array_push($ar, '43');
echo implode('-', $ar); # 把陣列接起來變成字串

echo "\n\n";


shuffle($ar); # 亂數排序
echo implode('-', $ar); # 把陣列接起來變成字串

echo "\n\n";

$str = '12;;33;;44;;6581;;9816;;15';

$ar2 = explode(';;', $str);

var_dump($ar2);
