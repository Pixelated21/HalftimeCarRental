<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DynamicTable extends Component
{
    public $countryStatus;
    public $countryCode = null;
    public $usernames = ['League Of Legends' => ['Pixelated','PixelatedReborn','Proximity','Verpixelt21','FearTWild'], 'Instagram' => ['Pixelated_Jay']];


    public function updated(){

        if (strlen($this->countryCode) === 2){
            $this->countryStatus = $this->curl($this->countryCode);
        }
        else{
            $this->countryStatus = $this->curl();
        }
    }


    public function curl($countryCode = 'Jm'){
        $curl = curl_init();

        curl_setopt_array($curl,[
            CURLOPT_URL => "https://covid-19-data.p.rapidapi.com/country/code?code=".$countryCode,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: covid-19-data.p.rapidapi.com",
                "x-rapidapi-key: 9e970a6cb6mshd1f0d57793ad4fap180caajsn013edb569111"
            ]
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err){
            return $err;
        }

        return json_decode($response, false);

    }

    public function mount(){
        $this->countryStatus = $this->curl();
    }

    public function render()
    {
        return view('livewire.dynamic-table');
    }
}
