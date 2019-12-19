<?php

class m2
{

function iostsln()
	{
	$pesan=$_GET['pesan'];
	$status=$_GET['status'];
	echo"<center>
	<h1>STATUS PERSALINAN INPARTU OPERASI</h1></center>
	<br><br>
	<u>$pesan</u>
	<br><br>
	<form method='post' action='index.php?task=in_stsln'>
	<table class='adminlist'>
	<tr>
	<td>
	Nama Pasien :
	</td>

	</tr>

	<tr>
	<td width='50%'>

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Inpartu Operasi' order by nama ASC");
	while ($a=mysql_fetch_array($a1))
		{
		$n=$a[nama];
		$nama=strtoupper($n);
		echo"
		<option value='$a[idpas]'>$nama - $a[idpas]</option>
		";
		}
	echo"
	</select>

	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}


function iorwysln()
	{
	$pesan=$_GET['pesan'];
	$status=$_GET['status'];
	echo"<center>
	<h1>STATUS PERSALINAN INPARTU OPERASI</h1></center>
	<br><br>
	<b>Riwayat Persalinan</b>
	<br><br>
	<form method='post' action='index.php?task=in_rwysln'>
	<table class='adminlist'>
	<tr>
	<td>
	Nama Pasien :
	</td>

	</tr>

	<tr>
	<td width='50%'>

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Inpartu Operasi' order by nama ASC");
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

	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}

function iostsln2()
	{
	$pesan=$_GET['pesan'];
	$status=$_GET['status'];
	echo"<center>
	<h1>STATUS PERSALINAN INPARTU OPERASI</h1></center>
	<br><br>
	<b>Status Persalinan II</b>
	<br><br>
	<form method='post' action='index.php?task=in_stsln2'>
	<table class='adminlist'>
	<tr>
	<td>
	Nama Pasien :
	</td>

	</tr>

	<tr>
	<td width='50%'>

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Inpartu Operasi' order by nama ASC");
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

	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}

function iolapsln()
	{
	$pesan=$_GET['pesan'];
	$status=$_GET['status'];
	echo"<center>
	<h1>STATUS PERSALINAN INPARTU OPERASI</h1></center>
	<br><br>
	<b>Laporan Persalinan</b>
	<br><br>
	<form method='post' action='index.php?task=in_lapsln'>
	<table class='adminlist'>
	<tr>
	<td>
	Nama Pasien :
	</td>

	</tr>

	<tr>
	<td width='50%'>

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Inpartu Operasi' order by nama ASC");
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

	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}

function lapsln2()
	{
	$pesan=$_GET['pesan'];
	$status=$_GET['status'];
	echo"<center>
	<h1>STATUS PERSALINAN INPARTU OPERASI</h1></center>
	<br><br>
	<b>Laporan Persalinan & Kelahiran</b>
	<br><br>
	<form method='post' action='index.php?task=in_lapsln2'>
	<table class='adminlist'>
	<tr>
	<td>
	Nama Pasien :
	</td>

	</tr>

	<tr>
	<td width='50%'>

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Inpartu Operasi' order by nama ASC");
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

	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}

function ioots()
	{
	$pesan=$_GET['pesan'];
	$status=$_GET['status'];
	echo"<center>
	<h1>OBSERVASI TENSI SUHU</h1></center>
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

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Inpartu Operasi' order by nama ASC");
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

	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}

function idlp()
	{
	$pesan=$_GET['pesan'];
	$status=$_GET['status'];
	echo"<center>
	<h1>INSTRUKSI DOKTER DAN LAPORAN PERAWAT</h1></center>
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

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Inpartu Operasi' order by nama ASC");
	while ($a=mysql_fetch_array($a1))
		{
		$n=$a[nama];
		$nama=strtoupper($n);
		echo"
		<option value='$a[idpas]'>$nama - $a[idpas]</option>
		";
		}
	echo"
	</select>

	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}

function iorsm()
	{
	$pesan=$_GET['pesan'];
	$status=$_GET['status'];
	echo"<center>
	<h1>RESUME MEDIK</h1></center>
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

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Inpartu Operasi' order by nama ASC");
	while ($a=mysql_fetch_array($a1))
		{
		$n=$a[nama];
		$nama=strtoupper($n);
		echo"
		<option value='$a[idpas]'>$nama - $a[idpas]</option>
		";
		}
	echo"
	</select>
	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}

function iostm()
	{
	$pesan=$_GET['pesan'];
	$status=$_GET['status'];
	echo"<center>
	<h1>PERSETUJUAN TINDAKAN MEDIK</h1></center>
	<br><br>
	<form method='post' action='index.php?task=in_stm'>
	<table class='adminlist'>
	<tr>
	<td>
	Nama Pasien :
	</td>

	</tr>

	<tr>
	<td width='50%'>

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Inpartu Operasi' order by nama ASC");
	while ($a=mysql_fetch_array($a1))
		{
		$n=$a[nama];
		$nama=strtoupper($n);
		echo"
		<option value='$a[idpas]'>$nama - $a[idpas]</option>
		";
		}
	echo"
	</select>
	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}

function iottm()
	{
	$pesan=$_GET['pesan'];
	$status=$_GET['status'];
	echo"<center>
	<h1>PENOLAKAN TINDAKAN MEDIK</h1></center>
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

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Inpartu Operasi' order by nama ASC");
	while ($a=mysql_fetch_array($a1))
		{
		$n=$a[nama];
		$nama=strtoupper($n);
		echo"
		<option value='$a[idpas]'>$nama - $a[idpas]</option>
		";
		}
	echo"
	</select>

	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}

function ioipo()
	{
	$pesan=$_GET['pesan'];
	$status=$_GET['status'];
	echo"<center>
	<h1>INSTRUKSI POST OPERASI</h1></center>
	<br><br>
	<form method='post' action='index.php?task=io_ipo'>
	<table class='adminlist'>
	<tr>
	<td>
	Nama Pasien :
	</td>

	</tr>

	<tr>
	<td width='50%'>

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Inpartu Operasi' order by nama ASC");
	while ($a=mysql_fetch_array($a1))
		{
		$n=$a[nama];
		$nama=strtoupper($n);
		echo"
		<option value='$a[idpas]'>$nama - $a[idpas]n</option>
		";
		}
	echo"
	</select>

	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}

function io_ipo()
	{
	$idpas=$_POST['idpas'];
	$p=mysql_query("select *from m_pasien, m_pasienalm where m_pasien.idpas=m_pasienalm.idpas and m_pasien.idpas='$idpas'");
	while($pa=mysql_fetch_array($p))
		{
		$nama=$pa['nama'];
		$umur=$pa['umur'];

		$idrg=$pa['idrg'];
		}
	$q=mysql_query("select *from m_konfrg where id='$idrg'");
	while($qa=mysql_fetch_array($q))
		{
		$nm_rg=$qa['nm_rg'];
		$kls_rg=$qa['kls_rg'];
		}
	echo"
	<br>
	<H1>
	INSTRUKSI DOKTER UNTUK POST OPERATIE
	</H1>
	<table class='adminlist'>
	<tr>
	<td width='90%'>
	<form method='post' action='index.php?task=pio_ipo'>
	<table class='adminlist'>
	<tr>
	<td>Tgl</td>
	<td>Jam</td>
	<td>Nadi</td>
	<td>Tensi</td>
	<td>Temp</td>
	<td>Urine</td>
	<td>Cairan</td>
	<td>Keterangan</td>
	</tr>

	<tr>
	<td><input type='text' name='tgl' size='10'></td>
	<td><input type='text' name='jm' size='5'></td>
	<td><input type='text' name='nadi' size='5'></td>
	<td><input type='text' name='tensi' size='5'></td>
	<td><input type='text' name='temp' size='5'></td>
	<td><input type='text' name='urine' size='5'></td>
	<td><input type='text' name='cairan' size='5'></td>
	<td><input type='text' name='ket' size='10'></td>
	</tr>


	</table>
	</td>
	<td width='10%'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value='[ SIMPAN ]'>
	</td>
	</tr>
	</form>
	</table>
	<br><br>

	<table class='adminlist'>
	<tr>
	<td colspan='9'><b>DATA INSTRUKSI DOKTER UNTUK POST OPERATIE</b></td>
	</tr>
	<tr>
	<td>Tgl</td>
	<td>Jam</td>
	<td>Nadi</td>
	<td>Tensi</td>
	<td>Temp</td>
	<td>Urine</td>
	<td>Cairan</td>
	<td>Keterangan</td>
	<td>Hapus</td>
	</tr>
	";
	$a1=mysql_query("select *from m_instruksipo where idpas='$idpas'");
	while($a=mysql_fetch_array($a1))
		{
		echo"
	<tr>
	<td><a href='index.php?task=eio_ipo&id=$a[id]&idpas=$idpas'>$a[tgl]</a></td>
	<td>$a[jm]</td>
	<td>$a[nadi]</td>
	<td>$a[tensi]</td>
	<td>$a[temp]</td>
	<td>$a[urine]</td>
	<td>$a[cairan]</td>
	<td>$a[ket]</td>
	<td> <a href='index.php?task=del&id=$a[id]&alm=io_ipo&db=instruksipo&idpas=$idpas'>Hapus </a></td>
	</tr>";
		}
	echo"
	</table>
	";

	}

function pio_ipo()
	{
	$idpas=$_POST['idpas'];
	$tgl=$_POST['tgl'];
	$jm=$_POST['jm'];
	$nadi=$_POST['nadi'];
	$tensi=$_POST['tensi'];
	$temp=$_POST['temp'];
	$urine=$_POST['urine'];
	$cairan=$_POST['cairan'];
	$ket=$_POST['ket'];

	$a=mysql_query("insert into m_instruksipo values ('', '$idpas', '$tgl', '$jm', '$nadi', '$tensi', '$temp', '$urine', '$cairan', '$ket')");
	if ($a)
		{header ("Location: index.php?task=mes&idpas=$idpas&alm=io_ipo&pes=Data Sudah Masuk");}
	else
		{
	echo"ror";}
	}

function eio_ipo()
	{
	$id=$_GET['id'];
	$idpas=$_GET['idpas'];
	$a1=mysql_query("select *from m_instruksipo where id='$id'");
	while($a=mysql_fetch_array($a1))
		{
		$tgl=$a[tgl];
		$jm=$a[jm];
		$nadi=$a[nadi];
		$tensi=$a[tensi];
		$temp=$a[temp];
		$urine=$a[urine];
		$cairan=$a[cairan];
		$ket=$a[ket];
		}
	echo"
	<H1>
	INSTRUKSI DOKTER UNTUK POST OPERATIE
	</H1>
	<table class='adminlist'>
	<tr>
	<td width='90%'>
	<form method='post' action='index.php?task=enio_ipo'>
	<table class='adminlist'>
	<tr>
	<td>Tgl</td>
	<td>Jam</td>
	<td>Nadi</td>
	<td>Tensi</td>
	<td>Temp</td>
	<td>Urine</td>
	<td>Cairan</td>
	<td>Keterangan</td>
	</tr>

	<tr>
	<td><input type='text' name='tgl' size='10' value='$tgl'></td>
	<td><input type='text' name='jm' size='5' value='$jm'></td>
	<td><input type='text' name='nadi' size='5' value='$nadi'></td>
	<td><input type='text' name='tensi' size='5' value='$tensi'></td>
	<td><input type='text' name='temp' size='5' value='$temp'></td>
	<td><input type='text' name='urine' size='5' value='$urine'></td>
	<td><input type='text' name='cairan' size='5' value='$cairan'></td>
	<td><input type='text' name='ket' size='10' value='$ket'></td>
	</tr>


	</table>
	</td>
	<td width='10%' align='center'>
	<input type='hidden' name='id' value='$id'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value='[ GANTI ]'>
	</td>
	</tr>
	</form>
	</table>
	";

	}

function enio_ipo()
	{
	$id=$_POST['id'];
	$idpas=$_POST['idpas'];
	$tgl=$_POST['tgl'];
	$jm=$_POST['jm'];
	$nadi=$_POST['nadi'];
	$tensi=$_POST['tensi'];
	$temp=$_POST['temp'];
	$urine=$_POST['urine'];
	$cairan=$_POST['cairan'];
	$ket=$_POST['ket'];

	$a=mysql_query("update m_instruksipo set tgl='$tgl', jm='$jm', nadi='$nadi', tensi='$tensi', temp='$temp', urine='$urine', cairan='$cairan', ket='$ket' where id='$id'");
	if ($a)
		{header ("Location: index.php?task=mes&idpas=$idpas&alm=io_ipo&pes=Data Sudah Diganti");}
	else
		{
		echo"ror";}
	}

function ioipb()
	{
	$pesan=$_GET['pesan'];
	$status=$_GET['status'];
	echo"<center>
	<h1>INSTRUKSI PASCA BEDAH
	<br>
	CATATAN ANESTESIA
	</h1></center>
	<br><br>
	<form method='post' action='index.php?task=io_ipb'>
	<table class='adminlist'>
	<tr>
	<td>
	Nama Pasien :
	</td>

	</tr>

	<tr>
	<td width='50%'>

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Inpartu Operasi' order by nama ASC");
	while ($a=mysql_fetch_array($a1))
		{
		$n=$a[nama];
		$nama=strtoupper($n);
		echo"
		<option value='$a[idpas]'>$nama - $a[idpas]</option>
		";
		}
	echo"
	</select>

	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}

function io_ipb()
	{
	$idpas=$_POST['idpas'];
	$tglskr=DATE('d-m-Y');
	$a=mysql_query("select *from m_pasien where idpas='$idpas'");
	while($a1=mysql_fetch_array($a))
		{
		$nama=$a1[nama];
		$umur=$a1[umur];
		$sex=$a1[sex];
		}
	$ada = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_instruksipb where idpas='$idpas'"),0);
	if($ada=='0')
		{
	echo"
	<br>
	<h1>INSTRUKSI PASCA BEDAH
	<br>
	CATATAN ANESTESIA
	</h1>
	<br>
	<form method='post' action='index.php?task=pio_ipb'>
	<table class='adminlist'>
	<tr>
	<td>Nama: $nama</td>
	<td>Umur: $umur</td>
	<td>Kelamin: $sex</td>
	<td>Status Fisik:
	<select name='stfsk'>
	<option value='1'>1</option>
	<option value='2'>2</option>
	<option value='3'>3</option>
	<option value='4'>4</option>
	<option value='5'>5</option>
	<option value='E'>E</option>
	</select>
	</td>
	<td>Tanggal: <input type='text' name='tgl' value='$tglskr'> </td>
	<td>NO.DM: <input type='text' name='nodm' value='$nodm'> </td>
	</tr>
	</table>
	<table class='adminlist'>
	<tr>
	<td>Dokter Bedah</td>
	<td>: <input type='text' name='dokb'></td>
	<td>Dokter Bius</td>
	<td>: <input type='text' name='dokbi'></td>
	</tr>
	<tr>
	<td>Asisten</td>
	<td>: <input type='text' name='asisb'></td>
	<td>Asisten</td>
	<td>: <input type='text' name='asisbi'></td>
	</tr>
	<tr>
	<td>Diagnosis Prabedah</td>
	<td>: <input type='text' name='diagb'></td>
	<td>Jenis Pembedahan</td>
	<td>: <input type='text' name='jns'></td>
	</tr>
	<tr>
	<td>Anestesia dengan</td>
	<td>: <input type='text' name='anesb'></td>
	<td>Jenis/ Teknik Anestesia
	<br>Posisi
	</td>
	<td>: <input type='text' name='jns2'>
	<br>
	: <input type='text' name='pos'>
	</td>
	</tr>
	</table>

	<table class='adminlist'>
	<tr>
	<td width='50%'>Premedikasi</td>
	<td>Medikasi</td>
	</tr>
	<tr>
	<td>
	<textarea name='pre' cols='50' rows='5'>
	</textarea>
	<br>
	Pemberian:
	<select name='beri'>
	<option value='SC'>SC</option>
	<option value='I.M'>I.M</option>
	<option value='I.V'>I.V</option>
	<option value='P.Oral'>P.Oral</option>
	</select>
	<br>
	Waktu: Jam: <input type='text' name='jm'>
	<br>
	Efek: <input type='text' name='efek'>
	</td>
	<td valign='top'>
	<textarea name='medik' cols='50' rows='5'>
	</textarea>
	</td>
	</tr>
	</table>
	<table class='adminlist'>
	<tr>
	<td rowspan='3'>
	Stadia
	</td>
	<td>Anesti</td><td>:</td><td><input type='text' name='anes'></td>
	</tr>
	<tr>
	<td>Operasi</td><td>:</td><td><input type='text' name='opr'></td>
	</tr>
	<tr>
	<td>Resp</td><td>:</td><td><input type='text' name='resp'></td>
	</tr>
	</table>
	<table class='adminlist'>
	<tr>
	<td width='33%' align='center'>Jumlah Medikasi</td>
	<td width='33%' align='center'>Jumlah Cairan/ Transfusi</td>
	<td width='33%' align='center'>Catatan</td>
	</tr>
	<tr>
	<td>
	<textarea name='jmmedik' cols='30' rows='8'>
	</textarea>
	</td>
	<td>
	<textarea name='jmcairan' cols='30' rows='8'>
	</textarea>
	</td>
	<td>
	Komplikasi/ Medikasi pra-bedah:<br>
	<textarea name='kprb' cols='30' rows='3'>
	</textarea>
	<br>
	Komplikasi/ Medikasi pasaca bedah:<br>
	<textarea name='kpb' cols='30' rows='3'>
	</textarea>
	</td>
	</tr>
	</table>
	<table class='adminlist'>
	<tr>
	<td>Pendarahan <br> <input type='text' name='drh'></td>
	<td>Urine <br> <input type='text' name='urine'></td>
	<td>Lama Operasi <br> <input type='text' name='lmop'></td>
	<td>Lama anestesia<br> <input type='text' name='lman'></td>
	<td align='center'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value='[ SIMPAN ]'></td>
	</tr>
	</table>
	</form>
	";
		}
	else
		{
		$z1=mysql_query("select *from m_instruksipb where idpas='$idpas'");
		while($z=mysql_fetch_array($z1))
		{
		$stfsk=$z[stfsk];
		$tgl=$z[tgl];
		$nodm=$z[nodm];
		$dokb=$z[dokb];
		$asisb=$z[asisb];
		$diagb=$z[diagb];
		$anesb=$z[anesb];
		$dokbi=$z[dokbi];
		$asisbi=$z[asisbi];
		$jns=$z[jns];
		$jns2=$z[jns2];
		$pos=$z[pos];
		}
		$y1=mysql_query("select *from m_instruksipb2 where idpas='$idpas'");
		while($y=mysql_fetch_array($y1))
		{
		$pre=$y[pre];
		$beri=$y[beri];
		$jm=$y[jm];
		$efek=$y[efek];
		$medik=$y[medik];
		}
		$x1=mysql_query("select *from m_instruksipb3 where idpas='$idpas'");
		while($x=mysql_fetch_array($x1))
		{
		$anes=$x[anes];
		$opr=$x[opr];
		$resp=$x[resp];
		$jmmedik=$x[jmmedik];
		$jmcairan=$x[jmcairan];
		$drh=$x[drh];
		$urine=$x[urine];
		$lmop=$x[lmop];
		$lman=$x[lman];
		$kprb=$x[kprb];
		$kpb=$x[kpb];
		}
		echo"
	<br>
	<h1>INSTRUKSI PASCA BEDAH
	<br>
	CATATAN ANESTESIA
	</h1>
	<br>
	<form method='post' action='index.php?task=eio_ipb'>
	<table class='adminlist'>
	<tr>
	<td>Nama: $nama</td>
	<td>Umur: $umur</td>
	<td>Kelamin: $sex</td>
	<td>Status Fisik:
	<select name='stfsk'>
	<option value='$stfsk'>$stfsk</option>
	<option value='1'>1</option>
	<option value='2'>2</option>
	<option value='3'>3</option>
	<option value='4'>4</option>
	<option value='5'>5</option>
	<option value='E'>E</option>
	</select>
	</td>
	<td>Tanggal: <input type='text' name='tgl' value='$tgl'> </td>
	<td>NO.DM: <input type='text' name='nodm' value='$nodm'> </td>
	</tr>
	</table>
	<table class='adminlist'>
	<tr>
	<td>Dokter Bedah</td>
	<td>: <input type='text' name='dokb' value='$dokb'></td>
	<td>Dokter Bius</td>
	<td>: <input type='text' name='dokbi' value='$dokbi'></td>
	</tr>
	<tr>
	<td>Asisten</td>
	<td>: <input type='text' name='asisb' value='$asisb'></td>
	<td>Asisten</td>
	<td>: <input type='text' name='asisbi' value='$asisbi'></td>
	</tr>
	<tr>
	<td>Diagnosis Prabedah</td>
	<td>: <input type='text' name='diagb' value='$diagb'></td>
	<td>Jenis Pembedahan</td>
	<td>: <input type='text' name='jns' value='$jns'></td>
	</tr>
	<tr>
	<td>Anestesia dengan</td>
	<td>: <input type='text' name='anesb' value='$anesb'></td>
	<td>Jenis/ Teknik Anestesia
	<br>Posisi
	</td>
	<td>: <input type='text' name='jns2' value='$jns2'>
	<br>
	: <input type='text' name='pos' value='$pos'>
	</td>
	</tr>
	</table>

	<table class='adminlist'>
	<tr>
	<td width='50%'>Premedikasi</td>
	<td>Medikasi</td>
	</tr>
	<tr>
	<td>
	<textarea name='pre' cols='50' rows='5'>
	$pre
	</textarea>
	<br>
	Pemberian:
	<select name='beri'>
	<option value='$beri'>$beri</option>
	<option value='SC'>SC</option>
	<option value='I.M'>I.M</option>
	<option value='I.V'>I.V</option>
	<option value='P.Oral'>P.Oral</option>
	</select>
	<br>
	Waktu: Jam: <input type='text' name='jm' value='$jm'>
	<br>
	Efek: <input type='text' name='efek' value='$efek'>
	</td>
	<td valign='top'>
	<textarea name='medik' cols='50' rows='5'>
	$medik
	</textarea>
	</td>
	</tr>
	</table>
	<table class='adminlist'>
	<tr>
	<td rowspan='3'>
	Stadia
	</td>
	<td>Anesti</td><td>:</td><td><input type='text' name='anes' value='$anes'></td>
	</tr>
	<tr>
	<td>Operasi</td><td>:</td><td><input type='text' name='opr' value='$opr'></td>
	</tr>
	<tr>
	<td>Resp</td><td>:</td><td><input type='text' name='resp' value='$resp'></td>
	</tr>
	</table>
	<table class='adminlist'>
	<tr>
	<td width='33%' align='center'>Jumlah Medikasi</td>
	<td width='33%' align='center'>Jumlah Cairan/ Transfusi</td>
	<td width='33%' align='center'>Catatan</td>
	</tr>
	<tr>
	<td>
	<textarea name='jmmedik' cols='30' rows='8'>
	$jmmedik
	</textarea>
	</td>
	<td>
	<textarea name='jmcairan' cols='30' rows='8'>
	$jmcairan
	</textarea>
	</td>
	<td>
	Komplikasi/ Medikasi pra-bedah:<br>
	<textarea name='kprb' cols='30' rows='3'>
	$kprb
	</textarea>
	<br>
	Komplikasi/ Medikasi pasaca bedah:<br>
	<textarea name='kpb' cols='30' rows='3'>
	$kpb
	</textarea>
	</td>
	</tr>
	</table>
	<table class='adminlist'>
	<tr>
	<td>Pendarahan <br> <input type='text' name='drh' value='$drh'></td>
	<td>Urine <br> <input type='text' name='urine' value='$urine'> </td>
	<td>Lama Operasi <br> <input type='text' name='lmop' value='$lmop'></td>
	<td>Lama anestesia<br> <input type='text' name='lman' value='$lman'></td>
	<td align='center'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value='[ GANTI ]'></td>
	</tr>
	</table>
	</form>
	";
		}
	}

function pio_ipb()
	{
	$idpas=$_POST['idpas'];
	$stfsk=$_POST['stfsk'];
	$tgl=$_POST['tgl'];
	$nodm=$_POST['nodm'];
	$dokb=$_POST['dokb'];
	$asisb=$_POST['asisb'];
	$diagb=$_POST['diagb'];
	$anesb=$_POST['anesb'];
	$dokbi=$_POST['dokbi'];
	$asisbi=$_POST['asisbi'];
	$jns=$_POST['jns'];
	$jns2=$_POST['jns2'];
	$pos=$_POST['pos'];

	$pre=$_POST['pre'];
	$beri=$_POST['beri'];
	$jm=$_POST['jm'];
	$efek=$_POST['efek'];
	$medik=$_POST['medik'];

	$anes=$_POST['anes'];
	$opr=$_POST['opr'];
	$resp=$_POST['resp'];
	$jmmedik=$_POST['jmmedik'];
	$jmcairan=$_POST['jmcairan'];
	$drh=$_POST['drh'];
	$urine=$_POST['urine'];
	$lmop=$_POST['lmop'];
	$lman=$_POST['lman'];
	$kprb=$_POST['kprb'];
	$kpb=$_POST['kpb'];

	$a=mysql_query("insert into m_instruksipb values('', '$idpas', '$stfsk', '$tgl', '$nodm', '$dokb', '$asisb', '$diagb', '$anesb', '$dokbi', '$asisbi', '$jns', '$jns2', '$pos')");
	$b=mysql_query("insert into m_instruksipb2 values ('', '$idpas', '$pre', '$beri', '$jm', '$efek', '$medik')");
	$c=mysql_query("insert into m_instruksipb3 values ('', '$idpas', '$anes', '$opr', '$resp', '$jmmedik', '$jmcairan', '$drh', '$urine', '$lmop', '$lman', '$kprb', '$kpb')");
	if ($a and $b and $c)
		{header ("Location: index.php?task=mes&idpas=$idpas&alm=io_ipb&pes=Data Sudah Masuk");}
	else
		{
	echo"ror";}
	}

function eio_ipb()
	{
	$idpas=$_POST['idpas'];
	$stfsk=$_POST['stfsk'];
	$tgl=$_POST['tgl'];
	$nodm=$_POST['nodm'];
	$dokb=$_POST['dokb'];
	$asisb=$_POST['asisb'];
	$diagb=$_POST['diagb'];
	$anesb=$_POST['anesb'];
	$dokbi=$_POST['dokbi'];
	$asisbi=$_POST['asisbi'];
	$jns=$_POST['jns'];
	$jns2=$_POST['jns2'];
	$pos=$_POST['pos'];

	$pre=$_POST['pre'];
	$beri=$_POST['beri'];
	$jm=$_POST['jm'];
	$efek=$_POST['efek'];
	$medik=$_POST['medik'];

	$anes=$_POST['anes'];
	$opr=$_POST['opr'];
	$resp=$_POST['resp'];
	$jmmedik=$_POST['jmmedik'];
	$jmcairan=$_POST['jmcairan'];
	$drh=$_POST['drh'];
	$urine=$_POST['urine'];
	$lmop=$_POST['lmop'];
	$lman=$_POST['lman'];
	$kprb=$_POST['kprb'];
	$kpb=$_POST['kpb'];

	$a=mysql_query("update m_instruksipb set stfsk='$stfsk', tgl='$tgl', nodm='$nodm', dokb='$dokb', asisb='$asisb', diagb='$diagb', anesb='$anesb', dokbi='$dokbi', asisbi='$asisbi', jns='$jns', jns2='$jns2', pos='$pos' where idpas='$idpas'");
	$b=mysql_query("update m_instruksipb2 set pre='$pre', beri='$beri', jm='$jm', efek='$efek', medik='$medik' where idpas='$idpas'");
	$c=mysql_query("update m_instruksipb3 set anes='$anes', opr='$opr', resp='$resp', jmmedik='$jmmedik', jmcairan='$jmcairan', drh='$drh', urine='$urine', lmop='$lmop', lman='$lman', kprb='$kprb', kpb='$kpb' where idpas='$idpas'");
	if ($a and $b and $c)
		{header ("Location: index.php?task=mes&idpas=$idpas&alm=io_ipb&pes=Data Sudah Diganti");}
	else
		{
	echo"ror";}
	}

function ioipb2()
	{
	$pesan=$_GET['pesan'];
	$status=$_GET['status'];
	echo"<center>
	<h1>INSTRUKSI PASCA BEDAH
	</h1></center>
	<br><br>
	<form method='post' action='index.php?task=io_ipb2'>
	<table class='adminlist'>
	<tr>
	<td>
	Nama Pasien :
	</td>

	</tr>

	<tr>
	<td width='50%'>

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Inpartu Operasi' order by nama ASC");
	while ($a=mysql_fetch_array($a1))
		{
		$n=$a[nama];
		$nama=strtoupper($n);
		echo"
		<option value='$a[idpas]'>$nama - $a[idpas]</option>
		";
		}
	echo"
	</select>

	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}

function io_ipb2()
	{
	$idpas=$_POST['idpas'];


	$ada = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_instruksipb4 where idpas='$idpas'"),0);
	if($ada=='0')
	{
	echo"
	<h1>INSTRUKSI PASCA BEDAH</h1>
	<br>

	<form method='post' action='index.php?task=pio_ipb2'>
	<table class='adminlist'>
	<tr>
	<td colspan='3'><u>Kontrol</u>
	<br>
	Kesadaran, tensi, nadi, nafas, suhu, setiap:
	</td>
	</tr>

	<tr>
	<td width='20%'></td>
	<td width='1'>:</td>
	<td>
	<textarea name='kontrol' cols='60' rows='3'>
	</textarea>
	</td>
	</tr>

	<tr>
	<td width='40'>Posisi</td>
	<td width='1'>:</td>
	<td>
	<textarea name='pos' cols='60' rows='3'>
	</textarea>
	</td>
	</tr>

	<tr>
	<td width='30'>Infus Cairan/ Transfusi</td>
	<td width='1'>:</td>
	<td>
	<textarea name='infus' cols='60' rows='3'>
	</textarea>
	</td>
	</tr>

	<tr>
	<td width='30'>Antibiotika & Obat-obatan lain</td>
	<td width='1'>:</td>
	<td>
	<textarea name='obt' cols='60' rows='6'>
	</textarea>
	</td>
	</tr>

	<tr>
	<td width='30'>Bila Kesakitan</td>
	<td width='1'>:</td>
	<td>
	<textarea name='skt' cols='60' rows='2'>
	</textarea>
	</td>
	</tr>

	<tr>
	<td width='30'>Minum makan</td>
	<td width='1'>:</td>
	<td>
	<textarea name='minum' cols='60' rows='3'>
	</textarea>
	</td>
	</tr>

	<tr>
	<td width='30'>Urine</td>
	<td width='1'>:</td>
	<td>
	<textarea name='urin' cols='60' rows='3'>
	</textarea>
	</td>
	</tr>

	<tr>
	<td width='30'>Lain-lain</td>
	<td width='1'>:</td>
	<td>
	<textarea name='lain' cols='60' rows='6'>
	</textarea>
	</td>
	</tr>
	</table>

	<table class='adminlist'>
	<tr>
	<td>
	Keadaan waktu dikirim ke Ruangan:
	<input type='text' name='rg' size='60'>
	jam : <input type='text' name='jm'>
	</td>
	</tr>

	<tr>
	<td>
	Kesadaran :<input type='text' name='sadar'>
	tensi :<input type='text' name='tensi'>
	nadi :<input type='text' name='nadi'>
	nafas :<input type='text' name='nf'>
	suhu:<input type='text' name='suhu'>
	</td>
	</tr>
	</table>

	<table class='adminlist'>
	<tr>

	<td width='33%' align='center'>
	Perawat Ruang Putih
	<br><br><br>
	<input type='text' name='prwt1' size='30'>
	</td>

	<td width='33%' align='center'>
	Perawat Ruangan
	<br><br><br>
	<input type='text' name='prwt2' size='30'>
	</td>

	<td width='33%' align='center'>
	Ahli Anestesiologi
	<br><br><br>
	<input type='text' name='ahli' size='30'>
	</td>
	</tr>

	<tr>
	<td colspan='3' align='center'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value='[ SIMPAN ]'>
	</td>
	</tr>

	</table>
	</form>
	";
	}
	///////////////////////

	else
	{
	$a1=mysql_query("select *from m_instruksipb4 where idpas='$idpas'");
	while($a=mysql_fetch_array($a1))
		{
		$kontrol=$a[kontrol];
		$pos=$a[pos];
		$infus=$a[infus];
		$obt=$a[obt];
		$skt=$a[skt];
		$minum=$a[minum];
		$urin=$a[urin];
		$lain=$a[lain];
		$rg=$a[rg];
		$jm=$a[jm];
		$sadar=$a[sadar];
		$tensi=$a[tensi];
		$nadi=$a[nadi];
		$nf=$a[nf];
		$suhu=$a[suhu];
		$prwt1=$a[prwt1];
		$prwt2=$a[prwt2];
		$ahli=$a[ahli];
		}
	echo"
	<h1>INSTRUKSI PASCA BEDAH</h1>
	<br>

	<form method='post' action='index.php?task=eio_ipb2'>
	<table class='adminlist'>
	<tr>
	<td colspan='3'><u>Kontrol</u>
	<br>
	Kesadaran, tensi, nadi, nafas, suhu, setiap:
	</td>
	</tr>

	<tr>
	<td width='20%'></td>
	<td width='1'>:</td>
	<td>
	<textarea name='kontrol' cols='60' rows='3'>
	$kontrol
	</textarea>
	</td>
	</tr>

	<tr>
	<td width='40'>Posisi</td>
	<td width='1'>:</td>
	<td>
	<textarea name='pos' cols='60' rows='3'>
	$pos
	</textarea>
	</td>
	</tr>

	<tr>
	<td width='30'>Infus Cairan/ Transfusi</td>
	<td width='1'>:</td>
	<td>
	<textarea name='infus' cols='60' rows='3'>
	$infus
	</textarea>
	</td>
	</tr>

	<tr>
	<td width='30'>Antibiotika & Obat-obatan lain</td>
	<td width='1'>:</td>
	<td>
	<textarea name='obt' cols='60' rows='6'>
	$obt
	</textarea>
	</td>
	</tr>

	<tr>
	<td width='30'>Bila Kesakitan</td>
	<td width='1'>:</td>
	<td>
	<textarea name='skt' cols='60' rows='2'>
	$skt
	</textarea>
	</td>
	</tr>

	<tr>
	<td width='30'>Minum makan</td>
	<td width='1'>:</td>
	<td>
	<textarea name='minum' cols='60' rows='3'>
	$minum
	</textarea>
	</td>
	</tr>

	<tr>
	<td width='30'>Urine</td>
	<td width='1'>:</td>
	<td>
	<textarea name='urin' cols='60' rows='3'>
	$urin
	</textarea>
	</td>
	</tr>

	<tr>
	<td width='30'>Lain-lain</td>
	<td width='1'>:</td>
	<td>
	<textarea name='lain' cols='60' rows='6'>
	$lain
	</textarea>
	</td>
	</tr>
	</table>

	<table class='adminlist'>
	<tr>
	<td>
	Keadaan waktu dikirim ke Ruangan:
	<input type='text' name='rg' size='60' value='$rg'>
	jam : <input type='text' name='jm' value='$jm'>
	</td>
	</tr>

	<tr>
	<td>
	Kesadaran :<input type='text' name='sadar' value='$sadar'>
	tensi :<input type='text' name='tensi' value='$tensi'>
	nadi :<input type='text' name='nadi' value='$nadi'>
	nafas :<input type='text' name='nf' value='$nf'>
	suhu:<input type='text' name='suhu' value='$suhu'>
	</td>
	</tr>
	</table>

	<table class='adminlist'>
	<tr>

	<td width='33%' align='center'>
	Perawat Ruang Putih
	<br><br><br>
	<input type='text' name='prwt1' size='30' value='$prwt1'>
	</td>

	<td width='33%' align='center'>
	Perawat Ruangan
	<br><br><br>
	<input type='text' name='prwt2' size='30' value='$prwt2'>
	</td>

	<td width='33%' align='center'>
	Ahli Anestesiologi
	<br><br><br>
	<input type='text' name='ahli' size='30' value='$ahli'>
	</td>
	</tr>

	<tr>
	<td colspan='3' align='center'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value='[ GANTI ]'>
	</td>
	</tr>

	</table>
	</form>
	";
	}
	}

function pio_ipb2()
	{
	$idpas=$_POST['idpas'];
	$kontrol=$_POST['kontrol'];
	$pos=$_POST['pos'];
	$infus=$_POST['infus'];
	$obt=$_POST['obt'];
	$skt=$_POST['skt'];
	$minum=$_POST['minum'];
	$urin=$_POST['urin'];
	$lain=$_POST['lain'];
	$rg=$_POST['rg'];
	$jm=$_POST['jm'];
	$sadar=$_POST['sadar'];
	$tensi=$_POST['tensi'];
	$nadi=$_POST['nadi'];
	$nf=$_POST['nf'];
	$suhu=$_POST['suhu'];
	$prwt1=$_POST['prwt1'];
	$prwt2=$_POST['prwt2'];
	$ahli=$_POST['ahli'];

	$a=mysql_query("insert into m_instruksipb4 values ('', '$idpas', '$kontrol', '$pos', '$infus', '$obt', '$skt', '$minum', '$urin', '$lain', '$rg', '$jm', '$sadar', '$tensi', '$nadi', '$nf', '$suhu', '$prwt1', '$prwt2', '$ahli')");
	if ($a)
		{header ("Location: index.php?task=mes&idpas=$idpas&alm=io_ipb2&pes=Data Sudah Masuk");}
	else
		{
	echo"ror";}
	}

function eio_ipb2()
	{
	$idpas=$_POST['idpas'];
	$kontrol=$_POST['kontrol'];
	$pos=$_POST['pos'];
	$infus=$_POST['infus'];
	$obt=$_POST['obt'];
	$skt=$_POST['skt'];
	$minum=$_POST['minum'];
	$urin=$_POST['urin'];
	$lain=$_POST['lain'];
	$rg=$_POST['rg'];
	$jm=$_POST['jm'];
	$sadar=$_POST['sadar'];
	$tensi=$_POST['tensi'];
	$nadi=$_POST['nadi'];
	$nf=$_POST['nf'];
	$suhu=$_POST['suhu'];
	$prwt1=$_POST['prwt1'];
	$prwt2=$_POST['prwt2'];
	$ahli=$_POST['ahli'];

	$a=mysql_query("update m_instruksipb4 set kontrol='$kontrol', pos='$pos', infus='$infus', obt='$obt', skt='$skt', minum='$minum', urin='$urin', lain='$lain', rg='$rg', jm='$jm', sadar='$sadar', tensi='$tensi', nadi='$nadi', nf='$nf', suhu='$suhu', prwt1='$prwt1', prwt2='$prwt2', ahli='$ahli' where idpas='$idpas'");
	if ($a)
		{header ("Location: index.php?task=mes&idpas=$idpas&alm=io_ipb2&pes=Data Sudah Diganti");}
	else
		{
	echo"ror";}
	}

function iolo()
	{
	$pesan=$_GET['pesan'];
	$status=$_GET['status'];
	echo"<center>
	<h1>LAPORAN OPERASI</h1></center>
	<br><br>
	<form method='post' action='index.php?task=io_lo'>
	<table class='adminlist'>
	<tr>
	<td>
	Nama Pasien :
	</td>

	</tr>

	<tr>
	<td width='50%'>

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Inpartu Operasi' order by nama ASC");
	while ($a=mysql_fetch_array($a1))
		{
		$n=$a[nama];
		$nama=strtoupper($n);
		echo"
		<option value='$a[idpas]'>$nama - $a[idpas]</option>
		";
		}
	echo"
	</select>

	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}


function io_lo()
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
	$b=mysql_query("select *from m_konfrg where id='$idrg'");
	while($b1=mysql_fetch_array($b))
		{
		$nm_rg=$b1[nm_rg];
		$kls_rg=$b1[kls_rg];
		}
	$ada = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_lapopr where idpas='$idpas'"),0);
	if($ada=='0')
		{
	echo"
	<form method='post' action='index.php?task=pio_lo'>
	<br>
	<h1>LAPORAN OPERASI</h1>
	<br>
	<table class='adminlist'>
	<tr>
	<td rowspan='2'><b>LAPORAN OPERASI</b></td>
	<td>R: $kls_rg/ $nm_rg</td>
	<td>BAG: <input type='text' name='bag'></td>
	<td>No. RM: $norm</td>
	</tr>

	<tr>
	<td>Nama Penderita: $nama</td>
	<td>$sex</td>
	<td>Umur: $umur</td>
	</tr>
	</table>
	<table class='adminlist'>
	<tr>
	<td>Operator: <input type='text' name='opr'></td>
	<td>Asisten: <input type='text' name='asis'></td>
	<td>Instrumen: <input type='text' name='instr'></td>
	</tr>
	</table>

	<table class='adminlist'>
	<tr>
	<td width='30%'>Pembius: <input type='text' name='bius'></td>
	<td>Jenis pembiusan: <input type='text' name='jnsbius'></td>
	</tr>

	<tr>
	<td>Diagnose pra bedah:</td>
	<td>: <input type='text' name='diag1' size='100'></td>
	</tr>

	<tr>
	<td>Diagnose pasca bedah:</td>
	<td>: <input type='text' name='diag2' size='100'></td>
	</tr>

	<tr>
	<td>Jaringan yang di-eksisi/insisi:
	<br>
	<input type='text' name='jar' size='30'>
	<br>
	Nama macam operasi:
	<br>
	<input type='text' name='opr2' size='30'>
	</td>

	<td valign='top'>
	Dikirim untuk pemeriksaan:
	<br>
	PA :
	<select name='pa'>
	<option value=''>-</option>
	<option value='ya'>ya</option>
	<option value='tidak'>tidak</option>
	</select>
	</td>
	</tr>
	</table>
	<table class='adminlist'>
	<tr>
	<td rowspan='2'> Tgl Operasi:
	<br>
	<input type='text' name='tglopr'>
	</td>

	<td>Operasi mulai: Jam <input type='text' name='mlopr' size='10'></td>
	<td>Operasi selesai: Jam <input type='text' name='slsopr' size='10'></td>
	<td>Lama Operasi: Jam <input type='text' name='lmopr' size='10'></td>
	</tr>

	<tr>
	<td>Pembiusan mulai: Jam <input type='text' name='mlbius' size='10'></td>
	<td>Pembiusan selesai: Jam <input type='text' name='slsbius' size='10'></td>
	<td>Lama pembiusan: Jam <input type='text' name='lmbius' size='10'></td>
	</tr>

	<tr>
	<td colspan='4'>
	Catatan lain-lain:
	<br>
	<input type='text' name='lain' size='150'>
	</td>

	</tr>
	<tr>
	<td colspan='4'>
	Laporan Operasi:
	<br>
	<textarea name='lapor' cols='100' rows='10'>
	</textarea>
	</td>
	</tr>
	<tr>
	<td></td>
	<td></td>
	<td></td>
	<td align='center'>
	OPERATOR

	<br><br><br>
	<input type='text' name='' size='30'>
	</td>
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
		/////////////////////////////////////////////////////////
	else
	{
		$c1=mysql_query("select *from m_lapopr where idpas='$idpas'");
	while($c=mysql_fetch_array($c1))
		{
	$bag=$c['bag'];
	$opr=$c['opr'];
	$asis=$c['asis'];
	$instr=$c['instr'];
	$bius=$c['bius'];
	$jnsbius=$c['jnsbius'];
	$diag1=$c['diag1'];
	$diag2=$c['diag2'];
	$jar=$c['jar'];
	$opr2=$c['opr2'];
	$pa=$c['pa'];
		}
	$d1=mysql_query("select *from m_lapopr2 where idpas='$idpas'");
	while($d=mysql_fetch_array($d1))
		{
	$tglopr=$d['tglopr'];
	$mlopr=$d['mlopr'];
	$slsopr=$d['slsopr'];
	$lmopr=$d['lmopr'];
	$mlbius=$d['mlbius'];
	$slsbius=$d['slsbius'];
	$lmbius=$d['lmbius'];
	$lain=$d['lain'];
	$lapor=$d['lapor'];
		}
	echo"
	<form method='post' action='index.php?task=eio_lo'>
	<br>
	<h1>LAPORAN OPERASI</h1>
	<br>
	<table class='adminlist'>
	<tr>
	<td rowspan='2'><b>LAPORAN OPERASI</b></td>
	<td>R: $kls_rg/ $nm_rg</td>
	<td>BAG: <input type='text' name='bag' value='$bag'></td>
	<td>No. RM: $norm</td>
	</tr>

	<tr>
	<td>Nama Penderita: $nama</td>
	<td>$sex</td>
	<td>Umur: $umur</td>
	</tr>
	</table>
	<table class='adminlist'>
	<tr>
	<td>Operator: <input type='text' name='opr' value='$opr'></td>
	<td>Asisten: <input type='text' name='asis' value='$asis'></td>
	<td>Instrumen: <input type='text' name='instr' value='$instr'></td>
	</tr>
	</table>

	<table class='adminlist'>
	<tr>
	<td width='30%'>Pembius: <input type='text' name='bius' value='$bius'></td>
	<td>Jenis pembiusan: <input type='text' name='jnsbius' value='$jnsbius'></td>
	</tr>

	<tr>
	<td>Diagnose pra bedah:</td>
	<td>: <input type='text' name='diag1' size='100' value='$diag1'></td>
	</tr>

	<tr>
	<td>Diagnose pasca bedah:</td>
	<td>: <input type='text' name='diag2' size='100' value='$diag2'></td>
	</tr>

	<tr>
	<td>Jaringan yang di-eksisi/insisi:
	<br>
	<input type='text' name='jar' size='30' value='$jar'>
	<br>
	Nama macam operasi:
	<br>
	<input type='text' name='opr2' size='30' value='$opr2'>
	</td>

	<td valign='top'>
	Dikirim untuk pemeriksaan:
	<br>
	PA :
	<select name='pa'>
	<option value='$pa'>$pa</option>
	<option value=''>-</option>
	<option value='ya'>ya</option>
	<option value='tidak'>tidak</option>
	</select>
	</td>
	</tr>
	</table>
	<table class='adminlist'>
	<tr>
	<td rowspan='2'> Tgl Operasi:
	<br>
	<input type='text' name='tglopr' value='$tglopr'>
	</td>

	<td>Operasi mulai: Jam <input type='text' name='mlopr' size='10' value='$mlopr'></td>
	<td>Operasi selesai: Jam <input type='text' name='slsopr' size='10' value='$slsopr'></td>
	<td>Lama Operasi: Jam <input type='text' name='lmopr' size='10' value='$lmopr'></td>
	</tr>

	<tr>
	<td>Pembiusan mulai: Jam <input type='text' name='mlbius' size='10' value='$mlbius'></td>
	<td>Pembiusan selesai: Jam <input type='text' name='slsbius' size='10' value='$slsbius'></td>
	<td>Lama pembiusan: Jam <input type='text' name='lmbius' size='10' value='$lmbius'></td>
	</tr>

	<tr>
	<td colspan='4'>
	Catatan lain-lain:
	<br>
	<input type='text' name='lain' size='150' value='$lain'>
	</td>

	</tr>
	<tr>
	<td colspan='4'>
	Laporan Operasi:
	<br>
	<textarea name='lapor' cols='100' rows='10'>$lapor
	</textarea>
	</td>
	</tr>
	<tr>
	<td></td>
	<td></td>
	<td></td>
	<td align='center'>
	OPERATOR

	<br><br><br>
	<input type='text' name='' size='30' value='$opr'>
	</td>
	</tr>
	<tr>
	<td colspan='4' align='center'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value='[ GANTI ]'>
	</td>
	</tr>
	</table>
	</form>

	";
	}


	}

function pio_lo()
	{
	$idpas=$_POST['idpas'];
	$bag=$_POST['bag'];
	$opr=$_POST['opr'];
	$asis=$_POST['asis'];
	$instr=$_POST['instr'];
	$bius=$_POST['bius'];
	$jnsbius=$_POST['jnsbius'];
	$diag1=$_POST['diag1'];
	$diag2=$_POST['diag2'];
	$jar=$_POST['jar'];
	$opr2=$_POST['opr2'];
	$pa=$_POST['pa'];

	$tglopr=$_POST['tglopr'];
	$mlopr=$_POST['mlopr'];
	$slsopr=$_POST['slsopr'];
	$lmopr=$_POST['lmopr'];
	$mlbius=$_POST['mlbius'];
	$slsbius=$_POST['slsbius'];
	$lmbius=$_POST['lmbius'];
	$lain=$_POST['lain'];
	$lapor=$_POST['lapor'];

	$a=mysql_query("insert into m_lapopr values ('', '$idpas', '$bag', '$opr', '$asis', '$instr', '$bius', '$jnsbius', '$diag1', '$diag2', '$jar', '$opr2', '$pa')");
	$b=mysql_query("insert into m_lapopr2 values ('', '$idpas', '$tglopr', '$mlopr', '$slsopr', '$lmopr', '$mlbius', '$slsbius', '$lmbius', '$lain', '$lapor')");
	if ($a and $b)
		{
		header ("Location: index.php?task=mes&idpas=$idpas&alm=io_lo&pes=Data Sudah Masuk");
		}
	else
		{echo"error";}
	}

function eio_lo()
	{
	$idpas=$_POST['idpas'];
	$bag=$_POST['bag'];
	$opr=$_POST['opr'];
	$asis=$_POST['asis'];
	$instr=$_POST['instr'];
	$bius=$_POST['bius'];
	$jnsbius=$_POST['jnsbius'];
	$diag1=$_POST['diag1'];
	$diag2=$_POST['diag2'];
	$jar=$_POST['jar'];
	$opr2=$_POST['opr2'];
	$pa=$_POST['pa'];

	$tglopr=$_POST['tglopr'];
	$mlopr=$_POST['mlopr'];
	$slsopr=$_POST['slsopr'];
	$lmopr=$_POST['lmopr'];
	$mlbius=$_POST['mlbius'];
	$slsbius=$_POST['slsbius'];
	$lmbius=$_POST['lmbius'];
	$lain=$_POST['lain'];
	$lapor=$_POST['lapor'];

	$a=mysql_query("update  m_lapopr set bag='$bag', opr='$opr', asis='$asis', instr='$instr', bius='$bius', jnsbius='$jnsbius', diag1='$diag1', diag2='$diag2', jar='$jar', opr2='$opr2', pa='$pa' where idpas='$idpas'");
	$b=mysql_query("update m_lapopr2 set tglopr='$tglopr', mlopr='$mlopr', slsopr='$slsopr', lmopr='$lmopr', mlbius='$mlbius', slsbius='$slsbius', lmbius='$lmbius', lain='$lain', lapor='$lapor' where idpas='$idpas'");
	if ($a and $b)
		{
		header ("Location: index.php?task=mes&idpas=$idpas&alm=io_lo&pes=Data Sudah Diganti");
		}
	else
		{echo"error";}
	}


function nndiag()
	{
	$pesan=$_GET['pesan'];
	//$status=$_GET['status'];
	echo"<center>
	<h1>DIAGNOSA NON INPARTU NORMAL</h1></center>
	<br><br>
	<form method='post' action='index.php?task=nn_diag'>
	<table class='adminlist'>
	<tr>
	<td>
	Nama Pasien :
	</td>

	</tr>

	<tr>
	<td width='50%'>

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Non Inpartu Normal' order by nama ASC");
	while ($a=mysql_fetch_array($a1))
		{
		$n=$a[nama];
		$nama=strtoupper($n);
		echo"
		<option value='$a[idpas]'>$nama - $a[idpas]</option>
		";
		}
	echo"
	</select>

	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}


function nn_diag()
	{
	$idpas=$_POST['idpas'];
	$pesan=$_POST['pesan'];
	$tglskr=DATE('d-m-Y');
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
	$c=mysql_query("select *from m_konfrg where id='$idrg'");
	while($c1=mysql_fetch_array($c))
		{
		$nm_rg=$c1[nm_rg];
		$kls_rg=$c1[kls_rg];
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
	<h1>DIAGNOSA</h1>
	<br>
	<u>$pesan</u>
	<br><br>
	<table class='adminlist'>

	<tr>
	<td width='10%'>Nama</td>
	<td width='40%'>$nama</td>
	<td width='10%'>No RM</td>
	<td>$norm</td>
	</tr>

	<tr>
	<td width='10%'>Umur</td>
	<td>$umur</td>
	<td width='10%'>Klas</td>
	<td>$kls_rg/ $nm_rg</td>
	</tr>

	<tr>
	<td width='10%'>Alamat</td>
	<td>$alm RT.$rw - RT.$rt $lurah - $kec - $kota </td>
	<td width='10%'>Tgl masuk</td>
	<td>$tglinap-$blninap-$thninap</td>
	</tr>

	<tr>
	<td width='10%'>Pekerjaan</td>
	<td>$ker</td>
	<td width='10%'>Tgl Keluar</td>
	<td>$tglklr</td>
	</tr>

	</table>
	<table class='adminlist'>
	<tr>
	<td colspan='11'>
	Diagnose:
	</td>
	</tr>
	<tr>
	<td>Tgl</td>
	<td>T/P</td>
	<td>8</td>
	<td>12</td>
	<td>4</td>
	<td>8</td>
	<td>12</td>
	<td>0</td>
	<td>Tumpah</td>
	<td>Keterangan</td>
	<td>Anamnese,status,therapie:</td>
	</tr>
	<form method='post' action='index.php?task=pnn_diag'>
	<tr>
	<td><input type='text' name='tgl' value='$tglskr' size='13'></td>
	<td><input type='text' name='tp' size='3'></td>
	<td><input type='text' name='a' size='3'></td>
	<td><input type='text' name='b' size='3'></td>
	<td><input type='text' name='c' size='3'></td>
	<td><input type='text' name='d' size='3'></td>
	<td><input type='text' name='e' size='3'></td>
	<td><input type='text' name='f' size='3'></td>
	<td><input type='text' name='tumpah' size='10'></td>
	<td><input type='text' name='ket' size='20'></td>
	<td><input type='text' name='amnese' size='40'></td>
	</tr>
	<tr>
	<td colspan='11' align='center'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value='[ SIMPAN ]'>

	</td>
	</tr>
	</table>
	<br><br>

	";

	echo"
	<table class='adminlist'>
	<tr>
	<td colspan='12'>
	Diagnose:
	</td>
	</tr>
	<tr>
	<td>Tgl</td>
	<td>T/P</td>
	<td>8</td>
	<td>12</td>
	<td>4</td>
	<td>8</td>
	<td>12</td>
	<td>0</td>
	<td>Tumpah</td>
	<td>Keterangan</td>
	<td>Anamnese,status,therapie:</td>
	<td>Hapus</td>
	</tr>
	";
	$d1=mysql_query("select *from m_diagnosani where idpas='$idpas'");
	while ($d=mysql_fetch_array($d1))
		{
	echo"
	<tr>
	<td><a href='index.php?task=enn_diag&id=$d[id]&idpas=$idpas'>$d[tgl]</a></td>
	<td>$d[tp]</td>
	<td>$d[a] </td>
	<td>$d[b] </td>
	<td>$d[c] </td>
	<td>$d[d] </td>
	<td>$d[e]</td>
	<td>$d[f]</td>
	<td>$d[tumpah]</td>
	<td>$d[ket]</td>
	<td>$d[amnese]</td>
	<td><a href='index.php?task=del&id=$d[id]&db=diagnosani&alm=nn_diag&idpas=$idpas'>Hapus</a></td>
	</tr>
	";
		}

	echo"
	</table>
	";
	}

function pnn_diag()
	{
	$idpas=$_POST['idpas'];
	$tgl=$_POST['tgl'];
	$tp=$_POST['tp'];
	$a=$_POST['a'];
	$b=$_POST['b'];
	$c=$_POST['c'];
	$d=$_POST['d'];
	$e=$_POST['e'];
	$f=$_POST['f'];
	$tumpah=$_POST['tumpah'];
	$ket=$_POST['ket'];
	$amnese=$_POST['amnese'];

	$a=mysql_query("insert into m_diagnosani values ('', '$idpas', '$tgl', '$tp', '$a', '$b', '$c', '$d', '$e', '$f', '$tumpah', '$ket', '$amnese')");
	if($a)
		{header ("Location: index.php?task=mes&alm=nn_diag&idpas=$idpas&pes=Data Sudah Masuk");}
	else
		{echo"error";}
	}

function enn_diag()
	{
	$id=$_GET['id'];
	$idpas=$_GET['idpas'];
	$a1=mysql_query("select *from m_diagnosani where id='$id'");
	while ($a=mysql_fetch_array($a1))
		{
		$tgl=$a['tgl'];
		$tp=$a['tp'];
		$ad=$a['a'];
		$b=$a['b'];
		$c=$a['c'];
		$d=$a['d'];
		$e=$a['e'];
		$f=$a['f'];
		$tumpah=$a['tumpah'];
		$ket=$a['ket'];
		$amnese=$a['amnese'];
		}
	echo"
	<table class='adminlist'>
	<tr>
	<td colspan='11'>
	Diagnose:
	</td>
	</tr>
	<tr>
	<td>Tgl</td>
	<td>T/P</td>
	<td>8</td>
	<td>12</td>
	<td>4</td>
	<td>8</td>
	<td>12</td>
	<td>0</td>
	<td>Tumpah</td>
	<td>Keterangan</td>
	<td>Anamnese,status,therapie:</td>
	</tr>
	<form method='post' action='index.php?task=enn_diag2'>
	<tr>
	<td><input type='text' name='tgl' value='$tgl' size='13'></td>
	<td><input type='text' name='tp' size='3' value='$tp'></td>
	<td><input type='text' name='a' size='3' value='$ad'></td>
	<td><input type='text' name='b' size='3' value='$b'></td>
	<td><input type='text' name='c' size='3' value='$c'></td>
	<td><input type='text' name='d' size='3' value='$d'></td>
	<td><input type='text' name='e' size='3' value='$e'></td>
	<td><input type='text' name='f' size='3' value='$f'></td>
	<td><input type='text' name='tumpah' size='10' value='$tumpah'></td>
	<td><input type='text' name='ket' size='20' value='$ket'></td>
	<td><input type='text' name='amnese' size='40' value='$amnese'></td>
	</tr>
	<tr>
	<td colspan='11' align='center'>
	<input type='hidden' name='id' value='$id'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value='[ GANTi ]'>

	</td>
	</tr>
	</table>
	";
	}

function enn_diag2()
	{
	$id=$_POST['id'];
	$idpas=$_POST['idpas'];
	$tgl=$_POST['tgl'];
	$tp=$_POST['tp'];
	$ad=$_POST['a'];
	$b=$_POST['b'];
	$c=$_POST['c'];
	$d=$_POST['d'];
	$e=$_POST['e'];
	$f=$_POST['f'];
	$tumpah=$_POST['tumpah'];
	$ket=$_POST['ket'];
	$amnese=$_POST['amnese'];

	$a=mysql_query("update m_diagnosani set tgl='$tgl', tp='$tp', a='$ad', b='$b', c='$c', d='$d', e='$e', f='$f', tumpah='$tumpah', ket='$ket', amnese='$amnese' where id='$id'");
	if($a)
		{header ("Location: index.php?task=mes&alm=nn_diag&idpas=$idpas&pes=Data Sudah Diganti");}
	else
		{echo"error";}

	}


function nnots()
	{
	$pesan=$_GET['pesan'];
	//$status=$_GET['status'];
	echo"<center>
	<h1>OBSERVASI TENSI SUHU NON INPARTU NORMAL</h1></center>
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

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Non Inpartu Normal' order by nama ASC");
	while ($a=mysql_fetch_array($a1))
		{
		$n=$a[nama];
		$nama=strtoupper($n);
		echo"
		<option value='$a[idpas]'>$nama - $a[idpas]</option>
		";
		}
	echo"
	</select>
	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}

function nnstm()
	{
	$pesan=$_GET['pesan'];
	//$status=$_GET['status'];
	echo"<center>
	<h1>PERSETUJUAN TINDAKAN MEDIK NON INPARTU NORMAL</h1></center>
	<br><br>
	<form method='post' action='index.php?task=in_stm'>
	<table class='adminlist'>
	<tr>
	<td>
	Nama Pasien :
	</td>

	</tr>

	<tr>
	<td width='50%'>

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Non Inpartu Normal' order by nama ASC");
	while ($a=mysql_fetch_array($a1))
		{
		$n=$a[nama];
		$nama=strtoupper($n);
		echo"
		<option value='$a[idpas]'>$nama - $a[idpas]</option>
		";
		}
	echo"
	</select>
	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}

function nnttm()
	{
	$pesan=$_GET['pesan'];
	//$status=$_GET['status'];
	echo"<center>
	<h1>PENOLAKAN TINDAKAN MEDIK NON INPARTU NORMAL</h1></center>
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

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Non Inpartu Normal' order by nama ASC");
	while ($a=mysql_fetch_array($a1))
		{
		$n=$a[nama];
		$nama=strtoupper($n);
		echo"
		<option value='$a[idpas]'>$nama - $a[idpas]</option>
		";
		}
	echo"
	</select>
	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}


function nodiag()
	{
	$pesan=$_GET['pesan'];
	//$status=$_GET['status'];
	echo"<center>
	<h1>DIAGNOSA NON INPARTU OPERASI</h1></center>
	<br><br>
	<form method='post' action='index.php?task=nn_diag'>
	<table class='adminlist'>
	<tr>
	<td>
	Nama Pasien :
	</td>

	</tr>

	<tr>
	<td width='50%'>

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Non Inpartu Operasi' order by nama ASC");
	while ($a=mysql_fetch_array($a1))
		{
		$n=$a[nama];
		$nama=strtoupper($n);
		echo"
		<option value='$a[idpas]'>$nama - $a[idpas]</option>
		";
		}
	echo"
	</select>
	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}

function noots()
	{
	$pesan=$_GET['pesan'];
	//$status=$_GET['status'];
	echo"<center>
	<h1>OBSERVASI TENSI SUHU NON INPARTU OPERASI</h1></center>
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

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Non Inpartu Operasi' order by nama ASC");
	while ($a=mysql_fetch_array($a1))
		{
		$n=$a[nama];
		$nama=strtoupper($n);
		echo"
		<option value='$a[idpas]'>$nama - $a[idpas]</option>
		";
		}
	echo"
	</select>
	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}

function noidlp()
	{
	$pesan=$_GET['pesan'];
	//$status=$_GET['status'];
	echo"<center>
	<h1>INSTRUKSI DOKTER NON INPARTU OPERASI</h1></center>
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

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Non Inpartu Operasi' order by nama ASC");
	while ($a=mysql_fetch_array($a1))
		{
		$n=$a[nama];
		$nama=strtoupper($n);
		echo"
		<option value='$a[idpas]'>$nama - $a[idpas]</option>
		";
		}
	echo"
	</select>
	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}

function norsm()
	{
	$pesan=$_GET['pesan'];
	//$status=$_GET['status'];
	echo"<center>
	<h1>RESUME MEDIK NON INPARTU OPERASI</h1></center>
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

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Non Inpartu Operasi' order by nama ASC");
	while ($a=mysql_fetch_array($a1))
		{
		$n=$a[nama];
		$nama=strtoupper($n);
		echo"
		<option value='$a[idpas]'>$nama - $a[idpas]</option>
		";
		}
	echo"
	</select>
	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}

function nostm()
	{
	$pesan=$_GET['pesan'];
	//$status=$_GET['status'];
	echo"<center>
	<h1>PERSETUJUAN TINDAKAN MEDIK NON INPARTU OPERASI</h1></center>
	<br><br>
	<form method='post' action='index.php?task=in_stm'>
	<table class='adminlist'>
	<tr>
	<td>
	Nama Pasien :
	</td>

	</tr>

	<tr>
	<td width='50%'>

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Non Inpartu Operasi' order by nama ASC");
	while ($a=mysql_fetch_array($a1))
		{
		$n=$a[nama];
		$nama=strtoupper($n);
		echo"
		<option value='$a[idpas]'>$nama - $a[idpas]n</option>
		";
		}
	echo"
	</select>
	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}


function nottm()
	{
	$pesan=$_GET['pesan'];
	//$status=$_GET['status'];
	echo"<center>
	<h1>PENOLAKAN TINDAKAN MEDIK NON INPARTU OPERASI</h1></center>
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

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Non Inpartu Operasi' order by nama ASC");
	while ($a=mysql_fetch_array($a1))
		{
		$n=$a[nama];
		$nama=strtoupper($n);
		echo"
		<option value='$a[idpas]'>$nama - $a[idpas]</option>
		";
		}
	echo"
	</select>
	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}

function noipo()
	{
	$pesan=$_GET['pesan'];
	//$status=$_GET['status'];
	echo"<center>
	<h1>INSTRUKSI POST OPERASI NON INPARTU OPERASI</h1></center>
	<br><br>
	<form method='post' action='index.php?task=io_ipo'>
	<table class='adminlist'>
	<tr>
	<td>
	Nama Pasien :
	</td>

	</tr>

	<tr>
	<td width='50%'>

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Non Inpartu Operasi' order by nama ASC");
	while ($a=mysql_fetch_array($a1))
		{
		$n=$a[nama];
		$nama=strtoupper($n);
		echo"
		<option value='$a[idpas]'>$nama - $a[idpas]</option>
		";
		}
	echo"
	</select>
	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}

function noipb()
	{
	$pesan=$_GET['pesan'];
	//$status=$_GET['status'];
	echo"<center>
	<h1>INSTRUKSI PASCA BEDAH NON INPARTU OPERASI</h1></center>
	<br><br>
	<form method='post' action='index.php?task=io_ipb'>
	<table class='adminlist'>
	<tr>
	<td>
	Nama Pasien :
	</td>

	</tr>

	<tr>
	<td width='50%'>

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Non Inpartu Operasi' order by nama ASC");
	while ($a=mysql_fetch_array($a1))
		{
		$n=$a[nama];
		$nama=strtoupper($n);
		echo"
		<option value='$a[idpas]'>$nama - $a[idpas]</option>
		";
		}
	echo"
	</select>
	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}

function nolo()
	{
	$pesan=$_GET['pesan'];
	//$status=$_GET['status'];
	echo"<center>
	<h1>LAPORAN OPERASI NON INPARTU OPERASI</h1></center>
	<br><br>
	<form method='post' action='index.php?task=io_lo'>
	<table class='adminlist'>
	<tr>
	<td>
	Nama Pasien :
	</td>

	</tr>

	<tr>
	<td width='50%'>

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Non Inpartu Operasi' order by nama ASC");
	while ($a=mysql_fetch_array($a1))
		{
		$n=$a[nama];
		$nama=strtoupper($n);
		echo"
		<option value='$a[idpas]'>$nama - $a[idpas]</option>
		";
		}
	echo"
	</select>
	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}

}

?>