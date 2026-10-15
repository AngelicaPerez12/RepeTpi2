<?php
namespace App\Modelos;

use InvalidArgumentException;

abstract class Vehiculo implements Cobrable {
    public function __construct(
        public readonly string $placa,
        public readonly string $propietario
    )
    {
       
    }
abstract protected function tarifaPorHora(): float;

public function calcularTarifa(int $minutos): float
{
    if ($minutos < 0) {
        throw new InvalidArgumentException(
        "Los minutos no pueden ser negativos"
    );
}
    if ($minutos <= 15){
        return 0.0;
    }
    $horas = ceil(($minutos - 15) / 60);
    return $horas * $this -> tarifaPorHora();
}
}
?>
