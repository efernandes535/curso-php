<div class="titulo">Switch</div>

<?php
$categoria = 'Luxo';
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

$precoFormatado = number_format($preco, 2, ',','.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";
