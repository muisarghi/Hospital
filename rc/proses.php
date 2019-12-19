<?php
@ini_set('display_errors', 'off');
include ('../inc/inc.php');
session_start();
ob_start();
if(session_is_registered('pes2'))
{



$kata = $_POST['q'];
$query = mysql_query("select *from m_polipas where nama like '%$kata%'");
while($k=mysql_fetch_array($query))
	{
	$id=$k[idpas];
	$nama=$k[nama];
	$swm=$k[swm];
	$alm=$k[alm];
	$kec=$k[kec];
	$kota=$k[kpta];
	//$ker=$k[ker];

     echo '<li onClick="isi(\''.$k[idpas].'\');" style="cursor:pointer"> '.$k[idpas].'-'.$nama.'-'.$swm.'-'.$alm.''.$kec.''.$kota.' </li>';

	}






}
else
{}
?>
