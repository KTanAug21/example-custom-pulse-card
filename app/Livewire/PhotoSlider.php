<?php

namespace App\Livewire;

use Livewire\Component;
use Laravel\Pulse\Livewire\Card;
use Illuminate\Support\Facades\Storage;


class PhotoSlider extends Card
{
    public $filePaths = [];

    public function mount()
    {
        $files = Storage::disk('local')->files('photos');
      
        foreach( $files as $file ){
            $this->filePaths[] = $file;
        }

    }
    
    public function render()
    {
        return view('livewire.photo-slider');
    }
}
