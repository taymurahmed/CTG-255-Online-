<?php

function multi(){
    for($i=2; $i<=5; $i++){
        for($j=1;$j<=10; $j++){
            echo "{$i} X {$j} = ".$i*$j;
            echo "<br>";
        }
        echo "<br>";
    }
}