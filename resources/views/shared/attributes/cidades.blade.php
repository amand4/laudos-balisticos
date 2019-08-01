<div class="col-lg-{{ $size ?? "8" }} mt-2">
    <label for="cidade_id">Cidade</label>
    <select class="form-control {{ $errors->has('cidade_id') ? ' is-invalid' : '' }}"
            name="cidade_id">
        @foreach($cidades as $cidade)
            <option value="{{ $cidade->id }}" {{ $cidade->id == $cidade2 ? 'selected=selected' : '' }}>
                {{$cidade->nome}}
            </option>
        @endforeach
    </select>
    @include('shared.error_feedback', ['name' => 'cidade_id'])
</div>
