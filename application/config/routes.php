<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'general';
$route['template'] = 'general/template';
$route['login'] = 'general/login';
$route['logout'] = 'general/logout';
$route['profile'] = 'general/profile';
$route['department'] = 'master/department';
$route['addDepartment'] = 'master/addDepartment';
$route['createDepartment'] = 'master/createDepartment';
$route['editDepartment/(:any)'] = 'master/editDepartment/$1';
$route['updateDepartment/(:any)'] = 'master/updateDepartment/$1';
$route['deleteDepartment/(:any)'] = 'master/deleteDepartment/$1';
$route['updateProfile'] = 'general/updateProfile';
$route['404_override'] = 'general/error';
$route['translate_uri_dashes'] = FALSE;
