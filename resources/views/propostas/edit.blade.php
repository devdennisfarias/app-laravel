@extends('layouts.app', ['activePage' => 'propostas', 'titlePage' => __('Editar de Propostas')])

@section('content')
    <div class="content">


        @if (session('danger'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Ocorreu um erro!</strong> {{ session('danger') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <a href="{{ route('clientes.cadastrar') }}" class="btn btn-sm btn btn-success"><i class="material-icons">add</i>
                Cadastrar cliente agora</a>
        @endif

        <div id="cliente-nao-encontrado" class="d-none">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Ocorreu um erro!</strong> Cliente não cadastrado
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <a href="{{ route('clientes.cadastrar') }}" class="btn btn-sm btn btn-success"><i class="material-icons">add</i>
                Cadastrar cliente agora</a>
        </div>


        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Cadastro de Propostas</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <form name="cadastro_proposta" method="post" action="{{ route('propostas.editar', $proposta->id) }}"
                                        class="form-horizontal">
                                        @method('PUT')
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Número Nexus</label>
                                                    <input type="text" class="form-control" name="numero_nexus" value="{{$proposta->numero_nexus}}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">CPF Cliente</label>
                                                    <input readonly="readonly" id="cpf" type="text" class="form-control" name="cpf" value="{{$cliente->cpf}}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Vendedor</label>
                                                    <input type="text" class="form-control" name="vendedor" value="{{$proposta->vendedor}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Orgão</label>
                                                    <input readonly="readonly" id="orgao" type="text" class="form-control" name="orgao" value="{{$proposta->orgao}}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Tabela Digitada</label>
                                                    <input type="text" class="form-control" name="tabela_digitada" value="{{$proposta->tabela_digitada}}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Vigência da Tabela</label>
                                                    <input type="text" class="form-control" name="vigencia_tabela" value="{{$proposta->vigencia_tabela}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Banco</label>
                                                    <input Readonly id="banco" type="text" class="form-control"
                                                        name="banco" value="{{$proposta->banco}}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Valor Bruto</label>
                                                    <input id="valor_bruto" type="text" class="form-control"
                                                        name="valor_bruto" value="{{$proposta->valor_bruto}}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Valor Líquido Liberado</label>
                                                    <input id="valor_liquido_liberado" type="text" class="form-control"
                                                        name="valor_liquido_liberado" value="{{$proposta->valor_liquido_liberado}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Tx de Júros</label>
                                                    <input type="text" class="form-control" name="tx_juros" value="{{$proposta->tx_juros}}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Valor da Parcela</label>
                                                    <input id="valor_parcela" type="text" class="form-control"
                                                        name="valor_parcela" value="{{$proposta->valor_parcela}}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Qtd Parcelas</label>
                                                    <input type="number" class="form-control" name="qtd_parcelas" value="{{$proposta->qtd_parcelas}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer ">
                                            <button type="submit" class="btn btn-fill btn-primary">Cadastrar</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div> <!-- fim card -->
                </div><!-- fim col-12 -->
            </div><!-- fim row -->
        </div><!-- fim container-fluid -->
    </div><!-- Fim content -->

@endsection

@section('post-script')
    <script> 
        $(document).ready(function(){            
            $("#cpf").blur(function(){    
                data = $("#cpf").val();
                $.get("{{route('propostas.consulta-cpf')}}", {cpf:data}, function(data, status){                    
                    if(data == false){
                        $("#cliente-nao-encontrado").removeClass("d-none");
                    } else{
                        $("#cliente-nao-encontrado").addClass("d-none");
                        $('#orgao').val(data['orgao_1']);
                        $('#banco').val(data['banco_conta_1']);
                    }                    
                });
            });
        })
    </script>
@endsection
