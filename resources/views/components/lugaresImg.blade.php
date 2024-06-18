<div class="lugares">
    @foreach ($lugares as $lugar)
    <div class="card img-section">
        <img src="{{ asset('img/lugares/'.$lugar->imagen) }}" alt="" class="img-lugares">
        <div class="card-body">
          <h5 class="card-title">{{ $lugar->nombre }}</h5>
          @php
              $descripcion = 'descripcion_' . $idioma;
          @endphp
          <p class="card-text">{{ $idioma == null ? $lugar->descripcion_es : $lugar->$descripcion }}</p>
        </div>
        <p class="card-text" style="top: 0;color:#199094">{{ $lugar->ciudad }}</p>
      </div>
    @endforeach
</div>
