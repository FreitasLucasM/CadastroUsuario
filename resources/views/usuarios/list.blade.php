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
                    <div class="col-md-10 offset-md1">
                        <h1>Lista de usuarios</h1>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope=col>#</th>
                                    <th scope=col>Nome</th>
                                    <th scope=col>Email</th>
                                    <th scope=col>Editar</th>
                                    <th scope=col>Deletar</th>
                                </tr>
                            </thead>
                            @foreach($usuarios->sortBy('id') as $usuario)
                            <tbody>
                                <tr>
                                    <td>{{$loop-> index + 1}}</td>
                                    <td>{{$usuario->name}}</td>
                                    <td>{{$usuario->email}}</td>
                                    <td>
                                        <form action="/users/edit/{{$usuario->id}}" method="GET">
                                            @csrf<button type="submit" class="btn btn-info">
                                                <ion-icon name="create-outline"></ion-icon>
                                            </button>
                                    </td>
                                    </form>
                                    <td>
                                        <form action="/users/delete/{{$usuario->id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">
                                                <ion-icon name="trash-outline"></ion-icon>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection