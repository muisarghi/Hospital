<?php
@ini_set('display_errors', 'off');
include('../inc/inc.php');
session_start();
ob_start();	
if(session_is_registered('pes2'))
{



$katao = $_POST['qo'];
$query = mysql_query("select *from m_obt where nama like '%$katao%' limit 10");
while($k=mysql_fetch_array($query))
	{
	$id=$k[id];
	$nama=$k[nama];
	
    echo '<li onClick="isio(\''.$k[nama].'\');" style="cursor:pointer"> '.$nama.' </li>';}






}
else
{}
?>
