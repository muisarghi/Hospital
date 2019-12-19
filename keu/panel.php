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
	case 'menu_dptklr':
	pogi::menu_dptklr($option);
	break;
	case 'menu_kaber':
	pogi::menu_kaber($option);
	break;
	case 'menu_ka':
	pogi::menu_ka($option);
	break;
	case 'menu_ko':
	pogi::menu_ko($option);
	break;


	//ACCOUNT ADMIN
	case 'gt_ac':
	pogi::gt_ac($option);
	break;
	case 'progtac':
	pogi::progtac($option);
	break;


	case 'gnobkb':
	pogi::gnobkb($option);
	break;
	case 'gnobkb2':
	pogi::gnobkb2($option);
	break;
	case 'trobkb':
	pogi::trobkb($option);
	break;
	case 'trobkb2':
	pogi::trobkb2($option);
	break;
	case 'gnobkbp':
	pogi::gnobkbp($option);
	break;

	case 'gnobka':
	pogi::gnobka($option);
	break;
	case 'gnobka2':
	pogi::gnobka2($option);
	break;
	case 'trobka':
	pogi::trobka($option);
	break;
	case 'trobka2':
	pogi::trobka2($option);
	break;
	case 'gnobkap':
	pogi::gnobkap($option);
	break;


	case 'trko':
	pogi::trko($option);
	break;
	case 'trko2':
	pogi::trko2($option);
	break;
	case 'klko':
	pogi::klko($option);
	break;
	case 'klko2':
	pogi::klko2($option);
	break;

	case 'pasien':
	pogi::pasien($option);
	break;

	case 'rekening':
	pogi::rekening($option);
	break;
	case 'erekening':
	pogi::erekening($option);
	break;
	case 'perekening':
	pogi::perekening($option);
	break;
	case 'prekening':
	pogi::prekening($option);
	break;
	case 'rek':
	pogi::rek($option);
	break;
	case 'erek':
	pogi::erek($option);
	break;
	case 'perek':
	pogi::perek($option);
	break;
	case 'prek':
	pogi::prek($option);
	break;

	case 'rekklr':
	pogi::rekklr($option);
	break;

	case 'pdpt':
	pogi::pdpt($option);
	break;
	case 'draftpdpt':
	pogi::draftpdpt($option);
	break;
	case 'delepdpt':
	pogi::delepdpt($option);
	break;
	case 'delpdpt':
	pogi::delpdpt($option);
	break;
	case 'epdpt':
	pogi::epdpt($option);
	break;
	case 'pepdpt':
	pogi::pepdpt($option);
	break;
	case 'ppdpt':
	pogi::ppdpt($option);
	break;

	case 'pklr':
	pogi::pklr($option);
	break;
	case 'draftpklr':
	pogi::draftpklr($option);
	break;
	case 'delepklr':
	pogi::delepklr($option);
	break;
	case 'epklr':
	pogi::epklr($option);
	break;
	case 'pepklr':
	pogi::pepklr($option);
	break;
	case 'ppklr':
	pogi::ppklr($option);
	break;

	case 'rekap':
	pogi::rekap($option);
	break;
	case 'prekap':
	pogi::prekap($option);
	break;
	case 'lapta':
	pogi::lapta($option);
	break;
	case 'plapta':
	pogi::plapta($option);
	break;

	case 'pasienx':
	pogi::pasienx($option);
	break;
	case 'pasienxb':
	pogi::pasienxb($option);
	break;


	default:
	pogi::index($option);
	break;
	}


?>