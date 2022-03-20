<?php

include_once "./result.php";
include_once "./ageCalculator.php";
include_once "./multiplicationTable.php";
include_once "./upper_lower.php";
include_once "./increamentDecrement.php";
include_once "./loop2.php";
include_once "./loop1.php";
include_once "./captcha.php";
include_once "./otp.php";
include_once "./password.php";
include_once "./currencyConverter.php";
include_once "./bodyMass.php";
include_once "./area.php";


echo "<b>Result</b>";
echo "<br>";
//echo gradeChecker(20);
echo "<br>";
echo "<br>";

echo "<b>Age Calculator</b>";
echo "<br>";
//enter your date of birth in given format "1/1/1993"
//echo ageCalc("1/1/1993");
echo "<br>";
echo "<br>";

echo "<b>Multiplication Table</b>";
echo "<br>";
//multi();
echo "<br>";
echo "<br>";

echo "<b>Uppercase Lowercase</b>";
//echo uppercaseLowercase('Taymur','u'); 
echo "<br>";
echo "<br>";

echo "<b>Increment Decrement</b>";
echo "<br>";
//echo inc_dec(50);
echo "<br>";
echo "<br>";

echo "<b>DivideByEleven</b>";
echo "<br>";
//echo divideByEleven();
echo "<br>";
echo "<br>";

echo "<b>DivideBy3or4</b><br>";
//divibeBy3and4(500);
echo "<br><br>";

echo "<b>Captcha Code</b>";
$captcha = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
echo "<br>";
//echo captcha($captcha);
echo "<br><br>";

echo "<b>OTP</b>";
$otp = '0123456789';
echo "<br>";
//echo otp($otp);
echo "<br><br>";

echo "<b>Password</b>";
$pass = 'ilovemymoth3r';
echo "<br>";
//echo pass($pass);
echo "<br><br>";

echo "<b>Currency Converter</b>";
$type = 'EURO';
echo "<br>";
//echo converter($type);
echo "<br><br>";

echo "<b>Body Mass</b>";
echo "<br>";
//echo bodyMass(73,1.7);
echo "<br><br>";

echo "<b>Area</b>";
echo "<br>";
echo area('s',2);
echo "<br><br>";















