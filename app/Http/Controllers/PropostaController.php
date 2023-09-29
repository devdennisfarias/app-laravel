<?php

namespace App\Http\Controllers;

use App\Models\Proposta;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PropostaController extends Controller
{

    public function index()
    {
        $propostas = Proposta::all();
        return view('propostas.index', compact('propostas'));
    }


    public function create()
    {
        return view('propostas.create');
    }


    public function store(Request $request)
    {
        
        //ddd($request->all());
        $proposta = new Proposta;
        $dados = $request->all();
        //dd($dados);

        $verificaCpf = Cliente::where("cpf", "=", $request->cpf)->first();

        if(!empty($verificaCpf)){            

            $proposta->cliente_id = $verificaCpf['id'];

            $proposta->numero_nexus = $dados['numero_nexus'];            
            $proposta->vendedor = $dados['vendedor'];
            $proposta->orgao = $dados['orgao'];
            $proposta->tabela_digitada = $dados['tabela_digitada'];
            $proposta->vigencia_tabela = $dados['vigencia_tabela'];
            $proposta->banco = $dados['banco'];
            $proposta->valor_bruto = $dados['valor_bruto'];
            $proposta->valor_liquido_liberado = $dados['valor_liquido_liberado'];
            $proposta->tx_juros = $dados['tx_juros'];
            $proposta->valor_parcela = $dados['valor_parcela'];
            $proposta->qtd_parcelas = $dados['qtd_parcelas'];

            //dd($proposta);

            $proposta->save();
            return redirect()
                ->route('propostas.listar')                
                ->withSuccess('Proposta cadastrada.');

        }

        return redirect()
            ->route('propostas.cadastrar')
            ->withDanger('Cliente não cadastrado')
            ->withInput();
        
    }


    public function show(Proposta $proposta)
    {
        //
    }


    public function edit($id)
    {
        $proposta = Proposta::find($id);
        $cliente = Cliente::find($proposta->cliente_id);

        if($proposta){
            return view('propostas.edit',[
                'cliente' => $cliente,
                'proposta' => $proposta
            ]);    
        }

        return redirect()->route('propostas.listar');
    }


    public function update(Request $request, $id)
    {
        
        $proposta = Proposta::find($id);
        $dados = $request->all();
        
        $validator = Validator::make($dados,[
            
        ]);

        $verificaCpf = Cliente::where("cpf", "=", $request->cpf)->first();
        //dd($verificaCpf->id);

        if(!empty($verificaCpf)){            

            $proposta->cliente_id = $verificaCpf->id;

            $proposta->numero_nexus = $dados['numero_nexus'];            
            $proposta->vendedor = $dados['vendedor'];
            $proposta->orgao = $dados['orgao'];
            $proposta->tabela_digitada = $dados['tabela_digitada'];
            $proposta->vigencia_tabela = $dados['vigencia_tabela'];
            $proposta->banco = $dados['banco'];
            $proposta->valor_bruto = $dados['valor_bruto'];
            $proposta->valor_liquido_liberado = $dados['valor_liquido_liberado'];
            $proposta->tx_juros = $dados['tx_juros'];
            $proposta->valor_parcela = $dados['valor_parcela'];
            $proposta->qtd_parcelas = $dados['qtd_parcelas'];

            //dd($proposta);

            $proposta->save();
            return redirect()
                ->route('propostas.listar')                
                ->withSuccess('Proposta atualizada.');

        } else {
            return redirect()
            ->back()
            ->withDanger('Cliente não cadastrado')
            ->withInput();
        }

        return redirect()
            ->back()
            ->withDanger();

    }



    public function destroy($id)
    {
        $proposta = Proposta::find($id);
        $proposta->delete();

        return redirect()->route('propostas.listar')->withSuccess('Proposta exluida.');
    }

    public function consultaCpf(Request $request){
        $cpf = $request->cpf;        
        $cliente = Cliente::where("cpf", $cpf)->first();

        if(!$cliente){
            $cliente=false;
        }
        return $cliente;
    }
}
