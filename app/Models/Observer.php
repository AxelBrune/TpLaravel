<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

abstract class Observer
{
    use HasFactory;

    public abstract function display();
    public abstract function update();
}
