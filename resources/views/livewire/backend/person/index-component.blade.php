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
                                <a wire:click.prevent="sortBy('surname')" role="button" href="#">
                                    Surname
                                </a>
                            </th>
                            <th>
                                <a wire:click.prevent="sortBy('name')" role="button" href="#">
                                    Name
                                </a>
                            </th>
                            <th>
                                <a wire:click.prevent="sortBy('patronymic')" role="button" href="#">
                                    Patronymic
                                </a>
                            </th>
                            <th style="width: 170px">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($peoples as $person)
                            <tr>
                                <td> {{ $person->id }} </td>
                                <td> {{ $person->surname }} </td>
                                <td> {{ $person->name }} </td>
                                <td> {{ $person->patronymic }} </td>
                                <td class="d-flex align-items-baseline">
                                    <a href="{{ route('admin.person.edit', $person->id) }}" class="btn btn-block btn-warning mr-2">Edit</a>
                                    <button
                                            wire:click="delete({{ $person->id }})"
                                            onclick="confirm(`Are you sure?`) || event.stopImmediatePropagation()"
                                            type="button"
                                            data-id="{{ $person->id }}"
                                            data-name="{{ $person->name }}"
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
                        {{ $peoples->links('vendor.livewire.bootstrap') }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
