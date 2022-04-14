@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="d-flex justify-content-between align-items-center mb-5">
                    <h1>{{ __('Dashboard') }} </h1>
                    <div class=" text-end font-xs">
                        <a href="/logout">Logout</a>
                    </div>
                </div>


                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{ __('You are logged in!') }}

            </div>
        </div>
    </div>
@endsection
