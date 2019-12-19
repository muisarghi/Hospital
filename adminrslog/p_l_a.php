<?php
$user = addslashes($_POST['user']);
$pass = $_POST['pass'];

if (!isset($user) || !isset($pass)) 
{
header( "Location:index.php" );
}


elseif (empty($user) || empty($pass)) 
{
header( "Location:index.php" );
}

else
{

$user = addslashes($_POST['user']);
$pass = $_POST['pass'];


include'../inc/inc.php';

	$cari="SELECT *FROM m_admin where username='$user'";
	$hasil=mysql_query($cari);
	if($hasil)
	while($data=mysql_fetch_array($hasil))
	{
	$id=$data['id'];
	}

	
		$r=MD5($pass);
		$x=$id*942;
		//$y=$no_angg;
		$z='2ae2o';
		$w='3g2y2n1c2l1m';
		$pes2='3g2y2n1c2l1m'.MD5($pass).$x.'2ae2o';
		$pes='$w$r$y$z';
		$status='1';

$result=mysql_query("select *from m_admin where username='$user' AND pass='$pes2'");

$rowCheck = mysql_num_rows($result);

if($rowCheck > 0)
{
while($row = mysql_fetch_array($result))
{

session_start();
session_register('pes2');
$loc='../adminrs/index.php';
header("Location: $loc");

}


}
else 
{

echo"Anda Salah Memasukkan Password, <a href='index.php'>Ulangi</a>
<br>
Atau Account Anda Terkunci, Segera Hubungi Administrator";
}
}
?>