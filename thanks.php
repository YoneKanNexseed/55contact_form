<?php
// 1. functions.phpを読み込む
// 2. $_POSTから送信された値を取得
// （エスケープ処理も）
// 3. 値を画面に表示する

// functions.phpを読み込む
require_once('functions.php');

// $_POSTから送信された値を取得（エスケープ処理も）
$username = h($_POST['username']);
$email = h($_POST['email']);
$content = h($_POST['content']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>送信完了</title>
</head>
<body>
  <h1>お問い合わせありがとうございました</h1>
  <p>名前：<?php echo $username; ?></p>
  <p>メールアドレス：<?php echo $email; ?></p>
  <p>お問い合わせ内容：<?php echo $content; ?></p>
</body>
</html>