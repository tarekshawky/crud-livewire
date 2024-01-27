<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class EditCustomer extends Component
{
    public $customer;
    public $name;
    public $email;
    public $phone;
    public function mount(Customer $customer)
    {
        $this->customer = $customer;
        $this->name = $customer->name;
        $this->email = $customer->email;
        $this->phone = $customer->phone;

    }
    public function render()
    {
        return view('livewire.edit-customer');
    }
    public function updateCustomer()
    {
       $update =  $this->validate([
            'name'=>'required',
            'email'=> 'required|email|max:255',
            'phone'=> 'required|max:255'
        ]);
        $this->customer->update($update);
        session()->flash('success', 'Customer Updated');
        return $this->redirect('/customers',navigate:true);
    }
}
