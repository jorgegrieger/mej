<?php

namespace App\Http\Controllers;
use App\Estado;
use App\Cidade;
use App\Http\Requests;
use App\Cliente;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\Http\Requests\ClienteRequest;
use DB;


class ClienteController extends Controller
{

		
			public function index()
			{	
				$clientes = Cliente::all();
				$cidades = Cidade::all();
				$countries = DB::table("pais")->pluck("nome","id");
				return view('pessoas.cliente',compact('countries', 'clientes'));
			}

			public function adicionar()
			{
				$clientes = Cliente::all();
				$cidades = Cidade::all();
				$countries = DB::table("pais")->pluck("nome","id");
				return view('pessoas.addcliente',compact('countries', 'clientes'));

			}
	
			public function getStateList(Request $request)
			{
				$states = DB::table("estados")->orderBy('nome', 'ASC')
				->where("pais_id",$request->country_id)
				->pluck("nome");
				$states = DB::table("estados")->orderBy('nome', 'ASC');
				return response()->json($states);
			}
	
			public function getCityList(Request $request)
			{
				$cities = DB::table("cidades")
				->where("estado_id",$request->state_id)
				->pluck("nome","id");
				return response()->json($cities);
			}
	
    
        public function salvar(ClienteRequest $request){
			
            \App\Cliente::create($request->all());
			
			\Session::flash('flash_message',[
				'msg'=>"Cliente adicionado com Sucesso!",
				'class'=>"alert-success"
			]);

            return redirect()->route('pessoas.cliente');
    
		}
		
		

public function deletar ($id)
{
    $cliente = \App\Cliente::find($id);
    $cliente->delete();

    return redirect()->route('pessoas.cliente')->with('mensagem', 'O Cliente '.$cliente->nome.' foi deletado com sucesso.');   
}
}
