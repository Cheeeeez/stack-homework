<?php
include_once "Stack.php";
include_once "Function.php";

checkBrackets('8 * 2 / ( 9 - 2)');
echo "<br>";
checkBrackets('7 - 3 / 5 * ( 6 +4 ))');
echo "<br>";
checkBrackets('({ (4 - 6) * 7)');
echo "<br>";
checkBrackets('(8 * 2 / 9 - 2');
echo "<br>";
checkBrackets('s * (s – a) * (s – b * (s – c)');
echo "<br>";
checkBrackets('s * (s – a) * s – b) * (s – c)');
echo "<br>";
checkBrackets('(– b + (b^2 – 4*a*c)^(0.5/ 2*a))');



