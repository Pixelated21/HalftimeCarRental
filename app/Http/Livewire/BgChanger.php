<?php

namespace App\Http\Livewire;

use Exception;
use Livewire\Component;
use Spatie\Color\Hex;
use Spatie\Color\Rgb;

class BgChanger extends Component
{
    public $red_slider;
    public $green_slider;
    public $blue_slider;
    public $hex;
    public $display_colors = ['#FF0000','#FFFF00','#0000ff','#FFA500','#FF1493','#008000','#000000','#808080'];



    public function setColor(){
        $this->hexToRgb($this->hex);
        $this->emit('alert',1,'success',"Theme Successfully Changed To ".strtoupper($this->hex));
    }


    public function displaySelect($index){
        $this->hexToRgb($this->display_colors[$index]);
        $this->convert();
    }

//    Convert hex to rgb value
    public function hexToRgb($hex){
        $this->red_slider = Hex::fromString($hex)->toRgb()->red();
        $this->green_slider = Hex::fromString($hex)->toRgb()->green();
        $this->blue_slider = Hex::fromString($hex)->toRgb()->blue();
    }


//    Generate random rgb values
    public function generateRandomColor()
    {
        $this->red_slider = random_int(0,255);
        $this->green_slider = random_int(0,255);
        $this->blue_slider = random_int(0,255);

        $this->convert();
    }

    public function mount($hex)
    {
        $this->hexToRgb($hex);
    }

    public function convert()
    {
        $this->hex = (string)Rgb::fromString('rgb(' . $this->red_slider . ',' . $this->green_slider . ',' . $this->blue_slider . ')')->toHex();
    }

    public function render()
    {
        return view('livewire.bg-changer');
    }


}
