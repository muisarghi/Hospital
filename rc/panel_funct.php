<?php

class pogi

{

function del()
	{
	$id=$_GET['id'];
	$alm=$_GET['alm'];
	$db=$_GET['db'];
	$idpas=$_GET['idpas'];
	$status=$_GET['status'];
	$masuk="DELETE FROM m_$db where id='$id'";
	$query=mysql_query($masuk);
	if($masuk)
		{
		header("Location: index.php?task=mes&pes=Data Sudah Dihapus&idpas=$idpas&status=$status&alm=$alm");
		}
	else
		{
	echo"ERROR";
		}

	}


function dele()
	{
	$id=$_GET['id'];
	$alm=$_GET['alm'];
	$db=$_GET['db'];
	//$idpas=$_GET['idpas'];
	//$status=$_GET['status'];
	$masuk="DELETE FROM m_$db where id='$id'";
	$query=mysql_query($masuk);
	if($masuk)
		{
		header("Location: index.php?task=mes&pes=Data Sudah Dihapus&alm=$alm");
		}
	else
		{
	echo"ERROR";
		}

	}

function index()
	{
	echo" <br><br>
	Selamat Datang di HALAMAN RECEPTIONIST RSIA MARDI WALOEJA MALANG
	<br>
	<br>
	";

	}

function menu_infopas()
	{
	?>

	<center><h1>INFORMASI PASIEN</h1></center>
	<br><br>
	<table width="100%" border="0" cellpadding="10" cellspacing="10" class="adminlist">
	<tr>
	<td width="50%" align="center" valign="center">
	<a href="index.php?task=dapas_de"><img width="100px" src="../touch/patient.png" onmouseover=" this.src='../touch/patient_b.png'" onmouseout="this.src='../touch/patient.png'">
	<br><b>Data Pasien Dewasa</b>
	</a>
	</td>

	<td align="center" valign="center">
	<a href="index.php?task=dapas_an"><img width="100px" src="../touch/baby.png" onmouseover=" this.src='../touch/baby_b.png'" onmouseout="this.src='../touch/baby.png'">
	<br><b>Data Pasien Anak</b></a>
	</td>
	</table>

	<table width="100%" border="0" cellpadding="10" cellspacing="10" class="adminlist">
	<td align="center" valign="center" width="50%">
	<a href="index.php?task=bia_de"><img width="100px" src="../touch/patien-cost.png" onmouseover=" this.src='../touch/patien-cost_b.png'" onmouseout="this.src='../touch/patien-cost.png'">
	<br><b>Biaya Pasien Dewasa</b></a>
	</td>

	<td align="center" valign="center" width="50%">
	<a href="index.php?task=bia_an"><img width="100px" src="../touch/baby-cost.png" onmouseover=" this.src='../touch/baby-cost_b.png'" onmouseout="this.src='../touch/baby-cost.png'">
	<br><b>Biaya Pasien Anak</b></a>
	</td>

	</tr>
	</table>
	<?php
	}


function menu_infokmr()
	{
	?>

	<center><h1>INFORMASI KAMAR/ KELAS</h1></center>
	<br><br>
	<table width="100%" border="0" cellpadding="10" cellspacing="10" class="adminlist">
	<tr>
	<td width="50%" align="center" valign="center">
	<a href="index.php?task=kmr_de"><img width="100px" src="../touch/cospatien.jpg" onmouseover=" this.src='../touch/cospatien_b.jpg'" onmouseout="this.src='../touch/cospatien.jpg'">
	<br><b>Kamar Dewasa</b>
	</a>
	</td>

	<td align="center" valign="center">
	<a href="index.php?task=kmr_an"><img width="100px" src="../touch/baby-cost.png" onmouseover=" this.src='../touch/baby-cost_b.png'" onmouseout="this.src='../touch/baby-cost.png'">
	<br><b>Kamar Anak</b></a>
	</td>
	</table>

	<table width="100%" border="0" cellpadding="10" cellspacing="10" class="adminlist">
	<td align="center" valign="center" width="50%">
	<a href="index.php?task=infokmr_de"><img width="100px" src="../touch/coma.png" onmouseover=" this.src='../touch/coma_b.png'" onmouseout="this.src='../touch/coma.png'">
	<br><b>Informasi Kamar Dewasa</b></a>
	</td>

	<td align="center" valign="center" width="50%">
	<a href="index.php?task=infokmr_an"><img width="100px" src="../touch/baby-room.png" onmouseover=" this.src='../touch/baby-room_b.png'" onmouseout="this.src='../touch/baby-room.png'">
	<br><b>Informasi Kamar Anak</b></a>
	</td>

	</tr>
	</table>
	<?php
	}

function menu_pasbar()
	{
	?>

	<center><h1>PASIEN BARU</h1></center>
	<br><br>
	<table width="100%" border="0" cellpadding="10" cellspacing="10" class="adminlist">
	<tr>
	<td width="50%" align="center" valign="center">
	<a href="index.php?task=in_identpas"><img width="100px" src="../touch/patient.png" onmouseover=" this.src='../touch/patient_b.png'" onmouseout="this.src='../touch/patient.png'">
	<br><b>Pasien Dewasa</b>
	</a>
	</td>

	<td align="center" valign="center">
	<a href="index.php?task=in_identpasan"><img width="100px" src="../touch/baby.png" onmouseover=" this.src='../touch/baby_b.png'" onmouseout="this.src='../touch/baby.png'">
	<br><b>Pasien Anak</b></a>
	</td>
	</table>

	<?php
	}

function gt_ac()
	{
	$pass=$_SESSION['pes2'];

	$cari="SELECT *FROM m_user where pass='$pass'";
	$hasil=mysql_query($cari);
	if($hasil)
	$data=mysql_fetch_array($hasil);

		$id=$data['id'];
		$nama=$data['nama'];
		$pass=$data['pass1'];
		$user=$data['user'];

	echo"

	<b>Pergantian Account Administrator</b>
	<br>
	<br>
	<form method='post' action='index.php?task=progtac'>
	<table width='50%' border='0' cellpadding='0' cellspacing='0'>
	<tr>
	<td width='20%'><font size='2'>Nama</td>
	<td>: <input type='text' name='nama' value='$nama'></td>
	</tr>

	<tr>
	<td width='20%'><font size='2'>Username</td>
	<td>: <input type='text' name='user' value='$user'></td>
	</tr>

	<tr>
	<td width='20%'><font size='2'>Password</td>
	<td>: <input type='text' name='pass' value='$pass'></</td>
	</tr>

	<tr>
	<td colspan='2' align='left'>
	<input type='hidden' name='id' value='$id'>
	<input type='submit' value='SIMPAN'>
	</td>
	</tr>
	</table>
	</form>
	";

	}

function progtac()
	{
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	$r=MD5($pass).$id;
	$x=$id*942;
	//$y=$no_angg;
	$z='2ae2o';
	$w='3g2y2n1c2l1m';
	$pes2='3g2y2n1c2l1m'.MD5($pass).$x.'2ae2o';


	$sql = "UPDATE m_user SET nama= '$nama', user='$user', pass='$r', pass1='$pass' WHERE id='$id'";
	$result = mysql_query($sql);

	if ($result)
		{
		echo"Data Sudah Diubah, Silahkan Melakukan Login Kembali<a href='logout.php'>Logout</a>";
		}
	else{echo"ERROR";}
	}



function kmr_de()
	{
	if(!isset($_GET['page'])){
		$page = 1;
	} else {
		$page = $_GET['page'];
	}

	$max_results =25;
	$from=(($page*$max_results)-$max_results);
	echo"
	<center><h1>Biaya Ruangan/ Kelas Dewasa</h1></center>
	<br><br>
	<b>$pesan</b>
	<br><br>


	<table class='adminlist'>
	<tr>
	<td>Kelas</td>
	<td>Ruang</td><td>Harga/ hari</td>

	</tr>
	";
	$c=mysql_query("SELECT *from m_konfrg where utk='Pasien' order by kls_rg ASC LIMIT $from, $max_results");
	if($c)
	while($d=mysql_fetch_array($c))
		{
		echo"
		<tr>
		<td>$d[kls_rg]</td>
		<td>$d[nm_rg]</td>";
		$hg=$d[hrg_rg];
		$harga=number_format($hg,0,",",".");
		echo"
		<td>$harga</td>

		</tr>
		";
		}

	echo"
	</table>";
	$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_konfrg where utk='Pasien'"),0);
	$max=mysql_result(mysql_query("SELECT MAX(id) FROM m_konfrg"),0);
	$total_pages = ceil($total_results / $max_results);

	echo "<center>[Page]<br>";


	if($page > 1){
		$prev = ($page - 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=kmr_de&page=$prev\">&lt;&lt;Prev</a> ";
	}

	for($i = 1; $i <= $total_pages; $i++){
		if(($page) == $i){
			echo "$i ";
			} else {
				echo "<a href=\"".$_SERVER['PHP_SELF']."?task=kmr_de&page=$i\">$i</a> ";
		}
	}


	if($page < $total_pages){
		$next = ($page + 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=kmr_de&page=$next\">Next>></a>";

		} echo"
			<br>
		<br>Terdapat $total_results Ruangan";
	}


function kmr_an()
	{
	if(!isset($_GET['page'])){
		$page = 1;
	} else {
		$page = $_GET['page'];
	}

	$max_results =25;
	$from=(($page*$max_results)-$max_results);
	echo"
	<center><h1>Biaya Ruangan/ Kelas Anak/ Bayi</h1></center>
	<br><br>
	<b>$pesan</b>
	<br><br>


	<table class='adminlist'>
	<tr>
	<td>Kelas</td>
	<td>Ruang</td><td>Harga/ hari</td>

	</tr>
	";
	$c=mysql_query("SELECT *from m_konfrg where utk='Bayi' order by kls_rg ASC LIMIT $from, $max_results");
	if($c)
	while($d=mysql_fetch_array($c))
		{
		echo"
		<tr>
		<td>$d[kls_rg]</td>
		<td>$d[nm_rg]</td>";
		$hg=$d[hrg_rg];
		$harga=number_format($hg,0,",",".");
		echo"
		<td>$harga</td>
		</tr>
		";
		}

	echo"
	</table>";
	$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_konfrg where utk='Bayi'"),0);
	$max=mysql_result(mysql_query("SELECT MAX(id) FROM m_konfrg"),0);
	$total_pages = ceil($total_results / $max_results);

	echo "<center>[Page]<br>";


	if($page > 1){
		$prev = ($page - 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=kmr_an&page=$prev\">&lt;&lt;Prev</a> ";
	}

	for($i = 1; $i <= $total_pages; $i++){
		if(($page) == $i){
			echo "$i ";
			} else {
				echo "<a href=\"".$_SERVER['PHP_SELF']."?task=kmr_an&page=$i\">$i</a> ";
		}
	}


	if($page < $total_pages){
		$next = ($page + 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=kmr_an&page=$next\">Next>></a>";

		} echo"
			<br>
		<br>Terdapat $total_results Ruangan
	";
	}

function infokmr_de()
	{
	if(!isset($_GET['page'])){
		$page = 1;
	} else {
		$page = $_GET['page'];
	}

	$max_results =25;
	$from=(($page*$max_results)-$max_results);
	echo"
	<center><h1>Informasi Ruangan/ Kelas Dewasa</h1></center>
	<br><br>
	<b>$pesan</b>
	<br><br>


	<table class='adminlist'>
	<tr>
	<td>Kelas</td>
	<td>Ruang</td><td>Harga/ hari</td>

	</tr>
	";
	$c=mysql_query("SELECT *from m_konfrg where utk='Pasien' and status='0' order by kls_rg ASC LIMIT $from, $max_results");
	if($c)
	while($d=mysql_fetch_array($c))
		{
		echo"
		<tr>
		<td>$d[kls_rg]</td>
		<td>$d[nm_rg]</td>";
		$hg=$d[hrg_rg];
		$harga=number_format($hg,0,",",".");
		echo"
		<td>$harga</td>

		</tr>
		";
		}

	echo"
	</table>";
	$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_konfrg where utk='Pasien'"),0);
	$max=mysql_result(mysql_query("SELECT MAX(id) FROM m_konfrg"),0);
	$total_pages = ceil($total_results / $max_results);

	echo "<center>[Page]<br>";


	if($page > 1){
		$prev = ($page - 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=kmr_de&page=$prev\">&lt;&lt;Prev</a> ";
	}

	for($i = 1; $i <= $total_pages; $i++){
		if(($page) == $i){
			echo "$i ";
			} else {
				echo "<a href=\"".$_SERVER['PHP_SELF']."?task=kmr_de&page=$i\">$i</a> ";
		}
	}


	if($page < $total_pages){
		$next = ($page + 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=kmr_de&page=$next\">Next>></a>";

		} echo"
			<br>
		<br>Terdapat $total_results Ruangan";
	}


function infokmr_an()
	{
	if(!isset($_GET['page'])){
		$page = 1;
	} else {
		$page = $_GET['page'];
	}

	$max_results =25;
	$from=(($page*$max_results)-$max_results);
	echo"
	<center><h1>Informasi Ruangan/ Kelas Anak/ Bayi</h1></center>
	<br><br>
	<b>$pesan</b>
	<br><br>


	<table class='adminlist'>
	<tr>
	<td>Kelas</td>
	<td>Ruang</td><td>Harga/ hari</td>

	</tr>
	";
	$c=mysql_query("SELECT *from m_konfrg where utk='Bayi' and status='0' order by kls_rg ASC LIMIT $from, $max_results");
	if($c)
	while($d=mysql_fetch_array($c))
		{
		echo"
		<tr>
		<td>$d[kls_rg]</td>
		<td>$d[nm_rg]</td>";
		$hg=$d[hrg_rg];
		$harga=number_format($hg,0,",",".");
		echo"
		<td>$harga</td>
		</tr>
		";
		}

	echo"
	</table>";
	$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_konfrg where utk='Bayi'"),0);
	$max=mysql_result(mysql_query("SELECT MAX(id) FROM m_konfrg"),0);
	$total_pages = ceil($total_results / $max_results);

	echo "<center>[Page]<br>";


	if($page > 1){
		$prev = ($page - 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=kmr_an&page=$prev\">&lt;&lt;Prev</a> ";
	}

	for($i = 1; $i <= $total_pages; $i++){
		if(($page) == $i){
			echo "$i ";
			} else {
				echo "<a href=\"".$_SERVER['PHP_SELF']."?task=kmr_an&page=$i\">$i</a> ";
		}
	}


	if($page < $total_pages){
		$next = ($page + 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=kmr_an&page=$next\">Next>></a>";

		} echo"
			<br>
		<br>Terdapat $total_results Ruangan
	";
	}


function in_identpas()
	{
	$pesan=$_GET['pesan'];
	/*
	<form method='post' action='index.php?task=ein_identpas'>
	<table class='adminlist'>
	<tr>
	<td>
	Pencarian Nama Pasien :
	</td>
	<td rowspan='2'>

	<input type='submit' value='CARI'>
	</td>
	</tr>

	<tr>
	<td width='30%'>

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien order by nama ASC");
	while ($a=mysql_fetch_array($a1))
		{
		$n=$a[nama];
		$nama=strtoupper($n);
		echo"
		<option value='$a[idpas]'>$nama - $a[idpas] </option>
		";
		}
	echo"
	</select>
	</td>

	</tr>
	</table>
	</form>
	*/

	echo"<center>
	<h1>
	Identitas Pasien Dewasa
	</h1>
	</center>
	<br>
	<u>$pesan</u>
	<br><br>

	<table class='adminlist'>
	<tr>
	<td width='50%'>

	<form method='post' action='index.php?task=pin_identpas'>
	<table class='adminlist'>

	<tr>
	<td>
	Nama Pasien: <input type='text' name='nm_pas' size='30'>
	</td>
	</tr>
	<tr>
	<td>
	Tanggal Lahir/ Umur:
	<select name='d_lhrpas'>
	";
	for ($d=1;$d<=31;$d++)
		{
		echo"<option value='$d'>$d</option>";
		}
		echo"</select>
		<select name='m_lhrpas'>
		";
	for ($m=1;$m<=12;$m++)
		{
		echo"<option value='$m'>$m</option>";
		}
	echo"</select>";
	echo"<input type='text' name='y_lhrpas' size='5'>
	";
	/*<input type='text' name='umur_pas' size='5'> tahun*/
	echo"
	</td>
	</tr>
	<tr>
	<td>
	Pendidikan:
	<select name='pend_pas'>
	<option value='SD'>SD</option>
	<option value='SLTP'>SLTP</option>
	<option value='SLTA'>SLTA</option>
	<option value='Akademik'>Akademik</option>
	<option value='Universitas'>Universitas</option>
	</select>
	</td>
	</tr>
	<tr>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Alamat</td>
	<td>: <input type='text' name='alm_pas' size='30'></td>
	</tr>
	<tr>
	<td>RT</td>
	<td>: <input type='text' name='rt_pas' size='5'>
	RW: <input type='text' name='rw_pas' size='5'>
	</td>
	</tr>
	<tr>
	<td>Kelurahan</td>
	<td>: <input type='text' name='lurah_pas' size='30'></td>
	</tr>
	<tr>
	<td>Kecamatan</td>
	<td>: <input type='text' name='kec_pas' size='30'></td>
	</tr>
	<tr>
	<td>Kota</td>
	<td>: <input type='text' name='kota_pas' size='30'></td>
	</tr>
	<td>Telepon</td>
	<td>: <input type='text' name='telp_pas' size='30'></td>
	</tr>

	</table>
	</td>
	</tr>
	<tr>
	<td>Sex : <select name='sex'>
	<option value='Laki-laki'>Laki-laki</option>
	<option value='Perempuan'>Perempuan</option>
	</select>
	</td>
	</tr>
	<tr>
	<td>No. KTP/ SIM: <input type='text' name='ktp_pas' size='30'>
	</td>
	</tr>
	<tr>
	<td>Agama:
	<select name='agama_pas'>
	<option value=''>[ Agama ]</option>
	<option value='Buddha'>Buddha</option>
	<option value='Hindu'>Hindu</option>
	<option value='Islam'>Islam</option>
	<option value='Katolik'>Katolik</option>
	<option value='Protestan'>Protestan</option>
	<option value='Lainnya'>Lainnya</option>
	</select>
	</td>
	</tr>
	<tr>
	<td>Perkawinan:
	<select name='kawin_pas'>
	<option value='Kawin'>Kawin</option>
	<option value='Belum Kawin'>Belum Kawin</option>
	<option value='Janda'>Janda</option>
	</select>
	</td>
	</tr>
	<tr>
	<td>Kebangsaan:
	<select name='wn'>
	<option value='WNI'>WNI</option>
	<option value='WNA'>WNA</option>
	</select>
	</td>
	</tr>
	<tr>
	<td>Pekerjaan: <input type='text' name='ker_pas' size='30'>
	</td>
	</tr>
	<tr>
	<td>Nama & Alamat Kantor: <input type='text' name='nmktr_pas' size='30'>
	</td>
	</tr>
	<tr>
	<td>
	Nama Suami: <input type='text' name='nm_suamipas' size='30'>
	Umur : <input type='text' name='umur_suamipas' size='5'>
	<br>
	Alamat Suami: <input type='text' name='alm_suamipas' size='30'>
	<br>
	Pekerjaan Suami: <input type='text' name='ker_suamipas' size='25'>
	<br>
	Pendidikan Suami :
	<select name='pendsmw'>
	<option value='SD'>SD</option>
	<option value='SLTP'>SLTP</option>
	<option value='SLTA'>SLTA</option>
	<option value='Akademik'>Akademik</option>
	<option value='Universitas'>Universitas</option>
	</select>
	</td>
	</tr>


	<tr>

	</table>


	</td>

	<td valign='top'>
	<table class='adminlist' >

	<tr>
	<td colspan='2'>Nomor RM: <input type='text' name='no_rmpas'></td>
	</tr>
	<tr>
	<td width='30%'>Ruang<br>Minta Klas</td><td>:
	<select name='rg_pas'>
	<option value='0'>Tidak Menginap</option>
	";
	$rg=mysql_query("select *from m_konfrg where utk='Pasien' and status='0' order by kls_rg ");
	if($rg)
		while($rg2=mysql_fetch_array($rg))
		{
		echo"
		<option value='$rg2[id]'>$rg2[kls_rg]/ $rg2[nm_rg] </option>
		";
		}
	echo"
	</select>
	</td>
	</tr>
	<tr>
	<td colspan='2'>Kasus Polisi:
	<select name='kasus_pas'>
	<option value='ya'>ya</option>
	<option value='tidak'>tidak</option>
	</select>
	</td>
	</tr>
	<tr>
	<td colspan='2'>Nama Penanggung Jawab Pembayaran/ Instansi: <br><input type='text' name='nm_tggpas' size='50'></td>
	</tr>
	<td colspan='2'>Alamat Penanggung Jawab Pembayaran/ Instansi: </td>
	</tr>
	<tr>
	<td width='30%'>
	Alamat
	<br>
	RT
	<br>
	Kelurahan
	<br>
	Kecamatan
	<br>
	Kota
	<br>
	Telp.
	</td>
	<td>
	: <input type='text' name='jl_tggpas' size='30'>
	<br>
	: <input type='text' name='rt_tggpas' size='10'> RW : <input type='text' name='rw_tggpas' size='10'>
	<br>
	: <input type='text' name='lurah_tggpas' size='30'>
	<br>
	: <input type='text' name='kec_tggpas' size='30'>
	<br>
	: <input type='text' name='kota_tggpas' size='30'>
	<br>
	: <input type='text' name='telp_tggpas' size='30'>
	</td>
	</tr>
	<tr>
	<td colspan='2'>Rujukan Dari: <input type='text' name='rujuk_drpas' size='30'></td>
	</tr>
	<tr>
	<td colspan='2'>Dirawat Oleh: <input type='text' name='rawat_drpas' size='30'></td>
	</tr>
	<tr>
	<td colspan='2'>Nama Petugas Penerima:
	<br><input type='text' name='petugas_trmpas' size='50'></td>
	</tr>
	<tr>
	<td colspan='2'>Nama Perawat Penerima pasien:
	<br><input type='text' name='perawat_trmpas' size='50'></td>
	</tr>
	<tr>
	<td colspan='2'>Biaya Dari:
	<select name='asuransi'>
	<option value='0'>Sendiri</option>
	";
	$asu=mysql_query("select *from m_disbiaya order by nama");
	if($asu)
		while($as=mysql_fetch_array($asu))
		{
		echo"
		<option value='$as[id]'>$as[nama]</option>
		";
		}
	echo"
	</select>
	<br>Status Pasien:
	<select name='status_pas'>
	<option value=''>-</option>
	<option value='Inpartu Normal'>Inpartu Normal</option>
	<option value='Inpartu Operasi'>Inpartu Operasi</option>
	<option value='Non Inpartu Normal'>Non Inpartu Normal</option>
	<option value='Non Inpartu Operasi'>Non Inpartu Operasi</option>
	</select>
	</td>
	</tr>


	</table>
	</td>
	</tr>

	</table>

	<table class='adminlist'>
	<tr>
	<td width='20%'>
	Tgl. Masuk


	</td>

	<td width='80%'>
	: Tgl. <select name='tgl_mskpas'>
	";
	$tg=DATE('d');
	echo"<option value='$tg'>$tg</option>";
	for ($tglmsk=1;$tglmsk<=31;$tglmsk++)
		{ echo"<option value='$tglmsk'>$tglmsk</option>";}
	$bl=DATE('m');
	echo"
	</select>
	Bulan
	<select name='bln_mskpas'>
	<option value='$bl'>$bl</option>
	";
	//$bln2=array();
	for ($month=1;$month<=12;$month++)
		{
		//$bln2=strtotime(('d'),$blnmsk);
		//$bln2=DATE('m', strtotime($blnmsk));
		if($month=='1')
			{$month='01';}
		elseif($month=='2')
			{$month='02';}
		elseif($month=='3')
			{$month='03';}
		elseif($month=='4')
			{$month='04';}
		elseif($month=='5')
			{$month='05';}
		elseif($month=='6')
			{$month='06';}
		elseif($month=='7')
			{$month='07';}
		elseif($month=='8')
			{$month='08';}
		elseif($month=='9')
			{$month='09';}
		elseif($month=='10')
			{$month='10';}
		elseif($month=='11')
			{$month='11';}
		else
			{$month='12';}
		echo"<option value='$month'>$month</option>";}


	$thn=DATE('Y');
	echo"
	</select>
	Tahun <input type='text' name='thn_mskpas' value='$thn'>
	";
	$jm=DATE('h:i');
	echo"
	Jam <input type='text' name='jm_mskpas' value='$jm'>
	<br>


	</td>
	";/*
	<td width='20%'>Lama Dirawat: <br>
	<input type='text' name='lm_rwtpas' size='30'>
	</td>*/
		echo"
	</tr>

	<tr>
	<td colspan='3'>
	Diagnose Masuk/ Keluhan Utama:
	<br>
	<input type='text' name='diagnose_awalpas' size='130'>
	</td>
	</tr>

	<tr>
	<td colspan='2'>
	Diagnose Akhir:
	<br>
	<input type='text' name='diagnose_akhpas' size='130'>
	</td>
	<td>Kode ICD:
	<br><input type='text' name='icd_pas'>
	</td>
	</tr>

	<tr>
	<td colspan='2'>
	Diagnose Sekunder:
	<br>
	<input type='text' name='diagnose_secpas' size='130'>
	</td>
	<td>
	</td>
	</tr>

	<tr>
	<td colspan='2'>
	Komplikasi:
	<br>
	<input type='text' name='komplikasi_pas' size='130'>
	</td>
	<td>
	</td>
	</tr>

	<tr>
	<td colspan='2'>
	Operasi/ Tanggal:
	<br>
	<input type='text' name='opr_tglpas' size='130'>
	</td>
	<td>
	</td>
	</tr>

	<tr>
	<td colspan='2'>Hasil Perawatan
	<select name='hslrwt'>
	<option value=''>-</option>
	<option value='Sembuh'>Sembuh</option>
	<option value='Membaik'>Membaik</option>
	<option value='Tidak Membaik'>Tidak Membaik</option>
	<option value='Hanya tindakan diagnosa'>Hanya tindakan diagnosa</option>
	<option value='Meninggal < 48 jam MRS'>Meninggal < 48 jam MRS</option>
	<option value='Meninggal > 48 jam MRS'>Meninggal > 48 jam MRS</option>
	</select>
	<br>Cara Keluar
	<select name=crklr>
	<option value=''>-</option>
	<option value='Diijinkan pulang'>Diijinkan pulang</option>
	<option value='Pulang paksa'>Pulang paksa</option>
	<option value='Melarikan diri'>Melarikan diri</option>
	<option value='Dirujuk ke RS'>Dirujuk ke RS</option>
	<option value='Pindah ke RS'>Pindah ke RS</option>
	</select>
	Nama RS <input type='text' name='nmrs'>
	</td>
	<td></td>
	</tr>

	<tr>
	<td colspan='3'>Nama dokter yang merawat : <input type='text' name='dokter_rwtpas' size='100'>
	</td>

	</tr>
	<tr>
	<td colspan='3' align='center'><input type='submit' value='[ simpan ]'></td>
	</tr>
	</table>
	</form>
	";

 }

function ein_identpas()
	{
	$idpas=$_POST['idpas'];


	$a=mysql_query("select *from m_pasien where idpas='$idpas'");
	while($a1=mysql_fetch_array($a))
		{
		$idrg=$a1[idrg];
		$idpas=$a1[idpas];
		$id_asuransi=$a1[id_asuransi];
		$nama=$a1[nama];
		$umur=$a1[umur];
		$norm=$a1[norm];
		$ktp=$a1[ktp];
		$ker=$a1[ker];
		$namaker=$a1[namaker];
		$sex=$a1[sex];
		$tgllhr=$a1[tgllhr];

		}
	$b=mysql_query("select *from m_pasienalm where idpas='$idpas'");
	while($b1=mysql_fetch_array($b))
		{
		$alm=$b1[alm];
		$rt=$b1[rt];
		$rw=$b1[rw];
		$lurah=$b1[lurah];
		$kec=$b1[kec];
		$kota=$b1[kota];
		$telp=$b1[telp];
		}
	$c=mysql_query("select *from m_pasiendet where idpas='$idpas'");
	while($c1=mysql_fetch_array($c))
		{
		$pend=$c1[pend];
		$agama=$c1[agama];
		$kawin=$c1[kawin];
		$wn=$c1[wn];
		$kasus=$c1[kasus];
		}
		$d=mysql_query("select *from m_pasiendiag where idpas='$idpas'");
	while($d1=mysql_fetch_array($d))
		{
		$diagawal=$d1[diagawal];
		$diagakh=$d1[diagakh];
		$diagsec=$d1[diagsec];
		$kpl=$d1[kpl];
		$oprtgl=$d1[oprtgl];
		$icd=$d1[icd];
		$hsl=$d1[hsl];
		$crklr=$d1[crklr];
		$nm_rs=$d1[nm_rs];
		}
		$e=mysql_query("select *from m_pasienket where idpas='$idpas'");
		while($e1=mysql_fetch_array($e))
		{
		$rujuk=$e1[rujuk];
		$rawat=$e1[rawat];
		$petugas=$e1[petugas];
		$perawat=$e1[perawat];
		$dokter=$e1[dokter];
		}
		$f=mysql_query("select *from m_pasiensw where idpas='$idpas'");
		while($f1=mysql_fetch_array($f))
		{
		$nmsw=$f1[nmsw];
		$umursw=$f1[umursw];
		$almsw=$f1[almsw];
		$kersw=$f1[kersw];
		$penddsw=$f1[penddsw];
		}
		$g=mysql_query("select *from m_pasientgg where idpas='$idpas'");
		while($g1=mysql_fetch_array($g))
		{
		$namatgg=$g1[nama];
		$almtgg=$g1[alm];
		$rttgg=$g1[rt];
		$rwtgg=$g1[rw];
		$lurahtgg=$g1[lurah];
		$kectgg=$g1[kec];
		$kotatgg=$g1[kota];
		$telptgg=$g1[telp];
		}
		$h=mysql_query("select *from m_absen where idpas='$idpas'");
		while($h1=mysql_fetch_array($h))
		{
		$status=$h1[status];
		$jmlinap=$h1[jmlinap];
		$tglinap=$h1[tglinap];
		$blninap=$h1[blninap];
		$thninap=$h1[thninap];
		$jaminap=$h1[jaminap];
		$tglklr=$h1[tglklr];
		$jmklr=$h1[jmklr];
		$status=$h1[status];
		}

	echo"
	<center>
	<h1>
	Identitas Pasien
	<br>
	Ringkasan Keluar Masuk
	</h1>
	</center>
	<br>

	<br>
	<table class='adminlist'>
	<tr>
	<td width='50%'>

	<form method='post' action='index.php?task=uin_identpas'>
	<table class='adminlist'>

	<tr>
	<td>
	Nama Pasien: <input type='text' name='nm_pas' size='30' value='$nama'> $status<br>
	No. Pasien: $idpas
	</td>
	</tr>
	<tr>
	<td>
	Tanggal Lahir/ Umur:
	<input type='text' name='tgllhr' size='10' value='$tgllhr'>
	/ <input type='text' name='umur_pas' size='5' value='$umur'> tahun
	</td>
	</tr>
	<tr>
	<td>
	Pendidikan:
	<select name='pend_pas'>
	<option value='$pend'>$pend</option>
	<option value='SD'>SD</option>
	<option value='SLTP'>SLTP</option>
	<option value='SLTA'>SLTA</option>
	<option value='Akademik'>Akademik</option>
	<option value='Universitas'>Universitas</option>
	</select>
	</td>
	</tr>
	<tr>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Alamat</td>
	<td>: <input type='text' name='alm_pas' size='30' value='$alm'></td>
	</tr>
	<tr>
	<td>RT</td>
	<td>: <input type='text' name='rt_pas' size='5' value='$rt'>
	RW: <input type='text' name='rw_pas' size='5' value='$rw'>
	</td>
	</tr>
	<tr>
	<td>Kelurahan</td>
	<td>: <input type='text' name='lurah_pas' size='30' value='$lurah'></td>
	</tr>
	<tr>
	<td>Kecamatan</td>
	<td>: <input type='text' name='kec_pas' size='30' value='$kec'></td>
	</tr>
	<tr>
	<td>Kota</td>
	<td>: <input type='text' name='kota_pas' size='30' value='$kota'></td>
	</tr>
	<td>Telepon</td>
	<td>: <input type='text' name='telp_pas' size='30' value='$telp'></td>
	</tr>

	</table>
	</td>
	</tr>
	<tr>
	<td>Sex : <select name='sex'>
	<option value='$sex'>$sex</option>
	<option value='Laki-laki'>Laki-laki</option>
	<option value='Perempuan'>Perempuan</option>
	</select>
	</td>
	</tr>
	<tr>
	<td>No. KTP/ SIM: <input type='text' name='ktp_pas' size='30' value='$ktp'>
	</td>
	</tr>
	<tr>
	<td>Agama: <input type='text' name='agama_pas' size='30' value='$agama'>
	</td>
	</tr>
	<tr>
	<td>Perkawinan:
	<select name='kawin_pas'>
	<option value='$kawin'>$kawin</option>
	<option value='Kawin'>Kawin</option>
	<option value='Belum Kawin'>Belum Kawin</option>
	<option value='Janda'>Janda</option>
	</select>
	</td>
	</tr>
	<tr>
	<td>Kebangsaan:
	<select name='wn'>
	<option value='$wn'>$wn</option>
	<option value='WNI'>WNI</option>
	<option value='WNA'>WNA</option>
	</select>
	</td>
	</tr>
	<tr>
	<td>Pekerjaan: <input type='text' name='ker_pas' size='30' value='$ker'>
	</td>
	</tr>
	<tr>
	<td>Nama & Alamat Kantor: <input type='text' name='nmktr_pas' size='30' value='$namaker'>
	</td>
	</tr>
	<tr>
	<td>
	Nama Suami: <input type='text' name='nm_suamipas' size='30' value='$nmsw'>
	Umur : <input type='text' name='umur_suamipas' size='5' value='$umursw'>
	<br>
	Alamat Suami: <input type='text' name='alm_suamipas' size='30' value='$almsw'>
	<br>
	Pekerjaan Suami: <input type='text' name='ker_suamipas' size='25' value='$kersw'>
	<br>
	Pendidikan Suami :
	<select name='pendsmw'>
	<option value='$penddsw'>$penddsw</option>
	<option value='SD'>SD</option>
	<option value='SLTP'>SLTP</option>
	<option value='SLTA'>SLTA</option>
	<option value='Akademik'>Akademik</option>
	<option value='Universitas'>Universitas</option>
	</select>
	</td>
	</tr>

	<tr>

	</table>


	</td>

	<td valign='top'>
	<table class='adminlist' >

	<tr>
	<td colspan='2'>Nomor RM: <input type='text' name='no_rmpas' value='$norm'></td>
	</tr>
	<tr>
	<td width='30%'>Ruang<br>Minta Klas</td><td>:
	<select name='rg_pas'>
	";
	if ($idrg=='0')
		{
		echo"<option value='0'>Tidak Menginap</option>";
	$rgx=mysql_query("select *from m_konfrg order by kls_rg");
	if($rgx)
		while($rg2x=mysql_fetch_array($rgx))
		{
		echo"
		<option value='$rg2x[id]'>$rg2x[kls_rg]/ $rg2x[nm_rg] </option>
		";
		}
	}
	else
		{
	$rga=mysql_query("select *from m_konfrg where id='$idrg'");
	if($rga)
		while($rgb=mysql_fetch_array($rga))
		{
		echo"<option value='$rgb[id]'>$rgb[kls_rg]/ $rgb[nm_rg] </option>";
		}

	$rg=mysql_query("select *from m_konfrg order by kls_rg");
	if($rg)
		while($rg2=mysql_fetch_array($rg))
		{
		echo"
		<option value='$rg2[id]'>$rg2[kls_rg]/ $rg2[nm_rg] </option>
		";
		}
		}
	echo"
	</select>
	</td>
	</tr>
	<tr>
	<td colspan='2'>Kasus Polisi:
	<select name='kasus_pas'>
	<option value='$kasus'>$kasus</option>
	<option value='ya'>ya</option>
	<option value='tidak'>tidak</option>
	</select>
	</td>
	</tr>
	<tr>
	<td colspan='2'>Nama Penanggung Jawab Pembayaran/ Instansi: <br><input type='text' name='nm_tggpas' size='50' value='$namatgg'></td>
	</tr>
	<td colspan='2'>Alamat Penanggung Jawab Pembayaran/ Instansi: </td>
	</tr>
	<tr>
	<td width='30%'>
	Jl
	<br>
	RT
	<br>
	Kelurahan
	<br>
	Kecamatan
	<br>
	Kota
	<br>
	Telp.
	</td>
	<td>
	: <input type='text' name='jl_tggpas' size='30' value='$almtgg'>
	<br>
	: <input type='text' name='rt_tggpas' size='10' value='$rttgg'> RW : <input type='text' name='rw_tggpas' size='10' value='$rwtgg'>
	<br>
	: <input type='text' name='lurah_tggpas' size='30' value='$lurahtgg'>
	<br>
	: <input type='text' name='kec_tggpas' size='30' value='$kectgg'>
	<br>
	: <input type='text' name='kota_tggpas' size='30' value='$kotatgg'>
	<br>
	: <input type='text' name='telp_tggpas' size='30' value='$telptgg'>
	</td>
	</tr>
	<tr>
	<td colspan='2'>Rujukan Dari: <input type='text' name='rujuk_drpas' size='30' value='$rujuk'></td>
	</tr>
	<tr>
	<td colspan='2'>Dirawat Oleh: <input type='text' name='rawat_drpas' size='30' value='$rawat'></td>
	</tr>
	<tr>
	<td colspan='2'>Nama Petugas Penerima:
	<br><input type='text' name='petugas_trmpas' size='50' value='$petugas'></td>
	</tr>
	<tr>
	<td colspan='2'>Nama Perawat Penerima pasien:
	<br><input type='text' name='perawat_trmpas' size='50' value='$perawat'></td>
	</tr>
	<tr>
	<td colspan='2'>Biaya Dari:
	<select name='asuransi'>

	";
	$asu=mysql_query("select *from m_disbiaya order by nama");

		while($as=mysql_fetch_array($asu))
		{
		echo"
		<option value='$as[id]'>$as[nama]</option>
		";
		}
	echo"
	</select>
	<br><b>Status Pasien</b>:
	<select name='status'>
	<option value='$status'>$status</option>
	<option value='Inpartu Normal'>Inpartu Normal</option>
	<option value='Inpartu Operasi'>Inpartu Operasi</option>
	<option value='Non Inpartu Normal'>Non Inpartu Normal</option>
	<option value='Non Inpartu Operasi'>Non Inpartu Operasi</option>
	</select>
	</td>
	</tr>


	</table>
	</td>
	</tr>

	</table>

	<table class='adminlist'>
	<tr>
	<td width='10%'>
	Tgl. Masuk
	<br>
	Tgl. Keluar
	</td>

	<td width='50%'>
	: Tgl. <select name='tgl_mskpas'>
	";
	$tg=DATE('d');
	echo"<option value='$tglinap'>$tglinap</option>";
	for ($tglmsk=1;$tglmsk<=31;$tglmsk++)
		{ echo"<option value='$tglmsk'>$tglmsk</option>";}
	$bl=DATE('m');
	echo"
	</select>
	Bulan
	<select name='bln_mskpas'>
	<option value='$blninap'>$blninap</option>
	";
	//$bln2=array();
	for ($month=1;$month<=12;$month++)
		{
		//$bln2=strtotime(('d'),$blnmsk);
		//$bln2=DATE('m', strtotime($blnmsk));
		if($month=='1')
			{$month='01';}
		elseif($month=='2')
			{$month='02';}
		elseif($month=='3')
			{$month='03';}
		elseif($month=='4')
			{$month='04';}
		elseif($month=='5')
			{$month='05';}
		elseif($month=='6')
			{$month='06';}
		elseif($month=='7')
			{$month='07';}
		elseif($month=='8')
			{$month='08';}
		elseif($month=='9')
			{$month='09';}
		echo"<option value='$month'>$month</option>";}


	$thn=DATE('Y');
	echo"
	</select>
	Tahun <input type='text' name='thninap' value='$thn'>
	";
	$jm=DATE('h:i');
	echo"
	Jam <input type='text' name='jminap' value='$jm'>
	<br>

	: Tgl. <input type='text' name='tgl_klrpas' value='$tglklr'>
	Jam <input type='text' name='jm_klrpas' value='$jmklr'>
	</td>

	<td width='20%'>Lama Dirawat: <br>
	<input type='text' name='lm_rwtpas' size='30' value='$jmlinap'>
	</td>
	</tr>

	<tr>
	<td colspan='3'>
	Diagnose Masuk/ Keluhan Utama:
	<br>
	<input type='text' name='diagnose_awalpas' size='130' value='$diagawal'>
	</td>
	</tr>

	<tr>
	<td colspan='2'>
	Diagnose Akhir:
	<br>
	<input type='text' name='diagnose_akhpas' size='130' value='$diagakh'>
	</td>
	<td>Kode ICD:
	<br><input type='text' name='icd_pas' value='$icd'>
	</td>
	</tr>

	<tr>
	<td colspan='2'>
	Diagnose Sekunder:
	<br>
	<input type='text' name='diagnose_secpas' size='130' value='$diagsec'>
	</td>
	<td>
	</td>
	</tr>

	<tr>
	<td colspan='2'>
	Komplikasi:
	<br>
	<input type='text' name='komplikasi_pas' size='130' value='$icd'>
	</td>
	<td>
	</td>
	</tr>

	<tr>
	<td colspan='2'>
	Operasi/ Tanggal:
	<br>
	<input type='text' name='opr_tglpas' size='130' value='$oprtgl'>
	</td>
	<td>
	</td>
	</tr>

	<tr>
	<td colspan='2'>Hasil Perawatan
	<select name='hslrwt'>
	<option value='$hsl'>$hsl</option>
	<option value='Sembuh'>Sembuh</option>
	<option value='Membaik'>Membaik</option>
	<option value='Tidak Membaik'>Tidak Membaik</option>
	<option value='Hanya tindakan diagnosa'>Hanya tindakan diagnosa</option>
	<option value='Meninggal < 48 jam MRS'>Meninggal < 48 jam MRS</option>
	<option value='Meninggal > 48 jam MRS'>Meninggal > 48 jam MRS</option>
	</select>
	<br>Cara Keluar
	<select name=crklr>
	<option value='$crklr'>$crklr</option>
	<option value='Diijinkan pulang'>Diijinkan pulang</option>
	<option value='Pulang paksa'>Pulang paksa</option>
	<option value='Melarikan diri'>Melarikan diri</option>
	<option value='Dirujuk ke RS'>Dirujuk ke RS</option>
	<option value='Pindah ke RS'>Pindah ke RS</option>
	</select>
	Nama RS <input type='text' name='nmrs' value='$nm_rs'>
	</td>
	<td></td>
	</tr>

	<tr>
	<td colspan='3'>Nama dokter yang merawat : <input type='text' name='dokter_rwtpas' size='100' value='$dokter'>
	</td>

	</tr>
	<tr>
	<td colspan='3' align='center'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value='[ simpan ]'></td>
	</tr>
	</table>
	</form>
	";
	}


function uin_identpas()
	{
	$idpas=$_POST['idpas'];

	$tglmsk=$_POST['tgl_mskpas'];
	$blnmsk=$_POST['bln_mskpas'];
	$thnmsk=$_POST['thn_inap'];
	$jmmsk=$_POST['jm_inap'];
	$tglklr=$_POST['tgl_klrpas'];
	$jmklr=$_POST['jm_klrpas'];
	$lm_rwt=$_POST['lm_rwtpas'];
	$status=$_POST['status'];


	$idrg=$_POST['rg_pas'];
	$id_asuransi=$_POST['asuransi'];
	$nama=$_POST['nm_pas'];
	$umur=$_POST['umur_pas'];
	$norm=$_POST['no_rmpas'];
	$ktp=$_POST['ktp_pas'];
	$ker=$_POST['ker_pas'];
	$namaker=$_POST['nmktr_pas'];
	$sex=$_POST['sex'];
	$tgllhr=$_POST['tgllhr'];


	$alm=$_POST['alm_pas'];
	$rt=$_POST['rt_pas'];
	$rw=$_POST['rw_pas'];
	$lurah=$_POST['lurah_pas'];
	$kec=$_POST['kec_pas'];
	$kota=$_POST['kota_pas'];
	$telp=$_POST['telp_pas'];


	$pend=$_POST['pend_pas'];
	$agama=$_POST['agama_pas'];
	$kawin=$_POST['kawin_pas'];
	$wn=$_POST['wn'];
	$kasus=$_POST['kasus_pas'];


	$diagawal=$_POST['diagnose_awalpas'];
	$diagakh=$_POST['diagnose_akhpas'];
	$diagsec=$_POST['diagnose_secpas'];
	$kpl=$_POST['komplikasi_pas'];
	$oprtgl=$_POST['opr_tglpas'];
	$icd=$_POST['icd_pas'];
	$hsl=$_POST['hslrwt'];
	$crklr=$_POST['crklr'];
	$nm_rs=$_POST['nmrs'];


	$rujuk=$_POST['rujuk_drpas'];
	$rawat=$_POST['rawat_drpas'];
	$petugas=$_POST['petugas_trmpas'];
	$perawat=$_POST['perawat_trmpas'];
	$dokter=$_POST['dokter_rwtpas'];


	$nmsw=$_POST['nm_suamipas'];
	$umursw=$_POST['umur_suamipas'];
	$almsw=$_POST['alm_suamipas'];
	$kersw=$_POST['ker_suamipas'];
	$penddsw=$_POST['pendsmw'];


	$namatgg=$_POST['nm_tggpas'];
	$almtgg=$_POST['jl_tggpas'];
	$rttgg=$_POST['rt_tggpas'];
	$rwtgg=$_POST['rw_tggpas'];
	$lurahtgg=$_POST['lurah_tggpas'];
	$kectgg=$_POST['kec_tggpas'];
	$kotatgg=$_POST['kota_tggpas'];
	$telptgg=$_POST['telp_tggpas'];

	$a=mysql_query("update m_absen set status='$status', tglinap='$tglmsk', blninap='$bln_msk', thninap='$thnmsk', jminap='$jmmsk', tglklr='$tglklr', jmklr='$jmklr', jmlinap='$lm_rwt' where idpas='$idpas'");
	$b=mysql_query("update m_absen2 set tglinap='$tglmsk-$blnmsk-$thnmsk' where idpas='$idpas'");
	$c=mysql_query("update m_pasien set idrg='$idrg', id_asuransi='$id_asuransi', nama='$nama', umur='$umur', norm='$norm', ktp='$ktp', ker='$ker', namaker='$namaker', sex='$sex', tgllhr='$tgllhr' where idpas='$idpas'");
	$d=mysql_query("update m_pasienalm set alm='$alm', rt='$rt', rw='$rw', lurah='$lurah', kec='$kec', kota='$kota', telp='$telp' where idpas='$idpas'");
	$e=mysql_query("update m_pasiendet set pend='$pend', agama='$agama', kawin='$kawin', wn='$wn', kasus='$kasus' where idpas='$idpas'");
	$f=mysql_query("update m_pasiendiag set diagawal='$diagawal', diagakh='$diagakh', diagsec='$diagsec', kpl='$kpl', oprtgl='$oprtgl', icd='$icd', hsl='$hsl', crklr='$crklr', nm_rs='$nm_rs' where idpas='$idpas'");
	$g=mysql_query("update m_pasienket set rujuk='$rujuk', rawat='$rawat', petugas='$petugas', perawat='$perawat', dokter='$dokter' where idpas='$idpas'");
	$h=mysql_query("update m_pasiensw set nmsw='$nmsw', umursw='$umursw', almsw='$almsw', kersw='$kersw', penddsw='$penddsw' where idpas='$idpas'");
	$i=mysql_query("update m_pasientgg set nama='$namatgg', alm='$almtgg', rt='$rttgg', rw='$rwtgg', lurah='$lurahtgg', kec='$kectgg', kota='$kotatgg', telp='$telptgg' where idpas='$idpas'");
	$j=mysql_query("update m_konfrg set status='1' where id='$idrg'");

	if($a and $b and $c and $d and $e and $f and $g and $h and $i and $j)
		{header ("Location: index.php?task=in_identpas&pesan=Data Sudah Diganti");}
	else
		{echo"error";}
	}


function pin_identpas()
	{

	$mn=DATE('m');
	$yn=DATE('Y');
	$tglmsk=$_POST['tgl_mskpas'];
	$blnmsk=$_POST['bln_mskpas'];
	$thnmsk=$_POST['thn_mskpas'];
	$jmmsk=$_POST['jm_mskpas'];
	$tglklr=$_POST['tgl_klrpas'];
	$blnklr=$_POST['bln_klrpas'];
	$thnklr=$_POST['thn_klrpas'];
	$jmklr=$_POST['jm_klrpas'];
	$lm_rwt=$_POST['lm_rwt'];
	$status_pas=$_POST['status_pas'];

	$idrg=$_POST['rg_pas'];
	$id_asuransi=$_POST['asuransi'];
	$nama=$_POST['nm_pas'];
	//$umur=$_POST['umur_pas'];
	$norm=$_POST['no_rmpas'];
	$ktp=$_POST['ktp_pas'];
	$ker=$_POST['ker_pas'];
	$namaker=$_POST['nmktr_pas'];
	$sex=$_POST['sex'];
	$dl=$_POST['d_lhrpas'];
	$ml=$_POST['m_lhrpas'];
	$yl=$_POST['y_lhrpas'];
	$umur=$yn-$yl;

	$alm=$_POST['alm_pas'];
	$rt=$_POST['rt_pas'];
	$rw=$_POST['rw_pas'];
	$lurah=$_POST['lurah_pas'];
	$kec=$_POST['kec_pas'];
	$kota=$_POST['kota_pas'];
	$telp=$_POST['telp_pas'];

	$pend=$_POST['pend_pas'];
	$agama=$_POST['agama_pas'];
	$kawin=$_POST['kawin_pas'];
	$wn=$_POST['wn'];
	$kasus=$_POST['kasus_pas'];

	$diagawal=$_POST['diagnose_awalpas'];
	$diagakh=$_POST['diagnose_akhpas'];
	$diagsec=$_POST['diagnose_secpas'];
	$kpl=$_POST['komplikasi_pas'];
	$oprtgl=$_POST['opr_tglpas'];
	$icd=$_POST['icd_pas'];
	$hsl=$_POST['hslrwt'];
	$crklr=$_POST['crklr'];
	$nm_rs=$_POST['nmrs'];


	$rujuk=$_POST['rujuk_drpas'];
	$rawat=$_POST['rawat_drpas'];
	$petugas=$_POST['petugas_trmpas'];
	$perawat=$_POST['perawat_trmpas'];
	$dokter=$_POST['dokter_rwtpas'];


	$nmsw=$_POST['nm_suamipas'];
	$umursw=$_POST['umur_suamipas'];
	$almsw=$_POST['alm_suamipas'];
	$kersw=$_POST['ker_suamipas'];
	$penddsw=$_POST['pendsmw'];

	$namatgg=$_POST['nm_tggpas'];
	$almtgg=$_POST['jl_tggpas'];
	$rttgg=$_POST['rt_tggpas'];
	$rwtgg=$_POST['rw_tggpas'];
	$lurahtgg=$_POST['lurah_tggpas'];
	$kectgg=$_POST['kec_tggpas'];
	$kotatgg=$_POST['kota_tggpas'];
	$telptgg=$_POST['telp_tggpas'];

	if ($nama=='' or $alm=='' or $nmsw=='' or $almsw=='' or $namatgg=='')
		{
		echo"Data yang Anda isi kurang lengkap, harap isi kembali, <a href='javascript:history.back(-1)'>klik disini</a>";
		}
	else
		{
	$z= mysql_result(mysql_query("SELECT MAX(id2)FROM m_absen where blninap='$blnmsk' and thninap='$thnmsk'"),0);
	$z2=$z+1;
	$idpas=$z2.$blnmsk.$thnmsk;

	$a=mysql_query("insert into m_absen values('', '$z2', '$z2$blnmsk$thnmsk', '$status_pas', '', '$tglmsk', '$blnmsk', '$thnmsk', '$jmmsk', '$tglklr-$blnklr-$thnklr', '$jmklr')");
	$b=mysql_query("insert into m_absen2 values('', '$z2$blnmsk$thnmsk', '$tglmsk-$blnmsk-$thnmsk')");
	$c=mysql_query("insert into m_pasien values ('', '$idrg', '$idpas', '$id_asuransi', '$nama', '$umur', '$norm', '$ktp', '$ker', '$namaker', '$sex', '$dl-$ml-$yl')");
	$d=mysql_query("insert into m_pasienalm values ('', '$idpas', '$alm', '$rt', '$rw', '$lurah', '$kec', '$kota', '$telp')");
	$e=mysql_query("insert into m_pasiendet values ('', '$idpas', '$pend', '$agama', '$kawin', '$wn', '$kasus')");
	$f=mysql_query("insert into m_pasiendiag values ('', '$idpas', '$diagawal', '$diagakh', '$diagsec', '$kpl', '$oprtgl', '$icd', '$hsl', '$crklr', '$nm_rs')");
	$g=mysql_query("insert into m_pasienket values ('', '$idpas', '$rujuk', '$rawat', '$petugas', '$perawat', '$dokter')");
	$h=mysql_query("insert into m_pasiensw values ('', '$idpas', '$nmsw', '$umursw', '$almsw', '$kersw', '$penddsw')");
	$i=mysql_query("insert into m_pasientgg values ('', '$idpas', '$namatgg', '$almtgg', '$rttgg', '$rwtgg', '$lurahtgg', '$kectgg', '$kotatgg', '$telptgg')");
	$j=mysql_query("update m_konfrg set status='1' where id='$idrg'");

	if($a and $b and $c and $d and $e and $f and $g and $h and $i and $j)
			{
			header ("Location: index.php?task=in_identpas&pesan=Data Sudah Masuk");
			}
	else
			{
			echo"r-or";
			}
		}


	}


function in_identpasan()
	{
	/*
	<form method='post' action='index.php?task=ein_identpasan'>
	<table class='adminlist'>
	<tr>
	<td>
	Pencarian Nama Pasien :
	</td>
	<td rowspan='2'>

	<input type='submit' value='CARI'>
	</td>
	</tr>

	<tr>
	<td width='30%'>

	<select name='idpas'>
	";
	$query = mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Anak'");
	while($k=mysql_fetch_array($query))
	{
	$id=$k[idpas];
	$nama=$k[nama];
	$n=strtoupper($nama);
	//$ker=$k[ker];

     echo "<option value='$k[idpas]'>$n - $k[idpas]</option>";

	}
	echo"
	</select>
	</td>

	</tr>
	</table>
	</form>
		*/
	$pesan=$_GET['pesan'];
	echo"<center>
	<h1>
	Identitas Pasien Anak

	</h1>
	</center>
	<br>
	<u>$pesan</u>
	<br><br>




	<table class='adminlist'>
	<tr>
	<td width='50%'>

	<form method='post' action='index.php?task=pin_identpasan'>
	<table class='adminlist'>

	<tr>
	<td>
	Nama Pasien: <input type='text' name='nm_pas' size='30'>
	</td>
	</tr>
	<tr>
	<td>
	Tanggal Lahir/ Umur:
	<select name='d_lhrpas'>
	";
	for ($d=1;$d<=31;$d++)
		{
		echo"<option value='$d'>$d</option>";
		}
		echo"</select>
		<select name='m_lhrpas'>
		";
	for ($m=1;$m<=12;$m++)
		{
		echo"<option value='$m'>$m</option>";
		}
	echo"</select>";
	echo"<input type='text' name='y_lhrpas' size='5'>
	/ <input type='text' name='umur_pas' size='5'> tahun
	</td>
	</tr>
	<tr>
	<td>
	Pendidikan:
	<select name='pend_pas'>
	<option value='None'>None</option>
	<option value='SD'>SD</option>
	<option value='SLTP'>SLTP</option>
	<option value='SLTA'>SLTA</option>
	<option value='Akademik'>Akademik</option>
	<option value='Universitas'>Universitas</option>
	</select>
	</td>
	</tr>
	<tr>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Alamat</td>
	<td>: <input type='text' name='alm_pas' size='30'></td>
	</tr>
	<tr>
	<td>RT</td>
	<td>: <input type='text' name='rt_pas' size='5'>
	RW: <input type='text' name='rw_pas' size='5'>
	</td>
	</tr>
	<tr>
	<td>Kelurahan</td>
	<td>: <input type='text' name='lurah_pas' size='30'></td>
	</tr>
	<tr>
	<td>Kecamatan</td>
	<td>: <input type='text' name='kec_pas' size='30'></td>
	</tr>
	<tr>
	<td>Kota</td>
	<td>: <input type='text' name='kota_pas' size='30'></td>
	</tr>
	<td>Telepon</td>
	<td>: <input type='text' name='telp_pas' size='30'></td>
	</tr>

	</table>
	</td>
	</tr>
	<tr>
	<td>Sex : <select name='sex'>
	<option value='Laki-laki'>Laki-laki</option>
	<option value='Perempuan'>Perempuan</option>
	</select>
	</td>
	</tr>
	<tr>
	<td>No. KTP/ SIM: <input type='text' name='ktp_pas' size='30'>
	</td>
	</tr>
	<tr>
	<td>Agama: <input type='text' name='agama_pas' size='30'>
	<select name='agama_pas'>
	<option value='-'>[ - Agama - ]</option>
	<option value='Buddha'>Buddha</option>
	<option value='Hindu'>Hindu</option>
	<option value='Islam'>Islam</option>
	<option value='Katolik'>Katolik</option>
	<option value='Protestan'>Protestan</option>
	<option value='Lainnya'>Lainnya</option>
	</select>
	</td>
	</tr>
	<tr>
	<td>Perkawinan:
	<select name='kawin_pas'>
	<option value='Kawin'>Kawin</option>
	<option value='Belum Kawin'>Belum Kawin</option>
	<option value='Janda'>Janda</option>
	</select>
	</td>
	</tr>
	<tr>
	<td>Kebangsaan:
	<select name='wn'>
	<option value='WNI'>WNI</option>
	<option value='WNA'>WNA</option>
	</select>
	</td>
	</tr>
	<tr>
	<td>Pekerjaan: <input type='text' name='ker_pas' size='30'>
	</td>
	</tr>
	<tr>
	<td>Nama & Alamat Kantor: <input type='text' name='nmktr_pas' size='30'>
	</td>
	</tr>
	<tr>
	<td>
	Nama Ayah: <input type='text' name='nm_suamipas' size='30'>
	Umur : <input type='text' name='umur_suamipas' size='5'>
	<br>
	Alamat Ayah: <input type='text' name='alm_suamipas' size='30'>
	<br>
	Pekerjaan Ayah: <input type='text' name='ker_suamipas' size='25'>
	<br>
	Pendidikan Ayah:
	<select name='pendsmw'>
	<option value='None'>None</option>
	<option value='SD'>SD</option>
	<option value='SLTP'>SLTP</option>
	<option value='SLTA'>SLTA</option>
	<option value='Akademik'>Akademik</option>
	<option value='Universitas'>Universitas</option>
	</select>
	</td>
	</tr>


	<tr>

	</table>


	</td>

	<td valign='top'>
	<table class='adminlist' >

	<tr>
	<td colspan='2'>Nomor RM: <input type='text' name='no_rmpas'></td>
	</tr>
	<tr>
	<td width='30%'>Ruang<br>Minta Klas</td><td>:
	<select name='rg_pas'>
	";
	$rg=mysql_query("select *from m_konfrg order by kls_rg");
	if($rg)
		while($rg2=mysql_fetch_array($rg))
		{
		echo"
		<option value='$rg2[id]'>$rg2[kls_rg]/ $rg2[nm_rg] </option>
		";
		}
	echo"
	</select>
	</td>
	</tr>
	<tr>
	<td colspan='2'>Kasus Polisi:
	<select name='kasus_pas'>
	<option value='ya'>ya</option>
	<option value='tidak'>tidak</option>
	</select>
	</td>
	</tr>
	<tr>
	<td colspan='2'>Nama Penanggung Jawab Pembayaran/ Instansi: <br><input type='text' name='nm_tggpas' size='50'></td>
	</tr>
	<td colspan='2'>Alamat Penanggung Jawab Pembayaran/ Instansi: </td>
	</tr>
	<tr>
	<td width='30%'>
	Jl
	<br>
	RT
	<br>
	Kelurahan
	<br>
	Kecamatan
	<br>
	Kota
	<br>
	Telp.
	</td>
	<td>
	: <input type='text' name='jl_tggpas' size='30'>
	<br>
	: <input type='text' name='rt_tggpas' size='10'> RW : <input type='text' name='rw_tggpas' size='10'>
	<br>
	: <input type='text' name='lurah_tggpas' size='30'>
	<br>
	: <input type='text' name='kec_tggpas' size='30'>
	<br>
	: <input type='text' name='kota_tggpas' size='30'>
	<br>
	: <input type='text' name='telp_tggpas' size='30'>
	</td>
	</tr>
	<tr>
	<td colspan='2'>Rujukan Dari: <input type='text' name='rujuk_drpas' size='30'></td>
	</tr>
	<tr>
	<td colspan='2'>Dirawat Oleh: <input type='text' name='rawat_drpas' size='30'></td>
	</tr>
	<tr>
	<td colspan='2'>Nama Petugas Penerima:
	<br><input type='text' name='petugas_trmpas' size='50'></td>
	</tr>
	<tr>
	<td colspan='2'>Nama Perawat Penerima pasien:
	<br><input type='text' name='perawat_trmpas' size='50'></td>
	</tr>
	<tr>
	<td colspan='2'>Biaya Dari:
	<select name='asuransi'>
	<option value='0'>Sendiri</option>
	";
	$asu=mysql_query("select *from m_disbiaya order by nama");
	if($asu)
		while($as=mysql_fetch_array($asu))
		{
		echo"
		<option value='$as[id]'>$as[nama]</option>
		";
		}
	echo"
	</select>

	</td>
	</tr>


	</table>
	</td>
	</tr>

	</table>

	<table class='adminlist'>
	<tr>
	<td width='10%'>
	Tgl. Masuk
	<br>
	Tgl. Keluar
	</td>

	<td width='50%'>
	: Tgl. <select name='tgl_mskpas'>
	";
	$tg=DATE('d');
	echo"<option value='$tg'>$tg</option>";
	for ($tglmsk=1;$tglmsk<=31;$tglmsk++)
		{ echo"<option value='$tglmsk'>$tglmsk</option>";}
	$bl=DATE('m');
	echo"
	</select>
	Bulan
	<select name='bln_mskpas'>
	<option value='$bl'>$bl</option>
	";
	//$bln2=array();
	for ($month=1;$month<=12;$month++)
		{
		//$bln2=strtotime(('d'),$blnmsk);
		//$bln2=DATE('m', strtotime($blnmsk));
		if($month=='1')
			{$month='01';}
		elseif($month=='2')
			{$month='02';}
		elseif($month=='3')
			{$month='03';}
		elseif($month=='4')
			{$month='04';}
		elseif($month=='5')
			{$month='05';}
		elseif($month=='6')
			{$month='06';}
		elseif($month=='7')
			{$month='07';}
		elseif($month=='8')
			{$month='08';}
		elseif($month=='9')
			{$month='09';}
		elseif($month=='10')
			{$month='10';}
		elseif($month=='11')
			{$month='11';}
		else
			{$month='12';}
		echo"<option value='$month'>$month</option>";}


	$thn=DATE('Y');
	echo"
	</select>
	Tahun <input type='text' name='thn_mskpas' value='$thn'>
	";
	$jm=DATE('h:i');
	echo"
	Jam <input type='text' name='jm_mskpas' value='$jm'>
	<br>

	: Tgl. <select name='tgl_klrpas'>
	<option value=''>-</option>
	";
	for ($tglmsk=1;$tglmsk<=31;$tglmsk++)
		{ echo"<option value='$tglmsk'>$tglmsk</option>";}
	echo"
	</select>
	Bulan
	<select name='bln_klrpas'>
	<option value=''>-</option>
	";
	for ($blnmsk=1;$blnmsk<=12;$blnmsk++)
		{ echo"<option value='$blnmsk'>$blnmsk</option>";}
	$thn=DATE('Y');
	echo"
	</select>
	Tahun <input type='text' name='thn_klrpas' value=''>
	Jam <input type='text' name='jm_klrpas'>
	</td>

	<td width='20%'>Lama Dirawat: <br>
	<input type='text' name='lm_rwtpas' size='30'>
	</td>
	</tr>

	<tr>
	<td colspan='3'>
	Diagnose Masuk/ Keluhan Utama:
	<br>
	<input type='text' name='diagnose_awalpas' size='130'>
	</td>
	</tr>

	<tr>
	<td colspan='2'>
	Diagnose Akhir:
	<br>
	<input type='text' name='diagnose_akhpas' size='130'>
	</td>
	<td>Kode ICD:
	<br><input type='text' name='icd_pas'>
	</td>
	</tr>

	<tr>
	<td colspan='2'>
	Diagnose Sekunder:
	<br>
	<input type='text' name='diagnose_secpas' size='130'>
	</td>
	<td>
	</td>
	</tr>

	<tr>
	<td colspan='2'>
	Komplikasi:
	<br>
	<input type='text' name='komplikasi_pas' size='130'>
	</td>
	<td>
	</td>
	</tr>

	<tr>
	<td colspan='2'>
	Operasi/ Tanggal:
	<br>
	<input type='text' name='opr_tglpas' size='130'>
	</td>
	<td>
	</td>
	</tr>

	<tr>
	<td colspan='2'>Hasil Perawatan
	<select name='hslrwt'>
	<option value=''>-</option>
	<option value='Sembuh'>Sembuh</option>
	<option value='Membaik'>Membaik</option>
	<option value='Tidak Membaik'>Tidak Membaik</option>
	<option value='Hanya tindakan diagnosa'>Hanya tindakan diagnosa</option>
	<option value='Meninggal < 48 jam MRS'>Meninggal < 48 jam MRS</option>
	<option value='Meninggal > 48 jam MRS'>Meninggal > 48 jam MRS</option>
	</select>
	<br>Cara Keluar
	<select name=crklr>
	<option value=''>-</option>
	<option value='Diijinkan pulang'>Diijinkan pulang</option>
	<option value='Pulang paksa'>Pulang paksa</option>
	<option value='Melarikan diri'>Melarikan diri</option>
	<option value='Dirujuk ke RS'>Dirujuk ke RS</option>
	<option value='Pindah ke RS'>Pindah ke RS</option>
	</select>
	Nama RS <input type='text' name='nmrs'>
	</td>
	<td></td>
	</tr>

	<tr>
	<td colspan='3'>Nama dokter yang merawat : <input type='text' name='dokter_rwtpas' size='100'>
	</td>

	</tr>
	<tr>
	<td colspan='3' align='center'><input type='submit' value='[ simpan ]'></td>
	</tr>
	</table>
	</form>
	";

 }

function ein_identpasan()
	{
	$idpas=$_POST['idpas'];


	$a=mysql_query("select *from m_pasien where idpas='$idpas'");
	while($a1=mysql_fetch_array($a))
		{
		$idrg=$a1[idrg];
		$idpas=$a1[idpas];
		$id_asuransi=$a1[id_asuransi];
		$nama=$a1[nama];
		$umur=$a1[umur];
		$norm=$a1[norm];
		$ktp=$a1[ktp];
		$ker=$a1[ker];
		$namaker=$a1[namaker];
		$sex=$a1[sex];
		$tgllhr=$a1[tgllhr];

		}
	$b=mysql_query("select *from m_pasienalm where idpas='$idpas'");
	while($b1=mysql_fetch_array($b))
		{
		$alm=$b1[alm];
		$rt=$b1[rt];
		$rw=$b1[rw];
		$lurah=$b1[lurah];
		$kec=$b1[kec];
		$kota=$b1[kota];
		$telp=$b1[telp];
		}
	$c=mysql_query("select *from m_pasiendet where idpas='$idpas'");
	while($c1=mysql_fetch_array($c))
		{
		$pend=$c1[pend];
		$agama=$c1[agama];
		$kawin=$c1[kawin];
		$wn=$c1[wn];
		$kasus=$c1[kasus];
		}
		$d=mysql_query("select *from m_pasiendiag where idpas='$idpas'");
	while($d1=mysql_fetch_array($d))
		{
		$diagawal=$d1[diagawal];
		$diagakh=$d1[diagakh];
		$diagsec=$d1[diagsec];
		$kpl=$d1[kpl];
		$oprtgl=$d1[oprtgl];
		$icd=$d1[icd];
		$hsl=$d1[hsl];
		$crklr=$d1[crklr];
		$nm_rs=$d1[nm_rs];
		}
		$e=mysql_query("select *from m_pasienket where idpas='$idpas'");
		while($e1=mysql_fetch_array($e))
		{
		$rujuk=$e1[rujuk];
		$rawat=$e1[rawat];
		$petugas=$e1[petugas];
		$perawat=$e1[perawat];
		$dokter=$e1[dokter];
		}
		$f=mysql_query("select *from m_pasiensw where idpas='$idpas'");
		while($f1=mysql_fetch_array($f))
		{
		$nmsw=$f1[nmsw];
		$umursw=$f1[umursw];
		$almsw=$f1[almsw];
		$kersw=$f1[kersw];
		$penddsw=$f1[penddsw];
		}
		$g=mysql_query("select *from m_pasientgg where idpas='$idpas'");
		while($g1=mysql_fetch_array($g))
		{
		$namatgg=$g1[nama];
		$almtgg=$g1[alm];
		$rttgg=$g1[rt];
		$rwtgg=$g1[rw];
		$lurahtgg=$g1[lurah];
		$kectgg=$g1[kec];
		$kotatgg=$g1[kota];
		$telptgg=$g1[telp];
		}
		$h=mysql_query("select *from m_absen where idpas='$idpas'");
		while($h1=mysql_fetch_array($h))
		{
		$status=$h1[status];
		$jmlinap=$h1[jmlinap];
		$tglinap=$h1[tglinap];
		$blninap=$h1[blninap];
		$thninap=$h1[thninap];
		$jaminap=$h1[jaminap];
		$tglklr=$h1[tglklr];
		$jmklr=$h1[jmklr];
		$status=$h1[status];
		}

	echo"
	<center>
	<h1>
	Identitas Pasien
	<br>
	Ringkasan Keluar Masuk
	</h1>
	</center>
	<br>

	<br>
	<table class='adminlist'>
	<tr>
	<td width='50%'>

	<form method='post' action='index.php?task=uin_identpasan'>
	<table class='adminlist'>

	<tr>
	<td>
	Nama Pasien: <input type='text' name='nm_pas' size='30' value='$nama'> $status<br>
	No. Pasien: $idpas
	</td>
	</tr>
	<tr>
	<td>
	Tanggal Lahir/ Umur:
	<input type='text' name='tgllhr' size='10' value='$tgllhr'>
	/ <input type='text' name='umur_pas' size='5' value='$umur'> tahun
	</td>
	</tr>
	<tr>
	<td>
	Pendidikan:
	<select name='pend_pas'>
	<option value='$pend'>$pend</option>
	<option value='None'>None</option>
	<option value='SD'>SD</option>
	<option value='SLTP'>SLTP</option>
	<option value='SLTA'>SLTA</option>
	<option value='Akademik'>Akademik</option>
	<option value='Universitas'>Universitas</option>
	</select>
	</td>
	</tr>
	<tr>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Alamat</td>
	<td>: <input type='text' name='alm_pas' size='30' value='$alm'></td>
	</tr>
	<tr>
	<td>RT</td>
	<td>: <input type='text' name='rt_pas' size='5' value='$rt'>
	RW: <input type='text' name='rw_pas' size='5' value='$rw'>
	</td>
	</tr>
	<tr>
	<td>Kelurahan</td>
	<td>: <input type='text' name='lurah_pas' size='30' value='$lurah'></td>
	</tr>
	<tr>
	<td>Kecamatan</td>
	<td>: <input type='text' name='kec_pas' size='30' value='$kec'></td>
	</tr>
	<tr>
	<td>Kota</td>
	<td>: <input type='text' name='kota_pas' size='30' value='$kota'></td>
	</tr>
	<td>Telepon</td>
	<td>: <input type='text' name='telp_pas' size='30' value='$telp'></td>
	</tr>

	</table>
	</td>
	</tr>
	<tr>
	<td>Sex : <select name='sex'>
	<option value='$sex'>$sex</option>
	<option value='Laki-laki'>Laki-laki</option>
	<option value='Perempuan'>Perempuan</option>
	</select>
	</td>
	</tr>
	<tr>
	<td>No. KTP/ SIM: <input type='text' name='ktp_pas' size='30' value='$ktp'>
	</td>
	</tr>
	<tr>
	<td>Agama:
	<select name='agama_pas'>
	<option value=''>[ Agama ]</option>
	<option value='Buddha'>Buddha</option>
	<option value='Hindu'>Hindu</option>
	<option value='Islam'>Islam</option>
	<option value='Katolik'>Katolik</option>
	<option value='Protestan'>Protestan</option>
	<option value='Lainnya'>Lainnya</option>
	</select>
	</td>
	</tr>
	<tr>
	<td>Perkawinan:
	<select name='kawin_pas'>
	<option value='$kawin'>$kawin</option>
	<option value='Kawin'>Kawin</option>
	<option value='Belum Kawin'>Belum Kawin</option>
	<option value='Janda'>Janda</option>
	</select>
	</td>
	</tr>
	<tr>
	<td>Kebangsaan:
	<select name='wn'>
	<option value='$wn'>$wn</option>
	<option value='WNI'>WNI</option>
	<option value='WNA'>WNA</option>
	</select>
	</td>
	</tr>
	<tr>
	<td>Pekerjaan: <input type='text' name='ker_pas' size='30' value='$ker'>
	</td>
	</tr>
	<tr>
	<td>Nama & Alamat Kantor: <input type='text' name='nmktr_pas' size='30' value='$namaker'>
	</td>
	</tr>
	<tr>
	<td>
	Nama Ayah: <input type='text' name='nm_suamipas' size='30' value='$nmsw'>
	Umur : <input type='text' name='umur_suamipas' size='5' value='$umursw'>
	<br>
	Alamat Ayah: <input type='text' name='alm_suamipas' size='30' value='$almsw'>
	<br>
	Pekerjaan Ayah: <input type='text' name='ker_suamipas' size='25' value='$kersw'>
	<br>
	Pendidikan Ayah:
	<select name='pendsmw'>
	<option value='$penddsw'>$penddsw</option>
	<option value='SD'>SD</option>
	<option value='SLTP'>SLTP</option>
	<option value='SLTA'>SLTA</option>
	<option value='Akademik'>Akademik</option>
	<option value='Universitas'>Universitas</option>
	</select>
	</td>
	</tr>

	<tr>

	</table>


	</td>

	<td valign='top'>
	<table class='adminlist' >

	<tr>
	<td colspan='2'>Nomor RM: <input type='text' name='no_rmpas' value='$norm'></td>
	</tr>
	<tr>
	<td width='30%'>Ruang<br>Minta Klas</td><td>:
	<select name='rg_pas'>
	";
	$rga=mysql_query("select *from m_konfrg where id='$idrg'");
	if($rga)
		while($rgb=mysql_fetch_array($rga))
		{
		echo"<option value='$rgb[id]'>$rgb[kls_rg]/ $rgb[nm_rg] </option>";
		}

	$rg=mysql_query("select *from m_konfrg order by kls_rg");
	if($rg)
		while($rg2=mysql_fetch_array($rg))
		{
		echo"
		<option value='$rg2[id]'>$rg2[kls_rg]/ $rg2[nm_rg] </option>
		";
		}
	echo"
	</select>
	</td>
	</tr>
	<tr>
	<td colspan='2'>Kasus Polisi:
	<select name='kasus_pas'>
	<option value='$kasus'>$kasus</option>
	<option value='ya'>ya</option>
	<option value='tidak'>tidak</option>
	</select>
	</td>
	</tr>
	<tr>
	<td colspan='2'>Nama Penanggung Jawab Pembayaran/ Instansi: <br><input type='text' name='nm_tggpas' size='50' value='$namatgg'></td>
	</tr>
	<td colspan='2'>Alamat Penanggung Jawab Pembayaran/ Instansi: </td>
	</tr>
	<tr>
	<td width='30%'>
	Jl
	<br>
	RT
	<br>
	Kelurahan
	<br>
	Kecamatan
	<br>
	Kota
	<br>
	Telp.
	</td>
	<td>
	: <input type='text' name='jl_tggpas' size='30' value='$almtgg'>
	<br>
	: <input type='text' name='rt_tggpas' size='10' value='$rttgg'> RW : <input type='text' name='rw_tggpas' size='10' value='$rwtgg'>
	<br>
	: <input type='text' name='lurah_tggpas' size='30' value='$lurahtgg'>
	<br>
	: <input type='text' name='kec_tggpas' size='30' value='$kectgg'>
	<br>
	: <input type='text' name='kota_tggpas' size='30' value='$kotatgg'>
	<br>
	: <input type='text' name='telp_tggpas' size='30' value='$telptgg'>
	</td>
	</tr>
	<tr>
	<td colspan='2'>Rujukan Dari: <input type='text' name='rujuk_drpas' size='30' value='$rujuk'></td>
	</tr>
	<tr>
	<td colspan='2'>Dirawat Oleh: <input type='text' name='rawat_drpas' size='30' value='$rawat'></td>
	</tr>
	<tr>
	<td colspan='2'>Nama Petugas Penerima:
	<br><input type='text' name='petugas_trmpas' size='50' value='$petugas'></td>
	</tr>
	<tr>
	<td colspan='2'>Nama Perawat Penerima pasien:
	<br><input type='text' name='perawat_trmpas' size='50' value='$perawat'></td>
	</tr>
	<tr>
	<td colspan='2'>Biaya Dari:
	<select name='asuransi'>

	";
	$asu=mysql_query("select *from m_disbiaya order by nama");
	if($asu)
		while($as=mysql_fetch_array($asu))
		{
		echo"
		<option value='$as[id]'>$as[nama]</option>
		";
		}
	echo"
	</select>
	<br>Status Pasien:
	<select name='status'>
	<option value='$status'>$status</option>

	</select>
	</td>
	</tr>


	</table>
	</td>
	</tr>

	</table>

	<table class='adminlist'>
	<tr>
	<td width='10%'>
	Tgl. Masuk
	<br>
	Tgl. Keluar
	</td>

	<td width='50%'>
	: Tgl. <select name='tgl_mskpas'>
	";
	$tg=DATE('d');
	echo"<option value='$tglinap'>$tglinap</option>";
	for ($tglmsk=1;$tglmsk<=31;$tglmsk++)
		{ echo"<option value='$tglmsk'>$tglmsk</option>";}
	$bl=DATE('m');
	echo"
	</select>
	Bulan
	<select name='bln_mskpas'>
	<option value='$blninap'>$blninap</option>
	";
	//$bln2=array();
	for ($month=1;$month<=12;$month++)
		{
		//$bln2=strtotime(('d'),$blnmsk);
		//$bln2=DATE('m', strtotime($blnmsk));
		if($month=='1')
			{$month='01';}
		elseif($month=='2')
			{$month='02';}
		elseif($month=='3')
			{$month='03';}
		elseif($month=='4')
			{$month='04';}
		elseif($month=='5')
			{$month='05';}
		elseif($month=='6')
			{$month='06';}
		elseif($month=='7')
			{$month='07';}
		elseif($month=='8')
			{$month='08';}
		elseif($month=='9')
			{$month='09';}
		echo"<option value='$month'>$month</option>";}


	$thn=DATE('Y');
	echo"
	</select>
	Tahun <input type='text' name='thninap' value='$thn'>
	";
	$jm=DATE('h:i');
	echo"
	Jam <input type='text' name='jminap' value='$jm'>
	<br>

	: Tgl. <input type='text' name='tgl_klrpas' value='$tglklr'>
	Jam <input type='text' name='jm_klrpas' value='$jmklr'>
	</td>

	<td width='20%'>Lama Dirawat: <br>
	<input type='text' name='lm_rwtpas' size='30' value='$jmlinap'>
	</td>
	</tr>

	<tr>
	<td colspan='3'>
	Diagnose Masuk/ Keluhan Utama:
	<br>
	<input type='text' name='diagnose_awalpas' size='130' value='$diagawal'>
	</td>
	</tr>

	<tr>
	<td colspan='2'>
	Diagnose Akhir:
	<br>
	<input type='text' name='diagnose_akhpas' size='130' value='$diagakh'>
	</td>
	<td>Kode ICD:
	<br><input type='text' name='icd_pas' value='$icd'>
	</td>
	</tr>

	<tr>
	<td colspan='2'>
	Diagnose Sekunder:
	<br>
	<input type='text' name='diagnose_secpas' size='130' value='$diagsec'>
	</td>
	<td>
	</td>
	</tr>

	<tr>
	<td colspan='2'>
	Komplikasi:
	<br>
	<input type='text' name='komplikasi_pas' size='130' value='$icd'>
	</td>
	<td>
	</td>
	</tr>

	<tr>
	<td colspan='2'>
	Operasi/ Tanggal:
	<br>
	<input type='text' name='opr_tglpas' size='130' value='$oprtgl'>
	</td>
	<td>
	</td>
	</tr>

	<tr>
	<td colspan='2'>Hasil Perawatan
	<select name='hslrwt'>
	<option value='$hsl'>$hsl</option>
	<option value='Sembuh'>Sembuh</option>
	<option value='Membaik'>Membaik</option>
	<option value='Tidak Membaik'>Tidak Membaik</option>
	<option value='Hanya tindakan diagnosa'>Hanya tindakan diagnosa</option>
	<option value='Meninggal < 48 jam MRS'>Meninggal < 48 jam MRS</option>
	<option value='Meninggal > 48 jam MRS'>Meninggal > 48 jam MRS</option>
	</select>
	<br>Cara Keluar
	<select name=crklr>
	<option value='$crklr'>$crklr</option>
	<option value='Diijinkan pulang'>Diijinkan pulang</option>
	<option value='Pulang paksa'>Pulang paksa</option>
	<option value='Melarikan diri'>Melarikan diri</option>
	<option value='Dirujuk ke RS'>Dirujuk ke RS</option>
	<option value='Pindah ke RS'>Pindah ke RS</option>
	</select>
	Nama RS <input type='text' name='nmrs' value='$nm_rs'>
	</td>
	<td></td>
	</tr>

	<tr>
	<td colspan='3'>Nama dokter yang merawat : <input type='text' name='dokter_rwtpas' size='100' value='$dokter'>
	</td>

	</tr>
	<tr>
	<td colspan='3' align='center'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value='[ simpan ]'></td>
	</tr>
	</table>
	</form>
	";
	}


function uin_identpasan()
	{
	$idpas=$_POST['idpas'];

	$tglmsk=$_POST['tgl_mskpas'];
	$blnmsk=$_POST['bln_mskpas'];
	$thnmsk=$_POST['thn_inap'];
	$jmmsk=$_POST['jm_inap'];
	$tglklr=$_POST['tgl_klrpas'];
	$jmklr=$_POST['jm_klrpas'];
	$lm_rwt=$_POST['lm_rwtpas'];
	$status=$_POST['status'];


	$idrg=$_POST['rg_pas'];
	$id_asuransi=$_POST['asuransi'];
	$nama=$_POST['nm_pas'];
	$umur=$_POST['umur_pas'];
	$norm=$_POST['no_rmpas'];
	$ktp=$_POST['ktp_pas'];
	$ker=$_POST['ker_pas'];
	$namaker=$_POST['nmktr_pas'];
	$sex=$_POST['sex'];
	$tgllhr=$_POST['tgllhr'];


	$alm=$_POST['alm_pas'];
	$rt=$_POST['rt_pas'];
	$rw=$_POST['rw_pas'];
	$lurah=$_POST['lurah_pas'];
	$kec=$_POST['kec_pas'];
	$kota=$_POST['kota_pas'];
	$telp=$_POST['telp_pas'];


	$pend=$_POST['pend_pas'];
	$agama=$_POST['agama_pas'];
	$kawin=$_POST['kawin_pas'];
	$wn=$_POST['wn'];
	$kasus=$_POST['kasus_pas'];


	$diagawal=$_POST['diagnose_awalpas'];
	$diagakh=$_POST['diagnose_akhpas'];
	$diagsec=$_POST['diagnose_secpas'];
	$kpl=$_POST['komplikasi_pas'];
	$oprtgl=$_POST['opr_tglpas'];
	$icd=$_POST['icd_pas'];
	$hsl=$_POST['hslrwt'];
	$crklr=$_POST['crklr'];
	$nm_rs=$_POST['nmrs'];


	$rujuk=$_POST['rujuk_drpas'];
	$rawat=$_POST['rawat_drpas'];
	$petugas=$_POST['petugas_trmpas'];
	$perawat=$_POST['perawat_trmpas'];
	$dokter=$_POST['dokter_rwtpas'];


	$nmsw=$_POST['nm_suamipas'];
	$umursw=$_POST['umur_suamipas'];
	$almsw=$_POST['alm_suamipas'];
	$kersw=$_POST['ker_suamipas'];
	$penddsw=$_POST['pendsmw'];


	$namatgg=$_POST['nm_tggpas'];
	$almtgg=$_POST['jl_tggpas'];
	$rttgg=$_POST['rt_tggpas'];
	$rwtgg=$_POST['rw_tggpas'];
	$lurahtgg=$_POST['lurah_tggpas'];
	$kectgg=$_POST['kec_tggpas'];
	$kotatgg=$_POST['kota_tggpas'];
	$telptgg=$_POST['telp_tggpas'];

	$a=mysql_query("update m_absen set status='$status', tglinap='$tglmsk', blninap='$bln_msk', thninap='$thnmsk', jminap='$jmmsk', tglklr='$tglklr', jmklr='$jmklr', jmlinap='$lm_rwt' where idpas='$idpas'");
	$b=mysql_query("update m_absen2 set tglinap='$tglmsk-$blnmsk-$thnmsk' where idpas='$idpas'");
	$c=mysql_query("update m_pasien set idrg='$idrg', id_asuransi='$id_asuransi', nama='$nama', umur='$umur', norm='$norm', ktp='$ktp', ker='$ker', namaker='$namaker', sex='$sex', tgllhr='$tgllhr' where idpas='$idpas'");
	$d=mysql_query("update m_pasienalm set alm='$alm', rt='$rt', rw='$rw', lurah='$lurah', kec='$kec', kota='$kota', telp='$telp' where idpas='$idpas'");
	$e=mysql_query("update m_pasiendet set pend='$pend', agama='$agama', kawin='$kawin', wn='$wn', kasus='$kasus' where idpas='$idpas'");
	$f=mysql_query("update m_pasiendiag set diagawal='$diagawal', diagakh='$diagakh', diagsec='$diagsec', kpl='$kpl', oprtgl='$oprtgl', icd='$icd', hsl='$hsl', crklr='$crklr', nm_rs='$nm_rs' where idpas='$idpas'");
	$g=mysql_query("update m_pasienket set rujuk='$rujuk', rawat='$rawat', petugas='$petugas', perawat='$perawat', dokter='$dokter' where idpas='$idpas'");
	$h=mysql_query("update m_pasiensw set nmsw='$nmsw', umursw='$umursw', almsw='$almsw', kersw='$kersw', penddsw='$penddsw' where idpas='$idpas'");
	$i=mysql_query("update m_pasientgg set nama='$namatgg', alm='$almtgg', rt='$rttgg', rw='$rwtgg', lurah='$lurahtgg', kec='$kectgg', kota='$kotatgg', telp='$telptgg' where idpas='$idpas'");
	$j=mysql_query("update m_konfrg set status='1' where id='$idrg'");

	if($a and $b and $c and $d and $e and $f and $g and $h and $i and $j)
		{header ("Location: index.php?task=in_identpasan&pesan=Data Sudah Diganti");}
	else
		{echo"error";}
	}


function pin_identpasan()
	{

	$mn=DATE('m');
	$yn=DATE('Y');
	$tglmsk=$_POST['tgl_mskpas'];
	$blnmsk=$_POST['bln_mskpas'];
	$thnmsk=$_POST['thn_mskpas'];
	$jmmsk=$_POST['jm_mskpas'];
	$tglklr=$_POST['tgl_klrpas'];
	$blnklr=$_POST['bln_klrpas'];
	$thnklr=$_POST['thn_klrpas'];
	$jmklr=$_POST['jm_klrpas'];
	$lm_rwt=$_POST['lm_rwt'];
	$status_pas='Anak';

	$idrg=$_POST['rg_pas'];
	$id_asuransi=$_POST['asuransi'];
	$nama=$_POST['nm_pas'];
	$umur=$_POST['umur_pas'];
	$norm=$_POST['no_rmpas'];
	$ktp=$_POST['ktp_pas'];
	$ker=$_POST['ker_pas'];
	$namaker=$_POST['nmktr_pas'];
	$sex=$_POST['sex'];
	$dl=$_POST['d_lhrpas'];
	$ml=$_POST['m_lhrpas'];
	$yl=$_POST['y_lhrpas'];

	$alm=$_POST['alm_pas'];
	$rt=$_POST['rt_pas'];
	$rw=$_POST['rw_pas'];
	$lurah=$_POST['lurah_pas'];
	$kec=$_POST['kec_pas'];
	$kota=$_POST['kota_pas'];
	$telp=$_POST['telp_pas'];

	$pend=$_POST['pend_pas'];
	$agama=$_POST['agama_pas'];
	$kawin=$_POST['kawin_pas'];
	$wn=$_POST['wn'];
	$kasus=$_POST['kasus_pas'];

	$diagawal=$_POST['diagnose_awalpas'];
	$diagakh=$_POST['diagnose_akhpas'];
	$diagsec=$_POST['diagnose_secpas'];
	$kpl=$_POST['komplikasi_pas'];
	$oprtgl=$_POST['opr_tglpas'];
	$icd=$_POST['icd_pas'];
	$hsl=$_POST['hslrwt'];
	$crklr=$_POST['crklr'];
	$nm_rs=$_POST['nmrs'];


	$rujuk=$_POST['rujuk_drpas'];
	$rawat=$_POST['rawat_drpas'];
	$petugas=$_POST['petugas_trmpas'];
	$perawat=$_POST['perawat_trmpas'];
	$dokter=$_POST['dokter_rwtpas'];


	$nmsw=$_POST['nm_suamipas'];
	$umursw=$_POST['umur_suamipas'];
	$almsw=$_POST['alm_suamipas'];
	$kersw=$_POST['ker_suamipas'];
	$penddsw=$_POST['pendsmw'];

	$namatgg=$_POST['nm_tggpas'];
	$almtgg=$_POST['jl_tggpas'];
	$rttgg=$_POST['rt_tggpas'];
	$rwtgg=$_POST['rw_tggpas'];
	$lurahtgg=$_POST['lurah_tggpas'];
	$kectgg=$_POST['kec_tggpas'];
	$kotatgg=$_POST['kota_tggpas'];
	$telptgg=$_POST['telp_tggpas'];

	if ($nama=='' or $alm=='')
		{
		echo"Data yang Anda isi kurang lengkap, harap isi kembali, <a href='javascript:history.back(-1)'>klik disini</a>";
		}
	else
		{
	$z= mysql_result(mysql_query("SELECT MAX(id2)FROM m_absen where blninap='$blnmsk' and thninap='$thnmsk'"),0);
	$z2=$z+1;
	$idpas=$z2.$blnmsk.$thnmsk;
	$anak='01';

	$a=mysql_query("insert into m_absen values('', '$z2', '$z2$blnmsk$thnmsk$anak', '$status_pas', '', '$tglmsk', '$blnmsk', '$thnmsk', '$jmmsk', '$tglklr-$blnklr-$thnklr', '$jmklr')");
	$b=mysql_query("insert into m_absen2 values('', '$z2$blnmsk$thnmsk$anak', '$tglmsk-$blnmsk-$thnmsk')");
	$c=mysql_query("insert into m_pasien values ('', '$idrg', '$z2$blnmsk$thnmsk$anak', '$id_asuransi', '$nama', '$umur', '$norm', '$ktp', '$ker', '$namaker', '$sex', '$dl-$ml-$yl')");
	$d=mysql_query("insert into m_pasienalm values ('', '$z2$blnmsk$thnmsk$anak', '$alm', '$rt', '$rw', '$lurah', '$kec', '$kota', '$telp')");
	$e=mysql_query("insert into m_pasiendet values ('', '$z2$blnmsk$thnmsk$anak', '$pend', '$agama', '$kawin', '$wn', '$kasus')");
	$f=mysql_query("insert into m_pasiendiag values ('', '$z2$blnmsk$thnmsk$anak', '$diagawal', '$diagakh', '$diagsec', '$kpl', '$oprtgl', '$icd', '$hsl', '$crklr', '$nm_rs')");
	$g=mysql_query("insert into m_pasienket values ('', '$z2$blnmsk$thnmsk$anak', '$rujuk', '$rawat', '$petugas', '$perawat', '$dokter')");
	$h=mysql_query("insert into m_pasiensw values ('', '$z2$blnmsk$thnmsk$anak', '$nmsw', '$umursw', '$almsw', '$kersw', '$penddsw')");
	$i=mysql_query("insert into m_pasientgg values ('', '$z2$blnmsk$thnmsk$anak', '$namatgg', '$almtgg', '$rttgg', '$rwtgg', '$lurahtgg', '$kectgg', '$kotatgg', '$telptgg')");
	$j=mysql_query("update m_konfrg set status='1' where id='$idrg'");

	if($a and $b and $c and $d and $e and $f and $g and $h and $i and $j)
			{
			header ("Location: index.php?task=in_identpasan&pesan=Data Sudah Masuk");
			}
	else
			{
			echo"r-or";
			}
		}


	}


function dapas_de()
	{
	$pesan=$_GET['pesan'];
	$skr=date('d-m-Y');
	if(!isset($_GET['page'])){
		$page = 1;
	} else {
		$page = $_GET['page'];
	}

	$max_results =25;
	$from=(($page*$max_results)-$max_results);

	echo"
	<br>
	<center><h1>DAFTAR PASIEN DEWASA</h1></center>
	<br>
	<table class='adminlist'>
	<tr>
	<td>Nama Pasien</td>
	<td>Ruang/ Kls</td>
	<td>Alamat</td>
	<td>Status</td>
	<td>Tgl Msk</td>
	<td>Tgl Keluar</td>
	<td>Jml Inap</td>
	</tr>
	";
	$b1=mysql_query("select *from m_pasien, m_pasienalm, m_absen where m_pasien.idpas=m_pasienalm.idpas and m_pasien.idpas=m_absen.idpas and m_absen.status !='Anak' order by m_pasien.nama ASC LIMIT $from, $max_results");
	while ($b=mysql_fetch_array($b1))
	{
	echo"
	<tr>
	<td>$b[nama]</td>
	<td>";
	$rg=$b[idrg];
	$rg2=mysql_query("select *from m_konfrg where id='$rg'");
	while($rg22=mysql_fetch_array($rg2))
		{
		$nm_rg=$rg22[nm_rg];
		$kls_rg=$rg22[kls_rg];
		}
	echo"
	$nm_rg/ $kls_rg
	</td>
	<td>$b[alm], $b[kec]-$b[kota]</td>
	<td>$b[status]</td>
	<td>$b[tglinap]-$b[blninap]-$b[thninap]</td>
	<td>";
	$tglklr=$b[tglklr];
	if($tglklr=='--')
		{echo"-";}
	else
		{echo"$tglklr";}
	echo"</td>
	<td>";
	if($tglklr=='--')
		{$tglklrb=$skr;

		}
	else
		{$tglklrb=$b[tglklr];}
		$tglmsk=$b[tglinap].'-'.$b[blninap].'-'.$b[thninap];
		$hari= strtotime($tglklrb) - strtotime($tglmsk);
		$jmhari = $hari/(60*60*24)+1;
		echo"";

	echo"$jmhari
	</td>
	</tr>
	";
	}
	echo"
	</table>

	";
	$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_pasien"),0);
	$max=mysql_result(mysql_query("SELECT MAX(id) FROM m_pasien"),0);
	$total_pages = ceil($total_results / $max_results);

	echo "<center>[Page]<br>";


	if($page > 1){
		$prev = ($page - 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=dapas_de&page=$prev\">&lt;&lt;Prev</a> ";
	}

	for($i = 1; $i <= $total_pages; $i++){
		if(($page) == $i){
			echo "$i ";
			} else {
				echo "<a href=\"".$_SERVER['PHP_SELF']."?task=dapas_de&page=$i\">$i</a> ";
		}
	}


	if($page < $total_pages){
		$next = ($page + 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=dapas_de&page=$next\">Next>></a>";

		} echo"
			<br>
		<br>Terdapat $total_results Pasien Dewasa
		<br>";

	}

function dapas_an()
	{
	$pesan=$_GET['pesan'];
	$skr=date('d-m-Y');
	if(!isset($_GET['page'])){
		$page = 1;
	} else {
		$page = $_GET['page'];
	}

	$max_results =25;
	$from=(($page*$max_results)-$max_results);

	echo"
	<br>
	<center><h1>DAFTAR PASIEN ANAK</h1></center>
	<br>
	<table class='adminlist'>
	<tr>
	<td>Nama Pasien</td>
	<td>Ruang/ Kls</td>
	<td>Alamat</td>
	<td>Status</td>
	<td>Tgl Msk</td>
	<td>Tgl Keluar</td>
	<td>Jml Inap</td>
	</tr>
	";
	$b1=mysql_query("select *from m_pasien, m_pasienalm, m_absen where m_pasien.idpas=m_pasienalm.idpas and m_pasien.idpas=m_absen.idpas and m_absen.status ='Anak' order by m_pasien.nama ASC LIMIT $from, $max_results");
	while ($b=mysql_fetch_array($b1))
	{
	echo"
	<tr>
	<td>$b[nama]</td>
	<td>";
	$rg=$b[idrg];
	$rg2=mysql_query("select *from m_konfrg where id='$rg'");
	while($rg22=mysql_fetch_array($rg2))
		{
		$nm_rg=$rg22[nm_rg];
		$kls_rg=$rg22[kls_rg];
		}
	echo"
	$nm_rg/ $kls_rg
	</td>
	<td>$b[alm], $b[kec]-$b[kota]</td>
	<td>$b[status]</td>
	<td>$b[tglinap]-$b[blninap]-$b[thninap]</td>
	<td>";
	$tglklr=$b[tglklr];
	if($tglklr=='--')
		{echo"-";}
	else
		{echo"$tglklr";}
	echo"</td>
	<td>";
	if($tglklr=='--')
		{$tglklrb=$skr;

		}
	else
		{$tglklrb=$b[tglklr];}
		$tglmsk=$b[tglinap].'-'.$b[blninap].'-'.$b[thninap];
		$hari= strtotime($tglklrb) - strtotime($tglmsk);
		$jmhari = $hari/(60*60*24)+1;
		echo"";

	echo"$jmhari
	</td>
	</tr>
	";
	}
	echo"
	</table>

	";
	$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_pasien"),0);
	$max=mysql_result(mysql_query("SELECT MAX(id) FROM m_pasien"),0);
	$total_pages = ceil($total_results / $max_results);

	echo "<center>[Page]<br>";


	if($page > 1){
		$prev = ($page - 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=dapas_de&page=$prev\">&lt;&lt;Prev</a> ";
	}

	for($i = 1; $i <= $total_pages; $i++){
		if(($page) == $i){
			echo "$i ";
			} else {
				echo "<a href=\"".$_SERVER['PHP_SELF']."?task=dapas_de&page=$i\">$i</a> ";
		}
	}


	if($page < $total_pages){
		$next = ($page + 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=dapas_de&page=$next\">Next>></a>";

		} echo"
			<br>
		<br>Terdapat $total_results Pasien Anak
		<br>";

	}

}
?>