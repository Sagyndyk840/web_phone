<?php

namespace App\Http\Livewire\Backend\Organization;

use App\Models\Organization;
use Livewire\Component;

class CreateComponent extends Component
{
    public $name_organization = '';
    public $department_name = '';
    public $country = '';
    public $city = '';
    public $street = '';
    public $house = '';
    public $apartment = '';
    protected $rules = [
        'name_organization' => 'required',
        'department_name'   => 'required',
        'country'           => 'required',
        'city'              => 'required',
        'street'            => 'required',
        'house'             => 'required',
        'apartment'         => 'required',
    ];
    protected $messages = [
        'name_organization.required' => 'Organization name field required',
        'department_name.required'   => 'Department name field required',
        'country.required'           => 'Country field required',
        'city.required'              => 'City field required',
        'street.required'            => 'Street field required',
        'house.required'             => 'House field required',
        'apartment.required'         => 'Apartment field required',
    ];

    public function resetInput ()
    {
        $this->name_organization = '';
        $this->department_name = '';
        $this->country = '';
        $this->city = '';
        $this->street = '';
        $this->house = '';
        $this->apartment = '';
    }

    public function store ()
    {
        $this->validate();

        Organization::create([
            'name_organization' => $this->name_organization,
            'department_name'   => $this->department_name,
            'country'           => $this->country,
            'city'              => $this->city,
            'street'            => $this->street,
            'house'             => $this->house,
            'apartment'         => $this->apartment,
        ]);

        session()->flash('message', $this->name_organization . ' ' . 'create');

        $this->resetInput();
    }

    public function render ()
    {
        return view('livewire.backend.organization.create-component');
    }
}
