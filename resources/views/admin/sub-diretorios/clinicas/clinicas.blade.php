@extends('layouts.painel-admin')
@section('header_title', 'Clínicas') <!-- Alterando o h1 -->
@section('content') 
    <!-- Botões de Ação -->
    <div class="d-flex justify-content-between mb-3">
      <button class="btn btn-primary">Adicionar Clínica</button>
      <button class="btn btn-secondary">Ver Solicitações de Cadastro</button>
    </div>

        <!-- CORPO -->
            <div class="row mt-4">

                <div>
                  <input type="text" class="form-control" placeholder="Pesquisar clínicas cadastradas">
                </div>

                <!-- Lista de Clínicas Cadastradas -->
              <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome da Clínica</th>
                        <th scope="col">CNPJ</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Exemplo 1 -->
                    <tr>
                        <th scope="row">1</th>
                        <td>Clínica Saúde Total</td>
                        <td>12.345.678/0001-99</td>
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
                        <td>Clínica Vida e Saúde</td>
                        <td>98.765.432/0001-11</td>
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
                        <td>Clínica Bem Estar</td>
                        <td>23.456.789/0001-22</td>
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