<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

abstract class Strategy
{
    use HasFactory;

    public abstract function getTVA();
}
