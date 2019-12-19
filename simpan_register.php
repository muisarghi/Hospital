<html>
<head>
<title>layout_dalam</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<link href="images/Style1.css" rel="stylesheet" type="text/css">

<script language="JavaScript" src="images/mm_menu.js"></script>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<script language="JavaScript1.2">mmLoadMenus();</script>
<!-- ImageReady Slices (layout_dalam.psd) -->
<table width="100%" height="539" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
  <tr>
    <td width="114" height="228" class="L1"></td>
    <td width="18" align="right"><img src="images/layout_dalam_02.gif" width="18" height="228" alt=""></td>
    <td width="842" valign="top" class="L2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th scope="col"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="842" height="200" title="Header Mardiwaloeja Malang">
          <param name="movie" value="images/header_profile.swf">
          <param name="quality" value="high">
          <embed src="images/header_profile.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="842" height="200"></embed>
        </object></th>
      </tr>
      <tr height="20">
        <th align="left" valign="bottom"><? include "menu.php" ?> </th>
      </tr>
    </table></td>
    <td width="18" background="images/layout_dalam_04.gif">&nbsp;</td>
    <td width="114" class="L1">&nbsp;</td>
  </tr>
  <tr>
    <td height="18" class="L3"></td>
    <td align="right"><img src="images/layout_dalam_07.gif" width="18" height="18" alt=""></td>
    <td class="L4"></td>
    <td valign="top"><img src="images/layout_dalam_09.gif" width="18" height="18" alt=""></td>
    <td class="L3"></td>
  </tr>
  <tr>
    <td rowspan="3"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td height="248" align="right" class="L5"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td align="center" bgcolor="#8f8f8f"><p>
	
<?php 
include "con_rs.php";

$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$ttl=$_POST['tahun']."-".$_POST['bulan']."-".$_POST['hari'];
$password=md5($_POST['password']);
$pss=$_POST['password'];

////untuk upload foto
$fileName = $_FILES['picture']['name'];  
$fileSize = $_FILES['picture']['size'];  
$fileError = $_FILES['picture']['error']; 

$foto = 'pictures/'.$fileName; 

if($fileSize > 0 || $fileError == 0){  
  $move = move_uploaded_file($_FILES['picture']['tmp_name'], 'pictures/'.$fileName);  
 }else{  
 echo ""; 
}  ;

$sql="SELECT * FROM user WHERE nama='$nama'";
$result= mysql_query($sql) or die("Ulangi pengisian anda! Data gagal di inputkan <br> <a href=registrasi.php>Registrasi</a>");
$data  = mysql_num_rows($result); 

if ($data == 0) 
      { 

$sql2="INSERT INTO user set nama='$nama', alamat='$alamat', email='$email', tgllahir='$ttl', foto='$foto', password='$password'";
$result2= mysql_query($sql2) or die("Ulangi pengisian anda! Data gagal di inputkan <br> <a href=registrasi.php>Registrasi</a>");

if($result2){
	echo "<h1>Selamat!!</h1><br>Anda telah terdaftar sebagai anggota website Rumah Sakit Mardi Waloeja Malang.<br>Untuk memastikan bahwa anda telah terdaftar silahkan cek email anda!!<br><br><strong><a href=loginuser.php>Login</a>";
	} else { 
	echo "<strong>Silahkan Ulangi registrasi Anda!!!</strong>";
	
      } ;
   }else { echo "Nama user tersebut sudah ada."; 
 	} ;


mail($email,"RS Mardiwaluya Malang","Terimakasih atas submit anda sebagai anggota website RS Mardiwaluya Malang <br>
				dengan ini anda dapat menanyakan seputar masalah kesehatan kepada dokter ahli kami dengan login pada website kami!.
				user Id anda =".$email."<br>
				password =".$pss."<br>
				silahkan Login pada url berikut :
				http://www.rs-mardiwaluya-mlg.com/loginuser.php","From : Dokter RS Mardiwaluya Malang");


 ?>
	
	
	
	</p>
	
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