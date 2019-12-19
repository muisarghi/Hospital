<?php
include "con_rs.php";

$id=$_POST['id'];
$email=$_POST['email'];
$jawaban=$_POST['jawab'];
$status=$_POST['status'];

$str="UPDATE rubrik set jawaban='$jawaban', status='$status'  WHERE id='$id'";
$query=mysql_query($str) Or Die("Gagal input Data");

mail($email,"RS Mardiwaluya Malang","Anda mendapat jawaban dari Dokter Ahli RS Mardiwaluya Malang! <br>
untuk membaca jawaban dokter silahkan Login di http://www.rs-mardiwaluya-mlg.com/loginuser.php","From RS Mardiwaluya");

echo "<a href='rubrik_dokter.php'>Back</a>";
?>