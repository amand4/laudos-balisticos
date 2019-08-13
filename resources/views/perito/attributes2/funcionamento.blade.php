<div class="col-lg-3">
    <div class="form-group">
        <label>Funcionamento</label>
        <select class="form-control{{ $errors->has('funcionamento') ? ' is-invalid' : '' }}" name="funcionamento">
            @foreach (['Eficiente', 'Ineficiente'] as $funcionamento)
                <option value="{{ mb_strtolower($funcionamento)}}"
                        {{ (mb_strtolower($funcionamento) == mb_strtolower($funcionamento2)) ? 'selected=selected' : '' }}>
                    {{$funcionamento}}
                </option>
            @endforeach
        </select>
        @include('shared.error_feedback', ['name' => 'funcionamento'])
    </div>
</div>
