<?php

namespace App\Http\Livewire\Backend\Person;

use App\Models\Person;
use Livewire\Component;
use Livewire\WithPagination;

class IndexComponent extends Component
{
    use WithPagination;

    public $sort_field = 'id';
    public $sort_asc = true;

    public function sortBy ($field)
    {
        if ($this->sort_field === $field) {
            $this->sort_asc = !$this->sort_asc;
        } else {
            $this->sort_asc = true;
        }

        $this->sort_field = $field;
    }

    public function delete ($id)
    {
        Person::find($id)->delete();
        session()->flash('message', $id . ' ' . 'delete');
    }

    public function render (): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.backend.person.index-component', [
            'peoples' => Person::orderBy($this->sort_field, $this->sort_asc ? 'asc' : 'desc')
                ->paginate(10)
        ]);
    }
}
