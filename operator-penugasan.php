<?php
/*Operator ini adalah operator untuk memberikan tugas kepada variabel. Biasanya digunakan untuk mengisi nilai.
Sama dengan (=) adalah operator penugasan untuk mengisi nilai,   

Nama Operator	                     Simbol
Pengisian Nilai	                       =
Pengisian dan Penambahan	          +=
Pengisian dan Pengurangan	          -=
Pengisian dan Perkalian	              *=
Pengisian dan Pemangkatan      	     **=
Pengisian dan Pembagian	              /=
Pengisian dan Sisa bagi      	      %=
Pengisian dan Peggabungan (string)    .=         

contoh */

$kecepatan = 83;
$waktu     = 3;


//aritmatika..
echo "hasil $kecepatan =" .$kecepatan -=$waktu + 10;// untuk menambahkan operator penugasan jangan didepan operator aritmatika
echo "<b> karena sebelumnya kecepatan diisi nilai 83, maka 83-3+10 </b>";
 echo "<br>";

//penugasan

echo $kecepatan -= 20; 
?>