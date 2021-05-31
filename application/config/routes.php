<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'C_signup';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['send_email']="C_signup/send_email_user_data";
