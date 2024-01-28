<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.login');
    }
    public function login(Request $request)
    {
        $validate = $this->validate([
            'email'=> 'required|email|max:255',
            'password' => 'required|min:8|max:255'
        ]);
        if(Auth::attempt($validate)){
            $request->session()->regenerate();
            return $this->redirect('/customers',navigate:true);
        }
        $this->addError('email','The Password provided Does not Match The Email');
    }
}
