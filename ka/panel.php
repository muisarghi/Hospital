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

	case 'menu_identpas':
	pogi::menu_identpas($option);
	break;
	case 'menu_kamaranak':
	pogi::menu_kamaranak($option);
	break;
	case 'menu_kamarbayi':
	pogi::menu_kamarbayi($option);
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
	pogi::iostsln($option);
	break;
	case 'iorwysln':
	pogi::iorwysln($option);
	break;
	case 'iostsln2':
	pogi::iostsln2($option);
	break;
	case 'iolapsln':
	pogi::iolapsln($option);
	break;
	case 'iolapsln2':
	pogi::iolapsln2($option);
	break;
	case 'ioots':
	pogi::ioots($option);
	break;
	case 'ioidlp':
	pogi::ioidlp($option);
	break;
	case 'iorsm':
	pogi::iorsm($option);
	break;
	case 'iostm':
	pogi::iostm($option);
	break;
	case 'iottm':
	pogi::iottm($option);
	break;
	case 'ioipo':
	pogi::ioipo($option);
	break;
	case 'io_ipo':
	pogi::io_ipo($option);
	break;
	case 'pio_ipo':
	pogi::pio_ipo($option);
	break;
	case 'eio_ipo':
	pogi::eio_ipo($option);
	break;
	case 'enio_ipo':
	pogi::enio_ipo($option);
	break;
	case 'ioipb':
	pogi::ioipb($option);
	break;
	case 'io_ipb':
	pogi::io_ipb($option);
	break;
	case 'pio_ipb':
	pogi::pio_ipb($option);
	break;
	case 'eio_ipb':
	pogi::eio_ipb($option);
	break;
	case 'iolo':
	pogi::iolo($option);
	break;
	case 'io_lo':
	pogi::io_lo($option);
	break;
	case 'pio_lo':
	pogi::pio_lo($option);
	break;
	case 'eio_lo':
	pogi::eio_lo($option);
	break;
	case 'ioipb2':
	pogi::ioipb2($option);
	break;
	case 'io_ipb2':
	pogi::io_ipb2($option);
	break;
	case 'pio_ipb2':
	pogi::pio_ipb2($option);
	break;
	case 'eio_ipb2':
	pogi::eio_ipb2($option);
	break;
	///////////
	case 'nndiag':
	pogi::nndiag($option);
	break;
	case 'nn_diag':
	pogi::nn_diag($option);
	break;
	case 'pnn_diag':
	pogi::pnn_diag($option);
	break;
	case 'enn_diag':
	pogi::enn_diag($option);
	break;
	case 'enn_diag2':
	pogi::enn_diag2($option);
	break;
	case 'nnots':
	pogi::nnots($option);
	break;
	case 'nnstm':
	pogi::nnstm($option);
	break;
	case 'nnttm':
	pogi::nnttm($option);
	break;
	/////
	case 'nodiag':
	pogi::nodiag($option);
	break;
	case 'noots':
	pogi::noots($option);
	break;
	case 'noidlp':
	pogi::noidlp($option);
	break;
	case 'norsm':
	pogi::norsm($option);
	break;
	case 'nostm':
	pogi::nostm($option);
	break;
	case 'nottm':
	pogi::nottm($option);
	break;
	case 'noipo':
	pogi::noipo($option);
	break;
	case 'noipb':
	pogi::noipb($option);
	break;
	case 'nolo':
	pogi::nolo($option);
	break;
	//////////////

	case 'shbi':
	pogi::shbi($option);
	break;
	case 'sh_bi':
	pogi::sh_bi($option);
	break;
	case 'psh_bi':
	pogi::psh_bi($option);
	break;
	case 'esh_bi':
	pogi::esh_bi($option);
	break;
	//////////////////

	case 'alkesmt':
	pogi::alkesmt($option);
	break;
	case 'palkesmt':
	pogi::palkesmt($option);
	break;
	case 'ealkesmt':
	pogi::ealkesmt($option);
	break;
	case 'ealkesmt2':
	pogi::ealkesmt2($option);
	break;
	case 'alkes_mt':
	pogi::alkes_mt($option);
	break;
	case 'palkes_mt':
	pogi::palkes_mt($option);
	break;
	case 'ealkes_mt':
	pogi::ealkes_mt($option);
	break;
	case 'ealkes_mt2':
	pogi::ealkes_mt2($option);
	break;
	case 'delalkes':
	pogi::delalkes($option);
	break;
	case 'dalkes_mt':
	pogi::dalkes_mt($option);
	break;
	case 'alkespk':
	pogi::alkespk($option);
	break;
	case 'alkes_pk':
	pogi::alkes_pk($option);
	break;
	case 'palkes_pk':
	pogi::palkes_pk($option);
	break;
	case 'mesalkes_pk':
	pogi::mesalkes_pk($option);
	break;
	case 'ealkes_pk':
	pogi::ealkes_pk($option);
	break;
	case 'ealkes_pk2':
	pogi::ealkes_pk2($option);
	break;
	case 'dalkes_pk':
	pogi::dalkes_pk($option);
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
	case 'obat':
	pogi::obat($option);
	break;
	case 'obata':
	pogi::obata($option);
	break;
	case 'pobata':
	pogi::pobata($option);
	break;

	case 'alkesmt':
	pogi::alkesmt($option);
	break;
	case 'palkesmt':
	pogi::palkesmt($option);
	break;
	case 'ealkesmt':
	pogi::ealkesmt($option);
	break;
	case 'ealkesmt2':
	pogi::ealkesmt2($option);
	break;
	case 'alkes_mt':
	pogi::alkes_mt($option);
	break;
	case 'palkes_mt':
	pogi::palkes_mt($option);
	break;
	case 'ealkes_mt':
	pogi::ealkes_mt($option);
	break;
	case 'ealkes_mt2':
	pogi::ealkes_mt2($option);
	break;
	case 'delalkes':
	pogi::delalkes($option);
	break;
	case 'dalkes_mt':
	pogi::dalkes_mt($option);
	break;

	case 'mutasi':
	pogi::mutasi($option);
	break;
	case 'pmutasi':
	pogi::pmutasi($option);
	break;


////////////////
	case 'inotsb':
	pogi::inots($option);
	break;
	case 'in_otsb':
	pogi::in_ots($option);
	break;
	case 'pin_otsb':
	pogi::pin_ots($option);
	break;
	case 'pun_otsb':
	pogi::pun_ots($option);
	break;
	case 'inidlpb':
	pogi::inidlp($option);
	break;
	case 'in_idlpb':
	pogi::in_idlp($option);
	break;
	case 'pin_idlpb':
	pogi::pin_idlp($option);
	break;
	case 'ein_idlpb':
	pogi::ein_idlp($option);
	break;
	case 'pen_idlpb':
	pogi::pen_idlp($option);
	break;
	case 'inrsmb':
	pogi::inrsm($option);
	break;
	case 'in_rsmb':
	pogi::in_rsm($option);
	break;
	case 'pin_rsmb':
	pogi::pin_rsm($option);
	break;
	case 'pun_rsmb':
	pogi::pun_rsm($option);
	break;
	case 'inttmb':
	pogi::inttm($option);
	break;
	case 'in_ttmb':
	pogi::in_ttm($option);
	break;
	case 'pin_ttmb':
	pogi::pin_ttm($option);
	break;
	case 'pen_ttmb':
	pogi::pen_ttm($option);
	break;
	case 'absensib':
	pogi::absensi($option);
	break;
	case 'abs_a1b':
	pogi::abs_a1($option);
	break;
	case 'eabs_a1b':
	pogi::eabs_a1($option);
	break;
	case 'uabsensib':
	pogi::uabsensi($option);
	break;

	case 'delby':
	pogi::delby($option);
	break;
	case 'dafby':
	pogi::dafby($option);
	break;
	case 'daf_by':
	pogi::daf_by($option);
	break;
	case 'edafby':
	pogi::edafby($option);
	break;
	case 'edafby2':
	pogi::edafby2($option);
	break;
	case 'deletee':
	pogi::deletee($option);
	break;
	case 'mes2':
	pogi::mes($option);
	break;
	case 'pppb':
	pogi::ppp($option);
	break;
	case 'ppp1b':
	pogi::ppp1($option);
	break;
	case 'epppb':
	pogi::eppp($option);
	break;
	case 'srtmtb':
	pogi::srtmt($option);
	break;
	case 'srt_mtb':
	pogi::srt_mt($option);
	break;
	case 'psrt_mtb':
	pogi::psrt_mt($option);
	break;
	case 'esrt_mtb':
	pogi::esrt_mt($option);
	break;
	case 'rjkb':
	pogi::rjk($option);
	break;
	case 'rjk1b':
	pogi::rjk1($option);
	break;
	case 'prjkb':
	pogi::prjk($option);
	break;
	case 'erjkb':
	pogi::erjk($option);
	break;
	case 'bpb':
	pogi::bp($option);
	break;
	case 'bp1b':
	pogi::bp1($option);
	break;
	case 'pbpb':
	pogi::pbp($option);
	break;
	case 'pbp1b':
	pogi::pbp1($option);
	break;
	case 'ebpb':
	pogi::ebp($option);
	break;
	case 'ebp1b':
	pogi::ebp1($option);
	break;
	case 'byalkesb':
	pogi::byalkes($option);
	break;
	case 'by_alkesb':
	pogi::by_alkes($option);
	break;
	case 'eby_alkesb':
	pogi::eby_alkes($option);
	break;
	case 'eby_alkes2b':
	pogi::eby_alkes2($option);
	break;
	case 'pby_alkesb':
	pogi::pby_alkes($option);
	break;
	case 'delbb':
	pogi::delb($option);
	break;
	case 'blsusub':
	pogi::blsusu($option);
	break;
	case 'bl_susub':
	pogi::bl_susu($option);
	break;
	case 'pbl_susub':
	pogi::pbl_susu($option);
	break;
	case 'ebl_susub':
	pogi::ebl_susu($option);
	break;
	case 'ebl_susu2b':
	pogi::ebl_susu2($option);
	break;
	case 'mutasib':
	pogi::mutasi($option);
	break;
	case 'pmutasib':
	pogi::pmutasi($option);
	break;

	default:
	pogi::index($option);
	break;
	}


?>