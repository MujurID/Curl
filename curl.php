<?php
while(1){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://geevv.com/search?q=MujurID&type=web");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 1);
$headers = array(
"Host: geevv.com:443",
"Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8",
"Accept-Encoding: gzip, deflate, br",
"Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
"Cookie: __cfduid=db24e5b6adcefa7f686db45ce054660fb1541067313; dashboard-popup=1; _ga=GA1.2.1007016024.1541212064; __smVID=33a95f6239ec47feb6499da6c4db6a562c14d03c7f033bc663e1f1d693d813a1; _gid=GA1.2.868833967.1541499499; _gat=1; _fbp=fb.1.1541507728101.503760437; __smToken=A3HDRrIiAyKc0G6meEUulS3F; remember_web_59ba36addc2b2f9401580f014c7f58ea4e30989d=eyJpdiI6IksxZkk0TG51TEVGSnJZbDVNd2treVE9PSIsInZhbHVlIjoiMUJuTE0xMTBsdkwxeHNOV2FwVVpHZ2xcLytOVHY1aTBpZEExQzdhZTBvanVqSHVucGdWS2I2U011RjlPZjhsSW5vclZ6b1pHTndmS0tKZDgra3pVdU9TMHJJTDNreUc1WUxRbHplUVIzMTZrPSIsIm1hYyI6ImZhMmEzN2NlNGIxZWU0NTdlOTg0OWEzYzYzYmY1ZTBmZmY4Y2JmMTI4OTc5NmQ1YjUwOGVhNzRiZDFkODBkOTIifQ%3D%3D; laravel_session=262a809c607d420ea32c349ec6e57bb5c1bc7146; XSRF-TOKEN=eyJpdiI6InR3OGcyWkhjWTdJbUluV3NoamlXNWc9PSIsInZhbHVlIjoiNHpPRGthNFVpOFh2eVoyeTc0MzYwWG1ZZmZBWVlHbUNcL3dYUHRKSFZIQUxKZDBiaXp2NkJhWU9weGRud0lseDg1a2pnNHRtR1NGTEtycWhLZFFWelFBPT0iLCJtYWMiOiJjMDEwNmE3MGEwMmQzNWM1NjFlYmY3OTk1ZGU3NzlhMmU3NmExYjNjMTM1MDgyZjhlNTNlODU2YzBlNGNjZjQ4In0%3D",
"Referer: https://geevv.com/search?q=MujurID&type=web",
"Upgrade-Insecure-Requests: 1",
"User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36"
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
$rand = rand(0,9);
echo "OK!$rand";
curl_close ($ch);
}
