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
	Selamat Datang di HALAMAN POLI (RECEPTIONIST) RSIA MARDI WALOEJA MALANG
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

}
?>