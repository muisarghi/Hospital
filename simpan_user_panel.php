<?php

include "con_rs.php";

$iduser=$_POST['user'];
$tanggal=date("Y-m-d H:i:s");
$pertanyaan=$_POST['pertanyaan'];

$sqlstr="INSERT INTO rubrik set iduser='$iduser', tanggal='$tanggal', pertanyaan='$pertanyaan'";
$querystr=mysql_query($sqlstr) or die("Tidak ditemukan tabel data");

header("Location:user_panel.php");

?>