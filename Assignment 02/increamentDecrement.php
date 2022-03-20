<?php



function inc_dec($counter){
    $temp = $counter;
    echo "Increment"."<br>";
    for($i=10000; ; $i++) {
        echo $i . "<br>";
        $counter--;
        if($counter == 0){
            break;
        }
    }
    echo "<br>";
    echo "Decrement"."<br>";
    for($i=10000; ; $i--) {
        echo $i . "<br>";
        $counter++;
        if($counter == $temp){
            break;
        }
    }
}