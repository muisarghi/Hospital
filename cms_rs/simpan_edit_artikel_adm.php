<?php
include "con_rs.php";
$id=$_POST['id'];
$counter=$_POST['cntr'];
$judul=$_POST['judul'];
$isi=$_POST['isi'];
$tanggal=date("Y-m-d H:i:s");
$status=$_POST['status'];
$kategori=$_POST['kategori'];

////membuat paragraf otomatis --mulai//
$pecah = explode("\r\n\r\n", $isi);
$text = "";

for ($i=0; $i<=count($pecah)-1; $i++)
{
   $part = str_replace($pecah[$i], "<p>".$pecah[$i]."</p>", $pecah[$i]);
   $text .= $part;
}
////membuat paragraf otomatis --end//



$str="UPDATE artikel set tanggal='$tanggal', kategori='$kategori', judul='$judul', isi='$text', status='$status', counter='$counter'  WHERE idartikel='$id'";
$query=mysql_query($str) Or Die("Gagal input Data");


echo "<a href=artikel_adm.php> Back to Daftar Artikel</a>";

?>