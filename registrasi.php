<html>
<head>
<title>Registrasi Anggota</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<link href="images/Style1.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="images/mm_menu.js"></script>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<script language="JavaScript1.2">mmLoadMenus();</script>
<!-- ImageReady Slices (layout_dalam.psd) -->
<table width="100%" height="539" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01"><!--DWLayoutTable-->
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
    <td align="center" bgcolor="#8f8f8f"><p class="marque">Registrasi Anggota </p>
	
      <form action="simpan_register.php" method="post" enctype="multipart/form-data" name="frmregistrasianggota">
	  <table width="598" height="25" border="0" align="center" cellpadding="4" cellspacing="3" bordercolor="#000000">
      <tr>
        <td width="144" align="left" bgcolor="#FFCCCC">Nama Anggota : </td>
        <td width="360" bgcolor="#CCCCCC"><input type="text" name="nama" size="40"></td>
      </tr>
      <tr>
        <td align="left" bgcolor="#FFCCCC">Alamat : </td>
        <td bgcolor="#CCCCCC"><input type="text" name="alamat" size="60"></td>
      </tr>
      <tr>
        <td align="left" bgcolor="#FFCCCC">E-mail (User Id) : </td>
        <td bgcolor="#CCCCCC"><input type="text" name="email" size="40"></td>
      </tr>
      <tr>
        <td align="left" bgcolor="#FFCCCC">Tanggal Lahir : </td>
        <td bgcolor="#CCCCCC">
		
		<!---pembuatan dropdown tangga lahir -->
<?php 
$tgl_lahir = explode('-', $row['tanggal_lahir']); 
//membuat array bulan
$bulan=array("Januari" ,"Februari", " Maret" ,"April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

//membuat combo box hari
echo '<select name="hari">';
$hari=1;
while($hari<=31) {
       if ($hari==$tgl_lahir[2])
              {echo "<option value=\"$hari\"selected>$hari</option>";}
       else {echo "<option value=\"$hari\">$hari</option>";}
$hari++;
}
echo '</select>';

//membuat combo box bulan
echo '<select name="bulan"> ';
$jumlah=count($bulan);
$d=1;
for($i=0; $i<$jumlah ; $i++){
$x=$d+$i;
if ($x==$tgl_lahir[1])
       {echo "<option value=\"$x\"selected>".$bulan[$i]."</option>";}
else {echo "<option value=$x>".$bulan[$i]."</option>";}
}
echo '</select>';

//membuat combo box tahun
echo '<select name="tahun">';
for($tahun=1960; $tahun<2020; $tahun++){
if ($tahun==$tgl_lahir[0])
       {echo "<option value=\"$tahun\"selected>$tahun</option>";}
else {echo "<option value=\"$tahun\">$tahun</option>";}
}
echo '</select>';
?>		</td>
      </tr>
      <tr>
        <td align="left" bgcolor="#FFCCCC">Foto : </td>
        <td bgcolor="#CCCCCC"><input type="file" name="picture" size="40"></td>
      </tr>
      <tr>
        <td align="left" bgcolor="#FFCCCC">Password Login : </td>
        <td bgcolor="#CCCCCC"><input type="password" name="password" size="35"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" value="Simpan"> <input type="reset" name="reset" value="Batal"> </td>
      </tr>
    </table>
	</form>
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