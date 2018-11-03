<?php
while(1){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://geevv.com/search?q=MujurID&type=web");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 1);
$headers = array();
$headers[] = "Host: geevv.com";
$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 7.0; Redmi Note 4 Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36";
$headers[] = "Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7";
$headers[] = "Referer: https://geevv.com/search?q=MujurID&type=web";
$headers[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8";
$headers[] = "Cookie: __cfduid=d539cbb77af2174bc4c6e56fe0cdb30711541063620; __smVID=c9e0b994b5228a295dd8b62623a5b516d7bbd6626f6c955483526c1630d807d3; _ga=GA1.2.749746428.1541063625; _gid=GA1.2.33532824.1541063625; geevvSession=c1f7c4d1583731125b5d808a5c4099db; dashboard-popup=1; _fbc=fb.1.1541096421443.IwAR2bjpDPz8jUV4Gk8s1nHeg67fWkakpKTATDMUgN-weEQFCz6RsKBkTv0p4; _fbp=fb.1.1541096421450.111367119; __smToken=0PKlplzMthAjCRIGHzaWYfUB; remember_web_59ba36addc2b2f9401580f014c7f58ea4e30989d=eyJpdiI6IlFPWmFIOUVMUk5sWVFpU0JtWko1VHc9PSIsInZhbHVlIjoiQkdVdkZ4YVNLbmNNbzFkeEhHZ2dnY2RMejE2em1QMlJYdzUzRW5iMzZoaVdWd0lBNllzdk4xaWRPcEZvUnVcL3EyYUU5bWxnQWZnZk41Y1huSkFPMEZ6NDhsS3NRXC9kdXZKVExLVlREalc4WT0iLCJtYWMiOiJhY2MzZDk3YjIxNzYyYTgwMjMxNjMyYTMxZGE4YzQyMDkyYTQwZTI2M2JhOWRlNjllOTU0ZWRkMTJlMjlhNTE5In0%3D; laravel_session=e8f081f327693976d282b92e5ce21e62b45c7f1c; XSRF-TOKEN=eyJpdiI6IjU2REFEaUZcL3JHdVwvYVNtY3lFQUVcL3c9PSIsInZhbHVlIjoibmtEaGhKSWJ2eFprbXFcL1Y3SHNlVU5xSTRrUEZiaXR5QmNkSFZGMTdTWFdlSHZWNzZ3akxhdG5XcE0wVjRVQ2YwN3dqMjY3Z0JYaDlxdTZ3SGVTNzlBPT0iLCJtYWMiOiIwZDdlZDc1NjA1MDBhOWM3ZjNlNzU3NTAzZGY3Zjc5NDZjMjMwOGE2MjE5NjUxMzcwZjQ2NDVlMjY4YjAxMmE3In0%3D";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
for( $i = 0; $i<5; $i++ ) {
$result = curl_exec($ch);
$rand = rand(0,9);
echo "OK!$rand";
curl_close ($ch);
}
}
