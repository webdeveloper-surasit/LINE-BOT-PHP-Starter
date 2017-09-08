<?php
$access_token = 'tRtO2I4G8PxDWUuvFf0h1Rttl5TGTu/p3owPKUytOJmTe/6INya4ICWTfITXeNpQ/ytxWqNloFd+/nX5YInvVEA+it6ZB5ZOD1pjlE/wx6rkorspQcNrzx53hhVNLvIgSRNpWjIVmDCTicEX+KsZ7AdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>