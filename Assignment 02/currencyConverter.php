<?php


function converter($type){

    $amount = 800;
    $rate = 0;
    $type = '';


    switch($type){
        case 'USD':
            $rate = 85.46;
            break;
        
        case 'INR':
            $rate = 1.13;
            break;
        
        case 'EURO':
            $rate = 95.45;
            break;
        
        case 'CAD':
            $rate = 60.45;
            break;
        
        case 'YEN':
            $rate = 0.75;
            break;
        
        default:
            $rate = 0;
            break;
    }

    
    $bdt = $amount * $rate;
    return "{$amount} {$type} = {$bdt} BDT";  
}