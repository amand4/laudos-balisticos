@extends('layout.component')
@section('page')
    <div class="col-8">
        <h4>Cadastro de Revólver</h4>
    </div>
    <hr>
    @include('perito.revolver.form', ['acao' => 'Cadastrar'])
@endsection