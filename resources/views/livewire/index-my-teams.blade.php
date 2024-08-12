<div>
    <div class="card">
        <div class="card-header text-center">{{ __('Meus clubes') }}</div>

        <div class="card-body">
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
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td class="text-center" colspan="3"><a href="{{ route('teams.index') }}" class="btn btn-sm btn-success">Gerenciar clubes</a></td>
                    </tr>
                </tbody>
            </table>
            {{ $teams->links() }}
        </div>
    </div>
</div>
