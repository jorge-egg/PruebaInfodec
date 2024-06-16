@extends('layouts.app')

@section('content')
@component('components.selectCountry')

@endcomponent

<div class="card" style="width: 18rem;">
    <img src="{{ asset('img/lugares/petra-jordania.jpg') }}" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>

    <main class="px-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>Búsqueda Global del Clima</h2>
                    <form action="{{ route('search') }}" method="get">
                        @csrf
                        <div class="form-group">
                            <label for="city">
                                Introduce el nombre de la ciudad
                            </label>
                            <input type="text" class="form-control mt-2" name="city" id="city"
                                placeholder="Nombre de la ciudad">
                            @error('city')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        @isset($notFound)
                            <div class="alert alert-danger mt-3" role="alert">
                                Ciudad no encontrada, intente de nuevo!
                            </div>
                        @endisset

                        <button type="submit" class="btn btn-success mt-3">Consultar</button>
                    </form>
                </div>

                
            </div>
        </div>

    </main>
@endsection
