<?php
@ini_set('display_errors', 'off');
include ('../inc/inc.php');
session_start();
ob_start();	
if(session_is_registered('pes2'))
{



$kata = $_POST['q3'];
$query = mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Inpartu Operasi' and m_pasien.nama like '%$kata%'");
while($k=mysql_fetch_array($query))
	{
	$id=$k[idpas];
	$nama=$k[nama];
	$ker=$k[ker];
     echo '<li onClick="isi3(\''.$k[idpas].'\');" style="cursor:pointer"> '.$k[idpas].'/'.$nama.' /'.$ker.' </li>';

	}






}
else
{}
?>
