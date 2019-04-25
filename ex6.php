<?php 

print "Digite o primeiro número:";
$n1 = fgets (STDIN);

print "Digite o segundo número:";
$n2= fgets (STDIN);

print "Digite o terceiro número:";
$n3= fgets (STDIN);

if ($n1 >=$n2 and $n1>=$n3) {
    print "O maior número é: $n1";

}

elseif ( $n2>=$n1 and $n2>=$n3) {
    print "O maior número é: $n2";
}

else {
    print "O maior número é: $n3";
}