<?php

namespace App\Livewire;

use Livewire\Component;

class RegisterForm extends Component
{
    public string $email = '';
    public string $password = '';
    public string $first_name = '';
    public string $last_name = '';
    public string $role = 'customer';
    public string $comany_name = '';
    public string $vat_number = '';

    protected $rules = [
        'first_name' => ['required', 'min:2'],
        'last_name' => ['required', 'min:2'],
        'email' => ['required', 'email'],
        'password' => ['required', 'min:8'],
        'comany_name' => ['required_if:role,vendor'],
        'first_name' => ['required_if:role,vendor'],


    ];

    public function render()
    {
        return view('livewire.register-form');
    }

    public function submit()
    {
        $this->validate();

        //register customer
        session()->flash('message', 'Customer was created');

        $this->email = '';
        $this->password = '';
        $this->first_name = '';
        $this->last_name = '';
        $this->role = 'customer';
        $this->comany_name = '';
        $this->vat_number = '';
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }
}
