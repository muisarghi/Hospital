<?php
include ('panel_funct.php');
include ('../inc/inc.php');
	$task=$_GET['task'];

	switch($task)
	{
	case 'index':
	pogi::index($option);
	break;
	case 'dtdr':
	pogi::dtdr($option);
	break;
	case 'tmb_an':
	pogi::tmb_an($option);
	break;
	case 'det_an':
	pogi::det_an($option);
	break;
	case 'proubac':
	pogi::proubac($option);
	break;
	case 'p_r_pass':
	pogi::p_r_pass($option);
	break;
	case 'dft_an':
	pogi::dft_an($option);
	break;
	case 'del':
	pogi::del($option);
	break;
	case 'gt_st':
	pogi::gt_st($option);
	break;
	//ACCOUNT ADMIN
	case 'gt_ac':
	pogi::gt_ac($option);
	break;
	case 'progtac':
	pogi::progtac($option);
	break;

	case 'konf_rg':
	pogi::konf_rg($option);
	break;
	case 'pkonf_rg':
	pogi::pkonf_rg($option);
	break;
	case 'ukonf_rg':
	pogi::ukonf_rg($option);
	break;
	case 'ukonf_rg2':
	pogi::ukonf_rg2($option);
	break;

	case 'konf_rgby':
	pogi::konf_rgby($option);
	break;
	case 'pkonf_rgby':
	pogi::pkonf_rgby($option);
	break;
	case 'ukonf_rgby':
	pogi::ukonf_rgby($option);
	break;
	case 'ukonf_rg2by':
	pogi::ukonf_rg2by($option);
	break;

	case 'konf_by':
	pogi::konf_by($option);
	break;
	case 'ikonf_by':
	pogi::ikonf_by($option);
	break;
	case 'ukonf_by':
	pogi::ukonf_by($option);
	break;
	case 'ukonf_by2':
	pogi::ukonf_by2($option);
	break;

	case 'dok':
	pogi::dok($option);
	break;
	case 'pdok':
	pogi::pdok($option);
	break;
	case 'edok':
	pogi::edok($option);
	break;
	case 'pedok':
	pogi::pedok($option);
	break;
	case 'tiket':
	pogi::tiket($option);
	break;
	case 'ptiket':
	pogi::ptiket($option);
	break;
	case 'dokter':
	pogi::dokter($option);
	break;
	case 'pdokter':
	pogi::pdokter($option);
	break;

	default:
	pogi::index($option);
	break;
	}


?>