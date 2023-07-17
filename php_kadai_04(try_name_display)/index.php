<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<html lang="ja">
<div class="main1">
<title>名前の入力</title>

<body>
<h4>毎日の音楽と睡眠時間を記録していこう</h4>

<?php
session_start();
// ログイン失敗した場合、login_act.phpで$_SESSION['lid_error']=1、成功した場合、=0としているので
if (isset($_SESSION['lid_error'])) {
?>
 <div class="lid_error">ログインに失敗しました。</div><br>

<?php
  unset($_SESSION['lid_error']); // エラーメッセージを表示した後、セッション変数を削除します
} 
?>

  <form name="form1" action="login_act.php" method="post">
        ID:<input type="text" name="lid" />
        PW:<input type="password" name="lpw" />
        <input type="submit" value="LOGIN" />
    </form>

  </div>
</body>
</html>

