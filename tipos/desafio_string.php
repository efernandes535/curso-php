<div class="titulo">Desafio String</div>

<?php

// Enunciado:
// Avaliado os médodos da documentação da string,
// qual é o métodos que a posição do texto 'abc'
// da string '!AbcaBcabc' retorne 1?

echo strpos('!AbcaBcabc', 'abc') . '<br>';
echo stripos('!AbcaBcabc','abc') . '<br>';

echo strpos(strtolower('!AbcaBcabc'), strtolower('ABC'));