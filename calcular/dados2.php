<?php

include_once("Calcular.php");
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$operacao = $_POST['operacao'];

$calc = new Calcular();
$calc->setValor1($valor1);
$calc->setValor2($valor2);

switch ($operacao) {
    case '+':
        echo "Soma dos valores: "
            . $calc->soma();
        break;
    case '-':
        echo "Subtracao dos valores: "
            . $calc->subtracao();
        break;
    case '*':
        echo "Multiplicacao dos valores: "
            . $calc->multi();
        break;
    case '/':
        echo "Divisao dos valores: "
            . $calc->divi();
        break;
    default:
        echo "Erro na matriz!";
        break;
}
