<?php

	// if(strpos($_SERVER['HTTP_USER_AGENT'], 'google') 
	// 	or strpos($_SERVER['HTTP_USER_AGENT'], 'Java') 
	// 	or strpos($_SERVER['HTTP_USER_AGENT'], 'FreeBSD') 
	// 	or strpos($_SERVER['HTTP_USER_AGENT'], 'msnbot') 
	// 	or strpos($_SERVER['HTTP_USER_AGENT'], 'Yahoo! Slurp') 
	// 	or strpos($_SERVER['HTTP_USER_AGENT'], 'YahooSeeker') 
	// 	or strpos($_SERVER['HTTP_USER_AGENT'], 'Googlebot') 
	// 	or strpos($_SERVER['HTTP_USER_AGENT'], 'bingbot') 
	// 	or strpos($_SERVER['HTTP_USER_AGENT'], 'crawler')  
	// 	or strpos($_SERVER['HTTP_USER_AGENT'], 'PycURL') 
	// 	or strpos($_SERVER['HTTP_USER_AGENT'], 'facebookexternalhit') !== false) {
                  
    //         $content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Bot ] \r\n";
	// 	    $save=fopen("./bots.txt","a+");
	// 	    fwrite($save,$content);
	// 	    fclose($save);
	// 		header("HTTP/1.0 404 Not Found");exit();

	// }

	// if ($_SERVER['HTTP_USER_AGENT'] == "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727)") {
	// 	$content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Bot ] \r\n";
	// 	$save=fopen("./bots.txt","a+");
	// 	fwrite($save,$content);
	// 	fclose($save);
	// 	header("HTTP/1.0 404 Not Found");
	// 	exit();
    // }

	function blockBot($agent) {
		$content = "#> $agent [ Bot ] \r\n";
		file_put_contents('./bots.txt', $content, FILE_APPEND);
		header("HTTP/1.0 404 Not Found");
		exit();
	}

	$ua = $_SERVER['HTTP_USER_AGENT'];
	$bots = ['google', 'Java', 'FreeBSD', 'msnbot', 'Yahoo! Slurp', 'YahooSeeker', 'Googlebot', 'bingbot', 'crawler', 'PycURL', 'facebookexternalhit'];

	foreach ($bots as $bot) {
		if (strpos($ua, $bot) !== false) {
			blockBot($ua);
		}
	}

	if ($ua === "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727)") {
		blockBot($ua);
	}
?>