<?php
$alunos = array(
    "joao" => 8,
    "maria" => 7,
    "pedro" => 6,
    "ana" => 9,
    "carlos" => 5
);

foreach ($alunos as $aluno => $nota) {
    echo "a nota de " . $aluno . " é " . $nota . "<br>";
}

$alunos["Mariana"] = 8.5;

echo "o array contem agora: ";
print_r($alunos);

?>