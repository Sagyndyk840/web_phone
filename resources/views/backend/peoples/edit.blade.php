@extends('backend.layouts.main')

@section('title', 'Edit person')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit person</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <livewire:backend.person.edit-component :person="$person"/>
        </div>
    </section>

@endsection
