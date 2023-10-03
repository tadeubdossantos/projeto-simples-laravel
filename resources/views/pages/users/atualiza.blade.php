@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Usuários</h1>
    </div>
    <div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('atualiza', $findUser->id) }}" class="form" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" value="{{ isset($findUser->name) ? $findUser->name : old('name') }}"
                    class="form-control @error('name') is-invalid @enderror" name="name">
                @if ($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label class="form-label">Idade</label>
                <input type="text" value="{{ isset($findUser->age) ? $findUser->age : old('age') }}"
                    class="form-control @error('age') is-invalid @enderror" name="age">
                @if ($errors->has('age'))
                    <div class="invalid-feedback">
                        {{ $errors->first('age') }}
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label class="form-label">E-mail</label>
                <input type="text" value="{{ isset($findUser->email) ? $findUser->email : old('emai') }}"
                    class="form-control @error('email') is-invalid @enderror" name="email">
                @if ($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
            </div>

            <button type="submit" class="btn btn-success">Gravar</button>
            <a href="/"><button type="button" class="btn btn-danger">Voltar</button></a>
        </form>
    </div>
@endsection
