@extends('layouts.dashboard')

@section('dashboard-content')
    <div class="container py-4">
        <h3 class="mb-3">Asignar subgénero</h3>

        <form action="#" method="post">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Libro</label>
                    <select name="libro_id" class="form-select">
                        <option value="">— Selecciona un libro —</option>
                        @foreach($libros as $libro)
                            <option value="{{ $libro->id }}">{{ $libro->titulo }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Subgénero</label>
                    <select name="subgenero_id" class="form-select">
                        <option value="">— Selecciona un subgénero —</option>
                        @foreach($subgeneros as $subgenero)
                            <option value="{{ $subgenero->id }}">{{ $subgenero->nombre }}</option>
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
