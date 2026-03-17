@extends('layouts.dashboard')

@section('dashboard-content')
    <div class="container py-4">
        <h3 class="mb-3">Nueva ubicación</h3>

        <form action="#" method="post">
            @csrf
            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label">Pasillo</label>
                    <input type="text" name="pasillo" class="form-control" maxlength="5">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Estante</label>
                    <input type="text" name="estante" class="form-control" maxlength="1">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Nivel</label>
                    <input type="text" name="nivel" class="form-control" maxlength="1">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Género (opcional)</label>
                    <select name="genero_id" class="form-select">
                        <option value="">— Sin género —</option>
                        @foreach($generos as $genero)
                            <option value="{{ $genero->id }}">{{ $genero->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-12 d-flex gap-2">
                    <button class="btn btn-primary">Guardar</button>
                    <a href="#" class="btn btn-secondary">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
@endsection
