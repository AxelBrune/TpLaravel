<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

abstract class Composite
{
    use HasFactory;

    abstract public function getPrix();
}
