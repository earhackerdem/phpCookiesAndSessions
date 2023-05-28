<?php

try {
    $pet = readline("¿Qué quieres adoptar? ");

    if ($pet != "michi" && $pet != "conejo") 
        throw new Exception("Lo sentimos notenemos $pet en este sentro de adopción ");
    

    echo "¡Felicidades por tu nuevo $pet!";

} catch (Throwable $th) {
    echo $th->getMessage();
}
