<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
class Singleton
{
    use HasFactory;
    private static $singleton = null;
    private $count;

    private function __construct()
    {
        $this->count = 0;   
    }

    public function incrementCount()
    {
        $this->count += 1;
        return $this->count;
    }
    
    public static function getInstance()
    {
        if(is_null(self::$singleton)) 
        {
            self::$singleton = new Singleton();  
        }
        return self::$singleton;
    }
}
