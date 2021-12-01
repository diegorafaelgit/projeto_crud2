@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>

                <div class="card-body ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Seja bem-vindo!!!</h1>
                    <p>Abaixo você confere a lista de clientes cadastrados com seu nome e seu email para contato:</p>
                    <a href="{{ url('usuarios') }}" class="btn btn-info">Lista dos usuarios</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
