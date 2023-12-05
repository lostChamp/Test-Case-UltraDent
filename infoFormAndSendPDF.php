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
$table = array_chunk($_POST["table"], 4);


if(isset($_POST["comments"])) {
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
}


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
    "comments1" => $separateForComments["comments1"] ?? "",
    "comments2" => $separateForComments["comments2"] ?? "",
]);

print $formForPrint;
