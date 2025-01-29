@extends('layouts.painel-admin')
@section('header_title', 'Serviços diferenciados') <!-- Alterando o h1 -->
@section('content')

    <div class="container mt-5 ms-2">        
        <!-- Formulário de Cadastro -->
        <form>
            <div class="mb-3">
                <label for="dataInicial" class="form-label">Data Inicial</label>
                <input type="date" class="form-control" id="dataInicial" required>
            </div>
            <div class="mb-3">
                <label for="dataFinal" class="form-label">Data Final</label>
                <input type="date" class="form-control" id="dataFinal">
            </div>
            <div class="mb-3">
                <label for="codigo" class="form-label">Código</label>
                <input type="text" class="form-control" id="codigo" required>
            </div>
            <div class="mb-3">
                <label for="procedimento" class="form-label">Procedimento</label>
                <input type="text" class="form-control" id="procedimento" required>
            </div>
            <div class="mb-3">
                <label for="valor" class="form-label">Valor</label>
                <input type="number" class="form-control" id="valor" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
@endsection