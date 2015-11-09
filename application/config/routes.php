<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['translate_uri_dashes'] = TRUE;
$route['default_controller'] = 'scholarship';
$route['404_override'] = '';

//some custom routes
$route['add'] = 'tracer_controller/add';
$route['view'] = 'tracer_controller/viewTracer';
$route['change/(:any)'] = 'tracer_controller/edit/$1';
$route['changing/(:any)'] = 'tracer_controller/edit_tracer/$1';
$route['remove/(:any)'] = 'tracer_controller/delete_tracer/$1';
$route['tracer'] = 'tracer_controller/index';

$route['record/(:any)/(:any)'] = 'breakdown_controller/insertion/$1/$2';
$route['update/(:any)/(:any)'] = 'breakdown_controller/edit/$1/$2';

$route['delete/(:any)']	 = 'profile_controller/delete_profile/$1';
$route['editing/(:num)'] = 'profile_controller/edit_profile/$1';
$route['edit/(:num)'] = 'profile_controller/to_edit/$1';
$route['finance/(:any)'] = 'breakdown_controller/display_finance/$1';
$route['monitor/(:any)'] = 'profile_controller/monitor/$1';
$route['inserting'] = 'profile_controller/insert_profile';
$route['scholarProfile'] = "profile_controller/index";
$route['searching'] = 'profile_controller/search';
$route['breakdown'] = 'profile_controller/breakdown';


$route['logging-in'] = 'scholarship/login';
$route['sign-up'] = "scholarship/sign-up";
$route['insert'] = "scholarship/insertUser";
$route['login'] = "scholarship/index";
$route['center'] = "scholarship/center";
$route['logout'] = "scholarship/logout";
$route['error'] = "scholarship/login_error";
$route['search'] = 'scholarship/search';

