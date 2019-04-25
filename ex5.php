<?php 

print "Digite a primeira nota:";
$nota1 = fgets (STDIN);

print "Digite outra nota:";
$nota2 = fgets (STDIN);

$media = ($nota1 + $nota2/2);

if ($media = 10) {
    print "Aluno aprovado com distinção";
}

elseif ($media >=7) {
    print "Aluno aprovado";
}

else {
    print "Aluno reprovado";
}

