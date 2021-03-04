<?php 
/*Operator logika adalah operator untuk melakukan operasi logika seperti AND, OR, dan NOT.

Operator logika terdiri dari:

Nama Operator		  Simbol
Logika AND				&&
Logika OR				||
Negasi/kebalikan/ NOT	!
*/


$a = true;
$b = false;

// variabel $c akan bernilai false
$c = $a && $b;
printf("%b && %b = %b", $a,$b,$c); 
echo "<hr>";

// variabel $c akan bernilai true
$c = $a || $b;
printf("%b || %b = %b", $a,$b,$c);
echo "<hr>";

// variabel $c akan bernilai false
$c = !$a;
printf("!%b = %b", $a, $c);
echo "<hr>";
?>