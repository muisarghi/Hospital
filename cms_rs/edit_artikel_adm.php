<? include "session.php" ?>
<html>
<head>
<title>Edit Artikel</title>
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
    <td align="center" valign="top" bgcolor="#8f8f8f">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th height="25" bgcolor="#000000" scope="col"><? include "menu_adm.php" ?></th>
      </tr>
      </table>
    <hr>
    <p class="judulcontent">Edit Daftar Artikel </p>
    <?php
include 'con_rs.php';
$sqlstr= "SELECT * FROM artikel WHERE idartikel='".mysql_real_escape_string($_GET['id'])."'";   
$result=mysql_query($sqlstr) or die ("Tidak bisa menemukan tabel");
$row=mysql_fetch_array($result);
?>
	<form action="simpan_edit_artikel_adm.php" name="formeditartikel" method="post" >
    <table width="728" border="1" cellpadding="5" cellspacing="0" class="marque">
	 <tr>
        <td align="right">Kategori</td>
        <td><select name="kategori">
			
									<? $query2="SELECT kategori from kategori";
										$data=mysql_query($query2);
										while($op=mysql_fetch_array($data)){
										if($row['kategori']==$op['kategori']){
										echo "<option value=".$op['kategori']." Selected>".$op['kategori']."</option>";
										} else {
										echo "<option value=".$op['kategori'].">".$op['kategori']."</option>";}}
									?>	

									</select>
									</td>
     </tr>
     <tr>
        <td width="96" align="right">Judul</td>
		<input type="hidden" name="id" value="<? echo $row['idartikel']?>" >
		<input type="hidden" name="cntr" value="<? echo $row['counter']?>">
        <td width="626"><input type="text" name="judul" id="idjudul" size="30" value="<? echo $row['judul']?>"> </td>
      </tr>
      <tr>
        <td align="right">Isi Profile </td>
        <td><textarea name="isi" cols="80" rows="40" style="background-color:#FBEAD2"><? echo $row['isi'] ?></textarea></td>
      </tr>
      <tr>
        <td align="right">Status</td>
        <td><? if($status==1){$publish="Publish";} else { $publish="Unpublish";}; echo "$publish" ?> ==><select name="status">
		<option value='1'>Publish</option>
		<option value='0'>Unpublish</option>								
			</select></td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td><input type="submit" name="submit" value="Simpan"> | <a href="artikel_adm.php"><input type="reset" name="reset" value="Batal"></a></td>
      </tr>
    </table>	
	</form>
    <p>&nbsp;</p></td>
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