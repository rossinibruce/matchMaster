<form class="form" action="{{ isset($team) ? route('teams.update', $team->id) : route('teams.store') }}" 
    method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($team)) @method('PUT') @endif

    <div class="card mb-2">
        <div class="card-header">Clube</div>

        <div class="card-body">
            <div class="row">
                <input type="hidden" name="team[person_id]" value="{{ Auth::user()->person->id }}">

                <div class="col mb-3">
                    
                </div>
                <div class="col mb-3">
                    <label for="name" class="form-label">Nome do clube</label>
                    <input type="text" class="form-control" id="name" name="team[name]" value="{{ $team->name ?? '' }}">
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label for="description" class="form-label">Descrição</label>
                    <textarea class="form-control" id="description" name="team[description]" rows="3">{{ $team->description ?? '' }}</textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-2">
        <div class="accordion" id="accordionSports">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Modalidades do clube
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionSports">
                    <div class="accordion-body">
                        @foreach($sports as $sport)
                            <div class="d-inline-flex">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" name="teamSports[]" id="flexSwitchCheck{{ $sport->id }}" value="{{ $sport->id }}"
                                        {{ isset($team) && $team->sports()->where('sport_id', $sport->id)->count() > 0 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexSwitchCheck{{ $sport->id }}">{{ $sport->name }}</label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-2">
        <div class="card-body">
            <div class="d-flex justify-content-end">
                <a href="{{ route('teams.index') }}" class="btn btn-danger me-2">Voltar</a>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</form>