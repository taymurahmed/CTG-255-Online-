<?php



function otp($otp){
    $code = str_shuffle($otp);
    return substr($code,4,4);
}