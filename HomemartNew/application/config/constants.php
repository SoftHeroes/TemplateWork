<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);
define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

define('URL','http://divinepaints.in/');
define('BUSINESS_DETAILS','http://api.searchus.in/API/user/business_details');
define('INQUIRY_API_URL','http://api.searchus.in/searchus_api.php');
define('GALLARY_API_URL','http://api.searchus.in/dashboard/welcome/businessgalleryimages');
define('AUTH_KEY','806b3ae0515a9c4b92859791786fbef86102b15b2eae203ebf747d6cd2c99812');
//homemart
define('BUSINESSID','5c2a072f4603cB');
define('CSS',URL.'assets/css/');
define('JS',URL.'assets/js/');
define('IMAGE','https://searchus.in/');
define('FONT',URL.'assets/fonts/');