<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Concession
{
    use HasFactory;
    private $cars = [];
    private $name;
    
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCars()
    {
        return $this->cars;
    }

    public function addCar($voiture)
    {
        array_push($this->cars, $voiture); 
    }
}
