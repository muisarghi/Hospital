<? include "session.php" ?>
<html>
<head>
<title>Pasien Bertanya</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<link href="images/Style1.css" rel="stylesheet" type="text/css">

<script language="JavaScript" src="images/mm_menu.js"></script>
<style type="text/css">
<!--
body {
	background-repeat: repeat-y;
}
-->
</style></head>
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
    <td rowspan="3">&nbsp;</td>
    <td height="248" align="right" class="L5"></td>
    <td align="center" valign="top" bgcolor="#8f8f8f" class="background">
	  <div align="right">Selamat Datang ! 	
	
	    <?php 
		  //connect to database
		  include 'con_rs.php';
		  //get the user name
		  $query="select * from user where email='".$_SESSION['user_id']."'";
		  $result=mysql_query($query);
		  $row=mysql_fetch_array($result);
		  echo ' '.$row['email'];
		  echo ' (<a href="logout.php" title="Logout">Logout</a>)';
		  ?>
      </div>
	  <hr>	
	  
      <p align="center" ><h3>Halaman	Rubrik Kesehatan Online!</h3> 
      <br> 
        <div  class="marque">Silahkan ajukan pertanyaan Anda kepada kami, dengan mengisikan pertanyaan pada format dibawah ini!!</div>  <br>
		<table width='635' border='0' cellspacing='2' cellpadding='4' class="judulcontent">
  				<tr>
   					 <td width='100' align='center' bgcolor='#33CCFF'  >Tanggal </td>
   					 <td width='250' align='center' bgcolor='#33CCFF' >Pertanyaan</td>
   					 <td width='300' align='center' bgcolor='#33CCFF'  >Jawaban</td>
		  </tr>
		<? include "con_rs.php";
		
		$sqlstr="select * from rubrik where iduser='".$_SESSION['user_id']."'";
		$sqlquery=mysql_query($sqlstr);
		while($data=mysql_fetch_array($sqlquery)){
		echo "<tr>
   				 <td class='transp' bgcolor='#CDEEFE' width='100'>".$data['tanggal']."</td>
    			  <td class='transp' bgcolor='#CDEEFE' width='250'> ".$data['pertanyaan']."</td>
    			  <td class='transp' width='300'>".$data['jawaban']."</td>
  						</tr>
			";
		}
		?>
		</table>
		 <hr><form action="simpan_user_panel.php" method="post"><label class="marque">Kirim Pertanyaan :</label><br>
		   <input  type="hidden" name="user" value="<? echo $_SESSION['user_id'] ?>">
		   <textarea name="pertanyaan" cols="30" rows="10" class="transp" onMouseOver="style.backgroundColor='#FFE3B9'" onMouseOut="style.backgroundColor='#CDEEFE'"></textarea>
		   <br> 
		   <input type="submit" name="submit" value="Kirim">
    </form> </td>
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