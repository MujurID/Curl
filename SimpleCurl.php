<?php
while(1){ // unlimited loop
$handle = curl_init(); // Create a new cURL resource
$url = "https://shopee.co.id/50000-IDR-Google-Play-Gift-Card-Code-i.78114467.1667404789"; // Set the url
curl_setopt($handle, CURLOPT_URL, $url); // The URL to fetch. This can also be set when initializing a session with curl_init()
curl_setopt($handle, CURLOPT_RETURNTRANSFER, 1); // TRUE to return the transfer as a string of the return value of curl_exec() instead of outputting it directly
$output = curl_exec($handle); // Grab URL and pass it to the browser
curl_close($handle); // Close cURL resource, and free up system resources
}
