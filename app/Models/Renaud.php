<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Voiture;

class Renaud extends Voiture
{
    use HasFactory;

    public function getMarque()
    {
        return "Je suis une Renaud. ";
    }
}
