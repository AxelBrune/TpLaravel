<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Concession;
use App\Models\Facture;
abstract class Voiture
{
    use HasFactory;

    private $concession;
    private $facture;
    private $modele;

    public function getConcession()
    {
        return $this->concession;
    }

    public function getFacture()
    {
        return $this->facture;
    }

    public function getModele()
    {
        return $this->modele;
    }

    public function setConcession($concession)
    {
        $this->concession = $concession;
    }

    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    public function setFacture($prix){
        $this->facture = new Facture($prix);
    }

    public function getText(){
        return $this->getMarque().$this->getOptions();
    }

    public function getMarque()
    {
        return "Je suis une voiture. ";
    }

    public function getOptions()
    {
        return "Je suis sans options. ";
    }
}
