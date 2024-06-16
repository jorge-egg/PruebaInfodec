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

            <button class="btn btn-secondary">Atras</button>
            <button class="btn btn-primary">Siguiente</button>

        </form>
    @endcan

    <div class="lugares">
        <section class="img-section">
            <img src="{{ asset('img/lugares/petra-jordania.jpg') }}" alt="" class="img-lugares">
            <h3 class="img-text">hggg</h3>
        </section>
        <img src="{{ asset('img/lugares/petra-jordania.jpg') }}" alt="" class="img-lugares">
        <img src="{{ asset('img/lugares/petra-jordania.jpg') }}" alt="" class="img-lugares">
        <img src="{{ asset('img/lugares/petra-jordania.jpg') }}" alt="" class="img-lugares">
        <img src="{{ asset('img/lugares/petra-jordania.jpg') }}" alt="" class="img-lugares">
        <img src="{{ asset('img/lugares/petra-jordania.jpg') }}" alt="" class="img-lugares">
        <img src="{{ asset('img/lugares/petra-jordania.jpg') }}" alt="" class="img-lugares">
        <img src="{{ asset('img/lugares/petra-jordania.jpg') }}" alt="" class="img-lugares">
    </div>
@endsection
