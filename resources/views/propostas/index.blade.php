@extends('layouts.app', ['activePage' => 'propostas', 'titlePage' => __('Lista de propostas')])

@section('content')
    <div class="content">

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
                    <a href="{{ route('propostas.store') }}" class="btn btn-sm btn btn-success"><i
                            class="material-icons">add</i> Adicionar</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="card-title ">Lista de propostas</h4>
                                </div>
                                <!--               <div class="col-md-6">
                                    <a href="{{ route('propostas.store') }}">
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
                                            <th>Nº Nexus</th>
                                            <th>Vendedor</th>
                                            <th>Banco</th>
                                            <th>Orgão</th>
                                            <th>Tabela Digitada</th>
                                            <th>Vigência</th>
                                            <th>R$ Bruto</th>
                                            <th>Líquido Liberado</th>
                                            <th>Juros</th>
                                            <th>R$ Parcela</th>
                                            <th>QTD Parcela</th>
                                            <th class="text-right">Ações</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($propostas as $dados)
                                            <tr>
                                                <td class="text-center">{{ $dados->id }}</td>
                                                <td> {{ $dados->numero_nexus }} </td>
                                                <td> {{ $dados->vendedor }} </td>
                                                <td> {{ $dados->banco }} </td>
                                                <td> {{ $dados->orgao }} </td>
                                                <td> {{ $dados->tabela_digitada }} </td>
                                                <td> {{ $dados->vigencia_tabela }} </td>
                                                <td> {{ $dados->valor_bruto }} </td>
                                                <td> {{ $dados->valor_liquido_liberado }} </td>
                                                <td> {{ $dados->tx_juros }} </td>
                                                <td> {{ $dados->valor_parcela }} </td>
                                                <td> {{ $dados->qtd_parcelas }} </td>

                                                <td class="td-actions text-right">
                                                    <!-- Button trigger modal -->
                                                    <button type="button" rel="tooltip" class="btn btn-info"
                                                        data-toggle="modal" data-target="#id{{ $dados->id }}">
                                                        <i class="material-icons">remove_red_eye</i>
                                                    </button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="id{{ $dados->id }}" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        <strong>{{ $dados->numero_nexus }}</strong></h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <strong>Vendedor: </strong>{{ $dados->vendedor }}<br>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger"
                                                                        data-dismiss="modal">Fechar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="{{ route('propostas.editar', $dados->id) }}">
                                                        <button type="button" rel="tooltip" class="btn btn-success">
                                                            <i class="material-icons">edit</i>
                                                        </button>
                                                    </a>
                                                    <a target="_blank" href="{{ route('proposta.pdf', $dados->id) }}">
                                                        <button type="button" rel="tooltip" class="btn btn-warning">
                                                            <i class="material-icons">print</i>
                                                        </button>
                                                    </a>
                                                    <form class="d-inline"
                                                        action="{{ route('propostas.deletar', $dados->id) }}"
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
