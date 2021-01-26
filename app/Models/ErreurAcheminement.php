<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ErreurAcheminement extends Model
{
    use HasFactory;

    public function handle($message)
    {
        if($message == "Erreur Acheminement")
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
            return "Erreur lors de l'acheminement";
        }
        else{
            return "Pas d'erreur lors de l'acheminement";
        }
    }
}
