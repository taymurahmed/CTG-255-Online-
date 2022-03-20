<?php

function divideByEleven(){
    for ($i=0; $i<=100; $i+=3){
        if($i == 0){
            continue;
        }
        if($i % 11 == 0){
            return $i . "<br>";
            break;
        }
    }
}