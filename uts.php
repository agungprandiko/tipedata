<?php

echo("UTS 12 mei 2016 <br>");

echo("menampilkan bilangan genap & ganjil <br>");


for($ganjil=1;$ganjil<=100; $ganjil=$ganjil+2){
	
	echo("$ganjil ");
}
echo("<br>");
for($genap=2;$genap<=100; $genap=$genap+2 ){
	echo ("$genap ");

}
echo("<br>");
echo("menampilkan 1000 - 5000 <br>");

$a=0;
for($i=0;$i<=4;$i++){
	echo ($a=$a+1000);
echo("<br>");

}


?>