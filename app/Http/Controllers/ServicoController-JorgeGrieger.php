<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ServicoRequest;
use App\Servico;
use DB;

class ServicoController extends Controller
{
    
   	public function index(){

   		$servicos = Servico::all();  

   		return view ('servico.index', compact('servicos'));
    }

    public function adicionar()
    {
        return view ('servico.addservico');
    }

    public function editar($id)
    {
        $servico = \App\Servico::find($id);
            return view('servico.editarservico',compact('servico'));
    }

    public function atualizar(ServicoRequest $request, $id)
    {
        $servico = \App\Servico::find($id)->update($request->all());
                \Session::flash('flash_message', [
                    'msg' => 'Serviço atualizado com sucesso!',
                    'class' => 'alert-success'
                ]);
                return redirect()->route('servico.index');
            
    }
       public function salvar(ServicoRequest $request){
            

            \App\Servico::create( $request->all());


            return redirect()->route('servico.index')->with('mensagem', 'Serviço cadastrado');
    
        }

        public function buscar (Request $request)
        {

          $busca = $request->get('criterio');
          $servicos = DB::table('servicos')->where('nome', 'LIKE','%'.$busca.'%')->paginate();
        
          if ($servicos->isempty()){
              return redirect()->route('servico.index')->with('erro','Nenhum serviço foi encontrado!');
          }
          return view ('servico.index', ['servicos' => $servicos]);
        }

        public function deletar ($id)
        {
            $servico = \App\Servico::find($id);
            $servico->delete();

            return redirect()->route('servico.index')->with('mensagem', 'O serviço '.$servico->nome.' foi deletado com sucesso.');   
        }
    }
