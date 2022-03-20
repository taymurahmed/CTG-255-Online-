<?php

function area($type='r', $length=NULL, $width=NULL) {
    $area = '';
    $area_type = '';

    switch ($type) {
        case 'r':
            $area = $length * $width;
            $area_type = 'Rectangle';
            break;
        case 's':
            $area = $length * $length;
            $area_type = 'Square';
            break;
        case 'c':
            $area = 3.14 * $length * $length;
            $area_type = 'Circle';
            break;
                
        default:
        $area = 'Undefined';
        $area_type = 'Undefined';
            break;
    }

    return "Area of this {$area_type} is {$area}";
}