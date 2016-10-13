<?php
$access_token = 'hQv6Jz3kYd/wPmXvmC444RXFIGqVCeF/72H5bLUqfufre1L5epW5KARADclXoq2Nhvrbu0+6dT2M2o2W6V5vw4MwRbe+8mwdDsN++Rx4FP4yY2wYAaG0f1gXEbqwpBDWiUVzmyySZDNaJ1P5K8BCzgdB04t89/1O/w1cDnyilFU=';
$proxy = 'http://fixie:kbFnP902jHULYS6@velodrome.usefixie.com:80';
$proxyauth = 'fixie:kbFnP902jHULYS6';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
$result = curl_exec($ch);
curl_close($ch);

echo $result;