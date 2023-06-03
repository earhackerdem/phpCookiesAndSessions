<?php

class MichiException extends Exception
{

    public function getMensaje()
    {
        return "Meow! 😻";
    }
}

class ConejiException extends Exception
{
    public function getMensaje()
    {
        return  "No hay mensaje para ti";
    }
}

try {

    $exception = readline("Excepción a lanzar: ");

    if ($exception == "michi")
        throw new MichiException("Michi incorrecto");
    else
        throw new ConejiException("Conejo incorrecto");
} catch (MichiException $e) {
    echo $e->getMensaje() . "\n";
} catch (ConejiException $e) {
    echo $e->getMensaje() . "\n";
} finally {
    echo "Funcionando";
}
