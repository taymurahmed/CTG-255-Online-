<?php

    function gradeChecker($marks){
        
        switch ($marks) {
            case ($marks <=32 && $marks >0):
                return "F Grade";
                break;
            case ($marks >= 33 && $marks <= 40):
                return "D Grade";
                break;
            
            case ($marks >= 51 && $marks <= 60):
                return "C Grade";
                break;
            case ($marks >= 51 && $marks <= 60):
                return "B Grade";
                break;
            case ($marks >= 61 && $marks <= 70):
                return "A- Grade";
                break;
                
            case ($marks >= 71 && $marks <= 80):
                return "A Grade";
                break;
            case ($marks >= 81 && $marks <= 100):
                return "A+ Grade";
                break;
                                        
            default:
                return "Undefined";
                break;
        }
    }

?>