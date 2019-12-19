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
	Selamat Datang di HALAMAN KAMAR BERSALIN RSIA MARDI WALOEJA MALANG

	<br>
	<br>";
	?>
	<!--
	 <a href="gundul.php"><img src="../touch/account.png" onmouseover=" this.src='../touch/account_b.png'" onmouseout="this.src='../touch/account.png'"></a>

	<a href="gundul.php"><img src="../touch/absent.png" onmouseover=" this.src='../touch/absent_b.png'" onmouseout="this.src='../touch/absent.png'"></a>

	<a href="gundul.php"><img src="../touch/anestesia.png" onmouseover=" this.src='../touch/anestesia_b.png'" onmouseout="this.src='../touch/anestesia.png'">
	</a>

	<a href="gundul.php"><img src="../touch/bedah.png" onmouseover=" this.src='../touch/bedah_b.png'" onmouseout="this.src='../touch/bedah.png'">
	</a>

	<a href="gundul.php"><img src="../touch/coma.png" onmouseover=" this.src='../touch/coma_b.png'" onmouseout="this.src='../touch/coma.png'">
	</a>

	<a href="gundul.php"><img src="../touch/deal.png" onmouseover=" this.src='../touch/deal_b.png'" onmouseout="this.src='../touch/deal.png'">
	</a>
	-->
	<?php echo"
	";
	}

function menu_identpas()
	{
	?>

	<center><h1>Identitas Pasien</h1></center>
	<br><br>
	<table width="100%" border="0" cellpadding="10" cellspacing="10" class="adminlist">
	<tr>
	<td width="50%" align="center" valign="center">
	<a href="index.php?task=in_identpas"><img width="100px" src="../touch/PatientIdentity.png" onmouseover=" this.src='../touch/PatientIdentity_b.png'" onmouseout="this.src='../touch/PatientIdentity.png'">
	<br><b>Identitas Pasien</b>
	</a>
	</td>

	<td align="center" valign="center">
	<a href="index.php?task=in_sebabmati"><img width="100px" src="../touch/diedfactor.png" onmouseover=" this.src='../touch/diedfactor_b.png'" onmouseout="this.src='../touch/diedfactor.png'">
	<br><b>Sebab Kematian</b></a>
	</td>

	</tr>
	</table>
	<?php
	}

function menu_inpartunormal()
	{
	?>
	<center><h1>Inpartu Normal</h1></center>
	<br><br>

	<table width="100%" border="0" cellpadding="10" cellspacing="10" class="adminlist">
	<tr>
	<td width="30%" align="center" valign="center">
	<a href="index.php?task=instsln&status=Inpartu Normal"><img width="100px" src="../touch/statusLabor.png" onmouseover=" this.src='../touch/statusLabor_b.png'" onmouseout="this.src='../touch/statusLabor.png'">
	<br><b>Status Persalinan</b>
	</a>
	</td>

	<td align="center" valign="center" width="30%">
	<a href="index.php?task=inrwysln&status=Inpartu Normal"><img width="100px" src="../touch/historyLabor.png" onmouseover=" this.src='../touch/historyLabor_b.png'" onmouseout="this.src='../touch/historyLabor.png'">
	<br><b>Riwayat Persalinan</b></a>
	</td>

	<td align="center" valign="center" width="30%">
	<a href="index.php?task=instsln2&status=Inpartu Normal"><img width="100px" src="../touch/statusLabor2.png" onmouseover=" this.src='../touch/statusLabor2_b.png'" onmouseout="this.src='../touch/statusLabor2.png'">
	<br><b>Status Persalinan II</b></a>
	</td>
	</tr>
	</table>

	<table class="adminlist">
	<tr>
	<td align="center" valign="center" width="50%">
	<a href="index.php?task=inlapsln&status=Inpartu Normal"><img width="100px" src="../touch/reportLabor.png" onmouseover=" this.src='../touch/reportLabor_b.png'" onmouseout="this.src='../touch/reportLabor.png'">
	<br><b>Laporan Persalinan</b></a>
	</td>

	<td align="center" valign="center" width="50%">
	<a href="index.php?task=inlapsln2&status=Inpartu Normal"><img width="100px" src="../touch/report.png" onmouseover=" this.src='../touch/report_b.png'" onmouseout="this.src='../touch/report.png'">
	<br><b>Laporan Persalinan & Kelahiran</b></a>
	</td>
	</tr>
	</table>
	<br><br>
	<table width="100%" border="0" cellpadding="10" cellspacing="10" class="adminlist">
	<tr>
	<td width="30%" align="center" valign="center">
	<a href="index.php?task=inots&status=Inpartu Normal"><img width="100px" src="../touch/tension.png" onmouseover=" this.src='../touch/tension_b.png'" onmouseout="this.src='../touch/tension.png'">
	<br><b>Observasi Tensi Suhu</b>
	</a>
	</td>

	<td align="center" valign="center" width="30%">
	<a href="index.php?task=inidlp&status=Inpartu Normal"><img width="100px" src="../touch/Instruction.png" onmouseover=" this.src='../touch/Instruction_b.png'" onmouseout="this.src='../touch/Instruction.png'">
	<br><b>Instruksi Dokter & Laporan</b></a>
	</td>

	<td align="center" valign="center" width="30%">
	<a href="index.php?task=inrsm&status=Inpartu Normal"><img width="100px" src="../touch/resumemedic.png" onmouseover=" this.src='../touch/resumemedic_b.png'" onmouseout="this.src='../touch/resumemedic.png'">
	<br><b>Resume Medik</b></a>
	</td>
	</tr>
	</table>

	<table class="adminlist">
	<tr>
	<td align="center" valign="center" width="50%">
	<a href="index.php?task=instm&status=Inpartu Normal"><img width="100px" src="../touch/deal.png" onmouseover=" this.src='../touch/deal_b.png'" onmouseout="this.src='../touch/deal.png'">
	<br><b>Persetujuan Tindakan Medik</b></a>
	</td>

	<td align="center" valign="center" width="50%">
	<a href="index.php?task=inttm&status=Inpartu Normal"><img width="100px" src="../touch/nodeal.png" onmouseover=" this.src='../touch/nodeal_b.png'" onmouseout="this.src='../touch/nodeal.png'">
	<br><b>Penolakan Tindakan Medik</b></a>
	</td>
	</tr>
	</table>
	<?php
	}

function menu_inpartuoperasi()
	{
	?>
	<center><h1>Inpartu Operasi</h1></center>
	<br><br>
	<table width="100%" border="0" cellpadding="10" cellspacing="10" class="adminlist">
	<tr>
	<td width="30%" align="center" valign="center">
	<a href="index.php?task=iostsln&status=Inpartu Operasi"><img width="100px" src="../touch/statusLabor.png" onmouseover=" this.src='../touch/statusLabor_b.png'" onmouseout="this.src='../touch/statusLabor.png'">
	<br><b>Status Persalinan</b>
	</a>
	</td>

	<td align="center" valign="center" width="30%">
	<a href="index.php?task=iorwysln&status=Inpartu Operasi"><img width="100px" src="../touch/historyLabor.png" onmouseover=" this.src='../touch/historyLabor_b.png'" onmouseout="this.src='../touch/historyLabor.png'">
	<br><b>Riwayat Persalinan</b></a>
	</td>

	<td align="center" valign="center" width="30%">
	<a href="index.php?task=iostsln2&status=Inpartu Operasi"><img width="100px" src="../touch/statusLabor2.png" onmouseover=" this.src='../touch/statusLabor2_b.png'" onmouseout="this.src='../touch/statusLabor2.png'">
	<br><b>Status Persalinan II</b></a>
	</td>
	</tr>
	</table>

	<table class="adminlist">
	<tr>
	<td align="center" valign="center" width="50%">
	<a href="index.php?task=iolapsln&status=Inpartu Operasi"><img width="100px" src="../touch/reportLabor.png" onmouseover=" this.src='../touch/reportLabor_b.png'" onmouseout="this.src='../touch/reportLabor.png'">
	<br><b>Laporan Persalinan</b></a>
	</td>

	<td align="center" valign="center" width="50%">
	<a href="index.php?task=iolapsln2&status=Inpartu Operasi"><img width="100px" src="../touch/report.png" onmouseover=" this.src='../touch/report_b.png'" onmouseout="this.src='../touch/report.png'">
	<br><b>Laporan Persalinan & Kelahiran</b></a>
	</td>
	</tr>
	</table>
	<!-- -->
	<br><br>
	<table width="100%" border="0" cellpadding="10" cellspacing="10" class="adminlist">
	<tr>
	<td width="30%" align="center" valign="center">
	<a href="index.php?task=ioots&status=Inpartu Operasi"><img width="100px" src="../touch/tension.png" onmouseover=" this.src='../touch/tension_b.png'" onmouseout="this.src='../touch/tension.png'">
	<br><b>Observasi Tensi Suhu</b>
	</a>
	</td>

	<td align="center" valign="center" width="30%">
	<a href="index.php?task=ioidlp&status=Inpartu Operasi"><img width="100px" src="../touch/Instruction.png" onmouseover=" this.src='../touch/Instruction_b.png'" onmouseout="this.src='../touch/Instruction.png'">
	<br><b>Instruksi Dokter & Laporan</b></a>
	</td>

	<td align="center" valign="center" width="30%">
	<a href="index.php?task=iorsm&status=Inpartu Operasi"><img width="100px" src="../touch/resumemedic.png" onmouseover=" this.src='../touch/resumemedic_b.png'" onmouseout="this.src='../touch/resumemedic.png'">
	<br><b>Resume Medik</b></a>
	</td>
	</tr>
	</table>

	<table class="adminlist">
	<tr>
	<td align="center" valign="center" width="50%">
	<a href="index.php?task=iostm&status=Inpartu Operasi"><img width="100px" src="../touch/deal.png" onmouseover=" this.src='../touch/deal_b.png'" onmouseout="this.src='../touch/deal.png'">
	<br><b>Persetujuan Tindakan Medik</b></a>
	</td>

	<td align="center" valign="center" width="50%">
	<a href="index.php?task=iottm&status=Inpartu Operasi"><img width="100px" src="../touch/nodeal.png" onmouseover=" this.src='../touch/nodeal_b.png'" onmouseout="this.src='../touch/nodeal.png'">
	<br><b>Penolakan Tindakan Medik</b></a>
	</td>
	</tr>
	</table>

	<!-- 3  -->
	<br><br>
	<table width="100%" border="0" cellpadding="10" cellspacing="10" class="adminlist">
	<tr>
	<td width="25%" align="center" valign="center">
	<a href="index.php?task=ioipo&status=Inpartu Operasi"><img width="100px" src="../touch/operation.png" onmouseover=" this.src='../touch/operation_b.png'" onmouseout="this.src='../touch/operation.png'">
	<br><b>Instruksi Post Operasi</b>
	</a>
	</td>

	<td align="center" valign="center" width="25%">
	<a href="index.php?task=ioipb&status=Inpartu Operasi"><img width="100px" src="../touch/anestesia.png" onmouseover=" this.src='../touch/anestesia_b.png'" onmouseout="this.src='../touch/anestesia.png'">
	<br><b>Catatan Anestesia</b></a>
	</td>

	<td align="center" valign="center" width="25%">
	<a href="index.php?task=ioipb2&status=Inpartu Operasi"><img width="100px" src="../touch/bedah.png" onmouseover=" this.src='../touch/bedah_b.png'" onmouseout="this.src='../touch/bedah.png'">
	<br><b>Instruksi Pasca Bedah</b></a>
	</td>

	<td align="center" valign="center" width="25%">
	<a href="index.php?task=iolo&status=Inpartu Operasi"><img width="100px" src="../touch/operationRepot.png" onmouseover=" this.src='../touch/operationRepot_b.png'" onmouseout="this.src='../touch/operationRepot.png'">
	<br><b>Laporan Operasi</b></a>
	</td>
	</tr>
	</table>
	<?php
	}

function menu_noninpartunormal()
	{
	?>
	<center><h1>Non Inpartu Normal</h1></center>
	<br><br>
	<table width="100%" border="0" cellpadding="10" cellspacing="10" class="adminlist">
	<tr>
	<td width="25%" align="center" valign="center">
	<a href="index.php?task=nndiag"><img width="100px" src="../touch/diagnose.png" onmouseover=" this.src='../touch/diagnose_b.png'" onmouseout="this.src='../touch/diagnose.png'">
	<br><b>Diagnosa</b>
	</a>
	</td>

	<td align="center" valign="center" width="25%">
	<a href="index.php?task=nnots"><img width="100px" src="../touch/tension.png" onmouseover=" this.src='../touch/tension_b.png'" onmouseout="this.src='../touch/tension.png'">
	<br><b>Observasi Tensi Suhu</b></a>
	</td>

	<td width="25%" align="center" valign="center">
	<a href="index.php?task=nnstm"><img width="100px" src="../touch/deal.png" onmouseover=" this.src='../touch/deal_b.png'" onmouseout="this.src='../touch/deal.png'">
	<br><b>Persetujuan Tindakan Medik</b>
	</a>
	</td>

	<td align="center" valign="center" width="25%">
	<a href="index.php?task=nnttm"><img width="100px" src="../touch/nodeal.png" onmouseover=" this.src='../touch/nodeal_b.png'" onmouseout="this.src='../touch/nodeal.png'">
	<br><b>Penolakan Tindakan Medik</b></a>
	</td>

	</tr>
	</table>
	<?php
	}

function menu_noninpartuoperasi()
	{
	?>
	<!-- -->
	<center><h1>Non Inpartu Operasi</h2></center>
	<br><br>
	<table width="100%" border="0" cellpadding="10" cellspacing="10" class="adminlist">
	<tr>
	<td width="25%" align="center" valign="center">
	<a href="index.php?task=nodiag"><img width="100px" src="../touch/diagnose.png" onmouseover=" this.src='../touch/diagnose_b.png'" onmouseout="this.src='../touch/diagnose.png'">
	<br><b>Diagnosa</b>
	</a>
	</td>

	<td align="center" valign="center" width="25%">
	<a href="index.php?task=noots"><img width="100px" src="../touch/tension.png" onmouseover=" this.src='../touch/tension_b.png'" onmouseout="this.src='../touch/tension.png'">
	<br><b>Observasi Tensi Suhu</b></a>
	</td>

	<td align="center" valign="center" width="25%">
	<a href="index.php?task=noidlp"><img width="100px" src="../touch/Instruction.png" onmouseover=" this.src='../touch/Instruction_b.png'" onmouseout="this.src='../touch/Instruction.png'">
	<br><b>Instruksi Dokter & Laporan</b></a>
	</td>

	<td align="center" valign="center" width="25%">
	<a href="index.php?task=norsm"><img width="100px" src="../touch/resumemedic.png" onmouseover=" this.src='../touch/resumemedic_b.png'" onmouseout="this.src='../touch/resumemedic.png'">
	<br><b>Resume Medik</b></a>
	</td>
	</tr>
	</table>
	<br><br>
	<!--- 2 ---------->
	<table class="adminlist">
	<td width="20%" align="center" valign="center">
	<a href="index.php?task=nostm"><img width="100px" src="../touch/deal.png" onmouseover=" this.src='../touch/deal_b.png'" onmouseout="this.src='../touch/deal.png'">
	<br><b>Persetujuan Tindakan Medik</b>
	</a>
	</td>

	<td align="center" valign="center" width="20%">
	<a href="index.php?task=nottm"><img width="100px" src="../touch/nodeal.png" onmouseover=" this.src='../touch/nodeal_b.png'" onmouseout="this.src='../touch/nodeal.png'">
	<br><b>Penolakan Tindakan Medik</b></a>
	</td>

	<td width="20%" align="center" valign="center" width="20%">
	<a href="index.php?task=noipo"><img width="100px" src="../touch/operation.png" onmouseover=" this.src='../touch/operation_b.png'" onmouseout="this.src='../touch/operation.png'">
	<br><b>Instruksi Post Operasi</b>
	</a>
	</td>

	<td align="center" valign="center" width="20%">
	<a href="index.php?task=noipb"><img width="100px" src="../touch/bedah.png" onmouseover=" this.src='../touch/bedah_b.png'" onmouseout="this.src='../touch/bedah.png'">
	<br><b>Instruksi Pasca Bedah</b></a>
	</td>

	<td align="center" valign="center" width="20%">
	<a href="index.php?task=nolo"><img width="100px" src="../touch/operationRepot.png" onmouseover=" this.src='../touch/operationRepot_b.png'" onmouseout="this.src='../touch/operationRepot.png'">
	<br><b>Laporan Operasi</b></a>
	</td>
	</tr>
	</table>
	<?php
	}


function menu_obat()
	{
	?>
	<center><h1>Obat/ Alat Kesehatan</h1></center>
	<br><br>
	<table width="100%" border="0" cellpadding="10" cellspacing="10" class="adminlist">
	<tr>
	<td width="50%" align="center" valign="center">
	<a href="index.php?task=alkesmt"><img width="100px" src="../touch/medicine-ajukan.png" onmouseover=" this.src='../touch/medicine-ajukan_b.png'" onmouseout="this.src='../touch/medicine-ajukan.png'">
	<br><b>Pengajuan Obat/ Alkes</b>
	</a>
	</td>

	<td align="center" valign="center">
	<a href="index.php?task=mutasi"><img width="100px" src="../touch/medicine-mutasi.png" onmouseover=" this.src='../touch/medicine-mutasi_b.png'" onmouseout="this.src='../touch/medicine-mutasi.png'">
	<br><b>Mutasi Obat/ Alkes</b></a>
	</td>

	</tr>
	</table>
	<?php
	}

function menu_pakaiobat()
	{
	?>
	<center><h1>Pemakaian Obat/ Alat Kesehatan</h1></center>
	<br><br>
	<table width="100%" border="0" cellpadding="10" cellspacing="10" class="adminlist">
	<tr>
	<td width="50%" align="center" valign="center">
	<a href="index.php?task=alkespk&rg=Kamar Bersalin"><img width="100px" src="../touch/medical-labor.png" onmouseover=" this.src='../touch/medical-labor_b.png'" onmouseout="this.src='../touch/medical-labor.png'">
	<br><b>Dalam Ruang Bersalin</b>
	</a>
	</td>

	<td align="center" valign="center">
	<a href="index.php?task=alkespk&rg=Kamar Operasi"><img width="100px" src="../touch/medicine-operation.png" onmouseover=" this.src='../touch/medicine-operation_b.png'" onmouseout="this.src='../touch/medicine-operation.png'">
	<br><b>Dalam Ruang Operasi</b></a>
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
	Identitas Pasien
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

	<select name='idpas'>
	";
	$b1=mysql_query("select *from m_pasien order by nama ASC");
	while ($b=mysql_fetch_array($b1))
		{
		$n=$b[nama];
		$nama=strtoupper($n);
		echo"
		<option value='$b[idpas]'>$nama - $b[idpas]</option>
		";
		}
	echo"
	</select>

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


function instsln()
	{
	$pesan=$_GET['pesan'];
	$status=$_GET['status'];
	echo"<center>
	<h1>STATUS PERSALINAN</h1></center>
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
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Inpartu Normal' order by nama ASC");
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

function in_stsln()
	{

	$status=$_POST['status'];
	$idpas=$_POST['idpas'];

	$ada = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_salin where idpas='$idpas'"),0);

	$a=mysql_query("select *from m_pasien, m_pasiensw, m_pasiendet, m_pasienalm, m_absen  where m_pasien.idpas=m_pasiensw.idpas and m_pasien.idpas=m_pasiendet.idpas and m_pasien.idpas=m_pasienalm.idpas and m_pasien.idpas=m_absen.idpas and m_pasien.idpas='$idpas'");
	while($aa=mysql_fetch_array($a))
		{
		$nama=$aa[nama];
		$umur=$aa[umur];
		$ker=$aa[ker];
		$pend=$aa[pend];
		$nmsw=$aa[nmsw];
		$umursw=$aa[umursw];
		$almsw=$aa[almsw];
		$kersw=$aa[kersw];
		$penddsw=$aa[penddsw];
		$almsw=$aa[almsw];
		$alm=$aa[alm];
		$rt=$aa[rt];
		$rw=$aa[rw];
		$lurah=$aa[lurah];
		$kec=$aa[kec];
		$kota=$aa[kota];
		$tglinap=$aa[tglinap];
		$blninap=$aa[blninap];
		$thninap=$aa[thninap];
		$jminap=$aa[jminap];
		}
	echo"
	<center>
	<b>STATUS PERSALINAN
	</b>
	</center>
	<br><br>
	<u>$pesan</u>
	<br><br>

	<br>
	<table class='adminlist'>
	<tr>
	<td width='50%'>No Register</td>
	<td>: $idpas
	</tr>
	<tr>
	<td width='50%'>Nama Penderita</td>
	<td>: $nama
	Umur: $umur tahun
	</tr>

	<tr>
	<td width='30%'>Nama Suami</td>
	<td>: $nmsw
	Umur: $umursw tahun
	</tr>

	<tr>
	<td width='30%'>Alamat
	<br>
	Istri
	</td>
	<td>: $almsw
	<br>: $alm ($rt/ $rw), $lurah, $kec - $kota
	</tr>

	<tr>
	<td width='30%'>Pekerjaan
	<br>
	Suami
	</td>
	<td>: $ker
	<br>: $kersw
	</tr>

	<tr>
	<td width='30%'>Pendidikan
	<br>
	Suami
	</td>
	<td>:
	$pend
	<br>:
	$penddsw
	</tr>

	<tr>
	<td width='30%'><u>Anamnesa:</u>
	</td>
	<td></td>
	</tr>

	<tr>
	<td width='30%'>Masuk RS Bersalin
	<br>
	Datang sendiri/dikirim oleh
	</td>
	<td>
	: Tgl. : $tglinap-$blninap-$thninap
	jam $jminap WIB
	<br>";
	if($ada=='0')
		{

		echo"
		<form method='post' action='index.php?task=pin_stsln'>

	<input type='hidden' name='idpas' value='$idpas'>
	<input type='hidden' name='status' value='$status'>
	: <select name='kirimoleh'>
	<option value=''>-</option>
	<option value='bidan'>bidan</option>
	<option value='perawat'>perawat</option>
	<option value='dokter'>dokter</option>
	<option value='dokter ahli'>dokter ahli</option>
	<option value='lain-lain'>lain-lain</option>
	</select>
	</td>
	</tr>

	<tr>
	<td width='30%'>Keluhan utama waktu masuk RS
	</td>
	<td>: <input type='text' name='keluhan' size='50'></td>
	</tr>

	<tr>
	<td width='30%'>His mulai tgl. <input type='text' name='tglhis' size='20'>
	jam <input type='text' name='jmhis' size='20'>
	</td>
	<td>mengeluarkan lendir/ darah<input type='text' name='klrdrh' size='40'></td>
	</tr>

	<tr>
	<td width='30%'>mengeluarkan cairan/darah sejak<input type='text' name='tgldrh' size='12'>
	jam <input type='text' name='jmdrh' size='10'>
	</td>
	<td>
	<select name='jmldrh'>
	<option value='sedikit'>sedikit</option>
	<option value='sedang'>sedang</option>
	<option value='banyak'>banyak</option>
	</select>
	</td>
	</tr>

	<tr>
	<td width='30%'>Gangguan kesadaran:
	<select name='gang_sdr'>
	<option value='ada'>ada</option>
	<option value='tidak'>tidak</option>
	</select>
	</td>
	<td>
	Kejang-kejang:
	<select name='kejang'>
	<option value='ada'>ada</option>
	<option value='tidak'>tidak</option>
	</select>
	</td>
	</tr>

	<tr>
	<td width='30%'>Mulai merasa akan merejan
	tgl. : <input type='text' name='tglrej' size='20'>
	</td>
	<td>
	jam <input type='text' name='jmrej' size='20'>
	</td>
	</tr>

	<tr>
	<td width='30%'>Sebelum ini dirawat oleh

	</td>
	<td>
	:
	<select name='rwtsbl'>
	<option value='dukun'>dukun</option>
	<option value='bidan'>bidan</option>
	<option value='perawat'>perawat</option>
	<option value='dokter'>dokter</option>
	<option value='lain-lain'>lain-lain</option>
	</select>
	</td>
	</tr>

	<tr>
	<td width='30%'>Dirujuk oleh

	</td>
	<td>
	:
	<select name='rujol'>
	<option value='dukun'>dukun</option>
	<option value='bidan'>bidan</option>
	<option value='dokter'>dokter</option>
	<option value='lain-lain'>lain-lain</option>
	</select>
	</td>
	</tr>

	<tr>
	<td width='30%'>Telah diberi pengobatan:
	<select name='obt'>
	<option value='ya'>ya</option>
	<option value='tidak'>tidak</option>
	</select>
	</td>
	<td>Sebutkan
	:
	<input type='text' name='obtsbt' size='50'>
	</td>
	</tr>

	<tr>
	<td width='30%'>HAID:
	</td>
	<td></td>
	</tr>

	<tr>
	<td width='30%'>menarche: <input type='text' name='men_thn' size='20'>,
	siklus : <input type='text' name='men_sik' size='20'>hari,
	</td>
	<td>
	lama haid: <input type='text' name='men_lm' size='30'> hari
	</td>
	</tr>

	<tr>
	<td width='30%'>Tanggal mulai haid terakhir
	<br>
	Tanggal perkiraan persalinan
	</td>
	<td>
	: <input type='text' name='tgl_haidakh' size='30'>
	<br>
	: <input type='text' name='tgl_krsln' size='30'>
	</td>
	</tr>

	<tr>
	<td width='30%'>Perkawinan; <input type='text' name='kl_kwn' size='30'>

	</td>
	<td>
	dengan suami sekarang sejak : <input type='text' name='sjk_kwn' size='30'>
	</td>
	</tr>
	<tr>
	<td width='30%'>Pertama kali kawin umur
	</td>
	<td>
	: <input type='text' name='umur_kwn' size='30'>
	</td>
	</tr>
	<tr>
	<td colspan='2' align='center'><input type='submit' value='SIMPAN'></td>
	</tr>
	</table>
	</form>
	";

		}
	else
		{
	$a=mysql_query("select *from m_salin where idpas='$idpas'");
	while($a1=mysql_fetch_array($a))
			{
	$krm=$a1['krm'];
	$keluhan=$a1['keluhan'];
	$tglhis=$a1['tglhis'];
	$jmhis=$a1['jmhis'];
	$drh=$a1['drh'];
	$drhtgl=$a1['drhtgl'];
	$drhjm=$a1['drhjm'];
	$drhjml=$a1['drhjml'];
	$sadar=$a1['sadar'];
	$kejang=$a1['kejang'];
	$rejantgl=$a1['rejantgl'];
	$rejanjm=$a1['rejanjm'];
	$rwht=$a1['rwht'];
	$rujuk=$a1['rujuk'];
	$obt=$a1['obt'];
	$obt2=$a1['obt2'];
			}
	$b=mysql_query("select *from m_salin2 where idpas='$idpas'");
	while($b1=mysql_fetch_array($b))
			{

	$men=$b1['men'];
	$siklus=$b1['siklus'];
	$lm=$b1['lm'];
	$tglhaid=$b1['tglhaid'];
	$tglsln=$b1['tglsln'];
			}
	$c=mysql_query("select *from m_salin3 where idpas='$idpas'");
	while($c1=mysql_fetch_array($c))
			{
	$kawin=$c1['kawin'];
	$sejak=$c1['sejak'];
	$umur=$c1['umur'];
			}
		echo"
		<form method='post' action='index.php?task=ein_stsln'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='hidden' name='status' value='$status'>
	: <select name='kirimoleh'>
	<option value='$krm'>$krm</option>
	<option value=''>-</option>
	<option value='bidan'>bidan</option>
	<option value='perawat'>perawat</option>
	<option value='dokter'>dokter</option>
	<option value='dokter ahli'>dokter ahli</option>
	<option value='lain-lain'>lain-lain</option>
	</select>
	</td>
	</tr>

	<tr>
	<td width='30%'>Keluhan utama waktu masuk RS
	</td>
	<td>: <input type='text' name='keluhan' size='50' value='$keluhan'></td>
	</tr>

	<tr>
	<td width='30%'>His mulai tgl. <input type='text' name='tglhis' size='20' value='$tglhis'>
	jam <input type='text' name='jmhis' size='20' value='$jmhis'>
	</td>
	<td>mengeluarkan lendir/ darah<input type='text' name='klrdrh' size='40' value='$drh'></td>
	</tr>

	<tr>
	<td width='30%'>mengeluarkan cairan/darah sejak<input type='text' name='tgldrh' size='12' value='$drhtgl'>
	jam <input type='text' name='jmdrh' size='10' value='$drhjm'>
	</td>
	<td>
	<select name='jmldrh'>
	<option value='$drhjml'>$drhjml</option>
	<option value='sedikit'>sedikit</option>
	<option value='sedang'>sedang</option>
	<option value='banyak'>banyak</option>
	</select>
	</td>
	</tr>

	<tr>
	<td width='30%'>Gangguan kesadaran:
	<select name='gang_sdr'>
	<option value='$sadar'>$sadar</option>
	<option value='ada'>ada</option>
	<option value='tidak'>tidak</option>
	</select>
	</td>
	<td>
	Kejang-kejang:
	<select name='kejang'>
	<option value='$kejang'>$kejang</option>
	<option value='ada'>ada</option>
	<option value='tidak'>tidak</option>
	</select>
	</td>
	</tr>

	<tr>
	<td width='30%'>Mulai merasa akan merejan
	tgl. : <input type='text' name='tglrej' size='20' value='$rejantgl'>
	</td>
	<td>

	</td>
	</tr>

	<tr>
	<td width='30%'>Sebelum ini dirawat oleh

	</td>
	<td>
	:
	<select name='rwtsbl'>
	<option value='$rwht'>$rwht</option>
	<option value='dukun'>dukun</option>
	<option value='bidan'>bidan</option>
	<option value='perawat'>perawat</option>
	<option value='dokter'>dokter</option>
	<option value='lain-lain'>lain-lain</option>
	</select>
	</td>
	</tr>

	<tr>
	<td width='30%'>Dirujuk oleh

	</td>
	<td>
	:
	<select name='rujol'>
	<option value='$rujuk'>$rujuk</option>
	<option value='dukun'>dukun</option>
	<option value='bidan'>bidan</option>
	<option value='dokter'>dokter</option>
	<option value='lain-lain'>lain-lain</option>
	</select>
	</td>
	</tr>

	<tr>
	<td width='30%'>Telah diberi pengobatan:
	<select name='obt'>
	<option value='$obt'>$obt</option>
	<option value='ya'>ya</option>
	<option value='tidak'>tidak</option>
	</select>
	</td>
	<td>Sebutkan
	:
	<input type='text' name='obtsbt' size='50' value='$obt2'>
	</td>
	</tr>

	<tr>
	<td width='30%'>HAID:
	</td>
	<td></td>
	</tr>

	<tr>
	<td width='30%'>menarche: <input type='text' name='men_thn' size='20' value='$men'>,
	siklus : <input type='text' name='men_sik' size='20' value='$siklus'>hari,
	</td>
	<td>
	lama haid: <input type='text' name='men_lm' size='30' value='$lm'> hari
	</td>
	</tr>

	<tr>
	<td width='30%'>Tanggal mulai haid terakhir
	<br>
	Tanggal perkiraan persalinan
	</td>
	<td>
	: <input type='text' name='tgl_haidakh' size='30' value='$tglhaid'>
	<br>
	: <input type='text' name='tgl_krsln' size='30' value='$tglsln'>
	</td>
	</tr>

	<tr>
	<td width='30%'>Perkawinan; <input type='text' name='kl_kwn' size='30' value='$kawin'>

	</td>
	<td>
	dengan suami sekarang sejak : <input type='text' name='sjk_kwn' size='30' value='$sejak'>
	</td>
	</tr>
	<tr>
	<td width='30%'>Pertama kali kawin umur
	</td>
	<td>
	: <input type='text' name='umur_kwn' size='30' value='$umur'>
	</td>
	</tr>
	<tr>
	<td colspan='2' align='center'><input type='submit' value='GANTI'></td>
	</tr>
	</table>
	</form>
	";
		}

	}


function ein_stsln()
	{
	$idpas=$_POST['idpas'];
	$status=$_POST['status'];

	$krm=$_POST['kirimoleh'];
	$keluhan=$_POST['keluhan'];
	$tglhis=$_POST['tglhis'];
	$jmhis=$_POST['jmhis'];
	$drh=$_POST['klrdrh'];
	$drhtgl=$_POST['tgldrh'];
	$drhjm=$_POST['jmdrh'];
	$drhjml=$_POST['jmldrh'];
	$sadar=$_POST['gang_sdr'];
	$kejang=$_POST['kejang'];
	$rejantgl=$_POST['tglrej'];
	$rwht=$_POST['rwtsbl'];
	$rujuk=$_POST['rujol'];
	$obt=$_POST['obt'];
	$obt2=$_POST['obtsbt'];

	$men=$_POST['men_thn'];
	$siklus=$_POST['men_sik'];
	$lm=$_POST['men_lm'];
	$tglhaid=$_POST['tgl_haidakh'];
	$tglsln=$_POST['tgl_krsln'];

	$kawin=$_POST['kl_kwn'];
	$sejak=$_POST['sjk_kwn'];
	$umur=$_POST['umur_kwn'];

	//$a=mysql_query("update m_absen set status='$status' where idpas='$idpas'");
	$b=mysql_query("update m_salin set krm='$krm', keluhan='$keluhan', tglhis='$tglhis', jmhis='$jmhis', drh='$drh', drhtgl='$drhtgl', drhjm='$drhjm', drhjml='$drhjml', sadar='$sadar', kejang='$kejang', rejantgl='$rejantgl', rwht='$rwht', rujuk='$rujuk', obt='$obt', obt2='$obt2' where idpas='$idpas'");
	$c=mysql_query("update m_salin2 set men='$men', siklus='$siklus', lm='$lm', tglhaid='$tglhaid', tglsln='$tglsln' where idpas='$idpas'");
	$d=mysql_query("update m_salin3 set kawin='$kawin', sejak='$sejak', umur='$umur' where idpas='$idpas'");

	if ($b and $c and $d)
		{header ("Location: index.php?task=instsln&pesan=Data Sudah Diubah");}
	else
		{echo"error";}
	}

function pin_stsln()
	{
	$idpas=$_POST['idpas'];
	$status=$_POST['status'];

	$krm=$_POST['kirimoleh'];
	$keluhan=$_POST['keluhan'];
	$tglhis=$_POST['tglhis'];
	$jmhis=$_POST['jmhis'];
	$drh=$_POST['klrdrh'];
	$drhtgl=$_POST['tgldrh'];
	$drhjm=$_POST['jmdrh'];
	$drhjml=$_POST['jmldrh'];
	$sadar=$_POST['gang_sdr'];
	$kejang=$_POST['kejang'];
	$rejantgl=$_POST['tglrej'];
	$rejanjm=$_POST['jmrej'];
	$rwht=$_POST['rwtsbl'];
	$rujuk=$_POST['rujol'];
	$obt=$_POST['obt'];
	$obt2=$_POST['obtsbt'];

	$men=$_POST['men_thn'];
	$siklus=$_POST['men_sik'];
	$lm=$_POST['men_lm'];
	$tglhaid=$_POST['tgl_haidakh'];
	$tglsln=$_POST['tgl_krsln'];

	$kawin=$_POST['kl_kwn'];
	$sejak=$_POST['sjk_kwn'];
	$umur=$_POST['umur_kwn'];

	//$a=mysql_query("update m_absen set status='$status' where idpas='$idpas'");
	$b=mysql_query("insert into m_salin values('', '$krm', '$keluhan', '$idpas', '$tglhis', '$jmhis', '$drh', '$drhtgl', '$drhjm', '$drhjml', '$sadar', '$kejang', '$rejantgl - $rejanjm', '$rwht', '$rujuk', '$obt', '$obt2')");
	$c=mysql_query("insert into m_salin2 values ('', '$idpas', '$men', '$siklus', '$lm', '$tglhaid', '$tglsln')");
	$d=mysql_query("insert into m_salin3 values ('', '$idpas', '$kawin', '$sejak', '$umur')");

	if ($b and $c and $d)
		{header ("Location: index.php?task=instsln&pesan=Data Sudah Masuk");}
	else
		{echo"error";}

	}


function inrwysln()
	{
	$pesan=$_GET['pesan'];
	$status=$_GET['status'];
	echo"<center>
	<h1>STATUS PERSALINAN</h1></center>

	<b>Riwayat Persalinan</b>
	<br><br>
	<u>$pesan</u>
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
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Inpartu Normal' order by nama ASC");
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

function in_rwysln()
	{
	$idpas=$_POST['idpas'];
	$statuslog=$_POST['status'];
	$ada = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_absen where idpas='$idpas' and status='$statuslog'"),0);
	if($ada=='0')
		{echo"<br><br>Pasien bukan termasuk pasien <b>$statuslog</b>, <a href='index.php?task=inrwysln&status=$statuslog'> [ kembali ] </a>";}
	else
		{
	echo"<br><br>

	<form method='post' action='index.php?task=pin_rwysln'>
	<table class='adminlist'>
	<tr>
	<td colspan='2'><b>Riwayat Kehamilan/ Persalinan yang Lalu</b></td>
	</tr>
	";
	$p=mysql_query("select *from m_pasien where idpas='$idpas'");
	while($pa=mysql_fetch_array($p))
			{
			$nama=$pa['nama'];
			$ker=$pa['ker'];
			}
	echo"
	<tr>
	<td width='50%'>Pasien</td>
	<td>: $idpas/ $nama/ $ker

	</td>
	</tr>

	<tr>
	<td width='50%'>Tanggal Lahir</td>
	<td>:
	<select name='tgllhr'>
	";
	for($i=1;$i<=31;$i++)
			{
			echo"
			<option value='$i'>$i</option>
			";
			}
	echo"
	</select>
	<select name='blnlhr'>
	";
	for($j=1;$j<=12;$j++)
			{
			echo"
			<option value='$j'>$j</option>
			";
			}
	echo"
	</select>
	<input type='text' name='thnlhr'>
	</td>
	</tr>

	<tr>
	<td width='50%'>Kehamilan Berakhir</td>
	<td>: <input type='text' name='minggu'> minggu
	</td>
	</tr>

	<tr>
	<td width='50%'>Persalinan</td>
	<td>:
	<select name='salin'>
	<option value='spontan'>spontan</option>
	<option value='buatan'>buatan</option>
	</select>
	</td>
	</tr>

	<tr>
	<td width='50%'>Penyulit Persalinan</td>
	<td>: <input type='text' name='sulit' size='50'></td>
	</tr>

	<tr>
	<td width='50%'>Anak</td>
	<td>:
	<select name='anak'>
	<option value='hidup'>hidup</option>
	<option value='mati'>mati</option>
	</select>
	Berat Badan: <input type='text' name='bb'> Gr
	</td>
	</tr>
	<tr>
	<td width='50%'>Lain-lain</td>
	<td>: <input type='text' name='lain' size='50'></td>
	</tr>

	<tr>
	<td colspan='2'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='hidden' name='status' value='$statuslog'>
	<input type='submit' value='SIMPAN'>
	</td>

	</tr>

	</table>
	</form>

	<br><br>
	<table class='adminlist'>
	<tr>
	<td colspan='7'><b>Data Riwayat Kehamilan/ Persalinan Pasien yang Lalu:</td>
	</tr>
	<tr>
	<td>Tgl Lahir</td>
	<td>Kehamilan Berakhir</td>
	<td>Persalinan
	<br>Spontan/ Buatan
	</td>
	<td>Penyulit Persalinan</td>
	<td>Anak <br> Hidup/ Mati</td>
	<td>Berat Bdn</td>
	<td>Lain-lain</td>
	<td>Hapus</td>
	</tr>
	";
	$a=mysql_query("select *from m_rwyhml where idpas='$idpas'");
	while($a1=mysql_fetch_array($a))
		{
		echo"
		<tr>
		<td><a href='index.php?task=uin_rwysln&idpas=$idpas&status=$statuslog&id=$a1[id]'>$a1[tgllhr]</a></td>
		<td>$a1[akhir] minggu</td>
		<td>$a1[salin]</td>
		<td>$a1[sulit]</td>
		<td>$a1[anak]</td>
		<td>$a1[bb] gr
		";
		/*
		$lgt1=$a1[tgllhr];
		$lgt2=date('d-m-Y');
		$slgt=strtotime($lgt2)-strtotime($lgt1);
		$jlgt=$slgt/(60*60*24);
		if($jlgt<30)
			{echo"$jlgt hari";}
		elseif($jlgt>30)

			{$jlgt2=$jlgt/30;echo"$jlgt2 bulan";}
		elseif($jlgt>365)
			{$jlgt2=$jlgt/365; echo"$jlgt2 tahun";}
		else
			{echo"$jlgt hari";}*/
		echo"
		</td>
		<td>$a1[lain]</td>
		<td><a href='index.php?task=del&id=$a1[id]&alm=in_rwysln&db=rwyhml&idpas=$idpas&status=$statuslog'>Hapus</a></td>
		</tr>
		";
		}
	echo"
	</table>

	";
		}
	}

function uin_rwysln()
	{
	$idpas=$_GET['idpas'];
	$status=$_GET['status'];
	$id=$_GET['id'];
	$a=mysql_query("select *from m_rwyhml where id='$id'");
	while($a1=mysql_fetch_array($a))
		{
		$tgllhr=$a1[tgllhr];
		$akhir=$a1[akhir];
		$salin=$a1[salin];
		$sulit=$a1[sulit];
		$anak=$a1[anak];
		$bb=$a1[bb];
		$lain=$a1[lain];
		}
		echo"
	<form method='post' action='index.php?task=pun_rwysln'>
	<table class='adminlist'>
	<tr>
	<td colspan='2'><b>Riwayat Kehamilan/ Persalinan yang Lalu</b></td>
	</tr>
	";
	$p=mysql_query("select *from m_pasien where idpas='$idpas'");
	while($pa=mysql_fetch_array($p))
			{
			$nama=$pa['nama'];
			$ker=$pa['ker'];
			}
	echo"
	<tr>
	<td width='50%'>Pasien</td>
	<td>: $idpas/ $nama/ $ker

	</td>
	</tr>

	<tr>
	<td width='50%'>Tanggal Lahir</td>
	<td>:
	<input type='text' name='tgllhr' value='$tgllhr'>
	</td>
	</tr>

	<tr>
	<td width='50%'>Kehamilan Berakhir</td>
	<td>:
	<input type='text' name='akhir' value='$akhir'>
	</td>
	</tr>

	<tr>
	<td width='50%'>Persalinan</td>
	<td>:
	<select name='salin'>
	<option value='$salin'>$salin</option>
	<option value='spontan'>spontan</option>
	<option value='buatan'>buatan</option>
	</select>
	</td>
	</tr>

	<tr>
	<td width='50%'>Penyulit Persalinan</td>
	<td>: <input type='text' name='sulit' size='50' value='sulit'></td>
	</tr>

	<tr>
	<td width='50%'>Anak</td>
	<td>:
	<select name='anak'>
	<option value='$anak'>$anak</option>
	<option value='hidup'>hidup</option>
	<option value='mati'>mati</option>
	</select>
	</td>
	</tr>

	<tr>
	<td width='50%'>Berat Badan</td>
	<td>:
	<input type='text' name='bb' value='bb'> gr

	";
	/*
	$lgt1=$tgllhr;
		$lgt2=date('d-m-Y');
		$slgt=strtotime($lgt2)-strtotime($lgt1);
		$jlgt=$slgt/(60*60*24);
		if($jlgt<30)
			{echo"$jlgt hari";}
		elseif($jlgt>30)

			{$jlgt2=$jlgt/30;echo"$jlgt2 bulan";}
		elseif($jlgt>365)
			{$jlgt2=$jlgt/365; echo"$jlgt2 tahun";}
		else
			{echo"$jlgt hari";}*/

	echo"
	</td>
	</tr>

	<tr>
	<td width='50%'>Lain-lain</td>
	<td>: <input type='text' name='lain' size='50' value='$lain'></td>
	</tr>

	<tr>
	<td colspan='2'>
	<input type='hidden' name='id' value='$id'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='GANTI'>
	</td>

	</tr>

	</table>
	</form>";

	}

function pun_rwysln()
	{
	$id=$_POST['id'];
	$status=$_POST['status'];
	$idpas=$_POST['idpas'];
	$tgllhr=$_POST['tgllhr'];
	$akhir=$_POST['akhir'];
	$salin=$_POST['salin'];
	$sulit=$_POST['sulit'];
	$anak=$_POST['anak'];
	$bb=$_POST['bb'];
	$lain=$_POST['lain'];
	$a=mysql_query("update m_rwyhml set tgllhr='$tgllhr', akhir='$akhir', salin='$salin', sulit='$sulit', anak='$anak', bb='$bb', lain='$lain' where id='$id'");
	if($a)
		{header ("Location: index.php?task=mes&idpas=$idpas&status=$status&alm=in_rwysln&pes=Data Sudah Diganti");}
	else
		{
	echo"ror";}
	}

function pin_rwysln()
	{
	$status=$_POST['status'];
	$idpas=$_POST['idpas'];
	$tgllhr=$_POST['tgllhr'];
	$blnlhr=$_POST['blnlhr'];
	$thnlhr=$_POST['thnlhr'];
	$minggu=$_POST['minggu'];

	$akhir=$_POST['akhir'];
	$salin=$_POST['salin'];
	$sulit=$_POST['sulit'];
	$anak=$_POST['anak'];
	$bb=$_POST['bb'];
	$lain=$_POST['lain'];
	$a=mysql_query("insert into m_rwyhml values ('', '$idpas', '$tgllhr-$blnlhr-$thnlhr', '$minggu', '$salin', '$sulit', '$anak', '$bb', '$lain')");
	if($a)
		{header ("Location: index.php?task=mes&idpas=$idpas&status=$status&alm=in_rwysln&pes=Data Sudah Masuk");}
	else
		{
	echo"ror";}

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

function instsln2()
	{
	$pesan=$_GET['pesan'];
	$status=$_GET['status'];

	echo"<center>
	<h1>STATUS PERSALINAN</h1></center>

	<b>Status Persalinan II</b>
	<br><br>
	<u>$pesan</u>
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
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Inpartu Normal' order by nama ASC");
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

function in_stsln2()
	{
	$idpas=$_POST['idpas'];
	$status=$_POST['status'];
	$pesan=$_GET['pesan'];
	echo"<br>
	<b>Status Persalinan II</b>
	<br><br>";

	$z = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_salin4a where idpas='$idpas'"),0);
	if ($z=='0')
		{

	$p=mysql_query("select *from m_pasien where idpas='$idpas'");
	while($pa=mysql_fetch_array($p))
			{
			$nama=$pa['nama'];
			$ker=$pa['ker'];
			}

	echo"
	<form method='post' action='index.php?task=pin_stsln2'>
	<table class='adminlist'>
	<tr>
	<td width='50%'>Pasien</td>
	<td>: <b>$nama, $idpas, $ker</b></td>
	</tr>
	<tr>
	<tr>
	<td width='50%'>Operasi yang pernah dialami (bukan karena persalinan)</td>
	<td>: <input type='text' name='oprl' size='50'></td>
	</tr>
	<tr>
	<td width='50%'>Penyakit lain yang pernah diderita</td>
	<td>: <input type='text' name='sktl' size='50'></td>
	</tr>
	<tr>
	<td width='50%'>Pemeriksaan obstetrik waktu masuk RS</td>
	<td>: tgl. <input type='text' name='tglob' size='10'> jam <input type='text' name='jmob' size='10'>
	<br>
	Bidan/ Dokter <input type='text' name='dok' size='30'>
	</td>
	</tr>
	<tr>
	<td width='50%'>Kalau bidan : telah dilaporkan Dokter yang mengirim</td>
	<td>:
	<select name='lapor'>
	<option value='ya'>ya</option>
	<option value='tidak'>tidak</option>
	</select>,
	tgl. <input type='text' name='tgllapor' size='10'> jam <input type='text' name='jmlapor' size='10'>
	</td>
	</tr>

	<tr>
	<td width='50%'>Status presens: Keadaan umum:</td>
	<td></td>
	</tr>
	<tr>
	<td width='50%'>
	Tekanan darah <input type='text' name='tek1' size='10'>/<input type='text' name='tek2' size='10'>
	<br>
	Suhu badan: <input type='text' name='suhu' size='10'>ak/rektal<input type='text' name='rektal' size='10'>
	</td>
	<td>
	Hb<input type='text' name='hb' size='10'>gr %
	<br>
	Berat badan: <input type='text' name='bb' size='10'> Kg
	</td>
	</tr>

	<tr>
	<td>Oedema
	</td>
	<td>: <input type='text' name='oedema' size='50'></td>
	</tr>
	<tr>
	<td>Lain-lain
	</td>
	<td>: <input type='text' name='lain' size='50'></td>
	</tr>

	<tr>
	<td><u>Status Obstetrik</u>
	</td>
	<td></td>
	</tr>
	<tr>
	<td>Pemeriksaan luar
	</td>
	<td></td>
	</tr>
	<tr>
	<td>tinggi fundus uteri
	</td>
	<td><input type='text' name='uteri' size='30'>,
	<select name='jns'>
	<option value='tunggal'>tunggal</option>
	<option value='gemelli'>gemelli</option>
	</select>
	</td>
	</tr>
	<tr>
	<td>Presentasi janin: kepala, sungsang, lintang, lain-lain
	<br>
	Bagian terdepan
	<br>
	punggung janin
	<br>
	bayi jantung janin
	<br>
	ukuran panggul luar (jika perlu)
	</td>
	<td>
	: <input type='text' name='pres' size='80'>
	<br>: <input type='text' name='dpn' size='80'>
	<br>: <input type='text' name='pgg' size='80'>
	<br>: <input type='text' name='jtg' size='80'>
	<br>: <input type='text' name='panggul' size='80'>
	</td>
	</tr>

	<tr>
	<td>Pemeriksaan dalam:
	</td>
	<td></td>
	</tr>
	<tr>
	<td>bidan/ dokter:
	</td>
	<td>Tgl. :<input type='text' name='tgl_prkdlm' size='20'>
	jam: <input type='text' name='jm_prkdlm' size='20'>
	</td>
	</tr>
	<tr>
	<td valign='top'>Pengeluaran per vaginam
	<br>
	vula/vagina
	<br>
	portio:penipisan: <input type='text' name='portio' size='10'>%
	<br>
	Bagian terdepan :
	<select name='dpn2'>
	<option value='kepala'>kepala</option>
	<option value='bokong'>bokong</option>
	<option value='lain-lain'>lain-lain</option>
	</select>
	<br>penurunan/ station
	<br>
	titik orientasi:
	<select name='orientasi'>
	<option value='u2k'>u2k</option>
	<option value='u2b'>u2b</option>
	<option value='dagu'>dagu</option>
	<option value='bo sacrum'>bo sacrum</option>
	</select>
	<br>
	(untuk u2k dll sebutkan jam berapa)
	<br>
	ukuran panggul dalam (kalau diperlukan)
	</td>
	<td valign='top'>: <input type='text' name='klr' size='50'>
	<br>: <input type='text' name='vula' size='50'>
	<br>: pembukaan waktu his: <input type='text' name='portio2' size='10'> cm
	<br>: jelaskan : <input type='text' name='jlsdpn' size='50'>
	<br>: <input type='text' name='station' size='50'>
	<br>: <input type='text' name='orientasi2' size='50'>
	<br>: <input type='text' name='panggul2' size='50'>
	</td>
	</tr>

	<tr>
	<td>Diagnosa:
	</td>
	<td></td>
	</tr>
	<tr>
	<td>Gr: <input type='text' name='gr' size='20'>,
	Para: <input type='text' name='para' size='20'>
	</td>
	<td>
	Ab: <input type='text' name='ab' size='20'>
	<select name='inpartu'>
	<option value='belum inpartu'>belum inpartu</option>
	<option value='inpartu'>inpartu</option>
	</select>
	</td>
	</tr>

	<tr>
	<td valign='top'>
	<select name='imartu'>
	<option value='immatur'>immatur</option>
	<option value='prematur'>prematur</option>
	<option value='aterm'>aterm</option>
	<option value='poot term'>poot term</option>
	</select>
	<br>
	Kelainan yang dijumpai
	<br>
	Rencana tindakan:
	</td>
	<td>
	Kala: <input type='text' name='kala' size='20'>,
	Fase: <input type='text' name='fase' size='20'>
	<br>
	: <input type='text' name='kelainan' size='80'>
	<br>

	<textarea name='rencana' cols='40' rows='5'>
	</textarea>
	</td>
	</tr>
	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='status' value='$status'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value='SIMPAN'>
	</td>
	</tr>

	</table>
	</form>
	";
		}
	else
		//JIKA DATA PASIEN SUDAH TERISI
		{

		$p=mysql_query("select *from m_pasien where idpas='$idpas'");
		while($pa=mysql_fetch_array($p))
			{
			$nama=$pa['nama'];
			$ker=$pa['ker'];
			}
		$a=mysql_query("select *from m_salin4a where idpas='$idpas'");
		while($a1=mysql_fetch_array($a))
			{
			$oprl=$a1[oprl];
			$sktl=$a1[sktl];
			$tglob=$a1[tglob];
			$jmob=$a1[jmob];
			$dok=$a1[dok];
			$lapor=$a1[lapor];
			$tgllapor=$a1[tgllapor];
			$jmlapor=$a1[jmlapor];
			}
		$b=mysql_query("select *from m_salin4aa where idpas='$idpas'");
		while($b1=mysql_fetch_array($b))
			{
			$tek1=$b1[tek1];
			$tek2=$b1[tek2];
			$suhu=$b1[suhu];
			$rektal=$b1[rektal];
			$hb=$b1[hb];
			$bb=$b1[bb];
			$oedema=$b1[oedema];
			$lain=$b1[lain];
			}
		$c=mysql_query("select *from m_salin4b where idpas='$idpas'");
		while($c1=mysql_fetch_array($c))
			{
			$uteri=$c1[uteri];
			$jns=$c1[jns];
			$pres=$c1[pres];
			$dpn=$c1[dpn];
			$pgg=$c1[pgg];
			$jtg=$c1[jtg];
			$panggul=$c1[panggul];
			}
			$d=mysql_query("select *from m_salin4c where idpas='$idpas'");
		while($d1=mysql_fetch_array($d))
			{
			$tgl_prkdlm=$d1[tgl_prkdlm];
			$jm_prkdlm=$d1[jm_prkdlm];
			$klr=$d1[klr];
			$vula=$d1[vula];
			$portio=$d1[portio];
			$portio2=$d1[portio2];
			$dpn2=$d1[dpn2];
			$station=$d1[station];
			$orientasi=$d1[orientasi];
			$orientasi2=$d1[orientasi2];
			$panggul2=$d1[panggul2];
			$jlsdpn=$d1[jlsdpn];
			}
			$e=mysql_query("select *from m_salin4d where idpas='$idpas'");
		while($e1=mysql_fetch_array($e))
			{
			$gr=$e1[gr];
			$para=$e1[para];
			$ab=$e1[ab];
			$inpartu=$e1[inpartu];
			$imartu=$e1[imartu];
			$kala=$e1[kala];
			$fase=$e1[fase];
			$kelainan=$e1[kelainan];
			$rencana=$e1[rencana];
			}


	echo"
	<form method='post' action='index.php?task=pun_stsln2'>
	<table class='adminlist'>
	<tr>
	<td width='50%'>Pasien</td>
	<td>: <b>$nama, $idpas, $ker</b></td>
	</tr>
	<tr>
	<tr>
	<td width='50%'>Operasi yang pernah dialami (bukan karena persalinan)</td>
	<td>: <input type='text' name='oprl' size='50' value='$oprl'></td>
	</tr>
	<tr>
	<td width='50%'>Penyakit lain yang pernah diderita</td>
	<td>: <input type='text' name='sktl' size='50' value='$sktl'></td>
	</tr>
	<tr>
	<td width='50%'>Pemeriksaan obstetrik waktu masuk RS</td>
	<td>: tgl. <input type='text' name='tglob' size='10' value='$tglob'> jam <input type='text' name='jmob' size='10' value='$jmob'>
	<br>
	Bidan/ Dokter <input type='text' name='dok' size='30' value='$dok'>
	</td>
	</tr>
	<tr>
	<td width='50%'>Kalau bidan : telah dilaporkan Dokter yang mengirim</td>
	<td>:
	<select name='lapor'>
	<option value='$lapor'>$lapor</option>
	<option value='ya'>ya</option>
	<option value='tidak'>tidak</option>
	</select>,
	tgl. <input type='text' name='tgllapor' size='10' value='$tgllapor'> jam <input type='text' name='jmlapor' size='10' value='$jmlapor'>
	</td>
	</tr>

	<tr>
	<td width='50%'>Status presens: Keadaan umum:</td>
	<td></td>
	</tr>
	<tr>
	<td width='50%'>
	Tekanan darah <input type='text' name='tek1' size='10' value='$tek1'>/<input type='text' name='tek2' size='10' value='$tek2'>
	<br>
	Suhu badan: <input type='text' name='suhu' size='10' value='$suhu'>ak/rektal<input type='text' name='rektal' size='10' value='$rektal'>
	</td>
	<td>
	Hb<input type='text' name='hb' size='10' value='$hb'>gr %
	<br>
	Berat badan: <input type='text' name='bb' size='10' value='$bb'> Kg
	</td>
	</tr>

	<tr>
	<td>Oedema
	</td>
	<td>: <input type='text' name='oedema' size='50' value='$oedema'></td>
	</tr>
	<tr>
	<td>Lain-lain
	</td>
	<td>: <input type='text' name='lain' size='50' value='$lain'></td>
	</tr>

	<tr>
	<td><u>Status Obstetrik</u>
	</td>
	<td></td>
	</tr>
	<tr>
	<td>Pemeriksaan luar
	</td>
	<td></td>
	</tr>
	<tr>
	<td>tinggi fundus uteri
	</td>
	<td><input type='text' name='uteri' size='30' value='$uteri'>,
	<select name='jns'>
	<option value='$jns'>$jns</option>
	<option value='tunggal'>tunggal</option>
	<option value='gemelli'>gemelli</option>
	</select>
	</td>
	</tr>
	<tr>
	<td>Presentasi janin: kepala, sungsang, lintang, lain-lain
	<br>
	Bagian terdepan
	<br>
	punggung janin
	<br>
	bayi jantung janin
	<br>
	ukuran panggul luar (jika perlu)
	</td>
	<td>
	: <input type='text' name='pres' size='80' value='$pres'>
	<br>: <input type='text' name='dpn' size='80' value='$dpn'>
	<br>: <input type='text' name='pgg' size='80' value='$pgg'>
	<br>: <input type='text' name='jtg' size='80' value='$jtg'>
	<br>: <input type='text' name='panggul' size='80' value='$panggul'>
	</td>
	</tr>

	<tr>
	<td>Pemeriksaan dalam:
	</td>
	<td></td>
	</tr>
	<tr>
	<td>bidan/ dokter:
	</td>
	<td>Tgl. :<input type='text' name='tgl_prkdlm' size='20' value='$tgl_prkdlm'>
	jam: <input type='text' name='jm_prkdlm' size='20' value='$jm_prkdlm'>
	</td>
	</tr>
	<tr>
	<td valign='top'>Pengeluaran per vaginam
	<br>
	vula/vagina
	<br>
	portio:penipisan: <input type='text' name='portio' size='10' value='$portio'>%
	<br>
	Bagian terdepan :
	<select name='dpn2'>
	<option value='$dpn2'>$dpn2</option>
	<option value='kepala'>kepala</option>
	<option value='bokong'>bokong</option>
	<option value='lain-lain'>lain-lain</option>
	</select>
	<br>penurunan/ station
	<br>
	titik orientasi:
	<select name='orientasi'>
	<option value='$orientasi'>$orientasi</option>
	<option value='u2k'>u2k</option>
	<option value='u2b'>u2b</option>
	<option value='dagu'>dagu</option>
	<option value='bo sacrum'>bo sacrum</option>
	</select>
	<br>
	(untuk u2k dll sebutkan jam berapa)
	<br>
	ukuran panggul dalam (kalau diperlukan)
	</td>
	<td valign='top'>: <input type='text' name='klr' size='50' value='$klr'>
	<br>: <input type='text' name='vula' size='50' value='$vula'>
	<br>: pembukaan waktu his: <input type='text' name='portio2' size='10' value='$portio2'> cm
	<br>: jelaskan : <input type='text' name='jlsdpn' size='50' value='$jlsdpn'>
	<br>: <input type='text' name='station' size='50' value='$station'>
	<br>: <input type='text' name='orientasi2' size='50' value='$orientasi2'>
	<br>: <input type='text' name='panggul2' size='50' value='$panggul2'>
	</td>
	</tr>

	<tr>
	<td>Diagnosa:
	</td>
	<td></td>
	</tr>
	<tr>
	<td>Gr: <input type='text' name='gr' size='20' value='$gr'>,
	Para: <input type='text' name='para' size='20' value='$para'>
	</td>
	<td>
	Ab: <input type='text' name='ab' size='20' value='$ab'>
	<select name='inpartu'>
	<option value='$inpartu'>$inpartu</option>
	<option value='belum inpartu'>belum inpartu</option>
	<option value='inpartu'>inpartu</option>
	</select>
	</td>
	</tr>

	<tr>
	<td valign='top'>
	<select name='imartu'>
	<option value='$imartu'>$imartu</option>
	<option value='immatur'>immatur</option>
	<option value='prematur'>prematur</option>
	<option value='aterm'>aterm</option>
	<option value='poot term'>poot term</option>
	</select>
	<br>
	Kelainan yang dijumpai
	<br>
	Rencana tindakan:
	</td>
	<td>
	Kala: <input type='text' name='kala' size='20' value='$kala'>,
	Fase: <input type='text' name='fase' size='20' value='$fase'>
	<br>
	: <input type='text' name='kelainan' size='80' value='$kelainan'>
	<br>

	<textarea name='rencana' cols='40' rows='5'>
	$rencana
	</textarea>
	</td>
	</tr>
	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='status' value='$status'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value='GANTI'>
	</td>
	</tr>

	</table>
	</form>";

		}
	}

function pun_stsln2()
	{
	$status=$_POST['status'];
	$idpas=$_POST['idpas'];
	$oprl=$_POST['oprl'];
	$sktl=$_POST['sktl'];
	$tglob=$_POST['tglob'];
	$jmob=$_POST['jmob'];
	$dok=$_POST['dok'];
	$lapor=$_POST['lapor'];
	$tgllapor=$_POST['tgllapor'];
	$jmlapor=$_POST['jmlapor'];

	$tek1=$_POST['tek1'];
	$tek2=$_POST['tek2'];
	$suhu=$_POST['suhu'];
	$rektal=$_POST['rektal'];
	$hb=$_POST['hb'];
	$bb=$_POST['bb'];
	$oedema=$_POST['oedema'];
	$lain=$_POST['lain'];

	$uteri=$_POST['uteri'];
	$jns=$_POST['jns'];
	$pres=$_POST['pres'];
	$dpn=$_POST['dpn'];
	$pgg=$_POST['pgg'];
	$jtg=$_POST['jtg'];
	$panggul=$_POST['panggul'];

	$tgl_prkdlm=$_POST['tgl_prkdlm'];
	$jm_prkdlm=$_POST['jm_prkdlm'];
	$klr=$_POST['klr'];
	$vula=$_POST['vula'];
	$portio=$_POST['portio'];
	$portio2=$_POST['portio2'];
	$dpn2=$_POST['dpn2'];
	$station=$_POST['station'];
	$orientasi=$_POST['orientasi'];
	$orientasi2=$_POST['orientasi2'];
	$panggul2=$_POST['panggul2'];
	$jlsdpn=$_POST['jlsdpn'];

	$gr=$_POST['gr'];
	$para=$_POST['para'];
	$ab=$_POST['ab'];
	$inpartu=$_POST['inpartu'];
	$imartu=$_POST['imartu'];
	$kala=$_POST['kala'];
	$fase=$_POST['fase'];
	$kelainan=$_POST['kelainan'];
	$rencana=$_POST['rencana'];

	$a=mysql_query("update m_salin4a set oprl='$oprl', sktl='$sktl', tglob='$tglob', jmob='$jmob', dok='$dok', lapor='$lapor', tgllapor='$tgllapor', jmlapor='$jmlapor' where idpas='$idpas'");
	$b=mysql_query("update m_salin4aa set tek1='$tek1', tek2='$tek2', suhu='$suhu', rektal='$rektal', hb='$hb', bb='$bb', oedema='$oedema', lain='$lain' where idpas='$idpas'");
	$c=mysql_query("update m_salin4b set uteri='$uteri', jns='$jns', pres='$pres', dpn='$dpn', pgg='$pgg', jtg='$jtg', panggul='$panggul' where idpas='$idpas'");
	$d=mysql_query("update m_salin4c set tgl_prkdlm='$tgl_prkdlm', jm_prkdlm='$jm_prkdlm', klr='$klr', vula='$vula', portio='$portio', portio2='$portio2', dpn2='$dpn2', station='$station', orientasi='$orientasi', orientasi2='$orientasi2', panggul2='$panggul2', jlsdpn='$jlsdpn' where idpas='$idpas'");
	$e=mysql_query("update m_salin4d set gr='$gr', para='$para', ab='$ab', inpartu='$inpartu', imartu='$imartu', kala='$kala', fase='$fase', kelainan='$kelainan', rencana='$rencana' where idpas='$idpas'");
	if($a and $b and $c and $d and $e)
		{
		header ("Location: index.php?task=mes&idpas=$idpas&alm=in_stsln2&status=$status&pes=Data Sudah Diganti");
		}
	else
		{echo"error";}
	}

function pin_stsln2()
	{
	$status=$_POST['status'];
	$idpas=$_POST['idpas'];
	$oprl=$_POST['oprl'];
	$sktl=$_POST['sktl'];
	$tglob=$_POST['tglob'];
	$jmob=$_POST['jmob'];
	$dok=$_POST['dok'];
	$lapor=$_POST['lapor'];
	$tgllapor=$_POST['tgllapor'];
	$jmlapor=$_POST['jmlapor'];

	$tek1=$_POST['tek1'];
	$tek2=$_POST['tek2'];
	$suhu=$_POST['suhu'];
	$rektal=$_POST['rektal'];
	$hb=$_POST['hb'];
	$bb=$_POST['bb'];
	$oedema=$_POST['oedema'];
	$lain=$_POST['lain'];

	$uteri=$_POST['uteri'];
	$jns=$_POST['jns'];
	$pres=$_POST['pres'];
	$dpn=$_POST['dpn'];
	$pgg=$_POST['pgg'];
	$jtg=$_POST['jtg'];
	$panggul=$_POST['panggul'];

	$tgl_prkdlm=$_POST['tgl_prkdlm'];
	$jm_prkdlm=$_POST['jm_prkdlm'];
	$klr=$_POST['klr'];
	$vula=$_POST['vula'];
	$portio=$_POST['portio'];
	$portio2=$_POST['portio2'];
	$dpn2=$_POST['dpn2'];
	$station=$_POST['station'];
	$orientasi=$_POST['orientasi'];
	$orientasi2=$_POST['orientasi2'];
	$panggul2=$_POST['panggul2'];
	$jlsdpn=$_POST['jlsdpn'];

	$gr=$_POST['gr'];
	$para=$_POST['para'];
	$ab=$_POST['ab'];
	$inpartu=$_POST['inpartu'];
	$imartu=$_POST['imartu'];
	$kala=$_POST['kala'];
	$fase=$_POST['fase'];
	$kelainan=$_POST['kelainan'];
	$rencana=$_POST['rencana'];

	$a=mysql_query("insert into m_salin4a values ('', '$idpas', '$oprl', '$sktl', '$tglob', '$jmob', '$dok', '$lapor', '$tgllapor', '$jmlapor')");
	$b=mysql_query("insert into m_salin4aa values ('', '$idpas', '$tek1', '$tek2', '$suhu', '$rektal', '$hb', '$bb', '$oedema', '$lain')");
	$c=mysql_query("insert into m_salin4b values ('', '$idpas', '$uteri', '$jns', '$pres', '$dpn', '$pgg', '$jtg', '$panggul')");
	$d=mysql_query("insert into m_salin4c values ('', '$idpas', '$tgl_prkdlm', '$jm_prkdlm', '$klr', '$vula', '$portio', '$portio2', '$dpn2', '$station', '$orientasi', '$orientasi2', '$panggul2', '$jlsdpn')");
	$e=mysql_query("insert into m_salin4d values ('', '$idpas', '$gr', '$para', '$ab', '$inpartu', '$imartu', '$kala', '$fase', '$kelainan', '$rencana')");
	if($a and $b and $c and $d and $e)
		{
		header ("Location: index.php?task=mes&idpas=$idpas&alm=in_stsln2&status=$status&pes=Data Sudah Masuk");
		}
	else
		{echo"error";}

	}

function inlapsln()
	{
	$pesan=$_GET['pesan'];
	$status=$_GET['status'];

	echo"<center>
	<h1>STATUS PERSALINAN</h1></center>

	<b>Laporan Persalinan</b>
	<br><br>
	<u>$pesan</u>
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
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Inpartu Normal' order by nama ASC");
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


function in_lapsln()
	{
	$idpas=$_POST['idpas'];
	$status=$_POST['status'];
	$pesan=$_GET['pesan'];
	$p=mysql_query("select *from m_pasien where idpas='$idpas'");
	while($pa=mysql_fetch_array($p))
			{
			$nama=$pa['nama'];
			$ker=$pa['ker'];
			}
	echo"
	<b>LAPORAN PERSALINAN</b>
	<br>
	<br><u>$pesan</u>
	<br><br>
	<table class='adminlist'>
	<tr>
	<td width='50%'>
	Pasien:
	</td>
	<td>
	$idpas - $nama - $ker
	</td>
	</tr>
	";
	$ada = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_salinlap where idpas='$idpas'"),0);
	if($ada=='0')
		{
		echo"

	<form method='post' action='index.php?task=pin_lapsln'>
	<tr>
	<td width='50%'>
	Yang melakukan observasi: Bidan :
	</td>
	<td><input type='text' name='bidan' size='50'></td>
	</tr>

	<tr>
	<td width='50%'>
	telah dilaporkan ke Dokter: <input type='text' name='dok' size='30'>
	</td>
	<td>oleh :<input type='text' name='oleh' size='50'></td>
	</tr>

	<tr>
	<td width='50%'>";
	$tgl=date('d-m-Y');
	$jm=date('h:i');
	echo"
	Tanggal: <input type='text' name='tgl' size='30' value='$tgl'>
	</td>
	<td>jam :<input type='text' name='jam' size='30' value='$jm'></td>
	</tr>

	<tr>
	<td width='50%'>
	Tanggal
	</td>
	<td>: <input type='text' name='tgl2' size='50'></td>
	</tr>
	<tr>
	<td width='50%'>
	His
	</td>
	<td>: <input type='text' name='his' size='50'></td>
	</tr>
	<tr>
	<td width='50%'>
	BJA
	</td>
	<td>: <input type='text' name='bja' size='50'></td>
	</tr>
	<tr>
	<td width='50%'>
	Tensi/ Nadi
	</td>
	<td>: <input type='text' name='tensi' size='50'></td>
	</tr>
	<tr>
	<td width='50%'>
	Keterangan lain yang diperlukan
	</td>
	<td>: <input type='text' name='ket' size='50'></td>
	</tr>
	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='SIMPAN'></td>
	</tr>
	</table>
	</form>";
		}
	else
			{
			echo"</table>";
			}
	echo"
	<br><br>
	<table class='adminlist'>
	<tr>
	<td colspan='6' align='center'><b>Daftar Laporan Persalinan Pasien: $idpas - $nama</b></td>
	</tr>
	<tr>
	<td>Tanggal</td><td>His</td><td>BJA</td><td>Tensi/Nadi</td><td>Keterangan lain</td>
	";
	/*<td>Hapus</td>*/
	echo"
	</tr>
	";
	$b=mysql_query("select *from m_salinlap where idpas='$idpas' order by id ASC limit 1");
	while($a=mysql_fetch_array($b))
		{
		echo"
		<tr>
		<td><a href='index.php?task=ein_lapsln&id=$a[id]&idpas=$idpas&status=$status'>$a[tgl2]</a></td>
		<td>$a[his]</td>
		<td>$a[bja]</td>
		<td>$a[tensi]</td>
		<td>$a[ket]</td>

		";
		/*<td><a href='index.php?task=del&id=$a[id]&alm=in_lapsln&db=salinlap&idpas=$idpas&status=$status'>Hapus</a></td>*/
		echo"
		</tr>
		";
		}
	echo"
	</table>
	";
	}

function ein_lapsln()
	{
	$id=$_GET['id'];
	$idpas=$_GET['idpas'];
	$status=$_GET['status'];
	$p=mysql_query("select *from m_pasien where idpas='$idpas'");
	while($pa=mysql_fetch_array($p))
			{
			$nama=$pa['nama'];
			$ker=$pa['ker'];
			}
	$b=mysql_query("select *from m_salinlap where id='$id'");
	while($a=mysql_fetch_array($b))
		{
		$status=$a[status];
		$bidan=$a[bidan];
		$dok=$a[dok];
		$oleh=$a[oleh];
		$tgl=$a[tgl];
		$jm=$a[jm];
		$tgl2=$a[tgl2];
		$his=$a[his];
		$bja=$a[bja];
		$tensi=$a[tensi];
		$ket=$a[ket];
		}
		echo"<br>
	<table class='adminlist'>
	<tr>
	<td width='50%'>
	Pasien:
	</td>
	<td>
	$idpas - $nama - $ker
	</td>
	</tr>
	<form method='post' action='index.php?task=pen_lapsln'>
	<tr>
	<td width='50%'>
	Yang melakukan observasi: Bidan :
	</td>
	<td><input type='text' name='bidan' size='50' value='$bidan'></td>
	</tr>

	<tr>
	<td width='50%'>
	telah dilaporkan ke Dokter: <input type='text' name='dok' size='30' value='$dok'>
	</td>
	<td>oleh :<input type='text' name='oleh' size='50' value='$oleh'></td>
	</tr>

	<tr>
	<td width='50%'>
	Tanggal: <input type='text' name='tgl' size='30' value='$tgl'>
	</td>
	<td>jam :<input type='text' name='jam' size='30' value='$jam'></td>
	</tr>

	<tr>
	<td width='50%'>
	Tanggal
	</td>
	<td>: <input type='text' name='tgl2' size='50' value='$tgl2'></td>
	</tr>
	<tr>
	<td width='50%'>
	His
	</td>
	<td>: <input type='text' name='his' size='50' value='$his'></td>
	</tr>
	<tr>
	<td width='50%'>
	BJA
	</td>
	<td>: <input type='text' name='bja' size='50' value='$bja'></td>
	</tr>
	<tr>
	<td width='50%'>
	Tensi/ Nadi
	</td>
	<td>: <input type='text' name='tensi' size='50' value='$tensi'></td>
	</tr>
	<tr>
	<td width='50%'>
	Keterangan lain yang diperlukan
	</td>
	<td>: <input type='text' name='ket' size='50' value='$ket'></td>
	</tr>
	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='id' value='$id'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='hidden' name='status' value='$status'>
	<input type='button' OnClick='javascript:history.back(-1)' value='BATAL'>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type='submit' value='GANTI'> </td>
	</tr>

	</table>
	</form>";

	}

function pen_lapsln()
	{
	$idpas=$_POST['idpas'];
	$id=$_POST['id'];
	$status=$_POST['status'];
	$bidan=$_POST['bidan'];
	$dok=$_POST['dok'];
	$oleh=$_POST['oleh'];
	$tgl=$_POST['tgl'];
	$jm=$_POST['jm'];
	$tgl2=$_POST['tgl2'];
	$his=$_POST['his'];
	$bja=$_POST['bja'];
	$tensi=$_POST['tensi'];
	$ket=$_POST['ket'];
	$a=mysql_query("update m_salinlap set bidan='$bidan', dok='$dok', oleh='$oleh', tgl='$tgl', jm='$jm', tgl2='$tgl2', his='$his', bja='$bja', tensi='$tensi', ket='$ket' where id='$id'");
	if($a)
		{header ("Location: index.php?task=mes&idpas=$idpas&status=$status&alm=in_lapsln&pes=Data Sudah Diganti");}
	else
		{
	echo"ror";}
	}


function pin_lapsln()
	{
	$idpas=$_POST['idpas'];
	$status=$_POST['status'];
	$bidan=$_POST['bidan'];
	$dok=$_POST['dok'];
	$oleh=$_POST['oleh'];
	$tgl=$_POST['tgl'];
	$jm=$_POST['jm'];
	$tgl2=$_POST['tgl2'];
	$his=$_POST['his'];
	$bja=$_POST['bja'];
	$tensi=$_POST['tensi'];
	$ket=$_POST['ket'];

	$a=mysql_query("insert into m_salinlap values ('', '$idpas', '$bidan', '$dok', '$oleh', '$tgl', '$jm', '$tgl2', '$his', '$bja', '$tensi', '$ket')");
	if($a)
		{header ("Location: index.php?task=mes&idpas=$idpas&status=$status&alm=in_lapsln&pes=Data Sudah Masuk");}
	else
		{
	echo"ror";}
	}


function inlapsln2()
	{
	$pesan=$_GET['pesan'];
	$status=$_GET['status'];

	echo"<center>
	<h1>STATUS PERSALINAN</h1></center>

	<b>Laporan Persalinan & Kehamilan</b>
	<br><br>
	<u>$pesan</u>
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
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Inpartu Normal' order by nama ASC");
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

function in_lapsln2()
	{
	$idpas=$_POST['idpas'];
	$status=$_POST['status'];
	$p=mysql_query("select *from m_pasien where idpas='$idpas'");
	while($pa=mysql_fetch_array($p))
			{
			$nama=$pa['nama'];
			$ker=$pa['ker'];
			}
	$ada = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_salinlap2 where idpas='$idpas'"),0);
	if($ada=='0')
		{
		echo"
		<b>LAPORAN PERSALINAN DAN KELAHIRAN</b>
		<br>
		<br>
		Pasien: <b>$nama ($idpas/ $ker)</b>
		<br>
		<form method='post' action='index.php?task=pin_lapsln2'>
		<ol type='1'>
		<li>
		Ketuban : pecah sendiri :
		<select name='pch'>
		<option value='ya'>ya</option>
		<option value='tidak'>tidak</option>
		</select>
		tgl: <input type='text' name='tglpch' size='20'>
		jam: <input type='text' name='jampch' size='20'>
		pada (/): <input type='text' name='pd' size='20'> cm
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<select name='pch2'>
		<option value='dipecah'>dipecah</option>
		<option value='amniotimi'>amniotimi</option>
		</select>
		indikasi: <input type='text' name='indik' size='80'>
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp; &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		tgl: <input type='text' name='tgl2' size='20'>
		jam: <input type='text' name='jm2' size='20'>
		pada (/): <input type='text' name='pd2' size='20'> cm
		</li>

		<li>
		Jenis persalinan:
		<br>
		<select name='jns'>
		<option value='spontan'>spontan</option>
		<option value='spt + amniotomi'>spt + amniotomi</option>
		<option value='spt + amniotomi + drip Oxyt'>spt + amniotomi + drip Oxyt</option>
		<option value='spt + drip Oxyt'>spt + drip Oxyt</option>
		</select>
		<br>
		Induksi:
		<select name='induk'>
		<option value='Oxyt drip'>Oxyt drip</option>
		<option value='amniotomi'>amniotomi</option>
		<option value='amniotomi i + drip Oxyt'>amniotomi i + drip Oxyt</option>
		<option value='drip Oxyt + amniotomi'>drip Oxyt + amniotomi </option>
		<option value='tanpa induksi'>tanpa induksi</option>
		</select>
		</li>

		<li>
		Presentasi selama persalinan: <input type='text' name='pres' size='100'>
		</li>

		<li>
		Ruptura selama persalinan :
		<select name='ruptura'>
		<option value='ya'>ya</option>
		<option value='tidak'>tidak</option>
		</select>
		tingkat :
		<select name='tk'>
		<option value='I'>I</option>
		<option value='II'>II</option>
		<option value='III'>III</option>
		</select>
		pengobatan : <input type='text' name='obt' size='40'>
		</li>

		<li>
		Episiotomi :
		<select name='epis'>
		<option value='medial'>medial</option>
		<option value='medio lateralki-ka'>medio lateralki-ka</option>
		<option value='lateral'>lateral</option>
		<option value='lain-lain'>lain-lain</option>
		</select>
		pengobatan : <input type='text' name='obt2' size='75'>
		</li>

		<li>
		Jenis Kelahiran :
		<select name='lhr'>
		<option value='spontan'>spontan</option>
		<option value='buatan'>buatan</option>
		</select>
		<input type='text' name='indik2' size='40'>
		indikasi buatan : <input type='text' name='indik3' size='30'>
		</li>

		<li>
		Pembiusan :
		<select name='bius'>
		<option value='ya'>ya</option>
		<option value='tidak'>tidak</option>
		</select>,
		<select name='bius2'>
		<option value='lokal'>lokal</option>
		<option value='umum'>umum</option>
		</select>
		:
		<input type='text' name='bius3' size='100'>
		</li>

		<li>
		Penyulit pada persalinan :
		<select name='sulit'>
		<option value='primer (karena persalinan sendiri)'>primer (karena persalinan sendiri)</option>
		<option value='sekunder (penyebab lain di luar persalinan)'>sekunder (penyebab lain di luar persalinan)</option>
		</select>
		</li>

		<li>
		Lama persalinan : <input type='text' name='lm' size='100'>
		</li>

		<li>
		Pendarahan selama persalinan : <input type='text' name='drh' size='30'>
		diperlukan transfusi/ infus : <input type='text' name='infus' size='30'>
		<br>
		sebutkan lebih terinci : <input type='text' name='ket' size='120'>
		</li>

		<li>
		Obat-obatan yang telah diberikan selama persalinan :
		<input type='text' name='obt3' size='80'>
		</li>
		<li>
		Lain - lain:
		<input type='text' name='lain' size='150'>
		</li>
		</ol>

		<br><br>
		<hr>
		<br>
		Keluar rumah sakit tanggal <input type='text' name='tglklr' size='30'>
		<br>
		Keadaan ibu waktu pulang : Keadaan umum:
		<input type='text' name='kead' size='30'>
		tensi : <input type='text' name='tensi' size='10'>
		Hb : <input type='text' name='hb' size='10'>
		<br>
		Payudara kiri: <input type='text' name='pykr' size='50'>
		kanan: <input type='text' name='pykn' size='50'>
		<br>
		Fundus uteri : <input type='text' name='uteri' size='30'>
		Konstraksi uterus : <input type='text' name='konst' size='30'>
		Lochia : <input type='text' name='loch' size='30'>
		<br>
		Parineum : <input type='text' name='pari' size='150'>
		<br>
		Lain-lain : <input type='text' name='lain2' size='150'>
		<br><br>
		Diagnosa akhir : <input type='text' name='diag' size='140'>
		<br>
		Pengobatan : <input type='text' name='obt4' size='150'>
		<br><br><br><br>
		<table border='0'>
		<tr>
		<td width='70%'></td>
		<td align='center'>
		<br>
		<br>
		<input type='text' name='dok' size='40'><br>
		Tanda tangan Bidan/ Dokter
		</td>
		</tr>
		<tr><td align='center'>
		<input type='hidden' name='idpas' value='$idpas'>
		<input type='hidden' name='status' value='$status'>
		<input type='submit' value='SIMPAN'>
		</td></tr>
		</table>
		</form>

	";
	}
	//JIKA SUDAH TERISI
	else
		{
		$a1=mysql_query("select *from m_salinlap2 where idpas='$idpas'");
		while($a=mysql_fetch_array($a1))
			{
			$pch=$a[pch];
			$tglpch=$a[tglpch];
			$jampch=$a[jampch];
			$pd=$a[pd];
			$pch2=$a[pch2];
			$indik=$a[indik];
			$tgl2=$a[tgl2];
			$jm2=$a[jm2];
			$pd2=$a[pd2];
			$jns=$a[jns];
			$induk=$a[induk];
			$pres=$a[pres];
			}
		$b1=mysql_query("select *from m_salinlap3 where idpas='$idpas'");
		while($b=mysql_fetch_array($b1))
			{
			$ruptura=$b[ruptura];
			$tk=$b[tk];
			$obt=$b[obt];
			$epis=$b[epis];
			$obt2=$b[obt2];
			$lhr=$b[lhr];
			$indik2=$b[indik2];
			$indik3=$b[indik3];
			$bius=$b[bius];
			$bius2=$b[bius2];
			$bius3=$b[bius3];
			}
		$c1=mysql_query("select *from m_salinlap4 where idpas='$idpas'");
		while($c=mysql_fetch_array($c1))
			{
			$sulit=$c[sulit];
			$lm=$c[lm];
			$drh=$c[drh];
			$infus=$c[infus];
			$ket=$c[ket];
			$obt3=$c[obt3];
			$lain=$c[lain];
			}
			$d1=mysql_query("select *from m_salinlap5 where idpas='$idpas'");
		while($d=mysql_fetch_array($d1))
			{
			$tglklr=$d[tglklr];
			$kead=$d[kead];
			$tensi=$d[tensi];
			$hb=$d[hb];
			$pykr=$d[pykr];
			$pykn=$d[pykn];
			$uteri=$d[uteri];
			$konst=$d[konst];
			$loch=$d[loch];
			$pari=$d[pari];
			$lain2=$d[lain2];
			$diag=$d[diag];
			$obt4=$d[obt4];
			$dok=$d[dok];
			}
			echo"
		<b>LAPORAN PERSALINAN DAN KELAHIRAN</b>
		<br>
		<br>
		Pasien: <b>$nama ($idpas/ $ker)</b>
		<br>
		<form method='post' action='index.php?task=pen_lapsln2'>
		<ol type='1'>
		<li>
		Ketuban : pecah sendiri :
		<select name='pch'>
		<option value='$pch'>$pch</option>
		<option value='ya'>ya</option>
		<option value='tidak'>tidak</option>
		</select>
		tgl: <input type='text' name='tglpch' size='20' value='$tglpch'>
		jam: <input type='text' name='jampch' size='20' value='$jampch'>
		pada (/): <input type='text' name='pd' size='20' value='$pd'> cm
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<select name='pch2'>
		<option value='$pch2'>$pch2</option>
		<option value='dipecah'>dipecah</option>
		<option value='amniotimi'>amniotimi</option>
		</select>
		indikasi: <input type='text' name='indik' size='80' value='$indik'>
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp; &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		tgl: <input type='text' name='tgl2' size='20' value='$tgl2'>
		jam: <input type='text' name='jm2' size='20' value='$jm2'>
		pada (/): <input type='text' name='pd2' size='20' value='$pd2'> cm
		</li>

		<li>
		Jenis persalinan:
		<br>
		<select name='jns'>
		<option value='$jns'>$jns</option>
		<option value='spontan'>spontan</option>
		<option value='spt + amniotomi'>spt + amniotomi</option>
		<option value='spt + amniotomi + drip Oxyt'>spt + amniotomi + drip Oxyt</option>
		<option value='spt + drip Oxyt'>spt + drip Oxyt</option>
		</select>
		<br>
		Induksi:
		<select name='induk'>
		<option value='$induk'>$induk</option>
		<option value='Oxyt drip'>Oxyt drip</option>
		<option value='amniotomi'>amniotomi</option>
		<option value='amniotomi i + drip Oxyt'>amniotomi i + drip Oxyt</option>
		<option value='drip Oxyt + amniotomi'>drip Oxyt + amniotomi </option>
		<option value='tanpa induksi'>tanpa induksi</option>
		</select>
		</li>

		<li>
		Presentasi selama persalinan: <input type='text' name='pres' size='100' value='$pres'>
		</li>

		<li>
		Ruptura selama persalinan :
		<select name='ruptura'>
		<option value='$ruptura'>$ruptura</option>
		<option value='ya'>ya</option>
		<option value='tidak'>tidak</option>
		</select>
		tingkat :
		<select name='tk'>
		<option value='$tk'>$tk</option>
		<option value='I'>I</option>
		<option value='II'>II</option>
		<option value='III'>III</option>
		</select>
		pengobatan : <input type='text' name='obt' size='40' value='$obt'>
		</li>

		<li>
		Episiotomi :
		<select name='epis'>
		<option value='$epis'>$epis</option>
		<option value='medial'>medial</option>
		<option value='medio lateralki-ka'>medio lateralki-ka</option>
		<option value='lateral'>lateral</option>
		<option value='lain-lain'>lain-lain</option>
		</select>
		pengobatan : <input type='text' name='obt2' size='75' value='$obt2'>
		</li>

		<li>
		Jenis Kelahiran :
		<select name='lhr'>
		<option value='$lhr'>$lhr</option>
		<option value='spontan'>spontan</option>
		<option value='buatan'>buatan</option>
		</select>
		<input type='text' name='indik2' size='40' value='$indik2'>
		indikasi buatan : <input type='text' name='indik3' size='30' value='$indik3'>
		</li>

		<li>
		Pembiusan :
		<select name='bius'>
		<option value='$bius'>$bius</option>
		<option value='ya'>ya</option>
		<option value='tidak'>tidak</option>
		</select>,
		<select name='bius2'>
		<option value='$bius2'>$bius2</option>
		<option value='lokal'>lokal</option>
		<option value='umum'>umum</option>
		</select>
		:
		<input type='text' name='bius3' size='100' value='$bius3'>
		</li>

		<li>
		Penyulit pada persalinan :
		<select name='sulit'>
		<option value='$sulit'>$sulit</option>
		<option value='primer (karena persalinan sendiri)'>primer (karena persalinan sendiri)</option>
		<option value='sekunder (penyebab lain di luar persalinan)'>sekunder (penyebab lain di luar persalinan)</option>
		</select>
		</li>

		<li>
		Lama persalinan : <input type='text' name='lm' size='100' value='$lm'>
		</li>

		<li>
		Pendarahan selama persalinan : <input type='text' name='drh' size='30' value='$drh'>
		diperlukan transfusi/ infus : <input type='text' name='infus' size='30' value='$infus'>
		<br>
		sebutkan lebih terinci : <input type='text' name='ket' size='120' value='$ket'>
		</li>

		<li>
		Obat-obatan yang telah diberikan selama persalinan :
		<input type='text' name='obt3' size='80' value='$obt3'>
		</li>
		<li>
		Lain - lain:
		<input type='text' name='lain' size='150' value='$lain'>
		</li>
		</ol>

		<br><br>
		<hr>
		<br>
		Keluar rumah sakit tanggal <input type='text' name='tglklr' size='30' value='$tglklr'>
		<br>
		Keadaan ibu waktu pulang : Keadaan umum:
		<input type='text' name='kead' size='30' value='$kead'>
		tensi : <input type='text' name='tensi' size='10' value='$tensi'>
		Hb : <input type='text' name='hb' size='10' value='$hb'>
		<br>
		Payudara kiri: <input type='text' name='pykr' size='50' value='$pykr'>
		kanan: <input type='text' name='pykn' size='50' value='$pykn'>
		<br>
		Fundus uteri : <input type='text' name='uteri' size='30' value='$uteri'>
		Konstraksi uterus : <input type='text' name='konst' size='30' value='$konst'>
		Lochia : <input type='text' name='loch' size='30' value='$loch'>
		<br>
		Parineum : <input type='text' name='pari' size='150' value='$pari'>
		<br>
		Lain-lain : <input type='text' name='lain2' size='150' value='$lain2'>
		<br><br>
		Diagnosa akhir : <input type='text' name='diag' size='140' value='$diag'>
		<br>
		Pengobatan : <input type='text' name='obt4' size='150' value='$obt4'>
		<br><br><br><br>
		<table border='0'>
		<tr>
		<td width='70%'></td>
		<td align='center'>
		<br>
		<br>
		<input type='text' name='dok' size='40' value='$dok'><br>
		Tanda tangan Bidan/ Dokter
		</td>
		</tr>
		<tr><td align='center'>
		<input type='hidden' name='idpas' value='$idpas'>
		<input type='hidden' name='status' value='$status'>

		<input type='submit' value='GANTI'>
		</td></tr>
		</table>
		</form>";
		}
	}

function pin_lapsln2()
	{
	$idpas=$_POST['idpas'];
	$status=$_POST['status'];

	$pch=$_POST['pch'];
	$tglpch=$_POST['tglpch'];
	$jampch=$_POST['jampch'];
	$pd=$_POST['pd'];
	$pch2=$_POST['pch2'];
	$indik=$_POST['indik'];
	$tgl2=$_POST['tgl2'];
	$jm2=$_POST['jm2'];
	$pd2=$_POST['pd2'];
	$jns=$_POST['jns'];
	$induk=$_POST['induk'];
	$pres=$_POST['pres'];

	$ruptura=$_POST['ruptura'];
	$tk=$_POST['tk'];
	$obt=$_POST['obt'];
	$epis=$_POST['epis'];
	$obt2=$_POST['obt2'];
	$lhr=$_POST['lhr'];
	$indik2=$_POST['indik2'];
	$indik3=$_POST['indik3'];
	$bius=$_POST['bius'];
	$bius2=$_POST['bius2'];
	$bius3=$_POST['bius3'];

	$sulit=$_POST['sulit'];
	$lm=$_POST['lm'];
	$drh=$_POST['drh'];
	$infus=$_POST['infus'];
	$ket=$_POST['ket'];
	$obt3=$_POST['obt3'];
	$lain=$_POST['lain'];

	$tglklr=$_POST['tglklr'];
	$kead=$_POST['kead'];
	$tensi=$_POST['tensi'];
	$hb=$_POST['hb'];
	$pykr=$_POST['pykr'];
	$pykn=$_POST['pykn'];
	$uteri=$_POST['uteri'];
	$konst=$_POST['konst'];
	$loch=$_POST['loch'];
	$pari=$_POST['pari'];
	$lain2=$_POST['lain2'];
	$diag=$_POST['diag'];
	$obt4=$_POST['obt4'];
	$dok=$_POST['dok'];

	$a=mysql_query("insert into m_salinlap2 values ('', '$idpas', '$pch', '$tglpch', '$jampch', '$pd', '$pch2', '$indik', '$tgl2', '$jm2', '$pd2', '$jns', '$induk', '$pres')");
	$b=mysql_query("insert into m_salinlap3 values ('', '$idpas', '$ruptura', '$tk', '$obt', '$epis', '$obt2', '$lhr', '$indik2', '$indik3', '$bius', '$bius2', '$bius3')");
	$c=mysql_query("insert into m_salinlap4 values ('', '$idpas', '$sulit', '$lm', '$drh', '$infus', '$ket', '$obt3', '$lain')");
	$d=mysql_query("insert into m_salinlap5 values ('', '$idpas', '$tglklr', '$kead', '$tensi', '$hb', '$pykr', '$pykn', '$uteri', '$konst', '$loch', '$pari', '$lain2', '$diag', '$obt4', '$dok')");
	if ($a and $b and $c and $d)
		{
		header ("Location: index.php?task=mes&idpas=$idpas&status=$status&alm=in_lapsln2&pes=Data Sudah Masuk");
		}
	else
		{echo"error";}
	}

function pen_lapsln2()
	{
	$idpas=$_POST['idpas'];
	$status=$_POST['status'];

	$pch=$_POST['pch'];
	$tglpch=$_POST['tglpch'];
	$jampch=$_POST['jampch'];
	$pd=$_POST['pd'];
	$pch2=$_POST['pch2'];
	$indik=$_POST['indik'];
	$tgl2=$_POST['tgl2'];
	$jm2=$_POST['jm2'];
	$pd2=$_POST['pd2'];
	$jns=$_POST['jns'];
	$induk=$_POST['induk'];
	$pres=$_POST['pres'];

	$ruptura=$_POST['ruptura'];
	$tk=$_POST['tk'];
	$obt=$_POST['obt'];
	$epis=$_POST['epis'];
	$obt2=$_POST['obt2'];
	$lhr=$_POST['lhr'];
	$indik2=$_POST['indik2'];
	$indik3=$_POST['indik3'];
	$bius=$_POST['bius'];
	$bius2=$_POST['bius2'];
	$bius3=$_POST['bius3'];

	$sulit=$_POST['sulit'];
	$lm=$_POST['lm'];
	$drh=$_POST['drh'];
	$infus=$_POST['infus'];
	$ket=$_POST['ket'];
	$obt3=$_POST['obt3'];
	$lain=$_POST['lain'];

	$tglklr=$_POST['tglklr'];
	$kead=$_POST['kead'];
	$tensi=$_POST['tensi'];
	$hb=$_POST['hb'];
	$pykr=$_POST['pykr'];
	$pykn=$_POST['pykn'];
	$uteri=$_POST['uteri'];
	$konst=$_POST['konst'];
	$loch=$_POST['loch'];
	$pari=$_POST['pari'];
	$lain2=$_POST['lain2'];
	$diag=$_POST['diag'];
	$obt4=$_POST['obt4'];
	$dok=$_POST['dok'];

	$a=mysql_query("update m_salinlap2 set pch='$pch', tglpch='$tglpch', jampch='$jampch', pd='$pd', pch2='$pch2', indik='$indik', tgl2='$tgl2', jm2='$jm2', pd2='$pd2', jns='$jns', induk='$induk', pres='$pres' where idpas='$idpas'");
	$b=mysql_query("update m_salinlap3 set ruptura='$ruptura', tk='$tk', obt='$obt', epis='$epis', obt2='$obt2', lhr='$lhr', indik2='$indik2', indik3='$indik3', bius='$bius', bius2='$bius2', bius3='$bius3' where idpas='$idpas'");
	$c=mysql_query("update m_salinlap4 set sulit='$sulit', lm='$lm', drh='$drh', infus='$infus', ket='$ket', obt3='$obt3', lain='$lain' where idpas='$idpas'");
	$d=mysql_query("update m_salinlap5 set tglklr='$tglklr', kead='$kead', tensi='$tensi', hb='$hb', pykr='$pykr', pykn='$pykn', uteri='$uteri', konst='$konst', loch='$loch', pari='$pari', lain2='$lain2', diag='$diag', obt4='$obt4', dok='$dok' where idpas='$idpas'");
	if ($a and $b and $c and $d)
		{
		header ("Location: index.php?task=mes&idpas=$idpas&status=$status&alm=in_lapsln2&pes=Data Sudah Diganti");
		}
	else
		{echo"error";}

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

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Inpartu Normal' order by nama ASC");
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
	////////////////////////////////////////////////////////////////////////////////////////////
	echo"<br><br>
	<table class='adminlist'>
	<form method='post' action='index.php?task=pin_lapsln'>
	<tr>
	<td width='50%'>
	Yang melakukan observasi: Bidan :
	</td>
	<td><input type='text' name='bidan' size='50'></td>
	</tr>

	<tr>
	<td width='50%'>
	telah dilaporkan ke Dokter: <input type='text' name='dok' size='30'>
	</td>
	<td>oleh :<input type='text' name='oleh' size='50'></td>
	</tr>

	<tr>
	<td width='50%'>";
	$tgl=date('d-m-Y');
	$jm=date('h:i');
	echo"
	Tanggal: <input type='text' name='tgl' size='30' value='$tgl'>
	</td>
	<td>jam :<input type='text' name='jam' size='30' value='$jm'></td>
	</tr>

	<tr>
	<td width='50%'>
	Tanggal
	</td>
	<td>: <input type='text' name='tgl2' size='50'></td>
	</tr>
	<tr>
	<td width='50%'>
	His
	</td>
	<td>: <input type='text' name='his' size='50'></td>
	</tr>
	<tr>
	<td width='50%'>
	BJA
	</td>
	<td>: <input type='text' name='bja' size='50'></td>
	</tr>
	<tr>
	<td width='50%'>
	Tensi/ Nadi
	</td>
	<td>: <input type='text' name='tensi' size='50'></td>
	</tr>
	<tr>
	<td width='50%'>
	Keterangan lain yang diperlukan
	</td>
	<td>: <input type='text' name='ket' size='50'></td>
	</tr>
	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='hidden' name='status' value='$status'>
	<input type='submit' value='SIMPAN'></td>
	</tr>
	</table>
	</form>";
	echo"
	<br><br>
	<table class='adminlist'>
	<tr>
	<td colspan='6' align='center'><b>Daftar Laporan Persalinan Pasien: $idpas - $nama</b></td>
	</tr>
	<tr>
	<td>Tanggal</td><td>His</td><td>BJA</td><td>Tensi/Nadi</td><td>Keterangan lain</td>
	<td>Hapus</td>

	</tr>
	";
	$b=mysql_query("select *from m_salinlap where idpas='$idpas' order by id ASC");
	while($a=mysql_fetch_array($b))
		{
		echo"
		<tr>
		<td><a href='index.php?task=ein_lapsln&id=$a[id]&idpas=$idpas&status=$status'>$a[tgl2]</a></td>
		<td>$a[his]</td>
		<td>$a[bja]</td>
		<td>$a[tensi]</td>
		<td>$a[ket]</td>
		<td><a href='index.php?task=del&id=$a[id]&alm=in_lapsln&db=salinlap&idpas=$idpas&status=$status'>Hapus</a></td>

		</tr>
		";
		}
	echo"
	</table>
	";
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

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Inpartu Normal' order by nama ASC");
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
	Nama Pasien: $nama
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
	$lgt=date('d-m-Y');
	$tkw=date('h:i');
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
	Tanggal Jam:
	<input type='text' name='tgl1' size='20' value='$lgt'>
	<input type='text' name='jm1' size='20'>
	</td>
	<td width='50%'>
	Untuk Dokter:
	<input type='text' name='dok' size='50'>
	</td>
	</tr>

	<tr>
	<td width='50%'>
	Tanggal Jam:
	<input type='text' name='tgl2' size='20'>
	<input type='text' name='jm2' size='20'>
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

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Inpartu Normal' order by nama ASC");
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


function instm()
	{
	$idpas=$_POST['idpas'];
	$status=$_POST['status'];


	echo"<center>
	<h1>PERSETUJUAN/ IJIN TINDAKAN MEDIK</h1></center>

	<br><br>
	<u>$pesan</u>
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
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Inpartu Normal' order by nama ASC");
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

function in_stm()
	{
	$idpas=$_POST['idpas'];
	$status=$_POST['status'];
	$p=mysql_query("select *from m_pasien where idpas='$idpas'");
	while($pa=mysql_fetch_array($p))
			{
			$nama=$pa['nama'];
			$umur=$pa['umur'];
			$norm=$pa['norm'];
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
	$ada = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_setuju where idpas='$idpas'"),0);
	if ($ada=='0')
		{
	echo"<br><br>
	<form method='post' action='index.php?task=pin_stm'>
	<center><h1>PERSETUJUAN/ IJIN TINDAKAN MEDIK</h1></center>
	<br>
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
	(Istilah medik:
	<select name='medik'>
	<option value='SC'>SC</option>
	<option value='Induksi'>Induksi</option>
	</select>
	)
	<br>
	dengan ini <b>MEMBERI PERSETUJUAN/ IJIN DILAKUKAN SEGALA TINDAKAN MEDIK</b> yang diperlukan menurut standart profesi cara pertolongan di RSIA. Mardi Waloeja Kauman-Malang (PERMENKES NO. 585/ MEN.KES/ PER/ IX/ 1989, Tgl. 4 September 1989) terhadap pasien:
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
	Pernyataan ini dibuat dengan <b>KESADARAN PENUH ATAS SEGALA RESIKO TINDAKAN MEDIK</b>.
	<br>
	Tersebut di atas, termasuk kemungkinan pengangkatan organ tubuh yang membahayakan : baik selama dalam perawatan maupun sesudah perawatan di RSIA. Mardi Waloeja Kauman-Malang, karena memang merupakan upaya terbaik saat ini.
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
		$r=mysql_query("select *from m_setuju where idpas='$idpas'");
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
		echo"<br><br>
	<form method='post' action='index.php?task=pun_stm'>
	<center><h1>PERSETUJUAN/ IJIN TINDAKAN MEDIK</h1></center>
	<br>
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

	(Istilah medik:
	<select name='medik'>
	<option value='$medik'>$medik</option>
	<option value='SC'>SC</option>
	<option value='Induksi'>Induksi</option>
	</select>
	)

	<br>
	dengan ini <b>MEMBERI PERSETUJUAN/ IJIN DILAKUKAN SEGALA TINDAKAN MEDIK</b> yang diperlukan menurut standart profesi cara pertolongan di RSIA. Mardi Waloeja Kauman-Malang (PERMENKES NO. 585/ MEN.KES/ PER/ IX/ 1989, Tgl. 4 September 1989) terhadap pasien:
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
	Pernyataan ini dibuat dengan <b>KESADARAN PENUH ATAS SEGALA RESIKO TINDAKAN MEDIK</b>.
	<br>
	Tersebut di atas, termasuk kemungkinan pengangkatan organ tubuh yang membahayakan : baik selama dalam perawatan maupun sesudah perawatan di RSIA. Mardi Waloeja Kauman-Malang, karena memang merupakan upaya terbaik saat ini.
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
	</form>
	";

		}

	}

function pin_stm()
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
	$a=mysql_query("insert into m_setuju values ('', '$idpas', '$kel', '$kellain', '$diag', '$medik', '$nama', '$umur', '$tgl', '$dok', '$pasien', '$bidan', '$kel2')");
	if($a)
		{header ("Location: index.php?task=mes&idpas=$idpas&status=$status&pes=Data Sudah Masuk&alm=in_stm");
		}
	else
		{echo"error";}
	}

function pun_stm()
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
	$a=mysql_query("update m_setuju set kel='$kel', kellain='$kellain', diag='$diag', medik='$medik', nama='$nama', umur='$umur', tgl='$tgl', dok='$dok', pasien='$pasien', bidan='$bidan', kel2='$kel2' where idpas='$idpas'");
	if($a)
		{header ("Location: index.php?task=mes&idpas=$idpas&status=$status&pes=Data Sudah Diganti&alm=in_stm");
		}
	else
		{echo"error";}
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

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status='Inpartu Normal' order by nama ASC");
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

function in_ttm()
	{
	$idpas=$_POST['idpas'];
	$p=mysql_query("select *from m_pasien where idpas='$idpas'");
	while($pa=mysql_fetch_array($p))
			{
			$nama=$pa['nama'];
			$umur=$pa['umur'];
			$norm=$pa['norm'];
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



}
?>