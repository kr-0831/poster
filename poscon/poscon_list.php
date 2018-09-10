<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>ポスターコンテスト2018</title>
	<link href="css/milligram.min.css" rel="stylesheet">
	<img src="gazou/head.jpg">
</head>

<body>
	<div id="grid">
		<li>
			<form action="poscon_check.php" method="post">

				<?php

try
{

$dsn='mysql:dbname=entogma66491com34954_poscon;
host=127.0.0.1:3316;charset=utf8';
$user='entog_poscon';
$password='P@ssw0rd@';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT * FROM mst_product WHERE 1';
$stmt=$dbh->prepare($sql);
$stmt->execute();

$dbh=null;

print '<br/><br/>';

while(true)
{
	$rec=$stmt->fetch(PDO::FETCH_ASSOC);
	if($rec==false)
	{
		break;
    }
    print '<p><input type="radio" name="procode" value="'.$rec['id']. '">';
	print $pro_name=$rec['name'].'---';
    print   $rec['comment'].'</p><br>';
    print '<img src="gazou/'.$rec['gazou'].'">';
	print '<br />';
}
    

}
catch (Exception $e)
{
	 print 'ただいま障害により大変ご迷惑をお掛けしております。';
	 exit();
}

?>
					<input type="submit" value="投票">
			</form>
		</li>
	</div>
</body>

</html>