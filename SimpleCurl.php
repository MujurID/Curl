<?php
$handle = curl_init();
 
$url = "https://shopee.co.id/50000-IDR-Google-Play-Gift-Card-Code-i.78114467.1667404789";
 
// Set the url
curl_setopt($handle, CURLOPT_URL, $url);
// Set the result output to be a string.
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
 
$output = curl_exec($handle);
 
curl_close($handle);
 
echo $output;