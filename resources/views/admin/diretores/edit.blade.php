@extends('layout.component')
@section('page')
    <div class="col-8">
        <h4>Editar Diretor</h4>
    </div>
    <hr>
    <div class="col-lg-10 m-auto">
        @include('admin.diretores.form', ['acao' => 'Atualizar'])
    </div>
@endsection
