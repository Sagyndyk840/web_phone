<?php

namespace App\Http\Livewire\Backend\Subscription;

use App\Models\Organization;
use App\Models\Person;
use App\Models\Subscription;
use Livewire\Component;

class EditComponent extends Component
{
    public $phone = '';
    public $typeable_type = '';
    public $typeable_id = '';
    public $types = [];
    public $current_id = '';
    protected $rules = [
        'phone' => 'required',

    ];
    protected $messages = [
        'phone.required' => 'Phone field required',

    ];

    protected $listeners = ['register_type_listener' => 'registerTypeFunction'];

    public function registerTypeFunction ()
    {
        $type = $this->typeable_type;

        $this->types = match ($type) {
            'App\Models\Organization' => Organization::get(['name_organization', 'id']),
            'App\Models\Person' => Person::get(['name', 'id'])
        };
    }

    public function mount ($subscription)
    {
        $this->phone = $subscription->phone;
        $this->typeable_type = $subscription->typeable_type;
        $this->typeable_id = $subscription->typeable_id;
        $this->current_id = $subscription->id;
    }

    public function update ()
    {
        $this->validate();

        $subscription_edit = Subscription::find($this->current_id);
        $subscription_edit->phone = $this->phone;
        $subscription_edit->typeable_type = $this->typeable_type;
        $subscription_edit->typeable_id = $this->typeable_id;
        $subscription_edit->save();

        session()->flash('message', $this->current_id . ' ' . 'edit');
    }

    public function render()
    {
        return view('livewire.backend.subscription.edit-component');
    }
}
