@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            <div class="col-md-4 p-2">
                @livewire('index-my-teams', ['user' => Auth::user()])
            </div>
            
            <div class="col-md-4 p-2">
                <div class="card">
                    <div class="card-header text-center">{{ __('Procurar partida') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-2">
                <div class="card">
                    <div class="card-header text-center">{{ __('Procurar campeonato') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
