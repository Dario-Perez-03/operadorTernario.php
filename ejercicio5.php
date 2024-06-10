<?php
$edad = intval(readline("ingrese su edad "));
echo ($edad >= 18) ? (($licencia = readline("tienes licencia para conducir? ")) == "si" ? "puedes conducir" : "debes obtener una licencia de conducir primero") : "no puedes conducir";
