<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Pedido;
use App\Produto;
use DB;

class PedidoController extends Controller
{
        public function index(Request $request)
        {
            $datetime = date('d/m/yy');
            $fornecedor = Cliente::all()->pluck('nome', 'id');
            $produtos = Produto::all()->pluck('nome','id');

            return view ('frentecaixa.index', compact('fornecedor','datetime','produtos'));
        }
        public function adicionar(Request $request)
        {
            $cliente = Produto::all()->pluck('nome', 'id');
            $prd = $request->input('prd');
    
            return view ('frentecaixa.addproduto', compact('cliente','prd'));
        }
    
    
        public function editar($id)
        {
            $achaPedido = Pedido::find($id);
            return view('frentecaixa.editar',compact('achaPedido'));
        }
    
    
        public function salvar(PedidoRequest $request){
             \App\Pedido::create( $request->all());
            
             return redirect()->route('frentecaixa.index');
    
            }
    
    
            public function buscar (Request $request)
            {
              $busca = $request->get('criterio');
              $produtos = DB::table('produtos')->where('nome', 'LIKE','%'.$busca.'%')->paginate();
            
              if ($produtos->isempty()){
                  return redirect()->route('frentecaixa.index')->with('erro','Nenhum pedido foi encontrado!');
              }
              return view ('frentecaixa.index', ['produtos' => $produtos]);
            }
    
            public function deletar ($id)
            {
                $pedido = \App\Pedido::find($id);
                $pedido->delete();
            
                return redirect()->route('frentecaixa.index')->with('mensagem', 'O Produto '.$pedido->nome.' foi deletado com sucesso.');   
            }
        
    }
    