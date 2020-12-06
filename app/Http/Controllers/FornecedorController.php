<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\FornecedorRequest;
use App\Fornecedor;
use App\Cidade;
class FornecedorController extends Controller
{
    public function index()
    {	
        $fornecedores = Fornecedor::all() ;
        $countries = DB::table("pais")->pluck("nome","id");
        return view('pessoas.fornecedor',compact('countries', 'fornecedores'));
    }

    public function adicionar()
    {
        $clientes = Fornecedor::all();
        $cidades = Cidade::all();
        $countries = DB::table("pais")->pluck("nome","id");
        return view('pessoas.addfornecedor',compact('countries', 'clientes'));

    }
    public function getStateList(Request $request)
    {
        $states = DB::table("estados")
        ->where("pais_id",$request->country_id)
        ->pluck("nome","id");
        return response()->json($states);
    }

    public function getCityList(Request $request)
    {
        $cities = DB::table("cidades")
        ->where("estado_id",$request->state_id)
        ->pluck("nome","id");
        return response()->json($cities);
    }



public function salvar(FornecedorRequest $request){
    
    \App\Fornecedor::create( $request->all());
    
    return redirect()->route('pessoas.fornecedor');

    
}


public function deletar ($id)
{
    $fornecedor = \App\Fornecedor::find($id);
    $fornecedor->delete();

    return redirect()->route('pessoas.fornecedor')->with('mensagem', 'O Fornecedor '.$fornecedor->nome.' foi deletado com sucesso.');   
}



}
