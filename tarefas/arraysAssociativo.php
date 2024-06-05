<?php

$carro = [
  "fabricante" => "Fiat",
  "modelo" => "Siena",
  "ano" => "2015",
];

$_GET = ["nome" => "Estudar Javascript"];
echo $_GET["nome"] . PHP_EOL;

echo "Tamanho do array: " . count($carro) . PHP_EOL;

echo "Marca: " . $carro["fabricante"] . PHP_EOL;
echo "Modelo: " . $carro["modelo"] . PHP_EOL;
echo "Ano: " . $carro["ano"] . PHP_EOL;