<x-app-layout>
    <x-slot name="header">
        <h2 class="font-weight-bold text-xl text-white dark:text-gray-800 leading-tight bg-dark p-4">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card border-dark">
                        <div class="card-header bg-dark text-white">{{ __('You\'re logged in!') }}</div>

                        <div class="card-body">

                            <!-- Menú con 4 botones -->
                            <div class="text-center mb-4">
                                <a href="{{ url('admin/incidencies') }}" class="btn btn-outline-primary mr-2">Botón 1</a>
                                <button type="button" class="btn btn-outline-success mr-2">Botón 2</button>
                                <button type="button" class="btn btn-outline-warning mr-2">Botón 3</button>
                                <button type="button" class="btn btn-outline-danger">Botón 4</button>
                            </div>

                            <!-- Contenido adicional -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

