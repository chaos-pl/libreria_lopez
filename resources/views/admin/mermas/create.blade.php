@extends('layouts.dashboard')

@section('dashboard-content')
    <div class="container py-4">
        <h3 class="mb-3">Nueva merma</h3>

        <form action="#" method="post">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Lote</label>
                    <select name="lote_id" class="form-select">
                        <option value="">— Selecciona un lote —</option>
                        @foreach($lotes as $lote)
                            <option value="{{ $lote->id }}">{{ $lote->codigo }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Tipo de merma</label>
                    <select name="tipo_merma" class="form-select">
                        <option value="">— Selecciona un tipo —</option>
                        <option value="Portada dañada">Portada dañada</option>
                        <option value="Hojas rasgadas">Hojas rasgadas</option>
                        <option value="Hojas arrugadas">Hojas arrugadas</option>
                        <option value="Faltan hojas">Faltan hojas</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Cantidad</label>
                    <input type="number" name="cantidad" class="form-control" min="1">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Destino</label>
                    <select name="destino" class="form-select">
                        <option value="">— Selecciona un destino —</option>
                        <option value="Devolucion_Proveedor">Devolución a proveedor</option>
                        <option value="Destruccion">Destrucción</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Usuario</label>
                    <select name="usuario_id" class="form-select">
                        <option value="">— Selecciona un usuario —</option>
                        @foreach($usuarios as $usuario)
                            <option value="{{ $usuario->id }}">{{ $usuario->name ?? ('Usuario #'.$usuario->id) }}</option>
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
