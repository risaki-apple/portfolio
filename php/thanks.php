<?php
$enable_referer = 'https://rikiapple.raindrop.jp/portfolio/php/confirm.php';
if (!isset($_SERVER['HTTP_REFERER']) || $_SERVER['HTTP_REFERER'] !== $enable_referer) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問合わせ完了</title>
    <link rel="stylesheet" type="text/css" href="../css/base.css">
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
    <script type="text/javascript" src="../jquery.min.js"></script>
    <link rel="icon" href="../favicon.ico">
    <link rel="apple-touch-ico" href="../apple-touch-icon.png" sizes="180x180">
</head>
<body>
    <!-- お問合わせ完了画面 -->
    <div class="thanks_container">
        <p class="thanks_contents to-up trans">
            この度はお問い合わせいただきありがとうございます。<br>
            内容を確認次第、折り返しご連絡させていただきます。    
        </p>
        <button class="thanks_back_button" type="button" onclick="location.href='http://localhost:8888/php/index.php'">ページトップへ戻る</button>
    </div>
</body>
</html>