<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DynamicTable extends Component
{
    public $usernames = ['League Of Legends' => ['Pixelated','PixelatedReborn','Proximity','Verpixelt21','FearTWild'], 'Instagram' => ['Pixelated_Jay']];
    public function render()
    {
        return view('livewire.dynamic-table');
    }
}
