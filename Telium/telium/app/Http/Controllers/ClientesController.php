<?php

namespace App\Http\Controllers;
use App\Cliente as Cliente;
use App\Models\Cliente as ModelsCliente;
use App\Models\Endereco as ModelsEndereco;
use Facade\FlareClient\Http\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ClientesController extends Controller
{
    public function index(){
        $clientes = ModelsCliente::get();
        return view('clientes.list', ['clientes' => $clientes]);
    }

    public function create(){
        return view('clientes.form');
    }

    public function add( Request $request ){

        $cliente = new ModelsCliente();
        $cliente = $cliente->create( $request->all() );
        $cliente->endereco()->create( $request->all() );
        return Redirect::to('/clientes');

    }

    public function edit($id){
        $cliente = ModelsCliente::findOrFail($id);
        $endereco = $cliente->endereco()->first();
        return view('clientes.form', ['cliente' => $cliente, 'endereco' => $endereco]);
        
    }

    public function update ( $id, Request $request ){
        $cliente = new ModelsCliente;
        $cliente = ModelsCliente::findOrFail( $id );
        $cliente->update( $request->all() );
        $cliente->endereco->update($request->all());
        Session::flash('msg_update', 'Cliente Telium Atualizado com Sucesso !');
        return Redirect::to('/clientes');
    }

    public function delete( $id ){
        $cliente = ModelsCliente::findOrFail ( $id );
        $cliente->endereco->delete();
        $cliente->delete();
        return Redirect::to('/clientes');
    }
}
