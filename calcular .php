<?php
$tValor = floatval ($_GET ["txtValor"]);
$tQuantidade = floatval ($_GET ["txtQuantidade"]);
$tGraficacao = floatval ($_GET ["txtGraficacao"]);
$r1=$tQuantidade * $tValor ;
$r2 = $r1 + $tGraficacao ;
echo "O resultado das horas são: <b>" . $r2. "</b>";
echo"Este é o valor final";
?>
