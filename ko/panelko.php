<?php
include('../inc/inc.php');

include("panel_functko.php");



	$task=$_GET['task'];
	switch($task)
	{
	case 'index':
	m::index($option);
	break;
	case 'dtdr':
	m::dtdr($option);
	break;
	case 'cariin':
	m::cariin($option);
	break;
	case 'mes':
	m::mes($option);
	break;
	case 'del':
	m::del($option);
	break;
	case 'menu_hargaobat':
	m::menu_hargaobat($option);
	break;
	case 'menu_dataobat':
	m::menu_dataobat($option);
	break;
	case 'menu_apotik':
	m::menu_apotik($option);
	break;


	//ACCOUNT ADMIN
	case 'gt_ac':
	m::gt_ac($option);
	break;
	case 'progtac':
	m::progtac($option);
	break;
	//////////////////////////
	case 'konfobt':
	m::konfobt($option);
	break;
	case 'pkonfobt':
	m::pkonfobt($option);
	break;
	case 'obt':
	m::obt($option);
	break;
	case 'eobt':
	m::eobt($option);
	break;
	case 'eobt2':
	m::eobt2($option);
	break;
	case 'pobt':
	m::pobt($option);
	break;
	case 'cobt':
	m::cobt($option);
	break;
	case 'c_obt':
	m::c_obt($option);
	break;
	case 'ec_obt':
	m::ec_obt($option);
	break;
	case 'retobt':
	m::retobt($option);
	break;
	case 'pretobt':
	m::pretobt($option);
	break;
	case 'eretobt':
	m::eretobt($option);
	break;
	case 'peretobt':
	m::peretobt($option);
	break;
	case 'hlgobt':
	m::hlgobt($option);
	break;
	case 'phlgobt':
	m::phlgobt($option);
	break;
	case 'ehlgobt':
	m::ehlgobt($option);
	break;
	case 'pehlgobt':
	m::pehlgobt($option);
	break;

	case 'alkesmt':
	m::alkesmt($option);
	break;
	case 'palkesmt':
	m::palkesmt($option);
	break;
	case 'ealkesmt':
	m::ealkesmt($option);
	break;
	case 'ealkesmt2':
	m::ealkesmt2($option);
	break;
	case 'alkes_mt':
	m::alkes_mt($option);
	break;
	case 'palkes_mt':
	m::palkes_mt($option);
	break;
	case 'ealkes_mt':
	m::ealkes_mt($option);
	break;
	case 'ualkes_mt':
	m::ualkes_mt($option);
	break;
	case 'ealkes_mt2':
	m::ealkes_mt2($option);
	break;
	case 'delalkes':
	m::delalkes($option);
	break;
	case 'dalkes_mt':
	m::dalkes_mt($option);
	break;
	case 'supplier':
	m::supplier($option);
	break;
	case 'isupplier':
	m::isupplier($option);
	break;
	case 'dsupplier':
	m::dsupplier($option);
	break;
	case 'esupplier':
	m::esupplier($option);
	break;
	case 'esupplier2':
	m::esupplier2($option);
	break;
	case 'beli':
	m::beli($option);
	break;
	case 'ibeli':
	m::ibeli($option);
	break;
	case 'dbeli':
	m::dbeli($option);
	break;
	case 'delbeli':
	m::delbeli($option);
	break;

	case 'stok':
	m::stok($option);
	break;
	case 'pstok':
	m::pstok($option);
	break;
	case 'stok2':
	m::stok2($option);
	break;
	case 'pstok2':
	m::pstok2($option);
	break;

	case 'mutasi':
	m::mutasi($option);
	break;
	case 'pmutasi':
	m::pmutasi($option);
	break;

	case 'ap_rsp':
	m::ap_rsp($option);
	break;
	case 'pap_rsp':
	m::pap_rsp($option);
	break;
	case 'ap_rsp2':
	m::ap_rsp2($option);
	break;
	case 'pap_rsp2':
	m::pap_rsp2($option);
	break;
	case 'upap_rsp2':
	m::upap_rsp2($option);
	break;
	case 'pupap_rsp2':
	m::pupap_rsp2($option);
	break;
	case 'delap_rsp2':
	m::delap_rsp2($option);
	break;
	case 'rekaprsp':
	m::rekaprsp($option);
	break;
	case 'rekaprsp2':
	m::rekaprsp2($option);
	break;

	case 'ap_um':
	m::ap_um($option);
	break;
	case 'pap_um':
	m::pap_um($option);
	break;
	case 'ap_um2':
	m::ap_um2($option);
	break;
	case 'pap_um2':
	m::pap_um2($option);
	break;
	case 'upap_um2':
	m::upap_um2($option);
	break;
	case 'pupap_um2':
	m::pupap_um2($option);
	break;
	case 'delap_um2':
	m::delap_um2($option);
	break;
	case 'rekapum':
	m::rekapum($option);
	break;
	case 'rekapum2':
	m::rekapum2($option);
	break;

	case 'ap_kar':
	m::ap_kar($option);
	break;
	case 'pap_kar':
	m::pap_kar($option);
	break;
	case 'ap_kar2':
	m::ap_kar2($option);
	break;
	case 'pap_kar2':
	m::pap_kar2($option);
	break;
	case 'upap_kar2':
	m::upap_kar2($option);
	break;
	case 'pupap_kar2':
	m::pupap_kar2($option);
	break;
	case 'delap_kar2':
	m::delap_kar2($option);
	break;
	case 'rekapkar':
	m::rekapkar($option);
	break;
	case 'rekapkar2':
	m::rekapkar2($option);
	break;

	default:
	m::index($option);
	break;
	}


?>