<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'general';
$route['template'] = 'general/template';
$route['login'] = 'general/login';
$route['logout'] = 'general/logout';
$route['profile'] = 'general/profile';

$route['404_override'] = 'general/error';
$route['translate_uri_dashes'] = FALSE;
