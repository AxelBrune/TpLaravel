<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feuille extends Composite
{
    use HasFactory;
    private $parent;
    private $car;

    public function __construct($voiture)
    {
        $this->car = $voiture;        
    }

    public function setParent(Voiture $voiture)
    {
        $this->parent = $voiture;
    }

    public function getParent()
    {
        return $this->parent;
    }

    public function getPrix()
    {
        return $this->car->getFacture()->getPrix();
    }

    public function getCar()
    {
        return $this->car;
    }
}
