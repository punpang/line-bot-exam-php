<?php



require "vendor/autoload.php";

$access_token = 'bQHqCgTyc8yaA4a6BaKXQRd+RhdgnpgSIsARpIkeNKSlkdibiIc16jLJXK9BujUq11TycfqlroJxgw+bHkQst4cgg0HiKGte9feaFgozGWL2M5/gUJZxkNpbOHcwq6kCyz5GVTwgeXdAdVW8Rnu8PwdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'c6ebd2ec9dc1cdec5d878df1368fc075';

$pushID = 'Uade4845695bc0684a17dde5a60c4c5c0';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







