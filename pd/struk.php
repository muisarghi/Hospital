<?php
include('../inc/inc.php');
@ini_set('display_errors', 'off');
$idresep=$_GET['idresep'];
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

		$ada = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_polistruk where idresep='$idresep'"),0);
		if($ada=='0')
		{
		$insert=mysql_query("insert into m_polistruk values ('', '$idresep', '$btiket', '$bdokter', '$tot', '$total')");
		}
		else
		{

	echo"
	<b>
	POLI UMUM IBU & ANAK <br>
	RSIA.MARDIWALUYA MALANG<br>
	</b>
	Jl. Kauman No. Malang<br>
	Telpon. 0341-362304<br>
	www.rs-mardiwaluya-mlg.com
	<br>
	<br><br>
	<table width='300' border='0'>
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
	: Rp. $tot<br>
	: Rp. $bdokter<br>
	: Rp. $btiket</li>

	</td>
	</tr>

	<tr>
	<td align='center'>
	<b>Terbilang
	</td>

	<td>
	<b>: Rp. $total
	</td>

	</tr>
	";
	echo"
	</table>
	";
		}


?>