<?php

require_once("helpers.php");

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

// Реализация переноса не особо нравится

$maxLenForCommentString = 126;
$commentsLen = strlen($_POST["comments"]);
$separateForComments = [];
$currentOffset = 0;

if($commentsLen > 126) {
    $numberCommentsLine = (int)round($commentsLen / $maxLenForCommentString);
    $i = 1;
    while($i <= $numberCommentsLine) {
        $str = substr($_POST["comments"], $currentOffset, $maxLenForCommentString);
        $separateForComments["comments" . $i] = $str;
        $currentOffset += $maxLenForCommentString;
        $i++;
    }
    $separateForComments["comments" . $i++] = substr($_POST["comments"], $currentOffset);
}else {
    $separateForComments["comments1"] = $_POST["comments"];
}

if($_POST["photo"] !== "emailPhoto") {
    $message = $_POST["photo"];
}

$formForPrint = include_template("formForPrint.php", [
    "generalNameOfHospital" => $_POST["generalNameOfHospital"] ?? "",
    "generalDate" => $_POST["generalDate"] ?? "",
    "generalNameDoctor" => $_POST["generalNameDoctor"] ?? "",
    "generalFIOPatient" => $_POST["generalFIOPatient"] ?? "",
    "sex" => $_POST["sex"] ?? "",
    "photo" => $_POST["photo"],
    "messagePhoto" => $message ?? "",
    "comments1" => $separateForComments["comments1"] ?? "",
    "comments2" => $separateForComments["comments2"] ?? "",
    "comments3" => $separateForComments["comments3"] ?? "",
    "comments4" => $separateForComments["comments4"] ?? "",
    "comments5" => $separateForComments["comments5"] ?? "",
    "comments6" => $separateForComments["comments6"] ?? "",
    "comments7" => $separateForComments["comments7"] ?? "",
    "comments8" => $separateForComments["comments8"] ?? "",
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