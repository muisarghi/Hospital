<?
session_start();


if(session_is_registered('pes2'))
{

session_unset();
session_destroy();
header('Location:../adminrslog/index.php');
}

else
{
header('Location:../adminrslog/index.php');
}
?>

