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
	Selamat Datang di HALAMAN POLI (DOKTER) RSIA MARDI WALOEJA MALANG
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

function menu_account()
	{
	?>

	<center><h1>Account</h1></center>
	<br><br>
	<table width="100%" border="0" cellpadding="10" cellspacing="10" class="adminlist">
	<tr>
	<td width="50%" align="center" valign="center">
	<a href="index.php?task=gt_ac"><img width="100px" src="../touch/account.png" onmouseover=" this.src='../touch/account_b.png'" onmouseout="this.src='../touch/account.png'">
	<br><b>Ganti Account</b>
	</a>
	</td>

	<td align="center" valign="center">
	<a href="index.php?task=mstdiag"><img width="100px" src="../touch/icd.png" onmouseover=" this.src='../touch/icd_b.png'" onmouseout="this.src='../touch/icd.png'">
	<br><b>Master ICD</b></a>
	</td>

	</tr>
	</table>
	<?php
	}

function menu_pasien()
	{
	?>

	<center><h1>Data Pasien</h1></center>
	<br><br>
	<table width="100%" border="0" cellpadding="10" cellspacing="10" class="adminlist">
	<tr>
	<td width="33%" align="center" valign="center">
	<a href="index.php?task=pasienr&status=poli"><img width="100px" src="../touch/patient.png" onmouseover=" this.src='../touch/patient_b.png'" onmouseout="this.src='../touch/patient.png'">
	<br><b>Pasien Baru</b>
	</a>
	</td>

	<td width="33%" align="center" valign="center">
	<a href="index.php?task=antrianr&status=poli"><img width="100px" src="../touch/patient-old.png" onmouseover=" this.src='../touch/patient-old_b.png'" onmouseout="this.src='../touch/patient-old.png'">
	<br><b>Pasien Lama</b>
	</a>
	</td>

	<td align="center" valign="center">
	<a href="index.php?task=dafantrianr&status=poli"><img width="100px" src="../touch/antri.png" onmouseover=" this.src='../touch/antri_b.png'" onmouseout="this.src='../touch/antri.png'">
	<br><b>Daftar Antrian</b></a>
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

	<select name='idpas'>
	<option value=''> - </option>
	";

	echo"
	</select>
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
	<option value='-'>-</option>
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
	<td colspan='2'>
	<input type='submit' value='simpan'>
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
		$cou=mysql_result(mysql_query("SELECT COUNT(id)FROM m_poliabs where blnmsk='$blnmsk' and thnmsk='$thnmsk'"),0);
			if($cou==0)
			{$z2=1;}
			else
			{
		$z= mysql_result(mysql_query("SELECT MAX(id2)FROM m_poliabs where blnmsk='$blnmsk' and thnmsk='$thnmsk'"),0);
		$z2=$z+1;
			}
	$idpas=$z2.$blnmsk.$thnmsk;
	$poli='05';
	$a=mysql_query("insert into m_poliabs values('', '$z2', '$z2$blnmsk$thnmsk$poli', '$tglmsk', '$blnmsk', '$thnmsk')");
	$b=mysql_query("insert into m_polipas values ('', '$z2$blnmsk$thnmsk$poli', '$nama', '$norm', '$tgllhr-$blnlhr-$thnlhr', '$umur', '$jk', '$agama', '$swm', '$umurswm', '$kerswm', '$alm', '$rt-$rw', '$kec', '$kota', '$telp')");
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

	<select name='idpas'>
	<option value=''> - </option>
	";
	$a1=mysql_query("select *from m_polipas order by nama");
	while($a=mysql_fetch_array($a1))
		{
		$nm=strtoupper($a[nama]);
		echo"
		<option value='$a[idpas]'>$a[idpas]-$nm</option>
		";
		}
	echo"
	</select>
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
	$count=mysql_result(mysql_query("SELECT count(id)FROM m_poliantri where tglmsk='$tglmsk' and blnmsk='$blnmsk' and thnmsk='$thnmsk'"),0);
		if($count==0)
		{$no=1;}
		else
		{
		$z= mysql_result(mysql_query("SELECT MAX(no)FROM m_poliantri where tglmsk='$tglmsk' and blnmsk='$blnmsk' and thnmsk='$thnmsk'"),0);
		$no=$z+1;
		}
	$a=mysql_query("insert into m_poliantri values ('$id', '$no', '$idpas', '$tgl', '$bln', '$thn')");
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
	$p=$_GET['p'];
	$tgl=date('d-m-Y');
	echo"
	<h1>Daftar Antrian Pasien
	<br>
	Tanggal: $tgl
	</h1>
	<u>$p</u>
	<br>
	<br>
	<table class='adminlist'>
	<tr>
	<td>Antrian</td>
	<td>Nama</td>
	<td>No Pasien</td>
	<td>Diagnosa</td>
	";
	/*
	<td>Rekam</td>*/
	echo"
	</tr>
	";
	$date=date('Y-m-d');
	$d=date('d');
	$m=date('m');
	$y=date('Y');
	$a1=mysql_query("select *from m_poliantri where date='$date' and status='Belum' order by no ASC");
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
		<td><a href='index.php?task=diagnosa&idpas=$idpas&id=$a[id]'>Diagnosa</a></td>
		";
		/*
		<td><a href='index.php?task=rekam&id=$a[id]'>Rekam</a></td>
		*/
		echo"
		</tr>
		";
		}
	echo"
	</table>
	";
	}


function tensi()
	{
	$idpas=$_GET['idpas'];
	$a1=mysql_query("select *from m_polipas where idpas='$idpas'");
	while($a=mysql_fetch_array($a1))
		{
		$nama=$a[nama];
		$norm=$a[norm];
		$tgllhr=$a[tgllhr];
		$umur=$a[umur];
		$alm=$a[alm];
		$kec=$a[kec];
		$kota=$a[kota];
		}
	$skr=date('d-m-Y');
	echo"
	<h1>Tensi $nama</h1>
	<br>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nama</td><td>$nama</td>
	</tr>
	<tr>
	<td width='20%'>No RM</td><td>$norm</td>
	</tr>
	<tr>
	<td width='20%'>Tgl Lahir</td><td>$tgllhr</td>
	</tr>
	<tr>
	<td width='20%'>Umur</td><td>$umur</td>
	</tr>
	<tr>
	<td width='20%'>Alamat</td><td>$alm - $kec - $kota </td>
	</tr>
	</table>";
	///////////////////////////////////////////////////
	$ada = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_politensi where tgl='$skr' and idpas='$idpas'"),0);
	if($ada=='0')
		{

	echo"
	<form method='post' action='index.php?task=itensi'>
	<table class='adminlist'>
	<tr>
	<td>Tanggal</td>
	<td>Berat Badan (Kg)</td>
	<td>Tensi</td>
	<td>Keterangan</td>
	</tr>

	<tr>
	<td><input type='hidden' name='tgl' value='$skr'>$skr</td>
	<td><input type='text' name='bb'></td>
	<td><input type='text' name='tensi'></td>
	<td><input type='text' name='ket'></td>
	</tr>
	<tr>
	<td colspan='4' align='center'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value='[ SIMPAN ]'>
	</td>
	</tr>
	</table>
	</form>
	";
		}
		/////////////////////////////////////////////////////////////////
	else
		{
		$b1=mysql_query("select *from m_politensi where idpas='$idpas' and tgl='$skr'");
		while($b=mysql_fetch_array($b1))
			{
				$id=$b[id];
				$bb=$b[bb];
				$tensi=$b[tensi];
				$ket=$b[ket];
			}
		echo"
	<form method='post' action='index.php?task=etensi'>
	<table class='adminlist'>
	<tr>
	<td>Tanggal</td>
	<td>Berat Badan (Kg)</td>
	<td>Tensi</td>
	<td>Keterangan</td>
	</tr>

	<tr>
	<td>$skr</td>
	<td><input type='text' name='bb' value='$bb'></td>
	<td><input type='text' name='tensi' value='$tensi'></td>
	<td><input type='text' name='ket' value='$ket'></td>
	</tr>
	<tr>
	<td colspan='4' align='center'>
	<input type='hidden' name='id' value='$id'>
	<input type='submit' value='[ SIMPAN ]'>
	</td>
	</tr>
	</table>
	</form>
	";
		}
	}

function etensi()
	{

	$bb=$_POST['bb'];
	$tensi=$_POST['tensi'];
	$ket=$_POST['ket'];
	$id=$_POST['id'];
	$a=mysql_query("update m_politensi set bb='$bb', tensi='$tensi', ket='$ket' where id='$id'");
	if($a)
		{header("location: index.php?task=dafantrian&p=Telah Diganti");}
	else
		{echo"error";}
	}

function itensi()
	{
	$tgl=$_POST['tgl'];
	$bb=$_POST['bb'];
	$tensi=$_POST['tensi'];
	$ket=$_POST['ket'];
	$idpas=$_POST['idpas'];
	$a=mysql_query("insert into m_politensi values ('', '$idpas', '$tgl', '$bb', '$tensi', '$ket')");
	if($a)
		{header("location: index.php?task=dafantrian&p=Telah Terekam");}
	else
		{echo"error";}
	}



function diagnosa()
	{
	$id=$_GET['id'];
	$idpas=$_GET['idpas'];
	$a1=mysql_query("select *from m_polipas where idpas='$idpas'");
	while($a=mysql_fetch_array($a1))
		{
		$nama=$a[nama];
		$norm=$a[norm];
		$tgllhr=$a[tgllhr];
		$umur=$a[umur];
		$alm=$a[alm];
		$kec=$a[kec];
		$kota=$a[kota];
		}
	$skr=date('d-m-Y');
	echo"
	<h1>Diagnosa $nama</h1>
	<br>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nama</td><td>$nama</td>
	</tr>
	<tr>
	<td width='20%'>No RM</td><td>$norm</td>
	</tr>
	<tr>
	<td width='20%'>Tgl Lahir</td><td>$tgllhr</td>
	</tr>
	<tr>
	<td width='20%'>Umur</td><td>$umur</td>
	</tr>
	<tr>
	<td width='20%'>Alamat</td><td>$alm - $kec - $kota </td>
	</tr>
	</table>
	";
	//////////////////////////////////////////
	$ada = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_polidiagnosa where tgl='$skr' and idpas='$idpas'"),0);
	if($ada=='0')
		{
	echo"
	<table class='adminlist'>

	<form method='post' action='index.php?task=idiagnosa'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Tanggal</td>
	<td>$skr <input type='hidden' name='$skr'></td>
	</tr>
	<tr>
	<td width='20%'>Diagnosa</td>
	<td>
	<textarea name='diagnosa' cols='40' rows='5'></textarea>
	</td>
	</tr>
	<tr>
	<td width='20%'>Resep</td>
	<td>
	<textarea name='resep' cols='40' rows='5'></textarea>
	</td>
	</tr>

	<tr>
	<td>ICD</td>
	<td>
	<select name='icd'>
	<option value=''> - </option>
	";
	$argi=mysql_query("select *from m_diag");
	while($arghi=mysql_fetch_array($argi))
		{
		echo"
		<option value='$arghi[id]'>$arghi[icd]</option>
		";
		}
	echo"
	</select>
	</td>
	</tr>

	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='id' value='$id'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='hidden' name='tgl' value='$skr'>
	<input type='submit' value='[ SIMPAN ]'>
	</td>
	</tr>
	</table>
	</form>
	";
		}
		else
		{
			$b1=mysql_query("select *from m_polidiagnosa where tgl='$skr' and='$idpas'");
			while($b=mysql_fetch_array($b1))
			{
			$id=$b[id];
			$diagnosa=$b[diagnosa];
			$resep=$b[resep];
			}
		echo"
	<table class='adminlist'>

	<form method='post' action='index.php?task=ediagnosa'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Tanggal</td>
	<td>$skr</td>
	</tr>
	<tr>
	<td width='20%'>Diagnosa</td>
	<td>
	<textarea name='diagnosa' cols='40' rows='5'>
	$diagnosa
	</textarea>
	</td>
	</tr>
	<tr>
	<td width='20%'>Resep</td>
	<td>
	<textarea name='resep' cols='40' rows='5'>
	$resep
	</textarea>
	</td>
	</tr>

	<tr>
	<td>ICD</td>
	<td>
	<select name='icd'>
	<option value=''> - </option>
	";
	$argi=mysql_query("select *from m_diag");
	while($arghi=mysql_fetch_array($argi))
		{
		echo"
		<option value='$arghi[id]'>$arghi[icd]</option>
		";
		}
	echo"
	</select>
	</td>
	</tr>

	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='id' value='$id'>
	<input type='submit' value='[ SIMPAN ]'>
	</td>
	</tr>
	</table>
	</form>
	";
		}
	}

function ediagnosa()
	{

	$diagnosa=$_POST['diagnosa'];
	$resep=$_POST['resep'];
	$id=$_POST['id'];
	$a=mysql_query("update m_polidiagnosa set diagnosa='$diagnosa', resep='$resep' where id='$id'");
	if($a)
		{header("location: index.php?task=dafantrian&p=Telah Diganti");}
	else
		{echo"ror";}
	}

function idiagnosa()
	{
	$idpas=$_POST['idpas'];
	$diagnosa=$_POST['diagnosa'];
	$resep=$_POST['resep'];
	$isi2=str_replace("\n","<br>",$resep);
	$icd=$_POST['icd'];
	$tgl=$_POST['tgl'];

	$id=$_POST['id'];
	$a=mysql_query("insert into m_polidiagnosa values ('', '$idpas', '$diagnosa', '$isi2', '0','$icd', '$tgl')");
	$b=mysql_query("update m_poliantri set status='Sudah' where id='$id'");
	if($a and $b)
		{header("location: index.php?task=dafantrian&p=Telah Terekam");}
	else
		{echo"ror";}
	}

function rekam()
	{
	$id=$_GET['id'];
	$a=mysql_query("update m_poliantri set status='Sudah' where id='$id'");
	if($a)
		{header("location: index.php?task=dafantrian&p=Telah Terekam");}
	else
		{echo"er";}
	}

function report()
	{
	$tgl=date('d-m-Y');
	echo"
	<h1>Daftar Antrian Pasien
	<br>
	Tanggal: $tgl
	</h1>
	<u>$p</u>
	<br>
	<br>
	<table class='adminlist'>
	<tr>
	<td>Antrian</td>
	<td>Nama</td>
	<td>No Pasien</td>
	<td>Tensi</td>
	<td>Diagnosa</td>

	</tr>
	";
	$d=date('d');
	$m=date('m');
	$y=date('Y');
	$a1=mysql_query("select *from m_poliantri where tgl='$d' and bln='$m' and thn='$y' and status='Belum' order by no ASC");
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
		<td><a href='index.php?task=tensi1&idpas=$idpas'>Tensi</a></td>
		<td><a href='index.php?task=diagnosa1&idpas=$idpas'>Diagnosa</a></td>

		</tr>
		";
		}
	echo"
	</table>
	";
	}

function tensi1()
	{
	$idpas=$_get['idpas'];
	$a1=mysql_query("select *from m_polipas where idpas='$idpas'");
	while($a=mysql_fetch_array($a1))
		{
		$nama=$a[nama];
		$norm=$a[norm];
		$tgllhr=$a[tgllhr];
		$umur=$a[umur];
		$alm=$a[alm];
		$kec=$a[kec];
		$kota=$a[kota];
		}
	$skr=date('d-m-Y');
	echo"
	<h1>Tensi $nama</h1>
	<br>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nama</td><td>$nama</td>
	</tr>
	<tr>
	<td width='20%'>No RM</td><td>$norm</td>
	</tr>
	<tr>
	<td width='20%'>Tgl Lahir</td><td>$tgllhr</td>
	</tr>
	<tr>
	<td width='20%'>Umur</td><td>$umur</td>
	</tr>
	<tr>
	<td width='20%'>Alamat</td><td>$alm - $kec - $kota </td>
	</tr>
	</table>";
	///////////////////////////////////////////////////

		$b1=mysql_query("select *from m_politensi where idpas='$idpas' and tgl='$skr'");
		while($b=mysql_fetch_array($b1))
			{
				$id=$b[id];
				$bb=$b[bb];
				$tensi=$b[tensi];
				$ket=$b[ket];
			}
		echo"

	<table class='adminlist'>
	<tr>
	<td>Tanggal</td>
	<td>Berat Badan (Kg)</td>
	<td>Tensi</td>
	<td>Keterangan</td>
	</tr>

	<tr>
	<td>$skr</td>
	<td>$bb</td>
	<td>$tensi</td>
	<td>$ket</td>
	</tr>
	</table>
	";
	}

function diagnosa1()
	{
	$idpas=$_get['idpas'];
	$a1=mysql_query("select *from m_polipas where idpas='$idpas'");
	while($a=mysql_fetch_array($a1))
		{
		$nama=$a[nama];
		$norm=$a[norm];
		$tgllhr=$a[tgllhr];
		$umur=$a[umur];
		$alm=$a[alm];
		$kec=$a[kec];
		$kota=$a[kota];
		}
	$skr=date('d-m-Y');
	echo"
	<h1>Tensi $nama</h1>
	<br>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nama</td><td>$nama</td>
	</tr>
	<tr>
	<td width='20%'>No RM</td><td>$norm</td>
	</tr>
	<tr>
	<td width='20%'>Tgl Lahir</td><td>$tgllhr</td>
	</tr>
	<tr>
	<td width='20%'>Umur</td><td>$umur</td>
	</tr>
	<tr>
	<td width='20%'>Alamat</td><td>$alm - $kec - $kota </td>
	</tr>
	</table>
	";

			$b1=mysql_query("select *from m_polidiagnosa where tgl='$skr' and='$idpas'");
			while($b=mysql_fetch_array($b1))
			{
			$id=$b[id];
			$diagnosa=$b[diagnosa];
			$resep=$b[resep];
			}
		echo"

	<table class='adminlist'>
	<tr>
	<td width='20%'>Tanggal</td>
	<td>$skr</td>
	</tr>
	<tr>
	<td width='20%'>Diagnosa</td>
	<td>
	$diagnosa
	</td>
	</tr>
	<tr>
	<td width='20%'>Resep</td>
	<td>
	$resep
	</td>
	</tr>

	</table>

	";

	}


function mstdiag()
	{
	$pes=$_GET['pes'];
	echo"
	<h1>Master ICD</h1>
	<u>$pes</u>
	<br><br>
	<form method='post' action='index.php?task=pmstdiag'>
	<table class='adminlist'>
	<tr>
	<td width='50%'>ICD</td>
	<td><input type='text' name='icd' size='50'></td>
	</tr>
	<tr>
	<td width='50%'>Gol Sebab Sakit</td>
	<td><input type='text' name='sebab' size='50'></td>
	</tr>
	<tr>
	<td colspan='2'>
	<input type='submit' value='[simpan]'>
	</td>
	</tr>
	</table>
	</form>

	";
	//////////////////////////////////
	echo"
	<table class='adminlist'>
	<tr>
	<td colspan='3'>
	<b>DATA MASTER DIAGNOSA</b>
	</td>
	</tr>

	<tr>
	<td>ICD</td>
	<td>Golongan</td>
	<td>Hapus</td>
	</tr>
	";
	$a1=mysql_query("select *from m_diag order by icd ASC");
	while($a=mysql_fetch_array($a1))
		{
		echo"
		<tr>
		<td><a href='index.php?task=emstdiag&id=$a[id]'>$a[icd]</a></td>
		<td>$a[sebab]</td>
		<td><a href='index.php?task=dele&alm=mstdiag&db=diag&id=$a[id]'>Hapus</a></td>
		</tr>
		";
		}
	echo"
	</table>
	";
	}

function pmstdiag()
	{
	$icd=$_POST['icd'];
	$sebab=$_POST['sebab'];
	$a=mysql_query("insert into m_diag values ('', '$icd', '$sebab')");
	if($a)
		{
		header("location: index.php?task=mstdiag&pes=Data Sudah Masuk");
		}
	else
		{echo"AUTHORIZED AREA";}
	}

function pemstdiag()
	{
	$id=$_POST['id'];
	$icd=$_POST['icd'];
	$sebab=$_POST['sebab'];
	$a=mysql_query("update m_diag set icd='$icd', sebab='$sebab' where id='$id'");
	if($a)
		{
		header("location: index.php?task=mstdiag&pes=Data Sudah Masuk");
		}
	else
		{echo"AUTHORIZED AREA";}
	}


function emstdiag()
	{
	$id=$_GET['id'];
	$a1=mysql_query("select *from m_diag where id='$id'");
	while($a=mysql_fetch_array($a1))
		{
		$icd=$a[icd];
		$sebab=$a[sebab];
		}
	echo"
	<form method='post' action='index.php?task=pemstdiag'>
	<table class='adminlist'>
	<tr>
	<td width='50%'>ICD</td>
	<td><input type='text' name='icd' size='50' value='$icd'></td>
	</tr>
	<tr>
	<td width='50%'>Gol Sebab Sakit</td>
	<td><input type='text' name='sebab' size='50' value='sebab'></td>
	</tr>
	<tr>
	<td colspan='2'>
	<input type='hidden' name='id' value='$id'>
	<input type='submit' value='[ubah]'>
	</td>
	</tr>
	</table>
	</form>
	";

	}


function resepku()
	{

	}

}

class rc
{

function pasien()
	{
	$p=$_GET['p'];
	echo"
	<h1>FORM PASIEN</h1>
	<br>
	<u>$p</u>
	<br><br>
	<form method='post' action='index.php?task=ipasienr'>
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
	<td width='20%'>Karyawan</td>
	<td>
	<select name='kary'>
	<option value='0'>Tidak</option>
	<option value='1'>Ya</option>
	</select>
	</td>
	</tr>

	<tr>
	<td width='20%'>Hub. Karyawan</td>
	<td>
	<select name='hub'>
	<option value='-'>-</option>
	<option value='Keluarga'>Keluarga</option>
	<option value='Saudara'>Saudara</option>
	</select>
	</td>
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
	$hub=$_POST['hub'];
	$kary=$_POST['kary'];
	$umur=$thnmsk-$thnlhr;

	if ($nama=='' or $swm=='')
		{echo"Data yang Anda isi kurang lengkap, harap isi kembali, <a href='javascript:history.back(-1)'>klik disini</a>";}
	else
		{
		$cou=mysql_result(mysql_query("SELECT COUNT(id)FROM m_poliabs where blnmsk='$blnmsk' and thnmsk='$thnmsk'"),0);
			if($cou==0)
			{$z2=1;}
			else
			{
		$z= mysql_result(mysql_query("SELECT MAX(id2)FROM m_poliabs where blnmsk='$blnmsk' and thnmsk='$thnmsk'"),0);
	$z2=$z+1;
			}
	$idpas=$z2."".$blnmsk."".$thnmsk;
	$poli='05';
	$pasod=$z2."".$blnmsk."".$thnmsk."".$poli;
	$pasad=$z2."".$blnmsk."".$thnmsk."".$poli;
	$birth=$tgllhr."-".$blnlhr."-".$thnlhr;
	$rtw=$rt."-".$rw;
	$a=mysql_query("insert into m_poliabs values('', '$z2', '$pasod', '$tglmsk', '$blnmsk', '$thnmsk')");
	$b=mysql_query("insert into m_polipas values ('', '$pasad', '$nama', '$norm', '$birth', '$umur', '$jk', '$agama', '$swm', '$umurswm', '$kerswm', '$alm', '$rtw', '$kec', '$kota', '$telp', '$kary', '$hub')");
	///
	$tgl=date('d');
	$bln=date('m');
	$thn=date('y');
	$date=date('Y-m-d');
	$y= mysql_result(mysql_query("SELECT MAX(id)FROM m_poliantri"),0);
	$id=$y+1;
	$zz= mysql_result(mysql_query("SELECT MAX(no)FROM m_poliantri where date='$date'"),0);
	$no=$zz+1;
	$pasid=$z2."".$blnmsk."".$thnmsk."".$poli;
	$c=mysql_query("insert into m_poliantri values ('$id', '$no', '$pasid', '$date','$tgl', '$bln', '$thn', 'Belum')");
	$idpas2=$z2.$blnmsk.$thnmsk.$poli;

	if($a and $b and $c)
			{header("location: index.php?task=tensir&p=Data Sudah Masuk&idpas=$idpas2");}
	else
			{echo"R OR";}
		}
	}

function antrian()
	{
	echo"
	<h1>Pasien Lama</h1>
	<br>
	<form method='post' action='index.php?task=antrianbr'>
	<table class='adminlist'>
	<tr>
	<td>
	Nama Pasien :
	</td>

	</tr>

	<tr>
	<td width='50%'>
	";
	/*
	<select name='idpas'>
	<option value=''> - </option>
	";
	$a1=mysql_query("select *from m_polipas order by nama");
	while($a=mysql_fetch_array($a1))
		{
		$nm=strtoupper($a[nama]);
		echo"
		<option value='$a[idpas]'>$a[idpas]-$nm</option>
		";
		}
	echo"
	</select>
	*/

	echo"
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
	$date=date('Y-m-d');
	$y= mysql_result(mysql_query("SELECT MAX(id)FROM m_poliantri"),0);
	$id=$y+1;
	$z= mysql_result(mysql_query("SELECT MAX(no)FROM m_poliantri where date='$date'"),0);
	$no=$z+1;
	$a=mysql_query("insert into m_poliantri values ('$id', '$no', '$idpas', '$thn-$bln-$tgl','$tgl', '$bln', '$thn', 'Belum')");
	if($a)
		{header("location: index.php?task=antriancr&id=$id");}
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

	<tr>
	<td colspan='2' align='center'>
	<br>
	<a href='index.php?task=tensir&idpas=$idpas'><b>KE PROSES SELANJUTNYA</b></a></td>
	</tr>
	</table>

	";
	}


function dafantrian()
	{
	$tgl=date('d-m-Y');
	$date=date('Y-m-d');
	$d=date('d');
	$m=date('m');
	$y=date('Y');
	echo"
	<h1>Daftar Antrian Pasien
	<br>
	Tanggal: $tgl $d $m $y
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

	$a1=mysql_query("select *from m_poliantri where date='$date' order by no ASC");
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



function pasien2()
	{
	echo"
	<h1>Registrasi Pasien Lama</h1>
	<table class='adminlist'>
	<tr>
	<td>Nama Pasien: </td>
	<td>
	<select name=''>
	</td>
	</tr>
	</table>
	";
	}



function tensi()
	{
	$idpas=$_GET['idpas'];
	$a1=mysql_query("select *from m_polipas where idpas='$idpas'");
	while($a=mysql_fetch_array($a1))
		{
		$nama=$a[nama];
		$norm=$a[norm];
		$tgllhr=$a[tgllhr];
		$umur=$a[umur];
		$alm=$a[alm];
		$kec=$a[kec];
		$kota=$a[kota];
		}
	$skr=date('d-m-Y');
	echo"
	<h1>Anamnese $nama</h1>
	<br>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nama</td><td>$nama</td>
	</tr>
	<tr>
	<td width='20%'>No RM</td><td>$norm</td>
	</tr>
	<tr>
	<td width='20%'>Tgl Lahir</td><td>$tgllhr</td>
	</tr>
	<tr>
	<td width='20%'>Umur</td><td>$umur</td>
	</tr>
	<tr>
	<td width='20%'>Alamat</td><td>$alm - $kec - $kota </td>
	</tr>
	</table>";
	///////////////////////////////////////////////////
	$ada = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_politensi where tgl='$skr' and idpas='$idpas'"),0);
	if($ada=='0')
		{

	echo"
	<form method='post' action='index.php?task=itensir'>
	<table class='adminlist'>
	<tr>
	<td width='30%'>Tanggal</td>
	<td><input type='text' name='tgl' value='$skr'></td>
	</tr>

	<tr>
	<td>Berat Badan (Kg)</td>
	<td><input type='text' name='bb'></td>
	</tr>

	<tr>
	<td>Tensi</td>
	<td><input type='text' name='tensi'></td>
	</tr>

	<tr>
	<td>Keluhan</td>
	<td><textarea name='keluhan' cols='40' rows='5'></textarea></td>
	</tr>

	<tr>
	<td>Keterangan</td>
	<td><textarea name='ket' cols='40' rows='5'></textarea></td>
	</tr>
	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value='[ SIMPAN ]'>
	</td>
	</tr>
	</table>
	</form>
	";
		}
		/////////////////////////////////////////////////////////////////
	else
		{
		$b1=mysql_query("select *from m_politensi where idpas='$idpas' and tgl='$skr'");
		while($b=mysql_fetch_array($b1))
			{
				$id=$b[id];
				$bb=$b[bb];
				$tensi=$b[tensi];
				$ket=$b[ket];
				$tgl=$b[tgl];
				$icd=$b[icd];
				$keluhan=$b[keluhan];
			}
		echo"
	<form method='post' action='index.php?task=etensi'>
	<table class='adminlist'>
	<tr>
	<td width='30%'>Tanggal</td>
	<td><input type='text' name='tgl' value='$tgl'></td>
	</tr>

	<tr>
	<td>Berat Badan (Kg)</td>
	<td><input type='text' name='bb' value='$bb'></td>
	</tr>

	<tr>
	<td>Tensi</td>
	<td><input type='text' name='tensi' value='$tensi'></td>
	</tr>



	<tr>
	<td>ICD</td>
	<td>
	<select name='icd'>
	<option value=''> - </option>
	";
	$argi2=mysql_query("select *from m_diag where id='$icd'");
	while($arghi2=mysql_fetch_array($argi2))
			{
			echo"<option value='$arghi2[id]'> $arghi2[icd]</option>";
			}

	$argi=mysql_query("select *from m_diag");
	while($arghi=mysql_fetch_array($argi))
		{
		echo"
		<option value='$arghi[id]'>$arghi[icd]</option>
		";
		}
	echo"
	</select>
	</td>
	</tr>

	<tr>
	<td>Keluhan</td>
	<td><input type='text' name='keluhan'></td>
	</tr>

	<tr>
	<td>Keterangan</td>
	<td><input type='text' name='ket'></td>
	</tr>
	<tr>
	<td colspan='4' align='center'>
	<input type='hidden' name='id' value='$id'>
	<input type='submit' value='[ SIMPAN ]'>
	</td>
	</tr>
	</table>
	</form>
	";
		}
	}

function etensi()
	{

	$bb=$_POST['bb'];
	$tensi=$_POST['tensi'];
	$ket=$_POST['ket'];
	$id=$_POST['id'];
	$keluhan=$_POST['keluhan'];
	$icd=$_POST['icd'];
	$a=mysql_query("update m_politensi set bb='$bb', tensi='$tensi', icd='$icd', keluhan='$keluhan', ket='$ket' where id='$id'");
	if($a)
		{header("location: index.php?task=dafantrian&p=Telah Diganti");}
	else
		{echo"error";}
	}

function itensi()
	{
	$tgl=$_POST['tgl'];
	$bb=$_POST['bb'];
	$tensi=$_POST['tensi'];
	$ket=$_POST['ket'];
	$idpas=$_POST['idpas'];
	//$icd=$_POST['icd'];
	$keluhan=$_POST['keluhan'];
	$a=mysql_query("insert into m_politensi values ('', '$idpas', '$tgl', '$bb', '$tensi', '$keluhan', '$ket')");
	if($a)
		{header("location: index.php?task=dafantrianr&p=Telah Terekam");}
	else
		{echo"error";}
	}



}


class ob
{

function resep()
	{
	$p=$_GET['p'];
	echo"
	<h1>RESEP PASIEN</h1>
	<u>$p</u>
	<br>
	<br>
	<table class='adminlist'>
	<tr>
	<td>No Pasien</td>
	<td>Nama Pasien</td>
	<td>Tanggal</td>
	<td>Resep</td>
	</tr>
	";
	$a1=mysql_query("select *from m_polidiagnosa where sresep='0' order by id DESC");
	while($a=mysql_fetch_array($a1))
		{
		echo"
		<tr>
		<td>$a[idpas]</td>
		<td>
		";
		$idpas=$a[idpas];
		$b1=mysql_query("select *from m_polipas where idpas='$idpas'");
		while($b=mysql_fetch_array($b1))
			{$nama=$b[nama];}
		echo"$nama
		</td>
		<td>$a[tgl]</td>
		<td><a href='index.php?task=resep1&idresep=$a[id]'>$a[resep]</a></td>
		</tr>
		";
		}
	echo"
	</table>
	";
	}





function resep1()
	{
	$idresep=$_GET['idresep'];
	$p=$_GET['p'];
	$a1=mysql_query("select *from m_polidiagnosa where id='$idresep'");
	while($a=mysql_fetch_array($a1))
		{
		$iddiag=$a[id];
		$idpas=$a[idpas];
		$tgl=$a[tgl];
		$diagnosa=$a[diagnosa];
		$resep=$a[resep];
		}
	$b1=mysql_query("select *from m_polipas where idpas='$idpas'");
	while($b=mysql_fetch_array($b1))
		{
		$nama=$b[nama];
		$norm=$b[norm];
		$tgllhr=$b[tgllhr];
		$umur=$b[umur];
		$jk=$b[jk];
		}
	echo"
	<u>$p</u>
	<br><br>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nama Pasien</td>
	<td>$nama</td>
	</tr>
	<tr>
	<td width='20%'>Tanggal Lahir</td>
	<td>$tgllhr</td>
	</tr>
	<tr>
	<td width='20%'>Jenis Kelamin</td>
	<td>$jk</td>
	</tr>
	<tr>
	<td width='20%'>Resep</td>
	<td>$resep</td>
	</tr>
	";
	/*$ada = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_poliresep where idresep='$idresep'"),0);
	if($ada=='0')
		{
	/////////////////////////////////////////////
	echo"
	<form method='post' action='index.php?task=resep2'>
	<tr>
	<td>Jumlah Harga Resep</td>
	<td><input type='text' name='total'></td>
	</tr>
	<tr>
	<td colspan='2'>
	<input type='hidden' name='idresep' value='$idresep'>
	<input type='submit' value='[ simpan ]'></td>
	</tr>
	</form>";
		}
	///////////////////////
	else
		{
		$c1=mysql_query("select *from m_poliresep where idresep='$idresep'");
		while($c=mysql_fetch_array($c1))
			{$id=$c[id]; $total=$c[total];}
		echo"
	<form method='post' action='index.php?task=resep3'>
	<tr>
	<td>Jumlah Harga Resep</td>
	<td><input type='text' name='total' value='$total'></td>
	</tr>
	<tr>
	<td colspan='2'>
	<input type='hidden' name='id' value='$id'>
	<input type='submit' value='[ ganti ]'></td>
	</tr>
	</form>";
		}*/
	echo"
	</table>
	";
	//////////////////////////////
	$ada = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_poliobts where idresep='$idresep'"),0);
	if($ada=='0')
		{
		echo"
	<br><br>
	<h1>PEMBELIAN OBAT RESEP</h1>
	<form method='post' action='index.php?task=resep4'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nama Obat</td>
	<td>
	<select name='obat'>
	";
	$c1=mysql_query("select *from m_obt order by nama ASC");
	while($c=mysql_fetch_array($c1))
		{
		echo"<option value='$c[nama]'>$c[nama], Rp. $c[hgjual]</option>";
		}
	echo"
	</select>
	</td>
	</tr>
	<tr>
	<td>Jumlah</td>
	<td><input type='text' name='jml'></td>
	</tr>
	<tr>
	<td colspan='2'>
	<input type='hidden' name='idresep' value='$idresep'>
	<input type='submit' value='simpan'>
	</td>
	</tr>
	</table>
	</form>
	<table class='adminlist'>
	<tr>
	<td colspan='4' align='center'>
	<b>DAFTAR OBAT</b>
	</td>
	</tr>
	<tr>
	<td>Obat</td>
	<td>Jumlah</td>
	<td>Harga</td>
	<td>Hapus</td>
	</tr>
	";
	$d1=mysql_query("select *from m_poliobt where idresep='$idresep'");
	while($d=mysql_fetch_array($d1))
		{
		echo"
		<tr>
		<td>$d[obat]</td>
		<td>$d[jml]</td>
		<td>$d[harga]</td>
		<td><a href='index.php?task=delresep&id=$d[id]&idresep=$idresep'>hapus</a></td>
		</tr>";
		}
		/////////////
	$tot= mysql_result(mysql_query("SELECT SUM(harga) as Num FROM m_poliobt where idresep='$idresep'"),0);
	echo"
	<tr>
	<td colspan='2' align='center'><b>TOTAL HARGA</b></td>
	<td colspan='2' align='center'><b>Rp. $tot</b></td>
	</td>
	</tr>
	<tr>
	<td colspan='4' align='center'>
	<form method='post' action='index.php?task=reseprek'>
	<input type='hidden' name='idresep' value='$idresep'>
	<input type='submit' value='REKAM'>
	</form>

	</td>
	</tr>

	</table>
	";
		}
	else
		{
		echo"
		<table class='adminlist'>
	<tr>
	<td colspan='3' align='center'>
	<b>DAFTAR OBAT</b>
	</td>
	</tr>
	<tr>
	<td>Obat</td>
	<td>Jumlah</td>
	<td>Harga</td>

	</tr>
	";
	$d1=mysql_query("select *from m_poliobt where idresep='$idresep'");
	while($d=mysql_fetch_array($d1))
		{
		echo"
		<tr>
		<td>$d[obat]</td>
		<td>$d[jml]</td>
		<td>$d[harga]</td>

		</tr>";
		}
		/////////////
	$tot= mysql_result(mysql_query("SELECT SUM(harga) as Num FROM m_poliobt where idresep='$idresep'"),0);
	echo"
	<tr>
	<td colspan='2' align='center'><b>TOTAL HARGA</b></td>
	<td align='center'><b>Rp. $tot</b></td>
	</td>
	</tr>
	<tr>
	<td colspan='3'>
	<b><a href='struk.php?idresep=$idresep' target='_blank'>C E T A K</a></b>
	</td>
	</tr>
	</table>
		";
		}

	}

function resep2()
	{
	$idresep=$_POST['idresep'];
	$total=$_POST['total'];
	$a=mysql_query("insert into m_poliresep values ('', '$idresep', '$total')");
	if($a)
		{header("location: index.php?task=resep&p=Data Sudah Diganti");}
	else
		{echo"";}
	}

function resep3()
	{
	$id=$_POST['id'];
	$total=$_POST['total'];
	$a=mysql_query("update m_poliresep set total='$total' where id='$id'");
	if($a)
		{header("location: index.php?task=resep&p=Data Sudah Diganti");}
	else
		{echo"";}
	}


function resep4()
	{
	$obat=$_POST['obat'];
	$jml=$_POST['jml'];
	$idresep=$_POST['idresep'];

	$b1=mysql_query("select *from m_obt where nama='$obat'");
	while($b=mysql_fetch_array($b1))
		{
		$harga=$b[hgjual];
		}
	$harga2=$harga*$jml;
	$a=mysql_query("insert into m_poliobt values('', '$idresep', '$obat', '$jml', '$harga2', '0')");
	if ($a)
		{
		header("location: index.php?task=resep1&idresep=$idresep&p=Data Sudah Masuk");
		}
	else
		{echo"AUTHORIZED AREA";}

	}

function reseprek()
	{
	$idresep=$_POST['idresep'];
	$a=mysql_query("insert into m_poliobts values('', '$idresep', '1')");
	$b=mysql_query("update m_polidiagnosa set sresep='1' where id='$idresep'");
	if($a and $b)
		{
		header("location: index.php?task=resep1&idresep=$idresep&p=Data Sudah Terekam");
		}
	else
		{echo"AUTHORIZED AREA";}
	}


function delresep()
	{
	$id=$_GET['id'];
	$idresep=$_GET['idresep'];
	$masuk="DELETE FROM m_poliobt where id='$id'";
	$query=mysql_query($masuk);
	if($masuk)
		{
		header("Location: index.php?task=resep1&p=Data Sudah Dihapus&idresep=$idresep");
		}
	else
		{
	echo"ERROR";
		}
	}

function mutasi()
	{
	$p=$_GET['p'];
	$tgl=date('Y-m-d');
	echo"
	<h1>MUTASI OBAT</h1>
	<u>$p</u>
	<br>
	<br>
	<form method='post' action='index.php?task=pmutasi'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Obat</td>
	<td>
	<select name='obat'>
	";
	$a1=mysql_query("select *from m_obt order by nama ASC");
	while ($a=mysql_fetch_array($a1))
		{
		echo"
		<option value='$a[nama]'>$a[nama]</option>
		";
		}
	echo"
	</select>
	</td>
	</tr>

	<tr>
	<td>Jumlah Obat</td>
	<td><input type='text' name='jumlah'></td>
	</tr>


	<tr>
	<td>Tanggal</td>
	<td><input type='text' name='tanggal' value='$tgl'> <font size='-1'>*YYYY/MM/DD</font></td>
	</tr>

	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='dari' value='Poli'>
        <input type='hidden' name='ke' value='Kamar Obat'>
	<input type='submit' value='[ simpan ]'>
	</td>
	</tr>
	</table>
	</form>
	";
	//////////////////////////////////////////////////////////////////////////
	echo"
	<br>
	<h1>DATA MUTASI OBAT</h1>
	<table class='adminlist'>
	<tr>
	<td>Tanggal</td>
	<td>Obat</td>
	<td>Jumlah</td>
	<td>Mutasi</td>
	</tr>
	";
	$b1=mysql_query("select *from m_obtmutasi where dari='Poli' order by tanggal DESC");
	while($b=mysql_fetch_array($b1))
		{
		echo"
		<tr>
		<td>$b[tanggal]</td>
		<td>$b[obat]</td>
		<td>$b[jumlah]</td>
		<td>$b[mutasi]</td>
		</tr>
		";
		}
	echo"
	</table>
	";

	}

function pmutasi()
	{
	$obat=$_POST['obat'];
	$jumlah=$_POST['jumlah'];
	$tanggal=$_POST['tanggal'];
	$dari=$_POST['dari'];
	$ke=$_POST['ke'];

	$b1=mysql_query("select *from m_obtstok where obat='$obat' and unit='$ke'");
	while($b=mysql_fetch_array($b1))
		{
		$stoktmb=$b[stok]+$jumlah;
		}

	$c1=mysql_query("select *from m_obtstok where obat='$obat' and unit='$dari'");
	while($c=mysql_fetch_array($c1))
		{
		$stokkrg=$b[stok]-$jumlah;
		}

	$a=mysql_query("insert into m_obtmutasi values ('', '$obat', '$jumlah', '$tanggal', '$dari', '$ke')");
	$d=mysql_query("update m_obtstok set stok='$stoktmb' where obat='$obat' and unit='$ke'");
	$e=mysql_query("update m_obtstok set stok='$stokkrg' where obat='$obat' and unit='$dari'");
	if($a and $d and $e)
		{
		header("location: index.php?task=mutasi&p=Obat Sudah Dimutasi");
		}
	else
		{echo"AUTHORIZED AREA";}

	}


function struk()
	{
	$idresep=$_GET['ideresep'];
	$a1=mysql_query("select *from m_polidiagnosa where id='$idresep'");
	while($a=mysql_fetch_array($a1))
		{
		$iddiag=$a[id];
		$idpas=$a[idpas];
		$tgl=$a[tgl];
		$diagnosa=$a[diagnosa];
		$resep=$a[resep];
		}
	$b1=mysql_query("select *from m_polipas where idpas='$idpas'");
	while($b=mysql_fetch_array($b1))
		{
		$nama=$b[nama];
		$norm=$b[norm];
		$tgllhr=$b[tgllhr];
		$umur=$b[umur];
		$jk=$b[jk];
		$alm=$b[alm];
		$kota=$b[kota];
		$kec=$b[kec];
		}
		$tot= mysql_result(mysql_query("SELECT SUM(harga) as Num FROM m_poliobt where idresep='$idresep'"),0);
		$c1=mysql_query("select *from m_politiket where id='1'");
		while($c=mysql_fetch_array($c1))
		{
		$btiket=$c[harga];
		}
		$d1=mysql_query("select *from m_polidok where id='1'");
		while($d=mysql_fetch_array($d1))
		{
		$bdokter=$d[harga];
		}
		$total=$tot+$btiket+$bdokter;
	echo"
	<h1>
	POLI UMUM IBU & ANAK <br>
	RSIA.MARDIWALUYA MALANG<br>
	</h1>
	<h2>
	Jl. Kauman No. Malang<br>
	Telpon. 0341-362304<br>
	www.rs-mardiwaluya-mlg.com
	</h2>

	<table width='500' border='0'>
	<tr>
	<td width='60%'>Telah Terima dari</td>
	<td>: $nama/ $alm-$kec-$kota</td>
	</tr>

	<tr>
	<td width='20%'>Untuk Pembayaran</td>
	<td>:</td>
	</tr>

	<tr>
	<td width='20%'>
	1. Obat/Alat/Pelayanan<br>
	2. Biaya Dokter<br>
	3. Karcis
	</td>

	<td>
	Rp. $tot<br>
	Rp. $bdokter<br>
	Rp. $btiket</li>

	</td>
	</tr>

	<tr>
	<td align='center'>
	<b>Terbilang
	</td>

	<td>
	<b>Rp. $total
	</td>

	</tr>
	";
	echo"
	</table>
	";
	}

}

?>