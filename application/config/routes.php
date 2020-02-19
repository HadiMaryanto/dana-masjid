<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['donatur'] = 'DonaturController';
$route['donatur/edit/(:any)'] = 'DonaturController/edit/$1';
$route['donatur/edit'] = 'DonaturController/edit';
$route['donatur/tambah'] = 'DonaturController/tambah';
$route['donatur/delete/(:any)'] = 'DonaturController/delete/$1';

$route['kelompok'] = 'KelompokController';
$route['kelompok/edit/(:any)'] = 'KelompokController/edit/$1';
$route['kelompok/edit'] = 'KelompokController/edit';
$route['kelompok/tambah'] = 'KelompokController/tambah';
$route['kelompok/delete/(:any)'] = 'KelompokController/delete/$1';

$route['tanggungan'] = 'TanggunganController';
$route['tanggungan/tambah'] = 'TanggunganController/tambah';
$route['tanggungan/delete/(:any)'] = 'TanggunganController/delete/$1';

$route['bayar'] = 'BayarController';
$route['bayar/tambah'] = 'BayarController/tambah';

$route['infaq/masuk'] = 'InfaqController';
$route['infaq/masuk/tambah'] = 'InfaqController/tambah';
$route['infaq/masuk/editMasuk'] = 'InfaqController/editMasuk';
$route['infaq/masuk/deleteMasuk/(:any)'] = 'InfaqController/deleteMasuk/$1';

$route['infaq/keluar'] = 'InfaqController/index2';
$route['infaq/keluar/editKeluar'] = 'InfaqController/editKeluar';
$route['infaq/keluar/deleteKeluar/(:any)'] = 'InfaqController/deleteKeluar/$1';

$route['jam'] = 'InfaqController/jam';
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['dashboard'] = 'welcome';
