<?php

namespace App\Livewire;
use Livewire\WithPagination;

use App\Models\Customer;
use Livewire\Component;

class Customers extends Component
{
    use WithPagination;

//    public $customers = [];
    public $search= '';
//    public function mount()
//    {
//       $this->customers=  Customer::all();
//
//    }

    public function render()
    {
        if(! $this->search){
            $customers=Customer::paginate(2);
        } else{
            $customers=Customer::where('name','like','%'.$this->search.'%')->paginate(2);
        }
        return view('livewire.customers',[
            'customers'=>$customers,
        ]);
    }
    public function deleteCustomer(Customer $customer)
    {
        $customer->delete();
        session()->flash('success', 'Customer Deleted');
        return $this->redirect('/customers',navigate:true);
    }
}
