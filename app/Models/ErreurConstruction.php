<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ErreurConstruction extends Model
{
    use HasFactory;
    
    public function handle($message)
    {
        if($message == "Erreur construction")
        {
            return true;
        }
        else{
            return false;
        }
    }

    public function request($message)
    {
        if ($this->handle($message))
        {
            return "Erreur lors de la construction";
        }
        else{
            return "Pas d'erreur lors de la construction";
        }
    }
}
