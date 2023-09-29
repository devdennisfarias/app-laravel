@extends('layouts.app', ['activePage' => 'clientes', 'titlePage' => __('Lista de Clientes')])

@section('content')
    <div class="content">



        <!-- Button trigger modal -->
        <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Launch demo modal
            </button>-->

        <!-- Modal -->
        <!--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>-->



        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Confirmação!</strong> {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif


        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-left">
                    <a href="{{ route('clientes.cadastrar') }}" class="btn btn-sm btn btn-success"><i
                            class="material-icons">add</i> Adicionar</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="card-title ">Lista de Clientes</h4>
                                </div>
                                <!--               <div class="col-md-6">
                                        <a href="{{ route('clientes.cadastrar') }}">
                                          <button class="btn btn-primary btn-round btn-fab float-right">
                                            <i class="material-icons">add</i>
                                          </button>
                                        </a>
                                      </div> -->
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Nome</th>
                                            <th>CPF</th>
                                            <th>Orgão</th>
                                            <th>Matrícula</th>
                                            <th>Salário</th>
                                            <th class="text-right">Ações</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($clientes as $dados)
                                            <tr>
                                                <td class="text-center">{{ $dados->id }}</td>
                                                <td>{{ $dados->nome }}</td>
                                                <td>{{ $dados->cpf }}</td>
                                                <td>{{ $dados->orgao_1 }}</td>
                                                <td>{{ $dados->matricula_1 }}</td>
                                                <td>{{ $dados->salario_1 }}</td>

                                                <td class="td-actions text-right">
                                                    
                                                    <!-- Button trigger modal -->
                                                    <button type="button" rel="tooltip" class="btn btn-info"
                                                        data-toggle="modal" data-target="#id{{ $dados->id }}">
                                                        <i class="material-icons">remove_red_eye</i>
                                                    </button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="id{{$dados->id}}" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel"><strong>{{$dados->nome}}</strong></h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">                     
                                                                    <strong>Nome: </strong>{{$dados->nome}}<br>                                               
                                                                    <strong>CPF: </strong>{{$dados->cpf}}<br>
                                                                    <strong>RG: </strong>{{$dados->rg}}<br>
                                                                    <strong>Telefone: </strong>{{$dados->telefone_1}}<br>
                                                                    <strong>Telefone 2: </strong>{{$dados->telefone_2}}<br>
                                                                    <strong>Telefone 3: </strong>{{$dados->telefone_3}}<br>
                                                                    <strong>Data Nascimento: </strong>{{$dados->data_nascimento}}<br>
                                                                    <strong>Orgão: </strong>{{$dados->orgao_1}}<br>
                                                                    <strong>Salário: </strong>{{$dados->salario_1}}<br>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger"
                                                                        data-dismiss="modal">Fechar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="{{ route('clientes.editar', $dados->id) }}">
                                                        <button type="button" rel="tooltip" class="btn btn-success">
                                                            <i class="material-icons">edit</i>
                                                        </button>
                                                    </a>
                                                    <a target="_blank" href="{{ route('cliente.pdf', $dados->id) }}">
                                                        <button type="button" rel="tooltip" class="btn btn-warning">
                                                            <i class="material-icons">print</i>
                                                        </button>
                                                    </a>
                                                    <form class="d-inline"
                                                        action="{{ route('clientes.deletar', $dados->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Tem certeza que deseja excluir?')">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" rel="tooltip" class="btn btn-danger">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div><!-- table-responsive -->
                        </div><!-- card-body-->
                    </div><!-- card-->
                </div><!-- col-md-12-->
            </div><!-- row-->
        </div><!-- container-fluid-->
    </div><!-- content-->
@endsection
