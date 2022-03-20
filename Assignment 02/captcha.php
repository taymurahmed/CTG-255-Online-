<?php


function captcha($captcha){ 
    $code2 = str_shuffle($captcha); //CAPTCHA
    return substr($code2, 25,6);
}