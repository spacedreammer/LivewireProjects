<?php

namespace App\Livewire;

use App\Models\Continent;
use App\Models\Country;
use Livewire\Component;

class CascadingDropdown extends Component
{
    public $countries = [];
    public $continents = [];

    public $selectedContinent;
    public $selectedCountries;

    public function mount()
    {
        $this->continents = Continent::all();
    }

    public function changeContinent()
    {
        if ($this->selectedContinent != '-1') {
            $this->countries = Country::where('continent_id', $this->selectedContinent)->get();
        }
    }

    public function render()
    {
        return view('livewire.cascading-dropdown');
    }
}
