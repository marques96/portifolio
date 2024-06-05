<?php

$alunos = ["Alissa", "Angela", "Michael"];

//echo var_dump($alunos);

// for ($i = 0; $i < count($alunos); $i++) {
//   echo $alunos[$i] . PHP_EOL;
// }

echo $alunos[0] . PHP_EOL;
echo $alunos[1] . PHP_EOL;
echo $alunos[2] . PHP_EOL;

$alunos[] = "Ezio"; // adicionando elementos ao final do array
array_push($alunos, "Altair"); // adicionando elementos ao final do array com a função array_push()

echo $alunos[3] . PHP_EOL;
echo $alunos[4] . PHP_EOL;



echo "Tamanho do array: " . count($alunos);