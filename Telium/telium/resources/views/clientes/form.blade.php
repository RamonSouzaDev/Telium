@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <img src="{{ url('img/telium.jpg') }}" style="background-color: #ddd;
  border-radius: 100%;
  height: 150;
  object-fit: cover;
  width: 150px;
  align:center">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @if( Request::is('*/edit'))
                    <h1 style='align:center;text-align:center'>EDIÇÃO DE CLIENTE - TELIUM</h1>
                    <form action="{{ url('clientes/update') }}/{{ $cliente->id }}" method="post">
                    @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nome:</label>
                        <input type="text" name="name" class="form-control" value="{{ $cliente->name  }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">E-mail:</label>
                        <input type="email" name="email" class="form-control" value="{{ $cliente->email }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Rua</label>
                        <input type="text" name="street" class="form-control" value="{{ $endereco->street }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Número</label>
                        <input type="text" name="number" class="form-control" value="{{ $endereco->number }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Estado</label>
                        <input type="text" name="state" class="form-control" value="{{ $endereco->state }}">
                      </div>
                      

                      <button type="submit" class="btn btn-primary">Atualizar</button>
                      <button type="button" class="btn btn-secondary btn-lg"><a href="{{ url('clientes') }}">Voltar</a></button>
                    </form>

                    @else
                    <h1 style='align:center;text-align:center'>CADASTRO DE CLIENTE - TELIUM</h1>
                    <form action="{{ url('clientes/add') }}" method="post">
                    @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nome:</label>
                        <input type="text" name="name" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">E-mail:</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Rua</label>
                        <input type="text" name="street" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Número</label>
                        <input type="text" name="number" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Estado</label>
                        <input type="text" name="state" class="form-control">
                      </div>
                      
                      <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <button type="button" class="btn btn-secondary btn-lg"><a href="{{ url('clientes') }}">Voltar</a></button>
                    </form>
                    @endif
    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection