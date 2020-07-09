<?php

function request($url, $headers, $put = null) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	if($put):
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	endif;
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	if($headers):
    curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	endif;
	curl_setopt($ch, CURLOPT_ENCODING, "GZIP");
	return curl_exec($ch);
}

function regis($email, $nomor, $id) {
$url = "https://m.borongbareng.com/api-gateway/service-marketing/app/bargain/help/$id";
//$data = '[{"operationName":"OTPRequest","variables":{"email":"'.$email.'","otpType":"126","mode":"email","otpDigit":4},"query":"query OTPRequest($otpType: String!, $mode: String, $msisdn: String, $email: String, $otpDigit: Int) {\n  OTPRequest(otpType: $otpType, mode: $mode, msisdn: $msisdn, email: $email, otpDigit: $otpDigit) {\n    success\n    message\n    errorMessage\n    __typename\n  }\n}\n"}]';
$headers = array();
$headers [] = "Host: m.borongbareng.com";
$headers [] = "Connection: close";
$headers [] = "Accept: application/json, text/plain, */*";
$headers [] = "language: Indonesian";
$headers [] = "Authorization: $email";
$headers [] = "User-Agent: Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Mobile Safari/537.36";
$headers [] = "Sec-Fetch-Site: same-origin";
$headers [] = "Sec-Fetch-Mode: cors";
$headers [] = "Sec-Fetch-Dest: empty";
$headers [] = "Referer: https://m.borongbareng.com/";
$headers [] = "Accept-Encoding: gzip, deflate";
$headers [] = "Accept-Language: en-US,en;q=0.9";
$headers [] = "Cookie: _ga=GA1.2.513239636.1592924479; _gid=GA1.2.728015094.1593092400; _gat_gtag_UA_164611555_2=1";

$getotp = request($url, $headers);
$json = json_decode($getotp, true);
$a = $json['message'];

if ($json['code'] == 0) {
	echo "$nomor --> berhasil slash\n";
} else {
	echo "$nomor --> $a";
	echo "\n";
}
}

function getno($id) {
$url = "https://m.borongbareng.com/api-gateway/service-marketing/app/bargain/self/detail/$id";
//$data = '[{"operationName":"OTPRequest","variables":{"email":"'.$email.'","otpType":"126","mode":"email","otpDigit":4},"query":"query OTPRequest($otpType: String!, $mode: String, $msisdn: String, $email: String, $otpDigit: Int) {\n  OTPRequest(otpType: $otpType, mode: $mode, msisdn: $msisdn, email: $email, otpDigit: $otpDigit) {\n    success\n    message\n    errorMessage\n    __typename\n  }\n}\n"}]';
$headers = array();
$headers [] = "Host: m.borongbareng.com";
$headers [] = "Connection: close";
$headers [] = "Accept: application/json, text/plain, */*";
$headers [] = "language: Indonesian";
$headers [] = "Authorization: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJBcHAiLCJleHAiOjE1OTMyMTMwNjQsImlhdCI6MTU5MzEyNjY2NCwidXNlciI6IntcImlkXCI6NTA3OTMsXCJuaWNrbmFtZVwiOlwiODkqKio2OTk1NjQ1XCIsXCJ1c2VybmFtZVwiOlwiKDYyKTg5NTM0Njk5NTY0NVwiLFwiYXZhdGFyXCI6XCJodHRwczovL2Jvcm9uZ2JhcmVuZy1oNS5vc3MtYXAtc291dGhlYXN0LTUuYWxpeXVuY3MuY29tL2Rldi8yMDIwMDQxMy9jMGJmOTY5NDNjYTE0YWU0OTZjOTA4MDRhN2YzZjNhZC5qcGdcIixcImxhbmd1YWdlXCI6bnVsbH0ifQ.BZdhJM-k37AKs8XeiZ_mhN0xMPqZo9CL3omeaGuRfkM";
$headers [] = "User-Agent: Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Mobile Safari/537.36";
$headers [] = "Sec-Fetch-Site: same-origin";
$headers [] = "Sec-Fetch-Mode: cors";
$headers [] = "Sec-Fetch-Dest: empty";
$headers [] = "Referer: https://m.borongbareng.com/";
$headers [] = "Accept-Encoding: gzip, deflate";
$headers [] = "Accept-Language: en-US,en;q=0.9";
$headers [] = "Cookie: _ga=GA1.2.513239636.1592924479; _gid=GA1.2.728015094.1593092400; _gat_gtag_UA_164611555_2=1";

$getotp = request($url, $headers);
$json = json_decode($getotp, true);
$a = $json['data']['code'];
return $a;
}
echo "\e[93mKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK\n";
echo "\e[93mKKKKKKKKKKKKKKKKKKKKKK0:lKKd:OKKKKKKKKKKKKKKKKKKKKKK\n";
echo "\e[93mKKKKKKKKKKKKKKKKKKKKKKK;.,:.,0KKKKKKKKKKKKKKKKKKKKKK\n";
echo "\e[93mKKKKKKKKKKKK00000000KKKKl..:KKKK00000000KKKKKKKKKKKK\n";
echo "\e[93mKKKKKKKKKk,..........'dKKOkKKd'..........,kKKKKKKKKK\n";
echo "\e[93mKKKKKKKKd..\e[97m0MMMMMMMMX,.\e[93mcKKKKc.,\e[97mXMMMMMMMM0\e[93m..dKKKKKKKK\n";
echo "\e[93mKKKKKKKc.,\e[97mXMMMMMMMMMMWc\e[93m.;00;.\e[97mcWMMMMMMMMMMX\e[93m,.cKKKKKKK\n";
echo "\e[93mKKKKKK;.:\e[97mWMMMMMMMMMMMMMo\e[93m.''.\e[97moMMMMMMMMMMMMMW\e[93m:.;KKKKKK\n";
echo "\e[93mKKKKKo.,\e[97mMMMMMMMMMMMMMMMMl\e[93m..\e[97mlMMMMMMMMMMMMMMMM\e[93m,.oKKKKK\n";
echo "\e[93mKKKKK0'.\e[97moMMMMMMMMMMMMMMk\e[93m....\e[97mkMMMMMMMMMMMMMMo\e[93m.'0KKKKK\n";
echo "\e[93mKKKKKK0;.:\e[97mWMMMMMMMMMMMd\e[93m.'OO'.\e[97mdMMMMMMMMMMMW\e[93m:.;0KKKKKK\n";
echo "\e[93mKKKKKKKKc.,\e[97mNMMMMMMMMW\e[93m:.;0KK0;.:\e[97mWMMMMMMMMN\e[93m,.cKKKKKKKK\n";
echo "\e[93mKKKKKKKKKd..,,,,,,,,.....''.....,,,,,,,,..dKKKKKKKKK\n";
echo "\e[93mKKKKKKKKKKKOkkkkkkl..lkOOOOOOko..ckkkkkkOKKKKKKKKKKK\n";
echo "\e[93mKKKKKKKKKKKKKKKKKd...''''''''''...lKKKKKKKKKKKKKKKKK\n";
echo "\e[93mKKKKKKKKKKKKKKKKc..xkkkkkkkkkkkkk,.;KKKKKKKKKKKKKKKK\n";
echo "\e[93mKKKKKKKKKKKKKKKo..';;;;;;;;;;;;;;,..cKKKKKKKKKKKKKKK\n";
echo "\e[93mKKKKKKKKKKKKKKKk..:ddddddddddddddc..dKKKKKKKKKKKKKKK\n";
echo "\e[93mKKKKKKKKKKKKKKKKk..;:::::::::::::..xKKKKKKKKKKKKKKKK\n";
echo "\e[93mKKKKKKKKKKKKKKKKK0,..looooooooo'.'OKKKKKKKKKKKKKKKKK\n";
echo "\e[93mKKKKKKKKKKKKKKKKKKK:.'::::::::'.;0KKKKKKKKKKKKKKKKKK\n";
echo "\e[93mKKKKKKKKKKKKKKKKKKKKOdollllllookKKKKKKKKKKKKKKKKKKKK\n";
echo "\e[93mKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK\n";
echo "\e[92m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
echo "\e[93mSLASH BORONG BARENG\n";
echo "\e[91mCreated by Yudistira\n";
echo "\e[92m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
echo "\e[93mMasukan ID: ";
$id = trim(fgets(STDIN));
$getno = getno($id);
//echo "$getno";

$data=file_get_contents("token.txt");
$ex = explode("\n", str_replace("\r", "", $data));
$count = count($ex);
for($i=0;$i<$count;$i++) {
$nomor = 1+ $i;
regis($ex[$i], $nomor, $getno);
}
