<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class CreateCustomer extends Component
{
    public $posts = '';
    public $name = '';
    public  $email = '';
    public $phone = '';
    public function save()
    {
        $this->validate([
            'name'=>'required',
            'email'=> 'required|email|max:255',
            'phone'=> 'required|max:255'
        ]);
        Customer::create([
            'name'=> $this->name,
            'email'=> $this->email,
            'phone'=> $this->phone,
        ]);
        session()->flash('success', 'Customer Created');
        return $this->redirect('/customers',navigate:true);

    }

    public function render()
    {
        return view('livewire.create-customer');
    }

}
