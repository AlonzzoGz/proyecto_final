@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Proyectos</h1>
    <a href="{{ route('proyectos.create') }}" class="btn btn-primary">
        + Nuevo Proyecto
   <a href="{{ route('proyectos.pdf') }}" class="btn btn-danger ms-2" target="_blank">
    📄 Generar PDF
    </a>
</div>

<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nombre Proyecto</th>
            <th>Fuente Fondos</th>
            <th>Monto Planificado</th>
            <th>Monto Patrocinado</th>
            <th>Monto Fondos Propios</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($proyectos as $proyecto)
        <tr>
            <td>{{ $proyecto->id }}</td>
            <td>{{ $proyecto->NombreProyecto }}</td>
            <td>{{ $proyecto->fuenteFondos }}</td>
            <td>${{ number_format($proyecto->MontoPlanificado, 2) }}</td>
            <td>${{ number_format($proyecto->MontoPatrocinado, 2) }}</td>
            <td>${{ number_format($proyecto->MontoFondosPropios, 2) }}</td>
            <td>
                <a href="{{ route('proyectos.edit', $proyecto->id) }}"
                   class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('proyectos.destroy', $proyecto->id) }}"
                      method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('¿Eliminar este proyecto?')">
                        Eliminar
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
