<html>
<head>
<title>Artikel</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<link href="images/Style1.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="images/mm_menu.js"></script>
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
    <td valign="top" bgcolor="#8f8f8f" class="background"><p><img src="images/artikel.png" alt="Artikel RS Mardiwaloeja" width="450" height="50"></p>
      <hr>
   <table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <td width="224" valign="top"> <div class="judul_menu">Artikel</div><?php
	   include "con_rs.php";
	   
	   $sqlstr="Select * from artikel where status=1";
	   $sqlquery=mysql_query($sqlstr);
	   
	   while($data=mysql_fetch_array($sqlquery)){
		echo "<img src='images/panah.gif'><a href='detail_content_artikel.php?id=".$data['idartikel']."' class='nav_with_border'>".$data['judul']."</a><br>";
		};
		?>		<hr noshade="noshade" align="left" size="1px"/></td>
    <td width="602">
	
		  <p>
		    <?php
	   include "con_rs.php";
	   
	   $sqlstr="Select * from artikel where status=1";
	   $sqlquery=mysql_query($sqlstr);
	   
	   while($row=mysql_fetch_array($sqlquery)){	   
	   	echo "<div onMouseOver=style.backgroundColor='#A0A0A0'; padding=5px onMouseOut=style.backgroundColor='' class='border' >";
		echo "<div class='judulcontent2'><a href='detail_content_artikel.php?id=".$row['idartikel']."'>".$row['judul']."</a></div>";
		echo "<div class='tanggal'>   Tanggal : ".$row['tanggal']."</div>";
		echo "<div class='tanggal'>   Kategori :".$row['kategori']."</div>";
		echo "<div class='konten1'>   ".substr($row['isi'],0,150)."....<a href='detail_content_artikel.php?id=".$row['idartikel']."'>readmore</a></div></div><br>";
	  };

	   ?>	
	      </p>
		  <p>
</td>
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
