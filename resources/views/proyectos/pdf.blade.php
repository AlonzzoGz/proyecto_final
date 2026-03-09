<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        .header { text-align: center; margin-bottom: 20px; }
        .header img { width: 80px; }
        .logo-container {
            background-color: #2c2c2c;
            display: inline-block;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        .header h2, .header h3 { margin: 5px 0; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th { background-color: #333; color: white; padding: 8px; text-align: left; }
        td { padding: 6px 8px; border-bottom: 1px solid #ddd; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        .fecha { text-align: right; margin-bottom: 10px; }
        .footer { text-align: center; margin-top: 30px; font-size: 11px; color: #555; }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo-container">
        <img src="{{ public_path('images/logo.png') }}" alt="Logo">
        </div>
        <h2>Gobierno de El Salvador</h2>
        <h3>Ministerio de Obras Públicas</h3>
        <div class="fecha">Fecha: {{ $fecha }}</div>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre Proyecto</th>
                <th>Fuente Fondos</th>
                <th>Monto Planificado</th>
                <th>Monto Patrocinado</th>
                <th>Monto Fondos Propios</th>
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
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">© Copyright 2025. Gobierno de El Salvador.</div>
</body>
</html>
