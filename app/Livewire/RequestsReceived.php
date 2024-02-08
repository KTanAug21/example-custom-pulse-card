<?php

namespace App\Livewire;

use Livewire\Component;
use Laravel\Pulse\Livewire\Card;

class RequestsReceived extends Card
{
    public function render()
    {
        return view('livewire.requests-received',[
            'machines' => $this->aggregate(
                'machine_requests', 
                ['count']
              )
        ]);
    }
}
