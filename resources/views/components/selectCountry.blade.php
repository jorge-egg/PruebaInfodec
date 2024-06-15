<div class="container-lg" style="border: solid 1px #000; display: grid; grid-template-columns: repeat(2, 1fr)">
    <section class="section-select">
        <select class="form-select" aria-label="Default select example" id="idPaisSelect" name="selectPais">
            <option selected disabled>Selecciona un país</option>
            @foreach ($paises as $pais)
                <option value="{{ $pais -> idPais }}">{{ $pais -> nombre }}</option>
            @endforeach


        </select>
    </section>
    <section class="section-select">
        <select class="form-select" aria-label="Default select example" id="idCiudadSelect" name="selectCiudad">
            <option selected disabled>Selecciona una ciudad</option>
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
                $('#idCiudadSelect').append('<option value="">Seleccione una ciudad</option>');
            }
        });
    });
</script>
