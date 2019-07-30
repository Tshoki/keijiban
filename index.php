<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>掲示板</title>  
<link rel="stylesheet" type="text/css" href="style.css">
  
</head>
<body>
<img src="4eachblog_logo.jpg">
  
<!---------
  header
----------->  
<header>
  <ol class="menu">
      <li id="about">トップ</li>
      <li id="about">プロフィール</li>
      <li id="about">4eachについて</li>
      <li id="about">登録フォーム</li>
      <li id="about">問い合わせ</li>
      <li id="about">その他</li>
  </ol>
</header>
  
<!---------
    form
----------->  
<div class="left">
  <h1>プログラミングに役立つ掲示板</h1>  
  <div class="form">
    <h2 id="form_title">入力フォーム</h2>  
    <form method="post" action="insert.php">
    <label>ハンドルネーム</label>  
    <br>  
    <input type="text" name="handlename" size="50">
    <br>
    <label>タイトル</label>  
    <br>  
    <input type="text" name="title" size="50">
    <br>
    <label>コメント</label>
    <br>  
    <textarea cols="52" rows="15" name="comments"></textarea>
    <br><br>  
    <input type="submit" name="submit" class="submit">
    </form>
  </div>
</div>  
<br>
<!---------
    side
----------->
<div class="right">
  <h2 class="sub">人気の記事</h2>
  <ol id="sub2">
    <li>PHPオススメの本</li>
    <li>PHP　Myadimnの使い方</li>
    <li>いま人気のエディタ</li>
    <li>HTMLの基礎</li>
  </ol>
  <br>
  <h2 class="sub">オススメのリンク</h2>
  <ol id="sub2">
    <li>インターンノウス株式会社</li>
    <li>XAMPPのダウンロード</li>
    <li>Eclipseのダウンロード</li>
    <li>Bracketsのダウンロード</li>
  </ol>
  <br>
  <h2 class="sub">カテゴリ</h2>
  <ol id="sub2">
    <li>HTML</li>
    <li>PHP</li>
    <li>MySQL</li>
    <li>Javascript</li>
  </ol>
</div>
<!---------
  artical
----------->
<div class="artical1">
  <h2>タイトル</h2>
  <p>記事の中身、記事の中身、記事の中身、記事の中身記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身<br>記事の中身、記事の中身、記事の中身、記事の中身<br>記事の中身、記事の中身、記事の中身、記事の中身</p>  
  <h5>posted 通りすがり</h5>
</div>
<?php 
  
mb_internal_encoding("utf-8");

$pdo = new PDO("mysql:dbname=shoki01;host=localhost;", "root", "mysql");

$stmt= $pdo->query("select * from 4each_keijiban");
  
while($row = $stmt->fetch()){ 
  
echo "<div class='artical2'>";
echo "<h3>".$row['title']."</h3>";
echo "<div class='comments'>";
echo $row['comments'];
echo "<div class='handlename'>posted by".$row['handlename']."</div>";
echo "</div>";
echo "</div>";
}
?>    
<footer class="footer">
  <p>copyright internous | $each blog is the one which provides A to Z about programming.</p>
</footer>  
</body>
</html>