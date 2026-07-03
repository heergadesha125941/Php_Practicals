<?php
// strings functions are built-in functions
$str1 = "  heer" ;
$str2 = "gadesha" ;

echo $str1 . " " .$str2;
echo "<br>";
print($str1 . " " .$str2);
echo "<br>";
echo strlen($str1);
echo "<br>";
$trimString = trim($str1);
echo strlen($trimString);
echo "<br>";
echo strrev($str1);
echo "<br>";
echo strtoupper($str2);
echo strtolower($str2);
echo "<br>";
echo strcmp($str1,$str2);
echo "<br>";
echo strstr($str1,"e");
echo "<br>";
echo stristr($str1,"E");
echo "<br>";
echo ucfirst("i am student in MU");
echo "<br>";
echo ucwords("i am student in MU");




?>