<?php


class m

{

function del()
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
	Selamat Datang di HALAMAN KAMAR OBAT RSIA MARDI WALOEJA MALANG
	<br>
	<br>
	";

	}

function menu_hargaobat()
	{
	?>
	<center><h1>Harga Obat</h1></center>
	<br><br>
	<table width="100%" border="0" cellpadding="10" cellspacing="10" class="adminlist">
	<tr>
	<td width="50%" align="center" valign="center">
	<a href="index.php?task=konfobt"><img width="100px" src="../touch/price.png" onmouseover=" this.src='../touch/price_b.png'" onmouseout="this.src='../touch/price.png'">
	<br><b>Persentase Margin</b>
	</a>
	</td>

	<td align="center" valign="center">
	<a href="index.php?task=obt"><img width="100px" src="../touch/medicine-plus.png" onmouseover=" this.src='../touch/medicine-plus_b.png'" onmouseout="this.src='../touch/medicine-plus.png'">
	<br><b>Data Obat Baru</b></a>
	</td>

	</tr>
	</table>
	<?php
	}

function menu_dataobat()
	{
	?>
	<center><h1>Data Obat</h1></center>
	<br><br>
	<table width="100%" border="0" cellpadding="10" cellspacing="10" class="adminlist">
	<tr>
	<td width="25%" align="center" valign="center">
	<a href="index.php?task=supplier"><img width="100px" src="../touch/medicine-supply.png" onmouseover=" this.src='../touch/medicine-supply_b.png'" onmouseout="this.src='../touch/medicine-supply.png'">
	<br><b>Supplier</b>
	</a>
	</td>

	<td align="center" valign="center" width="25%">
	<a href="index.php?task=beli"><img width="100px" src="../touch/medicine-buy.png" onmouseover=" this.src='../touch/medicine-buy_b.png'" onmouseout="this.src='../touch/medicine-buy.png'">
	<br><b>Pembelian</b></a>
	</td>

	<td width="25%" align="center" valign="center">
	<a href="index.php?task=alkesmt"><img width="100px" src="../touch/medicine-minta.png" onmouseover=" this.src='../touch/medicine-minta_b.png'" onmouseout="this.src='../touch/medicine-minta.png'">
	<br><b>Permintaan Obat</b>
	</a>
	</td>

	<td align="center" valign="center" width="25%">
	<a href="index.php?task=hlgobt"><img width="100px" src="../touch/medicine-expire.png" onmouseover=" this.src='../touch/medicine-expire_b.png'" onmouseout="this.src='../touch/medicine-expire.png'">
	<br><b>Obat Hilang/ Rusak</b></a>
	</td>

	</tr>
	</table>

	<table width="100%" border="0" cellpadding="10" cellspacing="10" class="adminlist">
	<tr>
	<td width="33%" align="center" valign="center">
	<a href="index.php?task=mutasi"><img width="100px" src="../touch/medicine-mutasi.png" onmouseover=" this.src='../touch/medicine-mutasi_b.png'" onmouseout="this.src='../touch/medicine-mutasi.png'">
	<br><b>Mutasi Obat Dari Bagian</b>
	</a>
	</td>

	<td align="center" valign="center" width="33%">
	<a href="index.php?task=stok"><img width="100px" src="../touch/medicine-stock.png" onmouseover=" this.src='../touch/medicine-stock_b.png'" onmouseout="this.src='../touch/medicine-stock.png'">
	<br><b>Stok Obat</b></a>
	</td>

	<td width="25%" align="center" valign="center">
	<a href="index.php?task=stok2"><img width="100px" src="../touch/medicine-stockcat.png" onmouseover=" this.src='../touch/medicine-stockcat_b.png'" onmouseout="this.src='../touch/medicine-stockcat.png'">
	<br><b>Stok Per Kategori</b>
	</a>
	</td>

	</tr>
	</table>

	<?php
	}

function menu_apotik()
	{ ?>
	<center><h1>Apotik</h1></center>
	<br><br>
	<table width="100%" border="0" cellpadding="10" cellspacing="10" class="adminlist">
	<tr>
	<td width="33%" align="center" valign="center">
	<a href="index.php?task=ap_rsp"><img width="100px" src="../touch/receipt.png" onmouseover=" this.src='../touch/receipt_b.png'" onmouseout="this.src='../touch/receipt.png'">
	<br><b>Penjualan Resep</b>
	</a>
	</td>

	<td align="center" valign="center" width="33%">
	<a href="index.php?task=ap_um"><img width="100px" src="../touch/receipt-public.png" onmouseover=" this.src='../touch/receipt-public_b.png'" onmouseout="this.src='../touch/receipt-public.png'">
	<br><b>Penjualan Obat Umum</b></a>
	</td>

	<td width="25%" align="center" valign="center">
	<a href="index.php?task=ap_kar"><img width="100px" src="../touch/receipt-special.png" onmouseover=" this.src='../touch/receipt-special_b.png'" onmouseout="this.src='../touch/receipt-special.png'">
	<br><b>Penjualan Obat Karyawan</b>
	</a>
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



function mes()
	{
	$id=$_GET['id'];
	//$status=$_GET['status'];
	$alm=$_GET['alm'];
	$pes=$_GET['pes'];

	echo"
	<form method='post' action='index.php?task=$alm'>
	<br><br>
	<b>$pes</b>,
	<input type='hidden' name='id' value='$id'>

	<input type='submit' value='KEMBALI'>
	</form>
	";

	}

function konfobt()
	{
	$pesan=$_GET['pesan'];
	$a1=mysql_query("select *from m_konfobt where id='1'");
	while($a=mysql_fetch_array($a1))
	{
	$per=$a[per];
	}
	echo"<br>
	<h1>
	PERSENTASE MARGIN
	</h1>
	<u>$pesan</u>
	<br>
	<br>
	<form method='post' action='index.php?task=pkonfobt'>
	<table class='adminlist'>

	<tr>
	<td width='50%'>
	Persentase harga obat
	</td>
	<td>:
	<input type='text' name='per' value='$per'>
	</td>
	</tr>
	";
	/*
	<tr>
	<td width='50%'>
	Kategori obat
	</td>
	<td>:
	<select name='kategori'>
	<option value='Obat'>Obat</option>
	<option value='Alkes'>Alkes</option>
	<option value='BKKBN'>BKKBN</option>
	<option value='Susu'>Susu</option>
	</select>
	</td>
	</tr>*/
	echo"

	<tr>
	<td colspan='2' align='center'>
	";
	$b1=mysql_query("select *from m_obt order by id ASC");
	while($b=mysql_fetch_array($b1))
		{
		echo"<input type='hidden' name='obat[]' value='$b[id]'>
			<input type='hidden' name='hgjual[]' value='$b[hgjual]'>
			<input type='hidden' name='hgbeli[]' value='$b[hgbeli]'>
		";
		}
	echo"%
	<input type='hidden' name='id' value='1'>
	<input type='submit' value='[ SIMPAN ]'>
	</td>
	</tr>
	</table>
	</form>
	";
	}

function pkonfobt()
	{
	$id=$_POST['id'];
	$per=$_POST['per'];
	$pro=$per/100;
	$obat=$_POST['obat'];
	$hgjual=$_POST['hgjual'];
	$hgbeli=$_POST['hgbeli'];
	//$ada = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_obt where kategori='$kategori'"),0);

	$ada = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_obt "),0);


	for($i=0;$i<=$ada;$i++)
		{
	$harga[$i]=($hgbeli[$i]*$pro)+$hgbeli[$i];
	$b=mysql_query("UPDATE m_obt set hgjual='$harga[$i]', hgjual1='$harga[$i]' where id='$obat[$i]'");
		}

	$a=mysql_query("update m_konfobt set per='$per' where id='$id'");
	if($a and $b)
		{header("location: index.php?task=konfobt&pesan=Data Sudah Diganti");}
	else
		{
		echo"AUTHORIZED AREA";
		}
	}

function obt()
	{
	$a1=mysql_query("select *from m_konfobt where id='1'");
	while($a=mysql_fetch_array($a1))
	{
	$per=$a[per];
	}
	$pesan=$_GET['pesan'];
	echo"
	<h1>DATA OBAT BARU</h1>
	<br>
	<u>$pesan</u>
	<br><br>
	<form method='post' action='index.php?task=pobt'>
	<table class='adminlist'>
	<tr>
	<td>Nama Obat</td>
	<td>: <input type='text' name='nama'></td>
	</tr>
	<tr>
	<td>Harga Beli</td>
	<td>: <input type='text' name='hgbeli'></td>
	</tr>
	<tr>
	<td>Satuan</td>
	<td>:
	<select name='satuan'>

	<option value='Kapsul'>Kapsul</option>
	<option value='Tablet'>Tablet</option>
	<option value='Fles'>Fles</option>
	<option value='Ampul'>Ampul</option>
	<option value='Vial'>Vial</option>
	<option value='Tube'>Tube</option>
	<option value='Supp'>Supp</option>
	<option value='Gram'>Gram</option>
	<option value='CC'>CC</option>
	<option value='Tere'>Tere</option>
	<option value='Pcs'>Pcs</option>
	<option value='Sachet'>Sachet</option>
	<option value='Pak'>Pak</option>
	</select>
	</td>
	</tr>
	<tr>
	<td>Kategori Obat</td>
	<td>:
	<select name='kategori'>
	<option value='Obat'>Obat</option>
	<option value='Alkes'>Alkes</option>
	<option value='Susu'>Susu</option>
	<option value='BKKBN'>BKKBN</option>
	</select>
	</td>
	</tr>

	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='per' value='$per'>
	<input type='submit' value=' [ SIMPAN ]'>
	</td>
	</tr>
	</table>
	</form>
	<br>
	<br>
	";
	if(!isset($_GET['page'])){
		$page = 1;
	} else {
		$page = $_GET['page'];
	}

	$max_results=50;
	$from=(($page*$max_results)-$max_results);


	echo"
	<table class='adminlist'>
	<tr>
	<td>Nama</td>
	<td>Harga Beli</td>
	<td>Harga Jual (Rawat Jalan)</td>
	<td>Harga Jual 1 (Rawat Inap)</td>
	<td>Harga Jual 2 (Karyawan)</td>
	<td>Satuan</td>
	<td>Hapus</td>
	</tr>";
	$b1=mysql_query("select *from m_obt order by nama ASC Limit $from, $max_results");
	while($b=mysql_fetch_array($b1))
	{
	echo"
	<tr>
	<td><a href='index.php?task=eobt&obt=$b[nama]'>$b[nama]</a></td>
	<td>$b[hgbeli]</td>
	<td>$b[hgjual]</td>
	<td>$b[hgjual1]</td>
	<td>$b[hgjual2]</td>
	<td>$b[satuan]</td>
	<td><a href='index.php?task=del&id=$b[id]&db=obt&alm=obt'>hapus</a></td>
	</tr>
	";
	}
	echo"
	</table>
	";
	$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_obt"),0);

	$total_pages=ceil($total_results / $max_results);

	echo "<center>[Page]<br>";


	if($page > 1){
		$prev = ($page - 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=obt&page=$prev\"><< Prev </a>";
	}

	for($i = 1; $i <= $total_pages; $i++){
		if(($page) == $i){
			echo "$i ";
			} else {
				echo "<a href=\"".$_SERVER['PHP_SELF']."?task=obt&page=$i\">[$i]</a> ";
		}
	}


	if($page < $total_pages){
		$next = ($page + 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=obt&page=$next\">Next >></a>";
	} echo"
		<br>
	<br>Terdapat $total_results Obat
	<br>
	</center>

	";
	}


function eobt()
	{
	$obt=$_GET['obt'];
	$a1=mysql_query("select *from m_obt where nama='$obt'");
	while($a=mysql_fetch_array($a1))
		{
		$idobt=$a['id'];
		$nama=$a['nama'];
		$hgbeli=$a['hgbeli'];
		$hgjual=$a['hgjual'];
		$hgjual1=$a['hgjual1'];
		$hgjual2=$a['hgjual2'];
		$kategori=$a['kategori'];
		$satuan=$a['satuan'];
		}
	$hgdiskon=$per/100*$hgbeli+$hgbeli;
	echo"
	<h1>EDIT HARGA JUAL</h1><br>
	<form method='post' action='index.php?task=eobt2'>
	<table class='adminlist'>
	<tr>
	<td>Nama Obat</td>
	<td>: <input type='text' name='nama' value='$nama'></td>
	</tr>
	<tr>
	<td>Harga Beli</td>
	<td>: <input type='text' name='hgbeli' value='$hgbeli'></td>
	</tr>
	<tr>
	<td>Profit/ Margin</td>
	<td>: <b>$hgdiskon</b></td>
	</tr>
	<tr>
	<td>Harga Jual (Rawat Jalan)</td>
	<td>: <input type='text' name='hgjual' value='$hgjual'></td>
	</tr>

	<tr>
	<td>Harga Jual 1 (Rawat Inap)</td>
	<td>: <input type='text' name='hgjual1' value='$hgjual1'></td>
	</tr>

	<tr>
	<td>Harga Jual 2 (Karyawan)</td>
	<td>: <input type='text' name='hgjual2' value='$hgjual2'></td>
	</tr>

	<tr>
	<td>Kategori</td>
	<td>:
	<select name='kategori'>
	<option value='$kategori'>$kategori</option>
	<option value='Obat'>Obat</option>
	<option value='Alkes'>Alkes</option>
	<option value='Susu'>Susu</option>
	<option value='BKKBN'>BKKBN</option>
	</select>
	</td>
	</tr>

	<tr>
	<td>Satuan</td>
	<td>
	<select name='satuan'>

	<option value='Kapsul'>Kapsul</option>
	<option value='Tablet'>Tablet</option>
	<option value='Fles'>Fles</option>
	<option value='Ampul'>Ampul</option>
	<option value='Vial'>Vial</option>
	<option value='Tube'>Tube</option>
	<option value='Supp'>Supp</option>
	<option value='Gram'>Gram</option>
	<option value='CC'>CC</option>
	<option value='Tere'>Tere</option>
	<option value='Pcs'>Pcs</option>
	<option value='Sachet'>Sachet</option>
	<option value='Pak'>Pak</option>
	</select>
	</td>
	</tr>

	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='id' value='$idobt'>
	<input type='submit' value=' [ SIMPAN ]'>
	</td>
	</tr>
	</table>
	</form>";
	}

function eobt2()
	{
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$kategori=$_POST['kategori'];
	$hgbeli=$_POST['hgbeli'];
	$satuan=$_POST['satuan'];
	$hgjual=$_POST['hgjual'];
	$hgjual1=$_POST['hgjual1'];
	$hgjual2=$_POST['hgjual2'];

	$a=mysql_query("update m_obt set nama='$nama', hgbeli='$hgbeli', hgjual='$hgjual', hgjual1='$hgjual1', hgjual2='$hgjual2', satuan='$satuan', kategori='$kategori' where id='$id'");
	if($a)
		{
		header("location: index.php?task=mes&pes=Data Sudah Diganti&id=$id&alm=obt");
		}
	else{echo"error";}
	}

function pobt()
	{
	$nama=$_POST['nama'];
	$hgbeli=$_POST['hgbeli'];
	$per=$_POST['per'];
	$satuan=$_POST['satuan'];
	$kategori=$_POST['kategori'];
	$hgjual=$per/100*$hgbeli+$hgbeli;

	$z= mysql_result(mysql_query("SELECT MAX(id)FROM m_obtstok"),0);
	$zb=$z+1;
	$zc=$zb+1;
	$zd=$zc+1;
	$ze=$zd+1;
	$zf=$ze+1;
	$zg=$zf+1;

	$ada = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_obtstok where obat='$obat'"),0);
	if($ada=='0')
		{
	////////////////////////////////////////////////////////////////////////
	$a=mysql_query("insert into m_obt values ('', '$nama', '$hgbeli', '$hgjual', '$hgjual', '$hgjual', '$satuan', '$kategori')");
	$b=mysql_query("insert into m_obtstok values ('$zb', '$obat', '0', 'Kamar Bersalin')");
	$c=mysql_query("insert into m_obtstok values ('$zc', '$obat', '0', 'Kamar Obat')");
	$d=mysql_query("insert into m_obtstok values ('$zd', '$obat', '0', 'Kamar Bayi')");
	$e=mysql_query("insert into m_obtstok values ('$ze', '$obat', '0', 'Kamar Anak')");
	$f=mysql_query("insert into m_obtstok values ('$zf', '$obat', '0', 'Apotik')");
	$g=mysql_query("insert into m_obtstok values ('$zg', '$obat', '0', 'Poli')");

	if($a and $b and $c and $d and $e and $f and $g)
		{header("location: index.php?task=obt&pesan=Data Sudah Masuk");}
	else
		{echo"ror";}
		}
	////////
	else
		{
		header("location: index.php?task=obt&pesan=Obat Sudah Ada");
		}
	}


function cobt()
	{
	echo"
	<center><b>EDIT HARGA JUAL</b></center>
	<br><br>
	<u>$pesan</u>
	<br><br>
	<form method='post' action='index.php?task=c_obt'>
	<table class='adminlist'>
	<tr>
	<td>
	Nama Obat :
	</td>

	</tr>

	<tr>
	<td width='50%'>

	<select name='id'>
	";
	$b1=mysql_query("select *from m_obt order by nama ASC");
	while($b=mysql_fetch_array($b1))
		{
		echo"<option value='$b[nama]'>$b[nama], Rp. $b[hgjual]</option>";
		}
	echo"
	</select>

	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	}

function c_obt()
	{
	$id=$_POST['id'];
	$b1=mysql_query("select *from m_konfobt where id='1'");
	while($b=mysql_fetch_array($b1))
		{
		$per=$b[per];
		}
	$a1=mysql_query("select *from m_obt where nama='$id'");
	while($a=mysql_fetch_array($a1))
		{
		$idobt=$a['id'];
		$nama=$a['nama'];
		$hgbeli=$a['hgbeli'];
		$hgjual=$a['hgjual'];
		$hgjual1=$a['hgjual1'];
		$hgjual2=$a['hgjual2'];

		$satuan=$a['satuan'];
		}
	$hgdiskon=$per/100*$hgbeli+$hgbeli;
	echo"
	<h1>EDIT HARGA JUAL</h1><br>
	<form method='post' action='index.php?task=ec_obt'>
	<table class='adminlist'>
	<tr>
	<td>Nama Obat</td>
	<td>: <b>$nama</b></td>
	</tr>
	<tr>
	<td>Harga Beli</td>
	<td>: <input type='text' name='hgbeli' value='$hgbeli'></td>
	</tr>
	<tr>
	<td>Profit/ Margin</td>
	<td>: <b>$hgdiskon</b></td>
	</tr>
	<tr>
	<td>Harga Jual (Rawat Jalan)</td>
	<td>: <input type='text' name='hgjual' value='$hgjual'></td>
	</tr>

	<tr>
	<td>Harga Jual 1 (Rawat Inap)</td>
	<td>: <input type='text' name='hgjual1' value='$hgjual1'></td>
	</tr>

	<tr>
	<td>Harga Jual 2 (Karyawan)</td>
	<td>: <input type='text' name='hgjual2' value='$hgjual2'></td>
	</tr>

	<tr>
	<td colspan='2' align='center'>
	<input type='hidden' name='id' value='$id'>
	<input type='submit' value=' [ SIMPAN ]'>
	</td>
	</tr>
	</table>
	</form>";

	}

function ec_obt()
	{
	$id=$_POST['id'];

	$hgjual=$_POST['hgjual'];
	$hgjual1=$_POST['hgjual1'];
	$hgjual2=$_POST['hgjual2'];
	$hgbeli=$_POST['hgbeli'];

	$a=mysql_query("update m_obt set hgbeli='$hgbeli', hgjual='$hgjual', hgjual1='$hgjual1', hgjual2='$hgjual2' where nama='$id'");
	if($a)
		{
		header("location: index.php?task=mes&pes=Data Sudah Diganti&id=$id&alm=c_obt");
		}
	else{echo"error";}
	}

function retobt()
	{
	$pesan=$_GET['pesan'];
	$skr=DATE('d-m-Y');
	echo"<br>
	<h1>Retur Obat</h1>
	<br>
	<u>$pesan</u>
	<br><br>
	<form method='post' action='index.php?task=pretobt'>
	<table class='adminlist'>
	<tr>
	<td width='30%'>Nama Obat</td>
	<td>:
	<select name='id'>
	";
	$b1=mysql_query("select *from m_obt order by nama ASC");
	while($b=mysql_fetch_array($b1))
		{
		echo"<option value='$b[nama]'>$b[nama], Rp. $b[hgjual]</option>";
		}
	echo"
	</select>
	</td>
	</tr>

	<tr>
	<td>Jml Retur</td>
	<td>: <input type='text' name='retur' size='40'></td>
	</tr>

	<tr>
	<td>Satuan</td>
	<td>:
	<select name='satuan'>
	<option value='$satuan'>$satuan</option>
	<option value='Kapsul'>Kapsul</option>
	<option value='Tablet'>Tablet</option>
	<option value='Fles'>Fles</option>
	<option value='Ampul'>Ampul</option>
	<option value='Vial'>Vial</option>
	<option value='Tube'>Tube</option>
	<option value='Supp'>Supp</option>
	<option value='Gram'>Gram</option>
	<option value='CC'>CC</option>
	<option value='Tere'>Tere</option>
	<option value='Pcs'>Pcs</option>
	<option value='Sachet'>Sachet</option>
	<option value='Pak'>Pak</option>
	</select>
	</td>
	</tr>



	<tr>
	<td>Tanggal</td>
	<td>: <input type='text' name='tglretur' size='40' value='$skr'></td>
	</tr>

	<tr>
	<td>Keterangan</td>
	<td>: <input type='text' name='ket' size='40' value='$skr'></td>
	</tr>

	<tr>
	<td colspan='2' align='center'>
	<input type='submit' value='[ SIMPAN ]'>
	</td>
	</tr>

	</table>
	</form>
	<br>
	<br>
	<table class='adminlist'>
	<tr>
	<td>Tgl</td>
	<td>Obat</td>
	<td>Jml Retur</td>
	<td>Satuan</td>
	<td>Jml Kembali</td>
	<td>Tgl Kembali</td>
	<td>Keterangan</td>
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



	$a1=mysql_query("select *from m_returobt order by id DESC limit $from, $max_results");
	while($a=mysql_fetch_array($a1))
	{
	echo"
	<tr>
	<td><a href='index.php?task=eretobt&id=$a[id]'>$a[tglretur]</a></td>
	<td>";
	//$obt=$a[idobt];
	$c1=mysql_query("select *from m_obt where nama='$a[idobt]'");
	while($c=mysql_fetch_array($c1))
	{$nmobt=$c[nama];}
	echo"$nmobt</td>
	<td>$a[retur]</td>
	<td>$a[satuan]</td>
	<td>$a[kembali]</td>
	<td>$a[tglkembali]</td>
	<td>$a[ket]</td>
	<td><a href='index.php?task=del&id=$c[id]&db=returobt&alm=retobt'>hapus</a></td>
	</tr>
	";
	}
	echo"
	</table>
	";
	$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_returobt"),0);

	$total_pages=ceil($total_results / $max_results);

	echo "<center>[Page]<br>";


	if($page > 1){
		$prev = ($page - 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=retobt&page=$prev\"><< Prev </a>";
	}

	for($i = 1; $i <= $total_pages; $i++){
		if(($page) == $i){
			echo "$i ";
			} else {
				echo "<a href=\"".$_SERVER['PHP_SELF']."?task=retobt&page=$i\">[$i]</a> ";
		}
	}


	if($page < $total_pages){
		$next = ($page + 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=retobt&page=$next\">Next >></a>";
	} echo"
		<br>
	<br>Terdapat $total_results Data Retur Obat
	<br>
	</center>

	";
	}

function pretobt()
	{
	$idobt=$_POST['id'];
	$retur=$_POST['retur'];
	$satuan=$_POST['satuan'];
	$tglretur=$_POST['tglretur'];
	$ket=$_POST['ket'];
	$a=mysql_query("insert into m_returobt values ('', '$idobt', '$retur', '', '$tglretur', '', '$satuan', '$ket')");
	if($a)
		{header ("location: index.php?task=retobt&pesan=Data Sudah Masuk");}
	else{echo"error";}
	}

function eretobt()
	{
	$id=$_GET['id'];
	$skr=date('d-m-Y');
	$a1=mysql_query("select *from m_returobt where id='$id'");
	while ($a=mysql_fetch_array($a1))
		{
		$idobt=$a[idobt];
		$retur=$a[retur];
		$tglretur=$a[tglretur];
		$kembali=$a[kembali];
		$tgkembali=$a[tglkembali];
		$satuan=$a[satuan];
		$ket=$a[ket];
		}
	$b1=mysql_query("select *from m_obt where nama='$idobt'");
	while($b=mysql_fetch_array($b1))
		{$nama=$b[nama];}
	echo"
	<form method='post' action='index.php?task=peretobt'>
	<table class='adminlist'>
	<tr>
	<td width='30%'>Nama Obat</td>
	<td>: <b>$nama</b>
	</td>
	</tr>

	<tr>
	<td>Jml Retur</td>
	<td>: <input type='text' name='retur' size='40' value='$retur'></td>
	</tr>

	<tr>
	<td>Tanggal</td>
	<td>: <input type='text' name='tglretur' size='40' value='$tglretur'></td>
	</tr>

	<tr>
	<td>Kembali</td>
	<td>: <input type='text' name='kembali' size='40' value='$kembali'></td>
	</tr>

	<tr>
	<td>Tanggal Kembali</td>
	<td>: <input type='text' name='tglkembali' size='40' value='$tglkembali'></td>
	</tr>

	<tr>
	<td>Satuan</td>
	<td>:
	<select name='satuan'>
	<option value='$satuan'>$satuan</option>
	<option value='Kapsul'>Kapsul</option>
	<option value='Tablet'>Tablet</option>
	<option value='Fles'>Fles</option>
	<option value='Ampul'>Ampul</option>
	<option value='Vial'>Vial</option>
	<option value='Tube'>Tube</option>
	<option value='Supp'>Supp</option>
	<option value='Gram'>Gram</option>
	<option value='CC'>CC</option>
	<option value='Tere'>Tere</option>
	<option value='Pcs'>Pcs</option>
	<option value='Sachet'>Sachet</option>
	<option value='Pak'>Pak</option>
	</select>
	</td>
	</tr>
	<tr>
	<td>Keterangan</td>
	<td>: <input type='text' name='ket' size='40' value='$ket'></td>
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

function peretobt()
	{
	$id=$_POST['id'];
	//$idobt=$_POST['id'];
	$retur=$_POST['retur'];
	$satuan=$_POST['satuan'];
	$tglretur=$_POST['tglretur'];
	$tglkembali=$_POST['tglkembali'];
	$kembali=$_POST['kembali'];
	$ket=$_POST['ket'];
	$a=mysql_query("update m_returobt set retur='$retur', kembali='$kembali', tglretur='$tglretur', tglkembali='$tglkembali', satuan='$satuan', '$ket' where id='$id'");
	if($a)
		{header ("location: index.php?task=retobt&pesan=Data Sudah Diganti");}
	else{echo"error";}
	}

function hlgobt()
	{
	$tgl=DATE('d-m-Y');
	echo"<br>
	<h1>DATA OBAT HILANG/ RUSAK</h1>
	<br>
	<u>$pesan</u>
	<br><br>
	<form method='post' action='index.php?task=phlgobt'>
	<table class='adminlist'>
	<tr>
	<td>Nama Obat</td>
	<td>Jumlah</td>
	<td>Keterangan</td>
	</tr>

	<tr>
	<td>
	<select name='id'>
	";
	$b1=mysql_query("select *from m_obt order by nama ASC");
	while($b=mysql_fetch_array($b1))
		{
		echo"<option value='$b[nama]'>$b[nama], Rp. $b[hgjual]</option>";
		}
	echo"
	</select>
	</td>
	<td>
	<input type='text' name='jml'>
	</td>
	<td>
	<input type='text' name='ket'>
	</td>
	</tr>

	<tr>
	<td align='center' colspan='2'>
	<input type='hidden' name='tgl' value='$tgl'>
	<input type='submit' value='[ SIMPAN ]'>
	</td>
	</tr>
	</table>
	</form>
	";
	///////////DATA
	echo"
	<br><br>
	<table class='adminlist'>
	<tr>
	<td>Tanggal</td>
	<td>Nama Obat</td>
	<td>Jumlah</td>
	<td>Keterangan</td>
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


	$a1=mysql_query("select *from m_obthlg order by id DESC ASC limit $from, $max_results");
	while($a=mysql_fetch_array($a1))
		{
		echo"
		<tr>
		<td><a href='index.php?task=ehlgobt&id=$a[id]'>$a[tgl]</a></td>
		<td>$a[idobt]</td>
		<td>$a[jml]</td>
		<td>$a[ket]</td>
		<td><a href='index.php?task=del&id=$a[id]&db=obthlg&alm=hlgobt'>hapus</td>
		</tr>
		";
		}
	echo"
	</table>
	";
	$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_obthlg"),0);

	$total_pages=ceil($total_results / $max_results);

	echo "<center>[Page]<br>";


	if($page > 1){
		$prev = ($page - 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=hlgobt&page=$prev\"><< Prev </a>";
	}

	for($i = 1; $i <= $total_pages; $i++){
		if(($page) == $i){
			echo "$i ";
			} else {
				echo "<a href=\"".$_SERVER['PHP_SELF']."?task=hlgobt&page=$i\">[$i]</a> ";
		}
	}


	if($page < $total_pages){
		$next = ($page + 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=hlgobt&page=$next\">Next >></a>";
	} echo"
		<br>
	<br>Terdapat $total_results Data Obat Hilang
	<br>
	</center>

	";
	}

function phlgobt()
	{
	$obt=$_POST['id'];
	$jml=$_POST['jml'];
	$tgl=$_POST['tgl'];
	$ket=$_POST['ket'];
	$a=mysql_query("insert into m_obthlg values ('', '$obt', '$jml', '$tgl', '$ket')");
	$b1=mysql_query("select *from m_obtstok where obat='$obat' and unit='Kamar Obat'");
	while($b=mysql_fetch_array($b1))
		{$stok=$b[stok];}
	$stokb=$stok-$jml;
	$c=mysql_query("update m_obtstok set stok='$stokb' where obat='$obat' and unit='Kamar Obat'");

	if($a and $c)
		{header("location: index.php?task=hlgobt&pesan=Data Sudah Masuk");}
	else
		{echo"error";}
	}

function ehlgobt()
	{
	$id=$_GET['id'];
	$a1=mysql_query("select *from m_obthlg where id='$id'");
	while ($a=mysql_fetch_array($a1))
		{
		$tgl=$a[tgl];
		$idobt=$a[idobt];
		$jml=$a[jml];
		$ket=$a[ket];
		}
	$b1=mysql_query("select *from m_obt where nama='$idobt'");
	while ($b=mysql_fetch_array($b1))
		{
		$nama=$b[nama];
		}

	echo"
	<br>
	<form method='post' action='index.php?task=pehlgobt'>
	<table class='adminlist'>
	<tr>
	<td>Tanggal</td>
	<td>Nama Obat</td>
	<td>Jumlah</td>
	<td>Keterangan</td>
	</tr>

	<tr>
	<td>$tgl</td>
	<td>
	$idobt
	</td>
	<td>
	<input type='text' name='jml' value='$jml'>
	</td>
	<td>
	$ket
	</td>
	</tr>

	<tr>
	<td align='center' colspan='2'>
	<input type='hidden' name='id' value='$id'>
	<input type='submit' value='[ GANTI ]'>
	</td>
	</tr>
	</table>
	</form>
	";
	}

function pehlgobt()
	{
	$id=$_POST['id'];
	$jml=$_POST['jml'];
	$ket=$_POST['ket'];
	$a=mysql_query("update m_obthlg set jml='$jml' where id='$id'");
	if($a)
		{header("location: index.php?task=hlgobt&pesan=Data Sudah Diganti");}
	else
		{echo"error";}
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
	<td>Unit</td>
	<td>Pemberi/ Tgl</td>
	<td>Penerima/ Tgl</td>
	<td>Obat</td>

	</tr>
	";
	if(!isset($_GET['page'])){
		$page = 1;
	} else {
		$page = $_GET['page'];
	}

	$max_results=50;
	$from=(($page*$max_results)-$max_results);



	$a1=mysql_query("select *from m_alkesmt order by id DESC limit $from, $max_results");
	while ($a=mysql_fetch_array($a1))
	{
	echo"
	<tr>
	<td><a href='index.php?task=ealkesmt&id=$a[id]'>$a[unit]</a></td>
	<td>$a[no]</td>
	<td>$a[tgl]</td>
	<td>$a[unit]</td>
	<td>$a[beri]/ $a[beritgl]</td>
	<td>$a[trm]/ $a[trmtgl]</td>
	<td><a href='index.php?task=alkes_mt&idtr=$a[id]'>Obat</a></td>

	</tr>
	";
	}

	echo"
	</table>
	<br><br>
	";
	$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_alkesmt"),0);

	$total_pages=ceil($total_results / $max_results);

	echo "<center>[Page]<br>";


	if($page > 1){
		$prev = ($page - 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=alkesmt&page=$prev\"><< Prev </a>";
	}

	for($i = 1; $i <= $total_pages; $i++){
		if(($page) == $i){
			echo "$i ";
			} else {
				echo "<a href=\"".$_SERVER['PHP_SELF']."?task=alkesmt&page=$i\">[$i]</a> ";
		}
	}


	if($page < $total_pages){
		$next = ($page + 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=alkesmt&page=$next\">Next >></a>";
	} echo"
		<br>
	<br>Terdapat $total_results Data Permintaan Alkes/Obat
	<br>
	</center>

	";
	}

function palkesmt()
	{
	$unit=$_POST['unit'];
	$no=$_POST['no'];
	$tgl=$_POST['tgl'];
	$beri=$_POST['beri'];
	$beritgl=$_POST['beritgl'];
	$trm=$_POST['trm'];
	$trmtgl=$_POST['trmtgl'];
	$a=mysql_query("insert into m_alkesmt values ('', '$unit', '$no', '$tgl', '$beri', '$beritgl', '$trm', '$trmtgl')");
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
	Unit
	</td>
	<td>
	: $unit
	</td>
	</tr>

	<tr>
	<td width='20%'>
	NO
	</td>
	<td>
	: $no
	</td>
	</tr>

	<tr>
	<td width='20%'>
	Tanggal
	</td>
	<td>
	: $tgl
	</td>
	</tr>

	<tr>
	<td width='20%'>
	Diberikan Oleh:
	</td>
	<td>
	: <input type='text' name='beri' value='$beri'>
	</td>
	</tr>

	<tr>
	<td width='20%'>
	Diberikan Tgl:
	</td>
	<td>
	: <input type='text' name='beritgl' value='$beritgl'>
	</td>
	</tr>
	<tr>
	<td width='20%'>
	Diterima Oleh:
	</td>
	<td>
	: $trm
	</td>
	</tr>
	<tr>
	<td width='20%'>
	Diterima Tgl:
	</td>
	<td>
	: $trmtgl
	</td>
	</tr>

	<tr>
	<td colspan='2'>
	<input type='hidden' name='id' value='$id'>
	<input type='hidden' name='unit' value='$unit'>
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
	//$unit=$_POST['unit'];
	//$no=$_POST['no'];
	//$tgl=$_POST['tgl'];
	$beri=$_POST['beri'];
	$beritgl=$_POST['beritgl'];
	//$trm=$_POST['trm'];
	//$trmtgl=$_POST['trmtgl'];
	$a=mysql_query("update m_alkesmt set beri='$beri', beritgl='$beritgl' where id='$id'");
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
	<td>Realisasi</td>
	<td>Satuan</td>
	<td>Jml Harga</td>
	<td>Keterangan</td>
	<td>Status</td>

	</tr>
	";



	$b1=mysql_query("select *from m_alkesmt2 where idtr='$idtr'");
	while ($b=mysql_fetch_array($b1))
	{
	echo"
	<tr>
	<td><a href='index.php?task=ealkes_mt&id=$b[id]&idtr=$idtr'>";
	$obt=$b[idobt];
	$c1=mysql_query("select *from m_obt where nama='$obt'");
	while($c=mysql_fetch_array($c1))
		{
		$nm=$c[nama];
		}
	echo"$obt
	</a></td>
	<td>$b[jmlmt]</td>
	<td>$b[jmlreal]</td>
	<td>$b[hgst]</td>
	<td>$b[hgjml]</td>
	<td>$b[ket]</td>
	<td>";
	$status=$b[status];
	if($status=='Belum')
		{
		echo"<a href='index.php?task=ualkes_mt&id=$b[id]&status=Sudah&idtr=$idtr'>Belum</a>";
		}
	else
		{
		echo"<a href='index.php?task=ualkes_mt&id=$b[id]&status=Belum&idtr=$idtr'>Sudah</a>";
		}
	echo"
	</td>

	</tr>
	";
	}

	echo"
	</table>
	";

	echo"
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

function ualkes_mt()
	{
	$idtr=$_GET['idtr'];
	$id=$_GET['id'];
	$status=$_GET['status'];
	$a=mysql_query("update m_alkesmt2 set status='$status' where id='$id'");
	if($a)
		{header ("location: index.php?task=alkes_mt&idtr=$idtr&pesan=Data Sudah Diganti");}
		else
		{echo"R de OR";}
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
	$nm=$_POST['nm'];
	$jmlmt=$_POST['jmlmt'];
	$jmlreal=$_POST['jmlreal'];
	$hgst=$_POST['hgst'];
	$hgjml=$_POST['hgjml'];
	$ket=$_POST['ket'];
	$a=mysql_query("insert into m_alkesmt2 values ('', '$idtr', '$nm', '$jmlmt', '$jmlreal', '$hgst', '$hgjml', '$ket', 'Belum')");
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
	<td>Status</td>
	</tr>
	";
	$b1=mysql_query("select *from m_alkesmt2 where id='$id'");
	while ($b=mysql_fetch_array($b1))
	{
	$idtr=$b['idtr'];
	$namaobt=$b['idobt'];
	$jmlmt=$b['jmlmt'];
	$jmlreal=$b['jmlreal'];
	$hgst=$b['hgst'];
	$hgjml=$b['hgjml'];
	$ket=$b['ket'];
	$status=$b['status'];
	}
	echo"
	<form method='post' action='index.php?task=ealkes_mt2'>
	<tr>
	<td>$nm</td>
	<td>$jmlmt</td>
	<td><input type='text' name='jmlreal' value='$jmlreal'></td>
	<td>$hgst</td>
	<td>$hgjml</td>
	<td>$ket</td>
	<td>
	<select name=''>
	<option value='$status'>$status</option>
	<option value='Belum'>Belum</option>
	<option value='Terkirim'>Terkirim</option>
	</select>
	</td>
	</tr>

	<tr>
	<td colspan='6'>
	<input type='hidden' name='id' value='$id'>
	<input type='hidden' name='namaobt' value='$namaobt'>
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
	$tanggal=date('Y-m-d');
	$id=$_POST['id'];
	$idtr=$_POST['idtr'];
	$namaobt=$_POST['namaobt'];
	//$jmlmt=$_POST['jmlmt'];
	$jmlreal=$_POST['jmlreal'];
	//$hgst=$_POST['hgst'];
	//$hgjml=$_POST['hgjml'];
	//$ket=$_POST['ket'];
	$status=$_POST['status'];
	$c1=mysql_query("select *from m_alkesmt where id='$idtr'");
	while($c=mysql_fetch_array($c1))
		{$unit=$c['unit'];}
	$a=mysql_query("update m_alkesmt2 set jmlreal='$jmlreal', status='$status' where id='$id'");
	$b=mysql_query("insert into m_obtklr values('', '$namaobt', '$jmlreal', '$unit', '$tanggal')");
	$c1=mysql_query("select *from m_obtstok where obat='$namaobat' and unit='Kamar Obat'");
	while($c=mysql_fetch_array($c1))
		{$obt1=$c[stok];}
	$obt1a=$obt1-$jmlreal;

	$d1=mysql_query("select *from m_obtstok where obat='$namaobt' and unit='Unit'");
	while($d=mysql_fetch_array($d1))
		{$obt2=$d[stok];}
	$obt2a=$obt2+$jmlreal;

	$e=mysql_query("update m_obtstok set stok='$obt1a' where obat='$namaobt' and unit='Kamar Obat'");
	$f=mysql_query("update m_obtstok set stok='$obt1a' where obat='$namaobt' and unit='$unit'");

	if ($a and $b and $e and $f)
	{header ("Location: index.php?task=alkes_mt&idtr=$idtr&pesan=Data Sudah Diganti");}
	else
		{echo"ror";}
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


function supplier()
	{
	$pesan=$_GET['pesan'];
	echo"
	<h1>DATA SUPPLIER</h1>
	<br>
	<u>$pesan</u>
	<br><br>
	<form method='post' action='index.php?task=isupplier'>
	<table class='adminlist'>
	<tr>
	<td>Nama</td>
	<td>Cabang</td>
	<td>Alamat</td>
	<td>Telp</td>
	</tr>

	<tr>
	<td><input type='text' name='nama'></td>
	<td><input type='text' name='cabang'></td>
	<td><input type='text' name='alamat'></td>
	<td><input type='text' name='telp'></td>
	</tr>
	<tr>
	<td colspan='4' align='center'><input type='submit' value='[ SIMPAN ]'></td>
	</tr>
	</table>
	</form>
	";
	/////////////////////////////////////////////////////////////////
	echo"
	<table class='adminlist'>
	<tr>
	<td>Nama</td>
	<td>Cabang</td>
	<td>Alamat</td>
	<td>Telp</td>
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

	$a1=mysql_query("select *from m_obtsup order by nama ASC limit $from, $max_results");
	while($a=mysql_fetch_array($a1))
		{
	echo"
	<tr>
	<td><a href='index.php?task=esupplier&id=$a[id]'>$a[nama]</a></td>
	<td>$a[cabang]</td>
	<td>$a[alamat]</td>
	<td>$a[telp]</td>
	<td><a href='index.php?task=dsupplier&id=$a[id]'>hapus</a></td>
	</tr>
	";
		}
	echo"
	</table>
	";
	$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_obtsup"),0);

	$total_pages=ceil($total_results / $max_results);

	echo "<center>[Page]<br>";


	if($page > 1){
		$prev = ($page - 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=supplier&page=$prev\"><< Prev </a>";
	}

	for($i = 1; $i <= $total_pages; $i++){
		if(($page) == $i){
			echo "$i ";
			} else {
				echo "<a href=\"".$_SERVER['PHP_SELF']."?task=supplier&page=$i\">[$i]</a> ";
		}
	}


	if($page < $total_pages){
		$next = ($page + 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=supplier&page=$next\">Next >></a>";
	} echo"
		<br>
	<br>Terdapat $total_results Supplier
	<br>
	</center>

	";
	}

function isupplier()
	{
	$nama=$_POST['nama'];
	$cabang=$_POST['cabang'];
	$alamat=$_POST['alamat'];
	$telp=$_POST['telp'];
	$a=mysql_query("insert into m_obtsup value ('', '$nama', '$cabang', '$alamat', '$telp')");
	if($a)
		{header ("location: index.php?task=supplier&pesan=Data Sudah Masuk");}
	else
		{echo"error";}
	}

function dsupplier()
	{
	$id=$_GET['id'];
	$a=mysql_query("delete from m_obtsup where id='$id'");
	if($a)
		{header("location: index.php?task=supplier&pesan=Data Sudah Dihapus");}
	else
		{echo"error";}
	}

function esupplier()
	{
	$id=$_GET['id'];
	$a1=mysql_query("select *from m_obtsup where id='$id'");
	while($a=mysql_fetch_array($a1))
		{
		$nama=$a[nama];
		$cabang=$a['cabang'];
		$alamat=$a['alamat'];
		$telp=$a['telp'];
		}
	echo"
	<form method='post' action='index.php?task=esupplier2'>
	<table class='adminlist'>
	<tr>
	<td>Nama</td>
	<td>Cabang</td>
	<td>Alamat</td>
	<td>Telp</td>
	</tr>

	<tr>
	<td><input type='text' name='nama' value='$nama'></td>
	<td><input type='text' name='cabang' value='$cabang'></td>
	<td><input type='text' name='alamat' value='$alamat'></td>
	<td><input type='text' name='telp' value='$telp'></td>
	</tr>
	<tr>
	<td colspan='4' align='center'>
	<input type='hidden' name='id' value='$id'>
	<input type='submit' value='[ SIMPAN ]'></td>
	</tr>
	</table>
	</form>
	";

	}

function esupplier2()
	{
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$cabang=$_POST['cabang'];
	$alamat=$_POST['alamat'];
	$telp=$_POST['telp'];
	$a=mysql_query("update m_obtsup set nama='$nama', cabang='$cabang', alamat='$alamat', telp='$telp' where id='$id'");
	if($a)
		{header ("location: index.php?task=supplier&pesan=Data Sudah Diganti");}
	else
		{echo"error";}
	}

function beli()
	{
	$pesan=$_GET['pesan'];
	echo"
	<h1>PEMBELIAN OBAT</h1>
	<br>
	<u>$pesan</u>
	<br><br>

	<form method='post' action='index.php?task=ibeli'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nama Obat</td>
	<td>
	<select name='obat'>
	";
	$b1=mysql_query("select *from m_obt order by nama ASC");
	while($b=mysql_fetch_array($b1))
		{
		echo"<option value='$b[nama]'>$b[nama]</option>";
		}
	echo"
	</select>
	</td>
	</tr>
	<tr>
	<td>Supplier</td>
	<td>
	<select name='idsupplier'>
	";
	$a1=mysql_query("select *from m_obtsup order by nama ASC");
	while($a=mysql_fetch_array($a1))
		{
		echo"<option value='$a[id]'>$a[nama]</option>";
		}
	echo"
	</select>
	</td>
	</tr>

	<tr>
	<td>No Faktur</td>
	<td><input type='text' name='faktur'></td>
	</tr>

	<tr>
	<td>Jumlah</td>
	<td><input type='text' name='jml'></td>
	</tr>

	<tr>
	<td>Satuan</td>
	<td>
	<select name='satuan'>

	<option value='Kapsul'>Kapsul</option>
	<option value='Tablet'>Tablet</option>
	<option value='Fles'>Fles</option>
	<option value='Ampul'>Ampul</option>
	<option value='Vial'>Vial</option>
	<option value='Tube'>Tube</option>
	<option value='Supp'>Supp</option>
	<option value='Gram'>Gram</option>
	<option value='CC'>CC</option>
	<option value='Tere'>Tere</option>
	<option value='Pcs'>Pcs</option>
	<option value='Sachet'>Sachet</option>
	<option value='Pak'>Pak</option>
	</select>
	</td>
	</tr>

	<tr>
	<td>Harga Satuan</td>
	<td><input type='text' name='hgsatuan'></td>
	</tr>

	<tr>
	<td>Harga Total</td>
	<td><input type='text' name='hgtotal'></td>
	</tr>

	<tr>
	<td>Potongan</td>
	<td><input type='text' name='potongan'></td>
	</tr>

	<tr>
	<td>PPN</td>
	<td><input type='text' name='ppn'></td>
	</tr>

	<tr>
	<td>Tagihan</td>
	<td><input type='text' name='tagihan'></td>
	</tr>

	<tr>
	<td colspan='2'>
	<input type='submit' value='[ SIMPAN ]'>
	</td>
	</tr>
	</table>
	</form>
	";
	////////////////////////////////////////////////////////////////
	echo"
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
	if(!isset($_GET['page'])){
		$page = 1;
	} else {
		$page = $_GET['page'];
	}

	$max_results=50;
	$from=(($page*$max_results)-$max_results);

	$d1=mysql_query("select *from m_obtbl order by id DESC limit $from, $max_results");
	while ($d=mysql_fetch_array($d1))
		{
		echo"
		<tr>
		<td align='left'><a href='index.php?task=dbeli&id=$d[id]'>$d[obat]</a></td>
		<td align='left'>";
		$idsupplier=$d[idsupplier];
		$c1=mysql_query("select *from m_obtsup where id='$idsupplier'");
		while($c=mysql_fetch_array($c1))
		{
		$idsup=$c[id];
		$namasup=$c[nama];
		}
		echo"$namasup
		</td>
		<td align='left'>$d[tanggal]</td>
		<td align='left'>$d[faktur]</td>
		<td align='left'>$d[jumlah] $b[satuan]</td>
		<td align='left'>$d[hgsatuan]</td>
		<td align='left'>$d[hgtotal]</td>
		<td align='left'>$d[potongan]/<br>$b[ppn]</td>
		<td align='left'>$d[tagihan]</td>

		</tr>
		";
		}
	echo"</table>";
	$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_obtbl"),0);

	$total_pages=ceil($total_results / $max_results);

	echo "<center>[Page]<br>";


	if($page > 1){
		$prev = ($page - 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=beli&page=$prev\"><< Prev </a>";
	}

	for($i = 1; $i <= $total_pages; $i++){
		if(($page) == $i){
			echo "$i ";
			} else {
				echo "<a href=\"".$_SERVER['PHP_SELF']."?task=beli&page=$i\">[$i]</a> ";
		}
	}


	if($page < $total_pages){
		$next = ($page + 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=beli&page=$next\">Next >></a>";
	} echo"
		<br>
	<br>Terdapat $total_results Data Pembelian Obat
	<br>
	</center>

	";
	}

function ibeli()
	{
	$tanggal=date('Y-m-d');
	$idsupplier=$_POST['idsupplier'];
	$obat=$_POST['obat'];
	$faktur=$_POST['faktur'];
	$jml=$_POST['jml'];
	$satuan=$_POST['satuan'];
	$hgsatuan=$_POST['hgsatuan'];
	$hgtotal=$_POST['hgtotal'];
	$potongan=$_POST['potongan'];
	$ppn=$_POST['ppn'];
	$tagihan=$_POST['tagihan'];

	$a=mysql_query("insert into m_obtbl values ('', '$idsupplier', '$tanggal', '$obat', '$faktur', '$jml', '$satuan', '$hgsatuan', '$hgtotal', '$potongan', '$ppn', '$tagihan')");
	$b1=mysql_query("select *from m_obtstok where obat='$obat' and unit='Kamar Obat'");
	while($b=mysql_fetch_array($b1))
		{$stok=$b[stok];}
	$stokb=$jml+$stok;
	$c=mysql_query("update m_obtstok set stok='$stokb' where obat='$obat' and unit='Kamar Obat'");

	if ($a and $c)
		{header ("location: index.php?task=beli&pesan=Data Sudah Masuk");}
	else
		{echo"error";}
	}

function delbeli()
	{
	$id=$_GET['id'];
	$a=mysql_query("delete from m_obtbl where id='$id'");
	if ($a)
		{header ("location: index.php?task=beli&pesan=Data Sudah Dihapus");}
	else
		{echo"error";}
	}

function dbeli()
	{
	$id=$_GET['id'];
	$b1=mysql_query("select *from m_obtbl where id='$id'");
	while($b=mysql_fetch_array($b1))
		{
		$idsupplier=$b['idsupplier'];
		$tanggal=$b['tanggal'];
		$obat=$b['obat'];
		$faktur=$b['faktur'];
		$jml=$b['jml'];
		$satuan=$b['satuan'];
		$hgsatuan=$b['hgsatuan'];
		$hgtotal=$b['hgtotal'];
		$potongan=$b['potongan'];
		$ppn=$b['ppn'];
		$tagihan=$b['tagihan'];
		}
		$c1=mysql_query("select *from m_obtsup where id='$idsupplier'");
	while($c=mysql_fetch_array($c1))
		{
		$idsup=$c[id];
		$namasup=$c[nama];
		}

	echo"
	<form method='post' action='index.php?task=dbeli2'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nama Obat</td>
	<td>
	$obat
	</td>
	</tr>
	<tr>
	<td>Supplier</td>
	<td>
	<select name='idsupplier'>
	<option value='$idsup'>$namasup</option>
	";
	$a1=mysql_query("select *from m_obtsup order by nama ASC");
	while($a=mysql_fetch_array($a1))
		{
		echo"<option value='$a[id]'>$a[nama]</option>";
		}
	echo"
	</select>
	</td>
	</tr>

	<tr>
	<td>Tanggal</td>
	<td><input type='text' name='tanggal' value='$tanggal'></td>
	</tr>

	<tr>
	<td>No Faktur</td>
	<td><input type='text' name='faktur' value='$faktur'></td>
	</tr>

	<tr>
	<td>Jumlah</td>
	<td>$jml</td>
	</tr>

	<tr>
	<td>Satuan</td>
	<td>
	<select name='satuan'>
	<option value='$satuan'>$satuan</option>
	<option value='Kapsul'>Kapsul</option>
	<option value='Tablet'>Tablet</option>
	<option value='Fles'>Fles</option>
	<option value='Ampul'>Ampul</option>
	<option value='Vial'>Vial</option>
	<option value='Tube'>Tube</option>
	<option value='Supp'>Supp</option>
	<option value='Gram'>Gram</option>
	<option value='CC'>CC</option>
	<option value='Tere'>Tere</option>
	<option value='Pcs'>Pcs</option>
	<option value='Sachet'>Sachet</option>
	<option value='Pak'>Pak</option>
	</select>

	</td>
	</tr>

	<tr>
	<td>Harga Satuan</td>
	<td><input type='text' name='hgsatuan' value='$hgsatuan'></td>
	</tr>

	<tr>
	<td>Harga Total</td>
	<td><input type='text' name='hgtotal' value='$hgtotal'></td>
	</tr>

	<tr>
	<td>Potongan</td>
	<td><input type='text' name='potongan' value='$potongan'></td>
	</tr>

	<tr>
	<td>PPN</td>
	<td><input type='text' name='ppn' value='$ppn'></td>
	</tr>

	<tr>
	<td>Tagihan</td>
	<td><input type='text' name='tagihan' value='$tagihan'></td>
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

function dbeli2()
	{
	$id=$_POST['id'];
	$tanggal=$_POST['tanggal'];
	$idsupplier=$_POST['idsupplier'];
	$obat=$_POST['obat'];
	$faktur=$_POST['faktur'];
	//$jml=$_POST['jml'];
	$satuan=$_POST['satuan'];
	$hgsatuan=$_POST['hgsatuan'];
	$hgtotal=$_POST['hgtotal'];
	$potongan=$_POST['potongan'];
	$ppn=$_POST['ppn'];
	$tagihan=$_POST['tagihan'];

	$a=mysql_query("update m_obtbl set tanggal='$tanggal', idsupplier='$idsupplier', obat='$obat', faktur='$faktur', satuan='$satuan', hgsatuan='$hgsatuan', hgtotal='$hgtotal', potongan='$potongan', ppn='$ppn', tagihan='$tagihan' where id='$id'");
	if ($a)
		{header ("location: index.php?task=beli&pesan=Data Sudah Diganti");}
	else
		{echo"error";}
	}

function stok()
	{

	if(!isset($_GET['page'])){
		$page = 1;
	} else {
		$page = $_GET['page'];
	}

	$max_results=50;
	$from=(($page*$max_results)-$max_results);

	$pesan=$_GET['pesan'];
	echo"
	<h1>STOK OBAT
	<u>$pesan</u>
	<br><br>
	<form method='post' action='index.php?task=pstok'>
	<table class='adminlist'>
	<tr>
	<td>
	Nama Obat :
	</td>

	</tr>

	<tr>
	<td width='50%'>

	<select name='obat'>
	";
	$b1=mysql_query("select *from m_obt order by nama ASC");
	while($b=mysql_fetch_array($b1))
		{
		echo"<option value='$b[nama]'>$b[nama], Rp. $b[hgjual]</option>";
		}
	echo"
	</select>

	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>
	</form>";
	///////////DATA STOK OBAT
	echo"
	<table class='adminlist'>
	<tr>
	<td>Obat</td>
	<td>Harga</td>
	<td>Harga1</td>
	<td>Harga2</td>

	</tr>
	";


	$c1=mysql_query("select *from m_obt ORDER BY nama ASC LIMIT $from, $max_results");
	while($c=mysql_fetch_array($c1))
		{
		/*$obat=$c[nama];
		$ko= mysql_result(mysql_query("SELECT SUM(stok) as Num FROM m_obtstok where obat='$obat' and unit='Kamar Obat'"),0);
		$kb= mysql_result(mysql_query("SELECT SUM(stok) as Num FROM m_obtstok where obat='$obat' and unit='Kamar Bersalin'"),0);
		$ka= mysql_result(mysql_query("SELECT SUM(stok) as Num FROM m_obtstok where obat='$obat' and unit='Kamar Anak'"),0);
		$kbi= mysql_result(mysql_query("SELECT SUM(stok) as Num FROM m_obtstok where obat='$obat' and unit='Kamar Bayi'"),0);
		$kp= mysql_result(mysql_query("SELECT SUM(stok) as Num FROM m_obtstok where obat='$obat' and unit='Poli'"),0);
		*/
		echo"
		<tr>
		<td>$c[nama]</td>
		<td>$c[hgjual]</td>
		<td>$c[hgjual1]</td>
		<td>$c[hgjual2]</td>

		</tr>
		";
		}
	echo"
	</table>
	";
	$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_obt"),0);

	$total_pages=ceil($total_results / $max_results);

	echo "<center>[Page]<br>";


	if($page > 1){
		$prev = ($page - 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=stok&page=$prev\"><< Prev </a>";
	}

	for($i = 1; $i <= $total_pages; $i++){
		if(($page) == $i){
			echo "$i ";
			} else {
				echo "<a href=\"".$_SERVER['PHP_SELF']."?task=stok&page=$i\">[$i]</a> ";
		}
	}


	if($page < $total_pages){
		$next = ($page + 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=stok&page=$next\">Next >></a>";
	} echo"
		<br>
	<br>Terdapat $total_results Data Obat
	<br>
	</center>

	";
	}

function pstok()
	{
	$obat=$_POST['obat'];
	echo"
	<h1>Stok Obat $obat</h1>
	<table class='adminlist'>
	<tr>
	<td>Unit</td>
	<td>Stok</td>
	</tr>
	";
	$a1=mysql_query("select *from m_obtstok where obat='$obat' order by unit ASC");
	while($a=mysql_fetch_array($a1))
		{
		echo"
		<tr>
		<td>$a[unit]</td>
		<td>$a[stok]</td>
		</tr>
		";
		}
	$nl_ia= mysql_result(mysql_query("SELECT SUM(stok) as Num FROM m_obtstok where obat='$obat'"),0);
	echo"
	<tr>
	<td><b>TOTAL</td>
	<td>$nl_ia</td>
	</tr>
	</table>
	";
	}


////////////////////
function stok2()
	{
	echo"
	<h1>STOK OBAT
	<u>$pesan</u>
	<br><br>
	<form method='post' action='index.php?task=pstok2'>
	<table class='adminlist'>
	<tr>
	<td>
	Kategori Obat :
	</td>

	</tr>

	<tr>
	<td width='50%'>

	<select name='kategori'>
	<option value='Obat'>Obat</option>
	<option value='Alkes'>Alkes</option>
	<option value='Susu'>Susu</option>
	<option value='BKKBN'>BKKBN</option>
	</select>

	<input type='submit' value='cari'>
	</td>

	</tr>
	</table>";
	///////////DATA STOK OBAT
	echo"
	<table class='adminlist'>
	<tr>
	<td>Obat</td>
	<td>Harga</td>
	<td>Harga1</td>
	<td>Harga2</td>

	</tr>
	";
	if(!isset($_GET['page'])){
		$page = 1;
	} else {
		$page = $_GET['page'];
	}

	$max_results=50;
	$from=(($page*$max_results)-$max_results);

	$c1=mysql_query("select *from m_obt order by nama ASC limit $from, $max_results");
	while($c=mysql_fetch_array($c1))
		{
		$obat=$c[nama];
		$ko= mysql_result(mysql_query("SELECT SUM(stok) as Num FROM m_obtstok where obat='$obat' and unit='Kamar Obat'"),0);
		$kb= mysql_result(mysql_query("SELECT SUM(stok) as Num FROM m_obtstok where obat='$obat' and unit='Kamar Bersalin'"),0);
		$ka= mysql_result(mysql_query("SELECT SUM(stok) as Num FROM m_obtstok where obat='$obat' and unit='Kamar Anak'"),0);
		$kbi= mysql_result(mysql_query("SELECT SUM(stok) as Num FROM m_obtstok where obat='$obat' and unit='Kamar Bayi'"),0);
		$kp= mysql_result(mysql_query("SELECT SUM(stok) as Num FROM m_obtstok where obat='$obat' and unit='Poli'"),0);
		echo"
		<tr>
		<td>$c[nama]</td>
		<td>$c[hgjual]</td>
		<td>$c[hgjual1]</td>
		<td>$c[hgjual2]</td>

		</tr>
		";
		}
	echo"
	</table>
	";
	$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_obt"),0);

	$total_pages=ceil($total_results / $max_results);

	echo "<center>[Page]<br>";


	if($page > 1){
		$prev = ($page - 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=stok2&page=$prev\"><< Prev </a>";
	}

	for($i = 1; $i <= $total_pages; $i++){
		if(($page) == $i){
			echo "$i ";
			} else {
				echo "<a href=\"".$_SERVER['PHP_SELF']."?task=stok2&page=$i\">[$i]</a> ";
		}
	}


	if($page < $total_pages){
		$next = ($page + 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=stok2&page=$next\">Next >></a>";
	} echo"
		<br>
	<br>Terdapat $total_results Data Obat
	<br>
	</center>

	";
	}

function pstok2()
	{
	$kategori=$_POST['kategori'];
	echo"
	<h1>Stok Obat Kategori: $kategori</h1>
	<table class='adminlist'>
	<tr>
	<td>Obat</td>
	<td>Harga</td>
	<td>Harga1</td>
	<td>Harga2</td>

	</tr>
	";
	if(!isset($_GET['page'])){
		$page = 1;
	} else {
		$page = $_GET['page'];
	}

	$max_results=50;
	$from=(($page*$max_results)-$max_results);

	$c1=mysql_query("select *from m_obt where kategori='$kategori' order by nama ASC limit $from, $max_results");
	while($c=mysql_fetch_array($c1))
		{
		$obat=$c[nama];
		$ko= mysql_result(mysql_query("SELECT SUM(stok) as Num FROM m_obtstok where obat='$obat' and unit='Kamar Obat'"),0);
		$kb= mysql_result(mysql_query("SELECT SUM(stok) as Num FROM m_obtstok where obat='$obat' and unit='Kamar Bersalin'"),0);
		$ka= mysql_result(mysql_query("SELECT SUM(stok) as Num FROM m_obtstok where obat='$obat' and unit='Kamar Anak'"),0);
		$kbi= mysql_result(mysql_query("SELECT SUM(stok) as Num FROM m_obtstok where obat='$obat' and unit='Kamar Bayi'"),0);
		$kp= mysql_result(mysql_query("SELECT SUM(stok) as Num FROM m_obtstok where obat='$obat' and unit='Poli'"),0);
		echo"
		<tr>
		<td>$c[nama]</td>
		<td>$c[hgjual]</td>
		<td>$c[hgjual1]</td>
		<td>$c[hgjual2]</td>

		</tr>
		";
		}
	echo"
	</table>
	";
	$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_obt"),0);

	$total_pages=ceil($total_results / $max_results);

	echo "<center>[Page]<br>";


	if($page > 1){
		$prev = ($page - 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=stok2&page=$prev\"><< Prev </a>";
	}

	for($i = 1; $i <= $total_pages; $i++){
		if(($page) == $i){
			echo "$i ";
			} else {
				echo "<a href=\"".$_SERVER['PHP_SELF']."?task=stok2&page=$i\">[$i]</a> ";
		}
	}


	if($page < $total_pages){
		$next = ($page + 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=stok2&page=$next\">Next >></a>";
	} echo"
		<br>
	<br>Terdapat $total_results Data Obat
	<br>
	</center>
	";
	}



//////////////////////

function mutasi()
	{
	$p=$_GET['p'];
	$tgl=date('Y-m-d');
	echo"
	<h1>MUTASI OBAT DARI BAGIAN</h1>
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
	<td>Bagian</td>
	<td>
	<select name='dari'>
	<option value='Kamar Bersalin'>Kamar Bersalin</option>
	<option value='Kamar Anak'>Kamar Anak</option>
	<option value='Kamar Bayi'>Kamar Bayi</option>
	<option value='Poli'>Poli</option>
	<option value='Apotik'>Apotik</option>
	</select>
	</td>
	</tr>

	<tr>
	<td>Tanggal</td>
	<td><input type='text' name='tanggal' value='$tgl'> <font size='-1'>*YYYY/MM/DD</font></td>
	</tr>

	<tr>
	<td colspan='2' align='center'>
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
	if(!isset($_GET['page'])){
		$page = 1;
	} else {
		$page = $_GET['page'];
	}

	$max_results=50;
	$from=(($page*$max_results)-$max_results);

	$b1=mysql_query("select *from m_obtmutasi order by tanggal DESC limit $from, $max_results");
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
	$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM m_obtmutasi"),0);

	$total_pages=ceil($total_results / $max_results);

	echo "<center>[Page]<br>";


	if($page > 1){
		$prev = ($page - 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=mutasi&page=$prev\"><< Prev </a>";
	}

	for($i = 1; $i <= $total_pages; $i++){
		if(($page) == $i){
			echo "$i ";
			} else {
				echo "<a href=\"".$_SERVER['PHP_SELF']."?task=mutasi&page=$i\">[$i]</a> ";
		}
	}


	if($page < $total_pages){
		$next = ($page + 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."?task=mutasi&page=$next\">Next >></a>";
	} echo"
		<br>
	<br>Terdapat $total_results Data Mutasi
	<br>
	</center>

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

function ap_rsp()
	{
	echo"
	<h1>Apotik
	<br>Penjualan Obat Resep</h1>
	Masukkan Data Pasien:
	<br><br>
	<form method='post' action='index.php?task=pap_rsp'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nama Pasien</td>
	<td><input type='text' name='pasien'></td>
	</tr>

	<tr>
	<td>Nama Dokter</td>
	<td><input type='text' name='dokter'></td>
	</tr>

	<tr>
	<td width='20%'>Alamat Pasien</td>
	<td><input type='text' name='alm'></td>
	</tr>

	<tr>
	<td width='20%'>Umur</td>
	<td><input type='text' name='umur'></td>
	</tr>

	<tr>
	<td width='20%'>Telepon</td>
	<td><input type='text' name='telp'></td>
	</tr>
	<tr>
	<td colspan='2' align='center'>
	<input type='submit' value='[simpan]'>
	</td>
	</tr>

	</table>
	</form>

	";
	}

function pap_rsp()
	{
	$tgl=date('Y-m-d');
	$pasien=$_POST['pasien'];
	$dokter=$_POST['dokter'];
	$alm=$_POST['alm'];
	$umur=$_POST['umur'];
	$telp=$_POST['telp'];


		$max=mysql_result(mysql_query("SELECT MAX(idapotikrsp) FROM m_aporsp"),0);
		$idapotikrsp=$max+1;
		$max2=mysql_result(mysql_query("SELECT MAX(id) FROM m_aporsp where tgl='$tgl'"),0);
		$id=$max2+1;
		$a=mysql_query("insert into m_aporsp values ('$idaporsp', '$tgl-$id', '$id', '$tgl', '$pasien', '$dokter', '$alm', '$umur', '$telp', '0')");
		if ($a)
			{header("location: index.php?task=ap_rsp2&idapotikrsp=$idapotikrsp");}
		else
			{echo"AUTORIZED AREA";}



	}


//m_aporsp: idapotikrsp, notrans,id, tgl, pasien,dokter,alm, umur,telp,status
//m_aporsp2: id,idapotikrsp,obat,jml,hg,hgt


function ap_rsp2()
	{
	$idapotikrsp=$_GET['idapotikrsp'];
	$a1=mysql_query("select *from m_aporsp where idapotikrsp='$idapotikrsp'");
	while($a=mysql_fetch_array($a1))
		{
		$tgl=$a[tgl];
		$pasien=$a['pasien'];
		$dokter=$a['dokter'];
		$alm=$a['alm'];
		$umur=$a['umur'];
		$telp=$a['telp'];
		}
	echo"
	<h1>Penjualan Obat Resep</h1>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nama Pasien</td>
	<td>$pasien</td>
	</tr>

	<tr>
	<td>Nama Dokter</td>
	<td>$dokter</td>
	</tr>

	<tr>
	<td width='20%'>Alamat Pasien</td>
	<td>$alm</td>
	</tr>

	<tr>
	<td width='20%'>Umur</td>
	<td>$umur</td>
	</tr>

	<tr>
	<td width='20%'>Telepon</td>
	<td>$telp</td>
	</tr>
	</table>
	<br>
	";


	////////////////////////////
	echo"
	<form method='post' action='index.php?task=pap_rsp2'>
	<table class='adminlist'>
	<tr>
	<td colspan='2'><b>PEMBELIAN OBAT</b></td>
	</tr>

	<tr>
	<td>Nama Obat</td>
	<td>Jumlah</td>
	</tr>

	<tr>
	<td>
	<select name='obat'>
	";
	$b1=mysql_query("select *from m_obt order by nama ASC");
	while($b=mysql_fetch_array($b1))
		{
		echo"<option value='$b[id]'>$b[nama], Rp. $b[hgjual]</option>";
		}
	echo"
	</select>
	</td>
	<td><input type='text' name='jml'></td>
	</tr>

	<tr>
	<td colspan='2'>
	<input type='hidden' name='idapotikrsp' value='$idapotikrsp'>
	<input type='submit' value='Tambah Obat'>
	</td>
	</tr>
	</table>
	</form>
	";
	$c1=mysql_query("select *from m_aporsp where idapotikrsp='idapotikrsp'");
	while($c=mysql_fetch_array($c1))
		{
		$notrans=$c[notrans];
		}
	echo"
	<table class='adminlist'>
	<tr>
	<td colspan='6' align='center'>
	<b>DAFTAR OBAT NO TRANSAKSI: $notrans</b>
	</td>
	</tr>

	<tr>
	<td>Obat</td>
	<td>Jumlah</td>
	<td>Harga</td>
	<td>Total</td>
	<td>Ubah</td>
	<td>Hapus</td>
	</tr>
	";
	$d1=mysql_query("select *from m_aporsp2 where idapotikrsp='$idapotikrsp'");
	while($d=mysql_fetch_array($d1))
		{
		echo"
		<tr>
		<td>$d[obat]</td>
		<td>$d[jml]</td>
		<td>$d[hg]</td>
		<td>$d[hgt]</td>
		<td><a href='index.php?task=upap_rsp2&id=$d[id]&idapotikrsp=$idapotikrsp'>Ubah</a></td>
		<td><a href='index.php?task=delap_rsp2&id=$d[id]&idapotikrsp=$idapotikrsp'>Hapus</a></td>
		</tr>
		";
		}
		$nl_ia= mysql_result(mysql_query("SELECT SUM(hgt) as Num FROM m_aporsp2 where idapotikrsp='$idapotikrsp'"),0);
	echo"
	<tr>
	<td colspan='3'>TOTAL HARGA</td>
	<td colspan='3'>Rp. $nl_ia</td>
	</tr>

	</table>
	<table class='adminlist'>
	<tr>
	<td>
	<br><br>
	<form method='post' action='index.php?task=rekaprsp'>
	<input type='hidden' name='idapotikrsp' value='$idapotikrsp'>
	<input type='hidden' name='status' value='1'>
	<input type='submit' value='REKAM'>
	</form>
	</td>
	</tr>
	</table>
	";
	}

function rekaprsp()
	{
	$idapotikrsp=$_POST['idapotikrsp'];
	$status=$_POST['status'];
	$a=mysql_query("update m_aporsp set status='$status' where idapotikrsp='$idapotikrsp'");
	$b1=mysql_query("select *from m_aporsp2 where idapotikrsp='$idapotikrsp'");
	while($b=mysql_fetch_array($b1))
		{
		$obat=$b[obat];
		$jml=$b[jml];
		}
	$c1=mysql_query("select *from m_obtstok where obat='$obat' and unit='Kamar Obat'");
	while($c=mysql_fetch_array($c1))
		{
		$stok=$c[stok];
		}
	$stok2=$jml-$stok;
	$d=mysql_query("update m_obtstok set stok='$stok2' where obat='obat' and unit='Kamar Obat'");

	//$a=mysql_query("update m_aporsp set status='$status' where idapotikrsp='$idapotikrsp'");
	if($a and $d)
		{header("location: index.php?task=rekaprsp2&idapotikrsp=$idapotikrsp");}
	else
		{echo"AUTHORIZED AREA";}
	}

function rekaprsp2()
	{
	$idapotikrsp=$_GET['idapotikrsp'];
	$a1=mysql_query("select *from m_aporsp where idapotikrsp='$idapotikrsp'");
	while($a=mysql_fetch_array($a1))
		{
		$tgl=$a[tgl];
		$pasien=$a['pasien'];
		$dokter=$a['dokter'];
		$alm=$a['alm'];
		$umur=$a['umur'];
		$telp=$a['telp'];
		$notrans=$a[notrans];
		}
	echo"
	<h1>Penjualan Obat Resep</h1>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nama Pasien</td>
	<td>$pasien</td>
	</tr>

	<tr>
	<td>Nama Dokter</td>
	<td>$dokter</td>
	</tr>

	<tr>
	<td width='20%'>Alamat Pasien</td>
	<td>$alm</td>
	</tr>

	<tr>
	<td width='20%'>Umur</td>
	<td>$umur</td>
	</tr>

	<tr>
	<td width='20%'>Telepon</td>
	<td>$telp</td>
	</tr>
	</table>

	";
	///////////////////////////

	echo"
	<table class='adminlist'>
	<tr>
	<td colspan='6' align='center'>
	<b>DAFTAR OBAT NO TRANSAKSI: $notrans</b>
	</td>
	</tr>

	<tr>
	<td>Obat</td>
	<td>Jumlah</td>
	<td>Harga</td>
	<td>Total</td>

	</tr>
	";
	$d1=mysql_query("select *from m_aporsp2 where idapotikrsp='idapotikrsp'");
	while($d=mysql_fetch_array($d1))
		{
		echo"
		<tr>
		<td>$d[obat]</td>
		<td>$d[jml]</td>
		<td>$d[hg]</td>
		<td>$d[hgt]</td>
		</tr>
		";
		}
		$nl_ia= mysql_result(mysql_query("SELECT SUM(hgt) as Num FROM m_aporsp2 where idapotikrsp='$idapotikrsp'"),0);
	echo"
	<tr>
	<td colspan='3'><b>TOTAL</td>
	<td>Rp. $nl_ia</td>
	</tr>

	</table>
	<br><br>
	<a href='index.php?task=ap_rsp'>Kembali Ke Menu Penjualan Resep</a>
	";
	}

function upap_rsp2()
	{
	$id=$_GET['id'];
	$idapotikrsp=$_GET['idapotikrsp'];
	$a1=mysql_query("select *from m_aporsp2 where id='$id'");
	while($a=mysql_fetch_array($a1))
		{
		$obat=$a[obat];
		$jml=$a[jml];
		$hg=$a[hg];
		$hgt=$a[hgt];
		}
	echo"
	<h1>Edit Penjualan Obat Resep</h1>
	<form method='post' action='index.php?task=pupap_rsp2'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nama Obat</td>
	<td>
	<select name='obat'>
	<option value='$obat'>$obat</option>
	";

	$b1=mysql_query("select *from m_obt order by nama ASC");
	while($b=mysql_fetch_array($b1))
		{
		echo"<option value='$b[nama]'>$b[nama], Rp $b[hgjual]</option>";
		}
		echo"
	</select>
	</td>
	</tr>

	<tr>
	<td width='20%'>Jumlah Obat</td>
	<td><input type='text' name='jml' value='$jml'></td>
	</tr>

	<tr>
	<td width='20%'>Harga Satuan</td>
	<td>$hg</td>
	</tr>

	<tr>
	<td width='20%'>Harga Total</td>
	<td>$hgt</td>
	</tr>
	<tr>
	<td colspan='2'>
	<input type='hidden' name='id' value='$id'>
	<input type='hidden' name='idapotikrsp' value='$idapotikrsp'>
	<input type='submit' value='simpan'>
	</td>
	</tr>
	</table>
	</form>
	";

	}

function pupap_rsp2()
	{
	$id=$_POST['id'];
	$idapotikrsp=$_POST['idapotikrsp'];
	$jml=$_POST['jml'];
	$obat=$_POST['obat'];
	$a1=mysql_query("select *from m_obt where nama='$obat'");
	while($a=mysql_fetch_array($a1))
		{
		$harga=$a[hgjual];
		}
	$hg=$harga;
	$hgt=$harga*$jml;

	$b=mysql_query("update m_aporsp2 set obat='$obat', jml='$jml', hg='$harga', hgt='$hgt' where id='$id'");

	if($b)
		{header("location: index.php?task=ap_rsp2&idapotikrsp=$idapotikrsp&p=Obat Sudah Diubah");}
	else
		{echo"AUTHORIZED AREA";}
	}

function delap_rsp2()
	{
	$id=$_GET[id];
	$idapotikrsp=$_GET['idapotikrsp'];
	$a=mysql_query("delete from m_aporsp2 where id='$id'");
	if($a)
		{header("location: index.php?task=ap_rsp2&idapotikrsp=$idapotikrsp&p=Obat Sudah Dihapus");}
	else
		{echo"AUTHORIZED AREA";}
	}

function pap_rsp2()
	{
	$obat=$_POST['obat'];
	$idapotikrsp=$_POST['idapotikrsp'];
	$jml=$_POST['jml'];
	$a1=mysql_query("select *from m_obt where id='$obat'");
	while($a=mysql_fetch_array($a1))
		{
		$harga=$a[hgjual];
		$nama=$a[nama];
		}
	$hg=$harga;
	$hgt=$harga*$jml;
	$b=mysql_query("insert into m_aporsp2 values ('', '$idapotikrsp', '$nama', '$jml', '$harga', '$hgt')");

	if($b)
		{header("location: index.php?task=ap_rsp2&idapotikrsp=$idapotikrsp&p=Obat Sudah Ditambahkan");}
	else
		{echo"AUTHORIZED AREA";}

	}

	//////////////////////APOTIK UMUM ////////////////

//m_apoum: idapotikrsp, notrans,id, tgl, pasien
//m_apoum2: id,idapotikrsp,obat,jml,hg,hgt

function ap_um()
	{
	echo"
	<h1>Apotik
	<br>Penjualan Obat Umum</h1>
	Masukkan Data Pasien:
	<br><br>
	<form method='post' action='index.php?task=pap_um'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nama Pasien</td>
	<td><input type='text' name='pasien'></td>
	</tr>


	<tr>
	<td colspan='2' align='center'>
	<input type='submit' value='[simpan]'>
	</td>
	</tr>

	</table>
	</form>

	";
	}


function pap_um()
	{
	$tgl=date('Y-m-d');
	$pasien=$_POST['pasien'];
	$dokter=$_POST['dokter'];
	$alm=$_POST['alm'];
	$umur=$_POST['umur'];
	$telp=$_POST['telp'];


		$max=mysql_result(mysql_query("SELECT MAX(idapotikrsp) FROM m_apoum"),0);
		$idapotikrsp=$max+1;
		$max2=mysql_result(mysql_query("SELECT MAX(id) FROM m_apoum where tgl='$tgl'"),0);
		$id=$max2+1;
		$a=mysql_query("insert into m_apoum values ('$idapotikrsp', '$tgl-$id', '$id', '$tgl', '$pasien', '0')");
		if ($a)
			{header("location: index.php?task=ap_um2&idapotikrsp=$idapotikrsp");}
		else
			{echo"AUTORIZED AREA";}



	}


	//no,tanggal, nama, nama pas, nama dok, alm, umur, telp
//nm obat, jml, harga, total
//apotikrsp: idapotikrsp, tgl, pasien, dokter, alm, umur, telp
//apotikrspb: id, idapotikrsp, obat, jml, harga, status

function ap_um2()
	{
	$idapotikrsp=$_GET['idapotikrsp'];
	$a1=mysql_query("select *from m_apoum where idapotikrsp='$idapotikrsp'");
	while($a=mysql_fetch_array($a1))
		{
		$tgl=$a[tgl];
		$pasien=$a['pasien'];
		$dokter=$a['dokter'];
		$alm=$a['alm'];
		$umur=$a['umur'];
		$telp=$a['telp'];
		}
	echo"
	<h1>Penjualan Obat Umum</h1>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nama Pasien</td>
	<td>$pasien</td>
	</tr>


	</table>
	<br>
	";


	////////////////////////////
	echo"
	<form method='post' action='index.php?task=pap_um2'>
	<table class='adminlist'>
	<tr>
	<td colspan='2'><b>PEMBELIAN OBAT</b></td>
	</tr>

	<tr>
	<td>Nama Obat</td>
	<td>Jumlah</td>
	</tr>

	<tr>
	<td>
	<select name='obat'>
	";
	$b1=mysql_query("select *from m_obt order by nama ASC");
	while($b=mysql_fetch_array($b1))
		{
		echo"<option value='$b[nama]'>$b[nama], Rp. $b[hgjual1]</option>";
		}
	echo"
	</select>
	</td>
	<td><input type='text' name='jml'></td>
	</tr>

	<tr>
	<td colspan='2'>
	<input type='hidden' name='idapotikrsp' value='$idapotikrsp'>
	<input type='submit' value='Tambah Obat'>
	</td>
	</tr>
	</table>
	</form>
	";
	$c1=mysql_query("select *from m_apoum where idapotikrsp='idapotikrsp'");
	while($c=mysql_fetch_array($c1))
		{
		$notrans=$c[notrans];
		}
	echo"
	<table class='adminlist'>
	<tr>
	<td colspan='6' align='center'>
	<b>DAFTAR OBAT NO TRANSAKSI: $notrans</b>
	</td>
	</tr>

	<tr>
	<td>Obat</td>
	<td>Jumlah</td>
	<td>Harga</td>
	<td>Total</td>
	<td>Ubah</td>
	<td>Hapus</td>
	</tr>
	";
	$d1=mysql_query("select *from m_apoum2 where idapotikrsp='$idapotikrsp'");
	while($d=mysql_fetch_array($d1))
		{
		echo"
		<tr>
		<td>$d[obat]</td>
		<td>$d[jml]</td>
		<td>$d[hg]</td>
		<td>$d[hgt]</td>
		<td><a href='index.php?task=upap_um2&id=$d[id]&idapotikrsp=$idapotikrsp'>Ubah</a></td>
		<td><a href='index.php?task=delap_um2&id=$d[id]&idapotikrsp=$idapotikrsp'>Hapus</a></td>
		</tr>
		";
		}
		$nl_ia= mysql_result(mysql_query("SELECT SUM(hgt) as Num FROM m_apoum2 where idapotikrsp='$idapotikrsp'"),0);
	echo"
	<tr>
	<td colspan='5'>TOTAL HARGA</td>
	<td>Rp. $nl_ia</td>
	</tr>
	</table>
	<table class='adminlist'>
	<tr>
	<td>
	<br><br>
	<form method='post' action='index.php?task=rekapum'>
	<input type='hidden' name='idapotikrsp' value='$idapotikrsp'>
	<input type='hidden' name='status' value='1'>
	<input type='submit' value='REKAM'>
	</form>
	</td>
	</tr>
	</table>
	";
	}

function rekapum()
	{
	$idapotikrsp=$_POST['idapotikrsp'];
	$status=$_POST['status'];
	$a=mysql_query("update m_apoum set status='$status' where idapotikrsp='$idapotikrsp'");
	$b1=mysql_query("select *from m_apoum2 where idapotikrsp='$idapotikrsp'");
	while($b=mysql_fetch_array($b1))
		{
		$obat=$b[obat];
		$jml=$b[jml];
		}
	$c1=mysql_query("select *from m_obtstok where obat='$obat' and unit='Kamar Obat'");
	while($c=mysql_fetch_array($c1))
		{
		$stok=$c[stok];
		}
	$stok2=$jml-$stok;
	$d=mysql_query("update m_obtstok set stok='$stok2' where obat='obat' and unit='Kamar Obat'");


	//$a=mysql_query("update m_apoum status='$status' where idapotikrsp='$idapotikrsp'");
	if($a and $d)
		{header("location: index.php?task=rekapum2&idapotikrsp=$idapotikrsp");}
	else
		{echo"AUTHORIZED AREA";}
	}

function rekapum2()
	{
	$idapotikrsp=$_GET['idapotikrsp'];
	$a1=mysql_query("select *from m_apoum where idapotikrsp='$idapotikrsp'");
	while($a=mysql_fetch_array($a1))
		{
		$tgl=$a[tgl];
		$pasien=$a['pasien'];
		$dokter=$a['dokter'];
		$alm=$a['alm'];
		$umur=$a['umur'];
		$telp=$a['telp'];
		$notrans=$a[notrans];
		}
	echo"
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nama Pasien</td>
	<td>$pasien</td>
	</tr>



	";
	///////////////////////////

	echo"
	<table class='adminlist'>
	<tr>
	<td colspan='6' align='center'>
	<b>DAFTAR OBAT NO TRANSAKSI: $notrans</b>
	</td>
	</tr>

	<tr>
	<td>Obat</td>
	<td>Jumlah</td>
	<td>Harga</td>
	<td>Total</td>

	</tr>
	";
	$d1=mysql_query("select *from m_apoum2 where idapotikrsp='$idapotikrsp'");
	while($d=mysql_fetch_array($d1))
		{
		echo"
		<tr>
		<td>$d[obat]</td>
		<td>$d[jml]</td>
		<td>$d[hg]</td>
		<td>$d[hgt]</td>
		</tr>
		";
		}
		$nl_ia= mysql_result(mysql_query("SELECT SUM(hgt) as Num FROM m_apoum2 where idapotikrsp='$idapotikrsp'"),0);
	echo"
	<tr>
	<td colspan='3'><b>TOTAL</td>
	<td><b>Rp. $nl_ia</td>
	</tr>
	</table>
	<br><br>
	<a href='index.php?task=ap_um'>Kembali Ke Menu Penjualan Resep</a>
	";
	}

function upap_um2()
	{
	$id=$_GET['id'];
	$idapotikrsp=$_GET['idapotikrsp'];
	$a1=mysql_query("select *from m_apoum2 where id='$id'");
	while($a=mysql_fetch_array($a1))
		{
		$obat=$a[obat];
		$jml=$a[jml];
		$hg=$a[hg];
		$hgt=$a[hgt];
		}
	echo"
	<h1>Edit Penjualan Obat Umum</h1>
	<form method='post' action='index.php?task=pupap_um2'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nama Obat</td>
	<td>
	<select name='obat'>
	<option value='$obat'>$obat</option>
	";
	$b1=mysql_query("select *from m_obt order by nama ASC");
	while($b=mysql_fetch_array($b1))
		{
		echo"<option value='$b[nama]'>$b[nama], Rp. $b[hgjual1]</option>";
		}
		echo"
	</select>
	</td>
	</tr>

	<tr>
	<td width='20%'>Jumlah Obat</td>
	<td><input type='text' name='jml' value='$jml'></td>
	</tr>

	<tr>
	<td width='20%'>Harga Satuan</td>
	<td>$hg</td>
	</tr>

	<tr>
	<td width='20%'>Harga Total</td>
	<td>$hgt</td>
	</tr>
	<tr>
	<td colspan='2'>
	<input type='hidden' name='id' value='$id'>
	<input type='hidden' name='idapotikrsp' value='$idapotikrsp'>
	<input type='submit' value='simpan'>
	</td>
	</tr>
	</table>
	</form>
	";

	}

function pupap_um2()
	{
	$id=$_POST['id'];
	$idapotikrsp=$_POST['idapotikrsp'];
	$jml=$_POST['jml'];
	$obat=$_POST['obat'];
	$a1=mysql_query("select *from m_obt where nama='$obat'");
	while($a=mysql_fetch_array($a1))
		{
		$harga=$a[hgjual1];
		}
	$hg=$harga;
	$hgt=$harga*$jml;

	$b=mysql_query("update m_apoum2 set obat='$obat', jml='$jml', hg='$hg', hgt='$hgt' where id='$id'");

	if($b)
		{header("location: index.php?task=ap_um2&idapotikrsp=$idapotikrsp&p=Obat Sudah Diubah");}
	else
		{echo"AUTHORIZED AREA";}
	}

function delap_um2()
	{
	$id=$_GET[id];
	$idapotikrsp=$_GET['idapotikrsp'];
	$a=mysql_query("delete from m_apoum2 where id='$id'");
	if($a)
		{header("location: index.php?task=ap_um2&idapotikrsp=$idapotikrsp&p=Obat Sudah Dihapus");}
	else
		{echo"AUTHORIZED AREA";}
	}

function pap_um2()
	{
	$obat=$_POST['obat'];
	$idapotikrsp=$_POST['idapotikrsp'];
	$jml=$_POST['jml'];
	$a1=mysql_query("select *from m_obt where nama='$obat'");
	while($a=mysql_fetch_array($a1))
		{
		$harga=$a[hgjual1];
		}
	$hg=$harga;
	$hgt=$harga*$jml;
	$b=mysql_query("insert into m_apoum2 values ('', '$idapotikrsp', '$obat', '$jml', '$hg', '$hgt')");

	if($b)
		{header("location: index.php?task=ap_um2&idapotikrsp=$idapotikrsp&p=Obat Sudah Ditambahkan");}
	else
		{echo"AUTHORIZED AREA";}

	}



/////////////////////////////// APOTIK KARYAWAN //////////////////////
//m_apoum: idapotikrsp, notrans,id, tgl, pasien
//m_apoum2: id,idapotikrsp,obat,jml,hg,hgt

function ap_kar()
	{
	echo"
	<h1>Apotik
	<br>PENJUALAN OBAT KARYAWAN</h1>
	Masukkan Data Pasien:
	<br><br>
	<form method='post' action='index.php?task=pap_kar'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nama Pasien</td>
	<td><input type='text' name='pasien'></td>
	</tr>
	<tr>
	<td width='20%'>ID Karyawan</td>
	<td><input type='text' name='idkar'></td>
	</tr>


	<tr>
	<td colspan='2' align='center'>
	<input type='submit' value='[simpan]'>
	</td>
	</tr>

	</table>
	</form>

	";
	}


function pap_kar()
	{
	$tgl=date('Y-m-d');
	$pasien=$_POST['pasien'];
	$dokter=$_POST['dokter'];
	$idkar=$_POST['idkar'];
	$alm=$_POST['alm'];
	$umur=$_POST['umur'];
	$telp=$_POST['telp'];


		$max=mysql_result(mysql_query("SELECT MAX(idapotikrsp) FROM m_apokar"),0);
		$idapotikrsp=$max+1;
		$max2=mysql_result(mysql_query("SELECT MAX(id) FROM m_apokar where tgl='$tgl'"),0);
		$id=$max2+1;
		$a=mysql_query("insert into m_apokar values ('$idapotikrsp', '$tgl-$id', '$id', '$tgl', '$pasien', '$idkar', '0')");
		if ($a)
			{header("location: index.php?task=ap_kar2&idapotikrsp=$idapotikrsp");}
		else
			{echo"AUTORIZED AREA";}



	}


	//no,tanggal, nama, nama pas, nama dok, alm, umur, telp
//nm obat, jml, harga, total
//apotikrsp: idapotikrsp, tgl, pasien, dokter, alm, umur, telp
//apotikrspb: id, idapotikrsp, obat, jml, harga, status

function ap_kar2()
	{
	$idapotikrsp=$_GET['idapotikrsp'];
	$a1=mysql_query("select *from m_apokar where idapotikrsp='$idapotikrsp'");
	while($a=mysql_fetch_array($a1))
		{
		$tgl=$a[tgl];
		$pasien=$a['pasien'];
		$dokter=$a['dokter'];
		$alm=$a['alm'];
		$umur=$a['umur'];
		$telp=$a['telp'];
		}
	echo"
	<h1>Penjualan Obat Karyawan</h1>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nama Pasien</td>
	<td>$pasien</td>
	</tr>


	</table>
	<br>
	";


	////////////////////////////
	echo"
	<form method='post' action='index.php?task=pap_kar2'>
	<table class='adminlist'>
	<tr>
	<td colspan='2'><b>PEMBELIAN OBAT</b></td>
	</tr>

	<tr>
	<td>Nama Obat</td>
	<td>Jumlah</td>
	</tr>

	<tr>
	<td>
	<select name='obat'>
	";
	$b1=mysql_query("select *from m_obt order by nama ASC");
	while($b=mysql_fetch_array($b1))
		{
		echo"<option value='$b[nama]'>$b[nama], Rp. $b[hgjual2]</option>";
		}
	echo"
	</select>
	</td>
	<td><input type='text' name='jml'></td>
	</tr>

	<tr>
	<td colspan='2'>
	<input type='hidden' name='idapotikrsp' value='$idapotikrsp'>
	<input type='submit' value='Tambah Obat'>
	</td>
	</tr>
	</table>
	</form>
	";
	$c1=mysql_query("select *from m_apokar where idapotikrsp='$idapotikrsp'");
	while($c=mysql_fetch_array($c1))
		{
		$notrans=$c[notrans];
		}
	echo"
	<table class='adminlist'>
	<tr>
	<td colspan='6' align='center'>
	<b>DAFTAR OBAT NO TRANSAKSI: $notrans</b>
	</td>
	</tr>

	<tr>
	<td>Obat</td>
	<td>Jumlah</td>
	<td>Harga</td>
	<td>Total</td>
	<td>Ubah</td>
	<td>Hapus</td>
	</tr>
	";
	$d1=mysql_query("select *from m_apokar2 where idapotikrsp='$idapotikrsp'");
	while($d=mysql_fetch_array($d1))
		{
		echo"
		<tr>
		<td>$d[obat]</td>
		<td>$d[jml]</td>
		<td>$d[hg]</td>
		<td>$d[hgt]</td>
		<td><a href='index.php?task=upap_kar2&id=$d[id]&idapotikrsp=$idapotikrsp'>Ubah</a></td>
		<td><a href='index.php?task=delap_kar2&id=$d[id]&idapotikrsp=$idapotikrsp'>Hapus</a></td>
		</tr>
		";
		}
		$nl_ia= mysql_result(mysql_query("SELECT SUM(hgt) as Num FROM m_apokar2 where idapotikrsp='$idapotikrsp'"),0);
	echo"
	<tr>
	<td colspan='5'>TOTAL HARGA</td>
	<td>Rp. $nl_ia</td>
	</tr>
	</table>
	<table class='adminlist'>
	<tr>
	<td>
	<br><br>
	<form method='post' action='index.php?task=rekapkar'>
	<input type='hidden' name='idapotikrsp' value='$idapotikrsp'>
	<input type='hidden' name='status' value='1'>
	<input type='submit' value='REKAM'>
	</form>
	</td>
	</tr>
	</table>
	";
	}

function rekapkar()
	{
	$idapotikrsp=$_POST['idapotikrsp'];
	$status=$_POST['status'];
	$a=mysql_query("update m_apokar set status='$status' where idapotikrsp='$idapotikrsp'");
	$b1=mysql_query("select *from m_apokar2 where idapotikrsp='$idapotikrsp'");
	while($b=mysql_fetch_array($b1))
		{
		$obat=$b[obat];
		$jml=$b[jml];
		}
	$c1=mysql_query("select *from m_obtstok where obat='$obat' and unit='Kamar Obat'");
	while($c=mysql_fetch_array($c1))
		{
		$stok=$c[stok];
		}
	$stok2=$jml-$stok;
	$d=mysql_query("update m_obtstok set stok='$stok2' where obat='obat' and unit='Kamar Obat'");
	if($a and $d)
		{header("location: index.php?task=rekapkar2&idapotikrsp=$idapotikrsp");}
	else
		{echo"AUTHORIZED AREA";}
	}

function rekapkar2()
	{
	$idapotikrsp=$_GET['idapotikrsp'];
	$a1=mysql_query("select *from m_apokar where idapotikrsp='$idapotikrsp'");
	while($a=mysql_fetch_array($a1))
		{
		$tgl=$a[tgl];
		$pasien=$a['pasien'];
		$idkar=$a['idkar'];
		$alm=$a['alm'];
		$umur=$a['umur'];
		$telp=$a['telp'];
		$notrans=$a[notrans];
		}
	echo"
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nama Karyawan</td>
	<td>$pasien</td>
	</tr>
	<tr>
	<td width='20%'>ID Karyawan</td>
	<td>$idkar</td>
	</tr>

	";
	///////////////////////////

	echo"
	<table class='adminlist'>
	<tr>
	<td colspan='6' align='center'>
	<b>DAFTAR OBAT NO TRANSAKSI: $notrans</b>
	</td>
	</tr>

	<tr>
	<td>Obat</td>
	<td>Jumlah</td>
	<td>Harga</td>
	<td>Total</td>

	</tr>
	";
	$d1=mysql_query("select *from m_apokar2 where idapotikrsp='$idapotikrsp'");
	while($d=mysql_fetch_array($d1))
		{
		echo"
		<tr>
		<td>$d[obat]</td>
		<td>$d[jml]</td>
		<td>$d[hg]</td>
		<td>$d[hgt]</td>
		</tr>
		";
		}

	$nl_ia= mysql_result(mysql_query("SELECT SUM(hgt) as Num FROM m_apokar2 where idapotikrsp='$idapotikrsp'"),0);
	echo"
	<tr>
	<td colspan='3'><b>TOTAL</td>
	<td><b>Rp. $nl_ia</td>
	</tr>
	</table>
	<br><br>
	<a href='index.php?task=ap_kar'>Kembali Ke Menu Penjualan Resep</a>
	";
	}

function upap_kar2()
	{
	$id=$_GET['id'];
	$idapotikrsp=$_GET['idapotikrsp'];
	$a1=mysql_query("select *from m_apokar2 where id='$id'");
	while($a=mysql_fetch_array($a1))
		{
		$obat=$a[obat];
		$jml=$a[jml];
		$hg=$a[hg];
		$hgt=$a[hgt];
		}
	echo"
	<h1>Edit Penjualan Obat Karyawan</h1>
	<form method='post' action='index.php?task=pupap_kar2'>
	<table class='adminlist'>
	<tr>
	<td width='20%'>Nama Obat</td>
	<td>
	<select name='obat'>
	<option value='$obat'>$obat</option>
	";
	$b1=mysql_query("select *from m_obt order by nama ASC");
	while($b=mysql_fetch_array($b1))
		{
		echo"<option value='$b[nama]'>$b[nama], Rp. $b[hgjual2]</option>";
		}
		echo"
	</select>
	</td>
	</tr>

	<tr>
	<td width='20%'>Jumlah Obat</td>
	<td><input type='text' name='jml' value='$jml'></td>
	</tr>

	<tr>
	<td width='20%'>Harga Satuan</td>
	<td>$hg</td>
	</tr>

	<tr>
	<td width='20%'>Harga Total</td>
	<td>$hgt</td>
	</tr>
	<tr>
	<td colspan='2'>
	<input type='hidden' name='id' value='$id'>
	<input type='hidden' name='idapotikrsp' value='$idapotikrsp'>
	<input type='submit' value='simpan'>
	</td>
	</tr>
	</table>
	</form>
	";

	}

function pupap_kar2()
	{
	$id=$_POST['id'];
	$idapotikrsp=$_POST['idapotikrsp'];
	$jml=$_POST['jml'];
	$obat=$_POST['obat'];
	$a1=mysql_query("select *from m_obt where obat='$obat'");
	while($a=mysql_fetch_array($a1))
		{
		$harga=$a[hgjual2];
		}
	$hg=$harga;
	$hgt=$harga*$jml;

	$b=mysql_query("update m_apokar2 set obat='$obat', jml='$jml', hg='$hg', hgt='$hgt' where id='$id'");

	if($b)
		{header("location: index.php?task=ap_kar2&idapotikrsp=$idapotikrsp&p=Obat Sudah Diubah");}
	else
		{echo"AUTHORIZED AREA";}
	}

function delap_kar2()
	{
	$id=$_GET[id];
	$idapotikrsp=$_GET['idapotikrsp'];
	$a=mysql_query("delete from m_apokar2 where id='$id'");
	if($a)
		{header("location: index.php?task=ap_kar2&idapotikrsp=$idapotikrsp&p=Obat Sudah Dihapus");}
	else
		{echo"AUTHORIZED AREA";}
	}

function pap_kar2()
	{
	$obat=$_POST['obat'];
	$idapotikrsp=$_POST['idapotikrsp'];
	$jml=$_POST['jml'];
	$a1=mysql_query("select *from m_obt where nama='$obat'");
	while($a=mysql_fetch_array($a1))
		{
		$harga=$a[hgjual2];
		}
	$hg=$harga;
	$hgt=$harga*$jml;
	$b=mysql_query("insert into m_apokar2 values ('', '$idapotikrsp', '$obat', '$jml', '$hg', '$hgt')");

	if($b)
		{header("location: index.php?task=ap_kar2&idapotikrsp=$idapotikrsp&p=Obat Sudah Ditambahkan");}
	else
		{echo"AUTHORIZED AREA";}

	}




}


/*
byb
m_byalkes: 'id',  '$idpas', '$idobt', '$jml', '$tgl
m_byb1: '', '$idpas', '$dra', '$drb', '$drc', '$drd', '$dre', '$bdra', '$bdrb', '$bdrc', '$bdrd', '$bdre'
m_byb2: '$idpas', '$hprw', '$hgprw', '$jmprw', '$hprw1', '$hgprw1', '$jmprw1', '$prwk', '$jmprwk'
m_byb3: '$idpas', '$alat', '$balat', '$suntik' , '$bsuntik', '$obat', '$bobat', '$labor', '$blabor', '$kapas', '$bkapas'
m_byb4: 'idpas', '$cuci', '$bcuci', '$admin', '$badmin', '$rehab', '$brehab', '$telp', '$btelp', '$amb', '$bamb'
m_byb5: '$idpas', '$lain1', '$lain2', '$lain3', '$lain4', '$blain1', '$blain2', '$blain3', '$blain4', '$kwt'
m_bysusu: '', '$idpas', '$tgl', '$susu', '$rp', '$lapor'
m_konfdok: id,nama,spesialis,rate
m_obtbl: '', '$idsupplier', '$tanggal', '$obat', '$faktur', '$jml', '$satuan', '$hgsatuan', '$hgtotal', '$potongan', '$ppn', '$tagihan'
m_obtklr: '', '$namaobt', '$jmlreal', '$unit', '$tanggal'
m_obtmutasi: '', '$obat', '$jumlah', '$tanggal', '$dari', '$ke'
m_obtstok: '$zb', '$obat', '0', 'Kamar Bersalin'
m_obtsup: '', '$nama', '$cabang', '$alamat', '$telp'
m_pasienby:'$idby', '$idpas', '$id_by', '$nama', '$tgl', '$jk', 'ket1', 'ket2'
m_pasienplg:'', '$idpas', '$ortu', '$nama', '$alm', '$dok', '$ortuttd', '$tgl'
m_poliabs: '', '$id2', idpas'$z2$blnmsk$thnmsk$poli', '$tglmsk', '$blnmsk', '$thnmsk'
m_poliantri: '$id', '$no', '$idpas', '$tgl', '$bln', '$thn'
m_polidiagnosa: '', '$idpas', '$diagnosa', '$resep', '$tgl'
m_polipas: '', idpas'$z2$blnmsk$thnmsk$poli', '$nama', '$norm', tgllhr'$tgllhr-$blnlhr-$thnlhr', '$umur', '$jk', '$agama', '$swm', '$umurswm', '$kerswm', '$alm', '$rt-$rw', '$kec', '$kota', '$telp'
m_poliresep: '', '$idresep', '$total'
m_politensi: '', '$idpas', '$tgl', '$bb', '$tensi', '$ket'
m_rek:'', '$no', '$sub', '$status'
m_rekdpt:'', '$norek', '$jumlah', '$tanggal', '$bln-$thn'
m_rekklr:'', '$norek', '$jumlah', '$tanggal', '$bln-$thn'
m_reksub:'idrek', '$sub', '$norek', '$nama'
m_rjk:'', '$idpas', '$kpd', '$di', '$umur', '$diag', '$ana', '$prk', '$trp', '$tgl', '$dok'
m_srtmt:'', '$idpas', '$mayat', '$tgl', '$nama', '$jk', '$umur', '$umur1', '$alm', '$jm', '$wkt', '$tgl2', '$dok'





*/

?>