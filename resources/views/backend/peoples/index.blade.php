@extends('backend.layouts.main')

@section('title', 'All peoples')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 d-flex ">
                <div class="col-6">
                    <h1>All peoples</h1>

                </div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.person.create') }}" class="btn btn-block btn-primary mr-2 ">Create</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <livewire:backend.person.index-component/>

        </div>
    </section>
@endsection
