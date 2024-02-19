<?php

namespace App\Livewire;

use Livewire\Component;
use Laravel\Pulse\Livewire\Card;
use Livewire\WithFileUploads;

class FileUploadCard extends Card
{

    use WithFileUploads;

    public $photo;

    public function save()
    {
        $this->photo->store(path: 'photos');
    }

    public function render()
    {
        return view('livewire.file-upload-card');
    }
}
