<?php
if(!empty($_POST)) {
    foreach($_POST as $key => $value) {
        if(is_array($value)) {
            foreach($value as $elKey => $elValue) {
                print $elKey . " = " . $elValue . "</br>";
            }
        }else {
            print $key . " = " . $value . "</br>";
        }
    }


    $url = "http://localhost/forJSON.php";

    $ch = curl_init();

    $payload = json_encode(json_encode($_POST, JSON_UNESCAPED_UNICODE));


    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $payload,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    echo $response;

    curl_close($curl);
}