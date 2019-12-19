<? include "session.php" ?>
<html>
<head>
<title>Artikel Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<link href="../images/Style1.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- ImageReady Slices (layout_dalam.psd) -->
<table width="100%" height="539" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
  <tr>
    <td width="129" height="228" class="L1"></td>
    <td width="18" align="right"><img src="../images/layout_dalam_02.gif" width="18" height="228" alt=""></td>
    <td width="939" valign="top" class="L2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th scope="col"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="842" height="200" title="Header Mardiwaloeja Malang">
          <param name="movie" value="../images/header_profile.swf">
          <param name="quality" value="high">
          <embed src="../images/header_profile.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="842" height="200"></embed>
        </object></th>
      </tr>
      <tr height="20">
        <th align="left" valign="bottom" class="marque"><marquee behavior="scroll" direction="left" scrolldelay="150" width="100%">
          ** Selamat Datang di Menu Administrator **
        </marquee></th>
      </tr>
    </table></td>
    <td width="20" class="L1"><img src="../images/layout_dalam_04.gif" width="18" height="228"></td>
    <td width="128" background="images/layout_dalam_04.gif" class="L1">&nbsp;</td>
  </tr>
  <tr>
    <td height="18" class="L3"></td>
    <td align="right"><img src="../images/layout_dalam_07.gif" width="18" height="18" alt=""></td>
    <td class="L4"></td>
    <td valign="top" class="L3"><img src="../images/layout_dalam_09.gif" width="18" height="18"></td>
    <td class="L3"></td>
  </tr>
  <tr>
    <td rowspan="3"></td>
    <td height="248" align="right" class="L5"></td>
    <td align="left" valign="top" bgcolor="#8f8f8f"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th height="25" bgcolor="#000000" scope="col"><? include "menu_adm.php" ?></th>
      </tr>
    </table>
        <hr>
        <!---perintah php untuk profile -->
        <?php 
	include"con_rs.php";
	
		$warna1="#E1E1E1";
		$warna2="#FFDDEE";
		$counter=1;
		if($_GET['action']=="delete"){ mysql_query("delete from artikel where idartikel='".mysql_real_escape_string($_GET['id'])."'");}
			 
	$string="SELECT * FROM kontak";
	$query=mysql_query($string);
	echo "<table border='0' width='100%' cellpadding='5px'>
			<tr bgcolor='#0099FF' class='judulcontent'>
			<td>Nama</td><td>Alamat</td><td>Email</td><td>Umur</td><td>Jenis Kelamin</td><td>Telepon/HP</td><td>Isi Pesan</td><td>Action</td>
			</tr>";
	while($row=mysql_fetch_array($query)){

	if($counter%2==0)$warna=$warna2; else $warna=$warna1;
		
		echo"<tr class='isidetail' bgcolor=".$warna." onMouseOver=style.backgroundColor='#AAD5FF' onMouseOut=style.backgroundColor='".$warna."'>";
		echo"<td align='center'>".$row['nama']."</td><td align='center'>".$row['alamat']."</td><td align='center'>".$row['email']."</td><td align='center'>".$row['umur']."</td><td align='Left'>".$row['jeniskelamin']."</td><td align='center'>telepon</td><td>".$row['pesan']."
		<td><a href='artikel_adm.php?id=".$row['id']."&action=delete'>Delete</a><br/>
			
		</td>";
		
		$counter++; //membuat perulangan
		
		}	;//akhir dari perintah while 
		
		echo"</tr></table>";
						
	?>
        <hr></td>
    <td class="L6"></td>
  </tr>
  <tr>
    <td height="18" align="right"><img src="../images/layout_dalam_16.gif" width="18" height="18" alt=""></td>
    <td class="L7"></td>
    <td valign="top"><img src="../images/layout_dalam_18.gif" width="18" height="18" alt=""></td>
    <td></td>
  </tr>
  <tr>
    <td height="27" colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>