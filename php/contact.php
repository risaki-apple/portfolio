<?php
if($_SERVER["REQUEST_METHOD"] != "POST") {
    // ブラウザからHTMLページを要求された場合
    header('Location: index.php');
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" type="text/css" href="../css/base.css">
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
    <link rel="icon" href="../favicon.ico">
    <link rel="apple-touch-ico" href="../apple-touch-icon.png" sizes="180x180">
</head>
<body>
    <div class="Form to-up trans">  
        <form id="form" action="confirm.php" method="post" enctype="multipart/form-data" onSubmit="return submitCheck()">
            <div class="Form-Item">
                <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>お名前</p>
                <input type="text" name="contactName" required class="Form-Item-Input" placeholder="例）山田太郎" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" />
            </div>
            <div class="Form-Item">
                <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
                <input type="text" name="email" required class="Form-Item-Input" placeholder="例）example@gmail.com" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>" />
            </div>
            <div class="Form-Item">
                <p class="Form-Item-Label"><span class="Form-Item-Label-No-Required">任意</span>電話番号</p>
                <input type="tell" name="tell" class="Form-Item-Input" placeholder="例）000-0000-0000" value="<?php if(isset($_POST['tell'])) echo $_POST['tell'];?>" /> 
            </div>
            <div class="Form-Item">
                <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
                <textarea name="comments" required class="Form-Item-Textarea"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
            </div>
            <input type="hidden" name="submitted" value="true" />
            <button class="Form-Btn" type="submit">入力内容を確認</button>
        </form>
    </div>
</body>
</html>