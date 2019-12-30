<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36");
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_AUTOREFERER, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_URL, "https://apiservice.mol.gov.tw/OdService/rest/datastore/A17030000J-000049-Pd3");
$data = curl_exec($curl);
curl_close($curl);
$json = json_decode($data, true);
print_r($json);

echo "<tr>";
echo "<td>月別</td>";
echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#tw'>新台幣</button></td>";
echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#china'>人民幣</button></td>";
echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#jp'>日圓</button></td>";
echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#korea'>韓元</button></td>";
echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#sp'>新加坡元</button></td>";
echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#eu'>歐元</button></td>";
echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#uk'>英鎊</button></td>";
echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#aus'>澳幣</button></td>";
echo "</tr>";

foreach ($json['result']['records'] as $key => $value) {
    echo "<tr>";
    echo "<td>".$value['月別']."</td>"; 
    echo "<td>".$value['新台幣']."</td>";
    echo "<td>".$value['人民幣']."</td>";
    echo "<td>".$value['日圓']."</td>";
    echo "<td>".$value['韓元']."</td>";
    echo "<td>".$value['新加坡元']."</td>";
    echo "<td>".$value['歐元']."</td>";
    echo "<td>".$value['英鎊']."</td>";
    echo "<td>".$value['澳幣']."</td>";
    echo "</tr>";
}
