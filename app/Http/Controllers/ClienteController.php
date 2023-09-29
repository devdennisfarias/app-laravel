<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateClienteRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Laravel\Ui\Presets\React;

use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function carteira()
    {
        return view('clientes.carteira');
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $cliente = new Cliente;
        $dados = $request->all();

     //   dd($dados);

        $validator = Validator::make($dados,[
            'nome' => ['required', 'string', 'max:150'],
            'cpf' => ['required', 'string', 'unique:clientes', 'max:14'],
            'rg' => ['required', 'string', 'max:150'],
            'data_nascimento' => ['required', 'date'],
            'nome_pai' => ['required', 'string', 'max:150'],
            'nome_mae' => ['required', 'string', 'max:150'],     
            'telefone_1' => ['required', 'string', 'max:150'],
        ]);

        if($validator->fails()){
            return redirect()->route('clientes.cadastrar')
            ->withErrors($validator)
            ->withInput();
        }

        if($dados){            
            $cliente->nome = $dados['nome'];
            $cliente->cpf = $dados['cpf'];
            $cliente->rg = $dados['rg'];
            $cliente->data_exp = $dados['data_exp'];
            $cliente->orgao_emissor = $dados['orgao_emissor'];
            $cliente->data_nascimento = $dados['data_nascimento'];

            if(empty($dados['alfabetizado'])){
                $cliente->alfabetizado = "0";
            } else {
                $cliente->alfabetizado = $dados['alfabetizado'];                
            }

            if(empty($dados['figura_publica'])){
                $cliente->figura_publica = "0";
            } else {
                $cliente->figura_publica = $dados['figura_publica'];                
            }
            
            $cliente->nome_pai = $dados['nome_pai'];
            $cliente->nome_mae = $dados['nome_mae'];
            $cliente->endereco = $dados['endereco'];
            $cliente->numero = $dados['numero'];
            $cliente->complemento = $dados['complemento'];
            $cliente->nacionalidade = $dados['nacionalidade'];
            $cliente->naturalidade = $dados['naturalidade'];
            $cliente->estado_civil = $dados['estado_civil'];
            $cliente->orgao_1 = $dados['orgao_1'];
            $cliente->matricula_1 = $dados['matricula_1'];
            $cliente->especie_beneficio_1 = $dados['especie_beneficio_1'];
            $cliente->salario_1 = $dados['salario_1'];
            $cliente->banco_conta_1 = $dados['banco_conta_1'];
            $cliente->agencia_conta_1 = $dados['agencia_conta_1'];
            $cliente->conta_bancaria_1 = $dados['conta_bancaria_1'];
            $cliente->orgao_2 = $dados['orgao_2'];
            $cliente->matricula_2 = $dados['matricula_2'];
            $cliente->especie_beneficio_2 = $dados['especie_beneficio_2'];
            $cliente->salario_2 = $dados['salario_2'];
            $cliente->banco_conta_2 = $dados['banco_conta_2'];
            $cliente->agencia_conta_2 = $dados['agencia_conta_2'];
            $cliente->conta_bancaria_2 = $dados['conta_bancaria_2'];
            $cliente->telefone_1 = $dados['telefone_1'];
            $cliente->telefone_2 = $dados['telefone_2'];
            $cliente->telefone_3 = $dados['telefone_3'];
            
            //dd($cliente);

            $cliente->save();
            return redirect()
                ->route('clientes.listar')
                ->withSuccess('Cliente criado com sucesso.');
        }

        return redirect()->route('clientes.listar');

    }

    public function show(Cliente $cliente)
    {
        //
    }

    public function edit($id)
    {
        $cliente = Cliente::find($id);

        if($cliente){
            return view('clientes.editar',[
                'cliente' => $cliente
            ]);    
        }

        return redirect()->route('clientes.listar');
        
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $dados = $request->all();

        //dd($cliente);

        $validator = Validator::make($dados,[
            'nome' => ['required', 'string', 'max:150'],
            'cpf' => ['required', 'string', 'max:14'],
            'rg' => ['required', 'string', 'max:150'],
            'data_nascimento' => ['required', 'date'],
            'nome_pai' => ['required', 'string', 'max:150'],
            'nome_mae' => ['required', 'string', 'max:150'],     
            'telefone_1' => ['required', 'string', 'max:150'],
        ]);

        if($cliente){            
            $cliente->nome = $dados['nome'];

            // 2. Alteração do cpf
            // 2.1 Primeiro verificamos se o cpf foi alterado
            if($cliente->cpf != $dados['cpf']){
                // 2.2 Verificamos se o novo email já existe
                $hasCpf = Cliente::where('cpf', $dados['cpf'])->get();

                // 2.3 Se não existe, nós alteramos
                if(count($hasCpf) === 0){
                    $cliente->cpf = $dados['cpf'];
                } else {
                    $validator->errors()->add('cpf', __('validation.unique',[
                        'attribute' => 'cpf'
                    ]));
                }
            }
            
            $cliente->rg = $dados['rg'];
            $cliente->data_exp = $dados['data_exp'];
            $cliente->orgao_emissor = $dados['orgao_emissor'];
            $cliente->data_nascimento = $dados['data_nascimento'];

            if(empty($dados['alfabetizado'])){
                $cliente->alfabetizado = "0";
            } else {
                $cliente->alfabetizado = $dados['alfabetizado'];                
            }

            if(empty($dados['figura_publica'])){
                $cliente->figura_publica = "0";
            } else {
                $cliente->figura_publica = $dados['figura_publica'];                
            }
            
            $cliente->nome_pai = $dados['nome_pai'];
            $cliente->nome_mae = $dados['nome_mae'];
            $cliente->endereco = $dados['endereco'];
            $cliente->numero = $dados['numero'];
            $cliente->complemento = $dados['complemento'];
            $cliente->nacionalidade = $dados['nacionalidade'];
            $cliente->naturalidade = $dados['naturalidade'];
            $cliente->estado_civil = $dados['estado_civil'];
            $cliente->orgao_1 = $dados['orgao_1'];
            $cliente->matricula_1 = $dados['matricula_1'];
            $cliente->especie_beneficio_1 = $dados['especie_beneficio_1'];
            $cliente->salario_1 = $dados['salario_1'];
            $cliente->banco_conta_1 = $dados['banco_conta_1'];
            $cliente->agencia_conta_1 = $dados['agencia_conta_1'];
            $cliente->conta_bancaria_1 = $dados['conta_bancaria_1'];
            $cliente->orgao_2 = $dados['orgao_2'];
            $cliente->matricula_2 = $dados['matricula_2'];
            $cliente->especie_beneficio_2 = $dados['especie_beneficio_2'];
            $cliente->salario_2 = $dados['salario_2'];
            $cliente->banco_conta_2 = $dados['banco_conta_2'];
            $cliente->agencia_conta_2 = $dados['agencia_conta_2'];
            $cliente->conta_bancaria_2 = $dados['conta_bancaria_2'];
            $cliente->telefone_1 = $dados['telefone_1'];
            $cliente->telefone_2 = $dados['telefone_2'];
            $cliente->telefone_3 = $dados['telefone_3'];
            
            //dd($cliente);

            //4 Verificar os Errors
            if(count( $validator->errors() ) > 0) {
                // Se tiver Erros, retorna para route Edit com o erros
                return back()->withErrors($validator);
            }

            $cliente->save();
            return redirect()
                ->route('clientes.listar')
                ->withSuccess('Cliente atualizado com sucesso.');
        }

        return redirect()
            ->back()
            ->withDanger();
            
    }

    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect()->route('clientes.listar')->withSuccess('Cliente exluido.');
    }
}
