<?php
class pogi

{
function index()
	{
	$cari="SELECT *FROM pg_date ORDER BY id";
	$hasil=mysql_query($cari);
	if($hasil)
	while($dt=mysql_fetch_array($hasil))
		{
		$cbln=$dt[bln];
		$cthn=$dt[thn];
		$cbln2=$dt[bln2];
		$cthn2=$dt[thn2];

		}
		$blnn=DATE('m');
		$thnn=DATE('Y');
	echo"
	Selamat Datang di RSIA Mardi Waloeja MALANG ADMINISTRATOR ONLY AREA
	<br>
	<br>
	";
	if($blnn==$cbln2 and $thnn==$cthn2)
		echo"
		<table border='0'>
		<tr><td bgcolor='#ffAAAA'><font size='2'>
		Sekarang Dalam Masa Current Date, Harap Semua Data Di <a href='index.php?task=cr&db=backupdb'>Back Up</a>

		</td></tr></table>";

	else
		{echo"";}
	echo"
	<br><br>
	";
	$pass=$_SESSION['pes2'];

	$cari="SELECT *FROM pg_user where pass='$pass'";
	$hasil=mysql_query($cari);
	if($hasil)
	$data=mysql_fetch_array($hasil);

		$id=$data['id'];
		$nama=$data['nama'];
		$pass=$data['pass1'];
	$waktu=DATE('d-m-Y H:i:s');
	echo"
	<br><br>";
	//FORMM END

	///STATUSNYA

	echo"
	<table class='adminlist' border='1' width='100%' cellpadding='0' cellspacing='0' >";
	$cari2="SELECT *FROM pg_status2 order by id DESC";
	$hasil2=mysql_query($cari2);
	if($hasil2)
	while($data2=mysql_fetch_array($hasil2))

		{
		echo"
		<tr>
		<td width='20%' align='center'>

		<img src='../user/foto/$data2[id_dok].jpg' width='100'>
		<br>
		";
		$cari2a="SELECT *FROM pg_user where id='$data2[id_dok]'";
		$hasil2a=mysql_query($cari2a);
		if($hasil2a)
		while($data2a=mysql_fetch_array($hasil2a))
			{
			$nama=$data2a[nama];
			}
		echo"
		<font size='1'>
		$nama
		<br>
		$data2[time]
		</td>

		<td>
		<font size='2'>
		$data2[status]
		&nbsp;&nbsp;&nbsp;
		<a href='index.php?task=deletee&id=$data2[id]&code=status2&alm=index'>
		[Hapus]
		</a>
		<br><br>
		<b>Comment:</b>
		<br>
		";
		//COMMENT STATUS
		echo"
		<table class='adminlist'  width='100%' bgcolor='#9999ff' cellpadding='0' cellspacing='0'>";
	$cari3="SELECT *FROM pg_status where subid=$data2[id] order by id DESC";
	$hasil3=mysql_query($cari3);
	if($hasil3)
	while($data3=mysql_fetch_array($hasil3))

		{
		echo"
		<tr>
		<td width='25%' align='center'>

		<img src='../user/foto/$data3[id_dok].jpg' width='50'>
		<br>
		";
		$cari3a="SELECT *FROM pg_user where id='$data3[id_dok]'";
		$hasil3a=mysql_query($cari3a);
		if($hasil3a)
		while($data3a=mysql_fetch_array($hasil3a))
			{
			$nama=$data3a[nama];
			}
		echo"
		<font size='1'>
		$nama
		<br>
		$data3[time]
		</td>

		<td><font size='1'>
		$data3[status]
		&nbsp;&nbsp;&nbsp;
		<a href='index.php?task=deletee&id=$data3[id]&code=status&alm=index'>
		[Hapus]
		</a>
		</td>
		</tr>";
		}
		echo"
		</table>
		";

		echo"
		</td>

		</tr>";
		}
	echo"</table>";
	}



function dtdr()
	{
	echo"<center>
	<h2>Data Diri</h2>
	</center>
	<br>

	<table width='80%' cellpadding='0' cellspacing='0' border='0'>
	<tr>
	<td width='20%'><font size='2'>Nama</td>
	<td width='3'>:</td>
	<td></td>
	</tr>

	<tr>
	<td width='20%'><font size='2'>No. Anggota</td>
	<td width='3'>:</td>
	<td></td>
	</tr>

	<tr>
	<td width='20%'><font size='2'>Alamat</td>
	<td width='3'>:</td>
	<td></td>
	</tr>

	<tr>
	<td width='20%'><font size='2'>Telepon</td>
	<td width='3'>:</td>
	<td></td>
	</tr>

	<tr>
	<td width='20%'><font size='2'>No HP</td>
	<td width='3'>:</td>
	<td></td>
	</tr>

	<tr>
	<td width='20%'><font size='2'>Foto</td>
	<td width='3'>:</td>
	<td></td>
	</tr>

	</table>
	";
	}

function tmb_an()
	{
	echo"
	<center><b>Tambah Anggota</b></center>
	<br>
	<form method='post' action='index.php?task=p_r_pass'>
	<table width='80%' border='0'>

	<tr>
	<td width='20%'>
	<font size='2'>
	Nama</td>
	<td>: <input type='text' size='50' name='nama'></td>
	</tr>



	<tr>
	<td width='20%'>
	<font size='2'>
	Username</td>
	<td>: <input type='text' size='50' name='user'></td>
	</tr>

	<tr>
	<td width='20%'>
	<font size='2'>
	Password</td>
	<td>: <input type='password' size='50' name='pass'></td>
	</tr>

	<tr>
	<td width='20%'>
	<font size='2'>
	Unit</td>
	<td>:
	<select name='unit'>
	<option value='Direktur/ Wakil Direktur'>Direktur/ Wakil Direktur</option>
	<option value='Yayasan Kesehatan (YK)'>Yayasan Kesehatan (YK)</option>
	<option value='Receptionist'>Receptionist</option>
	<option value='Kamar Bersalin'>Kamar Bersalin</option>
	<option value='Kamar Bayi'>Kamar Bayi</option>
	<option value='Kamar Anak'>Kamar Anak</option>
	<option value='Poli Ibu Anak'>Poli Ibu Anak</option>
	<option value='Kamar Obat'>Kamar Obat</option>
	<option value='Administrasi'>Administrasi</option>
	<option value='Keuangan'>Keuangan</option>
	</select>
	</td>
	</tr>



	<tr>
	<td colspan='2' align='center'>";
	//$total = "SELECT *FROM pg_user order by id ASC";
	//$totals = mysql_query($total);
	//$idna = mysql_num_rows($totals);
	//$id=$idna+1;
	//$hasil=mysql_query($cari);
	//if($total)
	//while($data=mysql_fetch_array($total))

	echo"

	<input type='submit' value='SIMPAN'>
	</td>

	</tr>
	</table>
	</form>

	";

	}

function p_r_pass()
	{

	$nama=$_POST['nama'];

	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$unit=$_POST['unit'];

	if ($nama=='' or $user=='' or $pass=='')
		echo"Data Belum Diisi Lengkap. <a href='javascript:history.back(-1)'>[Kembali]</a>";
	else
	{
		$max=mysql_result(mysql_query("SELECT MAX(id) FROM m_user"),0);

		$id=$max+1;
		$r=MD5($pass);
		$x=$id*942;
		$y=$no_angg;
		$z='2ae2o';
		$w='3g2y2n1c2l1m';
		$pes2=MD5($pass).$id;
		$xyz='$x$r$y$z';

	$sql=mysql_query("insert into m_user values ('$id','$nama', '$user','$pes2','$pass','$unit')");
	if ($sql)
		{header ("Location: index.php?task=dft_an&pesan=Data Sudah Masuk");}
	else{echo"error";}
	}

	}

function dft_an()
	{
	$pesan=$_GET['pesan'];
	if(!isset($_GET['page'])){
		$page = 1;
	} else {
		$page = $_GET['page'];
	}

	$max_results =10;
	$from=(($page*$max_results)-$max_results);
	echo"
	<b>$pesan</b> <br><br>
	<center><b>Daftar Anggota</b>


	<br>
	<table width='100%' border='1' cellpadding='0' cellspacing='0' class='adminlist'>
	<tr>

	<td align='center'><font size='2'><b>Nama</td>
	<td align='center'><font size='2'><b>Username</td>
	<td align='center'><font size='2'><b>Password</td>
	<td align='center'><font size='2'><b>Unit</td>
	<td align='center'><font size='2'><b>Hapus</td>
	</tr>


	";


	$cari="SELECT *FROM m_user ORDER BY unit ASC LIMIT $from, $max_results";
	$hasil=mysql_query($cari);
	if($hasil)
	while($data=mysql_fetch_array($hasil))
		{
		echo"
		<tr>
	<td><font size='2'><a href='index.php?task=det_an&id=$data[id]'>$data[nama]</a></td>
	<td><font size='2'>$data[user]</td>
	<td><font size='2'>$data[pass1]</td>
	<td align='center'><font size='2'>$data[unit]
	</td>

	<td><font size='2'><a href='index.php?task=del&id=$data[id]&db=m_user&alm=dft_an'>Hapus</a></td>
	</tr>
		";
		}

	echo"</table>";
	$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_user"),0);
	$max=mysql_result(mysql_query("SELECT MAX(id) FROM m_user"),0);
	$total_pages = ceil($total_results / $max_results);

	echo "<center>[Page]<br>";


	if($page > 1){
		$prev = ($page - 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=dft_an&page=$prev\">&lt;&lt;Prev</a> ";
	}

	for($i = 1; $i <= $total_pages; $i++){
		if(($page) == $i){
			echo "$i ";
			} else {
				echo "<a href=\"".$_SERVER['PHP_SELF']."?task=dft_an&page=$i\">$i</a> ";
		}
	}


	if($page < $total_pages){
		$next = ($page + 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=dft_an&page=$next\">Next>></a>";

		} echo"
			<br>
		<br>Terdapat $total_results Anggota
		<br>";

	}

function det_an()
	{
	$iddok=$_GET['id'];
	$cari="SELECT *FROM m_user where id='$iddok'";
	$hasil=mysql_query($cari);
	if($hasil)
	$data=mysql_fetch_array($hasil);
		{
		$id=$data['id'];
		$nama=$data['nama'];
		$pass2=$data['pass1'];
		$unit=$data['unit'];}
	echo"<center>
	<h2>Data Diri $nama
	</center>
	<br>

	<table width='80%' cellpadding='0' cellspacing='0' border='0'>
	<form method='post' action='index.php?task=proubac'>
	<tr>
	<td colspan='3' align='center' bgcolor='9999FF'><font size='2'>
	<b><font color='#000099'>ACCOUNT</b></td>
	</tr>

	<tr>
	<td width='20%'><font size='2'>Nama</td>
	<td width='3'>:</td>
	<td><input type='text' name='nama' value='$nama'></td>
	</tr>

	<td width='20%'><font size='2'>Username</td>
	<td width='3'>:</td>
	<td><input type='text' name='user' value='$data[user]'></td>
	</tr>

	<td width='20%'><font size='2'>Password</td>
	<td width='3'>:</td>
	<td><input type='text' name='pass' value='$data[pass1]'></td>
	</tr>

	<tr>
	<td width='20%'><font size='2'>Unit</td>
	<td width='3'>:</td>
	<td>
	<select name='unit'>
	<option value='$unit'>$unit</option>
	<option value='Direktur/ Wakil Direktur'>Direktur/ Wakil Direktur</option>
	<option value='Yayasan Kesehatan (YK)'>Yayasan Kesehatan (YK)</option>
	<option value='Receptionist'>Receptionist</option>
	<option value='Kamar Bersalin'>Kamar Bersalin</option>
	<option value='Kamar Bayi'>Kamar Bayi</option>
	<option value='Kamar Anak'>Kamar Anak</option>
	<option value='Poli Ibu Anak'>Poli Ibu Anak</option>
	<option value='Kamar Obat'>Kamar Obat</option>
	<option value='Administrasi'>Administrasi</option>
	</select>
	</td>
	</tr>

	<tr>
	<td colspan='3' align='left'><font size='1'>
	<input type='hidden' name='id' value='$id'>
	<input type='submit' value='SIMPAN'>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type='button' onclick='javascript:history.back()' value='KEMBALI'></td>
	</tr>
	</form>

	</table>";

	}
function proubac()
	{
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$unit=$_POST['unit'];

	$r=MD5($pass).$id;



	$sql = "UPDATE m_user SET nama= '$nama', user='$user', pass='$r', pass1='$pass', unit='$unit' WHERE id='$id'";
	$result = mysql_query($sql);

	if ($result)
		{
		header ("Location: index.php?task=dft_an&pesan=Data Sudah Diganti");
		}
	else{echo"ERROR";};

	}


function del()
	{
	$id=$_GET['id'];
	$alm=$_GET['alm'];
	$db=$_GET['db'];
	$masuk="DELETE FROM $db where id='$id'";
	$query=mysql_query($masuk);
	if($masuk)
		{
		header("Location: index.php?task=$alm&pesan=Data Sudah Dihapus");
		}
	else
		{
	echo"ERROR";
		}

	}



function gt_ac()
	{
	$pass=$_SESSION['pes2'];

	$cari="SELECT *FROM m_admin where pass='$pass'";
	$hasil=mysql_query($cari);
	if($hasil)
	$data=mysql_fetch_array($hasil);

		$id=$data['id'];
		$nama=$data['nama'];
		$pass=$data['pass1'];
		$user=$data['username'];

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

	$r=MD5($pass);
	$x=$id*942;
	//$y=$no_angg;
	$z='2ae2o';
	$w='3g2y2n1c2l1m';
	$pes2='3g2y2n1c2l1m'.MD5($pass).$x.'2ae2o';


	$sql = "UPDATE pg_admin SET nama= '$nama', username='$user', pass='$pes2', pass1='$pass' WHERE id='$id'";
	$result = mysql_query($sql);

	if ($result)
		{
		echo"Data Sudah Diubah, Silahkan Melakukan Login Kembali<a href='logout.php'>Logout</a>";
		}
	else{echo"ERROR";}
	}


function konf_rg()
	{
	$pesan=$_GET['pesan'];
	if(!isset($_GET['page'])){
		$page = 1;
	} else {
		$page = $_GET['page'];
	}

	$max_results =25;
	$from=(($page*$max_results)-$max_results);
	echo"
	<b>Konfigurasi Ruangan/ Kelas</b>
	<br><br>
	<b>$pesan</b>
	<br><br>


	<table class='adminlist'>
	<tr>
	<td>Kelas</td>
	<td>Ruang</td><td>Harga/ hari</td>
	<td>Hapus</td>
	</tr>
	";
	$c=mysql_query("SELECT *from m_konfrg where utk='Pasien' order by kls_rg ASC LIMIT $from, $max_results");
	if($c)
	while($d=mysql_fetch_array($c))
		{
		echo"
		<tr>
		<td><a href='index.php?task=ukonf_rg&id=$d[id]'>$d[kls_rg]</a></td>
		<td>$d[nm_rg]</td>";
		$hg=$d[hrg_rg];
		$harga=number_format($hg,0,",",".");
		echo"
		<td>$harga</td>
		<td><a href='index.php?task=del&db=m_konfrg&id=$d[id]&alm=konf_rg'>hapus</a></td>
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
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=konf_rg&page=$prev\">&lt;&lt;Prev</a> ";
	}

	for($i = 1; $i <= $total_pages; $i++){
		if(($page) == $i){
			echo "$i ";
			} else {
				echo "<a href=\"".$_SERVER['PHP_SELF']."?task=konf_rg&page=$i\">$i</a> ";
		}
	}


	if($page < $total_pages){
		$next = ($page + 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=konf_rg&page=$next\">Next>></a>";

		} echo"
			<br>
		<br>Terdapat $total_results Ruangan

	<br><br><br>
	<form method='post' action='index.php?task=pkonf_rg'>
	<table class='adminlist'>
	<tr>
	<td width='30%'>Masukkan Kelas </td>
	<td>: <input type='text' name='kls_rg' size='50'></td>
	</tr>
	<tr>
	<td width='30%'>Masukkan Ruangan</td>
	<td>: <input type='text' name='nm_rg' size='50'></td>
	</tr>

	<tr>
	<td width='30%'>Harga/ hari</td>
	<td>: <input type='text' name='hrg_rg' size='50'></td>
	</tr>
	<tr>
	<td colspan='2' align='center'><input type='submit' value=' [ SIMPAN ] '></td>
	</tr>
	</table>
	</form>
	";
	}


function pkonf_rg()
	{
	$nm_rg=$_POST['nm_rg'];
	$kls_rg=$_POST['kls_rg'];
	$hrg_rg=$_POST['hrg_rg'];

	$masuk=mysql_query("INSERT INTO m_konfrg values('', '$nm_rg', '$kls_rg', '$hrg_rg', 'Pasien', '0')");
	if($masuk)
		{header("Location: index.php?task=konf_rg&pesan=Data Sudah Masuk");}
	else
		{}
	}

function ukonf_rg()
	{
	$id=$_GET['id'];
	$c=mysql_query("select *from m_konfrg where id='$id'");
	if($c)
		while($d=mysql_fetch_array($c))
		{
		$kls=$d[kls_rg];
		$rg=$d[nm_rg];
		$hrg=$d[hrg_rg];

		}
		$hg=$hrg;
		$harga=number_format($hg,0,",",".");
	echo"
	<form method='post' action='index.php?task=ukonf_rg2'>
	<table class='adminlist'>
	<tr>
	<td width='30%'>Masukkan Kelas </td>
	<td>: <input type='text' name='kls_rg' size='50' value='$kls'></td>
	</tr>
	<tr>
	<td width='30%'>Masukkan Ruangan</td>
	<td>: <input type='text' name='nm_rg' size='50' value='$rg'></td>
	</tr>

	<tr>
	<td width='30%'>Harga/ hari</td>
	<td>: <input type='text' name='hrg_rg' size='50' value='$hg'></td>
	</tr>
	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='id' value='$id'>
	<input type='submit' value=' [ SIMPAN ] '></td>
	</tr>
	</table>
	</form>";
	}


function ukonf_rg2()
	{
	$nm_rg=$_POST['nm_rg'];
	$kls_rg=$_POST['kls_rg'];
	$hrg_rg=$_POST['hrg_rg'];
	$id=$_POST['id'];
	$c=mysql_query("update m_konfrg set nm_rg='$nm_rg', kls_rg='$kls_rg', hrg_rg='$hrg_rg' where id='$id'");
	if($c)
		{header("Location: index.php?task=konf_rg&pesan=Data Sudah Diganti");}
	else
		{}
	}



///////////////////

function konf_rgby()
	{
	$pesan=$_GET['pesan'];
	if(!isset($_GET['page'])){
		$page = 1;
	} else {
		$page = $_GET['page'];
	}

	$max_results =25;
	$from=(($page*$max_results)-$max_results);
	echo"
	<b>Konfigurasi Ruangan/ Kelas Anak/ Bayi</b>
	<br><br>
	<b>$pesan</b>
	<br><br>


	<table class='adminlist'>
	<tr>
	<td>Kelas</td>
	<td>Ruang</td><td>Harga/ hari</td>
	<td>Hapus</td>
	</tr>
	";
	$c=mysql_query("SELECT *from m_konfrg where utk='Bayi' order by kls_rg ASC LIMIT $from, $max_results");
	if($c)
	while($d=mysql_fetch_array($c))
		{
		echo"
		<tr>
		<td><a href='index.php?task=ukonf_rgby&id=$d[id]'>$d[kls_rg]</a></td>
		<td>$d[nm_rg]</td>";
		$hg=$d[hrg_rg];
		$harga=number_format($hg,0,",",".");
		echo"
		<td>$harga</td>
		<td><a href='index.php?task=del&db=m_konfrg&id=$d[id]&alm=konf_rgby'>hapus</a></td>
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
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=konf_rgby&page=$prev\">&lt;&lt;Prev</a> ";
	}

	for($i = 1; $i <= $total_pages; $i++){
		if(($page) == $i){
			echo "$i ";
			} else {
				echo "<a href=\"".$_SERVER['PHP_SELF']."?task=konf_rgby&page=$i\">$i</a> ";
		}
	}


	if($page < $total_pages){
		$next = ($page + 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=konf_rgby&page=$next\">Next>></a>";

		} echo"
			<br>
		<br>Terdapat $total_results Ruangan

	<br><br><br>
	<form method='post' action='index.php?task=pkonf_rgby'>
	<table class='adminlist'>
	<tr>
	<td width='30%'>Masukkan Kelas </td>
	<td>: <input type='text' name='kls_rg' size='50'></td>
	</tr>
	<tr>
	<td width='30%'>Masukkan Ruangan</td>
	<td>: <input type='text' name='nm_rg' size='50'></td>
	</tr>

	<tr>
	<td width='30%'>Harga/ hari</td>
	<td>: <input type='text' name='hrg_rg' size='50'></td>
	</tr>
	<tr>
	<td colspan='2' align='center'><input type='submit' value=' [ SIMPAN ] '></td>
	</tr>
	</table>
	</form>
	";
	}


function pkonf_rgby()
	{
	$nm_rg=$_POST['nm_rg'];
	$kls_rg=$_POST['kls_rg'];
	$hrg_rg=$_POST['hrg_rg'];

	$masuk=mysql_query("INSERT INTO m_konfrg values('', '$nm_rg', '$kls_rg', '$hrg_rg', 'Bayi', '0')");
	if($masuk)
		{header("Location: index.php?task=konf_rgby&pesan=Data Sudah Masuk");}
	else
		{echo"AUTHORIZED AREA";}
	}

function ukonf_rgby()
	{
	$id=$_GET['id'];
	$c=mysql_query("select *from m_konfrg where id='$id'");
	if($c)
		while($d=mysql_fetch_array($c))
		{
		$kls=$d[kls_rg];
		$rg=$d[nm_rg];
		$hrg=$d[hrg_rg];

		}
		$hg=$hrg;
		$harga=number_format($hg,0,",",".");
	echo"
	<form method='post' action='index.php?task=ukonf_rg2by'>
	<table class='adminlist'>
	<tr>
	<td width='30%'>Masukkan Kelas </td>
	<td>: <input type='text' name='kls_rg' size='50' value='$kls'></td>
	</tr>
	<tr>
	<td width='30%'>Masukkan Ruangan</td>
	<td>: <input type='text' name='nm_rg' size='50' value='$rg'></td>
	</tr>

	<tr>
	<td width='30%'>Harga/ hari</td>
	<td>: <input type='text' name='hrg_rg' size='50' value='$hg'></td>
	</tr>
	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='id' value='$id'>
	<input type='submit' value=' [ SIMPAN ] '></td>
	</tr>
	</table>
	</form>";
	}


function ukonf_rg2by()
	{
	$nm_rg=$_POST['nm_rg'];
	$kls_rg=$_POST['kls_rg'];
	$hrg_rg=$_POST['hrg_rg'];
	$id=$_POST['id'];
	$c=mysql_query("update m_konfrg set nm_rg='$nm_rg', kls_rg='$kls_rg', hrg_rg='$hrg_rg' where id='$id'");
	if($c)
		{header("Location: index.php?task=konf_rgby&pesan=Data Sudah Diganti");}
	else
		{}
	}


////////////////////


function konf_by()
	{
	$pesan=$_GET['pesan'];
	if(!isset($_GET['page'])){
		$page = 1;
	} else {
		$page = $_GET['page'];
	}

	$max_results =25;
	$from=(($page*$max_results)-$max_results);
	echo"

	<b>Konfigurasi Asuransi</b>
	<br><br>
	<u>$pesan</u>
	<br><br>
	<table class='adminlist'>
	<tr>
	<td>Nama Asuransi</td>
	<td>Keringanan (%)</td>
	<td>Hapus</td>
	</tr>
	";
	$c=mysql_query("select *from m_disbiaya order by nama ASC LIMIT $from, $max_results");
	if($c)
		while($d=mysql_fetch_array($c))
		{
		echo"
		<tr>
		<td><a href='index.php?task=ukonf_by&id=$d[id]'>$d[nama]</a></td>
		<td>$d[persen]</td>
		<td><a href='index.php?task=del&db=m_disbiaya&id=$d[id]&alm=konf_by'>Hapus</a></td>
		</tr>
		";
		}
	echo"
	</table>
	";
	$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_disbiaya"),0);
	$max=mysql_result(mysql_query("SELECT MAX(id) FROM m_disbiaya"),0);
	$total_pages = ceil($total_results / $max_results);

	echo "<center>[Page]<br>";


	if($page > 1){
		$prev = ($page - 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=konf_by&page=$prev\">&lt;&lt;Prev</a> ";
	}

	for($i = 1; $i <= $total_pages; $i++){
		if(($page) == $i){
			echo "$i ";
			} else {
				echo "<a href=\"".$_SERVER['PHP_SELF']."?task=konf_by&page=$i\">$i</a> ";
		}
	}


	if($page < $total_pages){
		$next = ($page + 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=konf_by&page=$next\">Next>></a>";

		} echo"
			<br>
		<br>Terdapat $total_results Konfigurasi Asuransi

	<br>
	<br>
	Tambah Data:<br>
	<form method='post' action='index.php?task=ikonf_by'>
	<table class='adminlist'>
	<tr>
	<td>Nama Asuransi</td>
	<td><input type='text' name='nama' size='30'></td>
	</tr>

	<tr>
	<td>Keringanan</td>
	<td><input type='text' name='persen' size='20'> %</td>
	</tr>
	<tr>
	<td colspan='2' align='center'>
	<input type='submit' value='simpan'>
	</td>
	</tr>
	</table>
	</form>

	";
	}


function ikonf_by()
	{
	$nama=$_POST['nama'];
	$persen=$_POST['persen'];

	$c=mysql_query("insert into m_disbiaya values('', '$nama', '$persen')");
	if($c)
		{header("Location: index.php?task=konf_by&pesan=Data Sudah Masuk");}
	else
		{}
	}

function ukonf_by()
	{
	$id=$_GET['id'];
	$c=mysql_query("select *from m_disbiaya where id='$id'");
	if($c)
		while($d=mysql_fetch_array($c))
		{
		$nama=$d[nama];
		$persen=$d[persen];
		}
	echo"
	<form method='post' action='index.php?task=ukonf_by2'>
	<table class='adminlist'>
	<tr>
	<td>Nama Asuransi</td>
	<td><input type='text' name='nama' size='30' value='$nama'></td>
	</tr>

	<tr>
	<td>Keringanan</td>
	<td><input type='text' name='persen' size='20' value='$persen'> %</td>
	</tr>
	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='id' value='$id'>
	<input type='submit' value='simpan'>
	</td>
	</tr>
	</table>
	</form>
	";
	}

function ukonf_by2()
	{
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$persen=$_POST['persen'];
	$c=mysql_query("update m_disbiaya set nama='$nama', persen='$persen' where id='$id'");
	if($c)
		{
		header("Location: index.php?task=konf_by&pesan=Data Sudah Diganti");
		}
	else
		{}

	}

function dok()
	{
	$p=$_GET['p'];
	echo"
	<h1>DAFTAR DOKTER
	</h1>
	$p
	<br>
	<form method='post' action='index.php?task=pdok'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nama Dokter</td>
	<td><input type='text' name='nama' size='40'></td>
	</tr>

	<tr>
	<td width='20%'>Spesialis</td>
	<td>
	<select name='spesialis'>
	<option value='Kandungan'>Kandungan</option>
	<option value='Bedah'>Bedah</option>
	<option value='Anak'>Anak</option>
	<option value='Lainnya'>Lainnya</option>
	</select>
	</td>
	</tr>

	<tr>
	<td width='20%'>Rate</td>
	<td>Rp. <input type='text' name='rate' size='20'></td>
	</tr>

	<tr>
	<td colspan='2'>
	<input type='submit' value='[simpan]'>
	</td>

	</tr>


	</table>
	</form
	";
	//////////////////////////////////////////////////////////

	echo"<br><br>
	<table class='adminlist'>
	<tr>
	<td colspan='5' align='center'><b>DATA DOKTER</td>
	</tr>
	<tr>
	<td>Nama</td>
	<td>Spesialis</td>
	<td>Rate</td>
	<td>Edit</td>
	<td>Hapus</td>
	</tr>
	";
	$a1=mysql_query("select *from m_konfdok order by nama ASC");
	while($a=mysql_fetch_array($a1))
		{
		echo"
		<tr>
		<td>$a[nama]</td>
		<td>$a[spesialis]</td>
		<td>$a[rate]</td>
		<td><a href='index.php?task=edok&id=$a[id]'>Edit</a></td>
		<td><a href='index.php?task=del&id=$a[id]&alm=dok&db=m_konfdok'>Hapus</a></td>
		</tr>
		";
		}
	echo"
	</table>
	";

	}


function pdok()
	{
	$nama=$_POST['nama'];
	$spesialis=$_POST['spesialis'];
	$rate=$_POST['rate'];
	$a=mysql_query("insert into m_konfdok values ('', '$nama', '$spesialis', '$rate')");
	if($a)
		{header("location: index.php?task=dok&p=Data Sudah Masuk");}
	else
		{
		echo"AUTHORIZED AREA";
		}
	}

function edok()
	{
	$id=$_GET['id'];
	$a1=mysql_query("select *from m_konfdok where id='$id'");
	while($a=mysql_fetch_array($a1))
		{
		$nama=$a[nama];
		$spesialis=$a[spesialis];
		$rate=$a[rate];
		}
	echo"
	<form method='post' action='index.php?task=pedok'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nama Dokter</td>
	<td><input type='text' name='nama' size='40' value='$nama'></td>
	</tr>

	<tr>
	<td width='20%'>Spesialis</td>
	<td>
	<select name='spesialis'>
	<option value='$spesialis'>$spesialis</option>
	<option value='Kandungan'>Kandungan</option>
	<option value='Bedah'>Bedah</option>
	<option value='Anak'>Anak</option>
	<option value='Lainnya'>Lainnya</option>
	</select>
	</td>
	</tr>

	<tr>
	<td width='20%'>Rate</td>
	<td>Rp. <input type='text' name='rate' size='20' value='$rate'></td>
	</tr>

	<tr>
	<td colspan='2'>
	<input type='hidden' name='id' value='$id'>
	<input type='submit' value='[ganti]'>
	</td>

	</tr>


	</table>
	</form

	";
	}

function pedok()
	{
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$spesialis=$_POST['spesialis'];
	$rate=$_POST['rate'];
	$a=mysql_query("update m_konfdok set nama='$nama', spesialis='$spesialis', rate='$rate' where id='$id'");
	if($a)
		{header("location: index.php?task=dok&p=Data Sudah Diganti");}
	else
		{
		echo"AUTHORIZED AREA";
		}
	}

function tiket()
	{
	$p=$_GET['p'];
	echo"
	<h1>Konfigurasi Biaya Karcis Poli Ibu & Anak</h1>
	<u>$p</u>
	<br><br>
	";
	$a=mysql_query("select *from m_politiket where id='1'");
	while($b=mysql_fetch_array($a))
		{
		$harga=$b[harga];
		}
	echo"
	<form method='post' action='index.php?task=ptiket'>
	Biaya Karcis Poli : <input type='text' name='harga' value='$harga'>
	<input type='submit' value='SIMPAN'>
	</form>
	";
	}

function ptiket()
	{
	$harga=$_POST['harga'];
	$a=mysql_query("update m_politiket set harga='$harga' where id='1'");
	if($a)
		{header("location: index.php?task=tiket&p=Biaya Karcis Sudah Diganti");}
	else
		{echo"AUTHORIZED AREA";}
	}

function dokter()
	{
	$p=$_GET['p'];
	echo"
	<h1>Konfigurasi Biaya Dokter Poli Ibu & Anak</h1>
	<u>$p</u>
	<br><br>
	";
	$a=mysql_query("select *from m_polidok where id='1'");
	while($b=mysql_fetch_array($a))
		{
		$harga=$b[harga];
		}
	echo"
	<form method='post' action='index.php?task=pdokter'>
	Biaya Dokter Poli : <input type='text' name='harga' value='$harga'>
	<input type='submit' value='SIMPAN'>
	</form>
	";
	}

function pdokter()
	{
	$harga=$_POST['harga'];
	$a=mysql_query("update m_polidok set harga='$harga' where id='1'");
	if($a)
		{header("location: index.php?task=dokter&p=Biaya Dokter Sudah Diganti");}
	else
		{echo"AUTHORIZED AREA";}
	}

}
?>