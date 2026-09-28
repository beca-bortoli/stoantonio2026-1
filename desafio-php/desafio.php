<?php

$nota1 = 0;
$nota2 = 0;


$nota1 = (float) readline("Digite a Nota 1 (1 a 100): ");
$nota2 = (float) readline("Digite a Nota 2 (1 a 100): ");


$media = ($nota1 + $nota2) / 2;


echo "Media do aluno: " . $media . PHP_EOL;


if ($media >= 60) {
    echo "Situação: PASSOU" . PHP_EOL;
} elseif ($media >= 40) {
    echo "Situação: RECUPERAÇÃO" . PHP_EOL;
} else {
    echo "Situação: REPROVOU" . PHP_EOL;
}

?>
