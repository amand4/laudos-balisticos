@extends('shared.table', ['card_name' => 'Listar Calibres',
'model_name_plural' => 'Calibres',
'model_name_singular' => 'Calibre',
'route_create_name' => 'calibres.create',
'ths' => ['Nome', 'Utilizado em:']])

@section('table-content')
    @if (count($calibres) > 0)
        @foreach ($calibres as $calibre)
            <tr>
                <td> {{ $calibre->nome }}</td>
                <td> {{ $calibre->tipo_arma }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('calibres.edit', $calibre) }}">
                        <i class="fa fa-fw fa-edit"></i> Editar</a>

                    <button value="{{ route('calibres.destroy', $calibre) }}" class="btn btn-danger delete">
                        <i class="fa fa-fw fa-trash"></i>
                        Deletar
                    </button>
                </td>
            </tr>
        @endforeach
    @endif
@endsection