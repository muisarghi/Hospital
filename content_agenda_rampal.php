<html>
<head>
<title>Pofile RS Mardiwaloeja Malang</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<link href="images/Style1.css" rel="stylesheet" type="text/css">

<style type="text/css">
<!--
.style5 {color: #993300}
-->
</style>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<script language="JavaScript1.2">mmLoadMenus();</script>
<!-- ImageReady Slices (layout_dalam.psd) -->
<table width="100%" height="539" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
  <tr>
    <td width="129" height="228" class="L1"></td>
    <td width="18" align="right"><img src="images/layout_dalam_02.gif" width="18" height="228" alt=""></td>
    <td width="939" valign="top" class="L2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th scope="col"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="842" height="200" title="Header Mardiwaloeja Malang">
          <param name="movie" value="images/header_profile.swf">
          <param name="quality" value="high">
          <embed src="images/header_profile.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="842" height="200"></embed>
        </object></th>
      </tr>
      <tr height="20">
        <th align="left" valign="bottom"><? include"menu.php" ?></th>
      </tr>
    </table></td>
    <td width="20" class="L1"><img src="images/layout_dalam_04.gif" width="18" height="228"></td>
    <td width="128" background="images/layout_dalam_04.gif" class="L1">&nbsp;</td>
  </tr>
  <tr>
    <td height="18" class="L3"></td>
    <td align="right"><img src="images/layout_dalam_07.gif" width="18" height="18" alt=""></td>
    <td class="L4"></td>
    <td valign="top" class="L3"><img src="images/layout_dalam_09.gif" width="18" height="18"></td>
    <td class="L3"></td>
  </tr>
  <tr>
    <td rowspan="3"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td height="248" align="right" class="L5"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td valign="top" bgcolor="#8f8f8f" class="background"><p><img src="images/agenda.png" width="450" height="50"></p>
      <hr>
	  	  <div align="center" class="judulcontent">Agenda RS Mardiwaloeja Rampal-Malang
      </div>
	  <table width="800" align="center" cellpadding="5" >
	  	<tr >
			<td align="left">
      <p>
	      <?php 
	include"con_rs.php";
	
		$warna1="#E1E1E1";
		$warna2="#FFDDEE";
		$counter=1;
			 
	$string="SELECT * FROM agenda where unit='RS Mardiwaluya Rampal'";
	$query=mysql_query($string);
	echo "<table border='0' width='100%' cellpadding='5px'>
			<tr bgcolor='#0099FF' class='judulcontent'>
				<td>Id</td><td>Tanggal</td><td>Waktu</td><td>Tempat</td><td>Acara</td><td>Kontak</td>
			</tr>";
	while($row=mysql_fetch_array($query)){

	if($counter%2==0)$warna=$warna2; else $warna=$warna1;
	
		echo"<tr class='isidetail; transp' bgcolor=".$warna." onMouseOver=style.backgroundColor='#AAD5FF' onMouseOut=style.backgroundColor='".$warna."'>";
		echo"<td align='center'>".$row['id']."</td>
			 <td align='center'>".$row['tanggal']."</td>
			 <td align='center'>".$row['waktu']."</td>
			 <td align='center'>".$row['tempat']."</td>
 			 <td align='Left'>".substr($row['acara'],0,150)."....<a href='detail_content_agenda_rampal.php?id=".$row['id']."'>detail</a></td>
			 <td align='center'>".$row['kontak']."</td>
						
		</td>";
		
		$counter++; //membuat perulangan
		
		}	;//akhir dari perintah while 
		
		echo"</tr></table>";
						
	?>  
	  </p>		</td>
	</tr>
</table>

    </td>
    <td valign="top" class="L6"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="18" align="right"><img src="images/layout_dalam_16.gif" width="18" height="18" alt=""></td>
    <td class="L7"></td>
    <td valign="top"><img src="images/layout_dalam_18.gif" width="18" height="18" alt=""></td>
    <td></td>
  </tr>
  <tr>
    <td height="27" colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<!-- End ImageReady Slices -->
</body>
</html>