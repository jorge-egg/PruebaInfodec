@extends('layouts.app')

@section('content')
<form action="{{ route('pantallaDos.store') }}" method="post">
    @csrf
    <div class="container-sm">
        <div class="input-group mb-3">
            <span class="input-group-text">$</span>
            <input type="text" class="form-control" name="valorPesos" aria-label="Amount (to the nearest dollar)" placeholder="Ingrese el presupuesto del viaje en pesos colombianos" required>
            <span class="input-group-text">.00</span>
        </div>
    </div>
    <button class="btn btn-secondary">Atras</button>
    <button class="btn btn-primary">Siguiente</button>
</form>
@endsection
