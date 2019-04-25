<?php 


print "Digite o valor do primeiro produto:";
$p1 = fgets (STDIN);

print "Digite o valor do segundo produto:";
$p2= fgets (STDIN);

print "Digite o valor do terceiro produto:";
$p3= fgets (STDIN);



if ($p1 <=$p2 and $p1>=$p3) {
    print "O produto mais barato é: $p1 reais.";

}

elseif ( $p2<=$p1 and $p2<=$p3) {
    print "O produto mais barato é: $p2 reais.";
}

else {
    print "O produto mais barato é: $p3 reais.";
}