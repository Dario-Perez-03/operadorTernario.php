<?php
$largo = intval(readline("ingrese el largo de su terrreno "));
$ancho = intval(readline("ingrese el ancho de su terrreno "));
$areaTerreno = $largo * $ancho;
echo $areaTerreno >= 1000 ? "su terreno es adecuado para cultivos extensivos" : "su terrreno es adecuado para cultivos de jardin y huerto";
