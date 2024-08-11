<div>
    <div class="card">
        <form class="form" action="{{ route('users.update-profile', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="card-header">Perfil</div>

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

                <div class="d-flex justify-content-end">
                    <a href="{{ route('home') }}" class="btn btn-danger me-2">Voltar</a>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </form>
    </div>
</div>