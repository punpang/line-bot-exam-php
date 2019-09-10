<?php
$access_token = 'bQHqCgTyc8yaA4a6BaKXQRd+RhdgnpgSIsARpIkeNKSlkdibiIc16jLJXK9BujUq11TycfqlroJxgw+bHkQst4cgg0HiKGte9feaFgozGWL2M5/gUJZxkNpbOHcwq6kCyz5GVTwgeXdAdVW8Rnu8PwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v2/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
