<?php
$valorCamisa = 50000;
$compra1 = intval(readline("cuantas camisas desea comprar? "));
$total_sinDescuento = $compra1 * $valorCamisa;
$porcentaje_descuento = $compra1 >= 3 ? 0.2 : 0.1;
$descuento = $total_sinDescuento * $porcentaje_descuento;
$valor_Total_conDescuento = $total_sinDescuento - $descuento;
echo "En su compra se le desconto : $ " . $descuento . "\n";
echo "Su compra final de " . $compra1 . " camisas, es de $ " . $valor_Total_conDescuento . "\n";
echo "GRACIAS POR SU COMPRA";
