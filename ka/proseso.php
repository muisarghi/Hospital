<?php
include('../inc/inc.php');
session_start();
ob_start();	
if(session_is_registered('pes2'))
{



$kata2 = $_POST['qo'];
$query = mysql_query("select *from m_obt where nama like '%$kata2%' limit 10");
while($k=mysql_fetch_array($query))
	{
	$id=$k[id];
	$nama=$k[nama];
	
    echo '<li onClick="isi(\''.$k[nama].'\');" style="cursor:pointer"> '.$nama.' </li>';}






}
else
{}
?>
