<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('/Home/index');
});

// LOGIN E CADASTRO

Route::get('/login', function () {
    return view('/login');
});

Route::get('/redirecionar-login', function () {
    return view('/login/redirecionar-login');
});

Route::get('/login-paciente', function () {
    return view('/login/login-paciente');
});

Route::get('/login-clinica', function () {
    return view('/login/login-clinica');
});

Route::get('/cadastro', function () {
    return view('/cadastro/cadastro');
});






//ADMIN DO SITE

Route::get('/admin', function () {
    return view('/admin/login');
});

Route::get('/admin/dashboard', function () {
    return view('/admin/sub-diretorios/dashboard/vendas');
});

Route::get('/admin/clinicas', function () {
    return view('/admin/sub-diretorios/clinicas/clinicas');
});

Route::get('/admin/clinica/registro', function () {
    return view('/admin/sub-diretorios/clinica/');
});

Route::get('/admin/clinica/solicitacoes', function () {
    return view('/admin/sub-diretorios/clinica/solicitacoes-de-cadastro');
});

Route::get('/admin/clinica/analise', function () {
    return view('/admin/sub-diretorios/clinica/');
});

Route::get('/admin/usuarios', function () {
    return view('/admin/sub-diretorios/usuarios');
});

Route::get('/admin/especialidades', function () {
    return view('/admin/sub-diretorios/especialidades');
});

Route::get('/admin/classes', function () {
    return view('/admin/sub-diretorios/classes');
});

Route::get('/admin/procedimento', function () {
    return view('/admin/sub-diretorios/procedimentos');
});

Route::get('/admin/relatorios', function () {
    return view('/admin/sub-diretorios/relatorios');
});

Route::get('/admin/contato', function () {
    return view('/admin/sub-diretorios/contato');
});

Route::get('/admin/homepage', function () {
    return view('admin/sub-diretorios/homepage');
});

Route::get('/admin/mensagens', function () {
    return view('/admin/sub-diretorios/inbox');
});

Route::get('/admin/lucro', function () {
    return view('/admin/sub-diretorios/lucro');
});

// BUSCA
Route::get('/busca', function () {
    return view('/busca/busca');
});