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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['switch_lang/(.*)'] = 'Language_Switcher/switchlang/$1';
$route['default_controller'] = 'User_controller/index';
$route['index'] = 'User_controller/index';
$route['courses'] = 'User_controller/courses';
$route['courses/(.*)'] = 'User_controller/courses/$1';
$route['partners'] = 'User_controller/partners';
$route['contact'] = 'User_controller/contact';
$route['blog'] = 'User_controller/blog';

$route['admin_login'] = 'Admin_controller/index';
$route['admin_login_act'] = 'Admin_controller/login_action';
$route['admin_logout'] = 'Admin_controller/logOut';
$route['admin_dashboard'] = 'Admin_controller/dashboard';


// Course Start
$route['admin_course_create'] = 'Admin_controller/admin_course_create';
$route['admin_course_create_act'] = 'Admin_controller/admin_course_create_act';
$route['admin_course_list'] = 'Admin_controller/admin_course_list';
$route['admin_course_edit/(.*)'] = 'Admin_controller/admin_course_edit/$1';
$route['admin_course_edit_act/(.*)'] = 'Admin_controller/admin_course_edit_act/$1';
$route['admin_course_delete/(.*)'] = 'Admin_controller/admin_course_delete/$1';
// Slider Start
$route['admin_slider_create'] = 'Admin_controller/admin_slider_create';
$route['admin_slider_create_act'] = 'Admin_controller/admin_slider_create_act';
$route['admin_slider_list'] = 'Admin_controller/admin_slider_list';
$route['admin_slider_edit/(.*)'] = 'Admin_controller/admin_slider_edit/$1';
$route['admin_slider_edit_act/(.*)'] = 'Admin_controller/admin_slider_edit_act/$1';
$route['admin_slider_delete/(.*)'] = 'Admin_controller/admin_slider_delete/$1';
// Partners Start
$route['admin_partners_create'] = 'Admin_controller/admin_partners_create';
$route['admin_partners_create_act'] = 'Admin_controller/admin_partners_create_act';
$route['admin_partners_list'] = 'Admin_controller/admin_partners_list';
$route['admin_partners_edit/(.*)'] = 'Admin_controller/admin_partners_edit/$1';
$route['admin_partners_edit_act/(.*)'] = 'Admin_controller/admin_partners_edit_act/$1';
$route['admin_partners_delete/(.*)'] = 'Admin_controller/admin_partners_delete/$1';
// Category Start
$route['admin_category_create'] = 'Admin_controller/admin_category_create';
$route['admin_category_create_act'] = 'Admin_controller/admin_category_create_act';
$route['admin_category_list'] = 'Admin_controller/admin_category_list';
$route['admin_category_edit/(.*)'] = 'Admin_controller/admin_category_edit/$1';
$route['admin_category_edit_act/(.*)'] = 'Admin_controller/admin_category_edit_act/$1';
$route['admin_category_delete/(.*)'] = 'Admin_controller/admin_category_delete/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

