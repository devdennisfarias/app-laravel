<div class="sidebar" data-color="green" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <!--   <div class="logo">
    <a href="{{ route('home') }}" class="simple-text logo-normal">
      {{ __('Nexus OP') }}
    </a>
  </div> -->
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
          <i><img style="width:195px" src="{{ asset('material') }}/img/logo-nexus-horizontal.svg"></i>
          <p><br></p>
        </a>
      </li>

<!--       <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#cadastros" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/logo-nexus-horizontal.svg"></i>
          <i class="material-icons">library_books</i>
          <p>{{ __('Cadastros') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="cadastros">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'perfil' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('perfil.editar') }}">
                <i class="material-icons">edit</i>
                <span class="sidebar-normal">{{ __('Usuários') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <i class="material-icons">group</i>
                <span class="sidebar-normal"> {{ __('Gerenciar usuários') }} </span>
              </a>
            </li>


          </ul>
        </div>
      </li> -->
      <li class="nav-item{{ $activePage == 'clientes' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('clientes.listar') }}">
          <i class="material-icons">recent_actors</i>
          <span class="sidebar-normal"> {{ __('Clientes') }} </span>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'propostas' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('propostas.listar') }}">
          <i class="material-icons">pending_actions</i>
          <p>{{ __('Propostas') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'esteira' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('esteira.producao') }}">
          <i class="material-icons">format_indent_increase</i>
          <p>{{ __('Esteira') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'produtos' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('produtos.index') }}">
          <i class="material-icons">work</i>
          <span class="sidebar-normal"> {{ __('Produtos') }} </span>
        </a>
      </li>

      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#comissoes" aria-expanded="true">
          <!-- <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i> -->
          <i class="material-icons">payments</i>
          <p>{{ __('Comissões') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="comissoes">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'regra-de-comissao' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('comissoes.regras') }}">
                <i class="material-icons">library_books</i>
                <span class="sidebar-normal">{{ __('Regras') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'tabela-de-comissao' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('comissoes.tabelas') }}">
                <i class="material-icons">table_chart</i>
                <span class="sidebar-normal"> {{ __('Tabelas') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'metas' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('comissoes.metas') }}">
                <i class="material-icons">auto_graph</i>
                <span class="sidebar-normal"> {{ __('Metas') }} </span>
              </a>
            </li>

          </ul>
        </div>
      </li>

      <li class="nav-item{{ $activePage == 'controle-de-producao' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('producao') }}">
          <i class="material-icons">content_paste</i>
          <p>{{ __('Controle de Produção') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'carteira' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('carteira.clientes') }}">
          <i class="material-icons">view_list</i>
          <p>{{ __('Carteiras') }}</p>
        </a>
      </li>




    </ul>
  </div>
</div>