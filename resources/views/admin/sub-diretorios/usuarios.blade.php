@extends('layouts.painel-admin')
@section('header_title', 'Usuários') <!-- Alterando o h1 -->
@section('content')
            <div class="row mt-4">

                <div>
                  <input type="text" class="form-control" placeholder="Pesquisar usuários cadastrados">
                </div>

                <!-- Lista de Usuários Cadastradas -->
              <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome do Usuário</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Exemplo 1 -->
                    <tr>
                        <th scope="row">1</th>
                        <td>Vitória Correia Almeida</td>
                        <td>901.378.030-01</td>
                        <td>Rua Principal, 123, Centro</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Editar</button>
                            <button class="btn btn-danger btn-sm">Deletar</button>
                            <button class="btn btn-info btn-sm">Detalhes</button>
                        </td>
                    </tr>
                    <!-- Exemplo 2 -->
                    <tr>
                        <th scope="row">2</th>
                        <td>Luiz Pereira Barbosa</td>
                        <td>945.203.300-25</td>
                        <td>Avenida Secundária, 456, Bairro Novo</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Editar</button>
                            <button class="btn btn-danger btn-sm">Deletar</button>
                            <button class="btn btn-info btn-sm">Detalhes</button>
                        </td>
                    </tr>
                    <!-- Exemplo 3 -->
                    <tr>
                        <th scope="row">3</th>
                        <td>Anna Alves Ribeiro</td>
                        <td>932.064.990-11</td>
                        <td>Praça Central, 789, Vila Antiga</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Editar</button>
                            <button class="btn btn-danger btn-sm">Deletar</button>
                            <button class="btn btn-info btn-sm">Detalhes</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>


      </div>
    </div>
  </div>

<!-- Script para interatividade -->
  <script>
    function toggleDropdown(id) {
      const dropdown = document.getElementById(`${id}-dropdown`);
      dropdown.classList.toggle('show');
    }

    // Fechar dropdowns ao clicar fora
    window.onclick = function(event) {
      if (!event.target.matches('.notifications, .email, .profile')) {
        const dropdowns = document.querySelectorAll('.dropdown-menu');
        dropdowns.forEach(dropdown => {
          if (dropdown.classList.contains('show')) {
            dropdown.classList.remove('show');
          }
        });
      }
    };
  </script>
@endsection