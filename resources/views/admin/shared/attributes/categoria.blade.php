<div class="col-lg-{{ $size ?? "12" }} mt-2" id="categoria">
    <label>Categoria *</label>
    <select class="js-single form-control{{ $errors->has('categoria') ? ' is-invalid' : '' }}" name="categoria">
        @foreach (['Armas', 'Munições'] as $categoria)
        <option value="{{ mb_strtolower($categoria)}}"
            {{ (mb_strtolower($categoria) == mb_strtolower($categoria2)) ? 'selected=selected' : '' }}>
            {{$categoria}}
        </option>
        @endforeach
    </select>
    @include('shared.error_feedback', ['name' => 'categoria'])
</div>