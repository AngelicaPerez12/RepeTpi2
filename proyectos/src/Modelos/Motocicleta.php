<?php 
namespace App\Modelos;
class Motocicleta extends Vehiculo
{
    protected function tarifaPorHora(): float
    {
        return 0.40;
    }
} 
?>