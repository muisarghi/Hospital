<html>
<head>
<title>Galeri Mardiwaluya Rampal</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<link href="images/Style1.css" rel="stylesheet" type="text/css">
<!---prirobox style -->
<link href="css_pirobox/demo5/style.css" class="piro_style" media="screen" title="white" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/pirobox.js"></script>
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
    <td rowspan="3"></td>
    <td height="248" align="right" class="L5"></td>
    <td align="left" valign="top" bgcolor="#8f8f8f">
	<img src="images/galeri.png">
	<hr>  
    <!---perintah php untuk profile -->
<?
include "con_rs.php";
$str="SELECT * From galeri WHERE unit='RS Mardiwaluya Rampal'";
$query=mysql_query($str);
$c=1;
echo '<table cellspacing="3" cellpadding="5" align="center">';  
echo '<tr>';  
while($row=mysql_fetch_array($query)){
echo "<td style='border:1px solid #000000;' align='center'>";
echo "<a href='".$row['pict']."' class='pirobox_gall' title='".$row['deskripsi']."'><img src='".$row['pict']."' width=150 height=100></a>";
echo "<br>".$row['deskripsi']."</td>";
if (($c%5)==0){

	echo "</tr><tr>";};
$c++;
};
echo '</tr>';  
echo '</table>'; 
?>
	
	<hr>
	<div></div></td>
    <td class="L6"></td>
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

</body>
</html>