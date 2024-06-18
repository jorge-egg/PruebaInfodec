@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/pantallaTres.css') }}">
@endsection

@section('content')
    <div class="fondo-div-1">
        <section style="display: grid; grid-template-columns: repeat(2, 1fr)">
            <div>
                <h3>{{ __('messages.pais') }}: </h3>
                <p>{{ $array['pais'] }}</p>
            </div>
            <div>
                <h3>{{ __('messages.ciudad') }}: </h3>
                <p>{{ $array['ciudad'] }}</p>
            </div>
        </section>
        <section>
            <h3>{{ __('messages.presupuesto') }}: </h3>
            <p>${{ $array['valor'] }}</p>
        </section>
        <section style="display: grid; grid-template-columns: repeat(3, 1fr)">
            @isset($array['climaData']['codigo'])
                <div class="col-md-12">
                    <h1>{{ intval($array['climaData']['temperatura']) }}&deg;C</h1>
                </div>

                <div class="col-md-12">
                    <h3 style="color: #000">{{ $array['climaData']['nombre'] }}, {{ $array['climaData']['pais'] }}</h3>
                </div>

                <div class="col-md-12">
                    <h4>{{ $array['climaData']['clima'] }}</h4>
                </div>
            @endisset

        </section>
        <section style="display: grid; grid-template-columns: repeat(2, 1fr)">
            @isset($array['moneda'])
                <div>
                    <h3>{{ $array['nombreMonedaDest'] }}: </h3>
                    <p>{{ $array['simboloMonedaDest'] . $array['moneda']['montoDestino'] }}</p>
                </div>
                <div>
                    <h3>{{ __('messages.tasa_de_cambio') }}: </h3>
                    <p>{{ $array['moneda']['tasaCambio'] }}</p>
                </div>
            @endisset
        </section>
        <a class="btn btn-primary" href='{{ route('/') }}'>{{ __('messages.volver_al_inicio') }}</a>
    </div>
@endsection
