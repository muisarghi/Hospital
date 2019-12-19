<? include "session.php" ?>
<html>
<head>
<title>Agenda Administrator</title>
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
		if($_GET['action']=="delete"){ mysql_query("delete from agenda where id='".mysql_real_escape_string($_GET['id'])."'");}
			 
	$string="SELECT * FROM agenda";
	$query=mysql_query($string);
	echo "<table border='0' width='100%' cellpadding='5px'>
			<tr bgcolor='#0099FF' class='judulcontent'>
				<td>Id</td><td>Tanggal</td><td>Isi</td><td>Status</td><td>Kontak</td><td>Action</td>
			</tr>";
	while($row=mysql_fetch_array($query)){

	if($counter%2==0)$warna=$warna2; else $warna=$warna1;
	if($row['status']==1){$publish="Publish";} else { $publish="Unpublish";};
	
		echo"<tr class='isidetail' bgcolor=".$warna." onMouseOver=style.backgroundColor='#AAD5FF' onMouseOut=style.backgroundColor='".$warna."'>";
		echo"<td align='center'>".$row['id']."</td>
			 <td align='center'>".$row['tanggal']."</td>
 			 <td align='Left'><b>[".$row['unit']."]</b><br>".substr($row['acara'],0,150)."....<a href='detail_agenda_adm.php?id=".$row['id']."'>detail</a></td>
			 <td align='center'>$publish</td>
			 <td align='center'>".$row['kontak']."</td>
			<td><a href='agenda_adm.php?id=".$row['id']."&action=delete'>Delete</a><br/>
						
		</td>";
		
		$counter++; //membuat perulangan
		
		}	;//akhir dari perintah while 
		
		echo"</tr></table>";
						
	?>
        <hr>
        <table width="600" border="1" align="center" cellpadding="4" cellspacing="0">
          <tr>
            <td bgcolor="#990000"><div align="center" class="judulcontent"><strong>Tambah Agenda Baru </strong></div></td>
          </tr>
          <tr>
            <td><form action="simpan_agenda_adm.php" name="frmartikel" method="post">
                <table border="0" align="center" cellpadding="2" cellspacing="0" >
                  <tr>
                    <td class="judulcontent">Tanggal :</td>
                    <td>
					<!--membuat tanggal-->
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
else {echo "<option value=".$bulan[$i].">".$bulan[$i]."</option>";}
}
echo '</select>';

//membuat combo box tahun
echo '<select name="tahun">';
for($tahun=2011; $tahun<2020; $tahun++){
if ($tahun==$tgl_lahir[0])
       {echo "<option value=\"$tahun\"selected>$tahun</option>";}
else {echo "<option value=\"$tahun\">$tahun</option>";}
}
echo '</select>';
?></td>
                  </tr>
                  <tr>
                    <td class="judulcontent">Waktu : </td>
                    <td><input type="text" name="jamart"></td>
                  </tr>
                  <tr>
                    <td width="64" class="judulcontent">Tempat : </td>
                    <td width="491"><input type="text" name="tempatart"></td>
                  </tr>
                  <tr>
                    <td class="judulcontent">Unit :</td>
                    <td><select name="unitart">
                        <? $query2="SELECT unit from unit";
										$data=mysql_query($query2);
										while($op=mysql_fetch_array($data)){
										echo "<option value='".$op['unit']."'>".$op['unit']."</option>";
										}
									?>
                      </select>                    </td>
                  </tr>
                  <tr>
                    <td class="judulcontent">Kontak  :</td>
                    <td><input type="text" name="kontakart"></td>
                  </tr>
                  <tr>
                    <td class="judulcontent">Acara :</td>
                    <td><textarea name="isiart" cols="60" rows="20"></textarea></td>
                  </tr>
                  <tr>
                    <td class="judulcontent">Status :</td>
                    <td><select name="statusart">
                        <option value="1">Publish</option>
                        <option value="0">Unpublish</option>
                    </select></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center"><a href="agenda_adm.php">
                      <input type="submit" name="submit" value="Simpan">
                      <input type="reset" name="reset" value="Batal">
                    </a></td>
                  </tr>
                </table>
            </form></td>
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