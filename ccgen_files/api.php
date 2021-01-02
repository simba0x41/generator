<?php
$info = file_get_contents('https://binchekr.com/lookup/' . $_REQUEST['bin']);
$r = json_decode($info);
//$b = json_decode($r->data);
$bin = $r->data[0]->iin_start;
$brand =  $r->data[0]->scheme;
$type = $r->data[0]->type;
$country = $r->data[0]->country;
$bank_name = $r->data[0]->bank_name;
$bank_phone = $r->data[0]->bank_phone;
$country_name = $r->country[0]->country_name; //tiene problema
$country_currencies_name = $r->country[0]->country_currencies_name;
$emoji = $r->emoji[0];
//$country_alpha3Code = $r->country[0]->country_alpha3Code;
/**
echo $r->data[0]->level. "<br>";
echo $r->country[0]->country_callingCodes. "<br>";
echo $r->country[0]->country_region. "<br>";
echo $r->country[0]->country_lat. "<br>";
echo $r->country[0]->country_lng. "<br>";

echo $r->country[0]->country_timezones. "<br>";
echo $r->country[0]->country_numericCode. "<br>";
echo $r->country[0]->country_currencies_code. "<br>";
echo $r->country[0]->country_currencies_symbol. "<br>";
echo $r->country[0]->country_languages_name. "<br>";
echo $r->country[0]->country_topLevelDomain. "<br>";
echo $r->length[0]. "<br>";
echo $r->cvv->name. "<br>";
echo $r->cvv->size. "<br>";

echo $r->message. "<br>";
echo $r->status. "<br>";
echo $r->type. "<br>";
**/

$json = '{"bin":'.$bin.',"brand":"'.$brand.'","type":"'.$type.'","country":"'.$country.'","bank_name":"'.$bank_name.'","emoji":"'.$emoji.'","bank_phone":"'.$bank_phone.'","country_currencies_name":"'.$country_currencies_name.'","country_name":"'.$country_name.'"}';
echo $json;

?>