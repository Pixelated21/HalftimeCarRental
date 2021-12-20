<?php

namespace App\Http\Livewire\Auth;

use Auth;
use Livewire\Component;

class Login extends Component
{

    public $email;
    public $password;
    public $rememberMe;

    protected $rules = [
        'email' => 'required',
        'password' => 'required'
    ];

    public function updated()
    {
        $this->validate();
    }

    public function loginUser()
    {
        $this->validate();
//
//        if (Auth::attempt([
//            'email' => $this->email,
//            'password' => $this->password,
//        ], $this->rememberMe)) {
//            if ($this->rememberMe === false) {
//                Auth::user()->remember_token = null;
//            }
//            $this->emit('alert','success','You will be redirected shortly.');
//
//            return redirect()->intended('/testing');
//        }
        $this->emit('alert','error','Credentials Invalid');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
