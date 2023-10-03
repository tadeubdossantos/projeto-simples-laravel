@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Usuários</h1>
    </div>
    <div>
        <div class="table-responsive mt-4">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Idade</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user['id']}}</th>
                            <th scope="row">{{ $user['name']}}</th>
                            <th scope="row">{{ $user['age']}}</th>
                            <th scope="row">{{ $user['email']}}</th>
                            <th scope="row">
                                <a href="{{ route('atualiza', $user->id) }}"><button type="button" class="btn btn-success">Alterar</button></a>
                                <a href=""><button type="button" class="btn btn-danger">Excluir</button></a>
                            </th>

                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="container">
                <div class="row">
                    <div class="col">
                        {{ $users->links('custom/pagination') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
