@extends('layouts.app')

@section('content')
    <form action="{{ route('pantallaUno.store') }}" method="post">
        @csrf
        @component('components.selectCountry', [
            'paises' => $paises,
        ])
        @endcomponent

        <button class="btn btn-secondary">Atras</button>
        <button class="btn btn-primary">Siguiente</button>

    </form>
@endsection
