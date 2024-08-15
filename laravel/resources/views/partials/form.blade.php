<form method="POST" action="{{ route('clientes.store') }}">
    @csrf
    <div style="width: 50%; margin-left: 1%" class="form-group row mb-3">
        <label for="nombres" class="col-sm-2 col-form-label">Nombres:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control @error('nombres') is-invalid @enderror" id="nombres" name="nombres" value="{{ old('nombres', $cliente->nombres) }}">
            @error('nombres')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div style="width: 50%; margin-left: 1%" class="form-group row mb-3">
        <label for="email" class="col-sm-2 col-form-label">Email:</label>
        <div class="col-sm-10">
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $cliente->email) }}">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div style="width: 50%; margin-left: 1%" class="form-group row mb-3">
        <label for="direccion" class="col-sm-2 col-form-label">Dirección:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control @error('direccion') is-invalid @enderror" id="direccion" name="direccion" value="{{ old('direccion', $cliente->direccion) }}">
            @error('direccion')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div style="width: 50%; margin-left: 1%" class="form-group row mb-3">
        <label for="fono" class="col-sm-2 col-form-label">Teléfono:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control @error('fono') is-invalid @enderror" id="fono" name="fono" value="{{ old('fono', $cliente->fono) }}">
            @error('fono')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div style="width: 50%; margin-left: 1%" class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-primary">{{ $btnText }}</button>
        </div>
    </div>
</form>
