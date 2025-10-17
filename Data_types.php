<?php
$z = 5;
var_dump($z); #returns data type and value
echo "<br>";


$y = "Hello world!";
$x = 'Hello world!';

var_dump($y);
echo "<br>";
var_dump($x);
echo "<br>";

$w = 5985;
var_dump($w);
echo "<br>";

$v = 10.365;
var_dump($v);
echo "<br>";

$u = true;
var_dump($u);
echo "<br>";

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<br>";

$t = "Hello world!";
$t = null; #setting a value to null emptys the value
var_dump($t);
echo "<br>";

$s = 5;
var_dump($s);
echo "<br>";
#f you assign a string to the same variable, the type will change to a string
$s = "Hello";
var_dump($s);
echo "<br>";

$r = 5;
$r = (string) $r;#Casting allows you to change data type on variables
var_dump($r);
echo "<br>";

$q = "Adam";
echo "Hello $q <br>";#using double quotes and a variable in the string it returns the value of the variable
echo 'Hello $q <br>';#using single quotes and a variable in the string it returns the name of the variable

echo "letter count of hello word is: " .strlen("Hello world!"). "<br>"; #strlen returns length of a string
echo "word count of hello word is: " . str_word_count("Hello world!"). "<br>";#str_word_count returns length of a string
echo strpos("Hello world!", "world"). "<br>"; #strpos searching for the needle in the haystack and returns where it starts

?>