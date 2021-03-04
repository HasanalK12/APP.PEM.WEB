<?php
/*Operator aritmatika merupakan operator untuk melakukan operasi aritmatika.

Operator aritmatika terdiri dari:

Nama Operator			Simbol
Penjumlahan				  +
Pengurangan				  -
Perkalian			      *
Pemangkatan			      **
Pembagian	 			  /
Sisa Bagi	              %
*/
 
/* dalam proses eksekusi operator aritmatika dari penjumlahan sampai perpangkatan cukup kita buat saja variabel operandnya
dan untuk variabel operatornya serta variabel hasil, bisa disesuaikan sesuai selera masing-masing seperti contoh dibawah ini */
$x=7;//variabel operand1
$y=7;//variabel operand2

// penjumlahan
$z = $x + $y; //nah variabel hasil disini saya buat sebagai "$z" dan untuk operatornya saya kasih yang tipe penjumlahan "+"
echo "$x+$y=$z";
echo "<hr>";
// pengurangan
$z = $x - $y;
echo "$x-$y=$z";
echo "<hr>";
// perkalian
$z = $x * $y;
echo "$x*$y=$z";
echo "<hr>";
// pembagian
$z = $x / $y;
echo "$x/$y=$z";
echo "<hr>";
// sisabagi 
$z = $x % $y;
echo "$x%$y=$z";
echo "<hr>";
// pangkat
$z = $x**$y;
echo "$x**$y=$z";
echo "<hr>";
?>