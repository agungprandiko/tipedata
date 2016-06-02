<?php
//belajar tipe data 
/*komentar
operator
1. logika (and, &&, or, ||, xor, !)
2. perbandingan (==, ===, !=, <>, !==, <,>,<=, =>)
3. aritmatika (+,-, *,/,%)
4. bitwise (&,|,^)
5. penugasan (=)
6. string (.)
*/
#komentar

$kelas = "13540008"; //string 
$matkul = "web programing"; //string
$nim = 12345; //integer
$ip = 34; //float
$ipk = false; //boolean

echo "kelas : $kelas <br>";
echo "mata kuliah  : $matkul <br>";
print "NIM : ". $nim; 
print "<br>";
printf("IP : %.4f<br>", $ip);

//nama : agung prandiko
//nim : 13540008

if ($ipk)
	echo "IPK : LULUS";
else
	echo"IPK : TIDAK LULUS";





?>
