<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Strategy;

class OpelStrategy extends Strategy
{
    use HasFactory;

    public function getTVA()
    {
        return 0.2;
    }
}
