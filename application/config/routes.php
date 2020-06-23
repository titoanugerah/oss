<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'general';
$route['template'] = 'general/template';

#ajax
$route['api/login'] = 'general/login';
$route['login'] = 'general/login';
$route['logout'] = 'general/logout';

$route['404_override'] = 'general/error';
$route['translate_uri_dashes'] = FALSE;
