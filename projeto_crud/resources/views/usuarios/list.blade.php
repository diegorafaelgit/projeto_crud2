@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{ url('usuarios/new') }}">Novo usuário</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Lista dos usuários</h1>
                    @foreach ($usuarios as $u)
                    <p>{{ $u->name }} | {{ $u->email }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
