@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header bg-dark text-white">
        <h4>Editar Proyecto</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('proyectos.update', $proyecto->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nombre del Proyecto</label>
                <input type="text" name="NombreProyecto"
                    class="form-control @error('NombreProyecto') is-invalid @enderror"
                    value="{{ old('NombreProyecto', $proyecto->NombreProyecto) }}">
                @error('NombreProyecto')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Fuente de Fondos</label>
                <input type="text" name="fuenteFondos"
                    class="form-control @error('fuenteFondos') is-invalid @enderror"
                    value="{{ old('fuenteFondos', $proyecto->fuenteFondos) }}">
                @error('fuenteFondos')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Monto Planificado</label>
                <input type="number" step="0.01" name="MontoPlanificado"
                    class="form-control @error('MontoPlanificado') is-invalid @enderror"
                    value="{{ old('MontoPlanificado', $proyecto->MontoPlanificado) }}">
                @error('MontoPlanificado')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Monto Patrocinado</label>
                <input type="number" step="0.01" name="MontoPatrocinado"
                    class="form-control @error('MontoPatrocinado') is-invalid @enderror"
                    value="{{ old('MontoPatrocinado', $proyecto->MontoPatrocinado) }}">
                @error('MontoPatrocinado')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Monto Fondos Propios</label>
                <input type="number" step="0.01" name="MontoFondosPropios"
                    class="form-control @error('MontoFondosPropios') is-invalid @enderror"
                    value="{{ old('MontoFondosPropios', $proyecto->MontoFondosPropios) }}">
                @error('MontoFondosPropios')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <a href="{{ route('proyectos.index') }}" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-warning">Actualizar</button>
        </form>
    </div>
</div>
@endsection
