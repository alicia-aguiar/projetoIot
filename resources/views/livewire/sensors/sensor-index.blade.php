<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mt-4">Sensores</h2>
        <div class="d-flex gap-2">
            <a class="btn btn-primary mt-4" href="{{ route('sensors.create') }}">Novo Sensor</a>
        </div>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="mb-3">
        <input type="text" wire:model.live='search' placeholder="Pesquisar..." class="form-control">
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ambiente</th>
                <th>Código</th>
                <th>Tipo</th>
                <th>Descrição</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sensors as $sensor)
                <tr>
                    <th scope="row">{{ $sensor->id }}</th>
                    <td>{{ $sensor->ambiente->nome }}</td>
                    <td>{{ $sensor->codigo }}</td>
                    <td>{{ $sensor->tipo }}</td>
                    <td>{{ $sensor->descricao }}</td>
                    <td>{{ $sensor->status }}</td>
                    <td>
                      <input class="form-check-input" type="checkbox" role="switch" id="status-{{ $sensor->id }}"
                            wire::class="status({{ $sensor->id }})" @checked($sensor->status)
                        >
                        <span class="badge bg-{{ $sensor->status ? 'success' : 'danger' }}">
                            {{ $sensor->status ? 'ATIVO' : 'INATIVO' }}
                        </span>

                    </td>

                    <td>
                      <a href="{{ route('sensors.edit', ['id' => $sensor->id ])}}"
                        class="btn btn-sm btn-info">Editar</a>

                        <button wire:click='delete({{ $sensor->id }})'
                          class="btn btn-sm btn-danger">Excluir</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

