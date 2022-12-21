<?php

namespace App\Http\Livewire\Backend\Person;

use App\Models\Person;
use Livewire\Component;

class EditComponent extends Component
{
    public $name = '';
    public $surname = '';
    public $patronymic = '';
    public $current_id;

    protected $rules = [
        'name'       => 'required',
        'surname'    => 'required',
        'patronymic' => 'required',
    ];

    protected $messages = [
        'name.required'       => 'Name field required',
        'surname.required'    => 'Surname field required',
        'patronymic.required' => 'Patronymic field required',
    ];

    public function mount ($person)
    {
        $this->name = $person->name;
        $this->surname = $person->surname;
        $this->patronymic = $person->patronymic;
        $this->current_id = $person->id;
    }

    public function update ()
    {
        $this->validate();

        $person_edit = Person::find($this->current_id);
        $person_edit->name = $this->name;
        $person_edit->surname = $this->surname;
        $person_edit->patronymic = $this->patronymic;
        $person_edit->save();
        session()->flash('message', $this->current_id . ' ' . 'edit');
    }

    public function render ()
    {
        return view('livewire.backend.person.edit-component');
    }
}
