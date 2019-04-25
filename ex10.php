<?php 

print "Digite o valor de a:";
$a = (float) fgets (STDIN);

print "Digite o valor de b:";
$b = (float) fgets (STDIN);

print "Digite o valor de c:";
$c = (float) fgets (STDIN);

$delta = ($b*$b) - 4*$a*$c;
print "Valor de delta é $delta \n";

$x1 = (-1 *($b) + sqrt ($delta) ) /2*$a;
print "O valor de x1 é $x1 \n";

$x2 = (-1 *($b) - sqrt ($delta) ) /2*$a;
print "O valor de x2 é $x2 \n";


if ($a == 0){
    print "A equação não é do segundo grau";
}
elseif ($delta < 0){
    print "A equação não possui raízes";
}
elseif ($delta == 0){
    print "A equação possui só uma raíz";
}

elseif ($delta >0){
    print "A equação possui duas raízes reais";
}












