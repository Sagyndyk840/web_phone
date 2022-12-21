@extends('frontend.layouts.main')

@section('title', 'Home page')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-6">
                <livewire:frontend.search.index-component/>
            </div>
        </div>
    </div>
@endsection
