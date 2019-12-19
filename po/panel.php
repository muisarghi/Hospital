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


	//ACCOUNT ADMIN
	case 'gt_ac':
	pogi::gt_ac($option);
	break;
	case 'progtac':
	pogi::progtac($option);
	break;

	case 'in_identpas':
	pogi::in_identpas($option);
	break;
	case 'pin_identpas':
	pogi::pin_identpas($option);
	break;
	case 'ein_identpas':
	pogi::ein_identpas($option);
	break;
	case 'uin_identpas':
	pogi::uin_identpas($option);
	break;
	case 'in_sebabmati':
	pogi::in_sebabmati($option);
	break;
	case 'in_sebabmatid':
	pogi::in_sebabmatid($option);
	break;
	case 'in_sebabmatid2':
	pogi::in_sebabmatid2($option);
	break;
	case 'pin_sebabmati':
	pogi::pin_sebabmati($option);
	break;
	case 'instsln':
	pogi::instsln($option);
	break;
	case 'in_stsln':
	pogi::in_stsln($option);
	break;
	case 'pin_stsln':
	pogi::pin_stsln($option);
	break;
	case 'ein_stsln':
	pogi::ein_stsln($option);
	break;
	case 'instsln2':
	pogi::instsln2($option);
	break;
	case 'in_stsln2':
	pogi::in_stsln2($option);
	break;
	case 'pin_stsln2':
	pogi::pin_stsln2($option);
	break;
	case 'pun_stsln2':
	pogi::pun_stsln2($option);
	break;
	case 'in_rwysln':
	pogi::in_rwysln($option);
	break;
	case 'pin_rwysln':
	pogi::pin_rwysln($option);
	break;
	case 'pun_rwysln':
	pogi::pun_rwysln($option);
	break;
	case 'uin_rwysln':
	pogi::uin_rwysln($option);
	break;
	case 'inrwysln':
	pogi::inrwysln($option);
	break;
	case 'pin_stsln':
	pogi::pin_stsln($option);
	break;
	case 'pin_stsln2':
	pogi::pin_stsln2($option);
	break;
	case 'inlapsln':
	pogi::inlapsln($option);
	break;
	case 'in_lapsln':
	pogi::in_lapsln($option);
	break;
	case 'pin_lapsln':
	pogi::pin_lapsln($option);
	break;
	case 'ein_lapsln':
	pogi::ein_lapsln($option);
	break;
	case 'pen_lapsln':
	pogi::pen_lapsln($option);
	break;
	case 'inlapsln2':
	pogi::inlapsln2($option);
	break;
	case 'in_lapsln2':
	pogi::in_lapsln2($option);
	break;
	case 'pin_lapsln2':
	pogi::pin_lapsln2($option);
	break;
	case 'pen_lapsln2':
	pogi::pen_lapsln2($option);
	break;
	case 'inots':
	pogi::inots($option);
	break;
	case 'in_ots':
	pogi::in_ots($option);
	break;
	case 'pin_ots':
	pogi::pin_ots($option);
	break;
	case 'pun_ots':
	pogi::pun_ots($option);
	break;
	case 'inidlp':
	pogi::inidlp($option);
	break;
	case 'in_idlp':
	pogi::in_idlp($option);
	break;
	case 'pin_idlp':
	pogi::pin_idlp($option);
	break;
	case 'ein_idlp':
	pogi::ein_idlp($option);
	break;
	case 'pen_idlp':
	pogi::pen_idlp($option);
	break;
	case 'inrsm':
	pogi::inrsm($option);
	break;
	case 'in_rsm':
	pogi::in_rsm($option);
	break;
	case 'pin_rsm':
	pogi::pin_rsm($option);
	break;
	case 'pun_rsm':
	pogi::pun_rsm($option);
	break;
	case 'instm':
	pogi::instm($option);
	break;
	case 'in_stm':
	pogi::in_stm($option);
	break;
	case 'pin_stm':
	pogi::pin_stm($option);
	break;
	case 'pun_stm':
	pogi::pun_stm($option);
	break;
	case 'inttm':
	pogi::inttm($option);
	break;
	case 'in_ttm':
	pogi::in_ttm($option);
	break;
	case 'pin_ttm':
	pogi::pin_ttm($option);
	break;
	case 'pen_ttm':
	pogi::pen_ttm($option);
	break;

	//Inpartu Operasi
	case 'iostsln':
	m2::iostsln($option);
	break;
	case 'iorwysln':
	m2::iorwysln($option);
	break;
	case 'iostsln2':
	m2::iostsln2($option);
	break;
	case 'iolapsln':
	m2::iolapsln($option);
	break;
	case 'iolapsln2':
	m2::iolapsln2($option);
	break;
	case 'ioots':
	m2::ioots($option);
	break;
	case 'ioidlp':
	m2::ioidlp($option);
	break;
	case 'iorsm':
	m2::iorsm($option);
	break;
	case 'iostm':
	m2::iostm($option);
	break;
	case 'iottm':
	m2::iottm($option);
	break;
	case 'ioipo':
	m2::ioipo($option);
	break;
	case 'io_ipo':
	m2::io_ipo($option);
	break;
	case 'pio_ipo':
	m2::pio_ipo($option);
	break;
	case 'eio_ipo':
	m2::eio_ipo($option);
	break;
	case 'enio_ipo':
	m2::enio_ipo($option);
	break;
	case 'ioipb':
	m2::ioipb($option);
	break;
	case 'io_ipb':
	m2::io_ipb($option);
	break;
	case 'pio_ipb':
	m2::pio_ipb($option);
	break;
	case 'eio_ipb':
	m2::eio_ipb($option);
	break;
	case 'iolo':
	m2::iolo($option);
	break;
	case 'io_lo':
	m2::io_lo($option);
	break;
	case 'pio_lo':
	m2::pio_lo($option);
	break;
	case 'eio_lo':
	m2::eio_lo($option);
	break;
	case 'ioipb2':
	m2::ioipb2($option);
	break;
	case 'io_ipb2':
	m2::io_ipb2($option);
	break;
	case 'pio_ipb2':
	m2::pio_ipb2($option);
	break;
	case 'eio_ipb2':
	m2::eio_ipb2($option);
	break;
	///////////
	case 'nndiag':
	m2::nndiag($option);
	break;
	case 'nn_diag':
	m2::nn_diag($option);
	break;
	case 'pnn_diag':
	m2::pnn_diag($option);
	break;
	case 'enn_diag':
	m2::enn_diag($option);
	break;
	case 'enn_diag2':
	m2::enn_diag2($option);
	break;
	case 'nnots':
	m2::nnots($option);
	break;
	case 'nnstm':
	m2::nnstm($option);
	break;
	case 'nnttm':
	m2::nnttm($option);
	break;
	/////
	case 'nodiag':
	m2::nodiag($option);
	break;
	case 'noots':
	m2::noots($option);
	break;
	case 'noidlp':
	m2::noidlp($option);
	break;
	case 'norsm':
	m2::norsm($option);
	break;
	case 'nostm':
	m2::nostm($option);
	break;
	case 'nottm':
	m2::nottm($option);
	break;
	case 'noipo':
	m2::noipo($option);
	break;
	case 'noipb':
	m2::noipb($option);
	break;
	case 'nolo':
	m2::nolo($option);
	break;
	//////////////

	case 'shbi':
	m3::shbi($option);
	break;
	case 'sh_bi':
	m3::sh_bi($option);
	break;
	case 'psh_bi':
	m3::psh_bi($option);
	break;
	case 'esh_bi':
	m3::esh_bi($option);
	break;
	//////////////////

	case 'alkesmt':
	m3::alkesmt($option);
	break;
	case 'palkesmt':
	m3::palkesmt($option);
	break;
	case 'ealkesmt':
	m3::ealkesmt($option);
	break;
	case 'ealkesmt2':
	m3::ealkesmt2($option);
	break;
	case 'alkes_mt':
	m3::alkes_mt($option);
	break;
	case 'palkes_mt':
	m3::palkes_mt($option);
	break;
	case 'ealkes_mt':
	m3::ealkes_mt($option);
	break;
	case 'ealkes_mt2':
	m3::ealkes_mt2($option);
	break;
	case 'delalkes':
	m3::delalkes($option);
	break;
	case 'dalkes_mt':
	m3::dalkes_mt($option);
	break;
	case 'alkespk':
	m3::alkespk($option);
	break;
	case 'alkes_pk':
	m3::alkes_pk($option);
	break;
	case 'palkes_pk':
	m3::palkes_pk($option);
	break;
	case 'mesalkes_pk':
	m3::mesalkes_pk($option);
	break;
	case 'ealkes_pk':
	m3::ealkes_pk($option);
	break;
	case 'ealkes_pk2':
	m3::ealkes_pk2($option);
	break;
	case 'dalkes_pk':
	m3::dalkes_pk($option);
	break;
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
	////////////////////
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
	case 'resep':
	pogi::resep($option);
	break;
	case 'resep1':
	pogi::resep1($option);
	break;
	case 'resep2':
	pogi::resep2($option);
	break;
	case 'mutasi':
	m::mutasi($option);
	break;
	case 'pmutasi':
	m::pmutasi($option);
	break;
	default:
	pogi::index($option);
	break;
	}


?>