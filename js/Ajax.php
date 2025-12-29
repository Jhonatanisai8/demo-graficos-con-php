<script>
    async function cargarGrafico() {
        // Obtener datos del backend
        const respuesta = await fetch('./php/ListarVentas.php');
        const datosBackend = await respuesta.json();

        // Preparar las etiquetas (meses) y los valores (montos)
        const etiquetas = datosBackend.map(item => item.mes);
        const valores = datosBackend.map(item => item.monto);

        const ctx = document.getElementById('miGrafico').getContext('2d');
        new Chart(ctx, {
            // Puede ser 'line', 'pie', 'doughnut', etc.
            type: 'line', 
            data: {
                labels: etiquetas,
                datasets: [{
                    label: 'Ventas Mensuales ($)',
                    data: valores,
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }
    cargarGrafico();
</script>