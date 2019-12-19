<html>
<head>
<title>Login Administrator Rumah Sakit Mardi Waluyo</title>
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
</head>
<body bgcolor="#ffffff">

<table width="100%" height="100%" border="0">
<tr>
<td align="center" valign="center">
<font color='#000099' face='tahoma' size='6'><b>Login Administrator Rumah Sakit Mardi Waluyo
<br><br><br>
<table width="50%" border="1" cellpadding="10" cellspacing="10">
<tr>
<td>

<?php
echo"
<form method='post' action='p_l_a.php'>

";
?>
<table width="100%" border="0" cellpadding="10" cellspacing="10" bgcolor="#ffffff">



<tr>
<td colspan="2" align="center"><font face="tahoma" color="#000099" size="2"><b>LOGIN</td>
</tr>

<tr>
<td width="50%"><font face="verdana" size="1">Username</td>
<td>: <input type="text" name="user"></td>
</tr>

<tr>
<td width="50%"><font face="verdana" size="1">Password</td>
<td>: <input type="password" name="pass"></td>
</tr>

<tr>
<td colspan="2" align="center"><font face="verdana" size="1"><input type="submit" value="LOGIN"></td>

</tr>


</table>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td colspan='3' align='center'><font size='1' face='verdana' color='#0000FF'><b>
Official Site Rumah Sakit Mardi Waluyo
<br>
Supported By:
<br><a href='../index.php?option=com_event&task=kontaki' target='_blank'>
infongalam.com</a>
</td>
</tr>
</table>
</body>
</html>