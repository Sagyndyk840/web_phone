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
                                <a wire:click.prevent="sortBy('name_organization')" role="button" href="#">
                                    Organization name
                                </a>
                            </th>
                            <th>
                                <a wire:click.prevent="sortBy('department_name')" role="button" href="#">
                                    Department name
                                </a>
                            </th>
                            <th>
                                <a wire:click.prevent="sortBy('country')" role="button" href="#">
                                    Country
                                </a>
                            </th>
                            <th>
                                <a wire:click.prevent="sortBy('city')" role="button" href="#">
                                    City
                                </a>
                            </th>
                            <th>
                                <a wire:click.prevent="sortBy('street')" role="button" href="#">
                                    Street
                                </a>
                            </th>
                            <th>
                                <a wire:click.prevent="sortBy('house')" role="button" href="#">
                                    House
                                </a>
                            </th>
                            <th>
                                <a wire:click.prevent="sortBy('apartment')" role="button" href="#">
                                    Apartment
                                </a>
                            </th>
                            <th style="width: 170px">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($organizations as $organization)
                            <tr>
                                <td> {{ $organization->id }} </td>
                                <td> {{ $organization->name_organization }} </td>
                                <td> {{ $organization->department_name }} </td>
                                <td> {{ $organization->country }} </td>
                                <td> {{ $organization->city }} </td>
                                <td> {{ $organization->street }} </td>
                                <td> {{ $organization->house }} </td>
                                <td> {{ $organization->apartment }} </td>
                                <td class="d-flex align-items-baseline">
                                    <a href="{{ route('admin.organization.edit', $organization->id) }}" class="btn btn-block btn-warning mr-2">Edit</a>
                                    <button
                                            wire:click="delete({{ $organization->id }})"
                                            onclick="confirm(`Are you sure?`) || event.stopImmediatePropagation()"
                                            type="button"
                                            data-id="{{ $organization->id }}"
                                            data-name="{{ $organization->name }}"
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
                        {{ $organizations->links('vendor.livewire.bootstrap') }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
