<?php

function uppercaseLowercase($str,$conv){
    $str = '';
    $conv = '';
    
    switch ($conv) {
        case 'u':
            return strtoupper($str);
            break;
        
        case 'l':
            return strtoupper($str);
            break;
            
        default:
            break;
    }
}