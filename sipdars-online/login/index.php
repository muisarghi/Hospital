<?php
@ini_set('display_errors', 'off');
include'../../inc/inc.php';
?>
<html>
<head>
<title>Login User RSIA Mardi Waloeja Malang</title>
<script language="javascript" type="text/javascript">
var repeat=1
var title=document.title
var leng=title.length
var start=1
function titlemove()
	{
  	titl=title.substring(start, leng) + title.substring(0, start)
  	document.title=titl
  	start++
  	if (start==leng+1)
		{
    	start=0
    	if (repeat==0)
    	return
  		}
  	setTimeout('titlemove()',140)
	}
if (document.title)
titlemove()
</script>

<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>

</head>
<body bgcolor="#ffffff" background='background.jpg'>

<table width="100%" height="100%" border="0">
<tr>
<td align="center" valign="center">
<font color='#000099' face='tahoma' size='6'><!--<b>LOGIN USER SIPDA RSIA MARDI WALOEJA MALANG
<br><br><br>--><br><br>


<table width="50%" border="1" cellpadding="10" cellspacing="10">
<tr>
<td>

<?php
echo"


";
?>
<table width="100%" border="0" cellpadding="10" cellspacing="10" bgcolor="#ffffff">


<tr>
<td colspan="2" align="center"><font face="tahoma" color="#000099" size="2"><b>LOGIN</td>
</tr>

<?php
$unit=$_GET['unit'];

if($unit=='')
{

?>

<tr>
<td width="10%"><font face="verdana" size="1">Unit</td>
<td>:

<select name="select" onchange="MM_jumpMenu('parent',this,0)">
        <option selected="selected"> [ Pilih Unit ] </option>
        <?php

	  echo"
	  <option value='index.php?unit=Direktur/ Wakil Direktur'>Direktur/ Wakil Direktur</option>
		<option value='index.php?unit=Yayasan Kesehatan (YK)'>Yayasan Kesehatan (YK)</option>
		<option value='index.php?unit=Receptionist'>Receptionist</option>
		<option value='index.php?unit=Kamar Bersalin'>Kamar Bersalin</option>
		<option value='index.php?unit=Kamar Bayi'>Kamar Bayi</option>
		<option value='index.php?unit=Kamar Anak'>Kamar Anak</option>
		<option value='index.php?unit=Poli Ibu Anak'>Poli Ibu & Anak</option>
		<option value='index.php?unit=Kamar Obat'>Kamar Obat</option>
		<option value='index.php?unit=Administrasi'>Administrasi</option>
		<option value='index.php?unit=Keuangan'>Keuangan</option>
	  ";

	  ?>
      </select>


</td>
</tr>

<tr>
<td width="10%"><font face="verdana" size="1">username</td>
<td>: <input type="password" name="pass">

</td>
</tr>

<tr>
<td width="10%"><font face="verdana" size="1">Password</td>
<td>: <input type="password" name="pass"></td>
</tr>

<tr>
<td colspan="2" align="center"><font face="verdana" size="1">
<?php echo"<input type='hidden' value='$unit' name='unit'>";?>
<input type="submit" value="LOGIN"></td>

</tr>


<?php }


else
	{
$unit=$_GET['unit'];
?>
<tr>
<td width="10%"><font face="verdana" size="1">Unit</td>
<td>: <?php echo"$unit";?>

</td>
</tr>
<?php echo"
<form method='post' action='p_l_a.php'>";?>
<tr>
<td width="10%"><font face="verdana" size="1">username</td>
<td>: <select name='user'>
<?php
	$cari=mysql_query("select *from m_user where unit='$unit' order by nama asc");
	if($cari)
		while($dt=mysql_fetch_array($cari))
		{
		echo"
		<option value='$dt[user]'>$dt[nama]</option>


		";
		}
?></select>
</td>
</tr>

<tr>
<td width="10%"><font face="verdana" size="1">Password</td>
<td>: <input type="password" name="pass"></td>
</tr>

<tr>
<td colspan="2" align="center"><font face="verdana" size="1">
<?php echo"<input type='hidden' value='$unit' name='unit'>";?>
<input type="submit" value="LOGIN"></td>

</tr>
<?php
}
?>

</table>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td colspan='3' align='center'><font size='1' face='verdana' color='#0000FF'><b>
Official Site RSIA MARDI WALOEJA
<br>
Supported By:
<br><a href='http://infongalam.com'>Infongalam.com
</a>
</td>
</tr>
</table>
</body>
</html>