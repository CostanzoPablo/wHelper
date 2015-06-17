<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

/* ROLES */
define('ROLE_USER', 'ROLE_USER');
define('ROLE_ADMIN', 'ROLE_ADMIN');
define('ROLE_SUPERADMIN', 'ROLE_SUPERADMIN');

define('HAS_ROLE_OPTIONAL', true);

/* PAGE SETTINGS */
define('THEME_NAME', 'whelper');
define('PASSWORD_SALT', 'x;9!$2DDYz09+&4uXZ5p8>%hdWu1OV');
define('SERVER_IP', '127.0.0.1');
define('CRON_HASH', 'Q62re2VTfrSYE8QXB0rE');
define('LIMIT', 10);

/* FILE UPLOAD */
define('FILE_UPLOAD_PATH', 'uploads/');
define('FILE_TEMP_UPLOAD_PATH', 'temp_uploads/');
define('FILE_UPLOAD_USERFILE', 'userfile');

/* IMAGES UPLOAD */
define('IMAGE_UPLOAD_EXTENSIONS', 'gif|jpg|png|jpeg');
define('IMAGE_UPLOAD_MAX_SIZE', 3000);
define('IMAGE_UPLOAD_MAX_WIDTH', 1024);
define('IMAGE_UPLOAD_MAX_HEIGHT', 768);

//include "language/en.php";