<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Usine;
use App\Models\Concession;

class Facade
{
    use HasFactory;
    private $concession;
    public function __construct()
    {
        $this->concession = new Concession("Concession Axel");
    }

    public function commander($marque, $modele)
    {
        
        $car = Usine::createCar($marque);
        $car->setConcession($this->concession);
        $car->setModele($modele);
        $car->setFacture(7000);
        $this->concession->addCar($car);

        return $this->concession;
    }
}
