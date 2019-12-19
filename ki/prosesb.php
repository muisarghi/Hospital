<?php
include ('../inc/inc.php');
session_start();
ob_start();	
if(session_is_registered('pes2'))
{



$kata = $_POST['qb'];
$query = mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Bayi' and m_pasien.nama like '%$kata%'");
while($k=mysql_fetch_array($query))
	{
	$id=$k[idpas];
	$nama=$k[nama];
	$ker=$k[ker];
     echo '<li onClick="isi2(\''.$k[idpas].'\');" style="cursor:pointer"> '.$k[idpas].'/'.$nama.' </li>';

	}






}
else
{}
?>
