<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] 	= 'landing';

$route['detail/(:any)'] 		= 'landing/detail/$1';
$route['search'] 				= 'landing/search';
$route['page/(:any)'] 			= 'landing/index/$1';
$route['admin/page/(:any)'] 	= 'admin/page/$1';
$route['admin/api/(:any)/(:any)'] 		= 'admin/api/$1/$2';
$route['login'] 				= 'login';

$route['restrict'] 				= 'admin/restrict';
$route['404_override'] 			= 'admin/error';
$route['translate_uri_dashes'] 	= FALSE;
