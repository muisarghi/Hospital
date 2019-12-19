<?php
include('../inc/inc.php');
include('panel_funct.php');



$task=$_GET['task'];
	switch($task)
	{
	case 'index':
	pogi::index($option);
	break;

	case 'menu_infopas':
	pogi::menu_infopas($option);
	break;
	case 'menu_infokmr':
	pogi::menu_infokmr($option);
	break;
	case 'menu_pasbar':
	pogi::menu_pasbar($option);
	break;

	case 'dapas_de':
	pogi::dapas_de($option);
	break;
	case 'dapas_an':
	pogi::dapas_an($option);
	break;
	case 'bia_de':
	pogi::dapas_de($option);
	break;
	case 'bia_an':
	pogi::dapas_an($option);
	break;

	case 'kmr_de':
	pogi::kmr_de($option);
	break;
	case 'kmr_an':
	pogi::kmr_an($option);
	break;
	case 'infokmr_de':
	pogi::infokmr_de($option);
	break;
	case 'infokmr_an':
	pogi::infokmr_an($option);
	break;

	case 'in_identpas':
	pogi::in_identpas($option);
	break;
	case 'ein_identpas':
	pogi::ein_identpas($option);
	break;
	case 'uin_identpas':
	pogi::uin_identpas($option);
	break;
	case 'pin_identpas':
	pogi::pin_identpas($option);
	break;

	case 'in_identpasan':
	pogi::in_identpasan($option);
	break;
	case 'ein_identpasan':
	pogi::ein_identpasan($option);
	break;
	case 'uin_identpasan':
	pogi::uin_identpasan($option);
	break;
	case 'pin_identpasan':
	pogi::pin_identpasan($option);
	break;

	case 'gt_ac':
	pogi::gt_ac($option);
	break;
	case 'progtac':
	pogi::progtac($option);
	break;

	default:
	pogi::index($option);
	break;
	}


?>