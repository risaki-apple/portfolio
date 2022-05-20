<?php
$name = trim($_POST['contactName']);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/base.css">
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
    <script type="text/javascript" src="../jquery.min.js"></script>
    <title>お問合わせ完了</title>
</head>
<body>
    <!-- お問合わせ完了画面 -->
    <div class="thanks_container">
        <h1 class="thanks_contactName to-down trans"><?php echo $name; ?>様</h1>
        <p class="thanks_contents to-up trans">
            この度はお問い合わせいただきありがとうございます。<br>
            内容を確認次第、折り返しご連絡させていただきます。    
        </p>
        <button class="thanks_back_button" type="button"onclick="location.href='http://localhost:8888/php/index.php'">ページトップへ戻る</button>
    </div>
</body>
</html>