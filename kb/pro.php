<?php
session_start();
ob_start();	
if(session_is_registered('pes2'))
{
include ('../inc/inc.php');


$kata = $_POST['q'];
$query = mysql_query("select *from m_pasien where nama like '%$kata%' or idpas like '%$kata%' limit 10");
while($k=mysql_fetch_array($query))
	{
	$id=$k[idpas];
	$nama=$k[nama];
	$ker=$k[ker];
    echo '<li onClick="isi(\''.$k[idpas].'\');" style="cursor:pointer"> '.$k[idpas].'/'.$nama.' /'.$ker.' </li>';}






}
else
{}
?>