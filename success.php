<?php
include 'setting.php';

$ref = $_GET['refId'];

$data =[
    'amt'=>$actualamount,
    'rid'=> $ref,
    'pid'=>'ThuloTech9',
    'scd'=> $merchant_code
];

    $curl = curl_init($fraudcheck_url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    echo $response;
 
    curl_close($curl);
    
    if(strpos(  $response, "Success") !== false){
        header("Location: https://drive.google.com/file/d/1Mab2MK6zmQzCUFrWpC8DVdc_tGqwCUMK/view?usp=drive_open");
    } else{
         header("Location: https://brp.com.np/esewa");
    }

?>