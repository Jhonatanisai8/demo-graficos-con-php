<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graficos Dinamicos con Php</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <h1>Hi grafico</h1>
    <a href="php/ListarVentas.php">Ver mi Json</a>
    <div style="width: 600px; margin: auto;">
        <canvas id="miGrafico"></canvas>
    </div>
    <?php
    require_once './js/Ajax.php';
    ?>
</body>

</html>