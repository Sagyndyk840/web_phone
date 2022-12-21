@extends('backend.layouts.main')

@section('title', 'Create organization')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create subscription</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <livewire:backend.subscription.create-component/>
        </div>
    </section>
@endsection
