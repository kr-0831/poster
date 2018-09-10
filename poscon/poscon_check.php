<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ポスターコンテスト2017</title>
</head>
<body>

<?php

//echo $_POST['procode'];

//requil_once('../poscon/poscon_list.php');

//$post=sanitize($_POST);


$dsn='mysql:dbname=entogma66491com34954_poscon;host=127.0.0.1:3316;charset=utf8';
$user='entog_poscon';
$password='P@ssw0rd@';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='INSERT INTO poscon (code,time) VALUES(?,now())';
$data[]=$_POST['procode'];
$stmt=$dbh->prepare($sql);
$stmt->execute($data);

$dbh=null;



?>
    <div class="done"><img src="gazou/thanks.png"></div>
    </body>
</html>