<?php
include "con_rs.php";
$id=$_POST['id'];
$judul=$_POST['judul'];
$isi=$_POST['isi'];
$tanggal=date("Y-m-d H:i:s");
$status=$_POST['status'];

////membuat paragraf otomatis --mulai//
$pecah = explode("\r\n\r\n", $isi);
$text = "";

for ($i=0; $i<=count($pecah)-1; $i++)
{
   $part = str_replace($pecah[$i], "<p>".$pecah[$i]."</p>", $pecah[$i]);
   $text .= $part;
}
////membuat paragraf otomatis --end//


	//fungsi upload gambar
$fileName = $_FILES['foto']['name'];  
$fileSize = $_FILES['foto']['size'];  
$fileError = $_FILES['foto']['error']; 

$foto ='pictures/'.$fileName; 

if($fileSize > 0 || $fileError == 0){  
  $move = move_uploaded_file($_FILES['foto']['tmp_name'], '../pictures/'.$fileName );  
    if($move){  
      echo "File sudah diupload"; 
	  $str="UPDATE profile set tanggal='$tanggal', judul='$judul', isi='$text', status='$status', foto='$foto' WHERE idprof='$id'";
///sql string untuk update foto 
      }  
 }else{  
  echo "<font color=red>Foto anda tidak diperbaharui</font>"; 
 	  $str="UPDATE profile set tanggal='$tanggal', judul='$judul', isi='$text', status='$status' WHERE idprof='$id'";
}  ;

$query=mysql_query($str) Or Die("Gagal input Data");


echo "<a href='profile_adm.php> Back to Daftar Profile</a>"

?>