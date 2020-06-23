<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'general';

$route['404_override'] = 'general/error';
$route['translate_uri_dashes'] = FALSE;
