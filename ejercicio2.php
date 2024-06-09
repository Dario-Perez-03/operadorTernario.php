<?php
$cantidadArticulosCompra = intval(readline("¿cuantos articulos desea comprar? "));
$valorUnirario = intval(readline("ingrese el valor del articulo "));
$valorSinDescuento = $cantidadArticulosCompra * $valorUnirario;
$porcentajeDescuento = ($cantidadArticulosCompra >= 10) ? 0.1 : 0;
$descuento = $valorSinDescuento * $porcentajeDescuento;
$valorFinal = $valorSinDescuento - $descuento;
echo "el valor total a pagar $" . $valorFinal;
