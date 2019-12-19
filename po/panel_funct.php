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
	Selamat Datang di HALAMAN POLI (KAMAR OBAT) RSIA MARDI WALOEJA MALANG
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
	<td>Tensi</td>
	<td>Diagnosa</td>
	<td>Rekam</td>
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
		<td><a href='index.php?task=tensi&idpas=$idpas'>Tensi</a></td>
		<td><a href='index.php?task=diagnosa&idpas=$idpas'>Diagnosa</a></td>
		<td><a href='index.php?task=rekam&no=$a[id]'>Rekam</a></td>
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
	<textarea name='diagnosa' cols='40' rows='5'>

	</textarea>
	</td>
	</tr>
	<tr>
	<td width='20%'>Resep</td>
	<td>
	<textarea name='resep' cols='40' rows='5'>

	</textarea>
	</td>
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
	$tgl=$_POST['tgl'];
	$a=mysql_query("insert into m_polidiagnosa values ('', '$idpas', '$diagnosa', '$resep', '$tgl')");
	if($a)
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
	<td>No Pasien></td>
	<td>Nama Pasien</td>
	<td>Tanggal</td>
	<td>Resep</td>
	</tr>
	";
	$a1=mysql_query("select *from m_polidiagnosa order by id DESC");
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
		<td><a href='index.php?task=resep2&idresep=$a[id]'>$a[resep]</a></td>
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
	$a1=mysql_query("select *from m_polidiagnosa where id='$idresep'");
	while($a=mysql_fetch_array($a1))
		{
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
	<td width='20%'>Diagnosa</td>
	<td>$diagnosa</td>
	</tr>
	<tr>
	<td width='20%'>Resep</td>
	<td>$resep</td>
	</tr>
	";
	$ada = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_poliresep where idresep='$idresep'"),0);
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
		}
	echo"
	</table>
	";
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


}
?>