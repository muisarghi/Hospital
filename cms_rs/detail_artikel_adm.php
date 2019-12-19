<? include "session.php" ?>
<html>
<head>
<title>Detail Artikel Administrator</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<link href="../images/Style1.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {
	color: #990000;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
-->
</style>
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
    <td align="left" valign="top" bgcolor="#8f8f8f">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th height="25" bgcolor="#000000" scope="col"><? include "menu_adm.php" ?></th>
      </tr>
      </table>
    <hr>  
	<?php
	include"con_rs.php";
			 
	$string="SELECT * FROM artikel WHERE idartikel='".mysql_real_escape_string($_GET['id'])."'";
	$query=mysql_query($string);
	?>
	<a href="artikel_adm.php">Back</a><br/>
	<br/>
    <!---perintah php untuk profile -->
    <table width="702" border="0" align="center" cellpadding="4" cellspacing="0">
      <tr>
        <td width="694"><?php 
	while($row=mysql_fetch_object($query)){
	$id=$row->idartikel;
	$tanggal=$row->tanggal;
	$kategori=$row->kategori;
	$judul=$row->judul;
	$isi=$row->isi;
	$status=$row->status;

	if($status==1){$publish="Publish";} else { $publish="Unpublish";};
	
	echo "<div class='marque'>ID Artikel       :<b> ".$id."</b></div>";
	echo "<div class='marque'>Tanggal Posting  :<b>".$tanggal."</b></div>";
	echo "<div class='marque'>Status Artikel   :<b> ".$publish."</b></div>";
	echo "<div class='marque'>Kategori Artikel :<b> ".$kategori."</b></div>";
	echo "<div class='marque'>Judul Artikel    :<b> ".$judul."</b></div>";
	echo "<div class='marque'>Isi Artikel      :</div>
	<div align='justify' class='konten2'>".$isi."</div>";

		
		}	;//akhir dari perintah while 

						
	?></td>
      </tr>
    </table></td>
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