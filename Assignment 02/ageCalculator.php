<?php


function ageCalc($dob){
    
    //$dob = "01/01/1990";
    $dot = date("y-m-d");
    $d1 = strtotime($dob);
    $d2 = strtotime($dot);
    $ageinsecs = $d2 - $d1;
    $age = $ageinsecs/(60*60*24*365);
    return intval($age);
}