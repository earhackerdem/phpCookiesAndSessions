<?php 

// Establecer la zona horaria
date_default_timezone_set('America/Mexico_City');

//echo date_default_timezone_get();

//Obtener la fecha actual
$now = date('d-m-Y H:i:s');
// $now = date_create();
// echo $now;
//echo strtotime("17 April 2022 06:34:59");
//echo strtotime("+1 week");
//echo strtotime("next Monday");
//echo strtotime("last Wednesday");

// $unir_time_last_wednesday = strtotime("last Wednesday");
// echo date("Y-m-d H:i:s",$unir_time_last_wednesday);

//$unix_time = strtotime("-3 years");
//$unix_time = strtotime("+63 years");
//$unix_time = strtotime("+1 week");
//$unix_time = strtotime('17 April 2023');
//echo date("Y-m-d H:i:s",$unix_time);

//fechas inmutables
$date_inmutable = new DateTimeImmutable();
