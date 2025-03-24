<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido al Monasterio de la Rábida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos para el fondo */
        body {
            background-image: url('img/fondo.png'); /* Ruta de la imagen de fondo */
            background-size: cover; /* Cubrir toda la pantalla */
            background-position: center; /* Centrar la imagen */
            background-attachment: fixed; /* Fijar el fondo al desplazarse */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Estilos para el contenedor principal */
        .container {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco semitransparente */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #007bff;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            font-size: 1.2rem;
            margin-top: 20px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .form-select {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            margin-top: 10px;
            border-radius: 5px;
            border: 1px solid #ced4da;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido al Monasterio de la Rábida</h1>

        <!-- Menú de selección de idioma -->
        <select id="idioma" class="form-select">
            <option value="es">Español</option>
            <option value="en">Inglés</option>
            <option value="fr">Francés</option>
            <option value="de">Alemán</option>
            <option value="it">Italiano</option>
            <option value="pt">Portugués</option>
        </select>

        <!-- Botón "Iniciar ruta" -->
        <button id="iniciarRuta" class="btn btn-primary">Iniciar ruta</button>
    </div>

    <script>
        // Obtener el botón y el menú de idioma
        const botonIniciar = document.getElementById('iniciarRuta');
        const selectIdioma = document.getElementById('idioma');

        // Redirigir al archivo config.php con el idioma seleccionado
        botonIniciar.addEventListener('click', () => {
            const idiomaSeleccionado = selectIdioma.value;
            window.location.href = `config.php?idioma=${idiomaSeleccionado}`;
        });
    </script>
</body>
</html>