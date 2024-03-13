<? 

function verifica($num1, $num2){
    $cont=0;
    for($i = $num1; $i < $num2; $i++){
        if($i % 7 == 0){
           $cont++;
        }
    }
    return $cont;
}



function somaMultiplos($num1, $num2){
    if($num1>$num2){
        $aux = $num1;
        $num1 = $num2;
        $num2 = $aux;        
    }
        $soma = 0;
        for($i = $num1; $i < $num2; $i++){
            if($i % 7 == 0){
                $soma = $soma + $i;
            }
        }
        return $soma;
}

echo "quantidade de multiplos de 7: " . verifica(10,1000);
echo "a soma dos multiplos é: " . somaMultiplos(10,1000);
echo "a media é: " . somaMultiplos(10,1000)/verifica(10,1000);