<?php
$tValor = floatval ($_GET ["txtValor"]);
$tQuantidade = floatval ($_GET ["txtQuantidade"]);
$tGraficacao = floatval ($_GET ["txtGraficacao"]);
$r1=$tQuantidade * $tValor ;
$r2 = $r1 + $tGraficacao ;
echo "o resultado das horas são: <b>" . $r2. "</b>";
?>