<?php
function linha($semana): string
{
  $dias = count($semana);
  $linha = "";

  $linha .= "<tr>";

  for ($i = 0; $i < $dias; $i++) {
    $linha .= "<td>{$semana[$i]}</td>";
  }

  $linha .= "</tr>";

  return $linha;
}// fim da função linha

function calendario(): string
{
  $semana = []; //Array de inteiros com os dias da semana (números)
  $calendario = "";

  for ($dia = 1; $dia <= 31; $dia++) {
    $semana[] = $dia;

    if (count($semana) == 7 || $dia === 31) {
      $calendario .= linha($semana);
      $semana = [];
    }
  }
  return $calendario;
}// fim da função calendário()

?>