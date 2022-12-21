<?php

namespace App\Http\Livewire\Backend\Person;

use App\Models\Person;
use Livewire\Component;

class CreateComponent extends Component
{
    public $name = '';
    public $surname = '';
    public $patronymic = '';
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

    public function resetInput ()
    {
        $this->name = '';
        $this->surname = '';
        $this->patronymic = '';
    }

    public function store ()
    {
        $this->validate();

        Person::create([
            'name'       => $this->name,
            'surname'    => $this->surname,
            'patronymic' => $this->patronymic,
        ]);

        session()->flash('message', $this->name . ' ' . 'create');

        $this->resetInput();
    }

    public function render (): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.backend.person.create-component');
    }
}
