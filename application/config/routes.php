<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "/tests";
$route['404_override'] = '';
$route['home'] = '/tests';
$route['signin'] = '/tests/signin';
$route['register'] = '/tests/register';
$route['user_register'] = '/tests/create';
$route['login']='/tests/login';
$route['dashboard'] = '/tests/dashboard';
$route['users_edit']='/tests/users_edit';
$route['user_edit_information']='/tests/user_edit_information';
$route['user_edit_password'] = '/tests/user_edit_password';
$route['user_edit_description']='/tests/user_edit_description';
$route['admin'] = '/tests/dashboard_admin';
$route['new'] = '/tests/add_new';
$route['show/(:any)'] = '/tests/show/$1';
$route['edit/(:any)'] = '/tests/admin_edit/$1';
$route['delete/(:any)'] = '/tests/remove/$1';
$route['admin_edit/(:any)'] = '/tests/admin_edit/$1';
$route['admin_edit_information/(:any)']='/tests/admin_edit_information/$1';
$route['admin_edit_password/(:any)'] = '/tests/admin_edit_password/$1';
$route['post_message/(:any)'] = '/tests/post/$1';
$route['post_comment/(:any)'] = '/tests/comment/$1';
$route['logoff'] = '/tests/destroy';
//end of routes.php