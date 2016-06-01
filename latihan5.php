<?php

echo(" menggunakan IF");

echo("<br>");
$nilai = 40 ;
$grade = $nilai;

if($grade >= 80 && $grade <= 100){
	echo (" grade A");
}
elseif($grade >=70 && $grade < 80){
	echo("grade B");
}
elseif($grade >=60 && $grade <70){
	echo("grade C");
}
elseif($grade >=50 &&$grade < 60){
	echo("grade D");
}
else{
	echo("grade E");
}

echo("<br>");
for($i=1;$i<=10;$i++){
	for($j=1;$j<=3;$j++){
		for($k=1;$k<=10;$k++){
	echo ("$k");
}
echo (" ");
}
echo (" ");
echo ("<br>");
}


?>