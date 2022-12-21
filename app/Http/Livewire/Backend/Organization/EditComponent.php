<?php

namespace App\Http\Livewire\Backend\Organization;

use App\Models\Organization;
use Livewire\Component;

class EditComponent extends Component
{
    public $name_organization = '';
    public $department_name = '';
    public $country = '';
    public $city = '';
    public $street = '';
    public $house = '';
    public $apartment = '';
    public $current_id;
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

    public function mount ($organization)
    {
        $this->name_organization = $organization->name_organization;
        $this->department_name = $organization->department_name;
        $this->country = $organization->country;
        $this->city = $organization->city;
        $this->street = $organization->street;
        $this->house = $organization->house;
        $this->apartment = $organization->apartment;
        $this->current_id = $organization->id;

    }

    public function update ()
    {
        $this->validate();

        $organization_edit = Organization::find($this->current_id);
        $organization_edit->name_organization = $this->name_organization;
        $organization_edit->department_name = $this->department_name;
        $organization_edit->country = $this->country;
        $organization_edit->city = $this->city;
        $organization_edit->street = $this->street;
        $organization_edit->house = $this->house;
        $organization_edit->apartment = $this->apartment;
        $organization_edit->save();
        session()->flash('message', $this->current_id . ' ' . 'edit');
    }

    public function render ()
    {
        return view('livewire.backend.organization.edit-component');
    }
}
