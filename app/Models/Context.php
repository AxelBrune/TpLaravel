<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Exception;
class Context
{
    use HasFactory;

    private $state;

    public function __construct($state)
    {
        $this->changeState($state);
    }

    public function changeState($askedState)
    {
        switch ($askedState)
        {
            case 'demande':
                $this->state = new Demande();
            break;
            case 'chassis':
                $this->state = new ConstruireChassis();
            break;
            case 'peindre':
                $this->state = new Peindre();
            break;
            case 'envoyer':
                $this->state = new Envoyer();
            break;
            default:
                throw new Exception('État non reconnu');
        }
    }

    public function getState()
    {
        return $this->state;
    }
}
