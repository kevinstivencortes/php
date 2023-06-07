<?php
$nombre = readline("ingrese su nombre \n");
$sueldo = readline("ingrese su sueldo \n");
$porcentaje=$sueldo * 15/100;
$suma=$sueldo + $porcentaje;

echo " señor $nombre su sueldo actual tiene un valor de $sueldo mas la suma de 15% por ser tam buen trabajador el cual es $suma";

?>
