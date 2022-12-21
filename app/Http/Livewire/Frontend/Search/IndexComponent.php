<?php

namespace App\Http\Livewire\Frontend\Search;

use App\Models\Organization;
use App\Models\Person;
use App\Models\Subscription;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Livewire\WithPagination;

class IndexComponent extends Component
{
    use WithPagination;

    public $search_query;

    public function updatingSearchQuery ()
    {
        $this->resetPage();
    }

    public function render ()
    {
        if ($this->search_query) {
            $subscriptions = Subscription::with(['typeable'])
                ->whereHasMorph('typeable', [Person::class, Organization::class], function (Builder $query, $type) {
                    switch ($type) {
                        case Person::class:
                            return $query->where('surname', 'like', '%' . $this->search_query . '%')
                                ->orWhere('name', 'like', '%' . $this->search_query . '%')
                                ->orWhere('patronymic', 'like', '%' . $this->search_query . '%');
                        case Organization::class:
                            return $query->where('name_organization', 'like', '%' . $this->search_query . '%')
                                ->orWhere('department_name', 'like', '%' . $this->search_query . '%')
                                ->orWhere('country', 'like', '%' . $this->search_query . '%')
                                ->orWhere('city', 'like', '%' . $this->search_query . '%')
                                ->orWhere('street', 'like', '%' . $this->search_query . '%')
                                ->orWhere('house', 'like', '%' . $this->search_query . '%')
                                ->orWhere('apartment', 'like', '%' . $this->search_query . '%');
                    }

                })
                ->orWhere('phone', 'like', '%' . $this->search_query . '%')
                ->paginate(10);
        } else {
            $subscriptions = Subscription::with('typeable')
                ->paginate(10);
        }

        return view('livewire.frontend.search.index-component', [
            'subscriptions' => $subscriptions
        ]);
    }
}
