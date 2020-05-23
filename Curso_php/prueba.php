<?php
echo 'Arreglo-Array-vectortor';
echo "<br>";
$cursos =array('python<br>','java<br>','php<br>','html<br>','css<br>','oracle<br>','c++<br>','delphi<br>');
//echo $cursos[3];
$area =array('programacion<br>','bd<br>','redes<br>');
$funcion = array_merge($cursos,$area);
print_r($funcion);

?>