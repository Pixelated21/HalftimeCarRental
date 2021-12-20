<?php

namespace App\Http\Livewire\Alert;

use Livewire\Component;

class DynamicAlert extends Component
{
    public $alert = 1;
    public $type = 'success';
    public $title;

    protected $listeners = ['alert'];

    public function alert($alert,$type,$title){

        $this->alert = $alert;
        $this->type = $type;
        $this->title = $title;

        $this->dispatchBrowserEvent('alert-toggle');
    }

    public function render()
    {
        return view('livewire.alert.dynamic-alert');
    }
}
