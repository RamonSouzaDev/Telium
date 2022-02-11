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

                    <h1>SEJA BEM-VINDO À TELIUM !</h1>
                    <img src="{{ url('img/telium.jpg') }}" style="background-color: #ddd;
  border-radius: 100%;
  height: 150;
  object-fit: cover;
  width: 150px;
  align:center">
                    <a href="{{ url('clientes') }}">Lista de clientes</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
