<?php
//1.  DB接続します
// （■■ryota>> DBに接続してデータを抽出しないといけないので）

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


 <!-- ３．データ表示 -->

<header>
<div class="header">
<h2>***　過去データ　***</h2>
<a href="menu.php"><h3>戻る</h3></a>
</header>
<div class="field">　　（日付）　　　　（睡眠時間）　　　　（体調）　　　　　（音楽タイトル）　　（アーティスト）　（ジャンル） 　　（１日の感想）</div>
</header>

<?php
//３．データ表示
$view = '';
if ($status == false) {
    sql_error($stmt);
} else {
    while ($r = $stmt->fetch(PDO::FETCH_ASSOC)){
 
      $view .= "<p>";  

      // 下はformより誰でもデータを送信できるが、その中にタグなどでコードがまぎれていると、動作してしまうことがあり、それをふせぐためにhtmlspecialchrars関数を使うらしい。
      $view .= $r['id']  . '　 ';
      if  ($_SESSION['kanri_flg'] == 1){
        $view .= '<a href="detail.php?id=' .$r['id'] . '">';
        $view .= $r['date'];
        $view .= '</a>';
      } else {
        $view .= $r['date'];
      }
      $view .="　　";
      
      if  ($_SESSION['kanri_flg'] == 1){
        $view .= '<a href="delete.php?id=' .$r['id'] . '">';
        $view .= '[削除]';
        $view .= '</a>';
      }
      $view .= 
      // $r['name']  . '　  (睡眠時間) '.
      $r['sleep_time']  . 'h　　 (体調10段階→) '.
      $r['today_condition']  . '　　'.
      $r['music_title']  . '　　'.
      $r['artist']  . '　　'.
      $r['music_mood']  . '　　'.
      $r['content'] ;
    }
}
?>

<!-- ■■ryota>> この1行のコードで全保存データを表示しているみたいだ！ -->

<div><?php echo $view; ?></div>

<!--  html  -->

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>過去記録</title>
<link rel="stylesheet" href="style1.css">
</head>
</html>
