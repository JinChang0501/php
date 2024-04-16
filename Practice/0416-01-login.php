<?php
session_start();

$users = [
    'shin' => [
        'pw' => '2345',
        'nickname' => '小新'
    ],
    'ming' => [
        'pw' => '3456',
        'nickname' => '大明'
    ],
];

# 先確認有送表單資料過來
if (!empty($_POST)) {
    $errInfo = "帳號或密碼錯誤"; # 預設的錯誤訊息

    # 1. 判斷帳號是否正確
    if (!empty($users[$_POST['account']])) {
        $item = $users[$_POST['account']]; # 對應到的用戶資料

        # 2. 判斷密碼是否正確
        if ($item['pw'] === $_POST['password']) {
            # 帳密都對了
            unset($errInfo);
            $_SESSION['admin'] = [
                'account' => $_POST['account'],
                'nickname' => $item['nickname']
            ];
        } else {
            # 密碼是錯的
        }
    } else {
        # 帳號是錯的
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php /*
<pre><?php
if (!empty($_POST)) {
# 如果送過來的表單不是空的
print_r($_POST);
}
?></pre>
*/ ?>

    <form method="post">
        <input type="text" name="account" placeholder="帳號" value="<?= htmlentities($_POST['account'] ?? '') ?>">
        <br>
        <input type="password" name="password" placeholder="密碼" value="<?= htmlentities($_POST['password'] ?? '') ?>">
        <br>
        <input type="submit">
    </form>
    <!--
  &lt;div&gt;
-->
</body>

</html>