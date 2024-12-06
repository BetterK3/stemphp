document.getElementById('calcular-btn').addEventListener('click', function () {
    // Datos del problema
    const potenciaUtil = 75000; // En watts
    const rendimiento = 0.5; // 50%
    const densidadRadiacion = 1000; // En W/m²

    // Cálculo de la potencia total
    const potenciaReal = potenciaUtil / rendimiento;

    // Cálculo del área
    const superficie = potenciaReal / densidadRadiacion;

    // Mostrar el resultado
    const resultadoTexto = document.getElementById('resultado-texto');
    resultadoTexto.textContent = `La superficie del panel es de ${superficie} m².`;
    resultadoTexto.style.display = 'block';
});
