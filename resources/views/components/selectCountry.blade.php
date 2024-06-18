<div class="container-lg" style="display: grid; grid-template-columns: repeat(2, 1fr); margin: 20px auto 20px auto">
    <section class="section-select">
        <select class="form-select" aria-label="Default select example" id="idPaisSelect" name="selectPais" required>
            <option value="" selected disabled>{{ __('messages.selecciona_un_pais') }}</option>
            @foreach ($paises as $pais)
                <option value="{{ $pais -> idPais }}">{{ $pais -> nombre }}</option>
            @endforeach
        </select>
    </section>
    <section class="section-select">
        <select class="form-select" aria-label="Default select example" id="idCiudadSelect" name="selectCiudad" required>
            <option value="" selected disabled>{{ __('messages.selecciona_una_ciudad') }}</option>
        </select>
    </section>
</div>

<script>
    $(document).ready(function() {
        $('#idPaisSelect').on('change', function() {
            var paisId = $(this).val();
            if (paisId) {
                $.ajax({
                    url: '/obtenerCiudades/' + paisId,
                    type: 'GET',
                    success: function(data) {
                        var ciudadSelect = $('#idCiudadSelect');
                        ciudadSelect.empty();
                        ciudadSelect.append('<option value="">Seleccione una ciudad</option>');
                        $.each(data, function(key, value) {
                            ciudadSelect.append('<option value="'+ value.idCiudad +'">'+ value.nombre +'</option>');
                        });
                    }
                });
            } else {
                $('#idCiudadSelect').empty();
                $('#idCiudadSelect').append('<option value="" selected disabled>Seleccione una ciudad</option>');
            }
        });
    });
</script>
