<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "我的標頭" ?></title>

</head>

<body>
    <?php
    define("MY_CONSTANT", 3);
    echo MY_CONSTANT;
    echo "<br>";

    $i = 1;

    echo isset($i) ? "i 有設定" : "i 沒有設定";
    echo "<br>";
    echo isset($k) ? "k 有設定" : "k 沒有設定";
    ?>
</body>

</html>