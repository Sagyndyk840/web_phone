<?php

namespace App\Http\Livewire\Backend\Organization;

use App\Models\Organization;
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
        Organization::find($id)->delete();
        session()->flash('message', $id . ' ' . 'delete');
    }

    public function render ()
    {
        return view('livewire.backend.organization.index-component', [
            'organizations' => Organization::orderBy($this->sort_field, $this->sort_asc ? 'asc' : 'desc')
                ->paginate(10)
        ]);
    }
}
