<?php
session_start();
ob_start();	
if(session_is_registered('pes2'))
{
mysql_connect("localhost","root","1");
mysql_select_db("mardi");

$kata = $_POST['q'];
$query = mysql_query("select nama from m_user where nama like '%$kata%' limit 10");
while($k=mysql_fetch_array($query)){
    echo '<li onClick="isi(\''.$k[0].'\');" style="cursor:pointer">'.$k[0].'</li>';
}
}
else
{}
?>
