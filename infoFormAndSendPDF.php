<?php

require_once("helpers.php");

$table = array_chunk($_POST["table"], 4);

$formForPrint = include_template("formForPrint.php", [
    "generalNameOfHospital" => $_POST["generalNameOfHospital"] ?? "",
    "generalDate" => $_POST["generalDate"] ?? "",
    "generalNameDoctor" => $_POST["generalNameDoctor"] ?? "",
    "generalFIOPatient" => $_POST["generalFIOPatient"] ?? "",
    "sex" => $_POST["sex"] ?? "",
    "table" => $table,
    "impressions" => $_POST["impressions"] ?? "",
    "materials" => $_POST["materials"] ?? [],
    "tooth" => $_POST["tooth"] ?? [],
    "tooth_link" => $_POST["tooth-link"] ?? [],
    "sideGroup" => $_POST["sideGroup"] ?? "",
    "toothColorFrontTop" => $_POST["toothColorFrontTop"] ?? "",
    "toothColorFrontMiddle" => $_POST["toothColorFrontMiddle"] ?? "",
    "toothColorFrontBottom" => $_POST["toothColorFrontBottom"] ?? "",
    "sharpEdge" => $_POST["sharpEdge"] ?? "",
    "sharpEdgeOther" => $_POST["sharpEdgeOther"] ?? "",
    "cult" => $_POST["cult"] ?? "",
    "shapeTooth" => $_POST["shapeTooth"] ?? "",
    "shapeProm" => $_POST["shapeProm"] ?? "",
    "shapeDes" => $_POST["shapeDes"] ?? "",
    "messagePhoto" => $message ?? "",
    "comments" => $_POST["comments"] ?? "",
]);

$name = 'Заказ_наряд_' . $_POST["generalFIOPatient"] . "_" . date('d.m.Y')  . ".html";

if (!file_exists('./order_forms/' . $name)) {
    $handle = fopen('./order_forms/' . $name,'w');
    fwrite($handle, $formForPrint);
    fclose($handle);
}

print $formForPrint;
