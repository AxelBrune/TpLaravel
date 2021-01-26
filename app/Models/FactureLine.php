<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class FactureLine 
{
    use HasFactory;

    private $strat;
    private $voiture;

    public function __construct($voiture)
    {
        $this->voiture=$voiture;
        switch(get_class($voiture)){
            case Renaud::class:
                $this->strat = new RenaudStrategy();
                break;
            case Opel::class:
                $this->strat = new OpelStrategy(); 
        }
    }

    function getVoiture()
    {
        return $this->voiture;
    }

    public function getPrix()
    {
        return $this->voiture->getFacture()->getPrix()*$this->strat->getTVA();
    }
}
