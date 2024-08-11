@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center p-2">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">{{ __('Criar equipe') }}</div>

                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            {{ __('Crie e gerencie a sua equipe para amistosos ou campeonatos.') }}
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('teams.create') }}" class="btn btn-success">Criar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">{{ __('Procurar equipe') }}</div>

                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            {{ __('Encontre equipes gerenciadas para ingressar') }}
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-success" type="button" id="button-addon2">Buscar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center p-2">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">{{ __('Minhas equipes') }}</div>

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
                                    @if( $team->user_id == Auth::user()->id )
                                        <td class="text-center"><span class="badge rounded-pill bg-primary">Proprietário</span></td>    
                                    @else
                                        <td class="text-center"><span class="badge rounded-pill bg-warning">Convidado</span></td>    
                                    @endif
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm {{ $team->user_id == Auth::user()->id ? 'btn-primary' : 'btn-warning' }}">P</a> {{-- Plantel --}}
                                        @if( $team->user_id == Auth::user()->id )
                                            <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-sm {{ $team->user_id == Auth::user()->id ? 'btn-primary' : 'btn-warning' }}">E</a>
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