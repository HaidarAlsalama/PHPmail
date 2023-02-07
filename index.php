<?php
//
//error_reporting(E_ALL^E_WARNING^E_NOTICE);
//
//if(PHP_VERSION_ID < 70300)
//{
//    die("I'm sorry your php version is old");
//}
//
////$home = $_SERVER['PHP_SELF'];
//$home = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$home;
////$home = 'http://'.$_SERVER['SERVER_NAME'].$home;
//
//define('_HOME_',$home);
//define('_APPLICATION_NAME_','QR menu');
//define('_VERSION_','V1.2');
//define('_DIR_FROM_ROOT_','/'); /** **/
//define('_COOKIE_NAME_','Rings_QRmenu');
//define('_STYLE_','style/');
//define('_FORCE_SSL_',true);
//define('_HOST_',1); /** **/
//date_default_timezone_set('Asia/Damascus');
//
//require_once 'include/clean.php';
//require_once 'include/session.php';
//require_once 'include/database.php';
//require_once 'include/function.php';
//require_once 'include/upload_image.php';
//require_once 'classes/style.php';
//require_once 'classes/job.php';
//require_once 'phpqrcode/qrlib.php';
//
////dump(json_encode(getUserInfo('all')));
//
//session_start($options);
////dump($_GET);
//$_SESSION['language'] ? define('_LANG_LIST_',$_SESSION['language']) : define('_LANG_LIST_','en'); // ['ar', 'en']
//require_once 'languages/language_'._LANG_LIST_.'.php';
//
//if($_GET['job'] == 'process')
//{
//    require_once 'forMain/ajax.php';
//}
//else if($_GET['job'] == 'api'){
//    require_once 'forMain/api.php';
//}
//else
//{
//    new style();
//    new job();
//    job::out();
//}
//
//
////Array ( [pages] => process [all] => Array ( [0] => nemo [1] => process [2] => process.php ) )
//
//



$to = "haidar.y.alsalama@gmail.com";
$subject = "Code for register a new account";

$message = file_get_contents('page.php');
// add more info
/* $headers .= "Reply-To: The Sender <admin@domain.com>\r\n";
 $headers .= "Return-Path: The Sender <admin@domain.com>\r\n";
 $headers .= "From: sender@byrings.com" ."\r\n" .
     $headers .= "Organization: Sender Organization\r\n";
 $headers .= "MIME-Version: 1.0\r\n";
 $headers .= "Content-type: text/html; charset=utf-8\r\n";
 $headers .= "X-Priority: 3\r\n";
 $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;*/
$headers = array(
    "MIME-Version" => "1.0",
    "Content-type" => "text/HTML; charset=UTF-8",
    "From" => "Byrings",
    "Reply-To" => "<admin@domain.com>"
);

echo 'nemooooooo   =>    ';
if (mail($to, $subject, $message, $headers)) echo 'done';
else echo 'error';




?>