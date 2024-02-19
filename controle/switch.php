<div class="titulo">Switch</div>

<?php
$categoria = 'Sedan';
$preco = 0.0;
$carro = '';

if ($categoria === 'Luxo') {
    $carro = 'Mustang';
    $preco = 250000;
} else if ($categoria === 'SUV') {
    $carro = 'Renegade';
    $preco = 80000;
} elseif ($categoria === 'Sedan') {
    $carro = 'Omega';
    $preco = 50000;
} else {
    $carro = 'Marea';
    $preco = 30000;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";

$categoria = '???';
switch (strtolower($categoria)) {
    case 'luxo':
        $carro = 'Mustang';
        $preco = '250000';
        break;
    case 'suv':
    case 'suv Básico':
        $carro = 'Renegade';
        $preco = '80000';
        break;
    case 'sedan':
        $carro = 'Omega';
        $preco = '50000';
        break;
    default:
        $carro = 'Marea';
        $preco = '30000';
        break;
}


$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";
