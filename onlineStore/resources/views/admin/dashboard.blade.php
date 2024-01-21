<!-- crear una vista para mostrar los datos de estadísticas en el dashboard -->

{{-- resources/views/admin/dashboard.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Panel de Control</h1>
        
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Estadísticas de la aplicación</h5>
                <ul>
                    <li>Usuarios registrados: {{ $statistics->user_count ?? 0 }}</li>
                    <li>Total de pedidos: {{ $statistics->order_count ?? 0 }}</li>
                    <li>Total de productos: {{ $statistics->product_count ?? 0 }}</li>
                    {{-- Agrega otras estadísticas según sea necesario --}}
                </ul>
            </div>
        </div>
    </div>
@endsection
