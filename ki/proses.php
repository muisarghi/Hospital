<?php
@ini_set('display_errors', 'off');
include ('../inc/inc.php');
session_start();
ob_start();	
if(session_is_registered('pes2'))
{



$kata = $_POST['q'];
$query = mysql_query("select *from m_pasienby where nama like '%$kata%'");
while($k=mysql_fetch_array($query))
	{
	$id=$k[idpas];
	$nama=$k[nama];
	$ker=$k[ker];
     echo '<li onClick="isi(\''.$k[id_by].'\');" style="cursor:pointer"> '.$k[id_by].'/'.$nama.' </li>';

	}






}
else
{}
?>
