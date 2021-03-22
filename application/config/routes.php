<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'users/index';
$route['register'] = 'users/register';
$route['resetpassword'] = 'users/resetpwd';
$route['student-form'] = 'StudentController/index';
$route['student-details'] = 'StudentController/student_details';
$route['student-edit/(:any)'] = 'StudentController/student_edit/$1';

$route['logout'] = 'users/logout';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
