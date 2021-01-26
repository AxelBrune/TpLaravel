<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aggregation
{
    use HasFactory;
    private $position;
    private $concession;
    private $length;

    public function __construct($concession) {
        $this->position = 0;
        $this->concession = $concession;
        $this->length = count($concession);
    }

    public function current(){
        return $this->concession[$this->position];
    }

    public function next()
    {
        $this->position++;        
    }

    public function hasNext()
    {
        if ($this->position < $this->length)
        {
            return true;
        }
        else{
            return false;
        }
    }
}
