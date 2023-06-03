<?php

// $today = new DateTime();

// $mrmichi_birth = new DateTime("2020-03-25");

// $intervalo = $mrmichi_birth->diff($today);
// $intervalo = $today->diff($mrmichi_birth);

// echo $intervalo->format('%y años con %d dias');

// $date = DateTime::createFromFormat("l j F Y","Sunday 17 April 2022");
// echo $date->format("Y-m-d H:i:s");

//Modificar una fecha

$date = new DateTime();
$date->modify("+1day +2 months");
$date->modify("-1 year");
echo $date->format('Y-m-d');