<?php 
namespace App\Modelos;
interface Cobrable {
public function calcularTarifa(int $minutos): float;
}
?>