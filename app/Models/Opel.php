<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Voiture;

class Opel extends Voiture
{
    use HasFactory;

    public function getMarque()
    {
        return "Je suis une Opel. ";
    }

    public function getOptions()
    {
        return 'J\'ai un lecteur CD avec Bluetooth. ';
    }
}
