@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 p-2">
                <div class="card">
                    <div class="card-header text-center">{{ __('Criar clube') }}</div>

                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            {{ __('Crie e gerencie a seu clube para amistosos ou campeonatos.') }}
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('teams.create') }}" class="btn btn-success">Criar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-2">
                <div class="card">
                    <div class="card-header text-center">{{ __('Procurar clubes') }}</div>

                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            {{ __('Encontre equipes gerenciadas para participar') }}
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('teams.search-teams') }}" class="btn btn-success">Buscar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-md-12 p-2">
                <div class="card">
                    <div class="card-header text-center">{{ __('Meus clubes') }}</div>

                    <table class="table table-sm table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th class="text-center">Função</th>
                                <th class="text-center">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teams as $team)
                                <tr>
                                    <td>{{ $team->name }}</td>
                                    @if( $team->person_id == Auth::user()->person->id )
                                        <td class="text-center"><span class="badge rounded-pill bg-primary">Proprietário</span></td>    
                                    @else
                                        <td class="text-center"><span class="badge rounded-pill bg-warning">Convidado</span></td>    
                                    @endif
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm {{ $team->person_id == Auth::user()->person->id ? 'btn-primary' : 'btn-warning' }}">P</a> {{-- Plantel --}}
                                        @if( $team->person_id == Auth::user()->person->id )
                                            <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-sm {{ $team->person_id == Auth::user()->person->id ? 'btn-primary' : 'btn-warning' }}">E</a>
                                        @endif 
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $teams->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection