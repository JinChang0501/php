<?php
session_start();

$users = [
    'shin' => [
        'pw' => '0000',
        'nickname' => '小新'
    ],
    'ming' => [
        'pw' => '1111',
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
    <?php if (isset($_SESSION['admin'])) : ?>
        <h2><?= $_SESSION['admin']['nickname'] ?> 泥好</h2>
        <p><a href="./0416-04-logout.php">登出</a></p>
    <?php else : ?>

        <div><?= isset($errInfo) ? $errInfo : '' ?></div>

        <form method="post">
            <input type="text" name="account" placeholder="帳號" value="<?= htmlentities($_POST['account'] ?? '') ?>">
            <br>
            <input type="password" name="password" placeholder="密碼" value="<?= htmlentities($_POST['password'] ?? '') ?>">
            <br>
            <input type="submit">
        </form>
    <?php endif ?>



</body>

</html>