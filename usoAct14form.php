<?php

$media=($_POST["prog"]+$_POST["ed"]+$_POST["llmm"]+$_POST["bbdd"])/4;
echo "La media de las notas es ".$media; echo "<br>";

$notamasalta=max($_POST["prog"],$_POST["ed"],$_POST["llmm"],$_POST["bbdd"]);
echo "La nota mas alta es ".$notamasalta; echo "<br>";

$notamasbaja=min($_POST["prog"],$_POST["ed"],$_POST["llmm"],$_POST["bbdd"]);
echo "La nota mas baja es ".$notamasbaja; echo "<br>"; echo "<br>";

print_r ($_POST);

 ?>
