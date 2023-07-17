<?php
// ログインチェク関数 loginCheck()
session_start();
require_once('funcs.php');
loginCheck();

//１．関数群の読み込み
require_once('funcs.php');

//２．データ登録SQL作成
$pdo = db_conn();
$stmt = $pdo->prepare('SELECT * FROM gs_bm_table');
$status = $stmt->execute();
?>




<!DOCTYPE html>
<link rel="stylesheet" href="style.css">

<html lang="ja">
<div class="main1">

<title>名前の入力</title>
<!-- </head> -->

<body>

<!-- ●●● ●●● ●●● ●●● ●●● ●●● ●●● ●●● ●●● ●●● ●●● ●●● ●●● ●●● ●●● -->

  <div class="main_c">

    <h3>こんにちは！</h3>
       <p>今日も一日お疲れさまでした。</p>
       <p>今日はどんな音楽を聴きましたか？</p>
       <p>もしくはどんな曲を聴きたい気分ですか？</P>
       <p>1曲だけその曲名を教えて下さい！</p><br><br>
  </div>
</div>

<div class="main2">
<form method="POST" action="insert.php">
    <div class="table">
        <input type="hidden" name="name" value="<?=$name_txt;?>" ><br>
        音楽のタイトル：<input type="text" name="music_title"><br>
        アーティスト名：<input type="text" name="artist"><br>
        音楽のジャンル：<input type="text" name="music_mood"><br>
        睡眠時間: <input type="number" name="sleep_time" min="0" max="15" step="0.5"><br>
        今日の体調 [1:悪い ～ 10:良い]:<input type="number" name="today_condition" min="1" max="10" step="1"><br>
        今日の感想：<textArea name="content" rows="3" cols="40">
</textArea><br>
        <input type="submit" value="送信">
    </div>

    <p>過去データを見てみる→  <a href="select.php">はい</a></p>
    <p>過去データのグラフ化→  <a href="graph.php">はい</a></p>
    <p>趣味の世界→  <a href="naga.php">はい</a></p>
    <p>ログイン画面に戻る→<a href="index.php">はい</a></p>
  </form>

</div>
</html>

