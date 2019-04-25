<?php

$numeros = array ("1", "2", "3");
rsort ($numeros);

foreach( $numeros as $chave => $valor ){
    print "$chave = $valor\n";
}


