<?php
/*Operator relasi adalah operator untuk membandingkan dua buah nilai.

Hasil operasi dari operator relasi akan menghasilkan nilai dengan tipe data boolean, yaitu true (benar) dan false (salah).

Nama Operator	          Simbol
Lebih Besar	                >
Lebih Kecil					<
Sama Dengan				== atau ===
Tidak Sama dengan		!= atau !==
Lebih Besar Sama dengan		>=
Lebih Kecil Sama dengan		<=
*/

$a = 6;
$b = 2;

// menggunakan operator relasi lebih besar
$c = $a > $b;
echo "$a > $b: $c";
echo "<hr>";

// menggunakan operator relasi lebih kecil
$c = $a < $b;
echo "$a < $b: $c";
echo "<hr>";

// menggunakan operator relasi lebih sama dengan
$c = $a == $b;
echo "$a == $b: $c";
echo "<hr>";

// menggunakan operator relasi lebih tidak sama dengan
$c = $a != $b;
echo "$a != $b: $c";
echo "<hr>";

// menggunakan operator relasi lebih besar sama dengan
$c = $a >= $b;
echo "$a >= $b: $c";
echo "<hr>";

// menggunakan operator relasi lebih kecil sama dengan
$c = $a <= $b;
echo "$a <= $b: $c";
echo "<hr>";

$total_belanja = 150000;

if($total_belanja > 100000){
    echo "Anda dapat diskon!";
}
echo "<hr>";
echo "<b>jadi fungsi dari operator relasi adalah untuk mencari nilai yang benar dan salah hasilnya menggunakan tipe boolean untuk angka 1 itu bernilai true dan untuk 0 itu bernilai false<b>";

?>