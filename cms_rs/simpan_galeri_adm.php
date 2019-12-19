<?php
include "session.php";
include "con_rs.php";
$deskripsi=$_POST['deskripsi'];
$unit=$_POST['unit'];


	//fungsi upload gambar
$fileName = $_FILES['foto']['name'];  
$fileSize = $_FILES['foto']['size'];  
$fileError = $_FILES['foto']['error']; 

$foto ='galeri/'.$fileName; 

if($fileSize > 0 || $fileError == 0){  
  $move = move_uploaded_file($_FILES['foto']['tmp_name'], '../galeri/'.$fileName );  
    if($move){  
      echo "File sudah diupload"; 
///sql string untuk update foto 
      }else{  
      echo "Gagal mengupload file";  
      }  
 }else{  
 echo "<font color=red>Foto anda tidak diperbaharui</font>"; 
}  ;


	$str="INSERT INTO galeri set pict='$foto', deskripsi='$deskripsi', unit='$unit'";
	$queryin=mysql_query($str);
echo " <a href='galeri_adm.php'>Back</a>";
?>