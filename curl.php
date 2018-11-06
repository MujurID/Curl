<?php
while(1){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://geevv.com/search?q=MujurID&type=web");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 1);
$headers = array(
"Host: geevv.com",
"Connection: keep-alive",
"Upgrade-Insecure-Requests: 1",
"Save-Data: on",
"User-Agent: Mozilla/5.0 (Linux; Android 7.0; Redmi Note 4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.80 Mobile Safari/537.36",
"Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8",
"Referer: https://geevv.com/search?q=MujurID&type=web",
"Accept-Encoding: gzip, deflate, br",
"Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
"Cookie: __cfduid=d539cbb77af2174bc4c6e56fe0cdb30711541063620; __smVID=c9e0b994b5228a295dd8b62623a5b516d7bbd6626f6c955483526c1630d807d3; _ga=GA1.2.749746428.1541063625; dashboard-popup=1; _gid=GA1.2.869184855.1541500878; _fbp=fb.1.1541500879288.2116556437; remember_web_59ba36addc2b2f9401580f014c7f58ea4e30989d=eyJpdiI6Im9Nb3E2bHYxU2oxMzQ3YzBnUUh0RVE9PSIsInZhbHVlIjoiMVMwOXRnUVh0XC8rYVJwM3hoTDlvck1MY3BVRFIzZlhqak5ZVWxYOGdSamhHamRXS0JDeTYyVXphM1NOYkZsV3dtZGJlaThOSDNLc0VpUGtlS1RaRUtZSWpBZjladEpGOUU5TTdpUHZjb2FFPSIsIm1hYyI6ImQwODZjMDkyOTI5NDBkYzQwMDUxMDcyYjA3MDc1NmI4NzcyMmQ2MjJhYTMwYzZmNGZlMTc5ZGE2MTE0ZGU0MDEifQ%3D%3D; laravel_session=a3b46d4a3e0ad1195f8287602394059f57c01465; __smToken=9Z2H6CYW0F4g36RBOg1OsbOI; XSRF-TOKEN=eyJpdiI6InFkaFl2a21qTDIyVnQ4ZmN1WWZ3cEE9PSIsInZhbHVlIjoiNjdoTHBJSDlGXC9xVWFtQmhLV0R1YXhIYjd4XC8xNmh0aWU1WnkzXC84eFpFXC9jVG9rSXBlVGx2Q0FFbnk3S0hPY0FxQUJocEFYY3grdmFLMDdIcnErUnhnPT0iLCJtYWMiOiI2NTBhMTc1MGViYjI1NDRmNzY3ZjIyYzJkNzZlYzg3YzdkZDE1YzU5YjNjYWI5YmRlNDc3YWEyOWEyNDc0YTdmIn0%3D"
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
$rand = rand(0,9);
echo "OK!$rand";
curl_close ($ch);
}