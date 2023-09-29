@extends('layouts.app', ['activePage' => 'carteira', 'titlePage' => __('Carteira de Clientes')])

@section('content')
<div class="content">
  <div class="container-fluid">


    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Cadastro de Clientes</h4>
          </div>
          <div class="card-body">

            <div class="row">
              <div class="col-md-12">
                <form method="get" action="/" class="form-horizontal">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" name="nome" placeholder="nome">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <input type="text" class="form-control" name="cpf" placeholder="cpf">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <div class="input-group date" data-provide="datepicker">
                          <labbel>Nascimento: &nbsp; </labbel>
                          <input type="date" class="form-control datepicker" name="data_nascimento">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="togglebutton">
                        <label>
                          <input type="checkbox" checked="">
                          <span class="toggle"></span>
                          Alfabetizado
                        </label>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="togglebutton">
                        <label>
                          <input type="checkbox">
                          <span class="toggle"></span>
                          Figura Pública
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <input type="text" class="form-control" name="rg" placeholder="RG">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <div class="input-group date" data-provide="datepicker">
                          <labbel>Expedição: &nbsp; </labbel>
                          <input type="date" class="form-control" name="data_exp"">
                        </div>
                      </div>
                    </div>
                    <div class=" col-md-4">
                          <div class="form-group">
                            <input type="text" class="form-control" name="orgao_emissor" placeholder="Orgão Emissor">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="text" class="form-control" name="nome_pai" placeholder="Nome do Pai">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="text" class="form-control" name="nome_mae" placeholder="Nome da Mãe">
                          </div>
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-md-10">
                          <div class="form-group">
                            <input type="text" class="form-control" name="endereco" placeholder="Endereço">
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <input type="text" class="form-control" name="numero" placeholder="Número">
                          </div>
                        </div>
                      </div>
                      <div class="row">

                        <div class="col-md-4">
                          <div class="form-group">
                            <input type="text" class="form-control" name="complemento" placeholder="Complemento">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <input type="text" class="form-control" name="naturalidade" placeholder="Naturalidade">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <input type="text" class="form-control" name="estado_civil" placeholder="Estado Civil">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <input type="text" class="form-control" name="orgao_1" placeholder="Orgão">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <input type="text" class="form-control" name="matricula_1" placeholder="Matrícula">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <input type="text" class="form-control" name="salario_1" placeholder="Salário">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <input type="text" class="form-control" name="banco_conta_1" placeholder="Banco">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <input type="text" class="form-control" name="agencia_conta_1" placeholder="Agência">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <input type="text" class="form-control" name="banco_conta_1" placeholder="Conta Bancária">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <input type="text" class="form-control" name="orgao_2" placeholder="Orgão 2">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <input type="text" class="form-control" name="matricula_2" placeholder="Matrícula 2">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <input type="text" class="form-control" name="salario_2" placeholder="Salário 2">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <input type="text" class="form-control" name="banco_conta_2" placeholder="Banco 2">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <input type="text" class="form-control" name="agencia_conta_2" placeholder="Agência 2">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <input type="text" class="form-control" name="banco_conta_2" placeholder="Conta Bancária 2">
                          </div>
                        </div>
                      </div>




                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <input type="text" class="form-control" name="telefone_1" placeholder="Telefone 1">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <input type="text" class="form-control" name="telefone_2" placeholder="Telefone 2">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <input type="text" class="form-control" name="telefone_3" placeholder="Telefone 3">
                          </div>
                        </div>
                      </div>





                </form>

              </div>
            </div>
          </div>
          <!--fim card-body-->

          <div class="card-footer ">
            <button type="submit" class="btn btn-fill btn-primary">Enviar</button>
          </div>

        </div>
        <!--fim card-->
      </div>
    </div>
  </div>
</div>
@endsection