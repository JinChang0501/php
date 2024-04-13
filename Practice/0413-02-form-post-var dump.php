<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre><?php echo var_dump($_POST) ?></pre>
    <form action="" method="post" enctype="application/x-www-form-urlencoded">
        <input type="text" name="account" placeholder="帳號"><br>
        <input type="password" name="password" placeholder="密碼"><br>
        <button>送出</button>
    </form>
</body>

</html>