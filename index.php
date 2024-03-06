<?php
//NUMERO 1
$INDICE = 13;
$SOMA = 0;
$K = 0;
while($K < $INDICE){
	$K = $K+1;
	$SOMA = $SOMA + $K;
}
echo $SOMA;

//NUMERO 2

$n = 2;

function eFibonacci($n) {
    $fibonacci1 = 0;
    $fibonacci2 = 1;

    if ($n == 0 || $n == 1) {
        return true;
    }

    while ($fibonacci2 <= $n) {
        if ($fibonacci2 == $n) {
            return true; 
        }
        
        $temp = $fibonacci1 + $fibonacci2;
        $fibonacci1 = $fibonacci2;
        $fibonacci2 = $temp;
    }

    return false;
}


if (eFibonacci($n)) {
    echo "$n é Fibonacci.";
} else {
    echo "$n não é Fibonacci.";
}

//NUMERO 5 

$string = "TESTANDO";


$stringInvertida = strrev($string);


echo "String: $string ";
echo "String invertida: $stringInvertida";
?>