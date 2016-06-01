<?php

$hasil = 75;
$nilai = $hasil;

if($nilai > 0 && $nilai <= 50){
	echo (" Grade E");
}

elseif($nilai > 50 && $nilai <= 60){
 echo (" Grade D");
	}
elseif($nilai > 60 && $nilai <= 70){
 echo (" Grade C");
	}	
	elseif($nilai > 70 && $nilai <= 80){
 echo (" Grade B");
	}
	elseif($nilai > 80 && $nilai <= 100){
 echo (" Grade A");
	}	
	

echo "<br>";

switch($nilai1 = 70){
	case 100 : echo ("nilai anda luar biasa");
	break;
	case 70 : echo (" baik ");
	break;
}
echo "<br>";

for($i=1; $i<=10 ; $i++ ){
	for($j=1; $j<=10 ; $j++ ){
echo "$j";
}
echo "<br>";
}
echo "<br>";

for($i=1; $i<=10; $i++ ){
echo "$i <br>";
}
?>