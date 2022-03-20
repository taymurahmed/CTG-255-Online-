<?php

function divibeBy3and4($counter){
    for($i=0;$i<=$counter;$i++){
        if($i%3 == 0 || $i%4 == 0){
            echo $i. "<br>";
        }
    }
}