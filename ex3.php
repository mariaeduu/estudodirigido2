T<?php 

print "Digite o seu sexo (F/M):";
$sexo = fgetc (STDIN);

if ($sexo == "F") {
    print "Seu sexo é feminino.\n";

}

elseif ( $sexo == "M") {
    print "Seu sexo é masculino.\n";
}

elseif ( $sexo <> "M" or $sexo <> "F") {
    print "Sexo inválido \n";
}
 
