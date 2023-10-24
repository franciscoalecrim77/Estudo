<?php

$numero = 22;

echo "A taboada do " . $numero . " é: ";
for ($i=0; $i <= 20; $i++) { 
    echo "<br>";

    
    echo $numero . " X " . $i . " = " . $i * $numero;
}
?>