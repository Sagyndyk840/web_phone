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
                <form wire:submit.prevent="update" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name_organization">Organization name</label>
                            <input wire:model="name_organization" type="text" class="form-control" id="name_organization" name="name_organization" placeholder="Enter organization name">
                        </div>
                        @error('name_organization')
                        <div class="text-red">{{ $message }}</div> @enderror

                        <div class="form-group">
                            <label for="department_name">Department name</label>
                            <input wire:model="department_name" type="text" class="form-control" id="department_name" name="department_name" placeholder="Enter department name">
                        </div>
                        @error('department_name')
                        <div class="text-red">{{ $message }}</div> @enderror

                        <div class="form-group">
                            <label for="country">Country</label>
                            <input wire:model="country" type="text" class="form-control" id="country" name="country" placeholder="Enter country">
                        </div>
                        @error('country')
                        <div class="text-red">{{ $message }}</div> @enderror

                        <div class="form-group">
                            <label for="city">City</label>
                            <input wire:model="city" type="text" class="form-control" id="city" name="city" placeholder="Enter city">
                        </div>
                        @error('city')
                        <div class="text-red">{{ $message }}</div> @enderror

                        <div class="form-group">
                            <label for="street">Street</label>
                            <input wire:model="street" type="text" class="form-control" id="street" name="street" placeholder="Enter street">
                        </div>
                        @error('street')
                        <div class="text-red">{{ $message }}</div> @enderror

                        <div class="form-group">
                            <label for="house">House</label>
                            <input wire:model="house" type="text" class="form-control" id="house" name="house" placeholder="Enter house">
                        </div>
                        @error('house')
                        <div class="text-red">{{ $message }}</div> @enderror

                        <div class="form-group">
                            <label for="apartment">Apartment</label>
                            <input wire:model="apartment" type="text" class="form-control" id="apartment" name="apartment" placeholder="Enter apartment">
                        </div>
                        @error('apartment')
                        <div class="text-red">{{ $message }}</div> @enderror

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="{{ route('admin.organization.index') }}" class="ml-4 btn btn-success">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
