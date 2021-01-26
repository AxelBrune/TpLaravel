<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Handler
{
    use HasFactory;
    private $receivers;

    public function __construct()
    {
        $this->receivers = array();
    }

    public function handle($message){
        $messages = "";
        foreach($this->receivers as $receiver)
        {
            if($receiver->handle($message))
            {
                $messages .= "   ".$receiver->request($message);
                break;
            }
            else{
                $messages .= "   ".$receiver->request($message);
            }
        }
        return $messages;
    }

    public function addReceiver($receiver)
    {
        array_push($this->receivers, $receiver);
    }
    
}
