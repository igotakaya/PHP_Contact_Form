<?php
session_start();
//入力画面からのアクセスでなければ戻す。
if (!isset($_SESSION['form'])) {
    header('Location:index.php');
} else {

    $post = $_SESSION['form'];
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'tkhr6022@gmail.com';
    $from = $post['email'];
    $subject = 'お問い合わせが届きました';
    $body = <<<EOT
    名前:{$post['name']}
    メールアドレス:{$post['name']}
    内容:
    {$post['contact']}
    EOT;
    mb_send_mail($to, $subject, $body, "From:{$from}");
    unset($_SESSION['form']);
    header('Location:thanks.html');
    
    exit();
}

?>



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>お問合せフォーム</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous" />



    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <!-- お問合せフォーム画面 -->
    <div class="confirm">

        <div class="container">
            <form action="" method="POST">
                <h3>お問い合わせ内容をご確認ください。</h3>




                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label for="inputName">お名前</label>
                        </div>
                        <div class="col-8">
                            <p class="display_item"><?php echo htmlspecialchars($post['name']); ?></p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label for="inputEmail">メールアドレス</label>
                        </div>
                        <div class="col-8">
                            <p class="display_item"><?php echo htmlspecialchars($post['email']); ?></p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label for="inputContent">お問い合わせ内容</label>
                        </div>
                        <div class="col-8">
                            <p class="display_item"><?php echo nl2br(htmlspecialchars($post['contact'])); ?></p>
                        </div>
                    </div>
                </div>
                <div class="row flex">
                    <div class="col-9 offset-3">
                        <a href="index.php">訂正する <i class="fas fa-eraser"></i></a>
                        <button class="btn_p" type="submit">送信する <i class="fas fa-paper-plane"></i></button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</body>

</html>