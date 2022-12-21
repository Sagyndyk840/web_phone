<div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Table</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">
                                <a wire:click.prevent="sortBy('id')" role="button" href="#">
                                    #
                                </a>
                            </th>
                            <th>
                                <a wire:click.prevent="sortBy('phone')" role="button" href="#">
                                    Phone
                                </a>
                            </th>
                            <th>
                                Register
                            </th>
                            <th style="width: 170px">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($subscriptions as $subscription)
                            <tr>
                                <td> {{ $subscription->id }} </td>
                                <td> {{ $subscription->phone }} </td>
                                <td> {{ $subscription->id }} </td>
                                <td class="d-flex align-items-baseline">
                                    <a href="{{ route('admin.subscription.edit', $subscription->id) }}" class="btn btn-block btn-warning mr-2">Edit</a>
                                    <button
                                            wire:click="delete({{ $subscription->id }})"
                                            onclick="confirm(`Are you sure?`) || event.stopImmediatePropagation()"
                                            type="button"
                                            data-id="{{ $subscription->id }}"
                                            data-name="{{ $subscription->id }}"
                                            class="btn btn-block btn-danger btn-delete">Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        {{ $subscriptions->links('vendor.livewire.bootstrap') }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
