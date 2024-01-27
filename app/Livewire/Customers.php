<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class Customers extends Component
{
    public $customers = [];
    public function mount()
    {
       $this->customers=  Customer::all();

    }
    public function render()
    {
        return view('livewire.customers');
    }
    public function deleteCustomer(Customer $customer)
    {
        $customer->delete();
        session()->flash('success', 'Customer Deleted');
        return $this->redirect('/customers',navigate:true);
    }
}
