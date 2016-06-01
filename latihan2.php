<?php

$modal = 5000000;
$laba = 10000000;
$pajak = 0.15;
$bruto = $laba - $modal;
$ppajak = $bruto * $pajak;
$netto = $bruto - $ppajak;

print "modal : ". $modal ; print"<br>";
print "laba : ". $laba;print"<br>";
print "pajak: ". $pajak; print"<br>";
print "bruto: ". $bruto; print"<br>";
print "potong pajak: ". $ppajak; print"<br>";
print "netto : ". $netto; print"<br>";