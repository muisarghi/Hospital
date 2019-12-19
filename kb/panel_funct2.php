<?php
class m3
{


function shbi()
	{
	echo"<center>
	<h1>
	Identitas Pasien
	<br>
	Kesehatan Bayi di Ruang Bersalin
	</h1>
	</center>
	<br>
	<u>$pesan</u>
	<br><br>
	<form method='post' action='index.php?task=sh_bi'>
	<table class='adminlist'>
	<tr>
	<td>
	Pencarian Nama Pasien :
	</td>
	<td rowspan='2'><input type='submit' value='CARI'>
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
		<option value='$a[idpas]'>$nama - $a[idpas]</option>
		";
		}
	echo"
	</select>

	</td>

	</tr>
	</table>
	</form>";
	}

function sh_bi()
	{
	$idpas=$_POST['idpas'];
	$wkt=DATE('d-m-Y : h.i');
	$j1=mysql_query("select *from m_pasien where idpas='$idpas'");
	while($j=mysql_fetch_array($j1))
		{
		$nama=$j[nama];
		}
	$ada = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_bybr2 where idpas='$idpas'"),0);
	if($ada=='0')
		{
	echo"
	<h1>KESEHATAN BAYI DI RUANG BERSALIN</h1>
	<br>
	<br>
	<form method='post' action='index.php?task=psh_bi'>
	<table class='adminlist'>
	<tr>
	<td width='10%'>RUANG</td>
	<td width='40%'><input type='text' name='rg'></td>
	<td width='10%'>NOMOR</td>
	<td width='40%'><input type='text' name='no'></td>
	</tr>
	<tr>
	<td>NAMA IBU</td>
	<td>$nama</td>
	<td>PENOLONG</td>
	<td><input type='text' name='penolong'></td>
	</tr>
	</table>
	<table class='adminlist'>
	<tr>
	<td width='30%'>
	G <input type='text' name='g' size='5'>
	P <input type='text' name='p' size='5'>
	A <input type='text' name='a' size='5'>
	<br>
	Kehamilan <input type='text' name='hml' size='20'>mg
	<br>
	Tgl lahir <input type='text' name='tgllhr' value='$wkt'>
	</td>
	<td valign='top'>
	Jenis Kelamin:
	<select name='jk'>
	<option value='laki-laki'>laki-laki</option>
	<option value='perempuan'>perempuan</option>
	<option value='meragukan'>meragukan</option>
	</select>
	<br>
	Kelainan
	<input type='text' name='lain' size='30'>
	</td>
	</tr>
	</table>

	<table class='adminlist'>
	<tr>
	<td width='50%' valign='top'>
	Persalinan:
	<select name='salin'>
	<option value='tunggal'>tunggal</option>
	<option value='kembar2'>kembar2</option>
	<option value='kembar3'>kembar3</option>
	<option value='lain-lain'>lain-lain</option>
	</select>
	<br><br>
	<select name='spontan'>
	<option value='spontan'>spontan</option>
	<option value='VE'>VE</option>
	<option value='FORSEP'>FORSEP</option>
	<option value='SC'>SC</option>
	<option value='lain-lain'>lain-lain</option>
	</select>
	<br><br>
	Presentasi : <input type='text' name='pres' size='40'>
	<br><br>
	Lamanya Persalinan:
	<br>
	Kala I <input type='text' name='lm1' size='5'> jam
	Kala II <input type='text' name='lm2' size='5'> jam
	<br><br>
	Gol. darah ibu: <input type='text' name='golibu' size='5'>
	RH: <input type='text' name='rh' size='5'>
	<br>
	<br>
	Ketuban pecah: tgl.<input type='text' name='ktbtgl' value='$wkt'>
	<br>
	<br>
	Warna :
	<select name='warna'>
	<option value='spontan'>spontan</option>
	<option value='dipecahkan'>dipecahkan</option>
	</select>
	<select name='warna2'>
	<option value='jernih'>jernih</option>
	<option value='keruh/kental'>keruh/kental</option>
	</select>
	<select name='warna3'>
	<option value='putih'>putih</option>
	<option value='hijau'>hijau</option>
	<option value='bercampur darah'>bercampur darah</option>
	</select>
	<br><br>
	RIWAYAT PENYAKIT IBU YANG MEMPENGARUHI BAYI:<br>
	<textarea name='rwyskt' cols='50' rows='5'>
	</textarea>
	<br><br>
	Riwayat kehamilan dan persalinan yang mempengaruhi kesehatan bayi:
	<br>
	<textarea name='rwyhml' cols='50' rows='5'>
	</textarea>
	<br><br>
	Penyakit keturunan:<br>
	<input type='text' name='skt' size='80'>
	</td>
	<td valign='top'>
	Pengisapan lendir waktu kepala lahir:
	<select name='lendir'>
	<option value='ya'>ya</option>
	<option value='tidak'>tidak</option>
	</select>
	<br><br>
	Resusitasi:
	<select name='res'>
	<option value='pengisapan lendir'>pengisapan lendir</option>
	<option value='O2 L/M'>O2 L/M</option>
	<option value='massage jantung'>massage jantung</option>
	<option value='intubasi endoktrakeal'>intubasi endoktrakeal</option>
	<option value='rangsangan'>rangsangan</option>
	<option value='ambu'>ambu</option>
	</select>
	<br><br>
	Penjelasan:
	<input type='text' name='jls' size='80'>
	<br><br>
	Berat badan lahir : <input type='text' name='bb' size='10'>kg
	<br><br>
	Panjang badan : <input type='text' name='pb' size='10'>cm
	<br><br>
	Lingkar kepala : <input type='text' name='lk' size='10'>cm
	<br><br>
	Lingkar dada : <input type='text' name='ld' size='10'>cm
	<br><br>
	Lingkar perut : <input type='text' name='lp' size='10'>cm
	<br><br>
	Suhu: I pukul <input type='text' name='shjm' size='10'>= <input type='text' name='sh' size='10'>C
	<br><br>
	Suhu: II pukul <input type='text' name='shjm2' size='10'>= <input type='text' name='sh2' size='10'>C
	<br><br>
	Pernafasan: I pukul <input type='text' name='nfjm' size='10'>= <input type='text' name='nf' size='10'>C
	<br><br>
	Pernafasan: II pukul <input type='text' name='nfjm2' size='10'>= <input type='text' name='nf2' size='10'>C
	<br><br>
	Denyut jantung: <input type='text' name='jtg' size='10'>
	</td>
	</tr>
	</table>

	<table class='adminlist'>
	<tr>
	<td>Parameter<br>Skor Apgar</td>
	<td>0</td>
	<td>1</td>
	<td>2</td>
	<td>1''</td>
	<td>5''</td>
	<td>10'' <br> 5''<7 </td>
	</tr>

	<tr>
	<td>Frekuensi Jantung</td>
	<td>Tak ada</td>
	<td> < 100 </td>
	<td> > 100 </td>
	<td><input type='text' name='jt1' size='5'></td>
	<td><input type='text' name='jt5' size='5'></td>
	<td><input type='text' name='jt10' size='5'></td>
	</tr>

	<tr>
	<td>Usaha nafas</td>
	<td>Tak ada</td>
	<td> Lambat tak teratur</td>
	<td> Menangis kuat</td>
	<td><input type='text' name='nf1' size='5'></td>
	<td><input type='text' name='nf5' size='5'></td>
	<td><input type='text' name='nf10' size='5'></td>
	</tr>

	<tr>
	<td>Tonus otot</td>
	<td>lumpuh</td>
	<td> eks fleksi sedikit</td>
	<td> gerakan aktif</td>
	<td><input type='text' name='ot1' size='5'></td>
	<td><input type='text' name='ot5' size='5'></td>
	<td><input type='text' name='ot10' size='5'></td>
	</tr>

	<tr>
	<td>Refleks</td>
	<td>tidak respon</td>
	<td> pergerakan sedikit</td>
	<td> Menangis</td>
	<td><input type='text' name='ref1' size='5'></td>
	<td><input type='text' name='ref5' size='5'></td>
	<td><input type='text' name='ref10' size='5'></td>
	</tr>

	<tr>
	<td>Warna</td>
	<td>biru/pucat</td>
	<td> tubuh kemerahan ext.biru</td>
	<td> seluruh tubuh kemerahan</td>
	<td><input type='text' name='wrn1' size='5'></td>
	<td><input type='text' name='wrn5' size='5'></td>
	<td><input type='text' name='wrn10' size='5'></td>
	</tr>

	<tr>
	<td colspan='4'>
	Dinilai oleh: <input type='text' name='nilai' size='100'>
	TOTAL:
	</td>
	<td><input type='text' name='total1' size='5'></td>
	<td><input type='text' name='total5' size='5'></td>
	<td><input type='text' name='total10' size='5'></td>
	</tr>

	<tr>
	<td colspan='7'>
	<select name='jns'>
	<option value='Lahir hidup'>Lahir hidup</option>
	<option value='Janin meninggal antepartum'>Janin meninggal antepartum</option>
	<option value='Janin meninggal intrapartum'>Janin meninggal intrapartum</option>
	<option value='Kematian neonatal'>Kematian neonatal</option>
	<option value='Kematian Ibu: Ya'>Kematian Ibu: Ya</option>
	<option value='Kematian Ibu: Tidak'>Kematian Ibu: Tidak</option>
	</select>
	<br>
	Sebab: <input type='text' name='sebab' size='50'>
	</td>
	</tr>

	</table>

	<table class='adminlist'>
	<tr>
	<td colspan='2'>
	Obat yang diberi:
	<br><textarea name='obt' cols='100' rows='5'>
	</textarea>
	</td>
	</tr>
	<td width='50%'>
	Gelang dipasang oleh:
	<input type='text' name='gelang' size='50'>
	</td>
	<td width='50%'>
	Diperiksa oleh:
	<input type='text' name='periksa' size='50'>
	</td>
	</tr>
	<tr>
	<td valign='top'>
	Cap telapak kaki kiri bayi:
	<br><br><br><br><br><br><br><br>
	</td>
	<td valign='top'>Cap telapak kaki kanan bayi:</td>
	</tr>

	<tr>
	<td colspan='2' align='center'>Cap jempol tangan ibu</td>
	</tr>
	<tr>
	<td valign='top'>
	Kiri:
	<br><br><br><br><br><br>
	</td>
	<td valign='top'>Kanan:</td>
	</tr>
	<tr>
	<td colspan='2'>
	<b>Sewaktu pulang</b>
	<br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	Tanggal: <input type='text' name='tglplg' size='15'>
	<br>
	Saya menyatakan bahwa pada saat pulang saya telah memeriksa, meyakinkan dan menerima bayi saya dengan memeriksa jenis kelamin dan mencocokkan identitas pada gelang bayi, bahwa bayi tersebut adalah betul-betul anak saya.
	<br><br>
	</td>
	</tr>
	<tr>
	<td align='center'>
	Tanda tangan Perawat/ Saksi
	<br>
	<br>
	<br>
	<input type='text' name='ttdprw' size='30'>
	</td>
	<td align='center'>
	Tanda tangan Ibu
	<br>
	<br>
	<br>
	<input type='text' name='ttdibu' size='30'>
	</td>
	</tr>
	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value=' [ SIMPAN ] '>
	</td>
	</tr>
	</table>
	</form>
	";
	}
	//////////////////////............/////////////////////
	else
	{
	$z1=mysql_query("select *from m_bybr2 where idpas='$idpas'");
	while ($z=mysql_fetch_array($z1))
	{
	$rg=$z['rg'];
	$no=$z['no'];
	$penolong=$z['penolong'];
	$g=$z['g'];
	$p=$z['p'];
	$a=$z['a'];
	$hml=$z['hml'];
	$tgllhr=$z['tgllhr'];
	$jk=$z['jk'];
	$lain=$z['lain'];
	}
	$y1=mysql_query("select *from m_bybr3 where idpas='$idpas'");
	while ($y=mysql_fetch_array($y1))
	{
	$salin=$y['salin'];
	$spontan=$y['spontan'];
	$pres=$y['pres'];
	$lm1=$y['lm1'];
	$lm2=$y['lm2'];
	$golibu=$y['golibu'];
	$rh=$y['rh'];
	$ktbtgl=$y['ktbtgl'];
	$warna=$y['warna'];
	$warna2=$y['warna2'];
	$warna3=$y['warna3'];
	$rwyskt=$y['rwyskt'];
	$rwyhml=$y['rwyhml'];
	$skt=$y['skt'];
	}
	$x1=mysql_query("select *from m_bybr4 where idpas='$idpas'");
	while ($x=mysql_fetch_array($x1))
	{
	$lendir=$x['lendir'];
	$res=$x['res'];
	$jls=$x['jls'];
	$bb=$x['bb'];
	$pb=$x['pb'];
	$lp=$x['lp'];
	$lk=$x['lk'];
	$ld=$x['ld'];
	$shjm=$x['shjm'];
	$sh=$x['sh'];
	$shjm2=$x['shjm2'];
	$sh2=$x['sh2'];
	$nfjm=$x['nfjm'];
	$nf=$x['nf'];
	$nfjm2=$x['nfjm2'];
	$nf2=$x['nf2'];
	$jtg=$x['jtg'];
	}
	$w1=mysql_query("select *from m_bybr5 where idpas='$idpas'");
	while ($w=mysql_fetch_array($w1))
	{
	$jt1=$w['jt1'];
	$jt5=$w['jt5'];
	$jt10=$w['jt10'];
	$nf1=$w['nf1'];
	$nf5=$w['nf5'];
	$nf10=$w['nf10'];
	$ot1=$w['ot1'];
	$ot5=$w['ot5'];
	$ot10=$w['ot10'];
	$ref1=$w['ref1'];
	$ref5=$w['ref5'];
	$ref10=$w['ref10'];
	$wrn1=$w['wrn1'];
	$wrn5=$w['wrn5'];
	$wrn10=$w['wrn10'];
	$nilai=$w['nilai'];
	$total1=$w['total1'];
	$total5=$w['total5'];
	$total10=$w['total10'];
	$jns=$w['jns'];
	$sebab=$w['sebab'];
	}
	$v1=mysql_query("select *from m_bybr6 where idpas='$idpas'");
	while ($v=mysql_fetch_array($v1))
	{
	$obt=$v['obt'];
	$gelang=$v['gelang'];
	$periksa=$v['periksa'];
	$tglplg=$v['tglplg'];
	$ttdprw=$v['ttdprw'];
	$ttdibu=$v['ttdibu'];
	}
	echo"
	<h1>KESEHATAN BAYI DI RUANG BERSALIN</h1>
	<br>
	<br>
	<form method='post' action='index.php?task=esh_bi'>
	<table class='adminlist'>
	<tr>
	<td width='10%'>RUANG</td>
	<td width='40%'><input type='text' name='rg' value='$rg'></td>
	<td width='10%'>NOMOR</td>
	<td width='40%'><input type='text' name='no' value='$no'></td>
	</tr>
	<tr>
	<td>NAMA IBU</td>
	<td>$nama</td>
	<td>PENOLONG</td>
	<td><input type='text' name='penolong' value='$penolong'></td>
	</tr>
	</table>
	<table class='adminlist'>
	<tr>
	<td width='30%'>
	G <input type='text' name='g' size='5' value='$g'>
	P <input type='text' name='p' size='5' value='$p'>
	A <input type='text' name='a' size='5' value='$a'>
	<br>
	Kehamilan <input type='text' name='hml' size='20' value='$hml'>mg
	<br>
	Tgl lahir <input type='text' name='tgllhr' value='$tgllhr'>
	</td>
	<td valign='top'>
	Jenis Kelamin:
	<select name='jk'>
	<option value='$jk'>$jk</option>
	<option value='laki-laki'>laki-laki</option>
	<option value='perempuan'>perempuan</option>
	<option value='meragukan'>meragukan</option>
	</select>
	<br>
	Kelainan
	<input type='text' name='lain' size='30' value='$lain'>
	</td>
	</tr>
	</table>

	<table class='adminlist'>
	<tr>
	<td width='50%' valign='top'>
	Persalinan:
	<select name='salin'>
	<option value='$salin'>$salin</option>
	<option value='tunggal'>tunggal</option>
	<option value='kembar2'>kembar2</option>
	<option value='kembar3'>kembar3</option>
	<option value='lain-lain'>lain-lain</option>
	</select>
	<br><br>
	<select name='spontan'>
	<option value='$spontan'>$spontan</option>
	<option value='spontan'>spontan</option>
	<option value='VE'>VE</option>
	<option value='FORSEP'>FORSEP</option>
	<option value='SC'>SC</option>
	<option value='lain-lain'>lain-lain</option>
	</select>
	<br><br>
	Presentasi : <input type='text' name='pres' size='40' value='$pres'>
	<br><br>
	Lamanya Persalinan:
	<br>
	Kala I <input type='text' name='lm1' size='5' value='$lm1'> jam
	Kala II <input type='text' name='lm2' size='5' value='$lm2'> jam
	<br><br>
	Gol. darah ibu: <input type='text' name='golibu' size='5' value='$golibu'>
	RH: <input type='text' name='rh' size='5' value='$rh'>
	<br>
	<br>
	Ketuban pecah: tgl.<input type='text' name='ktbtgl' value='$ktbtgl'>
	<br>
	<br>
	Warna :
	<select name='warna'>
	<option value='$warna'>$warna</option>
	<option value='spontan'>spontan</option>
	<option value='dipecahkan'>dipecahkan</option>
	</select>
	<select name='warna2'>
	<option value='$warna2'>$warna2</option>
	<option value='jernih'>jernih</option>
	<option value='keruh/kental'>keruh/kental</option>
	</select>
	<select name='warna3'>
	<option value='$warna3'>$warna3</option>
	<option value='putih'>putih</option>
	<option value='hijau'>hijau</option>
	<option value='bercampur darah'>bercampur darah</option>
	</select>
	<br><br>
	RIWAYAT PENYAKIT IBU YANG MEMPENGARUHI BAYI:<br>
	<textarea name='rwyskt' cols='50' rows='5'>
	$rwyskt
	</textarea>
	<br><br>
	Riwayat kehamilan dan persalinan yang mempengaruhi kesehatan bayi:
	<br>
	<textarea name='rwyhml' cols='50' rows='5'>
	$rwyhml
	</textarea>
	<br><br>
	Penyakit keturunan:<br>
	<input type='text' name='skt' size='80' value='$skt'>
	</td>
	<td valign='top'>
	Pengisapan lendir waktu kepala lahir:
	<select name='lendir'>
	<option value='$lendir'>$lendir</option>
	<option value='ya'>ya</option>
	<option value='tidak'>tidak</option>
	</select>
	<br><br>
	Resusitasi:
	<select name='res'>
	<option value='$res'>$res</option>
	<option value='pengisapan lendir'>pengisapan lendir</option>
	<option value='O2 L/M'>O2 L/M</option>
	<option value='massage jantung'>massage jantung</option>
	<option value='intubasi endoktrakeal'>intubasi endoktrakeal</option>
	<option value='rangsangan'>rangsangan</option>
	<option value='ambu'>ambu</option>
	</select>
	<br><br>
	Penjelasan:
	<input type='text' name='jls' size='80' value='$jls'>
	<br><br>
	Berat badan lahir : <input type='text' name='bb' size='10' value='$bb'>kg
	<br><br>
	Panjang badan : <input type='text' name='pb' size='10' value='$pb'>cm
	<br><br>
	Lingkar kepala : <input type='text' name='lk' size='10' value='$lk'>cm
	<br><br>
	Lingkar dada : <input type='text' name='ld' size='10' value='$ld'>cm
	<br><br>
	Lingkar perut : <input type='text' name='lp' size='10' value='$lp'>cm
	<br><br>
	Suhu: I pukul <input type='text' name='shjm' size='10' value='$shjm'>= <input type='text' name='sh' size='10' value='$sh'>C
	<br><br>
	Suhu: II pukul <input type='text' name='shjm2' size='10' value='$shjm2'>= <input type='text' name='sh2' size='10' value='$sh2'>C
	<br><br>
	Pernafasan: I pukul <input type='text' name='nfjm' size='10' value='$nfjm'>= <input type='text' name='nf' size='10' value='$nf'>C
	<br><br>
	Pernafasan: II pukul <input type='text' name='nfjm2' size='10' value='$nfjm2'>= <input type='text' name='nf2' size='10' value='$nf2'>C
	<br><br>
	Denyut jantung: <input type='text' name='jtg' size='10' value='$jtg'>
	</td>
	</tr>
	</table>

	<table class='adminlist'>
	<tr>
	<td>Parameter<br>Skor Apgar</td>
	<td>0</td>
	<td>1</td>
	<td>2</td>
	<td>1''</td>
	<td>5''</td>
	<td>10'' <br> 5''<7 </td>
	</tr>

	<tr>
	<td>Frekuensi Jantung</td>
	<td>Tak ada</td>
	<td> < 100 </td>
	<td> > 100 </td>
	<td><input type='text' name='jt1' size='5' value='$jt1'></td>
	<td><input type='text' name='jt5' size='5' value='$jt5'></td>
	<td><input type='text' name='jt10' size='5' value='$jt10'></td>
	</tr>

	<tr>
	<td>Usaha nafas</td>
	<td>Tak ada</td>
	<td> Lambat tak teratur</td>
	<td> Menangis kuat</td>
	<td><input type='text' name='nf1' size='5' value='$nf1'></td>
	<td><input type='text' name='nf5' size='5' value='$nf5'></td>
	<td><input type='text' name='nf10' size='5' value='$nf10'></td>
	</tr>

	<tr>
	<td>Tonus otot</td>
	<td>lumpuh</td>
	<td> eks fleksi sedikit</td>
	<td> gerakan aktif</td>
	<td><input type='text' name='ot1' size='5' value='$ot1'></td>
	<td><input type='text' name='ot5' size='5' value='$ot5'></td>
	<td><input type='text' name='ot10' size='5' value='$ot10'></td>
	</tr>

	<tr>
	<td>Refleks</td>
	<td>tidak respon</td>
	<td> pergerakan sedikit</td>
	<td> Menangis</td>
	<td><input type='text' name='ref1' size='5' value='$ref1'></td>
	<td><input type='text' name='ref5' size='5' value='$ref5'></td>
	<td><input type='text' name='ref10' size='5' value='$ref10'></td>
	</tr>

	<tr>
	<td>Warna</td>
	<td>biru/pucat</td>
	<td> tubuh kemerahan ext.biru</td>
	<td> seluruh tubuh kemerahan</td>
	<td><input type='text' name='wrn1' size='5' value='$wrn1'></td>
	<td><input type='text' name='wrn5' size='5' value='$wrn5'></td>
	<td><input type='text' name='wrn10' size='5' value='$wrn10'></td>
	</tr>

	<tr>
	<td colspan='4'>
	Dinilai oleh: <input type='text' name='nilai' size='100' value='$nilai'>
	TOTAL:
	</td>
	<td><input type='text' name='total1' size='5' value='$total1'></td>
	<td><input type='text' name='total5' size='5' value='$total5'></td>
	<td><input type='text' name='total10' size='5' value='$total10'></td>
	</tr>

	<tr>
	<td colspan='7'>
	<select name='jns'>
	<option value='$jns'>$jns</option>
	<option value='Lahir hidup'>Lahir hidup</option>
	<option value='Janin meninggal antepartum'>Janin meninggal antepartum</option>
	<option value='Janin meninggal intrapartum'>Janin meninggal intrapartum</option>
	<option value='Kematian neonatal'>Kematian neonatal</option>
	<option value='Kematian Ibu: Ya'>Kematian Ibu: Ya</option>
	<option value='Kematian Ibu: Tidak'>Kematian Ibu: Tidak</option>
	</select>
	<br>
	Sebab: <input type='text' name='sebab' size='50' value='$sebab'>
	</td>
	</tr>

	</table>

	<table class='adminlist'>
	<tr>
	<td colspan='2'>
	Obat yang diberi:
	<br><textarea name='obt' cols='100' rows='5'>
	$obt
	</textarea>
	</td>
	</tr>
	<td width='50%'>
	Gelang dipasang oleh:
	<input type='text' name='gelang' size='50' value='$gelang'>
	</td>
	<td width='50%'>
	Diperiksa oleh:
	<input type='text' name='periksa' size='50' value='$periksa'>
	</td>
	</tr>
	<tr>
	<td valign='top'>
	Cap telapak kaki kiri bayi:
	<br><br><br><br><br><br><br><br>
	</td>
	<td valign='top'>Cap telapak kaki kanan bayi:</td>
	</tr>

	<tr>
	<td colspan='2' align='center'>Cap jempol tangan ibu</td>
	</tr>
	<tr>
	<td valign='top'>
	Kiri:
	<br><br><br><br><br><br>
	</td>
	<td valign='top'>Kanan:</td>
	</tr>
	<tr>
	<td colspan='2'>
	<b>Sewaktu pulang</b>
	<br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	Tanggal: <input type='text' name='tglplg' size='15' value='$tglplg'>
	<br>
	Saya menyatakan bahwa pada saat pulang saya telah memeriksa, meyakinkan dan menerima bayi saya dengan memeriksa jenis kelamin dan mencocokkan identitas pada gelang bayi, bahwa bayi tersebut adalah betul-betul anak saya.
	<br><br>
	</td>
	</tr>
	<tr>
	<td align='center'>
	Tanda tangan Perawat/ Saksi
	<br>
	<br>
	<br>
	<input type='text' name='ttdprw' size='30' value='$ttdprw'>
	</td>
	<td align='center'>
	Tanda tangan Ibu
	<br>
	<br>
	<br>
	<input type='text' name='ttdibu' size='30' value='$ttdibu'>
	</td>
	</tr>
	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value=' [ GANTI ] '>
	</td>
	</tr>
	</table>
	</form>
	";
	}

	}

function akuaaa()
	{

	}

function psh_bi()
	{
	$idpas=$_POST['idpas'];
	$rg=$_POST['rg'];
	$no=$_POST['no'];
	$penolong=$_POST['penolong'];
	$g=$_POST['g'];
	$p=$_POST['p'];
	$a=$_POST['a'];
	$hml=$_POST['hml'];
	$tgllhr=$_POST['tgllhr'];
	$jk=$_POST['jk'];
	$lain=$_POST['lain'];

	$salin=$_POST['salin'];
	$spontan=$_POST['spontan'];
	$pres=$_POST['pres'];
	$lm1=$_POST['lm1'];
	$lm2=$_POST['lm2'];
	$golibu=$_POST['golibu'];
	$rh=$_POST['rh'];
	$ktbtgl=$_POST['ktbtgl'];
	$warna=$_POST['warna'];
	$warna2=$_POST['warna2'];
	$warna3=$_POST['warna3'];
	$rwyskt=$_POST['rwyskt'];
	$rwyhml=$_POST['rwyhml'];
	$skt=$_POST['skt'];

	$lendir=$_POST['lendir'];
	$res=$_POST['res'];
	$jls=$_POST['jls'];
	$bb=$_POST['bb'];
	$pb=$_POST['pb'];
	$lk=$_POST['lk'];
	$ld=$_POST['ld'];
	$lp=$_POST['lp'];
	$shjm=$_POST['shjm'];
	$sh=$_POST['sh'];
	$shjm2=$_POST['shjm2'];
	$sh2=$_POST['sh2'];
	$nfjm=$_POST['nfjm'];
	$nf=$_POST['nf'];
	$nfjm2=$_POST['nfjm2'];
	$nf2=$_POST['nf2'];
	$jtg=$_POST['jtg'];

	$jt1=$_POST['jt1'];
	$jt5=$_POST['jt5'];
	$jt10=$_POST['jt10'];
	$nf1=$_POST['nf1'];
	$nf5=$_POST['nf5'];
	$nf10=$_POST['nf10'];
	$ot1=$_POST['ot1'];
	$ot5=$_POST['ot5'];
	$ot10=$_POST['ot10'];
	$ref1=$_POST['ref1'];
	$ref5=$_POST['ref5'];
	$ref10=$_POST['ref10'];
	$wrn1=$_POST['wrn1'];
	$wrn5=$_POST['wrn5'];
	$wrn10=$_POST['wrn10'];
	$nilai=$_POST['nilai'];
	$total1=$_POST['total1'];
	$total5=$_POST['total5'];
	$total10=$_POST['total10'];
	$jns=$_POST['jns'];
	$sebab=$_POST['sebab'];

	$obt=$_POST['obt'];
	$gelang=$_POST['gelang'];
	$periksa=$_POST['periksa'];
	$tglplg=$_POST['tglplg'];
	$ttdprw=$_POST['ttdprw'];
	$ttdibu=$_POST['ttdibu'];

	$z=mysql_query("insert into m_bybr2 values('', '$idpas', '$rg', '$no', '$penolong', '$g', '$p', '$a', '$hml', '$tgllhr', '$jk', '$lain')");
	$y=mysql_query("insert into m_bybr3 values('', '$idpas', '$salin', '$spontan', '$pres', '$lm1', '$lm2', '$golibu', '$rh', '$ktbtgl', '$warna', '$warna2', '$warna3', '$rwyskt', '$rwyhml', '$skt')");
	$x=mysql_query("insert into m_bybr4 values ('', '$idpas', '$lendir', '$res', '$jls', '$bb', '$pb', '$lk', '$ld', '$lp', '$shjm', '$sh', '$shjm2', '$sh2', '$nfjm', '$nf', '$nfjm2', '$nf2', '$jtg')");
	$w=mysql_query("insert into m_bybr5 values ('', '$idpas', '$jt1', '$jt5', '$jt10', '$nf1', '$nf5', '$nf10', '$ot1', '$ot5', '$ot10', '$ref1', '$ref5', '$ref10', '$wrn1', '$wrn5', '$wrn10', '$nilai', '$total1', '$total5', '$total10', '$jns', '$sebab')");
	$v=mysql_query("insert into m_bybr6 values ('', '$idpas', '$obt', '$gelang', '$periksa', '$tglplg', '$ttdprw', '$ttdibu')");


	if ($z and $y and $x and $w and $v)
		{header ("Location: index.php?task=mes&idpas=$idpas&alm=sh_bi&pes=Data Sudah Masuk");}
	else
		{
	echo"ror";}
	}

function esh_bi()
	{
	$idpas=$_POST['idpas'];
	$rg=$_POST['rg'];
	$no=$_POST['no'];
	$penolong=$_POST['penolong'];
	$g=$_POST['g'];
	$p=$_POST['p'];
	$a=$_POST['a'];
	$hml=$_POST['hml'];
	$tgllhr=$_POST['tgllhr'];
	$jk=$_POST['jk'];
	$lain=$_POST['lain'];

	$salin=$_POST['salin'];
	$spontan=$_POST['spontan'];
	$pres=$_POST['pres'];
	$lm1=$_POST['lm1'];
	$lm2=$_POST['lm2'];
	$golibu=$_POST['golibu'];
	$rh=$_POST['rh'];
	$ktbtgl=$_POST['ktbtgl'];
	$warna=$_POST['warna'];
	$warna2=$_POST['warna2'];
	$warna3=$_POST['warna3'];
	$rwyskt=$_POST['rwyskt'];
	$rwyhml=$_POST['rwyhml'];
	$skt=$_POST['skt'];

	$lendir=$_POST['lendir'];
	$res=$_POST['res'];
	$jls=$_POST['jls'];
	$bb=$_POST['bb'];
	$pb=$_POST['pb'];
	$lk=$_POST['lk'];
	$ld=$_POST['ld'];
	$lp=$_POST['lp'];
	$shjm=$_POST['shjm'];
	$sh=$_POST['sh'];
	$shjm2=$_POST['shjm2'];
	$sh2=$_POST['sh2'];
	$nfjm=$_POST['nfjm'];
	$nf=$_POST['nf'];
	$nfjm2=$_POST['nfjm2'];
	$nf2=$_POST['nf2'];
	$jtg=$_POST['jtg'];

	$jt1=$_POST['jt1'];
	$jt5=$_POST['jt5'];
	$jt10=$_POST['jt10'];
	$nf1=$_POST['nf1'];
	$nf5=$_POST['nf5'];
	$nf10=$_POST['nf10'];
	$ot1=$_POST['ot1'];
	$ot5=$_POST['ot5'];
	$ot10=$_POST['ot10'];
	$ref1=$_POST['ref1'];
	$ref5=$_POST['ref5'];
	$ref10=$_POST['ref10'];
	$wrn1=$_POST['wrn1'];
	$wrn5=$_POST['wrn5'];
	$wrn10=$_POST['wrn10'];
	$nilai=$_POST['nilai'];
	$total1=$_POST['total1'];
	$total5=$_POST['total5'];
	$total10=$_POST['total10'];
	$jns=$_POST['jns'];
	$sebab=$_POST['sebab'];

	$obt=$_POST['obt'];
	$gelang=$_POST['gelang'];
	$periksa=$_POST['periksa'];
	$tglplg=$_POST['tglplg'];
	$ttdprw=$_POST['ttdprw'];
	$ttdibu=$_POST['ttdibu'];

	$z=mysql_query("update m_bybr2 set rg='$rg', no='$no', penolong='$penolong', g='$g', p='$p', a='$a', hml='$hml', tgllhr='$tgllhr', jk='$jk', lain='$lain' where idpas='$idpas'");
	$y=mysql_query("update m_bybr3 set salin='$salin', spontan='$spontan', pres='$pres', lm1='$lm1', lm2='$lm2', golibu='$golibu', rh='$rh', ktbtgl='$ktbtgl', warna='$warna', warna2='$warna2', warna3='$warna3', rwyskt='$rwyskt', rwyhml='$rwyhml', skt='$skt' where idpas='$idpas'");
	$x=mysql_query("update m_bybr4 set lendir='$lendir', res='$res', jls='$jls', bb='$bb', pb='$pb', lk='$lk', ld='$ld', lp='$lp', shjm='$shjm', sh='$sh', shjm2='$shjm2', sh2='$sh2', nfjm='$nfjm', nf='$nf', nfjm2='$nfjm2', nf2='$nf2', jtg='$jtg' where idpas='$idpas'");
	$w=mysql_query("update m_bybr5 set jt1='$jt1', jt5='$jt5', jt10='$jt10', nf1='$nf1', nf5='$nf5', nf10='$nf10', ot1='$ot1', ot5='$ot5', ot10='$ot10', ref1='$ref1', ref5='$ref5', ref10='$ref10', wrn1='$wrn1', wrn5='$wrn5', wrn10='$wrn10', nilai='$nilai', total1='$total1', total5='$total5', total10='$total10', jns='$jns', sebab='$sebab' where idpas='$idpas'");
	$v=mysql_query("update m_bybr6 set obt='$obt', gelang='$gelang', periksa='$periksa', tglplg='$tglplg', ttdprw='$ttdprw', ttdibu='$ttdibu' where idpas='$idpas'");


	if ($z and $y and $x and $w and $v)
		{header ("Location: index.php?task=mes&idpas=$idpas&alm=sh_bi&pes=Data Sudah Diganti");}
	else
		{
	echo"ror";}
	}


function alkesmt()
	{
	$pesan=$_GET['pesan'];
	$tgl=DATE('d-m-Y');
	echo"
	<br>
	<h1>PENGAJUAN PERMINTAAN OBAT/ ALKES</h1>
	<br>
	<u>$pesan</u>
	<br><br>
	<table class='adminlist'>
	<tr>
	<td>Unit</td>
	<td>NO</td>
	<td>Tgl</td>
	<td>Pemberi/ Tgl</td>
	<td>Penerima/ Tgl</td>
	<td>Obat</td>
	<td>Hapus</td>
	</tr>
	";
	$a1=mysql_query("select *from m_alkesmt where unit='Kamar Bersalin' order by id DESC");
	while ($a=mysql_fetch_array($a1))
	{
	echo"
	<tr>
	<td><a href='index.php?task=ealkesmt&id=$a[id]'>$a[unit]</a></td>
	<td>$a[no]</td>
	<td>$a[tgl]</td>
	<td>$a[beri]/ $a[beritgl]</td>
	<td>$a[trm]/ $a[trmtgl]</td>
	<td><a href='index.php?task=alkes_mt&idtr=$a[id]'>Obat</a></td>
	<td><a href='index.php?task=delalkes&id=$a[id]'>hapus</a></td>
	</tr>
	";
	}

	echo"
	</table>
	<br><br>
	Tambah Data:
	<form method='post' action='index.php?task=palkesmt'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>
	Unit
	</td>
	<td>
	: <input type='text' name='unit' value='Kamar Bersalin'>
	</td>
	</tr>

	<tr>
	<td width='20%'>
	NO
	</td>
	<td>
	: <input type='text' name='no'>
	</td>
	</tr>

	<tr>
	<td width='20%'>
	Tanggal
	</td>
	<td>
	: <input type='text' name='tgl' value='$tgl'>
	</td>
	</tr>
	";
	/*
	<tr>
	<td width='20%'>
	Diberikan Oleh:
	</td>
	<td>
	:";// <input type='text' name='beri'>
	echo"</td>
	</tr>

	<tr>
	<td width='20%'>
	Diberikan Tgl:
	</td>
	<td>
	: ";//<input type='text' name='beritgl'>
	echo"</td>
	</tr>
	*/
	echo"
	<tr>
	<td width='20%'>
	Diterima Oleh:
	</td>
	<td>
	: <input type='text' name='trm'>
	</td>
	</tr>
	<tr>
	<td width='20%'>
	Diterima Tgl:
	</td>
	<td>
	: <input type='text' name='trmtgl'>
	</td>
	</tr>

	<tr>
	<td colspan='2' align='center'>
	<input type='submit' value='[ SIMPAN ]'>
	</td>
	</tr>
	</table>
	</form>
	";

	}

function palkesmt()
	{
	$unit=$_POST['unit'];
	$no=$_POST['no'];
	$tgl=$_POST['tgl'];
	//$beri=$_POST['beri'];
	//$beritgl=$_POST['beritgl'];
	$trm=$_POST['trm'];
	$trmtgl=$_POST['trmtgl'];
	$a=mysql_query("insert into m_alkesmt values ('', '$unit', '$no', '$tgl', '', '', '$trm', '$trmtgl')");
	if ($a)
	{header ("Location: index.php?task=alkesmt&pesan=Data Sudah Masuk");}
	else
		{
	echo"ror";}
	}

function ealkesmt()
	{
	$id=$_GET['id'];
	$a1=mysql_query("select *from m_alkesmt where id='$id'");
	while($a=mysql_fetch_array($a1))
	{
	$unit=$a['unit'];
	$no=$a['no'];
	$tgl=$a['tgl'];
	$beri=$a['beri'];
	$beritgl=$a['beritgl'];
	$trm=$a['trm'];
	$trmtgl=$a['trmtgl'];
	}
	echo"
	<form method='post' action='index.php?task=ealkesmt2'>
	<table class='adminlist'>

	<tr>
	<td width='20%'>
	NO
	</td>
	<td>
	: <input type='text' name='no' value='$no'>
	</td>
	</tr>

	<tr>
	<td width='20%'>
	Tanggal
	</td>
	<td>
	: <input type='text' name='tgl' value='$tgl' value='$tgl'>
	</td>
	</tr>

	<tr>
	<td width='20%'>
	Diberikan Oleh:
	</td>
	<td>
	: $beri
	</td>
	</tr>

	<tr>
	<td width='20%'>
	Diberikan Tgl:
	</td>
	<td>
	: $beritgl
	</td>
	</tr>
	<tr>
	<td width='20%'>
	Diterima Oleh:
	</td>
	<td>
	: <input type='text' name='trm' value='$trm'>
	</td>
	</tr>
	<tr>
	<td width='20%'>
	Diterima Tgl:
	</td>
	<td>
	: <input type='text' name='trmtgl' value='$trmtgl'>
	</td>
	</tr>

	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='id' value='$id'>
	<input type='submit' value='[ GANTI ]'>
	</td>
	</tr>
	</table>
	</form>
	";
	}

function ealkesmt2()
	{
	$id=$_POST['id'];
	$unit=$_POST['unit'];
	$no=$_POST['no'];
	$tgl=$_POST['tgl'];
	//$beri=$_POST['beri'];
	//$beritgl=$_POST['beritgl'];
	$trm=$_POST['trm'];
	$trmtgl=$_POST['trmtgl'];
	$a=mysql_query("update m_alkesmt set no='$no', tgl='$tgl', trm='$trm', trmtgl='$trmtgl' where id='$id'");
	if ($a)
	{header ("Location: index.php?task=alkesmt&pesan=Data Sudah Diganti");}
	else
		{
	echo"ror";}
	}


function alkes_mt()
	{
	$idtr=$_GET['idtr'];
	$pesan=$_GET['pesan'];
	echo"
	<h1>PENGAJUAN PERMINTAAN OBAT/ ALKES</h1>
	<br>
	<u>$pesan</u>
	<br><br>
	<table class='adminlist'>
	<tr>
	<td>Unit</td>
	<td>NO</td>
	<td>Tgl</td>

	</tr>
	";
	$a1=mysql_query("select *from m_alkesmt where id='$idtr'");
	while ($a=mysql_fetch_array($a1))
	{
	$unit=$a['unit'];
	$no=$a['no'];
	$tgl=$a['tgl'];
	$beri=$a['beri'];
	$beritgl=$a['beritgl'];
	$trm=$a['trm'];
	$trmtgl=$a['trmtgl'];
	}
	echo"
	<tr>
	<td>$unit</td>
	<td>$no</td>
	<td>$tgl</td>
	</tr>
	";


	echo"
	</table>

	<table class='adminlist'>
	<tr>
	<td>Jenis/ Nama <br> Obat/ Alkes</td>
	<td>Permintaan</td>


	<td>Keterangan</td>
	</tr>
	<form method='post' action='index.php?task=palkes_mt'>
	<tr>
	<td>


	<select name='idobt'>
	";
	$d1=mysql_query("select *from m_obt order by nama ASC");
	while ($d=mysql_fetch_array($d1))
		{
		$n=$d[nama];
		$nama=strtoupper($n);
		echo"
		<option value='$a[nama]'>$nama</option>
		";
		}
	echo"
	</select>

	</td>
	<td><input type='text' name='jmlmt'></td>
	<td><input type='text' name='ket'></td>
	</tr>

	<tr>
	<td colspan='6' align='center'>
	<input type='hidden' name='idtr' value='$idtr'>
	<input type='submit' value='[ CATAT ]'>
	</form>
	</td>
	</tr>
	</table><br>

	<table class='adminlist'>
	<tr>
	<td>Jenis/ Nama <br> Obat/ Alkes</td>
	<td>Permintaan</td>
	<td>Realisasi</td>
	<td>Satuan</td>
	<td>Jml Harga</td>
	<td>Keterangan</td>
	<td>Status</td>
	<td>Hapus</td>
	</tr>
	";
	$b1=mysql_query("select *from m_alkesmt2 where idtr='$idtr'");
	while ($b=mysql_fetch_array($b1))
	{
	echo"
	<tr>
	<td><a href='index.php?task=ealkes_mt&id=$b[id]&idtr=$idtr'>
	";
	$idobt=$b[idobt];
	$c1=mysql_query("select *from m_obt where nama='$idobt'");
	while($c=mysql_fetch_array($c1))
		{
		$nama=$c[nama];
		}
	echo"$nama</a></td>
	<td>$b[jmlmt]</td>
	<td>$b[jmlreal]</td>
	<td>$b[hgst]</td>
	<td>$b[hgjml]</td>
	<td>$b[ket]</td>
	<td>$b[status]</td>
	<td><a href='index.php?task=dalkes_mt&id=$b[id]&db=alkesmt2&alm=alkes_mt&idtr=$idtr'>hapus</a></td>
	</tr>
	";
	}

	echo"
	</table>
	<br><br>
	<table class='adminlist'>
	<tr>
	<td width='50%' align='center'>
	Diberikan Oleh:
	</td>
	<td width='50%' align='center'>
	Diterima Oleh:
	</td>
	</tr>

	<tr>
	<td width='50%' align='center'>
	$beri
	<br>
	Tanggal: $beritgl
	</td>
	<td width='50%' align='center'>
	$trm
	<br>
	Tanggal: $trmtgl
	</td>
	</tr>
	</table>
	";
	}

function dalkes_mt()
	{
	$idtr=$_GET['idtr'];
	$id=$_GET['id'];
	$alm=$_GET['alm'];
	$db=$_GET['db'];
	$a=mysql_query("delete from m_$db where id='$id'");
	if($a){header ("location: index.php?task=$alm&idtr=$idtr&pesan=Data Sudah Dihapus");}
	else
		{echo"error";}
	}

function palkes_mt()
	{
	$idtr=$_POST['idtr'];
	$idobt=$_POST['idobt'];
	$jmlmt=$_POST['jmlmt'];
	//$jmlreal=$_POST['jmlreal'];
	//$hgst=$_POST['hgst'];
	//$hgjml=$_POST['hgjml'];
	$ket=$_POST['ket'];

	$b1=mysql_query("select *from m_obt where nama='$idobt'");
	while($b=mysql_fetch_array($b1))
		{$nama=$b[nama];
		$hgjual=$b[hgjual];
		}
	$hgjml=$hgjual*$jmlmt;
	$a=mysql_query("insert into m_alkesmt2 values ('', '$idtr', '$idobt', '$jmlmt', '', '$hgjual', '$hgjml', '$ket', 'Belum')");
	if ($a)
	{header ("Location: index.php?task=alkes_mt&idtr=$idtr&pesan=Data Sudah Masuk");}
	else
		{
	echo"ror";}
	}

function ealkes_mt()
	{
	$id=$_GET['id'];
	$idtr=$_GET['idtr'];
	echo"
	<table class='adminlist'>
	<tr>
	<td>Jenis/ Nama <br> Obat/ Alkes</td>
	<td>Permintaan</td>
	<td>Realisasi</td>
	<td>Satuan</td>
	<td>Jml Harga</td>
	<td>Keterangan</td>
	</tr>
	";
	$b1=mysql_query("select *from m_alkesmt2 where id='$id'");
	while ($b=mysql_fetch_array($b1))
	{
	//$idtr=$b['idtr'];
	$idobt=$b['idobt'];
	$jmlmt=$b['jmlmt'];
	$jmlreal=$b['jmlreal'];
	$hgst=$b['hgst'];
	$hgjml=$b['hgjml'];
	$ket=$b['ket'];
	}
	$a1=mysql_query("select *from m_obt where nama='$idobt'");
	while($a=mysql_fetch_array($a1))
		{$nama=$a[nama];
		$hgjual=$a[hgjual];
		}
	echo"
	<form method='post' action='index.php?task=ealkes_mt2'>
	<tr>
	<td>$nama</td>
	<td><input type='text' name='jmlmt' value='$jmlmt'></td>
	<td>$jmlreal</td>
	<td>$hgst</td>
	<td>$hgjml</td>
	<td><input type='text' name='ket' value='$ket'></td>
	</tr>

	<tr>
	<td colspan='6' align='center'>
	<input type='hidden' name='id' value='$id'>
	<input type='hidden' name='idobt' value='$idobt'>
	<input type='hidden' name='idtr' value='$idtr'>
	<input type='submit' value='[ GANTI ]'>
	</form>
	</td>
	</tr>
	</table>
	";
	}



function ealkes_mt2()
	{
	$id=$_POST['id'];
	$idobt=$_POST['idobt'];
	$idtr=$_POST['idtr'];
	//$nm=$_POST['nm'];
	$jmlmt=$_POST['jmlmt'];
	//$jmlreal=$_POST['jmlreal'];
	//$hgst=$_POST['hgst'];
	//$hgjml=$_POST['hgjml'];
	$ket=$_POST['ket'];

	$b1=mysql_query("select *from m_obt where nama='$idobt'");
	while($b=mysql_fetch_array($b1))
		{$nama=$b[nama];
		$hgjual=$b[hgjual];
		}
	$hgjml=$hgjual*$jmlmt;
	$a=mysql_query("update m_alkesmt2 set jmlmt='$jmlmt', hgst='$hgjual', hgjml='$hgjml', ket='$ket' where id='$id'");
	if ($a)
	{header ("Location: index.php?task=alkes_mt&idtr=$idtr&pesan=Data Sudah Diganti");}
	else
		{
	echo"ror";}
	}

function delalkes()
	{
	$id=$_GET['id'];
	$ada = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_alkesmt2 where idtr='$id'"),0);
	if($ada=='0')
		{
		$a=mysql_query("delete from m_alkesmt where id='$id'");
		if($a){header ("location: index.php?task=alkesmt&pesan=Data Sudah Dihapus");}
		else{echo"error";}
		}
	else
		{
		$b=mysql_query("delete from m_alkesmt2 where idtr='$id'");
		$a=mysql_query("delete from m_alkesmt where id='$id'");
		if($a and $b){header ("location: index.php?task=alkesmt&pesan=Data-data Sudah Dihapus");}
		else{echo"error";}
		}
	}

function alkespk()
	{
	$rg=$_GET['rg'];

	if($rg=='Kamar Bersalin')
		{
	echo"
	<br>
	<h1>PEMAKAIAN OBAT/ ALKES
	<br>
	$rg
	</h1>
	<br>
	<form method='post' action='index.php?task=alkes_pk'>
	<table class='adminlist'>
	<tr>
	<td>
	Pencarian Nama Pasien :
	</td>
	<td rowspan='2'>
	<input type='hidden' name='rg' value='$rg'>
	<input type='submit' value='CARI'>
	</td>
	</tr>

	<tr>
	<td width='30%'>

	<select name='idpas'>
	";
	$a1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status like '%Normal%' order by nama ASC");
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
	</td>

	</tr>
	</table>
	</form>
	";
		}

	elseif($rg='Kamar Operasi')
	{
	echo"
	<br>
	<h1>PEMAKAIAN OBAT/ ALKES
	<br>
	$rg
	</h1>
	<br>
	<form method='post' action='index.php?task=alkes_pk'>
	<table class='adminlist'>
	<tr>
	<td>
	Pencarian Nama Pasien :
	</td>
	<td rowspan='2'>
	<input type='hidden' name='rg' value='$rg'>
	<input type='submit' value='CARI'>
	</td>
	</tr>

	<tr>
	<td width='30%'>
	<select name='idpas'>
	";
	$b1=mysql_query("select *from m_pasien, m_absen where m_pasien.idpas=m_absen.idpas and m_absen.status like '%Operasi%'  order by nama ASC");
	while ($b=mysql_fetch_array($b1))
		{
		$m=$b[nama];
		$namab=strtoupper($m);
		echo"
		<option value='$a[idpas]'>$namab - $b[idpas]</option>
		";
		}
	echo"
	</select>

	";

		echo"
	</td>

	</tr>
	</table>
	</form>
	";
	}

	}

function alkes_pk()
	{
	$idpas=$_POST['idpas'];
	$rg=$_POST['rg'];
	$tgl=DATE('Y-m-d');
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
		$c1=mysql_query("select *from m_konfrg where id='$idrg'");
	while($c=mysql_fetch_array($c1))
		{
		$nm_rg=$c[nm_rg];
		$kls_rg=$c[kls_rg];
		}
	echo"
	<h1>PEMAKAIAN OBAT/ ALKES
	<br>$rg
	</h1>
	<br>
	<form method='post' action='index.php?task=palkes_pk'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nama</td>
	<td width='40%'>$nama</td>
	<td width='20%'>Dokter</td>
	<td width='40%'><input type='text' name='dok'></td>
	</tr>
	<tr>
	<td width='20%'>Alamat</td>
	<td width='40%'>$alm, $lurah, $kec - $kota</td>
	<td width='20%'>Ruang/ Kls</td>
	<td width='40%'>$nm_rg/ $kls_rg</td>
	</tr>
	</table>
	<table class='adminlist'>
	<tr>
	<td>Tgl</td>
	<td>Jenis Obat/ Alkes</td>
	<td>Jml</td>

	</tr>

	<tr>
	<td><input type='text' name='tgl' value='$tgl'></td>
	<td>


	<select name='idobt'>
	";
	$f1=mysql_query("select *from m_obt order by nama ASC");
	while ($f=mysql_fetch_array($f1))
		{
		$n=$f[nama];
		$nama=strtoupper($n);
		echo"
		<option value='$f[nama]'>$nama</option>
		";
		}
	echo"
	</select>

	</td>
	<td><input type='text' name='jml'></td>

	</tr>

	<tr>
	<td></td>
	<td></td>

	<td align='center'>
	Kasie: <input type='text' name='kasie'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='hidden' name='rg' value='$rg'>
	<input type='submit' value='[ SIMPAN ]'>
	</td>
	</tr>
	</table>
	</form>

	<table class='adminlist'>
	<tr>
	<td colspan='6'>
	DATA PEMAKAIAN OBAT
	</td>
	</tr>
	<tr>
	<td>Tgl</td>
	<td>Jenis Obat/ Alkes</td>
	<td>Jml</td>
	<td>Rp</td>
	<td>Kasie</td>
	<td>Hapus</td>
	</tr>
	";
	$d1=mysql_query("select *from m_alkespk where idpas='$idpas' and rg='$rg'");
	while($d=mysql_fetch_array($d1))
	{
	echo"
	<tr>
	<td><a href='index.php?task=ealkes_pk&idpas=$idpas&rg=$rg&id=$d[id]'>$d[tgl]</td>
	<td>";
	$idobt=$d[jns];
	$e1=mysql_query("select *from m_obt where nama='$idobt'");
	while($e=mysql_fetch_array($e1))
		{$namaobt=$e[nama];
		$hgjual=$e[hgjual];
		}
	echo"$namaobt
	</td>
	<td>$d[jml]</td>
	<td>$d[rp]</td>
	<td>$d[kasie]</td>
	<td><a href='index.php?task=dalkes_pk&id=$d[id]&db=alkespk&alm=alkes_pk&idpas=$idpas&rg=$rg'>hapus</a></td>
	</tr>
	";
	}
	echo"
	</table>
	";
	}

function palkes_pk()
	{
	$idpas=$_POST['idpas'];
	$tgl=$_POST['tgl'];
	$dok=$_POST['dok'];
	$idobt=$_POST['idobt'];
	$jml=$_POST['jml'];
	//$rp=$_POST['rp'];
	$kasie=$_POST['kasie'];
	$rg=$_POST['rg'];

	$b1=mysql_query("select *from m_obt where nama='$idobt'");
	while($b=mysql_fetch_array($b1))
		{$nama=$b[nama];
		$hgjual=$b[hgjual];
		}
	$hgjml=$hgjual*$jml;
	$a=mysql_query("insert into m_alkespk values ('', '$idpas', '$tgl', '$dok', '$idobt', '$jml', '$hgjml', '$kasie', '$rg')");
	if($a)
		{header ("location: index.php?task=mesalkes_pk&idpas=$idpas&rg=$rg&pesan=Data Sudah Masuk");}
	else{echo"eror";}

	}

function mesalkes_pk()
	{
	$pesan=$_GET['pesan'];
	$idpas=$_GET['idpas'];
	$rg=$_GET['rg'];

	echo"
	<form method='post' action='index.php?task=alkes_pk'>
	$pesan,
	<input type='hidden' name='rg' value='$rg'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='submit' value='[ KEMBALI ]'>
	</form>
	";
	}

function ealkes_pk()
	{
	$idpas=$_GET['idpas'];
	$rg=$_GET['rg'];
	$id=$_GET['id'];
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
		$c1=mysql_query("select *from m_konfrg where id='$idrg'");
	while($c=mysql_fetch_array($c1))
		{
		$nm_rg=$c[nm_rg];
		$kls_rg=$c[kls_rg];
		}
	$d1=mysql_query("select *from m_alkespk where id='$id'");
	while($d=mysql_fetch_array($d1))
		{
		$tgl=$d['tgl'];
		$dok=$d['dok'];
		$idobt=$d['jns'];
		$jml=$d['jml'];
		$rp=$d['rp'];
		$kasie=$d['kasie'];
		//$rg=$d['rg'];
		}
	$e1=myql_query("select *from m_obt where nama='$idobt'");
	while($e=mysql_fetch_array($e1))
		{$namaobt=$e[nama];
		$hgjual=$e[hgjual];
		}

	echo"
	<form method='post' action='index.php?task=ealkes_pk2'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nama</td>
	<td width='40%'>$nama</td>
	<td width='20%'>Dokter</td>
	<td width='40%'><input type='text' name='dok' value='$dok'></td>
	</tr>
	<tr>
	<td width='20%'>Alamat</td>
	<td width='40%'>$alm, $lurah, $kec - $kota</td>
	<td width='20%'>Ruang/ Kls</td>
	<td width='40%'>$nm_rg/ $kls_rg</td>
	</tr>
	</table>
	<table class='adminlist'>
	<tr>
	<td>Tgl</td>
	<td>Jenis Obat/ Alkes</td>
	<td>Jml</td>
	<td>Rp</td>
	</tr>

	<tr>
	<td><input type='text' name='tgl' value='$tgl'></td>
	<td>$namaobt</td>
	<td><input type='text' name='jml' value='$jml'></td>
	<td>$rp</td>
	</tr>

	<tr>
	<td></td>
	<td></td>
	<td></td>
	<td align='center'>
	Kasie: <input type='text' name='kasie' value='$kasie'>
	<input type='hidden' name='idpas' value='$idpas'>
	<input type='hidden' name='id' value='$id'>
	<input type='hidden' name='idobt' value='$idobt'>
	<input type='hidden' name='rg' value='$rg'>
	<input type='submit' value='[ GANTI ]'>
	</td>
	</tr>
	</table>
	</form>

	";
	}

function ealkes_pk2()
	{
	$idpas=$_POST['idpas'];
	$id=$_POST['id'];
	$tgl=$_POST['tgl'];
	$dok=$_POST['dok'];
	$idobt=$_POST['idobt'];
	$jml=$_POST['jml'];
	//$rp=$_POST['rp'];
	$kasie=$_POST['kasie'];
	$rg=$_POST['rg'];
	$e1=myql_query("select *from m_obt where nama='$idobt'");
	while($e=mysql_fetch_array($e1))
		{$namaobt=$e[nama];
		$hgjual=$e[hgjual];
		}
		$hgjml=$hgjual*$jmlmt;
	$a=mysql_query("update m_alkespk set tgl='$tgl', dok='$dok', jml='$jml', rp='$hgjml', kasie='$kasie', rg='$rg' where id='$id'");
	if($a)
		{header ("location: index.php?task=mesalkes_pk&idpas=$idpas&rg=$rg&pesan=Data Sudah Diganti");}
	else{echo"eror";}
	}

function dalkes_pk()
	{
	$idpas=$_GET['idpas'];
	$rg=$_GET['rg'];
	$id=$_GET['id'];
	$db=$_GET['db'];
	$alm=$_GET['alm'];
	$a=mysql_query("delete from m_$db where id='$id'");
	if($a)
		{header("location: index.php?task=mesalkes_pk&idpas=$idpas&rg=$rg&pesan=Data Sudah Dihapus");}
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
	<td colspan='2' align='center'><input type='submit' value='[ SIMPAN ]'></td>
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
	<td colspan='2' align='center'><input type='submit' value='[ GANTI ]'></td>
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
	<td>$b[status]";

	echo"
	</td>
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
	<input type='hidden' name='dari' value='Kamar Bersalin'>
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
	$b1=mysql_query("select *from m_obtmutasi where dari='Kamar Bersalin' order by tanggal DESC");
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