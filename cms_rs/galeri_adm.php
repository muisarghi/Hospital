<? include "session.php";
	
 ?>
<html>
<head>
<title>Galeri Administrator</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<link href="../images/Style1.css" rel="stylesheet" type="text/css">
<!---prirobox style -->
<link href="../css_pirobox/demo5/style.css" class="piro_style" media="screen" title="white" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/pirobox.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$().piroBox({
			my_speed: 400, //animation speed
			bg_alpha: 0.3, //background opacity
			slideShow : true, // true == slideshow on, false == slideshow off
			slideSpeed : 4, //slideshow duration in seconds(3 to 6 Recommended)
			close_all : '.piro_close,.piro_overlay'// add class .piro_overlay(with comma)if you want overlay click close piroBox

	});
});
</script>
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
    <!---perintah php untuk profile -->
<table width="98%" border="1" align="center">
<tr height="20"><td align="center" bgcolor="#000000" class="judulcontent">Galeri RS Mardiwaluya Kauman</td><td align="center" bgcolor="#000000"></td>
<td align="center" bgcolor="#000000" class="judulcontent">RS Mardiwaluya Rampal</td>
</tr>
<tr>
<td width="50%">
<?
include "con_rs.php";
$str="SELECT * From galeri where unit='RS Mardiwaluya Kauman'";
$query=mysql_query($str);
$c=1;
echo '<table cellspacing="3" cellpadding="5" align="center">';  
echo '<tr>';  
while($row=mysql_fetch_array($query)){
echo "<td style='border:2px solid #000000;' align='center'>";
echo "<a href=../".$row['pict']." class='pirobox_gall' title='".$row['deskripsi']."'><img src='../".$row['pict']."' width=100 height=70></a>";
echo "<br><div class='tanggal'>".$row['deskripsi']."</div></td>";
if (($c%3)==0){

	echo "</tr><tr>";};
$c++;
};
echo '</tr>';  
echo '</table>'; 
?></td>
<td width="1%" bgcolor="#666666"></td>
<td width="49%">
<?
include "con_rs.php";
$str="SELECT * From galeri where unit='RS Mardiwaluya Rampal'";
$query=mysql_query($str);
$c=1;
echo '<table cellspacing="3" cellpadding="5" align="center">';  
echo '<tr>';  
while($row=mysql_fetch_array($query)){
echo "<td style='border:2px solid #000000;' align='center'>";
echo "<a href=../".$row['pict']." class='pirobox_gall' title='".$row['deskripsi']."'><img src='../".$row['pict']."' width=100 height=70></a>";
echo "<br><div class='tanggal'>".$row['deskripsi']."</div></td>";
if (($c%3)==0){

	echo "</tr><tr>";};
$c++;
};
echo '</tr>';  
echo '</table>'; 
?></td>
</tr>
</table>
<hr>
	<div>
	<form action="simpan_galeri_adm.php"  method="post" name="galeriupload" enctype="multipart/form-data">
	  <table width="400" border="0" align="center" cellpadding="4" cellspacing="0">
        <tr>
          <td width="81">Picture : </td>
          <td width="303"><input type="file" name="foto" ></td>
        </tr>
        <tr>
          <td>Deskripsi : </td>
          <td><input type="text" name="deskripsi"  size="40"></td>
        </tr>
        <tr>
          <td>Unit : </td>
          <td><select name="unit">
                        <? 
						include "con_rs.php";
						$query2="SELECT unit from unit";
										$data=mysql_query($query2);
										while($op=mysql_fetch_array($data)){
										echo "<option value='".$op['unit']."'>".$op['unit']."</option>";
										}
									?>
                      </select>                 </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><a href="galeri_adm.php"><input type="submit" name="submit" value="Upload"></a></td>
        </tr>
      </table>
	  </form>
	</div></td>
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