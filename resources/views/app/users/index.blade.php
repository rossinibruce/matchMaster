@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('user-index', ['user' => $user, 'person' => $person ])
        </div>
    </div>
</div>
@endsection