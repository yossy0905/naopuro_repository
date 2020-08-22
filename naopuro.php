<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>問い合わせフォーム</title>
</head>
<body>
  <!--
<table border="1">
  <tr>
    <td>名前</td>
    <td><?php echo htmlspecialchars($_POST["name"], ENT_QUOTES) ?></td>
  </tr>
  <tr>
    <td>メールアドレス</td>
    <td><?php echo htmlspecialchars($_POST["mail"], ENT_QUOTES) ?></td>
  </tr>
  <tr>
    <td>お問合せ内容</td>
    <td><?php echo htmlspecialchars($_POST["comment"], ENT_QUOTES) ?></td>
  </tr>
-->
  <?php
  if(isset($_POST['sendmail'])){
    mb_language("Japanese");
    mb_internal_encoding("UTF-8");
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $comment = $_POST['comment'];
    $to = 'yossy0905.ny@gmail.com';
    if(mb_send_mail($to, $name, $comment)){
      echo "メールを送信しました";
    } else {
      echo "メールの送信に失敗しました";
    }
  }
  ?>
<!--</table> -->
    

</body>
</html>