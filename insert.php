<?php
mb_internal_encoding("utf-8");

$pdo = new PDO("mysql:dbname=shoki01;host=localhost;", "root", "mysql");
  
$pdo->exec("insert into 4each_keijiban(handlename, title, comments)
values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");
  
header("Location:http://localhost/4each_keijiban/index.php");
?>