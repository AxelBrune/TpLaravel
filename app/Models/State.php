<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

abstract class State 
{
    use HasFactory;

    public abstract function displayState();
}
