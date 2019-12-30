<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36");
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_AUTOREFERER, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_URL, "https://apiservice.mol.gov.tw/OdService/rest/datastore/A17030000J-000049-Pd3");
// $data = curl_exec($curl);
// curl_close($curl);
// $json = json_decode($data, true);
// print_r($json);
$data = curl_exec($curl);
curl_close($curl);
echo $data;