@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/pantallaUno.css') }}">
@endsection

@section('content')
    @can('consultar')
        <form action="{{ route('pantallaUno.store') }}" method="post">
            @csrf
            @component('components.selectCountry', [
                'paises' => $paises,
            ])
            @endcomponent
            <button class="btn btn-primary btn-siguiente">Siguiente</button>

        </form>
    @endcan

    @component('components.lugaresImg', [
        'lugares' => $lugares
    ])
    @endcomponent
@endsection
