<?php



function pass($pass){
    return password_hash($pass, PASSWORD_DEFAULT);  //encryption
}