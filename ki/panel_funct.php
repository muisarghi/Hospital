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
function delb()
	{
	$id=$_GET['id'];
	$alm=$_GET['alm'];
	$db=$_GET['db'];
	$idpas=$_GET['idpas'];
	$status=$_GET['status'];
	$masuk="DELETE FROM m_$db where idbyalkes='$id'";
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
	Selamat Datang di HALAMAN KAMAR BAYI RSIA MARDI WALOEJA MALANG
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

	<form>

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
	$b=mysql_query("insert into m_absen2 values('', '$z2$blnmsk$thnmsk', '$tglmsk-$blnmsk-$thnmsk')");
	$c=mysql_query("insert into m_pasien values ('', '$idrg', '$idpas', '$id_asuransi', '$nama', '$umur', '$norm', '$ktp', '$ker', '$namaker', '$sex', '$dl-$ml-$yl')");
	$d=mysql_query("insert into m_pasienalm values ('', '$idpas', '$alm', '$rt', '$rw', '$lurah', '$kec', '$kota', '$telp')");
	$e=mysql_query("insert into m_pasiendet values ('', '$idpas', '$pend', '$agama', '$kawin', '$wn', '$kasus')");
	$f=mysql_query("insert into m_pasiendiag values ('', '$idpas', '$diagawal', '$diagakh', '$diagsec', '$kpl', '$oprtgl', '$icd', '$hsl', '$crklr', '$nm_rs')");
	$g=mysql_query("insert into m_pasienket values ('', '$idpas', '$rujuk', '$rawat', '$petugas', '$perawat', '$dokter')");
	$h=mysql_query("insert into m_pasiensw values ('', '$idpas', '$nmsw', '$umursw', '$almsw', '$kersw', '$penddsw')");
	$i=mysql_query("insert into m_pasientgg values ('', '$idpas', '$namatgg', '$almtgg', '$rttgg', '$rwtgg', '$lurahtgg', '$kectgg', '$kotatgg', '$telptgg')");

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

function mes2()
	{
	//$idpas=$_GET['idpas'];
	$status=$_GET['status'];
	$alm=$_GET['alm'];
	$pes=$_GET['pes'];

	echo"
	<form method='post' action='index.php?task=$alm'>
	<br><br>
	<b>$pes</b>,

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
	$xk1=mysql_query("select *from m_pasienby where id_by='$idpas'");
	while($xk=mysql_fetch_array($xk))
		{
		$ibu=$xk[idpas];
		$namaby=$xk[nama];
		$tglby=$xk[tgl];
		$jkby=$xk[jk];
		}
	$status=$_POST['status'];
	$b=mysql_query("select *from m_absen where idpas='$ibu'");
	while($a=mysql_fetch_array($b))
		{$tglinap=$a[tglinap];
		$blninap=$a[blninap];
		$thninap=$a[thninap];
			$jminap=$a[jminap];

		}
		$d=mysql_query("select *from m_pasien where idpas='$ibu'");
	while($c=mysql_fetch_array($d))
		{$nama=$c[nama];
		$umur=$c[umur];
		$norm=$c[norm];
		$tgllhr=$c[tgllhr];
		}
		$f=mysql_query("select *from m_pasienalm where idpas='$ibu'");
	while($e=mysql_fetch_array($f))
		{$alm=$e[alm];
		$rt=$e[rt];$rw=$e[rw];
		$lurah=$e[lurah];
		$kec=$e[kec];
		$kota=$e[kota];$telp=$e[telp];
		}
		$h=mysql_query("select *from m_pasiensw where idpas='$ibu'");
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
	<td width='10'>No RM Ibu</td>
	<td width='40'>: $norm</td>
	<td width='10'>Para</td>
	<td width='40'>: <input type='text' name='para' size='40'></td>
	</tr>

	<tr>
	<td width='10'>Nama Bayi</td>
	<td width='40'>: $nama
	</td>
	<td width='10'>Tgl Lahir</td>
	<td width='40'>: $tglby
	</td>
	</tr>

	<tr>
	<td width='10'>Nama Ibu</td>
	<td width='40'>: $nama
	umur $umur th</td>
	<td width='10'>Jenis Kelamin Bayi</td>
	<td width='40'>:
	$jkby <input type='hidden' name='jk' value='$jkby'>
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
	$xk1=mysql_query("select *from m_pasienby where id_by='$idpas'");
	while($xk=mysql_fetch_array($xk))
		{
		$ibu=$xk[idpas];
		$namaby=$xk[nama];
		$tglby=$xk[tgl];
		$jkby=$xk[jk];
		}
	$a1=mysql_query("select *from m_pasien where idpas='$ibu'");
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
	Ruang Ibu: $kls_rg/ $nm_rg
	</td>
	<td width='40%'>
	Nomor Ibu: $idpas
	</td>
	</tr>
	<tr>
	<td width='50%'>
	Nama Ibu: $nama
	</td>
	<td width='50%'>
	Umur Ibu: $umur
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
	$xk1=mysql_query("select *from m_pasienby where id_by='$ibu'");
	while($xk=mysql_fetch_array($xk))
		{
		$ibu=$xk[idpas];
		$namaby=$xk[nama];
		$tglby=$xk[tgl];
		$jkby=$xk[jk];
		}
	$p=mysql_query("select *from m_pasien where idpas='$ibu'");
	while($pa=mysql_fetch_array($p))
			{
			$nama=$pa['nama'];
			$umur=$pa['umur'];
			$sex=$pa['sex'];
			$norm=$pa['norm'];
			$idrg=$pa['idrg'];
			}
	$q=mysql_query("select *from m_pasienalm where idpas='$ibu'");
	while($qa=mysql_fetch_array($q))
			{
			$alm=$qa['alm'];
			$rt=$qa['rt'];
			$rw=$qa['rw'];
			$lurah=$qa['lurah'];
			$kec=$qa['kec'];
			$kota=$qa['kota'];
			}
	$r=mysql_query("select *from m_pasiendet where idpas='$ibu'");
	while($ra=mysql_fetch_array($r))
			{
			$agama=$ra['agama'];
			}
	$s=mysql_query("select *from m_absen where idpas='$ibu'");
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
	$skr=DATE('d-m-Y');
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
	<td>Pasien</td>
	<td>Alamat</td>
	<td>Status</td>
	<td>Tgl Msk</td>
	<td>Jml Inap</td>
	</tr>
	";
	$b1=mysql_query("select *from m_pasien, m_pasienalm, m_absen where m_pasien.idpas=m_pasienalm.idpas and m_pasien.idpas=m_absen.idpas and m_absen.status='Bayi' order by m_pasien.nama ASC LIMIT $from, $max_results");
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
	<td>$status</td>
	<td>$b[alm], $b[kec]-$b[kota]</td>
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


function inttm()
	{
	$idpas=$_POST['idpas'];
	$status=$_POST['status'];


	echo"<center>
	<h1>PENOLAKAN TINDAKAN MEDIK</h1></center>

	<br><br>
	<u>$pesan</u>
	<br><br>
	<form method='post' action='index.php?task=in_ttm'>
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

function in_ttm()
	{
	$idpas=$_POST['idpas'];

	$xk1=mysql_query("select *from m_pasienby where id_by='$ibu'");
	while($xk=mysql_fetch_array($xk))
		{
		$ibu=$xk[idpas];
		$namaby=$xk[nama];
		$tglby=$xk[tgl];
		$jkby=$xk[jk];
		}
	$p=mysql_query("select *from m_pasien where idpas='$ibu'");
	while($pa=mysql_fetch_array($p))
			{
			$nama=$pa['nama'];
			$umur=$pa['umur'];
			$norm=$pa['norm'];
			}
	$q=mysql_query("select *from m_pasienalm where idpas='$ibu'");
	while($qa=mysql_fetch_array($q))
			{
			$alm=$qa['alm'];
			$rt=$qa['rt'];
			$rw=$qa['rw'];
			$lurah=$qa['lurah'];
			$kec=$qa['kec'];
			$kota=$qa['kota'];
			}
	$ada = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_tolak where idpas='$idpas'"),0);
	if ($ada=='0')
		{
	echo"
	<center><h1>PENOLAKAN TINDAKAN MEDIK</h1></center>
	<br>
	<form method='post' action='index.php?task=pin_ttm'>
	Saya yang bertanda tangan di bawah ini:
	<br>
	Nama: <input type='text' name='nama' size='100'>
	<br>
	Umur: <input type='text' name='umur' size='100'>
	<br><br>
	Selaku
	<select name='kel'>
	<option value='PASIEN'>PASIEN</option>
	<option value='KELUARGA TERDEKAT PASIEN'>KELUARGA TERDEKAT PASIEN</option>
	</select>

	<select name='kellain'>
	<option value='Ayah'>Ayah</option>
	<option value='Ibu'>Ibu</option>
	<option value='Suami'>Suami</option>
	<option value='Istri'>Istri</option>
	<option value='Kakak'>Kakak</option>
	<option value='Adik'>Adik</option>
	<option value='Lainnya'>Lainnya</option>
	</select>
	; <b>MENGERTI SEPENUHNYA ATAS PENJELASAN DOKTER</b> di RSIA. Mardi Waloeja Kauman-Malang tentang kelainan kesehatan yang dihadapi sebagai:
	<br>
	(Diagnosis kerja : <input type='text' name='diag' size='150'>)
	<br>
	dan menyadari pula bahwa <b>PILIHAN UPAYA TERBAIK UNTUK PERTOLONGAN/ PENYEMBUHAN</b> ialah dengan tindakan medik:
	<br>
	<br>
	(Istilah medik: <input type='text' name='medik' size='150'>)
	<br>
	dengan ini <b>MENOLAK/ TIDAK MENGIJINKAN DILAKUKAN SEGALA TINDAKAN MEDIK</b> yang diperlukan menurut standart profesi cara pertolongan di RSIA. Mardi Waloeja Kauman-Malang (PERMENKES NO. 585/ MEN.KES/ PER/ IX/ 1989, Tgl. 4 September 1989) terhadap pasien:
	<br><br>
	<table border='0' width='100%'>
	<tr>
	<td width='30%'>Nama</td>
	<td>: $nama</td>
	</tr>
	<tr>
	<td width='30%'>Umur</td>
	<td>: $umur</td>
	</tr>
	<tr>
	<td width='30%'>Alamat Lengkap</td>
	<td>: $alm RT.$rt - RW.$rw $lurah - $kec - $kota</td>
	</tr>
	<tr>
	<td width='30%'>No Rekam Medik</td>
	<td>: $norm</td>
	</tr>
	</table>
	<br>
	<br>
	Pernyataan ini dibuat dengan sesungguhnya dengan tanpa paksaan bahwa saya:
	<ol type='1'>
	<li>Telah diberikan informasi dan penjelasan serta peringatan akan bahaya, resiko serta kemungkinan - kemungkinan yang timbul apabila tidak dilakukan tindakan medik</li>
	<li>Telah saya pahami sepenuhnya informasi dan penjelasan yang diberikan dokter secara jelas</li>
	<li>Dan maka atas tanggung jawab dan resiko saya sendiri tetap menolak untuk dilakukan tindakan  medik yang dianjurkan dokter.</li>
	</ol>
	<br><br>
	<table border='0' width='100%'>
	<tr>
	<td width='50%'></td>
	<td>Dibuat di Malang, tanggal
	";
	$tglskr=DATE('d-m-Y , h:i');;
	echo"
	<input type='text' name='tgl' value='$tglskr' size='30'>
	</td>
	</tr>
	</table>
	<br>

	<table border='0' width='100%'>
	<tr>
	<td colspan='2' width='40%'><b>1. DOKTER YANG MERAWAT</b></td>
	<td colspan='2' width='50%'><b>2. PASIEN</b></td>
	</tr>

	<tr>
	<td width='20%'>Tanda Tangan</td>
	<td width='40%'><br><br></td>
	<td width='20%'>Tanda Tangan</td>
	<td><br><br></td>
	</tr>

	<tr>
	<td width='20%'>Nama</td>
	<td width='40%'><input type='text' name='dok' size='30'></td>
	<td width='20%'>Nama</td>
	<td><input type='text' name='pasien' size='30'></td>
	</tr>

	<tr>
	<td align='center' colspan='4'><b>SAKSI:</b></td>
	</tr>
	<tr>
	<td colspan='2' width='40%'><b>3. BIDAN/ PERAWAT</b></td>
	<td colspan='2' width='50%'><b>4. KELUARGA TERDEKAT PASIEN</b></td>
	</tr>

	<tr>
	<td width='20%'>Tanda Tangan</td>
	<td width='40%'><br><br></td>
	<td width='20%'>Tanda Tangan</td>
	<td><br><br></td>
	</tr>

	<tr>
	<td width='20%'>Nama</td>
	<td width='40%'><input type='text' name='bidan' size='30'></td>
	<td width='20%'>Nama</td>
	<td><input type='text' name='kel2' size='30'></td>
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
		$r=mysql_query("select *from m_tolak where idpas='$idpas'");
	while($ra=mysql_fetch_array($r))
			{
			$kel=$ra['kel'];
			$kellain=$ra['kellain'];
			$diag=$ra['diag'];
			$medik=$ra['medik'];
			$namat=$ra['nama'];
			$umurt=$ra['umur'];
			$tgl=$ra['tgl'];
			$dok=$ra['dok'];
			$pasien=$ra['pasien'];
			$bidan=$ra['bidan'];
			$kel2=$ra['kel2'];
			}
			echo"
		<center><h1>PENOLAKAN TINDAKAN MEDIK</h1></center>
	<br>
	<form method='post' action='index.php?task=pen_ttm'>
	Saya yang bertanda tangan di bawah ini:
	<br>
	Nama: <input type='text' name='nama' size='100' value='$namat'>
	<br>
	Umur: <input type='text' name='umur' size='100' value='$umurt'>
	<br><br>
	Selaku
	<select name='kel'>
	<option value='$kel'>$kel</option>
	<option value='PASIEN'>PASIEN</option>
	<option value='KELUARGA TERDEKAT PASIEN'>KELUARGA TERDEKAT PASIEN</option>
	</select>

	<select name='kellain'>
	<option value='$kellain'>$kellain</option>
	<option value='Ayah'>Ayah</option>
	<option value='Ibu'>Ibu</option>
	<option value='Suami'>Suami</option>
	<option value='Istri'>Istri</option>
	<option value='Kakak'>Kakak</option>
	<option value='Adik'>Adik</option>
	<option value='Lainnya'>Lainnya</option>
	</select>
	; <b>MENGERTI SEPENUHNYA ATAS PENJELASAN DOKTER</b> di RSIA. Mardi Waloeja Kauman-Malang tentang kelainan kesehatan yang dihadapi sebagai:
	<br>
	(Diagnosis kerja : <input type='text' name='diag' size='150' value='$diag'>)
	<br>
	dan menyadari pula bahwa <b>PILIHAN UPAYA TERBAIK UNTUK PERTOLONGAN/ PENYEMBUHAN</b> ialah dengan tindakan medik:
	<br>
	<br>
	(Istilah medik: <input type='text' name='medik' size='150' value='$medik'>)
	<br>
	dengan ini <b>MENOLAK/ TIDAK MENGIJINKAN DILAKUKAN SEGALA TINDAKAN MEDIK</b> yang diperlukan menurut standart profesi cara pertolongan di RSIA. Mardi Waloeja Kauman-Malang (PERMENKES NO. 585/ MEN.KES/ PER/ IX/ 1989, Tgl. 4 September 1989) terhadap pasien:
	<br><br>
	<table border='0' width='100%'>
	<tr>
	<td width='30%'>Nama</td>
	<td>: $nama</td>
	</tr>
	<tr>
	<td width='30%'>Umur</td>
	<td>: $umur</td>
	</tr>
	<tr>
	<td width='30%'>Alamat Lengkap</td>
	<td>: $alm RT.$rt - RW.$rw $lurah - $kec - $kota</td>
	</tr>
	<tr>
	<td width='30%'>No Rekam Medik</td>
	<td>: $norm</td>
	</tr>
	</table>
	<br>
	<br>
	Pernyataan ini dibuat dengan sesungguhnya dengan tanpa paksaan bahwa saya:
	<ol type='1'>
	<li>Telah diberikan informasi dan penjelasan serta peringatan akan bahaya, resiko serta kemungkinan - kemungkinan yang timbul apabila tidak dilakukan tindakan medik</li>
	<li>Telah saya pahami sepenuhnya informasi dan penjelasan yang diberikan dokter secara jelas</li>
	<li>Dan maka atas tanggung jawab dan resiko saya sendiri tetap menolak untuk dilakukan tindakan  medik yang dianjurkan dokter.</li>
	</ol>
	<br><br>
	<table border='0' width='100%'>
	<tr>
	<td width='50%'></td>
	<td>Dibuat di Malang, tanggal
	";
	$tglskr=DATE('d-m-Y , h:i');;
	echo"
	<input type='text' name='tgl' value='$tgl' size='30'>
	</td>
	</tr>
	</table>
	<br>

	<table border='0' width='100%'>
	<tr>
	<td colspan='2' width='40%'><b>1. DOKTER YANG MERAWAT</b></td>
	<td colspan='2' width='50%'><b>2. PASIEN</b></td>
	</tr>

	<tr>
	<td width='20%'>Tanda Tangan</td>
	<td width='40%'><br><br></td>
	<td width='20%'>Tanda Tangan</td>
	<td><br><br></td>
	</tr>

	<tr>
	<td width='20%'>Nama</td>
	<td width='40%'><input type='text' name='dok' size='30' value='$dok'></td>
	<td width='20%'>Nama</td>
	<td><input type='text' name='pasien' size='30' value='$pasien'></td>
	</tr>

	<tr>
	<td align='center' colspan='4'><b>SAKSI:</b></td>
	</tr>
	<tr>
	<td colspan='2' width='40%'><b>3. BIDAN/ PERAWAT</b></td>
	<td colspan='2' width='50%'><b>4. KELUARGA TERDEKAT PASIEN</b></td>
	</tr>

	<tr>
	<td width='20%'>Tanda Tangan</td>
	<td width='40%'><br><br></td>
	<td width='20%'>Tanda Tangan</td>
	<td><br><br></td>
	</tr>

	<tr>
	<td width='20%'>Nama</td>
	<td width='40%'><input type='text' name='bidan' size='30' value='$bidan'></td>
	<td width='20%'>Nama</td>
	<td><input type='text' name='kel2' size='30' value='$kel2'></td>
	</tr>

	<tr>
	<td colspan='4' align='center'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value='GANTI'>
	</td>
	</tr>
	</table>
	</form>";
		}

	}


function pin_ttm()
	{
	$idpas=$_POST['idpas'];
	$kel=$_POST['kel'];
	$kellain=$_POST['kellain'];
	$diag=$_POST['diag'];
	$medik=$_POST['medik'];
	$nama=$_POST['nama'];
	$umur=$_POST['umur'];
	$tgl=$_POST['tgl'];
	$dok=$_POST['dok'];
	$pasien=$_POST['pasien'];
	$bidan=$_POST['bidan'];
	$kel2=$_POST['kel2'];
	$a=mysql_query("insert into m_tolak values ('', '$idpas', '$kel', '$kellain', '$diag', '$medik', '$nama', '$umur', '$tgl', '$dok', '$pasien', '$bidan', '$kel2')");
	if($a)
		{header ("Location: index.php?task=mes&idpas=$idpas&status=$status&pes=Data Sudah Masuk&alm=in_ttm");
		}
	else
		{echo"error";}
	}

function pen_ttm()
	{
	$idpas=$_POST['idpas'];
	$kel=$_POST['kel'];
	$kellain=$_POST['kellain'];
	$diag=$_POST['diag'];
	$medik=$_POST['medik'];
	$nama=$_POST['nama'];
	$umur=$_POST['umur'];
	$tgl=$_POST['tgl'];
	$dok=$_POST['dok'];
	$pasien=$_POST['pasien'];
	$bidan=$_POST['bidan'];
	$kel2=$_POST['kel2'];
	$a=mysql_query("update m_tolak set kel='$kel', kellain='$kellain', diag='$diag', medik='$medik', nama='$nama', umur='$umur', tgl='$tgl', dok='$dok', pasien='$pasien', bidan='$bidan', kel2='$kel2' where idpas='$idpas'");
	if($a)
		{header ("Location: index.php?task=mes&idpas=$idpas&status=$status&pes=Data Sudah Diganti&alm=in_ttm");
		}
	else
		{echo"error";}
	}


function dafby()
	{
	$skr=DATE('d-m-Y');

	echo"<center>
	<h1>DAFTAR BAYI</h1></center>

	<br><br>
	<u>$pesan</u>
	<br><br>
	<form method='post' action='index.php?task=daf_by'>
	<table class='adminlist'>
	<tr>
	<td colspan='2'>
	Nama Pasien :
	</td>

	</tr>

	<tr>
	<td colspan='2'>
	<select name='idpas'>
	";
	/*
	<input type='text' id='kata' name='idpas' onkeyup='lihat(this.value)' size='40'>
	<div id='kotaksugest' style='position:absolute;
	background-color:#eeffee;visibility:hidden;z-index:100'>
	</div>
	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	*/
	$query = mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status like '%Inpartu%' ");
	while($k=mysql_fetch_array($query))
		{
		echo"<option value='$k[idpas]'>$k[nama], $k[idpas]</option>";
		}

	echo"</select>
	</td>

	</tr>

	<tr>
	<td>Nama Bayi</td>
	<td><input type='text' name='nama'></td>
	</tr>

	<tr>
	<td>Tanggal</td>
	<td><input type='text' name='tgl' value='$skr'></td>
	</tr>

	<tr>
	<td>Jenis Kelamin
	</td>
	<td>
	<select name='jk'>
	<option value='Laki-laki'>Laki-laki</option>
	<option value='Perempuan'>Perempuan</option>
	</select>
	</td>
	</tr>
	<tr>
	<td colspan='2' align='center'>
	<input type='submit' value='[ SIMPAN ]'>
	</td>
	</tr>
	</table>";
	//DATA BAYI

	echo"
	Data Bayi
	<br>
	<table class='adminlist'>
	<tr>
	<td>Identitas</td>
	<td>Nama Bayi</td>
	<td>Orang Tua</td>
	<td>Tgl Lahir</td>
	<td>Jns Kelamin</td>
	<td>Hapus</td>
	";
	$a1=mysql_query("select *from m_pasienby order by idby");
	while($a=mysql_fetch_array($a1))
		{
		echo"
		<tr>
		<td>$a[id_by]</td>
		<td><a href='index.php?task=edafby&idby=$a[idby]'>$a[nama]</a></td>
		<td>";$idpas=$a[idpas];
		$b1=mysql_query("select *from m_pasien where idpas='$idpas'");
		while($b=mysql_fetch_array($b1))
			{
			$ortu=$b[nama];
			}
		echo"
		$ortu <br> $idpas
		</td>
		<td>$a[tgl]</td>
		<td>$a[jk]</td>
		<td><a href='index.php?task=deletee&id=$a[idby]&db=pasienby&alm=dafby'>hapus</a></td>
		</tr>";
		}
	echo"</table>";
	}

function daf_by()
	{
	$idpas=$_POST['idpas'];
	$nama=$_POST['nama'];
	$tgl=$_POST['tgl'];
	$jk=$_POST['jk'];
	$z= mysql_result(mysql_query("SELECT MAX(idby) FROM m_pasienby"),0);
	$ida=$z+1;
	$idby=$z+1;
	$bayi='02';
	$id_by=$idpas.$idby.$bayi;
	$a=mysql_query("insert into m_pasienby values ('$idby', '$idpas', '$id_by', '$nama', '$tgl', '$jk', '', '')");
	if ($a)
		{header("Location: index.php?task=dafby&pesan=Data Sudah Masuk");}
	else
		{echo"error $z $ida $idby $id_by";}

	}

function deletee()
	{
	$id=$_GET['id'];
	$alm=$_GET['alm'];
	$db=$_GET['db'];
	$masuk="DELETE FROM m_$db where id='$id'";
	$query=mysql_query($masuk);
	if($masuk)
		{
		header("Location: index.php?task=mes2&pes=Data Sudah Dihapus&alm=$alm");
		}
	else
		{
	echo"ERROR";
		}
	}

function edafby()
	{
	$idby=$_GET['idby'];
	$a1=mysql_query("select *from m_pasienby where idby='$idby'");
	while($a=mysql_fetch_array($a1))
		{
		$idpas=$a[idpas];
		$id_by=$a[id_by];
		$nama=$a[nama];
		$tgl=$a[tgl];
		$jk=$a[jk];
		}
		echo"
	<form method='post' action='index.php?task=edafby2'>
	<table class='adminlist'>
	<tr>
	<td>
	Nama Pasien :
	</td>

	</tr>

	<tr>
	<td width='50%'>
		";
		$b1=mysql_query("select *from m_pasien where idpas='$idpas'");
		while($b=mysql_fetch_array($b1))
		{$nmpas=$b[nama];}
	/*
	<input type='text' id='kata' name='idpas' onkeyup='lihat(this.value)' size='40'>
	<div id='kotaksugest' style='position:absolute;
	background-color:#eeffee;visibility:hidden;z-index:100'>
	</div>
	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	*/
	echo"
	<b>$nmpas</b>
	</td>

	</tr>

	<tr>
	<td>Nama Bayi</td>
	<td><input type='text' name='nama' value='$nama'></td>
	</tr>

	<tr>
	<td>Tanggal</td>
	<td><input type='text' name='tgl' value='$tgl' ></td>
	</tr>

	<tr>
	<td>Jenis Kelamin
	</td>
	<td>
	<select name='jk'>
	<option value='$jk'>$jk</option>
	<option value='Laki-laki'>Laki-laki</option>
	<option value='Perempuan'>Perempuan</option>
	</select>
	</td>
	</tr>
	<tr>
	<td colspan='2'>
	<input type='hidden' value='$idby'>
	<input type='submit' value='[ GANTI ]'>
	</td>
	</tr>
	</table>";

	}

function edafby2()
	{
	$idby=$_POST['idby'];
	$nama=$_POST['nama'];
	$tgl=$_POST['tgl'];
	$jk=$_POST['jk'];
	$a=mysql_query("update m_pasienby set nama='$nama', tgl='$tgl', jk='$jk' where idby='$idby'");
	if($a)
		{header("Location: index.php?task=mes2&pes=Data Sudah Diganti&alm=$alm");
		}
	else
		{
	echo"ERROR";
		}
	}


function ppp()
	{
	echo"<br>
	<h1>PERNYATAAN PULANG PAKSA</h1>
	<br>
	<form method='post' action='index.php?task=ppp1'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>
	Cari pasien (bayi)
	</td>
	<td>
	<select name='idpas'>
	";
	$a1=myql_query("select *from m_pasienby");
	while($a=mysql_fetch_array($a1))
		{
		echo"
		<option value='$a[id_by]'>$a[nama]-$a[id_by]-
		";
		$b1=mysql_query("select *from m_pasienby where idpas='$a[id_by]'");
		while($b=mysql_fetch_array($b1))
			{
			$nmpas=$b[nama];
			}
		echo"$nmpas-$a[idpas]
		</option>
		";
		}
	echo"
	</select>
	</td>

	<td width='10%'>
	<input type='submit' value=' [ CARI ] '>
	</td>

	</table>
	</form>
	";

	}

function ppp1()
	{
	$idpas=$_POST['idpas'];
	$skr=DATE('d-m-Y');
	$a1=mysql_query("select *from m_pasienby where id_by='$idpas'");
	while($a=mysql_fetch_array($a1))
		{
		$id_by=$a[id_by];
		$idpas=$a[idpas];
		$nama=$a[nama];
		$tgl=$a[tgl];
		$jk=$a[jk];
		$norm=$a[norm];
		$rg=$a[rg];
		}
	echo"<table class='adminlist'>
	<tr>
	<td rowspan='2'>
	<b>PERNYATAAN <br> PULANG PAKSA</b>

	</td>

	<td>Ruang: $rg</td>
	<td>Nomor RM: $norm</td>
	</tr>

	<tr>
	<td>Nama: $nama</td>
	<td>Umur: $umur</td>
	</tr>
	</table>";
	$ada = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_observasi where idpas='$id_by'"),0);
	if ($ada=='0')
		{
	echo"
	<form method='post' action='index.php?task=pppp'>
	<table class='adminlist'>
	<tr>
	<td>
	Saya <select name='ortu'>
	<option value='ayah'>ayah</option>
	<option value='ibu'>ibu</option>
	<option value='keluarga'>keluarga</option>
	</select>
	dari pasien yang bertanda tangan di bawah ini:
	<br>
	<table class='adminlist'>
	<tr>
	<td width='10%'>Nama</td>
	<td><input type='text' name='nama'></td>
	</tr>
	<tr>
	<td width='10%'>Alamat</td>
	<td><input type='text' name='alm'></td>
	</tr>
	</table>
	<br>
	Menyatakan bahwa:
	<br><br>
	Nama: $nama (nama pasien tersebut) atas permintaan kami sendiri pulang/ keluar dari perawatan/ pengobatan RSIA Mardi Waloeja Kauman, kami bertanggungjawab atas segala akibat yang mungkin terjadi atas diri kami, oleh karena menurut dokter belum boleh pulang/ keluar dari RSIA Mardi Waloeja Kauman - Malang
	<br><br>
	<table class='adminlist'>
	<tr>
	<td width='50%' align='left' valign='top'>
	Dokter yang merawat,
	<br><br><br><br>
	<input type='text' name='dok'>
	</td>
	<td width='50%' align='left' valign='top'>
	Malang, <input type='text' name='tgl' value='$skr'>
	<br><br><br><br>
	<input type='text' name='ortuttd'>
	</td>
	</tr>
	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='idpas' value='$id_by'>
	<input type='hidden' name='idby' value='$idby'>
	<input type='submit' value=' [ SIMPAN ] '>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</form>
	";
		}
	else
	{
	$b1=mysql_query("select *from m_pasienplg where idpas='$idpas'");
	while($b=mysql_fetch_array($b))
		{
	//$idby=$b['idby'];
	//$idpas=$_POST['idpas'];
	$id=$b['id'];
	$ortu=$b['ortu'];
	$nama=$b['nama'];
	$alm=$b['alm'];
	$dok=$b['dok'];
	$ortuttd=$b['ortuttd'];
	$tgl=$b['tgl'];
		}
	echo"

	<form method='post' action='index.php?task=eppp'>
	<table class='adminlist'>
	<tr>
	<td>
	Saya <select name='ortu'>
	<option value='$ortu'>$ortu</option>
	<option value='ayah'>ayah</option>
	<option value='ibu'>ibu</option>
	<option value='keluarga'>keluarga</option>
	</select>
	dari pasien yang bertanda tangan di bawah ini:
	<br>
	<table class='adminlist'>
	<tr>
	<td width='10%'>Nama</td>
	<td><input type='text' name='nama' value='$nama'></td>
	</tr>
	<tr>
	<td width='10%'>Alamat</td>
	<td><input type='text' name='alm' value='$alm'></td>
	</tr>
	</table>
	<br>
	Menyatakan bahwa:
	<br><br>
	Nama: $nama (nama pasien tersebut) atas permintaan kami sendiri pulang/ keluar dari perawatan/ pengobatan RSIA Mardi Waloeja Kauman, kami bertanggungjawab atas segala akibat yang mungkin terjadi atas diri kami, oleh karena menurut dokter belum boleh pulang/ keluar dari RSIA Mardi Waloeja Kauman - Malang
	<br><br>
	<table class='adminlist'>
	<tr>
	<td width='50%' align='left' valign='top'>
	Dokter yang merawat,
	<br><br><br><br>
	<input type='text' name='dok' value='$dok'>
	</td>
	<td width='50%' align='left' valign='top'>
	Malang, <input type='text' name='tgl' value='$tgl'>
	<br><br><br><br>
	<input type='text' name='ortuttd'>
	</td>
	</tr>
	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='idpas' value='$id_by'>
	<input type='hidden' name='id' value='$id'>
	<input type='submit' value=' [ GANTI ] '>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</form>
		";
	}

	}

function pppp()
	{
	$idby=$_POST['idby'];
	$idpas=$_POST['idpas'];
	$ortu=$_POST['ortu'];
	$nama=$_POST['nama'];
	$alm=$_POST['alm'];
	$dok=$_POST['dok'];
	$ortuttd=$_POST['ortuttd'];
	$tgl=$_POST['tgl'];

	$a=msyql_query("insert into m_pasienplg values ('', '$idpas', '$ortu', '$nama', '$alm', '$dok', '$ortuttd', '$tgl')");
	if($a)
		{header ("Location: index.php?task=mes&idpas=$idpas&status=$status&alm=ppp1&pes=Data Sudah Masuk");
		}
	else{echo"error";}
	}

function eppp()
	{
		$id=$_POST['id'];
	$idby=$_POST['idby'];
	$idpas=$_POST['idpas'];
	$ortu=$_POST['ortu'];
	$nama=$_POST['nama'];
	$alm=$_POST['alm'];
	$dok=$_POST['dok'];
	$ortuttd=$_POST['ortuttd'];
	$tgl=$_POST['tgl'];

	$a=msyql_query("update m_pasienplg set ortu='$ortu', nama='$nama', alm='$alm', dok='$dok', ortuttd='$ortuttd', tgl='$tgl' where id='$id'");
	if($a)
		{header ("Location: index.php?task=mes&idpas=$idpas&status=$status&alm=ppp1&pes=Data Sudah Diganti");
		}
	else{echo"error";}
	}

function srtmt()
	{
	echo"
	<h1>SURAT KEMATIAN</h1>
	<br>
	<form method='post' action='index.php?task=srt_mt'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>
	Cari pasien (bayi)
	</td>
	<td>
	<select name='idpas'>
	";
	$a1=myql_query("select *from m_pasienby");
	while($a=mysql_fetch_array($a1))
		{
		echo"
		<option value='$a[id_by]'>$a[nama]-$a[id_by]-
		";
		$b1=mysql_query("select *from m_pasien where idpas='$a[idpas]'");
		while($b=mysql_fetch_array($b1))
			{
			$nmpas=$b[nama];
			}
		echo"$nmpas-$a[idpas]
		</option>
		";
		}
	echo"
	</select>
	</td>

	<td width='10%'>
	<input type='submit' value=' [ CARI ] '>
	</td>

	</table>
	</form>
	";
	}

function srt_mt()
	{
	$skr=DATE('d-m-Y');
	$jm=DATE('h:i');
	$idpas=$_POST['idpas'];
	echo"
	<h1>SURAT KEMATIAN</h1>
	<br>
	";
	$ada = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_srtmt where idpas='$idpas'"),0);
	if ($ada=='0')
		{
	echo"
	<form method='post' action='index.php?task=psrt_mt'>
	<table class='adminlist'>
	<tr>
	<td>
	Yang bertanda tangan di bawah ini menerangkan bahwa Dokter penyelidikan mayat <input type='text' name='mayat' size='30'> pada tanggal <input type='text' name='tgl' value='$skr'> mengaku dengan mengingat sumpah telah memeriksa jenazahnya nama <input type='text' name='nama' size='30'>
	<select name='jk'>
	<option value='laki-laki'>laki-laki</option>
	<option value='perempuan'>perempuan</option>
	</select>
	berumur <input type='text' name='umur' size='10'>
	<select name='umur1'>
	<option value='tahun'>tahun</option>
	<option value='bulan'>bulan</option>
	<option value='hari'>hari</option>
	</select>
	alamat <input type='text' name='alm' size='50'>
	jam meninggal <input type='text' name='jm' value='$jm'>
	<select name='wkt'>
	<option value='pagi'>pagi</option>
	<option value='siang'>siang</option>
	<option value='malam'>malam</option>
	</select>
	<table class='adminlist'>
	<tr>
	<td width='50%'>
	</td>
	<td>
	Malang, <input type='text' name='tgl2' value='$skr'>
	<br>
	Dokter yang merawat,
	<br><br><br><br>
	<input type='text' name='dok' size='30'>
	</td>
	</tr>
	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value='[ SIMPAN ]'>
	</td>
	</tr>
	</table>
	<br>
	</td>
	</tr>
	</table>
	";
		}
	else
	{
	$a1=mysql_query("select *from m_srtmt where idpas='$idpas'");
	while($a=mysql_fetch_array($a1))
		{
	$id=$a['id'];
	$mayat=$a['mayat'];
	$tgl=$a['tgl'];
	$nama=$a['nama'];
	$jk=$a['jk'];
	$umur=$a['umur'];
	$umur1=$a['umur1'];
	$alm=$a['alm'];
	$jm1=$a['jm'];
	$wkt=$a['wkt'];
	$tgl2=$a['tgl2'];
	$dok=$a['dok'];
		}
	echo"
	<form method='post' action='index.php?task=esrt_mt'>
	<table class='adminlist'>
	<tr>
	<td>
	Yang bertanda tangan di bawah ini menerangkan bahwa Dokter penyelidikan mayat <input type='text' name='mayat' size='30' value='$mayat'> pada tanggal <input type='text' name='tgl' value='$tgl'> mengaku dengan mengingat sumpah telah memeriksa jenazahnya nama <input type='text' name='nama' size='30' value='$nama'>
	<select name='jk'>
	<option value='$jk'>$jk</option>
	<option value='laki-laki'>laki-laki</option>
	<option value='perempuan'>perempuan</option>
	</select>
	berumur <input type='text' name='umur' size='10' value='$umur'>
	<select name='umur1'>
	<option value='$umur1'>$umur1</option>
	<option value='tahun'>tahun</option>
	<option value='bulan'>bulan</option>
	<option value='hari'>hari</option>
	</select>
	alamat <input type='text' name='alm' size='50' value='$alm'>
	jam meninggal <input type='text' name='jm' value='$jm1'>
	<select name='wkt'>
	<option value='$wkt'>$wkt</option>
	<option value='pagi'>pagi</option>
	<option value='siang'>siang</option>
	<option value='malam'>malam</option>
	</select>
	<table class='adminlist'>
	<tr>
	<td width='50%'>
	</td>
	<td>
	Malang, <input type='text' name='tgl2' value='$tgl2'>
	<br>
	Dokter yang merawat,
	<br><br><br><br>
	<input type='text' name='dok' size='30' value='$dok'>
	</td>
	</tr>
	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='id' value='$id'>
	<input type='submit' value='[ GANTI ]'>
	</td>
	</tr>
	</table>
	<br>
	</td>
	</tr>
	</table>
	";
	}
	}

function psrt_mt()
	{
	$idpas=$_POST['idpas'];
	$mayat=$_POST['mayat'];
	$tgl=$_POST['tgl'];
	$nama=$_POST['nama'];
	$jk=$_POST['jk'];
	$umur=$_POST['umur'];
	$umur1=$_POST['umur1'];
	$alm=$_POST['alm'];
	$jm=$_POST['jm'];
	$wkt=$_POST['wkt'];
	$tgl2=$_POST['tgl2'];
	$dok=$_POST['dok'];
	$a=mysql_query("insert into m_srtmt values('', '$idpas', '$mayat', '$tgl', '$nama', '$jk', '$umur', '$umur1', '$alm', '$jm', '$wkt', '$tgl2', '$dok')");
	if($a)
		{header ("Location: index.php?task=mes&idpas=$idpas&status=$status&alm=srt_mt&pes=Data Sudah Masuk");
		}
	else{echo"error";}
	}

function esrt_mt()
	{
	$id=$_POST['id'];
	$mayat=$_POST['mayat'];
	$tgl=$_POST['tgl'];
	$nama=$_POST['nama'];
	$jk=$_POST['jk'];
	$umur=$_POST['umur'];
	$umur1=$_POST['umur1'];
	$alm=$_POST['alm'];
	$jm=$_POST['jm'];
	$wkt=$_POST['wkt'];
	$tgl2=$_POST['tgl2'];
	$dok=$_POST['dok'];
	$a=mysql_query("update m_srtmt set mayat='$mayat', tgl='$tgl', nama='$nama', jk='$jk', umur='$umur', umur1='$umur1', alm='$alm', jm='$jm', wkt='$wkt', tgl2='$tgl2', dok='$dok' where id='$id'");
	if($a)
		{header ("Location: index.php?task=mes&idpas=$idpas&status=$status&alm=srt_mt&pes=Data Sudah Diganti");
		}
	else{echo"error";}
	}

function rjk()
	{
	echo"
	<h1>Rujukan Penderita</h1>
	<br>
	<form method='post' action='index.php?task=rjk1'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>
	Cari pasien (bayi)
	</td>
	<td>
	<select name='idpas'>
	";
	$a1=myql_query("select *from m_pasienby");
	while($a=mysql_fetch_array($a1))
		{
		echo"
		<option value='$a[id_by]'>$a[nama]-$a[id_by]-
		";
		$b1=mysql_query("select *from m_pasien where idpas='$a[idpas]'");
		while($b=mysql_fetch_array($b1))
			{
			$nmpas=$b[nama];
			}
		echo"$nmpas-$a[idpas]
		</option>
		";
		}
	echo"
	</select>
	</td>

	<td width='10%'>
	<input type='submit' value=' [ CARI ] '>
	</td>

	</table>
	</form>
	";
	}

function rjk1()
	{
	$idpas=$_POST['idpas'];
	$a1=mysql_query("select *from m_pasienby where id_by='$idpas'");
	while($a=mysql_fetch_array($a1))
	{
	$nama=$a[nama];
	$idibu=$a[idpas];
	$jk=$a[jk];
	$norm=$a[norm];
	}
	$b1=mysql_query("select *from m_pasienalm where idpas='$idibu'");
	while($b=mysql_fetch_array($b1))
	{
	$alm=$b[alm];
	$lurah=$b[lurah];
	$kec=$b[kec];
	$kota=$b[kota];
	}
	$ada = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_rjk where idpas='$idpas'"),0);
	if ($ada=='0')
		{
	echo"
	<form method='post' action='index.php?task=prjk'>
	<table class='adminlist'>
	<tr>
	<td width='50%' valign='top'>
	Hal: <i>Rujukan Penderita</i>
	</td>
	<td>
	Kepada<br>
	Yth. <input type='text' name='kpd' size='30'><br>
	di <input type='text' name='di' size='30'>
	</td>
	</tr>
	<tr>
	<td colspan='2'>
	Dengan hormat,<br><br>
	Bersama ini kami kirimkan penderita:
	<br><br>
	</td>
	</tr>
	<tr>
	<td colspan='2'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>No Rekam Medis</td>
	<td>: $norm</td>
	</tr>
	<tr>
	<td width='20%'>Nama</td>
	<td>: $nama $jk Umur:<input type='text' name='umur' size='20'></td>
	</tr>
	<tr>
	<td>Alamat</td>
	<td>$alm, $lurah - $kec - $kota</td>
	</tr>

	<tr>
	<td>Diagnosa</td><td>: <input type='text' name='diag' size='50'></td>
	</tr>
	<tr>
	<td>Anamnese</td><td>: <input type='text' name='ana' size='50'></td>
	</tr>

	<tr>
	<td><u>Keterangan lain-lain</u>
	<br>
	Hasil Pemeriksaan
	</td>
	<td>: <input type='text' name='prk' size='50'></td>
	</tr>
	<tr>
	<td>Terapi</td>
	<td><input type='text' name='trp' size='50'></td>
	</tr>
	<tr>
	<td colspan='2'>
	<br>
	Demikian untuk dapatnya diberikan terapi dan perawatan lanjutan serta terima kasih atas kerjasamanya yang baik.
	</td>
	</tr>
	</table>
	</td>
	</tr>
	<tr>
	<td></td>
	<td>
	";
	$skr=date('d-m-Y');
	echo"
	Malang, <input type='text' name='tgl' value='$skr'>
	<br>Salam sejawat, <br><br><br><br>
	(<input type='text' name='dok' value='dok ' size='30'>)
	</td>

	</tr>
	<tr>
	<td colspan='2'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value='[ SIMPAN ]'>
	</td>
	</tr>
	</table>
	</form>
	";
		}
	else
		//////////////////////////////////////////////////////////////////////////
	{
	$c1=mysql_query("select *from m_rjk where idpas='$idpas'");
	while($c=mysql_fetch_array($c1))
		{
		$id=$_POST['id'];
	$kpd=$c['kpd'];
	$di=$c['di'];
	$umur=$c['umur'];
	$diag=$c['diag'];
	$ana=$c['ana'];
	$prk=$c['prk'];
	$trp=$c['trp'];
	$tgl=$c['tgl'];
	$dok=$c['dok'];
		}
	echo"
	<form method='post' action='index.php?task=erjk'>
	<table class='adminlist'>
	<tr>
	<td width='50%' valign='top'>
	Hal: <i>Rujukan Penderita</i>
	</td>
	<td>
	Kepada<br>
	Yth. <input type='text' name='kpd' size='30' value='$kpd'><br>
	di <input type='text' name='di' size='30' value='di'>
	</td>
	</tr>
	<tr>
	<td colspan='2'>
	Dengan hormat,<br><br>
	Bersama ini kami kirimkan penderita:
	<br><br>
	</td>
	</tr>
	<tr>
	<td colspan='2'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>No Rekam Medis</td>
	<td>: $norm</td>
	</tr>
	<tr>
	<td width='20%'>Nama</td>
	<td>: $nama $jk Umur:<input type='text' name='umur' value='$umur' size='20'></td>
	</tr>
	<tr>
	<td>Alamat</td>
	<td>$alm, $lurah - $kec - $kota</td>
	</tr>

	<tr>
	<td>Diagnosa</td><td>: <input type='text' name='diag' size='50' value='$diag'></td>
	</tr>
	<tr>
	<td>Anamnese</td><td>: <input type='text' name='ana' size='50' value='$ana'></td>
	</tr>

	<tr>
	<td><u>Keterangan lain-lain</u>
	<br>
	Hasil Pemeriksaan
	</td>
	<td>: <input type='text' name='prk' size='50' value='$prk'></td>
	</tr>
	<tr>
	<td>Terapi</td>
	<td><input type='text' name='trp' size='50' value='$trp'></td>
	</tr>
	<tr>
	<td colspan='2'>
	<br>
	Demikian untuk dapatnya diberikan terapi dan perawatan lanjutan serta terima kasih atas kerjasamanya yang baik.
	</td>
	</tr>
	</table>
	</td>
	</tr>
	<tr>
	<td></td>
	<td>
	";
	$skr=date('d-m-Y');
	echo"
	Malang, <input type='text' name='tgl' value='$tgl'>
	<br>Salam sejawat, <br><br><br><br>
	(<input type='text' name='dok' value='dok ' value='$dok' size='30'>)
	</td>

	</tr>
	<tr>
	<td colspan='2'>
	<input type='hidden' name='id' value='$id'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value='[ SIMPAN ]'>
	</td>
	</tr>
	</table>
	</form>
	";
	}
	}

function prjk()
	{
	$idpas=$_POST['idpas'];
	$kpd=$_POST['kpd'];
	$di=$_POST['di'];
	$umur=$_POST['umur'];
	$diag=$_POST['diag'];
	$ana=$_POST['ana'];
	$prk=$_POST['prk'];
	$trp=$_POST['trp'];
	$tgl=$_POST['tgl'];
	$dok=$_POST['dok'];
	$a=mysql_query("insert into m_rjk values ('', '$idpas', '$kpd', '$di', '$umur', '$diag', '$ana', '$prk', '$trp', '$tgl', '$dok')");
	if($a)
		{header ("Location: index.php?task=mes&idpas=$idpas&status=$status&alm=rjk1&pes=Data Sudah Masuk");
		}
	else{echo"error";}
	}

function erjk()
	{
	$id=$_POST['id'];
	$idpas=$_POST['idpas'];
	$kpd=$_POST['kpd'];
	$di=$_POST['di'];
	$umur=$_POST['umur'];
	$diag=$_POST['diag'];
	$ana=$_POST['ana'];
	$prk=$_POST['prk'];
	$trp=$_POST['trp'];
	$tgl=$_POST['tgl'];
	$dok=$_POST['dok'];
	$a=mysql_query("update m_rjk set kpd='$kpd', di='$di', umur='$umur', diag='$diag', ana='$ana', prk='$prk', trp='$trp', tgl='$tgl', dok='$dok' where id='$id'");
	if($a)
		{header ("Location: index.php?task=mes&idpas=$idpas&status=$status&alm=rjk1&pes=Data Sudah Diganti");
		}
	else{echo"error";}
	}

function bp()
	{
	echo"
	<h1>Biaya Perawatan Bayi</h1>
	<br>
	<form method='post' action='index.php?task=rjk1'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>
	Cari pasien (bayi)
	</td>
	<td>
	<select name='idpas'>
	";
	$a1=myql_query("select *from m_pasienby");
	while($a=mysql_fetch_array($a1))
		{
		echo"
		<option value='$a[id_by]'>$a[nama]-$a[id_by]-
		";
		$b1=mysql_query("select *from m_pasien where idpas='$a[idpas]'");
		while($b=mysql_fetch_array($b1))
			{
			$nmpas=$b[nama];
			}
		echo"$nmpas-$a[idpas]
		</option>
		";
		}
	echo"
	</select>
	</td>

	<td width='10%'>
	<input type='submit' value=' [ CARI ] '>
	</td>

	</table>
	</form>
	";
	}

function bp1()
	{
	$idpas=$_POST['idpas'];

	echo"
	<h1>Biaya Perawatan Bayi</h1>
	<br>

	";
	$a1=mysql_query("select *from m_pasienby where id_by='$idpas'");
	while($a=mysql_fetch_array($a1))
	{
	$nama=$a[nama];
	$idibu=$a[idpas];
	$jk=$a[jk];
	$norm=$a[norm];
	$rg=$a[rg];
	}
	$b1=mysql_query("select *from m_pasienalm where idpas='$idibu'");
	while($b=mysql_fetch_array($b1))
	{
	$alm=$b[alm];
	$lurah=$b[lurah];
	$kec=$b[kec];
	$kota=$b[kota];
	}
	$ada = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_byb where idpas='$idpas'"),0);
	if ($ada=='0')
		{
	echo"
	<form method='post' action='index.php?task=pbp1'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nama</td>
	<td>$nama</td>
	</tr>
	<tr>
	<td>Alamat</td>
	<td>$alm, $lurah - $kec - $kota</td>
	</tr>
	<tr>
	<td>Klas</td>
	<td>
	";
	$x1=mysql_query("select *from m_konfrg where id='$rg'");
	while($x=mysql_fetch_array($x1))
			{
			$nm_rg=$x[nm_rg];
			$kls_rg=$x[kls_rg];
			}
	echo"$kls_rg/ $nm_rg
	</td>
	</tr>
	<tr>
	<td>Tgl Rawat</td>
	<td><input type='text' name='tglrwt'> s/d <input type='text' name='tglklr'></td>
	</tr>
	<tr>
	<td>Lama rawat</td>
	<td><input type='text' name='lmrwt'></td>
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
	else
	{
	$c1=mysql_query("select *from m_byb where idpas='$idpas'");
	while($c=mysql_fetch_array($C1))
	{
	$tglrwt=$c[tglrwt];
	$tglklr=$c[tglklr];
	$lmrwt=$c[lmrwt];
	}

	echo"
	<form method='post' action='index.php?task=ebp1'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nama</td>
	<td>$nama</td>
	</tr>
	<tr>
	<td>Alamat</td>
	<td>$alm, $lurah - $kec - $kota</td>
	</tr>
	<tr>
	<td>Klas</td>
	<td>
	";
	$y1=mysql_query("select *from m_konfrg where id='$rg'");
	while($y=mysql_fetch_array($y1))
			{
			$nm_rg=$y[nm_rg];
			$kls_rg=$y[kls_rg];
			}
	echo"$kls_rg/ $nm_rg</td>
	</tr>
	<tr>
	<td>Tgl Rawat</td>
	<td><input type='text' name='tglrwt' value='$tglrwt'> s/d <input type='text' name='tglklr' value='$tglrwt'></td>
	</tr>
	<tr>
	<td>Lama rawat</td>
	<td><input type='text' name='lmrwt' value='$lmrwt'></td>
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
	////////////////////////////////
	$ada2 = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_byb1 where idpas='$idpas'"),0);
	if ($ada2=='0')
		{
	echo"
	<form method='post' action='index.php?task=pbp'>
	<table class='adminlist'>
	<tr>
	<td width='50%' align='center'><b>URAIAN</b></td>
	<td align='center'><b>BIAYA</b></td>
	</tr>
	<tr>
	<td>dr.<input type='text' name='dra'></td>
	<td>Rp. <input type='text' name='bdra'></td>
	</tr>
	<tr>
	<td>dr.<input type='text' name='drb'></td>
	<td>Rp. <input type='text' name='bdrb'></td>
	</tr>
	<tr>
	<td>dr.<input type='text' name='drc'></td>
	<td>Rp. <input type='text' name='bdrc'></td>
	</tr>
	<tr>
	<td>dr.<input type='text' name='drd'></td>
	<td>Rp. <input type='text' name='bdrd'></td>
	</tr>
	<tr>
	<td>dr.<input type='text' name='dre'></td>
	<td>Rp. <input type='text' name='bdre'></td>
	</tr>
	<tr>
	<td>dr.<input type='text' name='drf'></td>
	<td>Rp. <input type='text' name='bdrf'></td>
	</tr>
	<tr>
	<td>Prwt. <input type='text' name='hprw'> hari @ Rp <input type='text' name='hgprw'></td>
	<td>Rp. <input type='text' name='jmprw'></td>
	</tr>
	<tr>
	<td>Prwt. by/anak<input type='text' name='hprw1'> hari @ Rp <input type='text' name='hgprw1'></td>
	<td>Rp. <input type='text' name='jmprw1'></td>
	</tr>
	<tr>
	<td>Prwt. Khusus<input type='text' name='prwk'> </td>
	<td>Rp. <input type='text' name='jmprwk'></td>
	</tr>
	<tr>
	<td>Alat-alat<input type='text' name='alat'> </td>
	<td>Rp. <input type='text' name='balat'></td>
	</tr>
	<tr>
	<td>Suntik <input type='text' name='suntik'> </td>
	<td>Rp. <input type='text' name='bsuntik'></td>
	</tr>
	<tr>
	<td>Obat-obatan <input type='text' name='obat'> </td>
	<td>Rp. <input type='text' name='bobat'></td>
	</tr>
	<tr>
	<td>Laborat <input type='text' name='labor'> </td>
	<td>Rp. <input type='text' name='blabor'></td>
	</tr>
	<tr>
	<td>Kapas-gaas-pemi<input type='text' name='kapas'> </td>
	<td>Rp. <input type='text' name='bkapas'></td>
	</tr>
	<tr>
	<td>Cucian<input type='text' name='cuci'> </td>
	<td>Rp. <input type='text' name='bcuci'></td>
	</tr>
	<tr>
	<td>Administrasi<input type='text' name='admin'> </td>
	<td>Rp. <input type='text' name='badmin'></td>
	</tr>
	<tr>
	<td>Rehabilitasi<input type='text' name='rehab'> </td>
	<td>Rp. <input type='text' name='brehab'></td>
	</tr>
	<tr>
	<td>Telepon<input type='text' name='telp'> </td>
	<td>Rp. <input type='text' name='btelp'></td>
	</tr>
	<tr>
	<td>Ambulan<input type='text' name='amb'> </td>
	<td>Rp. <input type='text' name='bamb'></td>
	</tr>
	<tr>
	<td>Lain :</td>
	<td></td>
	</tr>
	<tr>
	<td><input type='text' name='lain1'> </td>
	<td>Rp. <input type='text' name='blain1'></td>
	</tr>
	<tr>
	<td><input type='text' name='lain2'> </td>
	<td>Rp. <input type='text' name='blain2'></td>
	</tr>
	<tr>
	<td><input type='text' name='lain3'> </td>
	<td>Rp. <input type='text' name='blain3'></td>
	</tr>
	<tr>
	<td><input type='text' name='lain4'> </td>
	<td>Rp. <input type='text' name='blain4'></td>
	</tr>
	<tr>
	<td>Kwt No <input type='text' name='kwt'> </td>
	<td>Jumlah</td>
	</tr>
	<tr>
	<td colspan='2'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value='[ SIMPAN ]'>
	</td>
	</tr>
	</table>
	</form>
	";
		}
	else
	{
	$d1=mysql_query("select *from m_byb1 where idpas='$idpas'");
	while($d=mysql_fetch_array($d1))
		{
	$dra=$d['dra'];
	$drb=$d['drb'];
	$drc=$d['drc'];
	$drd=$d['drd'];
	$dre=$d['dre'];
	$drf=$d['drf'];
	$bdra=$d['bdra'];
	$bdrb=$d['bdrb'];
	$bdrc=$d['bdrc'];
	$bdrd=$d['bdrd'];
	$bdre=$d['bdre'];
	$bdrf=$d['bdrf'];
		}
		$jmla=$bdra+$bdrb+$bdrc+$brd+$bdre+$bdrf;
	$e1=mysql_query("select *from m_byb2 where idpas='$idpas'");
	while($e=mysql_fetch_array($e1))
		{
	$hprw=$e['hprw'];
	$hgprw=$e['hgprw'];
	$jmprw=$e['jmprw'];
	$hprw1=$e['hprw1'];
	$hgprw1=$e['hgprw1'];
	$jmprw1=$e['jmprw1'];
	$prwk=$e['prwk'];
	$jmprwk=$e['jmprwk'];
		}
		$jmlb=$jmprw+$jmprw1+$jmprwk;
	$f1=mysql_query("select *from m_byb3 where idpas='$idpas'");
	while($f=mysql_fetch_array($f1))
		{
	$alat=$f['alat'];
	$balat=$f['balat'];
	$suntik=$f['suntik'];
	$bsuntik=$f['bsuntik'];
	$obat=$f['obat'];
	$bobat=$f['bobat'];
	$labor=$f['labor'];
	$blabor=$f['blabor'];
	$kapas=$f['kapas'];
	$bkapas=$f['bkapas'];
		}
		$jmlc=$balat+$bsuntik+$bobat+$blabor+$bkapas;
	$g1=mysql_query("select *from m_byb4 where idpas='$idpas'");
	while($g=mysql_fetch_array($g1))
		{
	$cuci=$g['cuci'];
	$bcuci=$g['bcuci'];
	$admin=$g['admin'];
	$badmin=$g['badmin'];
	$rehab=$g['rehab'];
	$brehab=$g['brehab'];
	$telp=$g['telp'];
	$btelp=$g['btelp'];
	$amb=$g['amb'];
	$bamb=$g['bamb'];
		}
		$jmld=$bcuci+$badmin+$brehab+$btelp+$bamb;
	$h1=mysql_query("select *from m_byb5 where idpas='$idpas'");
	while($h=mysql_fetch_array($h1))
		{
	$lain1=$h['lain1'];
	$lain2=$h['lain2'];
	$lain3=$h['lain3'];
	$lain4=$h['lain4'];
	$blain1=$h['blain1'];
	$blain2=$h['blain2'];
	$blain3=$h['blain3'];
	$blain4=$h['blain4'];
	$kwt=$h['kwt'];
		}
		$jmle=$blain1+$blain2+$blain3+$blain4;
		$jml=$jmla+$jmlb+$jmlc+$jmld+$jmle;
	echo"
	<form method='post' action='index.php?task=ebp'>
	<table class='adminlist'>
	<tr>
	<td width='50%' align='center'><b>URAIAN</b></td>
	<td align='center'><b>BIAYA</b></td>
	</tr>
	<tr>
	<td>dr.<input type='text' name='dra' value='$dra'></td>
	<td>Rp. <input type='text' name='bdra' value='$bdra'></td>
	</tr>
	<tr>
	<td>dr.<input type='text' name='drb' value='$drb'></td>
	<td>Rp. <input type='text' name='bdrb' value='$bdrb'></td>
	</tr>
	<tr>
	<td>dr.<input type='text' name='drc' value='$drc'></td>
	<td>Rp. <input type='text' name='bdrc' value='$bdrc'></td>
	</tr>
	<tr>
	<td>dr.<input type='text' name='drd' value='$drd'></td>
	<td>Rp. <input type='text' name='bdrd' value='$bdrd'></td>
	</tr>
	<tr>
	<td>dr.<input type='text' name='dre' value='$dre'></td>
	<td>Rp. <input type='text' name='bdre' value='$bdre'></td>
	</tr>
	<tr>
	<td>dr.<input type='text' name='drf' value='$drf'></td>
	<td>Rp. <input type='text' name='bdrf' value='$bdrf'></td>
	</tr>
	<tr>
	<td>Prwt. <input type='text' name='hprw' value='$hprw'> hari @ Rp <input type='text' name='hprw' value='$hprw'></td>
	<td>Rp. <input type='text' name='jmprw' value='$jmprw'></td>
	</tr>
	<tr>
	<td>Prwt. by/anak<input type='text' name='hprw1' value='$hprw1'> hari @ Rp <input type='text' name='hgprw1' value='$hgprw1'></td>
	<td>Rp. <input type='text' name='jmprw1' value='$jmprw1'></td>
	</tr>
	<tr>
	<td>Prwt. Khusus<input type='text' name='prwk' value='$prwk'> </td>
	<td>Rp. <input type='text' name='jmprwk' value='$jmprwk'></td>
	</tr>
	<tr>
	<td>Alat-alat<input type='text' name='alat' value='$alat'> </td>
	<td>Rp. <input type='text' name='balat' value='$balat'></td>
	</tr>
	<tr>
	<td>Suntik <input type='text' name='suntik' value='$suntik'> </td>
	<td>Rp. <input type='text' name='bsuntik' value='$bsuntik'></td>
	</tr>
	<tr>
	<td>Obat-obatan <input type='text' name='obat' value='$obat'> </td>
	<td>Rp. <input type='text' name='bobat' value='$bobat'></td>
	</tr>
	<tr>
	<td>Laborat <input type='text' name='labor' value='$labor'> </td>
	<td>Rp. <input type='text' name='blabor' value='$blabor'></td>
	</tr>
	<tr>
	<td>Kapas-gaas-pemi<input type='text' name='kapas' value='$kapas'> </td>
	<td>Rp. <input type='text' name='bkapas' value='$bkapas'></td>
	</tr>
	<tr>
	<td>Cucian<input type='text' name='cuci' value='$cuci'> </td>
	<td>Rp. <input type='text' name='bcuci' value='$bcuci'></td>
	</tr>
	<tr>
	<td>Administrasi<input type='text' name='admin' value='$admin'> </td>
	<td>Rp. <input type='text' name='badmin' value='$badmin'></td>
	</tr>
	<tr>
	<td>Rehabilitasi<input type='text' name='rehab' value='$rehab'> </td>
	<td>Rp. <input type='text' name='brehab' value='$brehab'></td>
	</tr>
	<tr>
	<td>Telepon<input type='text' name='telp' value='$telp'> </td>
	<td>Rp. <input type='text' name='btelp' value='$btelp'></td>
	</tr>
	<tr>
	<td>Ambulan<input type='text' name='amb' value='$amb'> </td>
	<td>Rp. <input type='text' name='bamb' value='$bamb'></td>
	</tr>
	<tr>
	<td>Lain :</td>
	<td></td>
	</tr>
	<tr>
	<td><input type='text' name='lain1' value='$lain1'> </td>
	<td>Rp. <input type='text' name='blain1' value='$blain1'></td>
	</tr>
	<tr>
	<td><input type='text' name='lain2' value='$lain2'> </td>
	<td>Rp. <input type='text' name='blain2' value='$blain2'></td>
	</tr>
	<tr>
	<td><input type='text' name='lain3' value='$lain3'> </td>
	<td>Rp. <input type='text' name='blain3' value='$blain3'></td>
	</tr>
	<tr>
	<td><input type='text' name='lain4' value='$lain4'> </td>
	<td>Rp. <input type='text' name='blain4' value='$blain4'></td>
	</tr>
	<tr>
	<td>Kwt No <input type='text' name='kwt' value='$kwt'> </td>
	<td>$jml</td>
	</tr>
	<tr>
	<td colspan='2'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value='[ SIMPAN ]'>
	</td>
	</tr>
	</table>
	</form>
	";
	}
	}

function pbp()
	{
	$idpas=$_POST['idpas'];
	$dra=$_POST['dra'];
	$drb=$_POST['drb'];
	$drc=$_POST['drc'];
	$drd=$_POST['drd'];
	$dre=$_POST['dre'];
	$drf=$_POST['drf'];
	$bdra=$_POST['bdra'];
	$bdrb=$_POST['bdrb'];
	$bdrc=$_POST['bdrc'];
	$bdrd=$_POST['bdrd'];
	$bdre=$_POST['bdre'];
	$bdrf=$_POST['bdrf'];

	$hprw=$_POST['hprw'];
	$hgprw=$_POST['hgprw'];
	$jmprw=$_POST['jmprw'];
	$hprw1=$_POST['hprw1'];
	$hgprw1=$_POST['hgprw1'];
	$jmprw1=$_POST['jmprw1'];
	$prwk=$_POST['prwk'];
	$jmprwk=$_POST['jmprwk'];

	$alat=$_POST['alat'];
	$balat=$_POST['balat'];
	$suntik=$_POST['suntik'];
	$bsuntik=$_POST['bsuntik'];
	$obat=$_POST['obat'];
	$bobat=$_POST['bobat'];
	$labor=$_POST['labor'];
	$blabor=$_POST['blabor'];
	$kapas=$_POST['kapas'];
	$bkapas=$_POST['bkapas'];

	$cuci=$_POST['cuci'];
	$bcuci=$_POST['bcuci'];
	$admin=$_POST['admin'];
	$badmin=$_POST['badmin'];
	$rehab=$_POST['rehab'];
	$brehab=$_POST['brehab'];
	$telp=$_POST['telp'];
	$btelp=$_POST['btelp'];
	$amb=$_POST['amb'];
	$bamb=$_POST['bamb'];

	$lain1=$_POST['lain1'];
	$lain2=$_POST['lain2'];
	$lain3=$_POST['lain3'];
	$lain4=$_POST['lain4'];
	$blain1=$_POST['blain1'];
	$blain2=$_POST['blain2'];
	$blain3=$_POST['blain3'];
	$blain4=$_POST['blain4'];
	$kwt=$_POST['kwt'];


	if($dra=='')
		{	echo"Data yang Anda masukkan kurang lengkap, <a href='javascript:history.back(-1)'>[kembali]</a>";}
	else
	{
	$a=mysql_query("insert into m_byb1 values('', '$idpas', '$dra', '$drb', '$drc', '$drd', '$dre', '$bdra', '$bdrb', '$bdrc', '$bdrd', '$bdre')");
	$b=mysql_query("insert into m_byb2 values ('$idpas', '$hprw', '$hgprw', '$jmprw', '$hprw1', '$hgprw1', '$jmprw1', '$prwk', '$jmprwk')");
	$c=mysql_query("insert into m_byb3 values ('$idpas', '$alat', '$balat', '$suntik' , '$bsuntik', '$obat', '$bobat', '$labor', '$blabor', '$kapas', '$bkapas')");
	$d=mysql_query("insert into m_byb4 values ('idpas', '$cuci', '$bcuci', '$admin', '$badmin', '$rehab', '$brehab', '$telp', '$btelp', '$amb', '$bamb')");
	$e=mysql_query("insert into m_byb5 values ('$idpas', '$lain1', '$lain2', '$lain3', '$lain4', '$blain1', '$blain2', '$blain3', '$blain4', '$kwt')");
	if ($a and $b and $c and $d and $e)
		{
		header ("Location: index.php?task=mes&idpas=$idpas&status=$status&alm=bp1&pes=Data Sudah Masuk");

		}
	else
		{
		echo"error";
		}
	}
	}

function ebp()
	{
	$idpas=$_POST['idpas'];
	$dra=$_POST['dra'];
	$drb=$_POST['drb'];
	$drc=$_POST['drc'];
	$drd=$_POST['drd'];
	$dre=$_POST['dre'];
	$drf=$_POST['drf'];
	$bdra=$_POST['bdra'];
	$bdrb=$_POST['bdrb'];
	$bdrc=$_POST['bdrc'];
	$bdrd=$_POST['bdrd'];
	$bdre=$_POST['bdre'];
	$bdrf=$_POST['bdrf'];

	$hprw=$_POST['hprw'];
	$hgprw=$_POST['hgprw'];
	$jmprw=$_POST['jmprw'];
	$hprw1=$_POST['hprw1'];
	$hgprw1=$_POST['hgprw1'];
	$jmprw1=$_POST['jmprw1'];
	$prwk=$_POST['prwk'];
	$jmprwk=$_POST['jmprwk'];

	$alat=$_POST['alat'];
	$balat=$_POST['balat'];
	$suntik=$_POST['suntik'];
	$bsuntik=$_POST['bsuntik'];
	$obat=$_POST['obat'];
	$bobat=$_POST['bobat'];
	$labor=$_POST['labor'];
	$blabor=$_POST['blabor'];
	$kapas=$_POST['kapas'];
	$bkapas=$_POST['bkapas'];

	$cuci=$_POST['cuci'];
	$bcuci=$_POST['bcuci'];
	$admin=$_POST['admin'];
	$badmin=$_POST['badmin'];
	$rehab=$_POST['rehab'];
	$brehab=$_POST['brehab'];
	$telp=$_POST['telp'];
	$btelp=$_POST['btelp'];
	$amb=$_POST['amb'];
	$bamb=$_POST['bamb'];

	$lain1=$_POST['lain1'];
	$lain2=$_POST['lain2'];
	$lain3=$_POST['lain3'];
	$lain4=$_POST['lain4'];
	$blain1=$_POST['blain1'];
	$blain2=$_POST['blain2'];
	$blain3=$_POST['blain3'];
	$blain4=$_POST['blain4'];
	$kwt=$_POST['kwt'];

	$a=mysql_query("update m_byb1 set dra='$dra', drb='$drb', drc='$drc', drd='$drd', dre='$dre', bdra='$bdra', bdrb='$bdrb', bdrc='$bdrc', bdrd='$bdrd', bdre='$bdre' where idpas='$idpas'");
	$b=mysql_query("update m_byb2 set hprw='$hprw', hgprw='$hgprw', jmprw='$jmprw', hprw1='$hprw1', hgprw1='$hgprw1', jmprw1='$jmprw1', prwk='$prwk', jmprwk='$jmprwk' where idpas='$idpas'");
	$c=mysql_query("update m_byb3 set alat='$alat', balat='$balat', suntik='$suntik', bsuntik='$bsuntik', obat='$obat', bobat='$bobat', labor='$labor', blabor='$blabor', kapas='$kapas', bkapas='$bkapas' where idpas='$idpas'");
	$d=mysql_query("update m_byb4 set cuci='$cuci', bcuci='$bcuci', admin='$admin', badmin='$badmin', rehab='$rehab', brehab='$brehab', telp='$telp', btelp='$btelp', amb='$amb', bamb='$bamb' where idpas='$idpas'");
	$e=mysql_query("update m_byb5 set lain1='$lain1', lain2='$lain2', lain3='$lain3', lain4='$lain4', blain1='$blain1', blain2='$blain2', blain3='$blain3', blain4='$blain4', kwt='$kwt' where idpas='$idpas'");
	if ($a and $b and $c and $d and $e)
		{
		header ("Location: index.php?task=mes&idpas=$idpas&status=$status&alm=bp1&pes=Data Sudah Diganti");

		}
	else
		{
		echo"error";
		}

	}


function pbp1()
	{
	$idpas=$_POST['idpas'];
	$tglrwt=$_POST['tglrwt'];
	$tglklr=$_POST['tglklr'];
	$lmrwt=$_POST['lmrwt'];
	$a=mysql_query("insert into m_byb values ('', '$idpas', '$tglrwt', '$tglklr', '$lmrwt')");
	if ($a)
		{
		header ("Location: index.php?task=mes&idpas=$idpas&status=$status&alm=bp1&pes=Data Sudah Masuk");

		}
	else
		{
		echo"error";
		}
	}

function ebp1()
	{
	$idpas=$_POST['idpas'];
	$tglrwt=$_POST['tglrwt'];
	$tglklr=$_POST['tglklr'];
	$lmrwt=$_POST['lmrwt'];
	$a=mysql_query("update m_byb set tglrwt='$tglrwt', tglklr='$tglklr', lmrwt='$lmrwt' where idpas='$idpas'");
	if ($a)
		{
		header ("Location: index.php?task=mes&idpas=$idpas&status=$status&alm=bp1&pes=Data Sudah Diganti");

		}
	else
		{
		echo"error";
		}
	}

function byalkes()
	{
	echo"
	<h1>Pemakaian Obat/Alkes/Susu Kamar Bayi</h1>
	<br>
	<form method='post' action='index.php?task=rjk1'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>
	Cari pasien (bayi)
	</td>
	<td>
	<select name='idpas'>
	";
	$a1=myql_query("select *from m_pasienby");
	while($a=mysql_fetch_array($a1))
		{
		echo"
		<option value='$a[id_by]'>$a[nama]-$a[id_by]-
		";
		$b1=mysql_query("select *from m_pasien where idpas='$a[idpas]'");
		while($b=mysql_fetch_array($b1))
			{
			$nmpas=$b[nama];
			}
		echo"$nmpas-$a[idpas]
		</option>
		";
		}
	echo"
	</select>
	</td>

	<td width='10%'>
	<input type='submit' value=' [ CARI ] '>
	</td>

	</table>
	</form>
	";
	}

function by_alkes()
	{
	$idpas=$_POST['idpas'];
	$a1=mysql_query("select *from m_pasienby where id_by='$idpas'");
	while($a=mysql_fetch_array($a1))
	{
	$nama=$a[nama];
	$idibu=$a[idpas];
	$jk=$a[jk];
	$norm=$a[norm];
	$rg=$a[rg];
	}
	$b1=mysql_query("select *from m_pasienalm where idpas='$idibu'");
	while($b=mysql_fetch_array($b1))
	{
	$alm=$b[alm];
	$lurah=$b[lurah];
	$kec=$b[kec];
	$kota=$b[kota];
	}
	$skr=date('d-m-Y');
	echo"
	<h1>Pemakaian Obat/Alkes/Susu Kamar Bayi</h1>
	<br>
	<table class='adminlist'>
	<tr>
	<td width='10%'>Nama</td><td>:$nama</td>
	<td width='10%'>Tanggal</td><td>$skr</td>
	</tr>
	<tr>
	<td colspan='2'>Kelas</td>
	<td colspan='2'>";
	$y1=mysql_query("select *from m_konfrg where id='$rg'");
	while($y=mysql_fetch_array($y1))
			{
			$nm_rg=$y[nm_rg];
			$kls_rg=$y[kls_rg];
			}
	echo"$kls_rg/ $nm_rg</td>

	</tr>
	</table>
	";
	///tambah data
	echo"
	<form method='post' action='index.php?task=pby_alkes'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Tanggal</td>
	<td><input type='text' name='tgl' value='$skr'></td>
	</tr>
	<tr>
	<td width='20%'>Nama barang</td>
	<td>
	<input type='text' id='katao' name='idobt' onkeyup='lihato(this.value)' size='40'>
	<div id='kotaksugesto' style='position:absolute;
	background-color:#eeffee;visibility:hidden;z-index:100'>
	</div>
	</td>
	</tr>
	<tr>
	<td>Jumlah</td>
	<td><input type='text' name='jml'></td>
	</tr>
	<tr>
	<td colspan='2'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value='SIMPAN'>
	</td>
	</tr>
	</table>
	</form>
	";
	/////////////////////////////DATA
	echo"
	<br><br>
	<table class='adminlist'>
	<tr>
	<td>Nama Barang</td>
	<td>Jumlah</td>
	<td>Harga</td>
	<td>Edit</td>
	<td>Hapus</td>
	</tr>
	";
	$c1=mysql_query("select *from m_byalkes, m_obt where m_byalkes.idobt=m_obt.id and m_byalkes.idpas='$idpas'");
	while($c=mysql_fetch_array($c1))
		{
		echo"
		<tr>
		<td>$c[nama]</td>
		<td>$c[jml]</td>
		<td>";
		$harga=$c[hgjual]*$c[jml];
		echo"
		$harga
		</td>
		<td><a href='index.php?task=eby_alkes&id=$c[idbyalkes]&idpas=$idpas'>Edit</a></td>
		<td><a href='index.php?task=delb&id=$c[idbyalkes]&alm=by_alkes&db=byalkes&idpas=$idpas'>hapus</a></td>
		</tr>
		";
		}
	echo"
	</table>
	";
	}

function pby_alkes()
	{
	$idpas=$_POST['idpas'];
	$idobt=$_POST['idobt'];
	$jml=$_POST['jml'];
	$tgl=$_POST['tgl'];
	$a=mysql_query("insert into m_byalkes values ('',  '$idpas', '$idobt', '$jml', '$tgl')");

	if ($a)
		{
		header ("Location: index.php?task=mes&idpas=$idpas&status=$status&alm=by_alkes&pes=Data Sudah Masuk");

		}
	else
		{
		echo"error";
		}
	}

function eby_alkes()
	{
	$id=$_GET['id'];
	$idpas=$_GET['idpas'];
	$c1=mysql_query("select *from m_byalkes, m_obt where m_byalkes.idobt=m_obt.id and m_byalkes.idbyalkes='$id'");
	while($c=mysql_fetch_array($c1))
		{
		$idobt=$c[idobt];
		$jml=$c[jml];
		$tgl=$c[tgl];
		$nama=$c[nama];
		}
		$harga=$c[hgjual]*$c[jml];
	echo"
	<form method='post' action='index.php?task=pby_alkes'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Tanggal</td>
	<td><input type='text' name='tgl' value='$tgl'></td>
	</tr>
	<tr>
	<td width='20%'>Nama barang</td>
	<td>
	$nama
	</td>
	</tr>
	<tr>
	<td>Jumlah</td>
	<td><input type='text' name='jml' value='$jml'></td>
	</tr>
	<tr>
	<td>Harga</td>
	<td>$harga</td>
	</tr>

	<tr>
	<td colspan='2'>
	<input type='hidden' name='id' value='$id'>
	<input type='submit' value='[ GANTI ]'>
	</td>
	</tr>
	</table>
	</form>
	";
	}

function eby_alkes2()
	{
	$id=$_POST['id'];
	$jml=$_POST['jml'];
	$tgl=$_POST['tgl'];
	$a=mysql_query("update m_akesby set jml='$jml', tgl='$tgl' where idbyalkes='$id'");
	if ($a)
		{
		header ("Location: index.php?task=mes&idpas=$idpas&status=$status&alm=by_alkes&pes=Data Sudah Diganti");

		}
	else
		{
		echo"error";
		}
	}


function blsusu()
	{
	echo"
	<h1>Pembelian Susu</h1>
	<br>
	<form method='post' action='index.php?task=bl_susu'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>
	Cari pasien (bayi)
	</td>
	<td>
	<select name='idpas'>
	";
	$a1=myql_query("select *from m_pasienby");
	while($a=mysql_fetch_array($a1))
		{
		echo"
		<option value='$a[id_by]'>$a[nama]-$a[id_by]-
		";
		$b1=mysql_query("select *from m_pasien where idpas='$a[idpas]'");
		while($b=mysql_fetch_array($b1))
			{
			$nmpas=$b[nama];
			}
		echo"$nmpas-$a[idpas]
		</option>
		";
		}
	echo"
	</select>
	</td>

	<td width='10%'>
	<input type='submit' value=' [ CARI ] '>
	</td>

	</table>
	</form>
	";
	}

function bl_susu()
	{
	$idpas=$_POST['idpas'];
	$a1=mysql_query("select *from m_pasienby where id_by='$idpas'");
	while($a=mysql_fetch_array($a1))
	{
	$nama=$a[nama];
	$idibu=$a[idpas];
	$jk=$a[jk];
	$norm=$a[norm];
	}
	$skr=date('d-m-Y');
	echo"
	<form method='index.php?task=pbl_susu'>
	<table class='adminlist'>
	<tr>
	<td width='10%'>Nama</td>
	<td>$nama</td>
	</tr>
	<tr>
	<td width='10%'>Tanggal</td>
	<td><input type='text' name='tgl' value='$skr'></td>
	</tr>
	<tr>
	<td width='10%'>Susu</td>
	<td><input type='text' name='susu'></td>
	</tr>
	<tr>
	<td width='10%'>Rp</td>
	<td><input type='text' name='rp'></td>
	</tr>
	<tr>
	<td width='10%'>Pelapor</td>
	<td><input type='text' name='lapor'></td>
	</tr>
	<tr>
	<td colspan='2'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value='[ SIMPAN ]'>
	</td>
	</tr>

	</table>
	</form>
	";
	/////////////////////////////////////////////////////
	echo"
	<br><br>
	<table class='adminlist'>
	<tr>
	<td>Tanggal</td>
	<td>Susu</td>
	<td>Rp</td>
	<td>Lapor</td>
	<td>Edit</td>
	<td>Hapus</td>
	</tr>
	";
	$b1=mysql_query("select *from m_bysusu where idpas='$idpas'");
	while($b=mysql_fetch_array($b1))
		{
		echo"
		<tr>
		<td>$b[tgl]</td>
		<td>$b[susu]</td>
		<td>$b[rp]</td>
		<td>$b[lapor]</td>
		<td><a href='index.php?task=ebl_susu&id=$b[id]&idpas=$idpas'>edit</a></td>
		<td>
		<a href='index.php?task=del&id=$b[id]&alm=bl_susu&db=bysusu&idpas=$idpas'>hapus</a>
		</td>
		</tr>
		";
		}
	echo"
	</table>
	";
	}

function pbl_susu()
	{
	$idpas=$_POST['idpas'];
	$tgl=$_POST['tgl'];
	$susu=$_POST['susu'];
	$rp=$_POST['rp'];
	$lapor=$_POST['lapor'];
	$a=mysql_query("insert into m_bysusu values ('', '$idpas', '$tgl', '$susu', '$rp', '$lapor')");
	if ($a)
		{
		header ("Location: index.php?task=mes&idpas=$idpas&status=$status&alm=bl_susu&pes=Data Sudah Masuk");

		}
	else
		{
		echo"error";
		}
	}

function ebl_susu()
	{
	$id=$_GET['id'];
	$idpas=$_GET['idpas'];
	$a1=mysql_query("select *from m_pasienby where id_by='$idpas'");
	while($a=mysql_fetch_array($a1))
	{
	$nama=$a[nama];
	$idibu=$a[idpas];
	$jk=$a[jk];
	$norm=$a[norm];
	}
	$skr=date('d-m-Y');
	$b1=mysql_query("select *from m_bysusu where id='$id'");
	while($b=mysql_fetch_array($b1))
		{
		$tgl=$b[tgl];
		$susu=$b[susu];
		$rp=$b[rp];
		$lapor=$b[lapor];
		}
	echo"
	<form method='index.php?task=ebl_susu2'>
	<table class='adminlist'>
	<tr>
	<td width='10%'>Nama</td>
	<td>$nama</td>
	</tr>
	<tr>
	<td width='10%'>Tanggal</td>
	<td><input type='text' name='tgl' value='$tgl'></td>
	</tr>
	<tr>
	<td width='10%'>Susu</td>
	<td><input type='text' name='susu' value='$susu'></td>
	</tr>
	<tr>
	<td width='10%'>Rp</td>
	<td><input type='text' name='rp' value='$rp'></td>
	</tr>
	<tr>
	<td width='10%'>Pelapor</td>
	<td><input type='text' name='lapor' value='$rp'></td>
	</tr>
	<tr>
	<td colspan='2'>
	<input type='hidden' name='id' value='$id'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value='[ SIMPAN ]'>
	</td>
	</tr>

	</table>
	</form>
	";
	}

function ebl_susu2()
	{
	$idpas=$_POST['idpas'];
	$id=$_POST['id'];
	$tgl=$_POST['tgl'];
	$susu=$_POST['susu'];
	$rp=$_POST['rp'];
	$lapor=$_POST['lapor'];
	$a=mysql_query("update m_bysusu set tgl='$tgl', susu='$susu', rp='$rp', lapor='$lapor' where id='$id'");
	if ($a)
		{
		header ("Location: index.php?task=mes&idpas=$idpas&status=$status&alm=bl_susu&pes=Data Sudah Diganti");

		}
	else
		{
		echo"error";
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
	<input type='hidden' name='dari' value='Kamar Bayi'>
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
	$b1=mysql_query("select *from m_obtmutasi where dari='Kamar Bayi' order by tanggal DESC");
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


}
?>