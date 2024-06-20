<?php
$url = 'https://fastcargotracking.com/tracking';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

header('Content-Type: text/html');
echo $response;
?>
