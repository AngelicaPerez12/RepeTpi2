<?php 
namespace App\Modelos;
class Pickup extends Vehiculo
{
    protected function tarifaPorHora(): float
    {
        return 1.00;
    }
} 
?>