<div>
    <div class="row">
        <div class="col-2 mb-3">
            <input class="form-control" wire:model.live="teamName" type="search" placeholder="Equipe">
        </div>
        <div class="col-2 mb-3">
            <input class="form-control" wire:model.live="personName" type="search" placeholder="Proprietário">
        </div>
    </div>
    
    <div class="card">
        <div class="card-header text-center">{{ __('Equipes encontradas') }}</div>

        <div class="card-body">
            <table class="table table-sm table-striped">
                <thead>
                    <tr>
                        <th>Nome da equipe</th>
                        <th>Nome do proprietário</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($teams) == 0)
                        <tr class="text-center">
                            <td colspan="3">Nenhum registro encontrado.</td>
                        </tr>
                    @endif
                    @foreach ($teams as $team)
                        <tr>
                            <td>{{ $team->name }}</td>
                            <td>{{ $team->person->name . ' ' . $team->person->lastname }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $teams->links() }}
        </div>
    </div>

</div>