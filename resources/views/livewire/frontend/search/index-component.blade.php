<div>
    <div class="input-group input-group-sm mb-3 d-flex flex-column justify-content-center align-items-center">
        <h2>Search</h2>
        <input wire:model="search_query" type="text" class="form-control w-100">
    </div>
    <ul>
        @foreach($subscriptions as $subscription)
            <li>

                <p>
                    Phone: {{  $subscription->phone }}
                    <br>
                    @if($subscription->typeable->city ?? null)
                        Organization name: {{ $subscription->typeable->name_organization }}
                        <br>
                        Country: {{  $subscription->typeable->country }}
                        <br>
                        Street: {{  $subscription->typeable->street }}
                        <br>
                        City: {{  $subscription->typeable->city }}
                        <br>
                        House: {{  $subscription->typeable->house }}
                        <br>
                        Apartment: {{  $subscription->typeable->apartment }}
                        <br>
                        Department: {{  $subscription->typeable->department_name }}
                        <br>
                    @endif
                    @if ($subscription->typeable->shortname ?? null)
                        <b>Fullname: {{ $subscription->typeable->fullname }}</b>
                    @endif
                </p>
            </li>
        @endforeach

        {{ $subscriptions->links('vendor.livewire.bootstrap') }}
    </ul>
</div>
