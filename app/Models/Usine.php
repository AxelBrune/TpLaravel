<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Opel;
use App\Models\Renaud;

class Usine
{
    use HasFactory;
    
    public static function createCar($brand)
    {
        switch ($brand)
        {
            case 'Opel':
                $car = new Opel();
            break;
            case 'Renaud':
                $car = new Renaud();
            break;
            default:
                throw new Exception('Marque non reconnue');
        }
        return $car;
    }
}
