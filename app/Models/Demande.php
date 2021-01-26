<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\State;

class Demande extends State
{
    use HasFactory;

    public function displayState()
    {
        return "État Demande";
    }
}

