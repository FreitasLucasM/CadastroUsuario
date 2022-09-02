@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Meu CRUD
                </div>
                <a href="/users" id="list-button" class="btn btn-primary">Lista de usuarios</a>
                <a href="/users/new" id="create-button" class="btn btn-primary">Cadastro usuarios</a>
            </div>
        </div>
    </div>
</div>
@endsection