<?php
include "con_rs.php";
$id=date("His")+1+date("Ymd");
$tanggal=$_POST['hari']." ".$_POST['bulan']." ".$_POST['tahun'];
$kontak=$_POST['kontakart'];
$jam=$_POST['jamart'];
$tempat=$_POST['tempatart'];
$isi=$_POST['isiart'];
$unit=$_POST['unitart'];
$status=$_POST['statusart'];


////membuat paragraf otomatis --mulai//
$pecah = explode("\r\n\r\n", $isi);
$text = "";

for ($i=0; $i<=count($pecah)-1; $i++)
{
   $part = str_replace($pecah[$i], "<p>".$pecah[$i]."</p>", $pecah[$i]);
   $text .= $part;
}
////membuat paragraf otomatis --end//

	$str="INSERT INTO agenda set id='$id', tanggal='$tanggal', kontak='$kontak', waktu='$jam', tempat='$tempat', acara='$text', unit='$unit', status='$status'";
	$queryin=mysql_query($str);
echo "<a href='agenda_adm.php> Back</a>";
?>