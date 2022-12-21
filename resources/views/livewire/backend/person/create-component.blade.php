<div>
    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Success</h5>
            {{ session('message') }}
        </div>
    @endif
    <div class="row">
        <div class="col-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create</h3>
                </div>
                <form wire:submit.prevent="store" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="surname">Surname</label>
                            <input wire:model="surname" type="text" class="form-control" id="surname" name="surname" placeholder="Enter surname">
                        </div>
                        @error('surname')
                        <div class="text-red">{{ $message }}</div> @enderror

                        <div class="form-group">
                            <label for="surname">Name</label>
                            <input wire:model="name" type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                        </div>
                        @error('name')
                        <div class="text-red">{{ $message }}</div> @enderror

                        <div class="form-group">
                            <label for="patronymic">Patronymic</label>
                            <input wire:model="patronymic" type="text" class="form-control" id="patronymic" name="patronymic" placeholder="Enter patronymic">
                        </div>
                        @error('patronymic')
                        <div class="text-red">{{ $message }}</div> @enderror
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="{{ route('admin.person.index') }}" class="ml-4 btn btn-success">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
