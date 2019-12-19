<?php
session_start();


if(session_is_registered('pes2'))
{

session_unset();
session_destroy();
header('Location:../sipdars-online/login/index.php');
}

else
{
header('Location:../sipdars-online/login/index.php');
}
?>

