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

if ($n1 >=$n2 and $n1>=$n3 and $n1>=$n4 and $n1>=$n5) {
    print "O maior número é: $n1";

}

elseif ( $n2>=$n1 and $n2>=$n3 and $n2>=$n4 and $n2>=$n5) {
    print "O maior número é: $n2";
}

elseif ( $n3>=$n1 and $n3>=$n2 and $n3>=$n4 and $n3>=$n5) {
    print "O maior número é: $n3";
}

elseif ( $n4>=$n1 and $n4>=$n2 and $n4>=$n3 and $n4>=$n5) {
    print "O maior número é: $n4";
}

else {
    print "O maior número é: $n5";
}