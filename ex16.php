<?php 


print "Digite o primeiro número:";
$n1 = fgets (STDIN);

print "Digite o segundo número:";
$n2= fgets (STDIN);

print "Digite o terceiro número:";
$n3= fgets (STDIN);

print "Digite o quarto número:";
$n4= fgets (STDIN);

print "Digite o quinto número:";
$n5= fgets (STDIN);

$soma = $n1 + $n2 + $n3 + $n4 + $n5;

$media = ($soma / 5);

print "A soma dos números é: $soma \n";

print "A média dos números é: $media \n"; 