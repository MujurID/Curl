<?php
while(1){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://geevv.com/search?q=MujurID&type=web");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 1);
$headers = array();
$headers[] = "Host: geevv.com:443";
$headers[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8";
$headers[] = "Accept-Encoding: gzip, deflate, br";
$headers[] = "Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7";
$headers[] = "Cookie: __cfduid=db24e5b6adcefa7f686db45ce054660fb1541067313; dashboard-popup=1; remember_web_59ba36addc2b2f9401580f014c7f58ea4e30989d=eyJpdiI6Ik1zaEVBbUh4aGtnajFVYzNWckJiUEE9PSIsInZhbHVlIjoicmNcL0d4NUpmRWc1VitBVno0d0JFcDBBeEEzcVdDTlZvc0p1N2RyYnp4SVhZZDI5ajFoZnI1TTFXeVcxN2ZHTG9HK1ZNRUViMWxmTzB4OU1Ic0dtM21IMXZ1RUl5Q3R0MDJFQm5vOHp0dFFVPSIsIm1hYyI6ImU5MjU4YmU3ODg5NWE4YWRkYjBmZGMxZTkxMmYwOTAyMTRmNWQ4NDc0YjVmMWYyOTFmMWQyNTc4NDYzMzg3ZjgifQ%3D%3D; laravel_session=d3bfe926711c8b5a6246904268fccae95d3ec7a0; XSRF-TOKEN=eyJpdiI6IlhDcTNZWWJPVWR2K3Z6V0VUVGk4anc9PSIsInZhbHVlIjoiWXlKdnd3R2NWUFgxQ0lmNG9ZWFR5aGN0TEVJQUlcLzNreHhqdTNHMG80dUtQUUJqaXdYNWpoemMwQVQzOTBiYU1XdjRZcTFWQldDRDVtZkh1TTVrZ1lBPT0iLCJtYWMiOiI5MzYzMGQ3NWViNGQ4ZDQ3NTA0NDQ3M2RiMGEzYzUwMmQ5ZTg4ZjhhMTBkYmIwMjkzYzBkYzhjOWU4NTllNzkzIn0%3D";
$headers[] = "Referer: https://geevv.com/search?q=MujurID&type=web";
$headers[] = "Upgrade-Insecure-Requests: 1";
$headers[] = "User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
for( $i = 0; $i<5; $i++ ) {
$result = curl_exec($ch);
$rand = rand(0,9);
echo "OK!$rand";
curl_close ($ch);
}
}
