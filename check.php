<?php

// functions.phpを読み込んで、
// 定義した関数を使えるようにする
require_once('functions.php');

// スーパーグローバル変数
// (PHPがもともと用意している変数)

// 送信されてきた値の取得
// エスケープ処理をして、
// XSS（クロスサイトスクリプティング）の対策をする

// エスケープ処理：htmlspecialchars
// htmlspecialchars(対象の文字, オプション, 文字コード)
$username = h($_POST['username']);
$email = h($_POST['email']);
$content = h($_POST['content']);

// ユーザー名が空かチェック
if ($username == '') {
  $usernameResult = 'ユーザー名が入力されていません';
} else {
  $usernameResult = $username;
}

// メールアドレスが空かチェック
if ($email == '') {
  $emailResult = 'メールアドレスが入力されていません';
} else {
  $emailResult = $email;
}

// 内容が空かチェック
if ($content == '') {
  $contentResult = 'お問い合わせ内容が入力されていません';
} else {
  $contentResult = $content;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>入力内容確認</title>
</head>
<body>
  <h1>入力内容確認</h1>

  <p>名前：<?php echo $usernameResult; ?></p>
  <p>メールアドレス：<?php echo $emailResult; ?></p>
  <p>内容：<?php echo $contentResult; ?></p>

  <form action="">
    <button>戻る</button>
    <input type="submit" value="OK">
  </form>

</body>
</html>