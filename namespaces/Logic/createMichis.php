<?php

require("Classes/MichisAdoptados/Michi.php");
require("Classes/MichisDisponibles/Michi.php");

use MichisDisponibles\Michi;
use MichisAdoptados\Michi as MichisAdoptados;

$mrMichi = new Michi("Mr. Michi",'Blanquito',16);
$michisancio = new Michi("Michisancio",'Naranja',14);
$michales = new Michi("Michales",'Negro',15);

$mrMichi_adopted = new MichisAdoptados("Mr. Michi",new DateTime('2020-05-31'),'Mike');
$michisancio_adopted = new MichisAdoptados("Michisancio",new DateTime('2020-01-01'),'Saul');
$michales_adopted = new MichisAdoptados("Michales",new DateTime('1997-05-31'),'Earvin');
