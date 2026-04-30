@extends('app.layouts.app')

@section('title','Index')

@php $opcionActiva = 'Compras'; @endphp

@section('script')
    {{-- <script src="{{ asset('dashboard/js/app/compras/facturasCompras/facturasCompras_v1.js') }}" type="text/javascript"></script> --}}
@endsection

@section('content')
    <div>{{ Auth::user()->name }}</div>

    <!-- Authentication -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button type="submit">
            Salir
        </button>
    </form>
    <div>
        <h1>VISTA INICIAL POST LOGIN</h1>
    </div>
   
@endsection
