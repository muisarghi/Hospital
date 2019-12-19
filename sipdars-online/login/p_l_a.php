<?php
$user = ($_POST['user']);
$pass = ($_POST['pass']);
$unit= ($_POST['unit']);

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

$user = ($_POST['user']);
$pass = ($_POST['pass']);
$unit= ($_POST['unit']);

include'../../inc/inc.php';

	$cari="SELECT *FROM m_user where user='$user' and unit='$unit' and pass1='$pass'";
	$hasil=mysql_query($cari);
	if($hasil)
	while($data=mysql_fetch_array($hasil))
	{
	$id=$data['id'];
	}

		/*
		$r=MD5($pass);
		$x=$id*942;
		//$y=$no_angg;
		$z='2ae2o';
		$w='3g2y2n1c2l1m';
		$pes2='3g2y2n1c2l1m'.MD5($pass).$x.'2ae2o';
		$pes='$w$r$y$z';
		$status='1';*/
		$pes2=MD5($pass).$id;

$result=mysql_query("select *from m_user where user='$user' AND pass='$pes2'");

$rowCheck = mysql_num_rows($result);

if($rowCheck > 0)
{
while($row = mysql_fetch_array($result))
{

session_start();
session_register('pes2');

if($unit=='Direktur/ Wakil Direktur')
	{$loc='../../dr/index.php';}
elseif($unit=='Yayasan Kesehatan (YK)')
	{$loc='../../yk/index.php';}
elseif($unit=='Receptionist')
	{$loc='../../rc/index.php';}
elseif($unit=='Kamar Bersalin')
	{$loc='../../kb/index.php';}
elseif($unit=='Kamar Bayi')
	{$loc='../../ki/index.php';}
elseif($unit=='Kamar Anak')
	{$loc='../../ka/index.php';}
elseif($unit=='Poli Ibu Anak')
	{$loc='../../pd/index.php';}
elseif($unit=='Kamar Obat')
	{$loc='../../ko/index.php';}
elseif($unit=='Keuangan')
	{$loc='../../keu/index.php';}
else
	{$loc='../../ad/index.php';}

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