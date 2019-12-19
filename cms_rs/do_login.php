<?php
//connect to MYSQL database
include 'con_rs.php';

//create variable to store data was sent from login.php
$user=$_POST['user'];
$password=$_POST['pasw'];

//create query to check if the data is valid
$query="SELECT * FROM user WHERE nama='$user'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);

if(!$row){
	echo '<p align="center"><h2>Username anda Salah!!</h2></p>';
}else{
	//check password
	if($password!=$row['password']){
		echo'<p align="center"><h2>Pasword Anda salah, coba ulangi dengan memasukkan pasword yang benar!</h2></p>';
	}else{
	
	if($row['status']=="admin"){
	//password valid
		session_start();
		$_SESSION['user_id']=$user;
		$_SESSION['agent_cek_in']=md5($_SERVER['HTTP_USER_AGENT']);
		header("location: panel_admin.php");}
	else{
		
		session_start();
			$_SESSION['user_id']=$user;
			$_SESSION['agent_cek_in']=md5($_SERVER['HTTP_USER_AGENT']);
			header("location: panel_dokter.php");}
	}
}
?>