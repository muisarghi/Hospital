<?php
include('../inc/inc.php');
include('panel_funct.php');



$task=$_GET['task'];
	switch($task)
	{
	case 'index':
	pogi::index($option);
	break;
	case 'dtdr':
	pogi::dtdr($option);
	break;
	case 'cariin':
	pogi::cariin($option);
	break;
	case 'mes':
	pogi::mes($option);
	break;
	case 'del':
	pogi::del($option);
	break;
	case 'dele':
	pogi::dele($option);
	break;
	case 'menu_account':
	pogi::menu_account($option);
	break;
	case 'menu_pasien':
	pogi::menu_pasien($option);
	break;

	//ACCOUNT ADMIN
	case 'gt_ac':
	pogi::gt_ac($option);
	break;
	case 'progtac':
	pogi::progtac($option);
	break;
	case 'mstdiag':
	pogi::mstdiag($option);
	break;
	case 'pmstdiag':
	pogi::pmstdiag($option);
	break;
	case 'emstdiag':
	pogi::emstdiag($option);
	break;
	case 'pemstdiag':
	pogi::pemstdiag($option);
	break;




	/////

	//////////////


	////////////
	case 'absensi':
	pogi::absensi($option);
	break;
	case 'abs_a1':
	pogi::abs_a1($option);
	break;
	case 'eabs_a1':
	pogi::eabs_a1($option);
	break;
	case 'uabsensi':
	pogi::uabsensi($option);
	break;
	////////////////////DOKTER
	case 'pasien':
	pogi::pasien($option);
	break;
	case 'pasien':
	pogi::pasien($option);
	break;
	case 'antrian':
	pogi::antrian($option);
	break;
	case 'antrianb':
	pogi::antrianb($option);
	break;
	case 'antrianc':
	pogi::antrianc($option);
	break;
	case 'dafantrian':
	pogi::dafantrian($option);
	break;
	case 'tensi':
	pogi::tensi($option);
	break;
	case 'itensi':
	pogi::itensi($option);
	break;
	case 'etensi':
	pogi::etensi($option);
	break;
	case 'diagnosa':
	pogi::diagnosa($option);
	break;
	case 'ediagnosa':
	pogi::ediagnosa($option);
	break;
	case 'idiagnosa':
	pogi::idiagnosa($option);
	break;
	case 'report':
	pogi::report($option);
	break;
	case 'tensi1':
	pogi::tensi1($option);
	break;
	case 'diagnosa1':
	pogi::diagnosa1($option);
	break;
	case 'rekam':
	pogi::rekam($option);
	break;

	////////////// RECEPTIONIST
	case 'pasienr':
	rc::pasien($option);
	break;
	case 'ipasienr':
	rc::ipasien($option);
	break;
	case 'pasien2r':
	rc::pasien2($option);
	break;
	case 'antrianr':
	rc::antrian($option);
	break;
	case 'antrianbr':
	rc::antrianb($option);
	break;
	case 'antriancr':
	rc::antrianc($option);
	break;
	case 'dafantrianr':
	rc::dafantrian($option);
	break;
	case 'tensir':
	rc::tensi($option);
	break;
	case 'itensir':
	rc::itensi($option);
	break;
	case 'etensir':
	rc::etensi($option);
	break;

	/////////////////////////OBT
	case 'resep':
	ob::resep($option);
	break;
	case 'resep1':
	ob::resep1($option);
	break;
	case 'resep2':
	ob::resep2($option);
	break;
	case 'resep3':
	ob::resep3($option);
	break;
	case 'resep4':
	ob::resep4($option);
	break;
	case 'delresep':
	ob::delresep($option);
	break;
	case 'reseprek':
	ob::reseprek($option);
	break;
	case 'mutasi':
	ob::mutasi($option);
	break;
	case 'pmutasi':
	ob::pmutasi($option);
	break;
	case 'struk':
	ob::struk($option);
	break;

	default:
	pogi::index($option);
	break;
	}


?>