<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Facture
{
    use HasFactory;

    private $prix;

    public function __construct($prix)
    {
        $this->prix = $prix;
    }

    public function getPrix()
    {
        return $this->prix;
    }
}
