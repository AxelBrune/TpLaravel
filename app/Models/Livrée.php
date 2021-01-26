<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livrée extends Model
{
    use HasFactory;

    public function handle($message)
    {
        if($message == "Livrée")
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
            return "Erreur lors de la livraison";
        }

        else{
            return "Pas d'erreur lors de la livraison";
        }
    }
}
