<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Noeud extends Composite
{
    use HasFactory;

    private $children;

    public function __construct()
    {
        $this->children = array();        
    }

    public function getChildren()
    {
        return $this->children;
    }

    public function addChild($car)
    {
        array_push($this->children, $car);
    }

    public function getPrix()
    {
        $prix = 0;
        foreach($this->children as $car)
        {
            if ($car instanceof Noeud)
            {
                $prix += $car->getPrix();
            }
            else{
                $prix += $car->getFacture()->getPrix();
            }
        }
        return $prix;
    }
}
