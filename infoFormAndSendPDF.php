<?php

require_once("helpers.php");
//
//if(!empty($_POST)) {
//    foreach ($_POST as $key => $value) {
//        if (is_array($value)) {
//            foreach ($value as $elKey => $elValue) {
//                print $elKey . " = " . $elValue . "</br>";
//            }
//        } else {
//            print $key . " = " . $value . "</br>";
//        }
//    }
//}

$formForPrint = include_template("formForPrint.php", [

]);

print $formForPrint;

//$curl = curl_init();
//
//curl_setopt_array($curl, [
//    CURLOPT_URL => "https://yakpdf.p.rapidapi.com/pdf",
//    CURLOPT_RETURNTRANSFER => true,
//    CURLOPT_ENCODING => "",
//    CURLOPT_MAXREDIRS => 10,
//    CURLOPT_TIMEOUT => 30,
//    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//    CURLOPT_CUSTOMREQUEST => "POST",
//    CURLOPT_POSTFIELDS => json_encode([
//        'source' => [
//            'html' => $formForPrint
//        ],
//        'pdf' => [
//            'format' => 'A4',
//            'scale' => 1,
//            'printBackground' => true
//        ],
//        'wait' => [
//            'for' => 'navigation',
//            'waitUntil' => 'load',
//            'timeout' => 2500
//        ]
//    ]),
//    CURLOPT_HTTPHEADER => [
//        "X-RapidAPI-Host: yakpdf.p.rapidapi.com",
//        "X-RapidAPI-Key: 0ddd396bcamsh0925d1b7c19236ep15a17bjsnf798d5542356",
//        "content-type: application/json"
//    ],
//]);
//
//$response = curl_exec($curl);
//$err = curl_error($curl);
//
//curl_close($curl);
//
//if ($err) {
//    echo "cURL Error #:" . $err;
//} else {
//    file_put_contents("отчет_по_форме.pdf", $response);
//}