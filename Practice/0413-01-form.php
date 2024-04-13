<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form name="form1" method="get">
        <input type="text" name="account" placeholder="帳號"><br>
        <input type="password" name="password" placeholder="密碼"><br>
        <button>送出</button>
    </form>
</body>
<!--
  # 取得頁面上所有表單
  document.forms
  document.querySelectorAll('form')

  # 頁面上第一個表單
  document.forms[0]

  # 表單如果有名稱
  document.form1

  # 表單所有欄位
  document.form1.elements

  # 表單某個欄位 
  document.form1.elements[0]
  document.form1.elements['account']
  document.form1.account

  # 表單某個欄位的值
  document.form1.account.value


-->

</html>