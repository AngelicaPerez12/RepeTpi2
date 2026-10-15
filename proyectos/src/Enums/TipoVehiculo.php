<?php
namespace App\Enums;

enum TipoVehiculo: string
{
    case AUTOMOVIL = 'A';
    case MOTOCICLETA = 'M';
    case PICKUP = 'P';

public function etiqueta(): string{
    return match ($this){
        self::AUTOMOVIL => 'Automóvil',
        self::MOTOCICLETA => 'Motocicleta',
        self::PICKUP => 'Pickup' 
    };
}
}
?>