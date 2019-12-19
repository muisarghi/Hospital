<?php

class pogi

{

function del()
	{
	$id=$_GET['id'];
	$alm=$_GET['alm'];
	$db=$_GET['db'];
	$masuk="DELETE FROM m_$db where id='$id'";
	$query=mysql_query($masuk);
	if($masuk)
		{
		header("Location: index.php?task=$alm&p=Data Sudah Dihapus");
		}
	else
		{
	echo"ERROR";
		}

	}

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
	Selamat Datang di HALAMAN BAGIAN KEUANGAN RSIA MARDI WALOEJA MALANG
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


function menu_dptklr()
	{
	?>

	<center><h1>Pendapatan dan Pengeluaran</h1></center>
	<br><br>
	<table width="100%" border="0" cellpadding="10" cellspacing="10" class="adminlist">
	<tr>
	<td width="33%" align="center" valign="center">
	<a href="index.php?task=rek"><img width="100px" src="../touch/rekening-income.png" onmouseover=" this.src='../touch/rekening-income_b.png'" onmouseout="this.src='../touch/rekening-income.png'">
	<br><b>Rekening Pendapatan</b>
	</a>
	</td>

	<td align="center" valign="center" width="33%">
	<a href="index.php?task=rekklr"><img width="100px" src="../touch/rekening-sub.png" onmouseover=" this.src='../touch/rekening-sub_b.png'" onmouseout="this.src='../touch/rekening-sub.png'">
	<br><b>Rekening Pengeluaran</b></a>
	</td>

	<td align="center" valign="center" width="33%">
	<a href="index.php?task=pdpt"><img width="100px" src="../touch/income.png" onmouseover=" this.src='../touch/income_b.png'" onmouseout="this.src='../touch/income.png'">
	<br><b>Pendapatan</b></a>
	</td>

	</tr>
	</table>
	<table width="100%" border="0" cellpadding="10" cellspacing="10" class="adminlist">
	<tr>
	<td width="33%" align="center" valign="center">
	<a href="index.php?task=pklr"><img width="100px" src="../touch/outcome.png" onmouseover=" this.src='../touch/outcome_b.png'" onmouseout="this.src='../touch/outcome.png'">
	<br><b>Pengeluaran</b>
	</a>
	</td>

	<td align="center" valign="center" width="33%">
	<a href="index.php?task=rekap"><img width="100px" src="../touch/rekapitulasi.png" onmouseover=" this.src='../touch/rekapitulasi_b.png'" onmouseout="this.src='../touch/rekapitulasi.png'">
	<br><b>Rekapitulasi Keuangan</b></a>
	</td>

	<td align="center" valign="center" width="33%">
	<a href="index.php?task=lapta"><img width="100px" src="../touch/tabelaris.png" onmouseover=" this.src='../touch/tabelaris_b.png'" onmouseout="this.src='../touch/tabelaris.png'">
	<br><b>Laporan Tabelaris</b></a>
	</td>

	</tr>
	</table>
	<?php
	}

function menu_kaber()
	{
	?>

	<center><h1>Kamar Bersalin</h1></center>
	<br><br>
	<table width="100%" border="0" cellpadding="10" cellspacing="10" class="adminlist">
	<tr>
	<td width="33%" align="center" valign="center">
	<a href="index.php?task=gnobkb"><img width="100px" src="../touch/medicine-guna.png" onmouseover=" this.src='../touch/medicine-guna_b.png'" onmouseout="this.src='../touch/medicine-guna.png'">
	<br><b>Penggunaan Obat/Tanggal</b>
	</a>
	</td>

	<td align="center" valign="center" width="33%">
	<a href="index.php?task=trobkb"><img width="100px" src="../touch/medicine-plus.png" onmouseover=" this.src='../touch/medicine-plus_b.png'" onmouseout="this.src='../touch/medicine-plus.png'">
	<br><b>Penerimaan Obat</b></a>
	</td>

	<td align="center" valign="center" width="33%">
	<a href="index.php?task=gnobkbp"><img width="100px" src="../touch/medicine-pakai.png" onmouseover=" this.src='../touch/medicine-pakai_b.png'" onmouseout="this.src='../touch/medicine-pakai.png'">
	<br><b>Pemakaian Obat/Pasien</b></a>
	</td>

	</tr>
	</table>
	<?php
	}

function menu_ka()
	{
	?>

	<center><h1>Kamar Anak</h1></center>
	<br><br>
	<table width="100%" border="0" cellpadding="10" cellspacing="10" class="adminlist">
	<tr>
	<td width="33%" align="center" valign="center">
	<a href="index.php?task=gnobka"><img width="100px" src="../touch/medicine-guna.png" onmouseover=" this.src='../touch/medicine-guna_b.png'" onmouseout="this.src='../touch/medicine-guna.png'">
	<br><b>Penggunaan Obat/Tanggal</b>
	</a>
	</td>

	<td align="center" valign="center" width="33%">
	<a href="index.php?task=trobka"><img width="100px" src="../touch/medicine-plus.png" onmouseover=" this.src='../touch/medicine-plus_b.png'" onmouseout="this.src='../touch/medicine-plus.png'">
	<br><b>Penerimaan Obat</b></a>
	</td>

	<td align="center" valign="center" width="33%">
	<a href="index.php?task=gnobkap"><img width="100px" src="../touch/medicine-pakai.png" onmouseover=" this.src='../touch/medicine-pakai_b.png'" onmouseout="this.src='../touch/medicine-pakai.png'">
	<br><b>Pemakaian Obat/Pasien</b></a>
	</td>

	</tr>
	</table>
	<?php
	}

function menu_ko()
	{
	?>

	<center><h1>Kamar Obat</h1></center>
	<br><br>
	<table width="100%" border="0" cellpadding="10" cellspacing="10" class="adminlist">
	<tr>
	<td width="50%" align="center" valign="center">
	<a href="index.php?task=trko"><img width="100px" src="../touch/medicine-plus.png" onmouseover=" this.src='../touch/medicine-plus_b.png'" onmouseout="this.src='../touch/medicine-plus.png'">
	<br><b>Penerimaan Obat</b>
	</a>
	</td>

	<td align="center" valign="center">
	<a href="index.php?task=klko"><img width="100px" src="../touch/medicine-out.png" onmouseover=" this.src='../touch/medicine-out_b.png'" onmouseout="this.src='../touch/medicine-out.png'">
	<br><b>Pengeluaran Obat</b></a>
	</td>



	</tr>
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


function in_identpas()
	{
	$pesan=$_GET['pesan'];
	echo"<center>
	<h1>
	Identitas Pasien Anak
	<br>
	Ringkasan Keluar Masuk
	</h1>
	</center>
	<br>
	<u>$pesan</u>
	<br><br>
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
	<input type='text' id='kata' name='idpas' onkeyup='lihat(this.value)' size='40'>
	<div id='kotaksugest' style='position:absolute;
	background-color:#eeffee;visibility:hidden;z-index:100'>
	</div>
	</td>

	</tr>
	</table>
	</form>



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
	/ <input type='text' name='umur_pas' size='5'> tahun
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
	<td>Agama: <input type='text' name='agama_pas' size='30'>
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
	if($a and $b and $c and $d and $e and $f and $g and $h and $i)
		{header ("Location: index.php?task=in_identpas&pesan=Data Sudah Diganti");}
	else
		{echo"error";}
	}

function cariin()
	{

	$kata = $_POST['q'];
	$query = mysql_query("select *from m_pasien where nama like '%$kata%' or idpas like '%$kata%' limit 10");
	while($k=mysql_fetch_array($query))
	{
	$id=$k[idpas];
	$nama=$k[nama];
	$ker=$k[ker];
    echo '<li onClick="isi(\''.$k[idpas].'\');" style="cursor:pointer"> '.$k[idpas].'/'.$nama.' /'.$ker.' </li>';}
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

	if($a and $b and $c and $d and $e and $f and $g and $h and $i)
			{
			header ("Location: index.php?task=in_identpas&pesan=Data Sudah Masuk");
			}
	else
			{
			echo"r-or";
			}
		}


	}

function in_sebabmati()
	{
	$pesan=$_GET['pesan'];
	echo"
	<center><b>SEBAB KEMATIAN</b></center>
	<br><br>
	<u>$pesan</u>
	<br><br>
	<form method='post' action='index.php?task=pin_sebabmati'>
	<table class='adminlist'>
	<tr>
	<td>
	Nama Pasien :
	</td>

	</tr>

	<tr>
	<td width='50%'>
	<input type='text' id='kata' name='idpas' onkeyup='lihat(this.value)' size='40'>
	<div id='kotaksugest' style='position:absolute;
	background-color:#eeffee;visibility:hidden;z-index:100'>
	</div>
	</td>

	</tr>
	</table>
	<table class='adminlist'>

	<tr>
	<td width='1%' valign='top'><br><br>a.</td>
	<td width='33' valign='top'><center>I</center><br><br>
	Penyakit atau keadaan yang langsung menyebabkan kematian

	</td>
	<td width='1%' valign='top'><br><br>a.</td>
	<td width='33%' valign='top'>
	<br><br>
	<input type='text' name='skt_sbbmta' size='50'>
	<br>
	Penyakit tersebut dalam ruang a disebabkan oleh (atau akibat dari):<br>
	<input type='text' name='sbbskt_sbbmta' size='50'>

	</td>
	<td width='33%' valign='top'><br><br>
	Lamanya (kira-kira) mulai sakit hingga meninggal dunia<br>
	<input type='text' name='lmskt_sbbmta' size='50'>
	</td>
	</tr>

	<tr>
	<td width='3' valign='top'>b.c</td>
	<td width='33' valign='top'>

	Penyakit-penyakit (bila ada) yang menjadi lantaran timbulnya sebab kematian tersebut pada a. dengan menyebut penyakit yang menjadi pokok pangkal terakhir

	</td>
	<td width='1%' valign='top'>b.</td>
	<td width='33%' valign='top'>

	<input type='text' name='skt_sbbmtb' size='50'>
	<br>
	Penyakit tersebut dalam ruang b disebabkan oleh (atau akibat dari):<br>
	<input type='text' name='sbbskt_sbbmtb' size='50'>

	</td>
	<td width='33%' valign='top'>
	<input type='text' name='lmskt_sbbmtb' size='50'>
	</td>
	</tr>

	<tr>
	<td></td>
	<td></td>
	<td>c.</td>
	<td><input type='text' name='sbbskt_sbbmtc' size='50'></td>
	<td><input type='text' name='lmskt_sbbmtc' size='50'></td>
	</tr>

	</table>

	<table class='adminlist'>
	<tr>
	<td width='33%' valign='top'>
	<center>II</center>
	<br><br>
	Penyakit-penyakit lain berarti dan mempengaruhi pula kematian itu, tetapi tidak ada hubungannya dengan penyakit-penyakit tersebut dalam 1 a b c.
	</td>
	<td width='33%' valign='top'>
	<br><br><br>
	Disamping penyakit-penyakit tersebut di atas terdapat pula penyakit:<br>
	<input type='text' name='sktl_sbbmt1' size='50'><br>
	<input type='text' name='sktl_sbbmt2' size='50'>
	<br>
	</td>
	<td valign='top' width='33%'>
	<br><br><br><br><br><br>
	<input type='text' name='lmsktl_sbbmt1' size='50'>
	<input type='text' name='lmsktl_sbbmt2' size='50'>
	</td>
	</tr>
	</table>

	<table class='adminlist'>
	<tr>
	<td colspan='3'>
	Keterangan khusus untuk:
	</td>
	</tr>

	<tr>
	<td width='3%' align='center'>
	I
	</td>
	<td width='50%'>MATI KARENA RUDAPAKSA (Violent Death)</td>
	<td></td>
	</tr>

	<tr>
	<td width='3%' align='center'>
	</td>
	<td width='50%'>
	<ol type='a'>
	<li>Macam Rudapaksa</li>
	<li>Cara Kejadian Rudapaksa</li>
	<li>Sifat Jejas (kerusakan tubuh)</li>

	</ol>
	</td>
	<td>
	<select name='mcm_rdk'>
	<option value=''>-</option>
	<option value='Bunuh Diri'>Bunuh Diri</option>
	<option value='Pembunuhan'>Pembunuhan</option>
	<option value='Kecelakaan'>Kecelakaan</option>
	</select>
	<br>
	<input type='text' name='kej_rdk' size='50'>
	<br>
	<input type='text' name='sifat_rdk' size='50'>
	</td>
	</tr>

	<tr>
	<td width='3%' align='center'>
	II
	</td>
	<td width='50%'>KELAHIRAN MATI (Stillbirth)</td>
	<td></td>
	</tr>

	<tr>
	<td width='3%' align='center'>
	</td>
	<td width='50%'>
	<ol type='a'>
	<li>Apakah ini janin lahir - mati</li>
	<li>Sebab kelahiran mati</li>


	</ol>
	</td>
	<td>
	<select name='mcm_lhrmt'>
	<option value=''>-</option>
	<option value='ya'>ya</option>
	<option value='tidak'>tidak</option>
		</select>
	<br>
	<input type='text' name='sbb_lhrmt' size='50'>

	</td>
	</tr>

	<tr>
	<td width='3%' align='center'>
	III
	</td>
	<td width='50%'>PERSALINAN, KEHAMILAN</td>
	<td></td>
	</tr>

	<tr>
	<td width='3%' align='center'>
	</td>
	<td width='50%'>
	<ol type='a'>
	<li>Apakah ini peristiwa persalinan</li>
	<li>Apakah ini peristiwa kehamilan</li>


	</ol>
	</td>
	<td>
	<select name='mcm_slnhml'>
	<option value=''>-</option>
	<option value='ya'>ya</option>
	<option value='tidak'>tidak</option>
		</select>
	<br>
	<select name='mcm_slnhml1'>
	<option value=''>-</option>
	<option value='ya'>ya</option>
	<option value='tidak'>tidak</option>
		</select>

	</td>
	</tr>

	<tr>
	<td width='3%' align='center'>
	IV
	</td>
	<td width='50%'>OPERASI</td>
	<td></td>
	</tr>

	<tr>
	<td width='3%' align='center'>
	</td>
	<td width='50%'>
	<ol type='a'>
	<li>Apakah di sini dilakukan operasi</li>
	<li>Jenis operasi</li>


	</ol>
	</td>
	<td>
	<select name='opr'>
	<option value=''>-</option>
	<option value='ya'>ya</option>
	<option value='tidak'>tidak</option>
		</select>
	<br>
	<input type='text' name='jns_opr' size='50'>

	</td>
	</tr>

	<tr>
	<td width='3%' align='center'>

	</td>
	<td width='50%'></td>
	<td></td>
	</tr>

	<tr>
	<td width='3%' align='center'>
	</td>
	<td width='50%'>

	</td>
	<td>
	";
	$a=DATE('d-m-Y');
	echo"
	MALANG, <input type='text' name='tgl_sbbmt' value='$a'>
	<br>
	Yang memberi keterangan sebab kematian:
	<br><br><br><br><br>
	(<input type='text' name='ttd_dok' size='50'>)
	<br>
	Tanda tangan dan nama dokter

	</td>
	</tr>
	<tr><td colspan='3' align='center'>
	<input type='submit' value='simpan'>
	</td></tr>
	</table>
	</form>
	<br>
	<table class='adminlist'>
	<tr>
	<td>
	<form method='post' action='index.php?task=in_sebabmatid'>
	Daftar Pasien :
	<select name='idpas'>
	";
	$pas=mysql_query("select *from m_sbbmt, m_pasien where m_sbbmt.idpas=m_pasien.idpas");
	while($pas2=mysql_fetch_array($pas))
		{
		echo"<option value='$pas2[idpas]'>$pas2[idpas]/ $pas2[nama]
		";
		}
	echo"
	</select>
	<input type='submit' value='LIHAT'>
	</td>
	</tr>
	</table>
	</form>
	";
	}

function in_sebabmatid()
	{
	$idpas=$_POST['idpas'];
	$a=mysql_query("select *from m_sbbmt where idpas='$idpas'");
	while($b=mysql_fetch_array($a))
		{
	$skt=$b[skt];
	$sbb=$b[sbb];
	$lm=$b[lm];
	$sktb=$b[sktb];
	$sbbb=$b[sbbb];
	$lmb=$b[lmb];
	$sbbc=$b[sbbc];
	$lmc=$b[lmc];
	$sktd=$b[sktd];
	$skte=$b[skte];
	$lmd=$b[lmd];
	$lme=$b[lme];
		}
	$c=mysql_query("select *from m_sbbmt2 where idpas='$idpas'");
	while($d=mysql_fetch_array($c))
		{

	$mcm=$d['mcm'];
	$kej=$d['kej'];
	$sft=$d['sft'];
	$mcm2=$d['mcm2'];
	$sbb2=$d['sbb2'];
	$mcm3=$d['mcm3'];
	$mcm4=$d['mcm4'];
	$opr=$d['opr'];
	$oprjns=$d['oprjns'];
	$tgl=$d['tgl'];
	$dok=$d['dok'];
		}
	$e=mysql_query("select *from m_pasien where idpas='$idpas'");
	while($f=mysql_fetch_array($e))
		{
		$nama=$f[nama];
		$idpas=$f[idpas];
		}

		echo"<br><br>
	<form method='post' action='index.php?task=in_sebabmatid2'>
	<table class='adminlist'>
	<tr>
	<td>
	Nama Pasien :
	</td>

	</tr>

	<tr>
	<td width='50%'>
	<b>$nama / $idpas</b>
	</td>

	</tr>
	</table>
	<table class='adminlist'>

	<tr>
	<td width='1%' valign='top'><br><br>a.</td>
	<td width='33' valign='top'><center>I</center><br><br>
	Penyakit atau keadaan yang langsung menyebabkan kematian

	</td>
	<td width='1%' valign='top'><br><br>a.</td>
	<td width='33%' valign='top'>
	<br><br>
	<input type='text' name='skt_sbbmta' size='50' value='$skt'>
	<br>
	Penyakit tersebut dalam ruang a disebabkan oleh (atau akibat dari):<br>
	<input type='text' name='sbbskt_sbbmta' size='50' value='$sbb'>

	</td>
	<td width='33%' valign='top'><br><br>
	Lamanya (kira-kira) mulai sakit hingga meninggal dunia<br>
	<input type='text' name='lmskt_sbbmta' size='50' value='$lm'>
	</td>
	</tr>

	<tr>
	<td width='3' valign='top'>b.c</td>
	<td width='33' valign='top'>

	Penyakit-penyakit (bila ada) yang menjadi lantaran timbulnya sebab kematian tersebut pada a. dengan menyebut penyakit yang menjadi pokok pangkal terakhir

	</td>
	<td width='1%' valign='top'>b.</td>
	<td width='33%' valign='top'>

	<input type='text' name='skt_sbbmtb' size='50' value='$sktb'>
	<br>
	Penyakit tersebut dalam ruang b disebabkan oleh (atau akibat dari):<br>
	<input type='text' name='sbbskt_sbbmtb' size='50' value='$sbbb'>

	</td>
	<td width='33%' valign='top'>
	<input type='text' name='lmskt_sbbmtb' size='50' value='$lmb'>
	</td>
	</tr>

	<tr>
	<td></td>
	<td></td>
	<td>c.</td>
	<td><input type='text' name='sbbskt_sbbmtc' size='50' value='$sbbc'></td>
	<td><input type='text' name='lmskt_sbbmtc' size='50' value='$lmc'></td>
	</tr>

	</table>

	<table class='adminlist'>
	<tr>
	<td width='33%' valign='top'>
	<center>II</center>
	<br><br>
	Penyakit-penyakit lain berarti dan mempengaruhi pula kematian itu, tetapi tidak ada hubungannya dengan penyakit-penyakit tersebut dalam 1 a b c.
	</td>
	<td width='33%' valign='top'>
	<br><br><br>
	Disamping penyakit-penyakit tersebut di atas terdapat pula penyakit:<br>
	<input type='text' name='sktl_sbbmt1' size='50' value='$sktd'><br>
	<input type='text' name='sktl_sbbmt2' size='50' value='$skte'>
	<br>
	</td>
	<td valign='top' width='33%'>
	<br><br><br><br><br><br>
	<input type='text' name='lmsktl_sbbmt1' size='50' value='$lmd'>
	<input type='text' name='lmsktl_sbbmt2' size='50' value='$lme'>
	</td>
	</tr>
	</table>

	<table class='adminlist'>
	<tr>
	<td colspan='3'>
	Keterangan khusus untuk:
	</td>
	</tr>

	<tr>
	<td width='3%' align='center'>
	I
	</td>
	<td width='50%'>MATI KARENA RUDAPAKSA (Violent Death)</td>
	<td></td>
	</tr>

	<tr>
	<td width='3%' align='center'>
	</td>
	<td width='50%'>
	<ol type='a'>
	<li>Macam Rudapaksa</li>
	<li>Cara Kejadian Rudapaksa</li>
	<li>Sifat Jejas (kerusakan tubuh)</li>

	</ol>
	</td>
	<td>
	<select name='mcm_rdk'>
	<option value='$mcm'>$mcm</option>
	<option value=''>-</option>
	<option value='Bunuh Diri'>Bunuh Diri</option>
	<option value='Pembunuhan'>Pembunuhan</option>
	<option value='Kecelakaan'>Kecelakaan</option>
	</select>
	<br>
	<input type='text' name='kej_rdk' size='50' value='$kej'>
	<br>
	<input type='text' name='sifat_rdk' size='50' value='$sft'>
	</td>
	</tr>

	<tr>
	<td width='3%' align='center'>
	II
	</td>
	<td width='50%'>KELAHIRAN MATI (Stillbirth)</td>
	<td></td>
	</tr>

	<tr>
	<td width='3%' align='center'>
	</td>
	<td width='50%'>
	<ol type='a'>
	<li>Apakah ini janin lahir - mati</li>
	<li>Sebab kelahiran mati</li>


	</ol>
	</td>
	<td>
	<select name='mcm_lhrmt'>
	<option value='$mcm2'>$mcm2</option>
	<option value=''>-</option>
	<option value='ya'>ya</option>
	<option value='tidak'>tidak</option>
		</select>
	<br>
	<input type='text' name='sbb_lhrmt' size='50' value='$sbb2'>

	</td>
	</tr>

	<tr>
	<td width='3%' align='center'>
	III
	</td>
	<td width='50%'>PERSALINAN, KEHAMILAN</td>
	<td></td>
	</tr>

	<tr>
	<td width='3%' align='center'>
	</td>
	<td width='50%'>
	<ol type='a'>
	<li>Apakah ini peristiwa persalinan</li>
	<li>Apakah ini peristiwa kehamilan</li>


	</ol>
	</td>
	<td>
	<select name='mcm_slnhml'>
	<option value='$mcm3'>$mcm3</option>
	<option value=''>-</option>
	<option value='ya'>ya</option>
	<option value='tidak'>tidak</option>
		</select>
	<br>
	<select name='mcm_slnhml1'>
	<option value='$mcm4'>$mcm4</option>
	<option value=''>-</option>
	<option value='ya'>ya</option>
	<option value='tidak'>tidak</option>
		</select>

	</td>
	</tr>

	<tr>
	<td width='3%' align='center'>
	IV
	</td>
	<td width='50%'>OPERASI</td>
	<td></td>
	</tr>

	<tr>
	<td width='3%' align='center'>
	</td>
	<td width='50%'>
	<ol type='a'>
	<li>Apakah di sini dilakukan operasi</li>
	<li>Jenis operasi</li>


	</ol>
	</td>
	<td>
	<select name='opr'>
	<option value='$opr'>$opr</option>
	<option value=''>-</option>
	<option value='ya'>ya</option>
	<option value='tidak'>tidak</option>
		</select>
	<br>
	<input type='text' name='jns_opr' size='50' value='$oprjns'>

	</td>
	</tr>

	<tr>
	<td width='3%' align='center'>

	</td>
	<td width='50%'></td>
	<td></td>
	</tr>

	<tr>
	<td width='3%' align='center'>
	</td>
	<td width='50%'>

	</td>
	<td>
	";
	$a=DATE('d-m-Y');
	echo"
	MALANG, <input type='text' name='tgl_sbbmt' value='$tgl'>
	<br>
	Yang memberi keterangan sebab kematian:
	<br><br><br><br><br>
	(<input type='text' name='ttd_dok' size='50' value='$dok'>)
	<br>
	Tanda tangan dan nama dokter

	</td>
	</tr>
	<tr><td colspan='3' align='center'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value='simpan'>
	</td></tr>
	</table>
	</form>";
	}

function in_sebabmatid2()
	{
	$idpas=$_POST['idpas'];
	$skt=$_POST['skt_sbbmta'];
	$sbb=$_POST['sbbskt_sbbmta'];
	$lm=$_POST['lmskt_sbbmta'];
	$sktb=$_POST['skt_sbbmtb'];
	$sbbb=$_POST['sbbskt_sbbmtb'];
	$lmb=$_POST['lmskt_sbbmtb'];
	$sbbc=$_POST['sbbskt_sbbmtc'];
	$lmc=$_POST['lmskt_sbbmtc'];
	$sktd=$_POST['sktl_sbbmt1'];
	$skte=$_POST['sktl_sbbmt2'];
	$lmd=$_POST['lmsktl_sbbmt1'];
	$lme=$_POST['lmsktl_sbbmt2'];

	$mcm=$_POST['mcm_rdk'];
	$kej=$_POST['kej_rdk'];
	$sft=$_POST['sifat_rdk'];
	$mcm2=$_POST['mcm_lhrmt'];
	$sbb2=$_POST['sbb_lhrmt'];
	$mcm3=$_POST['mcm_slnhml'];
	$mcm4=$_POST['mcm_slnhml1'];
	$opr=$_POST['opr'];
	$oprjns=$_POST['jns_opr'];
	$tgl=$_POST['tgl_sbbmt'];
	$dok=$_POST['ttd_dok'];

	$a=mysql_query("update m_sbbmt set skt='$skt', sbb='sbb', lm='$lm', sktb='$sktb', sbbb='$sbbb', lmb='$lmb', sbbc='$sbbc', lmc='$lmc', sktd='$sktd', skte='$skte', lmd='$lmd', lme='$lme' where idpas='$idpas'");
	$b=mysql_query("update m_sbbmt2 set mcm='$mcm', kej='$kej', sft='$sft', mcm2='$mcm2', sbb2='$sbb2', mcm3='$mcm3', mcm4='$mcm4', opr='$opr', oprjns='$oprjns', tgl='$tgl', dok='$dok' where idpas='$idpas'");
	if($a and $b)
		{header("Location: index.php?task=in_sebabmati&pesan=Data Sudah Diganti");}
	else
		{echo"error";}
	}

function pin_sebabmati()
	{
	$idpas=$_POST['idpas'];
	$skt=$_POST['skt_sbbmta'];
	$sbb=$_POST['sbbskt_sbbmta'];
	$lm=$_POST['lmskt_sbbmta'];
	$sktb=$_POST['skt_sbbmtb'];
	$sbbb=$_POST['sbbskt_sbbmtb'];
	$lmb=$_POST['lmskt_sbbmtb'];
	$sbbc=$_POST['sbbskt_sbbmtc'];
	$lmc=$_POST['lmskt_sbbmtc'];
	$sktd=$_POST['sktl_sbbmt1'];
	$skte=$_POST['sktl_sbbmt2'];
	$lmd=$_POST['lmsktl_sbbmt1'];
	$lme=$_POST['lmsktl_sbbmt2'];

	$mcm=$_POST['mcm_rdk'];
	$kej=$_POST['kej_rdk'];
	$sft=$_POST['sifat_rdk'];
	$mcm2=$_POST['mcm_lhrmt'];
	$sbb2=$_POST['sbb_lhrmt'];
	$mcm3=$_POST['mcm_slnhml'];
	$mcm4=$_POST['mcm_slnhml1'];
	$opr=$_POST['opr'];
	$oprjns=$_POST['jns_opr'];
	$tgl=$_POST['tgl_sbbmt'];
	$dok=$_POST['ttd_dok'];

	$a=mysql_query("insert into m_sbbmt values('', '$idpas', '$skt', 'sbb', '$lm', '$sktb', '$sbbb', '$lmb', '$sbbc', '$lmc', '$sktd', '$skte', '$lmd', '$lme')");
	$b=mysql_query("insert into m_sbbmt2 values ('', '$idpas', '$mcm', '$kej', '$sft', '$mcm2', '$sbb2', '$mcm3', '$mcm4', '$opr', '$oprjns', '$tgl', '$dok')");
	if($a and $b)
		{header("Location: index.php?task=in_sebabmati&pesan=Data Sudah Masuk");}
	else
		{echo"error";}


	}



function mes()
	{
	$idpas=$_GET['idpas'];
	$status=$_GET['status'];
	$alm=$_GET['alm'];
	$pes=$_GET['pes'];

	echo"
	<form method='post' action='index.php?task=$alm'>
	<br><br>
	<b>$pes</b>,
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='KEMBALI'>
	</form>
	";

	}



function inots()
	{
	$pesan=$_GET['pesan'];
	$status=$_GET['status'];

	echo"<center>
	<h1>Observasi Tensi Suhu</h1></center>

	<br><br>
	<u>$pesan</u>
	<br><br>
	<form method='post' action='index.php?task=in_ots'>
	<table class='adminlist'>
	<tr>
	<td>
	Nama Pasien :
	</td>

	</tr>

	<tr>
	<td width='50%'>

	<input type='text' id='kata' name='idpas' onkeyup='lihat(this.value)' size='40'>
	<div id='kotaksugest' style='position:absolute;
	background-color:#eeffee;visibility:hidden;z-index:100'>
	</div>
	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}

function in_ots()
	{
	$idpas=$_POST['idpas'];
	$status=$_POST['status'];
	$b=mysql_query("select *from m_absen where idpas='$idpas'");
	while($a=mysql_fetch_array($b))
		{$tglinap=$a[tglinap];
		$blninap=$a[blninap];
		$thninap=$a[thninap];
			$jminap=$a[jminap];

		}
		$d=mysql_query("select *from m_pasien where idpas='$idpas'");
	while($c=mysql_fetch_array($d))
		{$nama=$c[nama];
		$umur=$c[umur];
		$norm=$c[norm];
		$tgllhr=$c[tgllhr];
		}
		$f=mysql_query("select *from m_pasienalm where idpas='$idpas'");
	while($e=mysql_fetch_array($f))
		{$alm=$e[alm];
		$rt=$e[rt];$rw=$e[rw];
		$lurah=$e[lurah];
		$kec=$e[kec];
		$kota=$e[kota];$telp=$e[telp];
		}
		$h=mysql_query("select *from m_pasiensw where idpas='$idpas'");
	while($g=mysql_fetch_array($h))
		{$nmsw=$g[nmsw];
		$umursw=$g[umursw];
		}
	$ada = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_observasi where idpas='$idpas'"),0);
	if ($ada=='0')
		{
	echo"
	<b>OBSERVASI TENSI SUHU </b>
	<br><br>
	<form method='post' action='index.php?task=pin_ots'>
	<table class='adminlist'>

	<tr>
	<td width='10'>No RM</td>
	<td width='40'>: $norm</td>
	<td width='10'>Para</td>
	<td width='40'>: <input type='text' name='para' size='40'></td>
	</tr>

	<tr>
	<td width='10'>Nama Pasien</td>
	<td width='40'>: $nama
	umur $umur th</td>
	<td width='10'>Tgl Lahir</td>
	<td width='40'>:<input type='text' name='lhrtgl' size='15'>
	jam <input type='text' name='lhrjm' size='15'>
	</td>
	</tr>

	<tr>
	<td width='10'>Nama Suami</td>
	<td width='40'>: $nmsw
	umur $umursw th</td>
	<td width='10'>Jenis Kelamin</td>
	<td width='40'>:
	<select name='jk'>
	<option value='laki-laki'>laki-laki</option>
	<option value='perempuan'>perempuan</option>
	</select>
	</td>
	</tr>

	<tr>
	<td width='10' valign='top'>Alamat</td>
	<td width='40' valign='top'>:
	$alm (RT $rt RW $rw) $lurah $kec $kota
	</td>
	<td width='10'>
	BB/ PB
	<br>
	LK/ LD/ LP
	</td>
	<td width='40'>
	: <input type='text' name='bb' size='10'>gr/
	<input type='text' name='bb2' size='10'>cm/
	A/S <input type='text' name='bb3' size='10'>
	<br>
	: <input type='text' name='lk1' size='10'>cm/
	<input type='text' name='lk2' size='10'>cm/
	<input type='text' name='lk3' size='10'>cm
	</td>
	</tr>

	<tr>
	<td width='10' valign='top'>Telepon</td>
	<td width='40' valign='top'>: $telp</td>
	<td width='10' valign='top'>Jenis persalinan/ tindakan</td>
	<td width='40' valign='top'>:
	<input type='text' name='jns' size='40'><br>
	: <input type='text' name='tindakan' size='40'>
	</td>
	</tr>

	<tr>
	<td width='10' valign='top'>Tgl masuk</td>
	<td width='40' valign='top'>: $tglinap-$blninap-$thninap
	 $jminap
	</td>
	<td width='10' valign='top'>Penolong</td>
	<td width='40' valign='top'>:
	<input type='text' name='penolong' size='40'>
	</td>
	</tr>
	<tr>
	<td colspan='4' align='center'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value='SIMPAN'>
	</td>
	</tr>

	</table>
	</form>
	";
		}
	else
		{
		$zi=mysql_query("select *from m_observasi where idpas='$idpas'");
		while($z=mysql_fetch_array($zi))
			{
		$para=$z['para'];
	$lhrtgl=$z['lhrtgl'];
	$lhrjm=$z['lhrjm'];
	$jk=$z['jk'];
	$bb=$z['bb'];
	$bb2=$z['bb2'];
	$bb3=$z['bb3'];
	$lk1=$z['lk1'];
	$lk2=$z['lk2'];
	$lk3=$z['lk3'];
	$jns=$z['jns'];
	$tindakan=$z['tindakan'];
	$penolong=$z['penolong'];
			}
		echo"
	<b>OBSERVASI TENSI SUHU </b>
	<br><br>
	<form method='post' action='index.php?task=pun_ots'>
	<table class='adminlist'>

	<tr>
	<td width='10'>No RM</td>
	<td width='40'>: $norm</td>
	<td width='10'>Para</td>
	<td width='40'>: <input type='text' name='para' size='40' value='$para'></td>
	</tr>

	<tr>
	<td width='10'>Nama Pasien</td>
	<td width='40'>: $nama
	umur $umur th</td>
	<td width='10'>Tgl Lahir</td>
	<td width='40'>:<input type='text' name='lhrtgl' size='15' value='$lhrtgl'>
	jam <input type='text' name='lhrjm' size='15' value='$lhrjm'>
	</td>
	</tr>

	<tr>
	<td width='10'>Nama Suami</td>
	<td width='40'>: $nmsw
	umur $umursw th</td>
	<td width='10'>Jenis Kelamin</td>
	<td width='40'>:
	<select name='jk'>
	<option value='$jk'>$jk</option>
	<option value='laki-laki'>laki-laki</option>
	<option value='perempuan'>perempuan</option>
	</select>
	</td>
	</tr>

	<tr>
	<td width='10' valign='top'>Alamat</td>
	<td width='40' valign='top'>:
	$alm (RT $rt RW $rw) $lurah $kec $kota
	</td>
	<td width='10'>
	BB/ PB
	<br>
	LK/ LD/ LP
	</td>
	<td width='40'>
	: <input type='text' name='bb' size='10' value='$bb'>gr/
	<input type='text' name='bb2' size='10' value='$bb2'>cm/
	A/S <input type='text' name='bb3' size='10' value='$bb3'>
	<br>
	: <input type='text' name='lk1' size='10' value='$lk1'>cm/
	<input type='text' name='lk2' size='10' value='$lk2'>cm/
	<input type='text' name='lk3' size='10' value='$lk3'>cm
	</td>
	</tr>

	<tr>
	<td width='10' valign='top'>Telepon</td>
	<td width='40' valign='top'>: $telp</td>
	<td width='10' valign='top'>Jenis persalinan/ tindakan</td>
	<td width='40' valign='top'>:
	<input type='text' name='jns' size='40' value='$jns'><br>
	: <input type='text' name='tindakan' size='40' value='$tindakan'>
	</td>
	</tr>

	<tr>
	<td width='10' valign='top'>Tgl masuk</td>
	<td width='40' valign='top'>: $tglinap-$blninap-$thninap
	 $jminap
	</td>
	<td width='10' valign='top'>Penolong</td>
	<td width='40' valign='top'>:
	<input type='text' name='penolong' size='40' value='$penolong'>
	</td>
	</tr>
	<tr>
	<td colspan='4' align='center'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value='GANTI'>
	</td>
	</tr>

	</table>
	</form>
	";
		}
	}

function pun_ots()
	{
	$idpas=$_POST['idpas'];
	$para=$_POST['para'];
	$lhrtgl=$_POST['lhrtgl'];
	$lhrjm=$_POST['lhrjm'];
	$jk=$_POST['jk'];
	$bb=$_POST['bb'];
	$bb2=$_POST['bb2'];
	$bb3=$_POST['bb3'];
	$lk1=$_POST['lk1'];
	$lk2=$_POST['lk2'];
	$lk3=$_POST['lk3'];
	$jns=$_POST['jns'];
	$tindakan=$_POST['tindakan'];
	$penolong=$_POST['penolong'];
	$a=mysql_query("update m_observasi set para='$para', lhrtgl='$lhrtgl', lhrjm='$lhrjm', jk='$jk', bb='$bb', bb2='$bb2', bb3='$bb3', lk1='$lk1', lk2='$lk2', lk3='$lk3', jns='$jns', tindakan='$tindakan', penolong='$penolong' where idpas='$idpas'");
	if ($a)
		{
		header ("Location: index.php?task=mes&idpas=$idpas&status=$status&alm=in_ots&pes=Data Sudah Diganti");
		}
	else
		{echo"error";}
	}

function pin_ots()
	{
	$idpas=$_POST['idpas'];
	$para=$_POST['para'];
	$lhrtgl=$_POST['lhrtgl'];
	$lhrjm=$_POST['lhrjm'];
	$jk=$_POST['jk'];
	$bb=$_POST['bb'];
	$bb2=$_POST['bb2'];
	$bb3=$_POST['bb3'];
	$lk1=$_POST['lk1'];
	$lk2=$_POST['lk2'];
	$lk3=$_POST['lk3'];
	$jns=$_POST['jns'];
	$tindakan=$_POST['tindakan'];
	$penolong=$_POST['penolong'];
	$a=mysql_query("insert into m_observasi values ('', '$idpas', '$para', '$lhrtgl', '$lhrjm', '$jk', '$bb', '$bb2', '$bb3', '$lk1', '$lk2', '$lk3', '$jns', '$tindakan', '$penolong')");
	if ($a)
		{
		header ("Location: index.php?task=mes&idpas=$idpas&status=$status&alm=in_ots&pes=Data Sudah Masuk");
		}
	else
		{echo"error";}
	}


function inidlp()
	{
	$idpas=$_POST['idpas'];
	$status=$_POST['status'];


	echo"<center>
	<h1>Instruksi Dokter dan Laporan Perawat</h1></center>

	<br><br>
	<u>$pesan</u>
	<br><br>
	<form method='post' action='index.php?task=in_idlp'>
	<table class='adminlist'>
	<tr>
	<td>
	Nama Pasien :
	</td>

	</tr>

	<tr>
	<td width='50%'>

	<input type='text' id='kata' name='idpas' onkeyup='lihat(this.value)' size='40'>
	<div id='kotaksugest' style='position:absolute;
	background-color:#eeffee;visibility:hidden;z-index:100'>
	</div>
	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}

function in_idlp()
	{
	$pesan=$_POST['pesan'];
	$status=$_POST['status'];
	$idpas=$_POST['idpas'];

	$a1=mysql_query("select *from m_pasien where idpas='$idpas'");
	while($a=mysql_fetch_array($a1))
		{
		$nama=$a[nama];
		$idrg=$a[idrg];
		$umur=$a[umur];

		}
		$a1=mysql_query("select *from m_konfrg where id='$idrg'");
	while($a=mysql_fetch_array($a1))
		{
		$nm_rg=$a[nm_rg];
		$kls_rg=$a[kls_rg];


		}

	echo"
	<b>INTRUKSI DOKTER DAN LAPORAN PERAWAT</b>
	<br>
	<br><u>$pesan</u><br>
	<table class='adminlist'>
	<tr>
	<td rowspan='2' width='20%' align='center' valign='center'><b>Instruksi Dokter
	<br>dan <br>Laporan Perawat
	</td>
	<td width='40%'>
	Ruang: $kls_rg/ $nm_rg
	</td>
	<td width='40%'>
	Nomor: $idpas
	</td>
	</tr>
	<tr>
	<td width='50%'>
	Nama: $nama
	</td>
	<td width='50%'>
	Umur: $umur
	</td>
	</tr>
	</table>
	<table class='adminlist'>

	<tr>
	<td>Tanggal Jam</td>
	<td>Untuk Dokter</td>
	<td>Tanggal Jam</td>
	<td>Untuk Perawat</td>
	<td>Hapus</td>
	</tr>
	";
	$b1=mysql_query("select *from m_instruksi where idpas='$idpas'");
	while($b=mysql_fetch_array($b1))
		{
	echo"
	<tr>
	<td>$b[tgl1] $b[jm1] </td>
	<td><a href='index.php?task=ein_idlp&id=$b[id]&idpas=$idpas&status=$status'>$b[dok]</a></td>
	<td>$b[tgl2] $b[jm2]</td>
	<td>$b[perawat]</td>
	<td><a href='index.php?task=del&id=$b[id]&alm=in_idlp&db=instruksi&idpas=$idpas&status=$status'>Hapus</a></td>
	</tr>
	";
		}
	echo"
	</table>
		<br><br>";

	echo"
	<br>


	Tambah Data:
	<form method='post' action='index.php?task=pin_idlp'>
	<table class='adminlist'>

	<tr>
	<td width='50%'>
	Tanggal Jam: <input type='text' name='tgl1' size='20'> <input type='text' name='jm1' size='20'>
	</td>
	<td width='50%'>
	Untuk Dokter: <input type='text' name='dok' size='50'>
	</td>
	</tr>

	<tr>
	<td width='50%'>
	Tanggal Jam: <input type='text' name='tgl2' size='20'> <input type='text' name='jm2' size='20'>
	</td>
	<td width='50%'>
	Untuk Perawat: <input type='text' name='perawat' size='50'>
	</td>
	</tr>

	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='SIMPAN'>
	</td>
	</tr>

	</table>
	</form>
	";
	}

function ein_idlp()
	{
	$id=$_GET['id'];
	$idpas=$_GET['idpas'];
	$status=$_GET['status'];
	$a1=mysql_query("select *from m_instruksi where id='$id'");
	while($a=mysql_fetch_array($a1))
		{
		$tgl1=$a[tgl1];
		$tgl2=$a[tgl2];
		$jm1=$a[jm1];
		$jm2=$a[jm2];
		$dok=$a[dok];
		$perawat=$a[perawat];
		}
	echo"<br><br>
	<form method='post' action='index.php?task=pen_idlp'>
	<table class='adminlist'>

	<tr>
	<td width='50%'>
	Tanggal Jam: <input type='text' name='tgl1' size='20' value='$tgl1'> <input type='text' name='jm1' size='20' value='$jm1'>
	</td>
	<td width='50%'>
	Untuk Dokter: <input type='text' name='dok' size='50' value='$dok'>
	</td>
	</tr>

	<tr>
	<td width='50%'>
	Tanggal Jam: <input type='text' name='tgl2' size='20' value='$tgl2'> <input type='text' name='jm2' size='20' value='$jm2'>
	</td>
	<td width='50%'>
	Untuk Perawat: <input type='text' name='perawat' size='50' value='$perawat'>
	</td>
	</tr>

	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='id' value='$id'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='SIMPAN'>
	</td>
	</tr>

	</table>
	</form>";

	}

function pen_idlp()
	{
	$id=$_POST['id'];
	$idpas=$_POST['idpas'];
	$status=$_POST['status'];
	$tgl1=$_POST['tgl1'];
	$tgl2=$_POST['tgl2'];
	$jm1=$_POST['jm1'];
	$jm2=$_POST['jm2'];
	$dok=$_POST['dok'];
	$perawat=$_POST['perawat'];
	$a=mysql_query("update m_instruksi set tgl1='$tgl1', jm1='$jm1', tgl2='$tgl2', jm2='$jm2', dok='$dok', perawat='$perawat' where id='$id'");
	if ($a)
		{
		header ("Location: index.php?task=mes&idpas=$idpas&status=$status&pes=Data Sudah Diganti&alm=in_idlp");
		}
	else
		{echo"error";}
	}

function pin_idlp()
	{
	$idpas=$_POST['idpas'];
	$tgl1=$_POST['tgl1'];
	$tgl2=$_POST['tgl2'];
	$jm1=$_POST['jm1'];
	$jm2=$_POST['jm2'];
	$dok=$_POST['dok'];
	$perawat=$_POST['perawat'];
	$a=mysql_query("insert into m_instruksi values('', '$idpas', '$tgl1', '$jm1', '$tgl2', '$jm2', '$dok', '$perawat')");
	if ($a)
		{
		header ("Location: index.php?task=mes&idpas=$idpas&status=$status&pes=Data Sudah Masuk&alm=in_idlp");
		}
	else
		{echo"error";}
	}

function inrsm()
	{
	$idpas=$_POST['idpas'];
	$status=$_POST['status'];


	echo"<center>
	<h1>Resume Medik</h1></center>

	<br><br>
	<u>$pesan</u>
	<br><br>
	<form method='post' action='index.php?task=in_rsm'>
	<table class='adminlist'>
	<tr>
	<td>
	Nama Pasien :
	</td>

	</tr>

	<tr>
	<td width='50%'>

	<input type='text' id='kata' name='idpas' onkeyup='lihat(this.value)' size='40'>
	<div id='kotaksugest' style='position:absolute;
	background-color:#eeffee;visibility:hidden;z-index:100'>
	</div>
	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}

function in_rsm()
	{
	$idpas=$_POST['idpas'];
	$status=$_POST['status'];

	$p=mysql_query("select *from m_pasien where idpas='$idpas'");
	while($pa=mysql_fetch_array($p))
			{
			$nama=$pa['nama'];
			$umur=$pa['umur'];
			$sex=$pa['sex'];
			$norm=$pa['norm'];
			$idrg=$pa['idrg'];
			}
	$q=mysql_query("select *from m_pasienalm where idpas='$idpas'");
	while($qa=mysql_fetch_array($q))
			{
			$alm=$qa['alm'];
			$rt=$qa['rt'];
			$rw=$qa['rw'];
			$lurah=$qa['lurah'];
			$kec=$qa['kec'];
			$kota=$qa['kota'];
			}
	$r=mysql_query("select *from m_pasiendet where idpas='$idpas'");
	while($ra=mysql_fetch_array($r))
			{
			$agama=$ra['agama'];
			}
	$s=mysql_query("select *from m_absen where idpas='$idpas'");
	while($sa=mysql_fetch_array($s))
			{
			$tglinap=$sa['tglinap'];
			$blninap=$sa['blninap'];
			$thninap=$sa['thninap'];
			}
	$t=mysql_query("select *from m_konfrg where id='$idrg'");
	while($ta=mysql_fetch_array($t))
			{
			$nm_rg=$ta['nm_rg'];
			$kls_rg=$ta['kls_rg'];

			}
	echo"
	<center>
	<h1>
	RINGKASAN MEDIK PENDERITA
	<br>
	( RESUME MEDIK )
	</h1>
	</center>
	<br>
	<br>
	<table class='adminlist'>
	";
	$ada = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_resume where idpas='$idpas'"),0);
	if ($ada=='0')
		{
		echo"
	<form method='post' action='index.php?task=pin_rsm'>
	<tr>
	<td width='10%'>Nama Pasien</td>
	<td width='40%'>$nama
	<td width='10%'>No RM</td>
	<td width='40%'>$norm
	</tr>

	<tr>
	<td width='10%'>Umur</td>
	<td width='40%'>$umur
	<td width='10%'>Ruang</td>
	<td width='40%'>$kls_rg/ $nm_rg
	</tr>

	<tr>
	<td width='10%'>Jenis Kelamin</td>
	<td width='40%'>$sex
	<td width='10%'>Tgl Masuk</td>
	<td width='40%'>$tglinap-$blninap-$thninap
	</tr>

	<tr>
	<td width='10%'>Agama</td>
	<td width='40%'>$agama
	<td width='10%'>Tgl Keluar</td>
	<td width='40%'><input type='text' name='tglklr'>
	</tr>

	<tr>
	<td width='10%'>Alamat</td>
	<td width='40%'>$alm
	<td width='10%'>Dokter</td>
	<td width='40%'><input type='text' name='dok'>
	</tr>

	</table>
	<br>
	<br>
	Diagnose waktu dirawat: <input type='text' name='diag1' size='100'>
	<br>
	Diagnose akhir: <input type='text' name='diag2' size='115'>
	<br>
	Operasi: <input type='text' name='opr' size='125'>
	<br>
	Ringkasan riwayat penemuan fisik penting:
	<br>
	- Riwayat: <input type='text' name='rwy' size='125'>
	<br>
	- Pemeriksaan Fisik: <input type='text' name='fsk' size='110'>
	<br>
	Hasil-hasil Laboratorium, Rontgen, dan Konsultasi: (yang penting)
	<textarea name='lab' cols='60' rows='5'>
	</textarea>
	<br><br>
	Perkembangan selama perawatan/ dengan komplikasi: (jika ada)
	<textarea name='perkemb' cols='60' rows='5'>
	</textarea>
	<br><br>
	Keadaan pasien, pengobatan, kesimpulan pada saat keluar RS dan Prognosa
	<textarea name='kead' cols='60' rows='5'>
	</textarea>

	<br><br>
	Lain-lain<br>
	<textarea name='lain' cols='60' rows='5'>
	</textarea>
	<br><br>
	<table border='0'>
	<tr>
	<td width='70%' align='left' valign='top'>";
	$tglskr=DATE('d-m-Y');
	echo"
	Tanggal : <input type='text' name='tglskr' value='$tglskr'>
	</td>
	<td align='center'>Dokter yang merawat
	<br><br><br>
	<input type='text' name='dok2' size='30'>
	<br><br>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='SIMPAN'>
	</td>
	</tr>

	</table>
	</form>
	";
		}
	else
		{
		$x1=mysql_query("select *from m_resume where idpas='$idpas'");
		while($x=mysql_fetch_array($x1))
			{
			$dok=$x[dok];
			$diag1=$x[diag1];
			$diag2=$x[diag2];
			$opr=$x[opr];
			$rwy=$x[rwy];
			$fsk=$x[fsk];
			$lab=$x[lab];
			$perkemb=$x[perkemb];
			$kead=$x[kead];
			$lain=$x[lain];
			$tgl=$x[tgl];
			$dok2=$x[dok2];
			}
		$y1=mysql_query("select *from m_absen where idpas='$idpas'");
		while($y=mysql_fetch_array($y1))
			{
			$tglklr=$y[tglklr];
			}
	echo"
	<form method='post' action='index.php?task=pun_rsm'>
	<tr>
	<td width='10%'>Nama Pasien</td>
	<td width='40%'>$nama
	<td width='10%'>No RM</td>
	<td width='40%'>$norm
	</tr>

	<tr>
	<td width='10%'>Umur</td>
	<td width='40%'>$umur
	<td width='10%'>Ruang</td>
	<td width='40%'>$kls_rg/ $nm_rg
	</tr>

	<tr>
	<td width='10%'>Jenis Kelamin</td>
	<td width='40%'>$sex
	<td width='10%'>Tgl Masuk</td>
	<td width='40%'>$tglinap-$blninap-$thninap
	</tr>

	<tr>
	<td width='10%'>Agama</td>
	<td width='40%'>$agama
	<td width='10%'>Tgl Keluar</td>
	<td width='40%'><input type='text' name='tglklr' value='$tglklr'>
	</tr>

	<tr>
	<td width='10%'>Alamat</td>
	<td width='40%'>$alm
	<td width='10%'>Dokter</td>
	<td width='40%'><input type='text' name='dok' value='$dok'>
	</tr>

	</table>
	<br>
	<br>
	Diagnose waktu dirawat: <input type='text' name='diag1' size='100' value='$diag1'>
	<br>
	Diagnose akhir: <input type='text' name='diag2' size='115' value='$diag2'>
	<br>
	Operasi: <input type='text' name='opr' size='125' value='$opr'>
	<br>
	Ringkasan riwayat penemuan fisik penting:
	<br>
	- Riwayat: <input type='text' name='rwy' size='125' value='$rwy'>
	<br>
	- Pemeriksaan Fisik: <input type='text' name='fsk' size='110' value='$fsk'>
	<br>
	Hasil-hasil Laboratorium, Rontgen, dan Konsultasi: (yang penting)
	<textarea name='lab' cols='60' rows='5' >
	$lab
	</textarea>
	<br><br>
	Perkembangan selama perawatan/ dengan komplikasi: (jika ada)
	<textarea name='perkemb' cols='60' rows='5'>
	$perkemb
	</textarea>
	<br><br>
	Keadaan pasien, pengobatan, kesimpulan pada saat keluar RS dan Prognosa
	<textarea name='kead' cols='60' rows='5'>
	$kead
	</textarea>

	<br><br>
	Lain-lain<br>
	<textarea name='lain' cols='60' rows='5'>
	$lain
	</textarea>
	<br><br>
	<table border='0'>
	<tr>
	<td width='70%' align='left' valign='top'>";
	$tglskr=DATE('d-m-Y');
	echo"
	Tanggal : <input type='text' name='tglskr' value='$tglskr'>
	</td>
	<td align='center'>Dokter yang merawat
	<br><br><br>
	<input type='text' name='dok2' size='30' value='$dok2'>
	<br><br>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='GANTI'>
	</td>
	</tr>

	</table>
	</form>
	";
		}
	}


function pin_rsm()
	{
	$idpas=$_POST['idpas'];
	$dok=$_POST['dok'];
	$diag1=$_POST['diag1'];
	$diag2=$_POST['diag2'];
	$opr=$_POST['opr'];
	$rwy=$_POST['rwy'];
	$fsk=$_POST['fsk'];
	$lab=$_POST['lab'];
	$perkemb=$_POST['perkemb'];
	$kead=$_POST['kead'];
	$lain=$_POST['lain'];
	$tgl=$_POST['tgl'];
	$dok2=$_POST['dok2'];
	$tglklr=$_POST['tglklr'];
	$a=mysql_query("insert into m_resume values ('', '$idpas', '$dok', '$diag1', '$diag2', '$opr', '$rwy', '$fsk', '$lab', '$perkemb', '$kead', '$lain', '$tgl', '$dok2')");
	$b=mysql_query("update m_absen set tglklr='$tglklr' where idpas='$idpas'");
	if ($a and $b)
		{
		header ("Location: index.php?task=mes&idpas=$idpas&status=$status&pes=Data Sudah Masuk&alm=in_rsm");
		}
	else
		{echo"error";}

	}

function pun_rsm()
	{
	$idpas=$_POST['idpas'];
	$dok=$_POST['dok'];
	$diag1=$_POST['diag1'];
	$diag2=$_POST['diag2'];
	$opr=$_POST['opr'];
	$rwy=$_POST['rwy'];
	$fsk=$_POST['fsk'];
	$lab=$_POST['lab'];
	$perkemb=$_POST['perkemb'];
	$kead=$_POST['kead'];
	$lain=$_POST['lain'];
	$tgl=$_POST['tgl'];
	$dok2=$_POST['dok2'];
	$tglklr=$_POST['tglklr'];
	$a=mysql_query("update m_resume set dok='$dok', diag1='$diag1', diag2='$diag2', opr='$opr', rwy='$rwy', fsk='$fsk', lab='$lab', perkemb='$perkemb', kead='$kead', lain='$lain', tgl='$tgl', dok2='$dok2' where idpas='$idpas'");
	$b=mysql_query("update m_absen set tglklr='$tglklr' where idpas='$idpas'");
	if ($a)
		{
		header ("Location: index.php?task=mes&idpas=$idpas&status=$status&pes=Data Sudah Diganti&alm=in_rsm");
		}
	else
		{echo"error";}
	}


function absensi()
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
	<h1>ABSENSI PASIEN</h1>
	<br>
	<u>$pesan</u>
	<br><br>
	";
	$ada = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_abs where tgl='$skr'"),0);
	if($ada=='0')
		{
	echo"
	<form method='post' action='index.php?task=abs_a1'>
	<table class='adminlist'>
	<tr>
	<td>Tanggal</td>
	<td>: <input type='text' name='tgl' value='$skr'></td>
	</tr>

	<tr>
	<td>Nama User</td>
	<td>: <input type='text' name='user'></td>
	</tr>

	<tr>
	<td>Keterangan</td>
	<td>:
	<textarea name='ket' cols='50' rows='3'>
	</textarea>
	</td>
	</tr>

	<tr>
	<td colspan='2'><input type='submit' value='[ SIMPAN ]'></td>
	</tr>
	</table>
	";
		}
		///////////////////////////////////////////////////////////
	else
	{
	$a1=mysql_query("select *from m_abs where tgl='$skr'");
	while($a=mysql_fetch_array($a1))
		{
		$tgl=$a['tgl'];
		$user=$a['user'];
		$ket=$a['ket'];
		}
	echo"
	<form method='post' action='index.php?task=eabs_a1'>
	<table class='adminlist'>
	<tr>
	<td>Tanggal</td>
	<td>: <input type='text' name='tgl' value='$tgl'></td>
	</tr>

	<tr>
	<td>Nama User</td>
	<td>: <input type='text' name='user' value='$user'></td>
	</tr>

	<tr>
	<td>Keterangan</td>
	<td>:
	<textarea name='ket' cols='50' rows='3'>
	$ket
	</textarea>
	</td>
	</tr>

	<tr>
	<td colspan='2'><input type='submit' value='[ GANTI ]'></td>
	</tr>
	</table>";
	}
	//////////////////////////////////////////////////////

	echo"
	<br>
	<h1>DAFTAR PASIEN INAP</h1>
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
	$b1=mysql_query("select *from m_pasien, m_pasienalm, m_absen where m_pasien.idpas=m_pasienalm.idpas and m_pasien.idpas=m_absen.idpas and m_absen.status='Anak' order by m_pasien.nama ASC LIMIT $from, $max_results");
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
	if($tglklr=='--'){echo"<a href='index.php?task=uabsensi&idpas=$b[idpas]&st=non'>checkout</a>";}
	else{echo"$tglklr";}
	echo"</td>
	<td>";
	if($tglklr=='--'){$tglklrb=$skr;}
	else{$tglklrb=$b[tglklr];}
	$tglmsk=$b[tglinap].'-'.$b[blninap].'-'.$b[thninap];
	$hari= strtotime($tglklrb) - strtotime($tglmsk);
	$jmhari = $hari/(60*60*24)+1;
	echo"
	$jmhari
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
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=absensi&page=$prev\">&lt;&lt;Prev</a> ";
	}

	for($i = 1; $i <= $total_pages; $i++){
		if(($page) == $i){
			echo "$i ";
			} else {
				echo "<a href=\"".$_SERVER['PHP_SELF']."?task=absensi&page=$i\">$i</a> ";
		}
	}


	if($page < $total_pages){
		$next = ($page + 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=absensi&page=$next\">Next>></a>";

		} echo"
			<br>
		<br>Terdapat $total_results Pasien
		<br>";

	}

function abs_a1()
	{
	$tgl=$_POST['tgl'];
	$user=$_POST['user'];
	$ket=$_POST['ket'];

	$a=mysql_query("insert into m_abs values ('', '$tgl', '$user', '$ket')");
	if($a)
		{header("location: index.php?task=absensi&pesan=Data Sudah Masuk");}
	}

function uabsensi()
	{
	$tgl=$_GET['tgl'];
	$idpas=$_GET['idpas'];
	$st=$_GET['st'];
	$skr=date('d-m-Y');
	if($st=='non')
		{
		$a=mysql_query("update m_absen set tglklr='$skr' where idpas='$idpas'");
		if($a){header("location: index.php?task=absensi&pesan=Data Sudah Diubah");}
		else{echo"error";}
		}
	else
		{
		$b=mysql_query("update m_absen set tglklr='' where idpas='$idpas'");
		if($b){header("location: index.php?task=absensi&pesan=Data Sudah Diubah");}
		else{echo"error";}
		}
	}


function pasien()
	{
	$p=$_GET['p'];
	echo"
	<h1>FORM PASIEN</h1>
	<br>
	<u>$p</u>
	<br><br>
	<form method='post' action='index.php?task=ipasien'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>No Rekam Medik</td>
	<td><input type='text' name='norm'></td>
	</tr>
	<tr>
	<td width='20%'>Nama Pasien</td>
	<td><input type='text' name='nama'></td>
	</tr>

	<tr>
	<td width='20%'>Tgl Lahir</td>
	<td>
	<select name='tgllhr'>
	";
	for($i=1;$i<=31;$i++)
		{
		echo"<option value='$i'>$i</option>";
		}
	echo"
	</select>
	<select name='blnlhr'>
	";
	for($j=1;$j<=31;$j++)
		{
		echo"<option value='$j'>$j</option>";
		}
	echo"
	</select>
	<input type='text' name='thnlhr'>
	</td>
	</tr>
	<tr>
	<td width='20%'>Jenis Kelamin</td>
	<td>
	<select name='jk'>
	<option value='Laki-laki'>Laki-laki</option>
	<option value='Perempuan'>Perempuan</option>
	</select>
	</td>
	</tr>
	<tr>
	<td width='20%'>Nama Suami/ Ortu</td>
	<td><input type='text' name='swm'></td>
	</tr>
	<tr>
	<td width='20%'>Umur Suami/ Ortu</td>
	<td><input type='text' name='umurswm'></td>
	</tr>

	<tr>
	<td width='20%'>Pekerjaan Suami/ Ortu</td>
	<td><input type='text' name='kerswm'></td>
	</tr>

	<tr>
	<td width='20%'>Alamat</td>
	<td><input type='text' name='alm'></td>
	</tr>
	<tr>
	<td width='20%'>RT/ RW</td>
	<td><input type='text' name='rt' size='5'>/ <input type='text' name='rw' size='5'></td>
	</tr>
	<tr>
	<td width='20%'>Kelurahan/ Kecamatan</td>
	<td><input type='text' name='kec'></td>
	</tr>
	<tr>
	<td width='20%'>Kota</td>
	<td><input type='text' name='kota'></td>
	</tr>
	<tr>
	<td width='20%'>Telepon</td>
	<td><input type='text' name='telp'></td>
	</tr>
	<tr>
	<td colspan='2' align='center'>
	<input type='submit' value='SIMPAN'>
	</td>
	</tr>
	</table>
	</form>
	";
	}

function ipasien()
	{
	$norm=$_POST['norm'];
	$nama=$_POST['nama'];
	$tgllhr=$_POST['tgllhr'];
	$blnlhr=$_POST['blnlhr'];
	$thnlhr=$_POST['thnlhr'];
	$jk=$_POST['jk'];
	$swm=$_POST['swm'];
	$umurswm=$_POST['umurswm'];
	$kerswm=$_POST['kerswm'];
	$alm=$_POST['alm'];
	$rt=$_POST['rt'];
	$rw=$_POST['rw'];
	$kec=$_POST['kec'];
	$kota=$_POST['kota'];
	$telp=$_POST['telp'];
	$tglmsk=date('d');
	$blnmsk=date('m');
	$thnmsk=date('Y');
	$umur=$thnmsk-$thnlhr;

	if ($nama=='' or $swm=='')
		{echo"Data yang Anda isi kurang lengkap, harap isi kembali, <a href='javascript:history.back(-1)'>klik disini</a>";}
	else
		{
		$z= mysql_result(mysql_query("SELECT MAX(id2)FROM m_poliabs where blnmsk='$blnmsk' and thnmsk='$thnmsk'"),0);
	$z2=$z+1;
	$idpas=$z2.$blnmsk.$thnmsk;
	$poli='05';
	$a=mysql_query("insert into m_poliabs values('', '$z2', '$z2$blnmsk$thnmsk$poli', '$tglmsk', '$blnmsk', '$thnmsk')");
	$b=mysql_query("insert into polipas values ('', '$z2$blnmsk$thnmsk$poli', '$nama', '$norm', '$tgllhr-$blnlhr-$thnlhr', '$umur', '$jk', '$agama', '$swm', '$umurswm', '$kerswm', '$alm', '$rt-$rw', '$kec', '$kota', '$telp')");
	if($a and $b)
			{header("location: index.php?task=pasien&p=Data Sudah Masuk");}
	else
			{echo"R OR";}
		}
	}

function antrian()
	{
	echo"
	<h1>Antrian Pasien</h1>
	<br>
	<form method='post' action='index.php?task=antrianb'>
	<table class='adminlist'>
	<tr>
	<td>
	Nama Pasien :
	</td>

	</tr>

	<tr>
	<td width='50%'>

	<input type='text' id='kata' name='idpas' onkeyup='lihat(this.value)' size='40'>
	<div id='kotaksugest' style='position:absolute;
	background-color:#eeffee;visibility:hidden;z-index:100'>
	</div>
	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>
	";
	}

function antrianb()
	{
	$idpas=$_POST['idpas'];
	//idpas tgl bln thn no id
	$tgl=date('d');
	$bln=date('m');
	$thn=date('y');
	$y= mysql_result(mysql_query("SELECT MAX(id)FROM m_poliantri"),0);
	$id=$y+1;
	$z= mysql_result(mysql_query("SELECT MAX(no)FROM m_poliantri where tglmsk='$tglmsk' and blnmsk='$blnmsk' and thnmsk='$thnmsk'"),0);
	$no=$z+1;
	$a=mysql_query("insert into m_poliantri values ('$id', '$no', '$idpas', '$tgl', '$bln', '$thn', 'Belum')");
	if($a)
		{header("location: index.php?task=antrianc&id=$id");}
	else
		{echo"error";}
	}

function antrianc()
	{
	$id=$_GET['id'];
	$a1=mysql_query("select *from m_poliantri where id='$id'");
	while($a=mysql_fetch_array($a1))
		{
		$no=$a[no];
		$idpas=$a[idpas];
		$tgl=$a[tgl];
		$bln=$a[bln];
		$thn=$a[thn];
		}
	$b1=mysql_query("select *from m_polipas where idpas='$idpas'");
	while($b=mysql_fetch_array($b1))
		{
		$nama=$b[nama];
		$alm=$b[alm];
		$kec=$b[kec];
		$kota=$b[kota];
		}
	echo"
	<h1>Antrian Pasien</h1>
	<br>
	<table class='adminlist'>

	<tr>
	<td width='20%'>Tanggal Kunjungan</td>
	<td>$tgl-$bln-$thn</td>
	</tr>

	<tr>
	<td width='20%'>Nomer Antrian</td>
	<td><font size='3'><b>$no</b></font></td>
	</tr>
	<tr>
	<td width='20%'>Nama Pasien</td>
	<td>$nama</td>
	</tr>

	<tr>
	<td width='20%'>Nomer Pasien</td>
	<td>$idpas</td>
	</tr>

	<tr>
	<td width='20%'>Alamat Pasien</td>
	<td>$alm-$kec-$kota</td>
	</tr>

	</table>
	";
	}


function dafantrian()
	{
	$tgl=date('d-m-Y');
	echo"
	<h1>Daftar Antrian Pasien
	<br>
	Tanggal: $tgl
	</h1>
	<br>
	<br>
	<table class='adminlist'>
	<tr>
	<td>Antrian</td>
	<td>Nama</td>
	<td>No Pasien</td>
	</tr>
	";
	$d=date('d');
	$m=date('m');
	$y=date('Y');
	$a1=mysql_query("select *from m_poliantri where tgl='$d' and bln='$m' and thn='$y' order by no ASC");
	while($a=mysql_fetch_array($a1))
		{
		echo"
		<tr>
		<td>$a[no]</td>
		<td>";
		$idpas=$a[idpas];
		$b1=mysql_query("select *from m_polipas where idpas='$idpas'");
		while($b=mysql_fetch_array($b1))
			{$nama=$b[nama];}
		echo"
		$nama
		</td>
		<td>$idpas</td>
		</tr>
		";
		}
	echo"
	</table>
	";
	}

function gnobkb()
	{
	echo"
	<h1>Laporan Penggunaan Obat Per Tanggal</h1>
	<br>
	<form method='post' action='index.php?task=gnobkb2'>
	Masukkan bulan dan tahun :
	<select name='bln'>
	";
	for($i=1;$i<=12;$i++)
		{
		echo"
		<option value='$i'>$i</option>
		";
		}
	echo"
	</select>

	<select name='thn'>
	";
	$y=date('Y');
	for ($j=2011;$j<=$y;$j++)
		{
		echo"
		<option value='$j'>$j</option>
		";
		}
	echo"
	</select>
	<input type='submit' value='PROSES'>
	</form>
	";
	}

function gnobkb2()
	{
	$bln=$_POST['bln'];
	$thn=$_POST['thn'];
	echo"
	<h1>Laporan Penggunaan Obat $bln - $thn</h1>
	<table class='adminlist'>
	<tr>
	<td align='center'>Tanggal</td>
	<td align='center'>Kode Pasien</td>
	<td align='center'>Nama Pasien</td>
	<td align='center'>Nama Obat</td>
	<td align='center'>Harga</td>
	</tr>
	";
	$b1=mysql_query("select *from m_alkespk where tgl like '%$thn-$bln%' order by tgl DESC");
	while ($b=mysql_fetch_array($b1))
		{
		echo"
		<tr>
		<td>$b[tgl]</td>
		<td>$b[idpas]</td>
		<td>";
		$idpas=$b[idpas];
		$c1=mysql_query("select *from m_pasien where idpas='$idpas'");
		while($c=mysql_fetch_array($c1))
			{
			$pasien=$c[nama];
			}
		echo"
		$nama
		</td>
		<td>$b[jns]</td>
		<td>$b[rp]</td>
		</tr>
		";
		}

	}

function trobkb()
	{
	echo"
	<h1>Laporan Penerimaan Obat</h1>
	<br>
	<form method='post' action='index.php?task=trobkb2'>
	Masukkan bulan dan tahun :
	<select name='bln'>
	";
	for($i=1;$i<=12;$i++)
		{
		echo"
		<option value='$i'>$i</option>
		";
		}
	echo"
	</select>

	<select name='thn'>
	";
	$y=date('Y');
	for ($j=2011;$j<=$y;$j++)
		{
		echo"
		<option value='$j'>$j</option>
		";
		}
	echo"
	</select>
	<input type='submit' value='PROSES'>
	</form>
	";
	}

function trobkb2()
	{
	$bln=$_POST['bln'];
	$thn=$_POST['thn'];
	echo"
	<h1>Laporan Penerimaan Obat $bln - $thn</h1>
	<table class='adminlist'>
	<tr>
	<td>Nama Obat</td>
	<td>Jumlah</td>
	<td>Unit</td>
	<td>Tanggal</td>
	</tr>
	";
	$b1=mysql_query("select *from m_obtklr where unit='Kamar Bersalin' tanggal like '%$thn-$bln%' order by tanggal DESC");
	while ($b=mysql_fetch_array($b1))
		{
		echo"
		<tr>
		<td>$b[namaobt]</td>
		<td>$b[jumlah]</td>
		<td>$b[unit]</td>
		<td>$b[tanggal]</td>
		</tr>
		";
		}
	echo"
	</table>
	";
	}

function gnobkbp()
	{
	echo"
	<h1>Pemakaian Obat Per Pasien</h1>
	<form method='post' action='index.php?task=gnobkbp2'>
	Pilih Pasien :
	<select name='idpas'>
	";
	$a1=msyql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status like '%Inpartu%'");
	while($a=mysql_fetch_array($a1))
		{
		echo"
		<option value='$a[idpas]'>$a[nama]</option>
		";
		}
	echo"
	</select>
	<input type='submit' value='Cari'>
	</form>
	";
	}

function gnobkbp2()
	{
	$idpas=$_POST['idpas'];
	$a1=msyql_query("select *from m_pasien where idpas='$idpas'");
	while($a=mysql_fetch_array($a1))

		{$nama=$a[nama];}
	echo"
	<h1>Pemakaian Obat Pasien: $nama</h1>

	<tr>
	<td align='center'>Tanggal</td>
	<td align='center'>Nama Obat</td>
	<td align='center'>Harga</td>
	</tr>";
	$b1=mysql_query("select *from m_alkespk where idpas='$idpas'");
	while($b=mysql_fetch_array($b1))
		{
		echo"
		<tr>
		<td>$b[tgl]</td>
		<td>$b[tgljns]</td>
		<td>$b[harga]</td>
		</tr>
		";
		}
	echo"
	</table>
	";
	}

function gnobka()
	{
	echo"
	<h1>Laporan Penggunaan Obat Kamar Anak Per Tanggal</h1>
	<br>
	<form method='post' action='index.php?task=gnobka2'>
	Masukkan bulan dan tahun :
	<select name='bln'>
	";
	for($i=1;$i<=12;$i++)
		{
		echo"
		<option value='$i'>$i</option>
		";
		}
	echo"
	</select>

	<select name='thn'>
	";
	$y=date('Y');
	for ($j=2011;$j<=$y;$j++)
		{
		echo"
		<option value='$j'>$j</option>
		";
		}
	echo"
	</select>
	<input type='submit' value='PROSES'>
	</form>
	";
	}

function gnobka2()
	{
	$bln=$_POST['bln'];
	$thn=$_POST['thn'];
	echo"
	<h1>Laporan Penggunaan Obat Kamar Anak $bln - $thn</h1>
	<table class='adminlist'>
	<tr>
	<td align='center'>Tanggal</td>
	<td align='center'>Kode Pasien</td>
	<td align='center'>Nama Pasien</td>
	<td align='center'>Nama Obat</td>
	<td align='center'>Jumlah</td>
	</tr>
	";
	$b1=mysql_query("select *from m_analkespk where tgl like '%$thn-$bln%' order by tgl DESC");
	while ($b=mysql_fetch_array($b1))
		{
		echo"
		<tr>
		<td>$b[tgl]</td>
		<td>$b[idpas]</td>
		<td>";
		$idpas=$b[idpas];
		$c1=mysql_query("select *from m_pasien where idpas='$idpas'");
		while($c=mysql_fetch_array($c1))
			{
			$pasien=$c[nama];
			}
		echo"
		$nama
		</td>
		<td>$b[jns]</td>
		<td>$b[jml]</td>
		</tr>
		";
		}
	}

function trobka()
	{
	echo"
	<h1>Laporan Penerimaan Obat</h1>
	<br>
	<form method='post' action='index.php?task=trobkb2'>
	Masukkan bulan dan tahun :
	<select name='bln'>
	";
	for($i=1;$i<=12;$i++)
		{
		echo"
		<option value='$i'>$i</option>
		";
		}
	echo"
	</select>

	<select name='thn'>
	";
	$y=date('Y');
	for ($j=2011;$j<=$y;$j++)
		{
		echo"
		<option value='$j'>$j</option>
		";
		}
	echo"
	</select>
	<input type='submit' value='PROSES'>
	</form>
	";
	}

function trobka2()
	{
	$bln=$_POST['bln'];
	$thn=$_POST['thn'];
	echo"
	<h1>Laporan Penerimaan Obat $bln - $thn</h1>
	<table class='adminlist'>
	<tr>
	<td>Nama Obat</td>
	<td>Jumlah</td>
	<td>Unit</td>
	<td>Tanggal</td>
	</tr>
	";
	$b1=mysql_query("select *from m_obtklr where unit='Kamar Anak' tanggal like '%$thn-$bln%' order by tanggal DESC");
	while ($b=mysql_fetch_array($b1))
		{
		echo"
		<tr>
		<td>$b[namaobt]</td>
		<td>$b[jumlah]</td>
		<td>$b[unit]</td>
		<td>$b[tanggal]</td>
		</tr>
		";
		}
	echo"
	</table>
	";
	}

function gnobkap()
	{
	echo"
	<h1>Pemakaian Obat Per Pasien</h1>
	<form method='post' action='index.php?task=gnobkap2'>
	Pilih Pasien :
	<select name='idpas'>
	";
	$a1=msyql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Anak'");
	while($a=mysql_fetch_array($a1))
		{
		echo"
		<option value='$a[idpas]'>$a[nama]</option>
		";
		}
	echo"
	</select>
	<input type='submit' value='Cari'>
	</form>
	";
	}

function gnobkap2()
	{
	$idpas=$_POST['idpas'];
	$b1=mysql_query("select *from m_pasien where idpas='$idpas'");
	while($b=mysql_fetch_array($b1))
		{
		$nama=$b[nama];
		}
	echo"
	<h1>Penggunaan Obat Pasien <b>$nama</b></h1>
	<table class='adminlist'>
	<tr>
	<td>Tanggal</td>
	<td>Nama Obat</td>
	<td>Jumlah</td>
	</tr>
	";
	$a1=mysql_query("select *from m_analkespk where idpas='$idpas' order by tgl DESC");
	while($a=mysql_fetch_array($a1))
		{
		echo"
		<tr>
		<td>$a[tgl]</td>
		<td>$a[jns]</td>
		<td>$a[jml]</td>
		</tr>
		";
		}
	echo"
	</table>
	";
	}

function trko()
	{
	echo"
	<h1>Laporan Pembelian Obat</h1>
	<br>
	<form method='post' action='index.php?task=trko2'>
	Masukkan bulan dan tahun :
	<select name='bln'>
	";
	for($i=1;$i<=12;$i++)
		{
		echo"
		<option value='$i'>$i</option>
		";
		}
	echo"
	</select>

	<select name='thn'>
	";
	$y=date('Y');
	for ($j=2011;$j<=$y;$j++)
		{
		echo"
		<option value='$j'>$j</option>
		";
		}
	echo"
	</select>
	<input type='submit' value='PROSES'>
	</form>
	";
	}

function trko2()
	{
	$bln=$_POST['bln'];
	$thn=$_POST['thn'];
	echo"
	<h1>Laporan Pembelian Obat $bln - $thn</h1>
	<table class='adminlist'>
	<tr>
	<td align='center'>Obat</td>
	<td align='center'>Supplier</td>
	<td align='center'>Tanggal</td>
	<td align='center'>Faktur</td>
	<td align='center'>Jumlah</td>
	<td align='center'>@</td>
	<td align='center'>Total</td>
	<td align='center'>Potongan/<br>PPN</td>
	<td align='center'>Tagihan</td>

	</tr>
	";
	$b1=mysql_query("select *from m_obtbl where tanggal like '%$thn-$bln%' order by tanggal DESC");
	while ($b=mysql_fetch_array($b1))
		{
		echo"
		<tr>
		<td align='left'>$b[obat]</td>
		<td align='left'>";
		$idsupplier=$b[idsupplier];
		$c1=mysql_query("select *from m_obtsup where id='$idsupplier'");
		while($c=mysql_fetch_array($c1))
		{
		$idsup=$c[id];
		$namasup=$c[nama];
		}
		echo"$namasup
		</td>
		<td align='left'>$b[tanggal]</td>
		<td align='left'>$b[faktur]</td>
		<td align='left'>$b[jumlah] $b[satuan]</td>
		<td align='left'>$b[hgsatuan]</td>
		<td align='left'>$b[hgtotal]</td>
		<td align='left'>$b[potongan]/<br>$b[ppn]</td>
		<td align='left'>$b[tagihan]</td>
		</tr>
		";
		}
	echo"</table>";

	}

function klko()
	{

	echo"
	<h1>Laporan Pengeluaran Obat</h1>
	<br>
	<form method='post' action='index.php?task=klko2'>
	Masukkan bulan dan tahun :
	<select name='bln'>
	";
	for($i=1;$i<=12;$i++)
		{
		echo"
		<option value='$i'>$i</option>
		";
		}
	echo"
	</select>

	<select name='thn'>
	";
	$y=date('Y');
	for ($j=2011;$j<=$y;$j++)
		{
		echo"
		<option value='$j'>$j</option>
		";
		}
	echo"
	</select>
	<input type='submit' value='PROSES'>
	</form>
	";
	}

function klko2()
	{
	$bln=$_POST['bln'];
	$thn=$_POST['thn'];
	echo"
	<h1>Laporan Pembelian Obat $bln - $thn</h1>
	<table class='adminlist'>
	<tr>
	<td>Nama Obat</td>
	<td>Jumlah</td>
	<td>Unit</td>
	<td>Tanggal</td>
	</tr>
	";
	$b1=mysql_query("select *from m_obtklr where tanggal like '%$thn-$bln%' order by tanggal DESC");
	while ($b=mysql_fetch_array($b1))
		{
		echo"
		<tr>
		<td>$b[namaobt]</td>
		<td>$b[jumlah]</td>
		<td>$b[unit]</td>
		<td>$b[tanggal]</td>
		</tr>
		";
		}
	echo"
	</table>
	";

	}


function pasienx()
	{
	echo"
	<center><h1>Rincian Biaya Pasien</h1></center>
	<form method='post' action='index.php?task=pasienxb'>
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
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status != 'Anak' order by nama ASC");
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
	";
	}

function pasienxb()
	{
	$idpas=$_POST['idpas'];
	$a=mysql_query("select *from m_pasien where idpas='$idpas'");
	while($ab=mysql_fetch_array($a))
		{
		$namapas=$ab[nama];
		$idrg=$ab[idrg];
		}
	echo"<center><h1>Rincian Biaya ".ucwords($namapas)." ($idpas)</h1></center>";
	//BIAYA OBAT
	echo"
	<strong>Biaya Obat/ Alkes</strong>
	<br>
	<table class='adminlist'>
	<tr>
	<th align='center'>Tanggal</th>
	<th align='center'>Obat/ Alkes</th>
	<th align='center'>Jumlah</th>
	<th align='center'>Total</th>
	</tr>
	";
	$b=mysql_query("select *from m_alkespk where idpas='$idpas'");
	while($bb=mysql_fetch_array($b))
		{
		echo"
		<tr>
		<td>$bb[tgl]</td>
		<td>$bb[jns]</td>
		<td>$bb[jml]</td>
		<td align='right'>".number_format($bb[rp],0,",",".")."</td>
		</tr>
		";
		}
	echo"
	<tr>
	<td colspan='3' align='center'><b>Total</b></td>
	<td align='right'>
	";
	$c=mysql_result(mysql_query("select SUM(rp) from m_alkespk where idpas='$idpas'"),0);
	$cc=number_format($c,0,",",".");
	echo "<b>$cc</b>";
	echo"</td>
	</tr>
	</table>
	<br><br>

	";


	//BIAYA PENGINAPAN
	echo"
	<strong>Biaya Inap</strong>
	<table class='adminlist'>
	<tr>
	<td>Ruangan</td>
	<td>Jumlah Inap</td>
	<td>@ Hari</td>
	<td>Total</td>
	</tr>
	";
	$d=mysql_query("select *from m_konfrg where id='$idrg'");
	while($dd=mysql_fetch_array($d))
		{
		$nm_rg=$dd[nm_rg];
		$kls_rg=$dd[kls_rg];
		$hrg_rg=$dd[hrg_rg];
		}
	$e=mysql_query("select *from m_absen where idpas='$idpas'");
	while($ee=mysql_fetch_array($e))
		{
		$tglinap=$ee[tglinap];
		$blninap=$ee[blninap];
		$thninap=$ee[thninap];
		$tglklr=$ee[tglklr];
		}
		$skr=date('d-m-Y');
	if($tglklr=='--' or $tglklr=='')
		{$tglklrb=$skr;}
	else
		{$tglklrb=$tglklr;}
	$tglmsk=$tglinap.'-'.$blninap.'-'.$thninap;
	$hari= strtotime($tglklrb) - strtotime($tglmsk);
	$jmhari = $hari/(60*60*24)+1;
	$totrg=$jmhari*$hrg_rg;
	echo"
	<tr>
	<td>$kls_rg/ $nm_rg</td>
	<td>$jmhari hari</td>
	<td>Rp. ".number_format($hrg_rg,0,",",".")."</td>
	<td align='right'>".number_format($totrg,0,",",".")."</td>
	</tr>

	<tr>
	<td colspan='3' align='center'><b>TOTAL KESELURUHAN</b>
	<td align='right'>";
	$totsmw=$totrg+$c;
	echo"
	<b>".number_format($totsmw,0,",",".")."</b>
	</td>
	<tr>

	</table>
	";
	// CEK MELAHIRKAN?
	$f=mysql_result(mysql_query("select count(idby) from m_pasienby where idpas='$idpas'"),0);

	if($f==0)
		{}
	else
		{
		echo"<br><br>
		<strong>Biaya Anak</strong>
		<table class='adminlist'>
		<tr>
		<th align='center'>Tanggal</th>
		<th align='center'>Obat/ Alkes</th>
		<th align='center'>Jumlah</th>
		<th align='center'>Total</th>
		</tr>
		";
		$g1=mysql_query("select *from m_pasienby where idpas='$idpas'");
		while($g=mysql_fetch_array($g1))
			{
			$idpasby=$g[id_by];
			}

		$h1=mysql_query("select *from m_byalkes where idpas='$idpasby'");
		while($h=mysql_fetch_array($h1))
			{
			echo"
			<tr>
			<td>$h[tgl]</td>
			<td>";
			$idobt=$h[idobat];
			$i1=mysql_query("select *from m_obt where id='$idobt'");
			while($i=mysql_fetch_array($i1))
				{
				echo "$i[nama]";
				}
			echo"</td>
			<td>$h[jml]</td>
			<td align='right'>".number_format($h[harga],0,",",".")."</td>
			</tr>
			";
			}
		$totbanak=mysql_result(mysql_query("select sum(harga) from m_byalkes where idpas='$idpasby'"),0);
		$bitot=$totsmw+$totbanak;
		echo"
		<tr>
		<td colspan='3' align='center'><b>TOTAL BIAYA ANAK</b></td>
		<td align='right'><b>".number_format($totbanak,0,",",".")."</b></td>
		</tr>
		</table>
		<br><br>
		<table class='adminlist'>
		<tr>
		<th width='80%' align='center'>BIAYA TOTAL</th>
		<th align='right'>".number_format($bitot,0,",",".")."</th>
		</tr>
		</table>
		";
		}

	}


function rekening()
	{
	$p=$_GET['p'];
	echo"
	<h1>KONFIGURASI REKENING</h1>
	Konfigurasi Sub Rekening
	<br>
	<u>$p</u>
	<br><br>
	<table class='adminlist'>
	<tr>
	<td colspan='4' align='center'><b>PENDAPATAN</b></td>
	</tr>
	<tr>
	<td width='10%'>No</td>
	<td>Nama Sub Rekening</td>
	<td>Edit</td>
	<td>Hapus</td>
	</tr>
	";
	$a1=mysql_query("select *from m_rek where status='Pendapatan' order by no ASC");
	while($a=mysql_fetch_array($a1))
		{
		echo"
		<tr>
		<td>$a[no]</td>
		<td>$a[sub]</td>
		<td><a href='index.php?task=erekening&id=$a[id]'>Edit</a></td>
		<td><a href='index.php?task=del&$id=$a[id]&db=rek&alm=rekening'>Hapus</a></td>
		</tr>
		";
		}
	echo"
	</table>
	<br>
	<table class='adminlist'>
	<tr>
	<td colspan='4' align='center'><b>PENGELUARAN</b></td>
	</tr>
	<tr>
	<td width='10%'>No</td>
	<td>Nama Sub Rekening</td>
	<td>Edit</td>
	<td>Hapus</td>
	</tr>
	";
	$a1=mysql_query("select *from m_rek where status='Pengeluaran' order by no ASC");
	while($a=mysql_fetch_array($a1))
		{
		echo"
		<tr>
		<td>$a[no]</td>
		<td>$a[sub]</td>
		<td><a href='index.php?task=erekening&id=$a[id]'>Edit</a></td>
		<td><a href='index.php?task=del&$id=$a[id]&db=rek&alm=rekening'>Hapus</a></td>

		</tr>
		";
		}
	echo"
	</table>
	<br><br>
	<form method='post' action='index.php?task=prekening'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nomor</td>
	<td><input type='text' name='no'>  <font size='-1'>*isi dengan angka romawi</font></td>
	</tr>
	<tr>
	<td width='20%'>Nama</td>
	<td><input type='text' name='sub'></td>
	</tr>
	<tr>
	<td width='20%'>Pendapatan/Pengeluaran</td>
	<td>
	<select name='status'>
	<option value='Pendapatan'>Pendapatan</option>
	<option value='Pengeluaran'>Pengeluaran</option>
	</select>
	</td>
	</tr>


	<tr>
	<td colspan='2' align='center'>
	<input type='submit' value='[ simpan ]'>
	</td>
	</tr>
	</table>
	</form>
	";
	}

function erekening()
	{
	$id=$_GET['id'];
	$a1=mysql_query("select *from m_rek where id='$id'");
	while($a=mysql_fetch_array($a1))
		{
		$no=$a[no];
		$sub=$a[sub];
		$status=$a[status];
		}
	echo"
	<form method='post' action='index.php?task=perekening'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nomor</td>
	<td><input type='text' name='no' value='$no'>  <font size='-1'>*isi dengan angka romawi</font></td>
	</tr>
	<tr>
	<td width='20%'>Nama</td>
	<td><input type='text' name='sub' value='$sub'></td>
	</tr>
	<tr>
	<td width='20%'>Pendapatan/Pengeluaran</td>
	<td>
	<select name='status'>
	<option value='$status'>$status</option>
	<option value='Pendapatan'>Pendapatan</option>
	<option value='Pengeluaran'>Pengeluaran</option>
	</select>
	</td>
	</tr>


	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='id' value='$id'>
	<input type='submit' value='[ simpan ]'>
	</td>
	</tr>
	</table>
	</form>
	";
	}

function prekening()
	{
	$no=$_POST['no'];
	$sub=$_POST['sub'];
	$status=$_POST['status'];
	$id=$_POST['id'];

	$a=mysql_query("insert into m_rek values ('', '$no', '$sub', '$status')");
	if($a)
		{header("location: index.php?task=rekening&p=Data Sudah Masuk");}
	else
		{echo"AUTORIZHED AREA";}
	}

function perekening()
	{
	$no=$_POST['no'];
	$sub=$_POST['sub'];
	$status=$_POST['status'];

	$a=mysql_query("update m_rek set no='$no', sub='$sub', status='$status' where id='$id'");
	if($a)
		{header("location: index.php?task=rekening&p=Data Sudah Diganti");}
	else
		{echo"AUTORIZHED AREA";}
	}

function rek()
	{
	$p=$_GET['p'];
	echo"
	<h1>KONFIGURASI REKENING</h1>
	Konfigurasi Nama Rekening Pendapatan
	<br>
	<u>$p</u>
	<br><br>
	<form method='post' action='index.php?task=prek'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Sub Rekening</td>
	<td>
	<select name='sub'>
	";
	//$a1=mysql_query("select *from m_rek, m_reksub where m_rek.id=m_reksub.idsub order by norek ASC");
	/*$a1=mysql_query("select *from m_rek order by no ASC");
	while($a=mysql_fetch_array($a1))
		{
		echo"
		<option value='$a[no]'>$a[status]: $a[no] - $a[sub]</option>

		";
		}*/
	echo"
	<optgroup Label='I Perawatan'>
	<option value='IA-A. Dewasa-Pendapatan'>A. Dewasa</option>
	<option value='IB-B. Bayi Sehat-Pendapatan'>B. Bayi Sehat</option>
	<option value='IC-C. Anak/Bayi Sakit-Pendapatan'>C. Anak/Bayi Sakit</option>
	<option value='ID-D. Khusus-Pendapatan'>D. Khusus</option>
	</optgroup>

	<optgroup Label='II Rawat Jalan'>
	<option value='II-II Rawat Jalan-Pendapatan'>Rawat Jalan</option>
	</optgroup>

	<optgroup Label='III Honor'>
	<option value='IIIA-A. Honor Asisten-Pendapatan'>A. Honor Asisten</option>
	<option value='IIIB-B. Honor Dokter-Pendapatan'>B. Honor Dokter</option>
	<option value='IIIC-C. Lainnya-Pendapatan'>C. Lainnya</option>
	</optgroup>

	<optgroup Label='IV Obat/Alkes'>
	<option value='IVA-A. Dewasa-Pendapatan'>A. Dewasa</option>
	<option value='IVB-B. Anak-Pendapatan'>B. Anak</option>
	<option value='IVC-C. Kamar Operasi-Pendapatan'>C. Kamar Operasi</option>
	<option value='IVD-D. Poliklinik-Pendapatan'>D. Poliklinik</option>
	</optgroup>

	<optgroup Label='V Laboratorium'>
	<option value='V-V Laboratorium-Pendapatan'>Laboratorium</option>
	</optgroup>

	<optgroup Label='VI KM Tindakan'>
	<option value='VI-VI KM. Tindakan-Pendapatan'>KM. Tindakan</option>
	</optgroup>

	<optgroup Label='VII Gaji'>
	<option value='VII-VII Gaji-Pendapatan'>Gaji</option>
	</optgroup>

	<optgroup Label='VIII Adm/Rehabilitasi'>
	<option value='VIII-VIII Adm/Rehabilitasi-Pendapatan'>Adm/Rehabilitasi</option>
	</optgroup>

	<optgroup Label='IX Lain-Lain'>
	<option value='IX-IX Lainnya-Pendapatan'>Lain-Lain</option>
	</optgroup>

	</select>
	</td>
	</tr>

	<tr>
	<td>Nomer Rekening</td>
	<td><input type='text' name='norek'></td>
	</tr>

	<tr>
	<td>Nama Rekening</td>
	<td><input type='text' name='nama'></td>
	</tr>

	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='alm' value='rek'>
	<input type='hidden' name='status' value='Pendapatan'>
	<input type='submit' value='[ simpan ]'>
	</td>
	</tr>
	</table>
	</form>
	<br>
	<table class='adminlist'>
	<tr>
	<td colspan='5' align='center'>
	<b>PENDAPATAN</b>
	</td>
	</tr>
	<tr>
	<td>Sub Rekening</td>
	<td>No Rekening</td>
	<td>Nama</td>
	<td>Edit</td>
	<td>Hapus</td>
	</tr>
	";
	$b1=mysql_query("select *from m_reksub where status='Pendapatan' order by norek");
	while($b=mysql_fetch_array($b1))
		{
		echo"
		<tr>
		<td>$b[namasub]</td>
		<td>$b[norek]</td>
		<td>$b[nama]</td>
		<td><a href='index.php?task=erek&idrek=$b[idrek]&alm=rek&db=reksub'>Edit</a></td>
		<td><a href='index.php?task=delrek&idrek=$b[idrek]&alm=rekklr'>Hapus</a></td>
		</tr>
		";
		}
	echo"
	</table>
	";


	}


function rekklr()
	{
	$p=$_GET['p'];
	echo"
	<h1>KONFIGURASI REKENING</h1>
	Konfigurasi Nama Rekening Pengeluaran
	<br>
	<u>$p</u>
	<br><br>
	<form method='post' action='index.php?task=prek'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Sub Rekening</td>
	<td>
	<select name='sub'>
	";
	//$a1=mysql_query("select *from m_rek, m_reksub where m_rek.id=m_reksub.idsub order by norek ASC");
	/*$a1=mysql_query("select *from m_rek order by no ASC");
	while($a=mysql_fetch_array($a1))
		{
		echo"
		<option value='$a[no]'>$a[status]: $a[no] - $a[sub]</option>

		";
		}*/
	echo"
	<optgroup Label='I Instalasi Gizi'>
	<option value='KI-Instalasi Gizi-Pengeluaran'>Instalasi Gizi</option>
	</optgroup>

	<optgroup Label='II Pengadaan/Perwt'>
	<option value='KIIA-IIA Inventaris-Pengeluaran'>A. Inventaris</option>
	<option value='KIIB-IIB Habis Pakai-Pengeluaran'>B. Habis Pakai</option>
	<option value='KIIC-IIC Perawatan-Pengeluaran'>C. Perawatan</option>
	<option value='KIID-IID Kendaraan-Pengeluaran'>D. Kendaraan</option>
	</optgroup>

	<optgroup Label='III Honor'>
	<option value='KIIIA-IIIA Honor Asisten-Pengeluaran'>A. Honor Asisten</option>
	<option value='KIIIB-IIIB Honor Dokter-Pengeluaran'>B. Honor Dokter</option>
	<option value='KIIIC-IIIC Lainnya-Pengeluaran'>C. Lainnya</option>
	</optgroup>

	<optgroup Label='IV Obat/Alkes'>
	<option value='KIV-IV Obat/Alkes-Pengeluaran'>Obat/Alkes</option>
	</optgroup>

	<optgroup Label='V Laboratorium'>
	<option value='KV-V Laboratorium-Pengeluaran'>Laboratorium</option>
	</optgroup>

	<optgroup Label='VI KM Tindakan'>
	<option value='KVI-VI KM. Tindakan-Pengeluaran'>KM. Tindakan</option>
	</optgroup>

	<optgroup Label='VII Gaji'>
	<option value='KVII-VII Gaji-Pengeluaran'>Gaji</option>
	</optgroup>

	<optgroup Label='VIII Kegiatan'>
	<option value='KVIII-VIII Kegiatan-Pengeluaran'>Kegiatan</option>
	</optgroup>

	<optgroup Label='IX Lain-Lain'>
	<option value='KIX-IX Lainnya-Pengeluaran'>Lain-Lain</option>
	</optgroup>

	</select>
	</td>
	</tr>

	<tr>
	<td>Nomer Rekening</td>
	<td><input type='text' name='norek'></td>
	</tr>

	<tr>
	<td>Nama Rekening</td>
	<td><input type='text' name='nama'></td>
	</tr>

	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='alm' value='rekklr'>
	<input type='hidden' name='status' value='Pengeluaran'>
	<input type='submit' value='[ simpan ]'>
	</td>
	</tr>
	</table>
	</form>
	<br>

	<table class='adminlist'>
	<tr>
	<td colspan='5' align='center'>
	<b>PENGELUARAN</b>
	</td>
	</tr>
	<tr>
	<td>Sub Rekening</td>
	<td>No Rekening</td>
	<td>Nama</td>
	<td>Edit</td>
	<td>Hapus</td>
	</tr>
	";
	$b1=mysql_query("select *from m_reksub where status='Pengeluaran' order by norek");
	while($b=mysql_fetch_array($b1))
		{
		echo"
		<tr>
		<td>$b[namasub]</td>
		<td>$b[norek]</td>
		<td>$b[nama]</td>
		<td><a href='index.php?task=erek&idrek=$b[idrek]&alm=rekklr&db=reksub'>Edit</a></td>
		<td><a href='index.php?task=delrek&idrek=$b[idrek]&alm=rekklr'>Hapus</a></td>
		</tr>
		";
		}
	echo"
	</table>
	";
	}

function delrek()
	{
	$idrek=$_GET['idrek'];
	$alm=$_GET['alm'];
	$db=$_GET['db'];
	$masuk="DELETE FROM m_$db where idrek='$idrek'";
	$query=mysql_query($masuk);
	if($masuk)
		{
		header("Location: index.php?task=$alm&p=Data Sudah Dihapus");
		}
	else
		{
	echo"ERROR";
		}

	}


function erek()
	{
	$idrek=$_GET['idrek'];
	$alm=$_GET['alm'];
	$b1=mysql_query("select *from m_reksub where idrek='$idrek'");
	while($b=mysql_fetch_array($b1))
		{
		$norek=$b[norek];
		$nama=$b[nama];
		}
	echo"
	<form method='post' action='index.php?task=perek'>
	<table class='adminlist'>

	<tr>
	<td>Nomer Rekening</td>
	<td><input type='text' name='norek' value='$norek'></td>
	</tr>

	<tr>
	<td>Nama Rekening</td>
	<td><input type='text' name='nama' value='$nama'></td>
	</tr>

	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='idrek' value='$idrek'>
	<input type='hidden' name='alm' value='$alm'>
	<input type='submit' value='[ simpan ]'>
	</td>
	</tr>
	</table>
	</form>
	";
	}

function prek()
	{
	$alm=$_POST['alm'];
	$sub=explode("-", $_POST['sub']);
	$idsub=$sub[0];
	$namasub=$sub[1];
	$status=$sub[2];
	$norek=$_POST['norek'];
	$nama=$_POST['nama'];
	$a=mysql_query("insert into m_reksub values ('', '$idsub', '$namasub', '$norek', '$nama', '$status')");
	if ($a)
		{header("location: index.php?task=$alm&p=Data Sudah Masuk");}
	else
		{echo"AUTORIZHED AREA";}
	}

function perek()
	{
	$idrek=$_POST['idrek'];
	$norek=$_POST['norek'];
	$nama=$_POST['nama'];
	$alm=$_POST['alm'];
	$a=mysql_query("update m_reksub set norek='$norek', nama='$nama' where idrek='$idrek'");
	if ($a)
		{header("location: index.php?task=$alm&p=Data Sudah Masuk");}
	else
		{echo"AUTORIZHED AREA";}
	}

function pdpt()
	{
	$p=$_GET['p'];
	$bln=date('m');
	$thn=date('Y');
	$tgl=date('Y-m-d');
	echo"
	<h1>PENDAPATAN</h1>
	<u>$p</u>
	<br><br>
	<form method='post' action='index.php?task=ppdpt'>
	<table class='adminlist'>
	<tr>
	<td colspan='2'>
	<a href='index.php?task=draftpdpt'>Draft</a>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='index.php?task=delepdpt'>Deleted</a>
	</td>
	</tr>

	<tr>
	<td width='20%'>Rekening</td>
	<td>
	<select name='norek'>
	";
	$a1=mysql_query("select *from m_reksub where status='Pendapatan'");
	while($a=mysql_fetch_array($a1))
		{
		echo"
		<option value='$a[norek]-$a[idsub]'>$a[norek] $a[nama]</option>
		";
		}
	echo"
	</select>
	</td>
	</tr>

	<tr>
	<td>Satuan</td>
	<td><input type='text' name='satuan'></td>
	</tr>

	<tr>
	<td>Total</td>
	<td><input type='text' name='total'></td>
	</tr>

	<tr>
	<td>Keterangan</td>
	<td><input type='text' name='ket'></td>
	</tr>

	<tr>
	<td>Tanggal</td>
	<td><input type='text' name='tanggal' value='$tgl'></td>
	</tr>

	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='thn' value='$thn'>
	<input type='hidden' name='bln' value='$bln'>
	<input type='submit' value='[ simpan ]'>
	</td>
	</tr>
	</table>
	</form>
	<br><br>
	<table class='adminlist'>
	<tr>
	<td>Tanggal</td>
	<td>No Rekening</td>
	<td>Satuan</td>
	<td>Total</td>
	<td>Keterangan</td>
	<td>Edit</td>
	<td>Hapus</td>
	</tr>
	";
	if(!isset($_GET['page'])){
		$page = 50;
	} else {
		$page = $_GET['page'];
	}

	$max_results=1;
	$from=(($page*$max_results)-$max_results);

	$b1=mysql_query("select *from m_rekdpt where bln='$bln-$thn' and status='Published' order by id DESC Limit $from, $max_results");
	while($b=mysql_fetch_array($b1))
		{
		echo"
		<tr>
		<td>$b[tanggal]</td>
		<td>$b[norek]. ";
		$norek=$b[norek];
		$c1=mysql_query("select *from m_reksub where norek='$norek'");
		while($c=mysql_fetch_array($c1))
			{
			$namasub=$c[namasub];
			$nama=$c[nama];
			}
		echo"$namasub - $nama
		</td>
		<td>$b[satuan]</td>
		<td>$b[total]</td>
		<td>$b[ket]</td>
		<td><a href='index.php?task=epdpt&id=$b[id]'>Edit</a></td>
		<td><a href='index.php?task=delpdpt&id=$b[id]&alm=pdpt&db=rekdpt'>Hapus</td>
		</tr>
		";
		}

	echo"
	</table>
	";
	echo"<table class='adminlist'><tr><td align='center'>";
	$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_rekdpt where bln='$bln2' and status='Published'"),0);

	$total_pages=ceil($total_results / $max_results);

	echo "<center>[Page]<br>";


	if($page > 1){
		$prev = ($page - 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=pdpt&page=$prev\"><< Prev </a>";
	}

	for($i = 1; $i <= $total_pages; $i++){
		if(($page) == $i){
			echo "$i ";
			} else {
				echo "<a href=\"".$_SERVER['PHP_SELF']."?task=pdpt&page=$i\">[$i]</a> ";
		}
	}


	if($page < $total_pages){
		$next = ($page + 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=pdpt&page=$next\">Next >></a>";
	} echo"
		<br>
	<br>Terdapat $total_results Data
	<br>
	</center>
	</td></tr></table>
	";
	}

function draftpdpt()
	{
	echo"
	<h1>Draft Pendapatan</h1>
	<table class='adminlist'>
	<tr>
	<td>Tanggal</td>
	<td>No Rekening</td>
	<td>Satuan</td>
	<td>Total</td>
	<td>Keterangan</td>
	<td>Edit</td>
	<td>Hapus</td>
	</tr>
	";
	if(!isset($_GET['page'])){
		$page = 50;
	} else {
		$page = $_GET['page'];
	}

	$max_results=1;
	$from=(($page*$max_results)-$max_results);
	$bln=date('m');
	$thn=date('Y');
	$bln2=$bln."-".$thn;
	$b1=mysql_query("select *from m_rekdpt where bln='$bln2' and status='Draft' order by id DESC Limit $from, $max_results");
	while($b=mysql_fetch_array($b1))
		{
		echo"
		<tr>
		<td>$b[tanggal]</td>
		<td>$b[norek]. ";
		$norek=$b[norek];
		$c1=mysql_query("select *from m_reksub where norek='$norek'");
		while($c=mysql_fetch_array($c1))
			{
			$namasub=$c[namasub];
			$nama=$c[nama];
			}
		echo"$namasub - $nama
		</td>
		<td>$b[satuan]</td>
		<td>$b[total]</td>
		<td>$b[ket]</td>
		<td><a href='index.php?task=epdpt&id=$b[id]'>Edit</a></td>
		<td><a href='index.php?task=delpdpt&id=$b[id]&alm=draftpdpt&db=rekdpt'>Hapus</td>
		</tr>
		";
		}

	echo"
	</table>

	";
	echo"<table class='adminlist'><tr><td align='center'>";
	$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_rekdpt where bln='$bln2' and status='Draft'"),0);

	$total_pages=ceil($total_results / $max_results);

	echo "<center>[Page]<br>";


	if($page > 1){
		$prev = ($page - 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=draftpdpt&page=$prev\"><< Prev </a>";
	}

	for($i = 1; $i <= $total_pages; $i++){
		if(($page) == $i){
			echo "$i ";
			} else {
				echo "<a href=\"".$_SERVER['PHP_SELF']."?task=draftpdpt&page=$i\">[$i]</a> ";
		}
	}


	if($page < $total_pages){
		$next = ($page + 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=draftpdpt&page=$next\">Next >></a>";
	} echo"
		<br>
	<br>Terdapat $total_results Data
	<br>
	</center>
	</td></tr></table>
	";
	}

function delepdpt()
	{
	echo"
	<h1>Deleted Pendapatan</h1>
	<table class='adminlist'>
	<tr>
	<td>Tanggal</td>
	<td>No Rekening</td>
	<td>Satuan</td>
	<td>Total</td>
	<td>Keterangan</td>


	</tr>
	";
	if(!isset($_GET['page'])){
		$page = 50;
	} else {
		$page = $_GET['page'];
	}

	$max_results=1;
	$from=(($page*$max_results)-$max_results);
	$bln=date('m');
	$thn=date('Y');
	$bln2=$bln."-".$thn;
	$b1=mysql_query("select *from m_rekdpt where bln='$bln2' and status='Deleted' order by id DESC Limit $from, $max_results");
	while($b=mysql_fetch_array($b1))
		{
		echo"
		<tr>
		<td>$b[tanggal]</td>
		<td>$b[norek]. ";
		$norek=$b[norek];
		$c1=mysql_query("select *from m_reksub where norek='$norek'");
		while($c=mysql_fetch_array($c1))
			{
			$namasub=$c[namasub];
			$nama=$c[nama];
			}
		echo"$namasub - $nama
		</td>
		<td>$b[satuan]</td>
		<td>$b[total]</td>
		<td>$b[ket]</td>

		</tr>
		";
		}

	echo"
	</table>
	";
	echo"<table class='adminlist'><tr><td align='center'>";
	$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_rekdpt where bln='$bln2' and status='Deleted'"),0);

	$total_pages=ceil($total_results / $max_results);

	echo "<center>[Page]<br>";


	if($page > 1){
		$prev = ($page - 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=delepdpt&page=$prev\"><< Prev </a>";
	}

	for($i = 1; $i <= $total_pages; $i++){
		if(($page) == $i){
			echo "$i ";
			} else {
				echo "<a href=\"".$_SERVER['PHP_SELF']."?task=delepdpt&page=$i\">[$i]</a> ";
		}
	}


	if($page < $total_pages){
		$next = ($page + 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=delepdpt&page=$next\">Next >></a>";
	} echo"
		<br>
	<br>Terdapat $total_results Data
	<br>
	</center>
	</td></tr></table>
	";
	}

function delpdpt()
	{
	$id=$_GET['id'];
	$alm=$_GET['alm'];
	$db=$_GET['db'];
	$a=mysql_query("update m_$db set status='Deleted' where id='$id'");
	if ($a)
		{header("Location: index.php?task=$alm");}
	else
		{echo"AUTHORIZED AREA";}
	}

function epdpt()
	{
	$id=$_GET['id'];
	$a1=mysql_query("select *from m_rekdpt where id='$id'");
	while($a=mysql_fetch_array($a1))
		{
		$norek=$a[norek];
		$satuan=$a[satuan];
		$total=$a[total];
		$ket=$a[ket];
		$tanggal=$a[tanggal];
		$status=$a[status];
		}

	echo"
	<h1>UPDATE PENDAPATAN</h1>

	<form method='post' action='index.php?task=pepdpt'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Rekening</td>
	<td>
	<select name='norek'>
	";
	/*$b1=mysql_query("select *from m_reksub where norek='$norek'");
	while($b=mysql_fetch_array($b1))
		{
		echo"
		<option value='$b[norek]'>$b[norek] $b[nama]</option>
		";
		}*/
	$c1=mysql_query("select *from m_reksub where status='Pendapatan' order by norek ASC");
	while($c=mysql_fetch_array($c1))
		{
		echo"
		<option value='$c[norek]'";
		if($c[norek]==$norek)
			echo"SELECTED";
		echo">$c[norek] $c[nama]</option>
		";
		}
	echo"
	</select>
	</td>
	</tr>
	<tr>
	<td>Satuan</td>
	<td><input type='text' name='satuan' value='$satuan'></td>
	</tr>

	<tr>
	<td>Total</td>
	<td><input type='text' name='total' value='$total'></td>
	</tr>
	<tr>
	<td>Keterangan</td>
	<td><input type='text' name='ket' value='$ket'></td>
	</tr>

	<tr>
	<td>Tanggal</td>
	<td><input type='text' name='tanggal' value='$tanggal'></td>
	</tr>

	<tr>
	<td>Status</td>
	<td>
	<select name='status'>
	<option value='$status'>$status</option>
	<option value='Draft'>Draft</option>
	<option value='Published'>Published</option>
	<option value='Deleted'>Deleted</option>
	</select>
	</td>
	</tr>

	<tr>
	<td colspan='2' align='center'>

	<input type='hidden' name='id' value='$id'>
	<input type='submit' value='[ simpan ]'>
	</td>
	</tr>
	</table>
	</form>
	";
	}

function pepdpt()
	{
	$id=$_POST['id'];
	$norek=$_POST['norek'];
	$satuan=$_POST['satuan'];
	$total=$_POST['total'];
	$ket=$_POST['ket'];
	$tanggal=$_POST['tanggal'];
	$status=$_POST['status'];

	$a=mysql_query("update m_rekdpt set norek='$norek', satuan='$satuan', total='$total', ket='$ket', tanggal='$tanggal', status='$status' where id='$id'");

	if($a)
		{header("location: index.php?task=pdpt&p=Data Sudah Diganti");}
	else
		{echo"AUTORIZHED AREA";}

	}

function ppdpt()
	{
	$norek=$_POST['norek'];
	$nono=explode('-', $norek);
	$nomrek=$nono[0];
	$idsub=$nono[1];
	$satuan=$_POST['satuan'];
	$total=$_POST['total'];
	$ket=$_POST['ket'];
	$tanggal=$_POST['tanggal'];
	$bln=$_POST['bln'];
	$thn=$_POST['thn'];

	$a=mysql_query("insert into m_rekdpt values ('', '$idsub', '$nomrek', '$satuan', '$total', '$ket', '$tanggal', '$bln-$thn', 'Draft')");

	if($a)
		{header("location: index.php?task=pdpt&p=Data Sudah Masuk");}
	else
		{echo"AUTORIZHED AREA";}

	}

function pklr()
	{
	$p=$_GET['p'];
	$bln=date('m');
	$thn=date('Y');
	$tgl=date('Y-m-d');
	echo"
	<h1>PENGELUARAN</h1>
	<u>$p</u>
	<br><br>
	<form method='post' action='index.php?task=ppklr'>
	<table class='adminlist'>
	<tr>
	<td colspan='2'>
	<a href='index.php?task=draftpklr'>Draft</a>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='index.php?task=delepklr'>Deleted</a>
	</td>
	</tr>
	<tr>
	<td width='20%'>Rekening</td>
	<td>
	<select name='norek'>
	";
	$a1=mysql_query("select *from m_reksub where status='Pengeluaran'");
	while($a=mysql_fetch_array($a1))
		{
		echo"
		<option value='$a[norek]-$a[idsub]'>$a[norek] $a[nama]</option>
		";
		}
	echo"
	</select>
	</td>
	</tr>
	<tr>
	<td>Satuan</td>
	<td><input type='text' name='satuan'></td>
	</tr>

	<tr>
	<td>Total</td>
	<td><input type='text' name='total'></td>
	</tr>

	<tr>
	<td>Keterangan</td>
	<td><input type='text' name='ket'></td>
	</tr>

	<tr>
	<td>Tanggal</td>
	<td><input type='text' name='tanggal' value='$tgl'></td>
	</tr>

	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='thn' value='$thn'>
	<input type='hidden' name='bln' value='$bln'>
	<input type='submit' value='[ simpan ]'>
	</td>
	</tr>
	</table>
	</form>
	<br><br>
	<table class='adminlist'>
	<tr>
	<td>Tanggal</td>
	<td>No Rekening</td>
	<td>Satuan</td>
	<td>Total</td>
	<td>Keterangan</td>
	<td>Edit</td>
	<td>Hapus</td>
	</tr>
	";
	if(!isset($_GET['page'])){
		$page = 50;
	} else {
		$page = $_GET['page'];
	}

	$max_results=1;
	$from=(($page*$max_results)-$max_results);

	$bln=date('m');
	$thn=date('Y');
	$bln2=$bln."-".$thn;
	$b1=mysql_query("select *from m_rekklr where bln='$bln2' and status='Published' order by tanggal DESC Limit $from, $max_results");
	while($b=mysql_fetch_array($b1))
		{
		echo"
		<tr>
		<td>$b[tanggal]</td>
		<td>$b[norek]. ";
		$norek=$b[norek];
		$c1=mysql_query("select *from m_reksub where norek='$norek'");
		while($c=mysql_fetch_array($c1))
			{
			$nama=$c[nama];
			}
		echo"$nama
		</td>
		<td>$b[satuan]</td>
		<td>$b[total]</td>
		<td>$b[ket]</td>
		<td><a href='index.php?task=epklr&id=$b[id]'>Edit</a></td>
		<td><a href='index.php?task=delpdpt&id=$b[id]&alm=pklr&db=rekklr'>Hapus</td>
		</tr>
		";
		}

	echo"
	</table>
	";
	echo"<table class='adminlist'><tr><td align='center'>";
	$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_rekklr where bln='$bln2' and status='Published'"),0);

	$total_pages=ceil($total_results / $max_results);

	echo "<center>[Page]<br>";


	if($page > 1){
		$prev = ($page - 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=pklr&page=$prev\"><< Prev </a>";
	}

	for($i = 1; $i <= $total_pages; $i++){
		if(($page) == $i){
			echo "$i ";
			} else {
				echo "<a href=\"".$_SERVER['PHP_SELF']."?task=pklr&page=$i\">[$i]</a> ";
		}
	}


	if($page < $total_pages){
		$next = ($page + 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=pklr&page=$next\">Next >></a>";
	} echo"
		<br>
	<br>Terdapat $total_results Data
	<br>
	</center>
	</td></tr></table>
	";
	}

function draftpklr()
	{
	echo"
	<h1>Draft Pengeluaran</h1>
	<table class='adminlist'>
	<tr>
	<td>Tanggal</td>
	<td>No Rekening</td>
	<td>Satuan</td>
	<td>Total</td>
	<td>Keterangan</td>
	<td>Edit</td>
	<td>Hapus</td>
	</tr>
	";
	if(!isset($_GET['page'])){
		$page = 1;
	} else {
		$page = $_GET['page'];
	}

	$max_results=50;
	$from=(($page*$max_results)-$max_results);

	$bln=date('m');
	$thn=date('Y');
	$bln2=$bln."-".$thn;
	$b1=mysql_query("select *from m_rekklr where bln='$bln2' and status='Draft' order by id DESC Limit $from, $max_results");
	while($b=mysql_fetch_array($b1))
		{
		echo"
		<tr>
		<td>$b[tanggal]</td>
		<td>$b[norek]. ";
		$norek=$b[norek];
		$c1=mysql_query("select *from m_reksub where norek='$norek'");
		while($c=mysql_fetch_array($c1))
			{
			$nama=$c[nama];
			}
		echo"$nama
		</td>
		<td>$b[satuan]</td>
		<td>$b[total]</td>
		<td>$b[ket]</td>
		<td><a href='index.php?task=epklr&id=$b[id]'>Edit</a></td>
		<td><a href='index.php?task=delpdpt&id=$b[id]&alm=draftpklr&db=rekklr'>Hapus</td>
		</tr>
		";
		}

	echo"
	</table>
	";
	echo"<table class='adminlist'><tr><td align='center'>";
	$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_rekklr where bln='$bln2' and status='Draft'"),0);

	$total_pages=ceil($total_results / $max_results);

	echo "<center>[Page]<br>";


	if($page > 1){
		$prev = ($page - 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=draftpklr&page=$prev\"><< Prev </a>";
	}

	for($i = 1; $i <= $total_pages; $i++){
		if(($page) == $i){
			echo "$i ";
			} else {
				echo "<a href=\"".$_SERVER['PHP_SELF']."?task=draftpklr&page=$i\">[$i]</a> ";
		}
	}


	if($page < $total_pages){
		$next = ($page + 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=draftpklr&page=$next\">Next >></a>";
	} echo"
		<br>
	<br>Terdapat $total_results Data
	<br>
	</center>
	</td></tr></table>
	";
	}

function delepklr()
	{
	echo"
	<h1>Deleted Pengeluaran</h1>
	<table class='adminlist'>
	<tr>
	<td>Tanggal</td>
	<td>No Rekening</td>
	<td>Satuan</td>
	<td>Total</td>
	<td>Keterangan</td>

	</tr>
	";
	if(!isset($_GET['page'])){
		$page = 1;
	} else {
		$page = $_GET['page'];
	}

	$max_results=50;
	$from=(($page*$max_results)-$max_results);

	$bln=date('m');
	$thn=date('Y');
	$bln2=$bln."-".$thn;
	$b1=mysql_query("select *from m_rekklr where bln='$bln2' and status='Deleted' order by id DESC Limit $from, $max_results");
	while($b=mysql_fetch_array($b1))
		{
		echo"
		<tr>
		<td>$b[tanggal]</td>
		<td>$b[norek]. ";
		$norek=$b[norek];
		$c1=mysql_query("select *from m_reksub where norek='$norek'");
		while($c=mysql_fetch_array($c1))
			{
			$nama=$c[nama];
			}
		echo"$nama
		</td>
		<td>$b[satuan]</td>
		<td>$b[total]</td>
		<td>$b[ket]</td>

		</tr>
		";
		}

	echo"
	</table>
	";
	echo"<table class='adminlist'><tr><td align='center'>";
	$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_rekklr where bln='$bln2' and status='Deleted'"),0);

	$total_pages=ceil($total_results / $max_results);

	echo "<center>[Page]<br>";


	if($page > 1){
		$prev = ($page - 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=delepklr&page=$prev\"><< Prev </a>";
	}

	for($i = 1; $i <= $total_pages; $i++){
		if(($page) == $i){
			echo "$i ";
			} else {
				echo "<a href=\"".$_SERVER['PHP_SELF']."?task=delepklr&page=$i\">[$i]</a> ";
		}
	}


	if($page < $total_pages){
		$next = ($page + 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=delepklr&page=$next\">Next >></a>";
	} echo"
		<br>
	<br>Terdapat $total_results Data
	<br>
	</center>
	</td></tr></table>
	";
	}

function epklr()
	{
	$id=$_GET['id'];
	$a1=mysql_query("select *from m_rekklr where id='$id'");
	while($a=mysql_fetch_array($a1))
		{
		$norek=$a[norek];
		$satuan=$a[satuan];
		$total=$a[total];
		$ket=$a[ket];
		$tanggal=$a[tanggal];
		$status=$a[status];
		}

	echo"
	<h1>UPDATE PENGELUARAN</h1>

	<form method='post' action='index.php?task=pepklr'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Rekening</td>
	<td>
	<select name='norek'>
	";


	$c1=mysql_query("select *from m_reksub where status='Pengeluaran' order by norek ASC");
	while($c=mysql_fetch_array($c1))
		{
		echo"
		<option value='$c[norek]'";
		if($c[norek]==$norek)
			echo"SELECTED";
		echo">$c[norek] $c[nama]</option>
		";
		}
	echo"
	</select>
	</td>
	</tr>
	<tr>
	<td>Satuan</td>
	<td><input type='text' name='satuan' value='$satuan'></td>
	</tr>

	<tr>
	<td>Total</td>
	<td><input type='text' name='total' value='$total'></td>
	</tr>

	<tr>
	<td>Keterangan</td>
	<td><input type='text' name='ket' value='$ket'></td>
	</tr>

	<tr>
	<td>Tanggal</td>
	<td><input type='text' name='tanggal' value='$tanggal'></td>
	</tr>

	<tr>
	<td>Status</td>
	<td>
	<select name='status'>
	<option value='$status'>$status</option>
	<option value='Draft'>Draft</option>
	<option value='Published'>Published</option>
	<option value='Deleted'>Deleted</option>
	</select>
	</td>
	</tr>

	<tr>
	<td colspan='2' align='center'>

	<input type='hidden' name='id' value='$id'>
	<input type='submit' value='[ simpan ]'>
	</td>
	</tr>
	</table>
	</form>
	";
	}

function pepklr()
	{
	$id=$_POST['id'];
	$norek=$_POST['norek'];
	$satuan=$_POST['satuan'];
	$total=$_POST['total'];
	$ket=$_POST['ket'];
	$tanggal=$_POST['tanggal'];
	$status=$_POST['status'];

	$a=mysql_query("update m_rekklr set norek='$norek', satuan='$satuan', total='$total', ket='$ket', tanggal='$tanggal', status='$status' where id='$id'");

	if($a)
		{header("location: index.php?task=pklr&p=Data Sudah Diganti");}
	else
		{echo"AUTORIZHED AREA";}

	}

function ppklr()
	{
	$norek=$_POST['norek'];
	$nono=explode('-', $norek);
	$nomrek=$nono[0];
	$idsub=$nono[1];
	$satuan=$_POST['satuan'];
	$total=$_POST['total'];
	$ket=$_POST['ket'];
	$tanggal=$_POST['tanggal'];
	$bln=$_POST['bln'];
	$thn=$_POST['thn'];

	$a=mysql_query("insert into m_rekklr values ('', '$idsub', '$nomrek', '$satuan', '$total', '$ket', '$tanggal', '$bln-$thn', 'Draft')");

	if($a)
		{header("location: index.php?task=pklr&p=Data Sudah Masuk");}
	else
		{echo"AUTORIZHED AREA";}

	}


function rekap()
	{
	$thn=date('Y');
	echo"
	<h1>
	Rekapitulasi Keuangan
	</h1>
	<form method='post' action='index.php?task=prekap'>
	Masukkan Bulan/ Tahun:
	<select name='bln'>
	";
	for ($i=1; $i<=12; $i++)
		{
		echo"
		<option value='$i'>$i</option>
		";
		}
	echo"
	</select>
	<input type='text' name='thn' value='$thn'>
	<input type='submit' value='CARI'>

	</form>
	";
	}

function prekap()
	{
	$bln=$_POST['bln'];
	$thn=$_POST['thn'];
	if ($bln=='1')
		{$bln2='JANUARI';}
	elseif($bln=='2')
		{$bln2='FEBRUARI';}
	elseif($bln=='3')
		{$bln2='MARET';}
	elseif($bln=='4')
		{$bln2='APRIL';}
	elseif($bln=='5')
		{$bln2='MEI';}
	elseif($bln=='6')
		{$bln2='JUNI';}
	elseif($bln=='7')
		{$bln2='JULI';}
	elseif($bln=='8')
		{$bln2='AGUSTUS';}
	elseif($bln=='9')
		{$bln2='SEPTEMBER';}
	elseif($bln=='10')
		{$bln2='OKTOBER';}
	elseif($bln=='11')
		{$bln2='NOVEMBER';}
	else
		{$bln2='DESEMBER';}

	$blth=$bln.'-'.$thn;
	echo"
	<center>
	<h1>
	REKAPITULASI KEUANGAN<br>
	RUMAH SAKIT BERSALIN MARDI WALOEJA <br>
	BULAN $bln2 TAHUN $thn
	</h1>
	</center>
	<table class='adminlist'>
	";
	//IA + I
	echo"
	<tr>
	<td width='50%' valign='top'>
	";
	//I PDPTN
	echo"
	<table class='adminlist'>
	<tr>
	<td width='5%'><b>No. <br>Rek</td>
	<td width='60%'><b>Uraian</td>
	<td><b>Pendapatan</td>
	</tr>
	";
	$ia1=mysql_query("select *from m_reksub where idsub='IA'");
	while($ia=mysql_fetch_array($ia1))
		{
		echo"
		<tr>
		<td>$ia[norek]</td>
		<td>$ia[nama]</td>
		<td align='right'>
		";
		$norekia=$ia[norek];
		$a1rekia= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norekia' and bln='$blth' and status='Published'"),0);
		echo"
		$a1rekia
		</td>
		</tr>
		";
		}
	//echo"
	//<tr>
	//<td></td>
	//<td></td>
	//<td>
	//";
	$semkia= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where idsub='IA' and bln='$blth' and status='Published'"),0);
	//echo"$semkia
	//</td>
	//</tr>
	echo"</table>
	</td>

	<td valign='top'>
	";
	//I PKLR
	echo"
	<table class='adminlist'>
	<tr>
	<td width='5%'><b>No. <br>Rek</td>
	<td width='60%'><b>Uraian</td>
	<td><b>Pengeluaran</td>
	</tr>
	";
	$kia1=mysql_query("select *from m_reksub where idsub='KI'");
	while($kia=mysql_fetch_array($kia1))
		{
		echo"
		<tr>
		<td>$kia[norek]</td>
		<td>$kia[nama]</td>
		<td align='right'>
		";
		$norekkia=$kia[norek];
		$ka1rekkia= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norekkia' and bln='$blth' and status='Published'"),0);
		echo"
		$ka1rekkia
		</td>
		</tr>
		";
		}

	//echo"
	//<tr>
	//<td></td>
	//<td></td>
	//<td>
	//";
	$semkkia= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where idsub='KI' and bln='$blth' and status='Published'"),0);
	//echo"$semkkia
	//</td>
	//</tr>
	echo"</table>
	</td>
	</tr>
	";
	//JUMLAH
	echo"
	<tr>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='right'><b>Jumlah</td>
	<td align='right'><b>$semkia</td>
	</tr>
	</table>
	</td>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='right'><b>Jumlah</td>
	<td align='right'><b>$semkkia</td>
	</tr>
	</table>
	</td>
	</tr>
	";

	//IB + II
	echo"
	<tr>
	<td width='50%' valign='top'>
	";
	//IB PDPTN
	echo"
	<table class='adminlist'>

	";
	$ib1=mysql_query("select *from m_reksub where idsub='IB'");
	while($ib=mysql_fetch_array($ib1))
		{
		echo"
		<tr>
		<td width='5%'>$ib[norek]</td>
		<td width='60%'>$ib[nama]</td>
		<td align='right'>
		";
		$norekib=$ib[norek];
		$a1rekib= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norekib' and bln='$blth' and status='Published'"),0);
		echo"
		$a1rekib
		</td>
		</tr>
		";
		}
	//echo"
	//<tr>
	//<td></td>
	//<td></td>
	//<td>
	//";
	$semkib= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where idsub='IB' and bln='$blth' and status='Published'"),0);
	//echo"$semkib
	//</td>
	//</tr>
	echo"</table>
	</td>

	<td valign='top'>
	";
	//II PKLR
	echo"
	<table class='adminlist'>
	";
	$kiia1=mysql_query("select *from m_reksub where idsub='KIIA'");
	while($kiia=mysql_fetch_array($kiia1))
		{
		echo"
		<tr>
		<td width='5%'>$kiia[norek]</td>
		<td width='60%'>$kiia[nama]</td>
		<td align='right'>
		";
		$norekkiia=$kiia[norek];
		$ka1rekkiia= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norekkiia' and bln='$blth' and status='Published'"),0);
		echo"
		$ka1rekkiia
		</td>
		</tr>
		";
		}

	//echo"
	//<tr>
	//<td></td>
	//<td></td>
	//<td>
	//";
	$semkkiia= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where idsub='KIIA' and bln='$blth' and status='Published'"),0);
	//echo"$semkkiia
	//</td>
	//</tr>
	echo"</table>
	</td>
	</tr>
	";
	//JUMLAH
	echo"
	<tr>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='right'><b>Jumlah</td>
	<td align='right'><b>$semkib</td>
	</tr>
	</table>
	</td>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='right'><b>Jumlah</td>
	<td align='right'><b>$semkkiia</td>
	</tr>
	</table>
	</td>
	</tr>
	";


	//IC + KIIB
	echo"
	<tr>
	<td width='50%' valign='top'>
	";
	//IC PDPTN
	echo"
	<table class='adminlist'>
	";
	$ic1=mysql_query("select *from m_reksub where idsub='IC'");
	while($ic=mysql_fetch_array($ic1))
		{
		echo"
		<tr>
		<td width='5%'>$ic[norek]</td>
		<td width='60%'>$ic[nama]</td>
		<td align='right'>
		";
		$norekic=$ic[norek];
		$a1rekic= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norekic' and bln='$blth' and status='Published'"),0);
		echo"
		$a1rekic
		</td>
		</tr>
		";
		}
	//echo"
	//<tr>
	//<td></td>
	//<td></td>
	//<td>
	//";
	$semkic= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where idsub='IC' and bln='$blth' and status='Published'"),0);
	//echo"$semkic
	//</td>
	//</tr>
	echo"</table>
	</td>

	<td valign='top'>
	";
	//KIIB PKLR
	echo"
	<table class='adminlist'>
	";
	$kiib1=mysql_query("select *from m_reksub where idsub='KIIB'");
	while($kiib=mysql_fetch_array($kiib1))
		{
		echo"
		<tr>
		<td width='5%'>$kiib[norek]</td>
		<td width='60%'>$kiib[nama]</td>
		<td align='right'>
		";
		$norekkiib=$kiib[norek];
		$ka1rekkiib= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norekkiib' and bln='$blth' and status='Published'"),0);
		echo"
		$ka1rekkiib
		</td>
		</tr>
		";
		}

	//echo"
	//<tr>
	//<td></td>
	//<td></td>
	//<td>
	//";
	$semkkiib= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where idsub='KIIB' and bln='$blth' and status='Published'"),0);
	//echo"$semkkiib
	//</td>
	//</tr>
	echo"</table>
	</td>
	</tr>
	";

	//JUMLAH
	echo"
	<tr>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='right'><b>Jumlah</td>
	<td align='right'><b>$semkic</td>
	</tr>
	</table>
	</td>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='right'><b>Jumlah</td>
	<td align='right'><b>$semkkiib</td>
	</tr>
	</table>
	</td>
	</tr>
	";

	//ID + IIC
	echo"
	<tr>
	<td width='50%' valign='top'>
	";
	//ID PDPTN
	echo"
	<table class='adminlist'>
	";
	$id1=mysql_query("select *from m_reksub where idsub='ID'");
	while($id=mysql_fetch_array($id1))
		{
		echo"
		<tr>
		<td width='5%'>$id[norek]</td>
		<td width='60%'>$id[nama]</td>
		<td align='right'>
		";
		$norekid=$id[norek];
		$a1rekid= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norekid' and bln='$blth' and status='Published'"),0);
		echo"
		$a1rekid
		</td>
		</tr>
		";
		}
	//echo"
	//<tr>
	//<td></td>
	//<td></td>
	//<td>
	//";
	$semkid= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where idsub='ID' and bln='$blth' and status='Published'"),0);
	//echo"$semkid
	//</td>
	//</tr>
	echo"</table>
	</td>

	<td valign='top'>
	";
	//KIIC PKLR
	echo"
	<table class='adminlist'>
	";
	$kiic1=mysql_query("select *from m_reksub where idsub='KIIC'");
	while($kiic=mysql_fetch_array($kiic1))
		{
		echo"
		<tr>
		<td width='5%'>$kiic[norek]</td>
		<td width='60%'>$kiic[nama]</td>
		<td align='right'>
		";
		$norekkiic=$kiic[norek];
		$ka1rekkiic= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norekkiic' and bln='$blth' and status='Published'"),0);
		echo"
		$ka1rekkiic
		</td>
		</tr>
		";
		}

	//echo"
	//<tr>
	//<td></td>
	//<td></td>
	//<td>
	//";
	$semkkiic= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where idsub='KIIC' and bln='$blth' and status='Published'"),0);
	//echo"$semkkiic
	//</td>
	//</tr>
	echo"</table>
	</td>
	</tr>
	";

	//JUMLAH
	echo"
	<tr>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='right'><b>Jumlah</td>
	<td align='right'><b>$semkid</td>
	</tr>
	</table>
	</td>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='right'><b>Jumlah</td>
	<td align='right'><b>$semkkiic</td>
	</tr>
	</table>
	</td>
	</tr>
	";

	//II + IID
	echo"
	<tr>
	<td width='50%' valign='top'>
	";
	//II PDPTN
	echo"
	<table class='adminlist'>
	";
	$ii1=mysql_query("select *from m_reksub where idsub='II'");
	while($ii=mysql_fetch_array($ii1))
		{
		echo"
		<tr>
		<td width='5%'>$ii[norek]</td>
		<td width='60%'>$ii[nama]</td>
		<td align='right'>
		";
		$norekii=$ii[norek];
		$a1rekii= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norekii' and bln='$blth' and status='Published'"),0);
		echo"
		$a1rekii
		</td>
		</tr>
		";
		}
	//echo"
	//<tr>
	//<td></td>
	//<td></td>
	//<td>
	//";
	$semkii= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where idsub='II' and bln='$blth' and status='Published'"),0);
	//echo"$semkii
	//</td>
	//</tr>
	echo"</table>
	</td>

	<td valign='top'>
	";
	//KIID PKLR
	echo"
	<table class='adminlist'>
	";
	$kiid1=mysql_query("select *from m_reksub where idsub='KIID'");
	while($kiid=mysql_fetch_array($kiid1))
		{
		echo"
		<tr>
		<td width='5%'>$kiid[norek]</td>
		<td width='60%'>$kiid[nama]</td>
		<td align='right'>
		";
		$norekkiid=$kiid[norek];
		$ka1rekkiid= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norekkiid' and bln='$blth' and status='Published'"),0);
		echo"
		$ka1rekkiid
		</td>
		</tr>
		";
		}

	//echo"
	//<tr>
	//<td></td>
	//<td></td>
	//<td>
	//";
	$semkkiid= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where idsub='KIID' and bln='$blth' and status='Published'"),0);
	//echo"$semkkiid
	//</td>
	//</tr>
	echo"</table>
	</td>
	</tr>
	";
	//JUMLAH
	echo"
	<tr>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='right'><b>Jumlah</td>
	<td align='right'><b>$semkii</td>
	</tr>
	</table>
	</td>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='right'><b>Jumlah</td>
	<td align='right'><b>$semkkiid</td>
	</tr>
	</table>
	</td>
	</tr>
	";


	//IIIA + IIIA
	echo"
	<tr>
	<td width='50%' valign='top'>
	";
	//IIIA PDPTN
	echo"
	<table class='adminlist'>
	";
	$iiia1=mysql_query("select *from m_reksub where idsub='IIIA'");
	while($iiia=mysql_fetch_array($iiia1))
		{
		echo"
		<tr>
		<td width='5%'>$iiia[norek]</td>
		<td width='60%'>$iiia[nama]</td>
		<td align='right'>
		";
		$norekiiia=$iiia[norek];
		$a1rekiiia= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norekiiia' and bln='$blth' and status='Published'"),0);
		echo"
		$a1rekiiia
		</td>
		</tr>
		";
		}
	//echo"
	//<tr>
	//<td></td>
	//<td></td>
	//<td>
	//";
	$semkiiia= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where idsub='IIIA' and bln='$blth' and status='Published'"),0);
	//echo"$semkiiia
	//</td>
	//</tr>
	echo"</table>
	</td>

	<td valign='top'>
	";
	//KIIIA PKLR
	echo"
	<table class='adminlist'>
	";
	$kiiia1=mysql_query("select *from m_reksub where idsub='KIIIA'");
	while($kiiia=mysql_fetch_array($kiiia1))
		{
		echo"
		<tr>
		<td width='5%'>$kiiia[norek]</td>
		<td width='60%'>$kiiia[nama]</td>
		<td align='right'>
		";
		$norekkiiia=$kiiia[norek];
		$ka1rekkiiia= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norekkiiia' and bln='$blth' and status='Published'"),0);
		echo"
		$ka1rekkiiia
		</td>
		</tr>
		";
		}

	//echo"
	//<tr>
	//<td></td>
	//<td></td>
	//<td>
	//";
	$semkkiiia= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where idsub='KIIIA' and bln='$blth' and status='Published'"),0);
	//echo"$semkkiiia
	//</td>
	//</tr>
	echo"</table>
	</td>
	</tr>
	";
	//JUMLAH
	echo"
	<tr>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='right'><b>Jumlah</td>
	<td align='right'><b>$semkiiia</td>
	</tr>
	</table>
	</td>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='right'><b>Jumlah</td>
	<td align='right'><b>$semkkiiia</td>
	</tr>
	</table>
	</td>
	</tr>
	";



	//IIIB + KIIIB
	echo"
	<tr>
	<td width='50%' valign='top'>
	";
	//IIIB PDPTN
	echo"
	<table class='adminlist'>
	";
	$iiib1=mysql_query("select *from m_reksub where idsub='IIIB'");
	while($iiib=mysql_fetch_array($iiib1))
		{
		echo"
		<tr>
		<td width='5%'>$iiib[norek]</td>
		<td width='60%'>$iiib[nama]</td>
		<td align='right'>
		";
		$norekiiib=$iiib[norek];
		$a1rekiiib= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norekiiib' and bln='$blth' and status='Published'"),0);
		echo"
		$a1rekiiib
		</td>
		</tr>
		";
		}
	//echo"
	//<tr>
	//<td></td>
	//<td></td>
	//<td>
	//";
	$semkiiib= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where idsub='IIIB' and bln='$blth' and status='Published'"),0);
	//echo"$semkiiib
	//</td>
	//</tr>
	echo"</table>
	</td>

	<td valign='top'>
	";
	//KIIIB PKLR
	echo"
	<table class='adminlist'>
	";
	$kiiib1=mysql_query("select *from m_reksub where idsub='KIIIB'");
	while($kiiib=mysql_fetch_array($kiiib1))
		{
		echo"
		<tr>
		<td width='5%'>$kiiib[norek]</td>
		<td width='60%'>$kiiib[nama]</td>
		<td align='right'>
		";
		$norekkiiib=$kiiib[norek];
		$ka1rekkiiib= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norekkiiib' and bln='$blth' and status='Published'"),0);
		echo"
		$ka1rekkiiib
		</td>
		</tr>
		";
		}

	//echo"
	//<tr>
	//<td></td>
	//<td></td>
	//<td>
	//";
	$semkkiiib= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where idsub='KIIIB' and bln='$blth' and status='Published'"),0);
	//echo"$semkkiiib
	//</td>
	//</tr>
	echo"</table>
	</td>
	</tr>
	";
	//JUMLAH
	echo"
	<tr>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='right'><b>Jumlah</td>
	<td align='right'><b>$semkiiib</td>
	</tr>
	</table>
	</td>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='right'><b>Jumlah</td>
	<td align='right'><b>$semkkiiib</td>
	</tr>
	</table>
	</td>
	</tr>
	";


	//IIIC + IIIC
	echo"
	<tr>
	<td width='50%' valign='top'>
	";
	//IIIC PDPTN
	echo"
	<table class='adminlist'>
	";
	$iiic1=mysql_query("select *from m_reksub where idsub='IIIC'");
	while($iiic=mysql_fetch_array($iiic1))
		{
		echo"
		<tr>
		<td width='5%'>$iiic[norek]</td>
		<td width='60%'>$iiic[nama]</td>
		<td align='right'>
		";
		$norekiiic=$iiic[norek];
		$a1rekiiic= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norekiiic' and bln='$blth' and status='Published'"),0);
		echo"
		$a1rekiiic
		</td>
		</tr>
		";
		}
	//echo"
	//<tr>
	//<td></td>
	//<td></td>
	//<td>
	//";
	$semkiiic= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where idsub='IIIC' and bln='$blth' and status='Published'"),0);
	//echo"$semkiiic
	//</td>
	//</tr>
	echo"</table>
	</td>

	<td valign='top'>
	";
	//KIIIC PKLR
	echo"
	<table class='adminlist'>
	";
	$kiiic1=mysql_query("select *from m_reksub where idsub='KIIIC'");
	while($kiiic=mysql_fetch_array($kiiic1))
		{
		echo"
		<tr>
		<td width='5%'>$kiiic[norek]</td>
		<td width='60%'>$kiiic[nama]</td>
		<td align='right'>
		";
		$norekkiiic=$kiiic[norek];
		$ka1rekkiiic= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norekkiiic' and bln='$blth' and status='Published'"),0);
		echo"
		$ka1rekkiiic
		</td>
		</tr>
		";
		}

	//echo"
	//<tr>
	//<td></td>
	//<td></td>
	//<td>
	//";
	$semkkiiic= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where idsub='KIIIC' and bln='$blth' and status='Published'"),0);
	//echo"$semkkiiic
	//</td>
	//</tr>
	echo"</table>
	</td>
	</tr>
	";
	//JUMLAH
	echo"
	<tr>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='right'><b>Jumlah</td>
	<td align='right'><b>$semkiiic</td>
	</tr>
	</table>
	</td>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='right'><b>Jumlah</td>
	<td align='right'><b>$semkkiiic</td>
	</tr>
	</table>
	</td>
	</tr>
	";



	//IV ABCD + KIV
	echo"
	<tr>
	<td width='50%' valign='top'>
	";
	//IVA PDPTN
	echo"
	<table class='adminlist'>
	";
	$iva1=mysql_query("select *from m_reksub where idsub='IVA'");
	while($iva=mysql_fetch_array($iva1))
		{
		echo"
		<tr>
		<td width='5%'>$iva[norek]</td>
		<td width='60%'>$iva[nama]</td>
		<td align='right'>
		";
		$norekiva=$iva[norek];
		$a1rekiva= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norekiva' and bln='$blth' and status='Published'"),0);
		echo"
		$a1rekiva
		</td>
		</tr>
		";
		}
	echo"
	<tr>
	<td></td>
	<td><b>Jumlah</td>
	<td align='right'>
	";
	$semkiva= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where idsub='IVA' and bln='$blth' and status='Published'"),0);
	echo"$semkiva
	</td>
	</tr>

	</table>
	<br>
	<table class='adminlist'>
	";
	$ivb1=mysql_query("select *from m_reksub where idsub='IVB'");
	while($ivb=mysql_fetch_array($ivb1))
		{
		echo"
		<tr>
		<td width='5%'>$ivb[norek]</td>
		<td width='60%'>$ivb[nama]</td>
		<td align='right'>
		";
		$norekivb=$ivb[norek];
		$a1rekivb= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norekivb' and bln='$blth' and status='Published'"),0);
		echo"
		$a1rekivb
		</td>
		</tr>
		";
		}
	echo"
	<tr>
	<td></td>
	<td><b>Jumlah</td>
	<td align='right'>
	";
	$semkivb= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where idsub='IVB' and bln='$blth' and status='Published'"),0);
	echo"$semkivb
	</td>
	</tr>

	</table>
	<br>
	<table class='adminlist'>
	";
	$ivc1=mysql_query("select *from m_reksub where idsub='IVC'");
	while($ivc=mysql_fetch_array($ivc1))
		{
		echo"
		<tr>
		<td width='5%'>$ivc[norek]</td>
		<td width='60%'>$ivc[nama]</td>
		<td align='right'>
		";
		$norekivc=$ivc[norek];
		$a1rekivc= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norekivc' and bln='$blth' and status='Published'"),0);
		echo"
		$a1rekivc
		</td>
		</tr>
		";
		}
	echo"
	<tr>
	<td></td>
	<td><b>Jumlah</td>
	<td align='right'>
	";
	$semkivc= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where idsub='IVC' and bln='$blth' and status='Published'"),0);
	echo"$semkivc
	</td>
	</tr>

	</table>
	<br>
	<table class='adminlist'>
	";
	$ivd1=mysql_query("select *from m_reksub where idsub='IVD'");
	while($ivd=mysql_fetch_array($ivd1))
		{
		echo"
		<tr>
		<td width='5%'>$ivd[norek]</td>
		<td width='60%'>$ivd[nama]</td>
		<td align='right'>
		";
		$norekivd=$ivd[norek];
		$a1rekivd= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norekivd' and bln='$blth' and status='Published'"),0);
		echo"
		$a1rekivd
		</td>
		</tr>
		";
		}
	echo"
	<tr>
	<td></td>
	<td><b>Jumlah</td>
	<td align='right'>
	";
	$semkivd= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where idsub='IVD' and bln='$blth' and status='Published'"),0);
	echo"$semkivd
	</td>
	</tr>
	</table>
	</td>

	<td valign='top'>
	";
	$jmliv=$semkivd+$semkivc+$semkivb+$semkiva;

	//KIVA PKLR
	echo"
	<table class='adminlist'>
	";
	$kiva1=mysql_query("select *from m_reksub where idsub='KIV'");
	while($kiva=mysql_fetch_array($kiva1))
		{
		echo"
		<tr>
		<td width='5%'>$kiva[norek]</td>
		<td width='60%'>$kiva[nama]</td>
		<td align='right'>
		";
		$norekkiva=$kiva[norek];
		$ka1rekkiva= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norekkiva' and bln='$blth' and status='Published'"),0);
		echo"
		$ka1rekkiva
		</td>
		</tr>
		";
		}

	//echo"
	//<tr>
	//<td></td>
	//<td></td>
	//<td>
	//";
	$semkkiva= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where idsub='KIVA' and bln='$blth' and status='Published'"),0);
	//echo"$semkkiva
	//</td>
	//</tr>
	echo"</table>
	</td>
	</tr>
	";

	//JUMLAH
	echo"
	<tr>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='right'><b>Jumlah (A,B,C,D)</td>
	<td align='right'><b>$jmliv</td>
	</tr>
	</table>
	</td>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='right'><b>Jumlah</td>
	<td align='right'><b>$semkkiva</td>
	</tr>
	</table>
	</td>
	</tr>
	";

	// V + KV
	echo"
	<tr>
	<td width='50%' valign='top'>
	";
	//V PDPTN
	echo"
	<table class='adminlist'>
	";
	$v1=mysql_query("select *from m_reksub where idsub='V'");
	while($v=mysql_fetch_array($v1))
		{
		echo"
		<tr>
		<td width='5%'>$v[norek]</td>
		<td width='60%'>$v[nama]</td>
		<td align='right'>
		";
		$norekv=$v[norek];
		$a1rekv= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norekv' and bln='$blth' and status='Published'"),0);
		echo"
		$a1rekv
		</td>
		</tr>
		";
		}
	//echo"
	//<tr>
	//<td></td>
	//<td></td>
	//<td>
	//";
	$semkv= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where idsub='V' and bln='$blth' and status='Published'"),0);
	//echo"$semkv
	//</td>
	//</tr>
	echo"</table>
	</td>

	<td valign='top'>
	";
	//KV PKLR
	echo"
	<table class='adminlist'>
	";
	$kv1=mysql_query("select *from m_reksub where idsub='KV'");
	while($kv=mysql_fetch_array($kv1))
		{
		echo"
		<tr>
		<td width='5%'>$kv[norek]</td>
		<td width='60%'>$kv[nama]</td>
		<td align='right'>
		";
		$norekkv=$kv[norek];
		$ka1rekkv= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norekkv' and bln='$blth' and status='Published'"),0);
		echo"
		$ka1rekkv
		</td>
		</tr>
		";
		}

	//echo"
	//<tr>
	//<td></td>
	//<td></td>
	//<td>
	//";
	$semkkv= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where idsub='KV' and bln='$blth' and status='Published'"),0);
	//echo"$semkkv
	//</td>
	//</tr>
	echo"</table>
	</td>
	</tr>
	";

	//JUMLAH
	echo"
	<tr>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='right'><b>Jumlah</td>
	<td align='right'><b>$semkv</td>
	</tr>
	</table>
	</td>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='right'><b>Jumlah</td>
	<td align='right'><b>$semkkv</td>
	</tr>
	</table>
	</td>
	</tr>
	";


	// VI + KVI
	echo"
	<tr>
	<td width='50%' valign='top'>
	";
	//VI PDPTN
	echo"
	<table class='adminlist'>
	";
	$vi1=mysql_query("select *from m_reksub where idsub='VI'");
	while($vi=mysql_fetch_array($vi1))
		{
		echo"
		<tr>
		<td width='5%'>$vi[norek]</td>
		<td width='60%'>$vi[nama]</td>
		<td align='right'>
		";
		$norekvi=$vi[norek];
		$a1rekvi= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norekvi' and bln='$blth' and status='Published'"),0);
		echo"
		$a1rekvi
		</td>
		</tr>
		";
		}
	//echo"
	//<tr>
	//<td></td>
	//<td></td>
	//<td>
	//";
	$semkvi= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where idsub='VI' and bln='$blth' and status='Published'"),0);
	//echo"$semkvi
	//</td>
	//</tr>
	echo"</table>
	</td>

	<td valign='top'>
	";
	//KVI PKLR
	echo"
	<table class='adminlist'>
	";
	$kvi1=mysql_query("select *from m_reksub where idsub='KVI'");
	while($kvi=mysql_fetch_array($kvi1))
		{
		echo"
		<tr>
		<td width='5%'>$kvi[norek]</td>
		<td width='60%'>$kvi[nama]</td>
		<td align='right'>
		";
		$norekkvi=$kvi[norek];
		$ka1rekkvi= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norekkvi' and bln='$blth' and status='Published'"),0);
		echo"
		$ka1rekkvi
		</td>
		</tr>
		";
		}

	//echo"
	//<tr>
	//<td></td>
	//<td></td>
	//<td>
	//";
	$semkkvi= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where idsub='KVI' and bln='$blth' and status='Published'"),0);
	//echo"$semkkvi
	//</td>
	//</tr>
	echo"</table>
	</td>
	</tr>
	";

	//JUMLAH
	echo"
	<tr>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='right'><b>Jumlah</td>
	<td align='right'><b>$semkvi</td>
	</tr>
	</table>
	</td>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='right'><b>Jumlah</td>
	<td align='right'><b>$semkkvi</td>
	</tr>
	</table>
	</td>
	</tr>
	";

	//VII + KVII
	echo"
	<tr>
	<td width='50%' valign='top'>
	";
	//VII PDPTN
	echo"
	<table class='adminlist'>
	";
	$vii1=mysql_query("select *from m_reksub where idsub='VII'");
	while($vii=mysql_fetch_array($vii1))
		{
		echo"
		<tr>
		<td width='5%'>$vii[norek]</td>
		<td width='60%'>$vii[nama]</td>
		<td align='right'>
		";
		$norekvii=$vii[norek];
		$a1rekvii= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norekvii' and bln='$blth' and status='Published'"),0);
		echo"
		$a1rekvii
		</td>
		</tr>
		";
		}
	echo"
	<tr>
	<td></td>
	<td></td>
	<td align='right'>
	";
	$semkvii= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where idsub='VII' and bln='$blth' and status='Published'"),0);
	echo"$semkvii
	</td>
	</tr>
	</table>
	</td>

	<td valign='top'>
	";
	//KVII PKLR
	echo"
	<table class='adminlist'>
	";
	$kvii1=mysql_query("select *from m_reksub where idsub='KVII'");
	while($kvii=mysql_fetch_array($kvii1))
		{
		echo"
		<tr>
		<td width='5%'>$kvii[norek]</td>
		<td width='60%'>$kvii[nama]</td>
		<td align='right'>
		";
		$norekkvii=$kvii[norek];
		$ka1rekkvii= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norekkvii' and bln='$blth' and status='Published'"),0);
		echo"
		$ka1rekkvii
		</td>
		</tr>
		";
		}

	echo"
	<tr>
	<td></td>
	<td></td>
	<td>
	";
	$semkkvii= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where idsub='KVII' and bln='$blth' and status='Published'"),0);
	echo"$semkkvii
	</td>
	</tr>
	</table>
	</td>
	</tr>
	";
	//JUMLAH
	echo"
	<tr>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='right'><b>Jumlah</td>
	<td align='right'><b>$semkvii</td>
	</tr>
	</table>
	</td>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='right'><b>Jumlah</td>
	<td align='right'><b>$semkkvii</td>
	</tr>
	</table>
	</td>
	</tr>
	";

	//VIII + KVIII

	echo"
	<tr>
	<td width='50%' valign='top'>
	";
	//VIII PDPTN
	echo"
	<table class='adminlist'>
	";
	$viii1=mysql_query("select *from m_reksub where idsub='VIII'");
	while($viii=mysql_fetch_array($viii1))
		{
		echo"
		<tr>
		<td width='5%'>$viii[norek]</td>
		<td width='60%'>$viii[nama]</td>
		<td align='right'>
		";
		$norekviii=$viii[norek];
		$a1rekviii= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norekviii' and bln='$blth' and status='Published'"),0);
		echo"
		$a1rekviii
		</td>
		</tr>
		";
		}
	echo"
	<tr>
	<td></td>
	<td></td>
	<td>
	";
	$semkviii= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where idsub='VIII' and bln='$blth' and status='Published'"),0);
	echo"$semkviii
	</td>
	</tr>
	</table>
	</td>

	<td valign='top'>
	";
	//KVIII PKLR
	echo"
	<table class='adminlist'>
	";
	$kviii1=mysql_query("select *from m_reksub where idsub='KVIII'");
	while($kviii=mysql_fetch_array($kviii1))
		{
		echo"
		<tr>
		<td width='5%'>$kviii[norek]</td>
		<td width='60%'>$kviii[nama]</td>
		<td align='right'>
		";
		$norekkviii=$kviii[norek];
		$ka1rekkviii= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norekkviii' and bln='$blth' and status='Published'"),0);
		echo"
		$ka1rekkviii
		</td>
		</tr>
		";
		}

	echo"
	<tr>
	<td></td>
	<td></td>
	<td>
	";
	$semkkviii= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where idsub='KVIII' and bln='$blth' and status='Published'"),0);
	echo"$semkkviii
	</td>
	</tr>
	</table>
	</td>
	</tr>
	";
	//JUMLAH
	echo"
	<tr>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='right'><b>Jumlah</td>
	<td align='right'><b>$semkviii</td>
	</tr>
	</table>
	</td>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='right'><b>Jumlah</td>
	<td align='right'><b>$semkkviii</td>
	</tr>
	</table>
	</td>
	</tr>
	";


	// IX + KIX
	echo"
	<tr>
	<td width='50%' valign='top'>
	";
	//IX PDPTN
	echo"
	<table class='adminlist'>
	";
	$ix1=mysql_query("select *from m_reksub where idsub='IX'");
	while($ix=mysql_fetch_array($ix1))
		{
		echo"
		<tr>
		<td width='5%'>$ix[norek]</td>
		<td width='60%'>$ix[nama]</td>
		<td align='right'>
		";
		$norekix=$ix[norek];
		$a1rekix= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norekix' and bln='$blth' and status='Published'"),0);
		echo"
		$a1rekix
		</td>
		</tr>
		";
		}
	//echo"
	//<tr>
	//<td></td>
	//<td></td>
	//<td>
	//";
	$semkix= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where idsub='IX' and bln='$blth' and status='Published'"),0);
	//echo"$semkix
	//</td>
	//</tr>
	echo"</table>
	</td>

	<td valign='top'>
	";
	//KIX PKLR
	echo"
	<table class='adminlist'>
	";
	$kix1=mysql_query("select *from m_reksub where idsub='KIX'");
	while($kix=mysql_fetch_array($kix1))
		{
		echo"
		<tr>
		<td width='5%'>$kix[norek]</td>
		<td width='60%'>$kix[nama]</td>
		<td align='right'>
		";
		$norekkix=$kix[norek];
		$ka1rekkix= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norekkix' and bln='$blth' and status='Published'"),0);
		echo"
		$ka1rekkix
		</td>
		</tr>
		";
		}

	//echo"
	//<tr>
	//<td></td>
	//<td></td>
	//<td>
	//";
	$semkkix= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where idsub='KIX' and bln='$blth' and status='Published'"),0);
	//echo"$semkkix
	//</td>
	//</tr>
	echo"</table>
	</td>
	</tr>
	";

	//JUMLAH
	echo"
	<tr>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='right'><b>Jumlah</td>
	<td align='right'><b>$semkix</td>
	</tr>
	</table>
	</td>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='right'><b>Jumlah</td>
	<td align='right'><b>$semkkix</td>
	</tr>
	</table>
	</td>
	</tr>
	";
	$jmlpdpt= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where bln='$blth' and status='Published'"),0);
	$jmlpklr= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where bln='$blth' and status='Published'"),0);

	//JUMLAH
	echo"
	<tr>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='center'><b>JUMLAH PENERIMAAN</td>
	<td align='right'><b>$jmlpdpt</td>
	</tr>
	</table>
	</td>
	<td>
	<table class='adminlist'>
	<tr>
	<td width='5%'><b></td>
	<td width='60%' align='center'><b>JUMLAH PENGELUARAN</td>
	<td align='right'><b>$jmlpklr</td>
	</tr>
	</table>
	</td>
	</tr>
	";
	if($jmlpdpt>$jmlpklr)
		{
		$saldo=$jmlpdpt-$jmlpklr;
		echo"
		<tr>
		<td>
		<table class='adminlist'>
		<tr>
		<td width='5%'><b></td>
		<td width='60%' align='center'></td>
		<td align='right'></td>
		</tr>
		</table>
		</td>
		<td>
		<table class='adminlist'>
		<tr>
		<td width='5%'><b></td>
		<td width='60%' align='center'><b>SALDO</td>
		<td align='right'><b>$saldo</td>
		</tr>
		</table>
		</td>
		</tr>
		";

		echo"
		<tr>
		<td>
		<table class='adminlist'>
		<tr>
		<td width='5%'><b></td>
		<td width='60%' align='center'><b>JUMLAH AKHIR</td>
		<td align='right'><b>$jmlpdpt</td>
		</tr>
		</table>
		</td>
		<td>
		<table class='adminlist'>
		<tr>
		<td width='5%'><b></td>
		<td width='60%' align='center'><b>JUMLAH AKHIR</td>
		<td align='right'><b>$jmlpdpt</td>
		</tr>
		</table>
		</td>
		</tr>
		";
		}
	else
		{
		$saldo=$jmlpklr-$jmlpdpt;
		echo"
		<tr>
		<td>
		<table class='adminlist'>
		<tr>
		<td width='5%'><b></td>
		<td width='60%' align='center'>SALDO</td>
		<td align='right'><b><font color='#ff0000'>($saldo)</td>
		</tr>
		</table>
		</td>
		<td>
		<table class='adminlist'>
		<tr>
		<td width='5%'><b></td>
		<td width='60%' align='center'></td>
		<td align='right'><b></td>
		</tr>
		</table>
		</td>
		</tr>
		";

		echo"
		<tr>
		<td>
		<table class='adminlist'>
		<tr>
		<td width='5%'><b></td>
		<td width='60%' align='center'><b>JUMLAH AKHIR</td>
		<td align='right'>$jmlpklr</td>
		</tr>
		</table>
		</td>
		<td>
		<table class='adminlist'>
		<tr>
		<td width='5%'><b></td>
		<td width='60%' align='center'><b>JUMLAH AKHIR</td>
		<td align='right'><b>$jmlpklr</td>
		</tr>
		</table>
		</td>
		</tr>
		";
		}
	echo"
	</table>
	";
	}


function lapta()
	{
	$thn=date('Y');
	echo"
	<h1>
	Rekapitulasi Keuangan
	</h1>
	<form method='post' action='index.php?task=plapta'>
	Masukkan Bulan/ Tahun:
	<select name='bln'>
	";
	for ($i=1; $i<=12; $i++)
		{
		echo"
		<option value='$i'>$i</option>
		";
		}
	echo"
	</select>
	<input type='text' name='thn' value='$y'>
	<select name='status'>
	<option value='Pendapatan'>Pendapatan</option>
	<option value='Pengeluaran'>Pengeluaran</option>
	</select>
	<input type='submit' value='CARI'>

	</form>
	";
	}
// dropdown status pendpt pklr
//plapta jd 2, plaptaklr, plaptapdpt
//jumlah di plapta


function plapta()
	{
	$bln=$_POST['bln'];
	$thn=$_POST['thn'];
	if ($bln=='1')
		{$bln2='JANUARI';}
	elseif($bln=='2')
		{$bln2='FEBRUARI';}
	elseif($bln=='3')
		{$bln2='MARET';}
	elseif($bln=='4')
		{$bln2='APRIL';}
	elseif($bln=='5')
		{$bln2='MEI';}
	elseif($bln=='6')
		{$bln2='JUNI';}
	elseif($bln=='7')
		{$bln2='JULI';}
	elseif($bln=='8')
		{$bln2='AGUSTUS';}
	elseif($bln=='9')
		{$bln2='SEPTEMBER';}
	elseif($bln=='10')
		{$bln2='OKTOBER';}
	elseif($bln=='11')
		{$bln2='NOVEMBER';}
	else
		{$bln2='DESEMBER';}

	$status=$_POST['status'];
	$blth=$bln.'-'.$thn;

	if($status=='Pendapatan')
		{
	echo"
	<center>
	<h1>
	LAPORAN TABELARIS<br>
	RUMAH SAKIT BERSALIN MARDI WALOEJA <br>
	BULAN : $bln2 TAHUN $thn
	</h1>
	</center>
	<table class='adminlist'>
	<tr>
	<td>No Rek</td>
	<td>1/$bln/$thn</td>
	<td>2/$bln/$thn</td>
	<td>3/$bln/$thn</td>
	<td>4/$bln/$thn</td>
	<td>5/$bln/$thn</td>
	<td>6/$bln/$thn</td>
	<td>7/$bln/$thn</td>
	<td>8/$bln/$thn</td>
	<td>9/$bln/$thn</td>
	<td>10/$bln/$thn</td>
	<td>11/$bln/$thn</td>
	<td>12/$bln/$thn</td>
	<td>13/$bln/$thn</td>
	<td>14/$bln/$thn</td>
	<td>15/$bln/$thn</td>
	<td>16/$bln/$thn</td>
	<td>17/$bln/$thn</td>
	<td>18/$bln/$thn</td>
	<td>19/$bln/$thn</td>
	<td>20/$bln/$thn</td>
	<td>21/$bln/$thn</td>
	<td>22/$bln/$thn</td>
	<td>23/$bln/$thn</td>
	<td>24/$bln/$thn</td>
	<td>25/$bln/$thn</td>
	<td>26/$bln/$thn</td>
	<td>27/$bln/$thn</td>
	<td>28/$bln/$thn</td>
	<td>29/$bln/$thn</td>
	<td>30/$bln/$thn</td>
	<td>31/$bln/$thn</td>
	<td>Jml</td>
	</tr>
	";
	$a1=mysql_query("select *from m_reksub where status='Pendapatan' order by norek ASC");
	while($a=mysql_fetch_array($a1))
		{
		echo"
		<tr>
		<td>$a[norek]</td>
		<td>
		";
		//1/$bln/$thn
		$norek=$a[norek];
		$bi= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-01'"),0);
		echo"$bi";

		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$ci= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-02'"),0);
		echo"$ci";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$di= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-03'"),0);
		echo"$di";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$i= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-04'"),0);
		echo"$i";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$ef= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-05'"),0);
		echo"$ef";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$ji= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-06'"),0);
		echo"$ji";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$eitch= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-07'"),0);
		echo"$eitch";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$ai= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-08'"),0);
		echo"$ai";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$je= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-09'"),0);
		echo"$je";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$ka= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-10'"),0);
		echo"$ka";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$el= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-11'"),0);
		echo"$el";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$em= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-12'"),0);
		echo"$em";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
			$en= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-13'"),0);
			echo"$en";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$ow= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-14'"),0);
		echo"$ow";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$pe= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-15'"),0);
			echo"$pe";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$kiu= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-16'"),0);
		echo"$kiu";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$ar= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-17'"),0);
		echo"$ar";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$es= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-18'"),0);
		echo"$es";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$ti= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-19'"),0);
		echo"$ti";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$yu= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-20'"),0);
		echo"$yu";

		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$ve= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-21'"),0);
		echo"$ve";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$doubleyou= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-22'"),0);
		echo"$doubleyou";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$ex= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-23'"),0);
		echo"$ex";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$ey= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-24'"),0);
		echo"$ey";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$zed= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-25'"),0);
		echo"$zed";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$b1= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-26'"),0);
		echo"$b1";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$c1= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-27'"),0);
		echo"$c1";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$d1= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-28'"),0);
		echo"$d1";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$e1= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-29'"),0);
		echo"$e1";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$f1= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-30'"),0);
		echo"$f1";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$g1= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekdpt where norek='$norek' and tanggal='$thn-$bln-31'"),0);
		echo"$g1";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$blny=$bln.'-'.$thn;
		//JUmlah dari satu nomer rekening dalam satu bulan
		$jmlrekbln=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where norek='$norek' and bln='$blny'"),0);
		echo"
		$jmlrekbln
		</td>
		</tr>
		";
		}
		//Jumlah total dari semua rekening dalam satu hari
	echo"
	<tr>
	<td>Jml</td>
	<td>";
	$jmlrekhr1=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-01'"),0);
	echo"$jmlrekhr1
	</td>

	<td>";
	$jmlrekhr2=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-02'"),0);
	echo"$jmlrekhr2</td>

	<td>";
	$jmlrekhr3=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-3'"),0);
	echo"$jmlrekhr3</td>

	<td>";
	$jmlrekhr4=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-04'"),0);
	echo"$jmlrekhr4</td>

	<td>";
	$jmlrekhr5=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-05'"),0);
	echo"$jmlrekhr5</td>

	<td>";
	$jmlrekhr6=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-06'"),0);
	echo"$jmlrekhr6</td>

	<td>";
	$jmlrekhr7=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-07'"),0);
	echo"$jmlrekhr7</td>

	<td>";
	$jmlrekhr8=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-08'"),0);
	echo"$jmlrekhr8</td>

	<td>";
	$jmlrekhr9=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-09'"),0);
	echo"$jmlrekhr9</td>

	<td>";
	$jmlrekhr10=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-10'"),0);
	echo"$jmlrekhr10</td>

	<td>";
	$jmlrekhr11=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-11'"),0);
	echo"$jmlrekhr11</td>

	<td>";
	$jmlrekhr12=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-12'"),0);
	echo"$jmlrekhr12</td>

	<td>";
	$jmlrekhr13=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-13'"),0);
	echo"$jmlrekhr13</td>

	<td>";
	$jmlrekhr14=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-14'"),0);
	echo"$jmlrekhr14</td>

	<td>";
	$jmlrekhr15=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-15'"),0);
	echo"$jmlrekhr15</td>

	<td>";
	$jmlrekhr16=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-16'"),0);
	echo"$jmlrekhr16</td>

	<td>";
	$jmlrekhr17=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-17'"),0);
	echo"$jmlrekhr17</td>

	<td>";
	$jmlrekhr18=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-18'"),0);
	echo"$jmlrekhr18</td>

	<td>";
	$jmlrekhr19=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-19'"),0);
	echo"$jmlrekhr19</td>

	<td>";
	$jmlrekhr20=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-20'"),0);
	echo"$jmlrekhr20</td>

	<td>";
	$jmlrekhr21=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-21'"),0);
	echo"$jmlrekhr21</td>

	<td>";
	$jmlrekhr22=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-22'"),0);
	echo"$jmlrekhr22</td>

	<td>";
	$jmlrekhr23=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-23'"),0);
	echo"$jmlrekhr23</td>

	<td>";
	$jmlrekhr24=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-24'"),0);
	echo"$jmlrekhr24</td>

	<td>";
	$jmlrekhr25=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-25'"),0);
	echo"$jmlrekhr25</td>

	<td>";
	$jmlrekhr26=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-26'"),0);
	echo"$jmlrekhr26</td>

	<td>";
	$jmlrekhr27=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-27'"),0);
	echo"$jmlrekhr27</td>

	<td>";
	$jmlrekhr28=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-28'"),0);
	echo"$jmlrekhr28</td>

	<td>";
	$jmlrekhr29=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-29'"),0);
	echo"$jmlrekhr29</td>

	<td>";
	$jmlrekhr30=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-30'"),0);
	echo"$jmlrekhr30</td>

	<td>";
	$jmlrekhr31=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where tanggal='$thn-$bln-31'"),0);
	echo"$jmlrekhr31</td>

	<td>";
	$jmlrekhrsmw=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekdpt where bln='$blny'"),0);
	echo"$jmlrekhrsmw</td>
	</tr>
	</table>
	";

	}

	///////////////////PENGELUARAN /////////////////////

	// #      #        ######
	// #  #   #		   #    #
	// # #    #		   #    #
	// ##	  #		   #####
	// # #    #		   #    #
	// #  #   ######   #     #

	else
	{
	echo"
	<center>
	<h1>

	</center>
	<table class='adminlist'>
	<tr>
	<td>No Rek</td>
	<td>1/$bln/$thn</td>
	<td>2/$bln/$thn</td>
	<td>3/$bln/$thn</td>
	<td>4/$bln/$thn</td>
	<td>5/$bln/$thn</td>
	<td>6/$bln/$thn</td>
	<td>7/$bln/$thn</td>
	<td>8/$bln/$thn</td>
	<td>9/$bln/$thn</td>
	<td>10/$bln/$thn</td>
	<td>11/$bln/$thn</td>
	<td>12/$bln/$thn</td>
	<td>13/$bln/$thn</td>
	<td>14/$bln/$thn</td>
	<td>15/$bln/$thn</td>
	<td>16/$bln/$thn</td>
	<td>17/$bln/$thn</td>
	<td>18/$bln/$thn</td>
	<td>19/$bln/$thn</td>
	<td>20/$bln/$thn</td>
	<td>21/$bln/$thn</td>
	<td>22/$bln/$thn</td>
	<td>23/$bln/$thn</td>
	<td>24/$bln/$thn</td>
	<td>25/$bln/$thn</td>
	<td>26/$bln/$thn</td>
	<td>27/$bln/$thn</td>
	<td>28/$bln/$thn</td>
	<td>29/$bln/$thn</td>
	<td>30/$bln/$thn</td>
	<td>31/$bln/$thn</td>
	<td>Jml</td>
	</tr>
	";
	$a1=mysql_query("select *from m_reksub where status='Pengeluaran' order by norek ASC");
	while($a=mysql_fetch_array($a1))
		{
		echo"
		<tr>
		<td>$a[norek]</td>
		<td>
		";
		//1/$bln/$thn
		$norek=$a[norek];
		$bir= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-01'"),0);
		echo"$bir";

		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$ci= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-02'"),0);
		echo"$ci";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$di= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-03'"),0);
		echo"$di";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$i= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-04'"),0);
		echo"$i";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$ef= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-05'"),0);
		echo"$ef";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$ji= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-06'"),0);
		echo"$ji";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$eitch= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-07'"),0);
		echo"$eitch";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$ai= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-08'"),0);
		echo"$ai";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$je= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-09'"),0);
		echo"$je";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$ka= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-10'"),0);
		echo"$ka";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$el= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-11'"),0);
		echo"$el";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$em= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-12'"),0);
		echo"$em";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
			$en= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-13'"),0);
			echo"$en";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$ow= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-14'"),0);
		echo"$ow";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$pe= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-15'"),0);
			echo"$pe";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$kiu= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-16'"),0);
		echo"$kiu";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$ar= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-17'"),0);
		echo"$ar";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$es= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-18'"),0);
		echo"$es";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$ti= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-19'"),0);
		echo"$ti";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$yu= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-20'"),0);
		echo"$yu";

		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$ve= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-21'"),0);
		echo"$ve";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$doubleyou= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-22'"),0);
		echo"$doubleyou";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$ex= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-23'"),0);
		echo"$ex";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$ey= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-24'"),0);
		echo"$ey";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$zed= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-25'"),0);
		echo"$zed";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$b1= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-26'"),0);
		echo"$b1";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$c1= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-27'"),0);
		echo"$c1";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$d1= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-28'"),0);
		echo"$d1";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$e1= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-29'"),0);
		echo"$e1";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$f1= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-30'"),0);
		echo"$f1";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$g1= mysql_result(mysql_query("SELECT SUM(total) as Num FROM m_rekklr where norek='$norek' and tanggal='$thn-$bln-31'"),0);
		echo"$g1";
		echo"
		</td>

		<td>
		";
		$norek=$a[norek];
		$blny=$bln.'-'.$thn;
		//JUmlah dari satu nomer rekening dalam satu bulan
		$jmlrekbln=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where norek='$norek' and bln='$blny'"),0);
		echo"
		$jmlrekbln
		</td>
		</tr>
		";
		}
		//Jumlah total dari semua rekening dalam satu hari
	echo"
	<tr>
	<td>Jml</td>
	<td>";
	$jmlrekhr1=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-01'"),0);
	echo"$jmlrekhr1
	</td>

	<td>";
	$jmlrekhr2=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-02'"),0);
	echo"$jmlrekhr2</td>

	<td>";
	$jmlrekhr3=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-03'"),0);
	echo"$jmlrekhr3</td>

	<td>";
	$jmlrekhr4=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-04'"),0);
	echo"$jmlrekhr4</td>

	<td>";
	$jmlrekhr5=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-05'"),0);
	echo"$jmlrekhr5</td>

	<td>";
	$jmlrekhr6=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-06'"),0);
	echo"$jmlrekhr6</td>

	<td>";
	$jmlrekhr7=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-07'"),0);
	echo"$jmlrekhr7</td>

	<td>";
	$jmlrekhr8=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-08'"),0);
	echo"$jmlrekhr8</td>

	<td>";
	$jmlrekhr9=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-09'"),0);
	echo"$jmlrekhr9</td>

	<td>";
	$jmlrekhr10=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-10'"),0);
	echo"$jmlrekhr10</td>

	<td>";
	$jmlrekhr11=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-11'"),0);
	echo"$jmlrekhr11</td>

	<td>";
	$jmlrekhr12=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-12'"),0);
	echo"$jmlrekhr12</td>

	<td>";
	$jmlrekhr13=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-13'"),0);
	echo"$jmlrekhr13</td>

	<td>";
	$jmlrekhr14=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-14'"),0);
	echo"$jmlrekhr14</td>

	<td>";
	$jmlrekhr15=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-15'"),0);
	echo"$jmlrekhr15</td>

	<td>";
	$jmlrekhr16=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-16'"),0);
	echo"$jmlrekhr16</td>

	<td>";
	$jmlrekhr17=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-17'"),0);
	echo"$jmlrekhr17</td>

	<td>";
	$jmlrekhr18=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-18'"),0);
	echo"$jmlrekhr18</td>

	<td>";
	$jmlrekhr19=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-19'"),0);
	echo"$jmlrekhr19</td>

	<td>";
	$jmlrekhr20=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-20'"),0);
	echo"$jmlrekhr20</td>

	<td>";
	$jmlrekhr21=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-21'"),0);
	echo"$jmlrekhr21</td>

	<td>";
	$jmlrekhr22=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-22'"),0);
	echo"$jmlrekhr22</td>

	<td>";
	$jmlrekhr23=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-23'"),0);
	echo"$jmlrekhr23</td>

	<td>";
	$jmlrekhr24=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-24'"),0);
	echo"$jmlrekhr24</td>

	<td>";
	$jmlrekhr25=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-25'"),0);
	echo"$jmlrekhr25</td>

	<td>";
	$jmlrekhr26=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-26'"),0);
	echo"$jmlrekhr26</td>

	<td>";
	$jmlrekhr27=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-27'"),0);
	echo"$jmlrekhr27</td>

	<td>";
	$jmlrekhr28=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-28'"),0);
	echo"$jmlrekhr28</td>

	<td>";
	$jmlrekhr29=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-29'"),0);
	echo"$jmlrekhr29</td>

	<td>";
	$jmlrekhr30=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-30'"),0);
	echo"$jmlrekhr30</td>

	<td>";
	$jmlrekhr31=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where tanggal='$thn-$bln-31'"),0);
	echo"$jmlrekhr31</td>

	<td>";
	$jmlrekhrsmw=mysql_result(mysql_query("select SUM(total) as Num FROM m_rekklr where bln='$blny'"),0);
	echo"$jmlrekhrsmw</td>
	</tr>
	</table>
	";
	}

	}

}
?>