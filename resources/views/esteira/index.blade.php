@extends('layouts.app', ['activePage' => 'esteira', 'titlePage' => __('Esteira de Produção')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="card">
        <div class="card-header card-header-primary">
          <div class="row">
            <div class="col-md-12">
              <h4 class="card-title text-center">Acompanhamento de Propostas Digitadas</h4>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form method="get" action="" class="form-horizontal">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Número da Proposta</label>
                  <input type="text" class="form-control" name="numero_proposta">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">vendedor</label>
                  <input type="text" class="form-control" name="vendedor">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">CPF</label>
                  <input type="text" class="form-control" name="cpf">
                </div>
              </div>
            </div>

            <div class="row">

              <div class="col-md-4">
                <div class="form-group">
                  <label class="label">Data Inicial</label>
                  <input type="date" class="form-control" name="data_inicial">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="label">Data Final</label>
                  <input type="date" class="form-control" name="data_final">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <select id="inputState" class="form-control">
                    <option selected>Status</option>
                    <option>Pendenciada</option>
                    <option>Finalização</option>
                    <option>Criação</option>
                    <option>Integração Robô</option>
                  </select>
                </div>
              </div>
            </div>
          </form>
        </div><!-- card-body-->
        <div class="card-footer">
          <div class="col-lm-12 text-right">
            <button type="submit" class="btn btn-fill btn-info"><i class="material-icons">search</i> Pesquisar</button>
          </div>
        </div>
      </div><!-- card-->

    </div><!-- row-->

    <div class="row">
      <div class="card">
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
                  <td> {{ $dados->orgão }} </td>
                  <td> {{ $dados->tabela_digitada }} </td>
                  <td> {{ $dados->vigencia_tabela }} </td>
                  <td> {{ $dados->valor_bruto }} </td>
                  <td> {{ $dados->valor_liquido_liberado }} </td>
                  <td> {{ $dados->tx_juros }} </td>
                  <td> {{ $dados->valor_parcela }} </td>
                  <td> {{ $dados->qtd_parcelas }} </td>

                  <td class="td-actions text-right">
                      <button type="button" rel="tooltip" class="btn btn-info">
                        <i class="material-icons">remove_red_eye</i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-success">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-warning">
                        <i class="material-icons">print</i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-danger">
                        <i class="material-icons">close</i>
                      </button>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- table-responsive -->
        </div>
      </div>
    </div>



  </div><!-- container-fluid-->
</div><!-- content-->
@endsection