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
    print(json_encode($_POST, JSON_UNESCAPED_UNICODE));
}