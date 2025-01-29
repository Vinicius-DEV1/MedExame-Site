@extends('layouts.painel-admin') <!-- Referencia o layout 'app.blade.php' -->
@section('header_title', 'Dashboard') <!-- Alterando o h1 -->

@section('content')
    <body>
        <div class="container-fluid">
            <div class="row">
                    <!-- Cards de Informações -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Consultas</h5>
                                    <p class="card-text">Presencial: 300<br>Remota: 150</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Exames</h5>
                                    <p class="card-text">Realizados: 200</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Vacinas</h5>
                                    <p class="card-text">Aplicadas: 100</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Odontologia</h5>
                                    <p class="card-text">Procedimentos: 80</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gráficos -->
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Distribuição de Vendas por Categoria</h5>
                                    <canvas id="salesDistributionChart" width="400" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Crescimento de Vendas</h5>
                                    <canvas id="salesGrowthChart" width="400" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tabelas -->
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Últimas Vendas</h5>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Tipo</th>
                                                    <th>Descrição</th>
                                                    <th>Clínica</th>
                                                    <th>Paciente</th>
                                                    <th>Data</th>
                                                    <th>Valor</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Consulta Presencial</td>
                                                    <td>Consulta Clínica Geral</td>
                                                    <td>Clínica X</td>
                                                    <td>Paciente Y</td>
                                                    <td>2023-10-01</td>
                                                    <td>R$ 150</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Exame</td>
                                                    <td>Exame de Sangue</td>
                                                    <td>Clínica Y</td>
                                                    <td>Paciente Z</td>
                                                    <td>2023-10-02</td>
                                                    <td>R$ 200</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Vacina</td>
                                                    <td>Vacina contra Gripe</td>
                                                    <td>Clínica Z</td>
                                                    <td>Paciente W</td>
                                                    <td>2023-10-03</td>
                                                    <td>R$ 80</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Odontologia</td>
                                                    <td>Limpeza Dental</td>
                                                    <td>Clínica A</td>
                                                    <td>Paciente B</td>
                                                    <td>2023-10-04</td>
                                                    <td>R$ 120</td>
                                                </tr>
                                                <!-- Adicione mais linhas conforme necessário -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabelas -->
<div class="row mt-4">
    <!-- Últimos Clientes Cadastrados -->
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Últimos Clientes Cadastrados</h5>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Data de Cadastro</th>
                            </tr>
                        </thead>
                        <tbody id="recentClientsTable">
                            <!-- Dados fictícios para clientes -->
                            <tr>
                                <td>João Silva</td>
                                <td>joao.silva@example.com</td>
                                <td>01/01/2025</td>
                            </tr>
                            <tr>
                                <td>Maria Oliveira</td>
                                <td>maria.oliveira@example.com</td>
                                <td>02/01/2025</td>
                            </tr>
                            <tr>
                                <td>Carlos Pereira</td>
                                <td>carlos.pereira@example.com</td>
                                <td>03/01/2025</td>
                            </tr>
                            <tr>
                                <td>Ana Costa</td>
                                <td>ana.costa@example.com</td>
                                <td>04/01/2025</td>
                            </tr>
                            <tr>
                                <td>Pedro Santos</td>
                                <td>pedro.santos@example.com</td>
                                <td>05/01/2025</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Últimas Clínicas Cadastradas -->
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Últimas Clínicas Cadastradas</h5>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Localização</th>
                                <th>Data de Cadastro</th>
                            </tr>
                        </thead>
                        <tbody id="recentClinicsTable">
                            <!-- Dados fictícios para clínicas -->
                            <tr>
                                <td>Clínica Vida</td>
                                <td>São Paulo, SP</td>
                                <td>01/01/2025</td>
                            </tr>
                            <tr>
                                <td>Clínica Saúde Total</td>
                                <td>Rio de Janeiro, RJ</td>
                                <td>02/01/2025</td>
                            </tr>
                            <tr>
                                <td>Clínica Bem Estar</td>
                                <td>Belo Horizonte, MG</td>
                                <td>03/01/2025</td>
                            </tr>
                            <tr>
                                <td>Clínica Primavera</td>
                                <td>Curitiba, PR</td>
                                <td>04/01/2025</td>
                            </tr>
                            <tr>
                                <td>Clínica Nova Esperança</td>
                                <td>Porto Alegre, RS</td>
                                <td>05/01/2025</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



        <!-- Bootstrap JS e dependências -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
        <!-- Chart.js para gráficos -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            // Gráfico de Distribuição de Vendas por Categoria
            var ctxDistribution = document.getElementById('salesDistributionChart').getContext('2d');
            var salesDistributionChart = new Chart(ctxDistribution, {
                type: 'pie',
                data: {
                    labels: ['Consultas', 'Exames', 'Vacinas', 'Odontologia'],
                    datasets: [{
                        label: 'Vendas por Categoria',
                        data: [450, 200, 100, 80],
                        backgroundColor: [
                            'rgba(0, 123, 255, 0.6)',
                            'rgba(40, 167, 69, 0.6)',
                            'rgba(255, 193, 7, 0.6)',
                            'rgba(220, 53, 69, 0.6)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        }
                    }
                }
            });

            // Gráfico de Crescimento de Vendas
            var ctxGrowth = document.getElementById('salesGrowthChart').getContext('2d');
            var salesGrowthChart = new Chart(ctxGrowth, {
                type: 'line',
                data: {
                    labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho'],
                    datasets: [
                        {
                            label: 'Consultas',
                            data: [100, 120, 130, 140, 150, 160],
                            borderColor: 'rgba(0, 123, 255, 1)',
                            borderWidth: 2
                        },
                        {
                            label: 'Exames',
                            data: [50, 60, 70, 80, 90, 100],
                            borderColor: 'rgba(40, 167, 69, 1)',
                            borderWidth: 2
                        },
                        {
                            label: 'Vacinas',
                            data: [30, 40, 50, 60, 70, 80],
                            borderColor: 'rgba(255, 193, 7, 1)',
                            borderWidth: 2
                        },
                        {
                            label: 'Odontologia',
                            data: [20, 25, 30, 35, 40, 45],
                            borderColor: 'rgba(220, 53, 69, 1)',
                            borderWidth: 2
                        }
                    ]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    </body>

@endsection