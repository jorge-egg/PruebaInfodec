@extends('layouts.app')

@section('content')
<div class="container-xxl">
    <section>
        <h3>País: </h3><p>{{ $array['pais'] }}</p>
        <h3>Ciudad: </h3><p>{{ $array['ciudad'] }}</p>
    </section>
    <section>
        <h3>Presupuesto: </h3><p>${{ $array['valor'] }}</p>
    </section>
    <div class="col-md-4">
        @isset($array['climaData']['codigo'])
            <div class="col-md-12">
                <h1>{{ intval($array['climaData']['temperatura']) }}&deg;C</h1>
            </div>

            <div class="col-md-12">
                <h3>{{ $array['climaData']['nombre'] }}, {{ $array['climaData']['pais'] }}</h3>
            </div>

            <div class="col-md-12">
                <h4>{{ $array['climaData']['clima'] }}</h4>
            </div>
        @endisset

    </div>
    <section>
        <h3>{{ $array['nombreMonedaDest'] }}: </h3><p>{{ $array['simboloMonedaDest'].$array['moneda']['montoDestino'] }}</p>
    </section>
    <section>
        <h3>Tasa de cambio: </h3><p>{{ $array['moneda']['tasaCambio'] }}</p>
    </section>
    <button class="btn btn-primary">Volver al inicio</button>
</div>
@endsection
