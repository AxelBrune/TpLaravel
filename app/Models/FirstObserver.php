<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Observer;

class FirstObserver extends Observer
{
    use HasFactory;
    private $cpt;

    public function __construct()
    {
        $this->cpt=0;
    }

    public function update()
    {
        $this->cpt+=15;
    }

    public function display()
    {
        return 'Je suis le premier Observeur et mon compteur  est égal à  '.$this->cpt;
    }
}
