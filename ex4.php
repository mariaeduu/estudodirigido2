<?php 

print "Digite uma letra:";
$letra = (string) fgetc (STDIN);

if ($letra == "a" or $letra == "e" or $letra == "i" or $letra == "o" or $letra == "u" ) {
 
    print "A letra digitada é uma vogal.\n";

}

else {
    print "A letra digitada foi uma consoante. \n";
}