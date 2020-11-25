<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'general';
$route['template'] = 'general/template';

$route['dashboard'] = 'general';


$route['login'] = 'general/login';
$route['logout'] = 'general/logout';

$route['profile'] = 'general/profile';
$route['updateProfile'] = 'general/updateProfile';

$route['department'] = 'master/department';
$route['addDepartment'] = 'master/addDepartment';
$route['createDepartment'] = 'master/createDepartment';
$route['editDepartment/(:any)'] = 'master/editDepartment/$1';
$route['updateDepartment/(:any)'] = 'master/updateDepartment/$1';
$route['deleteDepartment/(:any)'] = 'master/deleteDepartment/$1';

$route['eventType'] = 'master/eventType';
$route['addEventType'] = 'master/addEventType';
$route['createEventType'] = 'master/createEventType';
$route['editEventType/(:any)'] = 'master/editEventType/$1';
$route['updateEventType/(:any)'] = 'master/updateEventType/$1';
$route['deleteEventType/(:any)'] = 'master/deleteEventType/$1';
$route['resetEvent'] = 'master/resetEvent';

$route['manpower'] = 'master/manpower';
$route['addManpower'] = 'master/addManpower';
$route['createManpower'] = 'master/createManpower';
$route['editManpower/(:any)'] = 'master/editManpower/$1';
$route['updateManpower/(:any)'] = 'master/updateManpower/$1';
$route['deleteManpower/(:any)'] = 'master/deleteManpower/$1';

$route['alocation'] = 'master/alocation';
$route['addAlocation'] = 'master/addAlocation';
$route['createAlocation'] = 'master/createAlocation';
$route['editAlocation/(:any)'] = 'master/editAlocation/$1';
$route['updateAlocation/(:any)'] = 'master/updateAlocation/$1';
$route['deleteAlocation/(:any)'] = 'master/deleteAlocation/$1';

$route['event'] = 'master/event';
$route['addEvent'] = 'master/addEvent';
$route['createEvent'] = 'master/createEvent';
$route['editEvent/(:any)'] = 'master/editEvent/$1';
$route['updateEvent/(:any)'] = 'master/updateEvent/$1';
$route['deleteEvent/(:any)'] = 'master/deleteEvent/$1';

$route['schedule'] = 'master/schedule';
$route['createSchedule'] = 'master/createSchedule';

$route['404_override'] = 'general/error';
$route['unauthorized'] = 'general/unauthorized';
$route['translate_uri_dashes'] = FALSE;
