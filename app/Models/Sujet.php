<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sujet
{
    use HasFactory;

    public $observerCollection = [];

    public function registerObserver($observer)
    {
        $this->observerCollection[]=$observer;
    }

    public function unregisterObserver($observer)
    {
        if (($key = array_search($observer, $this->observerCollection)) !== false) {
            unset($this->observerCollection[$key]);
        }
    }
    
    public function notifyObservers()
    {
        foreach ($this->observerCollection as $obs) {
            $obs->update();
        }
    }
}
