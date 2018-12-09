<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['logout'] = 'welcome/logout';
$route['admin/dashboard'] = 'welcome/KeHalamanAdmin';
$route['proseslogin'] = 'welcome/login';
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
