<?php

namespace App\Http\Livewire\Backend\Subscription;

use App\Models\Organization;
use App\Models\Person;
use App\Models\Subscription;
use Livewire\Component;

class CreateComponent extends Component
{
    public $phone = '';
    public $typeable_type = '';
    public $typeable_id = '';
    public $types = [];
    protected $rules = [
        'phone' => 'required',

    ];
    protected $messages = [
        'phone.required' => 'Phone field required',

    ];

    public function resetInput ()
    {
        $this->phone = '';
        $this->typeable_type = '';
        $this->typeable_id = '';
    }

    protected $listeners = ['register_type_listener' => 'registerTypeFunction'];

    public function registerTypeFunction ()
    {
        $type = $this->typeable_type;

        $this->types = match ($type) {
            'App\Models\Organization' => Organization::get(['name_organization', 'id']),
            'App\Models\Person' => Person::get(['name', 'id'])
        };
    }

    public function store ()
    {
        $this->validate();

        Subscription::create([
            'phone'         => $this->phone,
            'typeable_type' => $this->typeable_type,
            'typeable_id'   => $this->typeable_id,
        ]);

        session()->flash('message', $this->phone . ' ' . 'create');

        $this->resetInput();
    }

    public function render ()
    {
        return view('livewire.backend.subscription.create-component');
    }
}
