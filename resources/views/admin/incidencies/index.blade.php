<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Incidencias') }}
            </h2>
        </x-slot>

        <div class="container mt-4">
            <a href="{{ route('admin/incidencies/crear') }}" class="btn btn-primary mb-3">Crear</a>

            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Tipus</th>
                        <th>Descripción</th>
                        <th>Foto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($incidencies as $ins)
                    <tr>
                        <td class="v-align-middle">{{ $ins->nom }}</td>
                        <td class="v-align-middle">{{ $ins->tipus }}</td>
                        <td class="v-align-middle">{{ $ins->descripcio }}</td>
                        <td class="v-align-middle">
                            <img src="{{ asset("uploads/$ins->foto") }}" width="30" class="img-responsive" alt="Foto">
                        </td>
                        <td class="v-align-middle">
                            @if(Auth::user()->hasRole('admin'))
                                <!-- Botones para el rol admin -->
                                <form action="{{ route('admin/incidencies/eliminar', $ins->id) }}" method="POST"
                                    class="form-inline" role="form" onsubmit="return confirmarEliminar()">
                                    @csrf
                                    <a href="{{ route('admin/incidencies/detalles', $ins->id) }}"
                                        class="btn btn-dark mr-1">Detalles</a>
                                    <a href="{{ route('admin/incidencies/actualizar', $ins->id) }}"
                                        class="btn btn-primary mr-1">Editar</a>
                                    <button type="submit" class="btn btn-danger mr-1">Eliminar</button>
                                    <a href="https://wa.me/+34695449935?text="
                                        class="btn btn-outline-warning" target="_blank">WhatsApp</a>
                                </form>
                            @elseif(Auth::user()->hasRole('secretaria'))
                                <!-- Botones para el rol secretaria -->
                                <a href="{{ route('admin/incidencies/detalles', $ins->id) }}"
                                    class="btn btn-dark mr-1">Detalles</a>
                                <a href="{{ route('admin/incidencies/actualizar', $ins->id) }}"
                                    class="btn btn-primary mr-1">Editar</a>
                                <!-- Omitir los botones de eliminar y WhatsApp -->
                            @elseif(Auth::user()->hasRole('professor'))
                                <!-- Botones para otros roles (user, etc.) -->
                                <a href="{{ route('admin/incidencies/detalles', $ins->id) }}"
                                    class="btn btn-dark mr-1">Detalles</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <script type="text/javascript">
            function confirmarEliminar() {
                return confirm("¿Estás seguro de eliminar?");
            }
        </script>
    </x-app-layout>
</body>

</html>
