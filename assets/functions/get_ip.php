<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    function getClientIP() {
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            return trim($ips[0]);
        }

        if (!empty($_SERVER['REMOTE_ADDR'])) {
            return $_SERVER['REMOTE_ADDR'];
        }

        return 'UNKNOWN';
    }

    $client = getClientIP();

    echo $client;

    if (filter_var($client, FILTER_VALIDATE_IP)) {
        $ip = $client;
    } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
        $ip = $forward;
    } else {
        $ip = $remote;
    }
    $_SESSION['_ip_'] = $ip;

    // Lookup geo info
    $IP_LOOKUP = @json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));

    if ($IP_LOOKUP && $IP_LOOKUP->status === 'success') {
        $_SESSION['_LOOKUP_COUNTRY_']  = $IP_LOOKUP->country;
        $_SESSION['_LOOKUP_CNTRCODE_'] = $IP_LOOKUP->countryCode;
        $_SESSION['_LOOKUP_CITY_']     = $IP_LOOKUP->city;
        $_SESSION['_LOOKUP_REGION_']   = $IP_LOOKUP->region;
        $_SESSION['_LOOKUP_STATE_']    = $IP_LOOKUP->regionName;
        $_SESSION['_LOOKUP_ZIPCODE_']  = $IP_LOOKUP->zip;
        $_SESSION['_LOOKUP_REGIONS_']  = "{$IP_LOOKUP->regionName} ({$IP_LOOKUP->region})";
        $_SESSION['_forlogin_']        = "{$IP_LOOKUP->countryCode} - {$ip}";
    }
?>
