@extends('layouts.painel-admin')
@section('header_title', 'Lucro') <!-- Alterando o h1 -->
@section('content')
    <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title mb-0">Configuração de Percentual de Lucro</h5>
                        </div>
                        <div class="card-body">
                            <form id="formLucro">
                                <div class="mb-3">
                                    <label for="percentualLucro" class="form-label">Percentual de Lucro (%)</label>
                                    <input type="number" class="form-control" id="percentualLucro" placeholder="Digite o percentual de lucro" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection