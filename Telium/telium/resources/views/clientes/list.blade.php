@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><button type="button" class="btn btn-secondary btn-lg"><a href="{{ url('clientes/create') }}">CADASTRAR CLIENTE +</a></button></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 style='align:center;text-align:center'>LISTA DE CLIENTES - TELIUM</h1>
                    <table class="table table-striped table-dark">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Deletar</th>
                            </tr>
                        </thead>
                    @foreach ( $clientes as $c )
                    
                            
                        <tbody>
                            <tr>
                                <th scope="row">{{ $c->id }}</th>
                                <td>{{ $c->name }}</td>
                                <td>{{ $c->email }}</td>
                                <td>
                                    <a href="clientes/{{ $c->id }}/edit" class="btn btn-info">Editar</button>
                                </td>
                                <td>
                                    <form action="clientes/delete/{{ $c->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">Deletar</button>
                                    </form>
                                </td>
                            </tr>
                        
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
