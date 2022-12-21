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
                            <label for="phone">Phone</label>
                            <input wire:model="phone" type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
                        </div>
                        @error('phone')
                        <div class="text-red">{{ $message }}</div> @enderror

                        <div class="form-group">
                            <label for="register_type">Register type</label>
                            <select wire:change="$emit('register_type_listener')" name="register_type" wire:model="typeable_type" class="form-control">
                                <option value="App\Models\Person">Person</option>
                                <option value="App\Models\Organization">Organization</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="typeable_id">Register id</label>
                            <select name="typeable_id" wire:model="typeable_id" class="form-control">
                                @foreach($types as $type)
                                    <option value="{{ $type->id }}"> {{ $type->name ?? $type->name_organization }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="{{ route('admin.subscription.index') }}" class="ml-4 btn btn-success">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
