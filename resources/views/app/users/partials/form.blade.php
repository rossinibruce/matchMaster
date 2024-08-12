<form class="form" action="{{ route('users.update', $user->id) }}" method="POST" 
    enctype="multipart/form-data">
    @if(isset($user)) @method('PUT') @endif
    @csrf

    <div class="card mb-2">
        <div class="card-header">Dados pessoais</div>

        <div class="card-body">
            <div class="row">
                <div class="col mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="user[email]" value="{{ $user->email }}">
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="person[name]" value="{{ $person->name }}">
                </div>
                <div class="col mb-3">
                    <label for="lastname" class="form-label">Sobrenome</label>
                    <input type="text" class="form-control" id="lastname" name="person[lastname]" value="{{ $person->lastname }}">
                </div>
                <div class="col mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="person[cpf]" value="{{ $person->cpf }}">
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-2">
        <div class="accordion" id="accordionSports">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Modalidades do atleta
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionSports">
                    <div class="accordion-body">
                        @foreach($sports as $sport)
                            <div class="d-inline-flex">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" name="personSports[]" id="flexSwitchCheck{{ $sport->id }}" value="{{ $sport->id }}"
                                        {{ isset($person) && $person->sports()->where('sport_id', $sport->id)->count() > 0 ? 'checked' : '' }}>
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
            <div class="row">
                <div class="d-flex justify-content-end">
                    <a href="{{ route('home') }}" class="btn btn-danger me-2">Voltar</a>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>