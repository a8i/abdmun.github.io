<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| FrontEnd Config
|--------------------------------------------------------------------------
*/
$config['app_name']			= 'abdulikamenikah';
$config['app_logo_mini']	= 'CMS';
$config['app_logo_lg']		= 'Explore Corp.';
$config['app_version']		= '1.0 Beta';
//for demo purpose...
$config['user_name']		= 'Admin';
$config['user_section']		= 'IT';
$config['user_image']		= 'asset/ui/img/avatar.png';
$config['user_join_date']	= '01/05/2018';

/*
|--------------------------------------------------------------------------
| BackEnd Config
|--------------------------------------------------------------------------
*/
$config['sys_private_key'] = 'DfYDFHowqyMnBGRUcPThYP4gNaogWk3k';
/* model action flag */
$config['sys_model_create']	= 1;
$config['sys_model_update']	= 2;
$config['sys_model_delete']	= 3;

/* email config */
$config['sys_email_sender']			= 'admin@abdulikamenikah.info';
$config['sys_email_sender_name']	= 'Abdul & Ika Menikah Admin';
$config['sys_email_host']			= 'smtp.zoho.com';
$config['sys_email_port']			= '587';	//587
$config['sys_email_user']			= 'admin@abdulikamenikah.info';
$config['sys_email_pass']			= 'doraem0N!';

//seting time zone
date_default_timezone_set("Asia/Jakarta");

/* End of file config_app.php */
/* Location: ./application/config/config_app.php */
