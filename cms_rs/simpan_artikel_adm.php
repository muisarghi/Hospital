<?php
include "con_rs.php";
$tanggal=$_POST['tanggalart'];
$judul=$_POST['judulart'];
$isi=$_POST['isiart'];
$kategori=$_POST['kategoriart'];
$status=$_POST['statusart'];
$cntr=0;

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
///sql string untuk update foto 
      }else{  
      echo "Gagal mengupload file";  
      }  
 }else{  
 echo "<font color=red>Foto anda tidak diperbaharui</font>"; 
}  ;


	$str="INSERT INTO artikel set tanggal='$tanggal', judul='$judul', isi='$text', kategori='$kategori', status='$status', counter='$cntr'";
	$queryin=mysql_query($str);
echo "<a href='artikel_adm.php> Back</a>";
?>