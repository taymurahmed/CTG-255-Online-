<?php


function bodyMass($w, $h){
    $bmi = $w/($h*$h);
    if($bmi<18.5){
        return "your BMI is {$bmi} and you are underweight";
    }else if($bmi>=18.5 && $bmi<= 24.9){
        return "your BMI is {$bmi} and you are normal";
    }else if($bmi>=25 && $bmi<= 29.9){
        return "your BMI is {$bmi} and you are normal";
    }else if($bmi>=30){
        return "your BMI is {$bmi} and you are obesity";
    }
}