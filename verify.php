<?php
$access_token = 'PU96Iir4+YWm0w10JeM+ayVO8i8b+qqr0vuHZSGX/uq0xwKJuTagE+pblfgqM0M1wxTEY/IsUuMzPrQNYDEQR85ZQtG5Cbo5IBAPgichH1FYHYirlJLpYMaTObDtUA2uNkWtL/fTde2/twvII6053gdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
