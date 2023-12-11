<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llamada Ajax a un Endpoint</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <h1>Llamada Ajax a un Endpoint</h1>
    <button id="mostrarAnimalesBtn">Mostrar Animales</button>

    <div id="resultados">

    </div>

    <script>
        $(document).ready(function() {
            $('#mostrarAnimalesBtn').click(function() {
                $.ajax({
                    url: '/mostrarAnimales',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        $('#resultados').html(response.datos.join(', '));
                    },
                    error: function(error) {
                        console.error('Error en la llamada AJAX:', error);
                    }
                });
            });
        });
    </script>
</body>
</html>
