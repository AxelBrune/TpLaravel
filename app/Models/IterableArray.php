<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class IterableArray
{
    use HasFactory;
    private $iterator;
    public function __construct($array)
    {
        $this->iterator = new Aggregation($array);
    }

    public function getIterator()
    {
        return $this->iterator;
    }
}
