<?php
$access_token = 'Abz02RcgEQlS7jvJ7zTiFlO3BqiHY13OlJwd2cXgnuIb2rxNwABHgFjmuR+EuL6Msb4aC+g5SMxbephy+tr0AQuBJsNJIznZxh2v2yQdI5SV0GqucVFZF1dxd1glfmfCnfZqlh7Qr5kPBnAXsrTCqwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
