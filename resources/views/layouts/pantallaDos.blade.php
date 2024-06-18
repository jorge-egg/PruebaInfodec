@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/pantallaUno.css') }}">
@endsection

@section('content')
<form action="{{ route('pantallaDos.store') }}" method="post">
    @csrf
    <div class="container-sm" style="margin: 20px auto 20px auto">
        <div class="input-group mb-3">
            <span class="input-group-text">$</span>
            <input type="text" class="form-control" name="valorPesos" aria-label="Amount (to the nearest dollar)" placeholder="{{ __('messages.ingrese_el_presupuesto_del_viaje_en_pesos_colombianos') }}" required>
            <span class="input-group-text">.00</span>
        </div>
    </div>
    <a class="btn btn-secondary" href="javascript: history.go(-1)">{{ __('messages.atras') }}</a>
    <button class="btn btn-primary">{{ __('messages.siguiente') }}</button>
    @component('components.lugaresImg', [
        'lugares' => $lugares,
        'idioma' => session('status'),
    ])
    @endcomponent
</form>
@endsection
