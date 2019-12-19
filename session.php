<?php
session_start();

//cek if user was login or not
if(!isset($_SESSION['agent_cek_in']) || ($_SESSION['agent_cek_in']!=md5($_SERVER['HTTP_USER_AGENT'])) ){
header("location: loginuser.php");
exit();
};

?>