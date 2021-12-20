<?php

namespace App\Http\Livewire\Navigation;

use Livewire\Component;

class Navigation extends Component
{

    public function triggerAlert(){
        sleep(1);
        $this->emit('alert',3,'success','This  Works');
    }
    public function triggerAlert2(){
        sleep(1);
        $this->emit('alert',2,'success','This  Works And Is Dynamic');
    }

    public function triggerAlert3(){
        sleep(1);
        $this->emit('alert',1,'success','Works');
    }

    public function render()
    {
        return view('livewire.navigation.navigation');
    }
}
