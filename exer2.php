<?php

print "DECLARAÇÃO DE IMPOSTOS";

print "Digite os rendimentos bancários: R$";
$rendbancarios = trim(fgets(STDIN));
print "\nDigite os rendimentos de salários e serviços: R$";
$rendsala = trim(fgets(STDIN));
print "\nDigite os outros rendimentos: R$";
$outrosrend = trim(fgets(STDIN));
print "\nDigite os serviços médicos pagos: R$";
$serviçosmedicos = trim(fgets(STDIN));
print "\nDigite os serviços educacionais pagos: R$";
$serviçoseduc = trim(fgets(STDIN));

$Trendbancarios  = ($rendbancarios * 0.2);

if ($rendsala <= 8000){
	$Trendsala = 0;
} elseif ($rendsala >= 8000 && $rendsala < 24000) {
	$Trendsala = $rendsala * 0.15;
} else  {
	$Trendsala = $rendsala * 0.3;
}

$Toutrosrend  = $outrosrend * 0.2 ;
print "\n-------------Total de impostos-----------" ;
print "\nTotal de impostos sobre rendimentos bancários: $Trendbancarios" ;
print "\nTotal de impostos sobre sálarios e serviços: $Trendsala" ;
print "\nTotal de impostos sobre outros rendimentos: $Toutrosrend" ;
$totalrend = trim(fgets(STDIN));
$totalrend = $Trendbancarios + $Trendsala + $Toutrosrend ;
print "\nTotal de impostos : R$ $totalrend" ;

print "\n-----------------------------------------" ;

$maxabate = trim(fgets(STDIN));
$maxabate =  $totalrend * 0.3 ;

print "\n Máximo a ser abatido: $maxabate " ;

print "\n\n----------- Total de valores possiveis de abater ---------";

print "\n Servicos medicos: R$ $serviçosmedicos ";
print "\n Servicos educacionais: R$ $serviçoseduc ";

$totalabate = trim(fgets(STDIN));
$totalabate = $serviçosmedicos + $serviçoseduc ;
print "\n Total: R$ $totalabate " ;


print "\n-----------------------------------------" ;
print "\n\n----------- Imposto Total -------------";

print "\n Imposto Bruto: R$ $totalrend";
if ($totalabate < $maxabate) {print "\n Abatimentos: R$ $totalabate" ;}
else {print "\n Abatimentos: R$ $maxabate" ;}

$totalg1 = trim(fgets(STDIN));
$totalg1 = $totalrend - $totalabate;
$totalg2 = trim(fgets(STDIN));
$totalg2 = $totalrend - $maxabate;

if ($totalabate < $maxabate) { print "\n Total: R$ $totalg1 " ;}
else  { print "\n Abatimentos: R$ $totalg2" ;}

$totalg3 = trim(fgets(STDIN));
$totalg3 = $totalg1 - $totalg2;
print "\n Total:R$ $totalg3";

