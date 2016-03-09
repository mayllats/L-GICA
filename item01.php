<?php
print " ------ CONTA--------";

$entrada = trim(fgets(STDIN));
print "Sexo do(a) Cliente (F/M):";
$sexo = trim(fgets(STDIN));
if ($sexo == "F" || $sexo == "f") $entrada = 8;
else
	$entrada = 10;


print "N° DE CERVEJAS: ";
$cervejas = trim(fgets(STDIN));
print "N° DE REFRIGERANTES: ";
$refrigerantes = trim(fgets(STDIN));
print "N° DE ESPETINHOS: " ;
$espetinhos = trim(fgets(STDIN));

$contacerveja = $cervejas * 2.50;
$contarefri = $refrigerantes* 2.00;
$contaesp = $espetinhos*4.00;

print "\n ENTRADA: R$ $entrada ";
print "\n VALOR DE CERVEJAS: R$ $contacerveja ";
print "\n VALOR DE REFRIGERANTES: R$ $contarefri ";
print "\n VALOR DE ESPETINHOS: R$ $contaesp " ;


$totalconta = $entrada + $contacerveja + $contarefri + $contaesp;

$couver = trim(fgets(STDIN));
	if ($totalconta <= 15) $couver = 3;
	else 
		$couver = 0;
print "\n COUVER:R$ $couver ";
print "\n CONSUMO:R$ $totalconta " ;

$totalgeral = trim(fgets(STDIN));
$totalgeral = ($totalconta + $couver) + ($totalconta + $couver) * 0.2;
print "\n TOTAL CONTA COM 10%:R$ $totalgeral ";
?>

