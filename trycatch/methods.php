<?php


function caminito2()
{
    return 20/0;
}

function caminito(){
    return caminito2();
}

function division()
{
    return caminito();
}

try {
    $resultado = division();
    echo $resultado;
} catch (Throwable $th) {
    //echo $th->getMessage();
    //echo $th->getCode();
    //echo $th->getFile();
    //echo $th->getLine();
    echo "<pre>";
    var_dump($th->getTrace());
    echo "</pre>";
}
