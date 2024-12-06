<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema STEM</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>
<body style="background: url('images/fondo.jpg') no-repeat center center fixed; background-size: cover;">
    <div class="container">
        <section class="nombre-control">
            <div class="cuadro">
                <h3>Estudiante: José Alberto Bautista Hernández</h3>
                <p>No. de Control: 22090600</p>
            </div>
        </section>
        <section class="contenedor">
            <!-- Problema -->
            <div class="cuadro">
                <h3>Problema</h3>
                <p>Un panel fotovoltaico entrega una potencia útil de 75 000 W. Suponiendo que la densidad de radiación sea de 1000 W/m² y el rendimiento del panel del 50 %, calcular la superficie del panel.</p>
            </div>
            <div class="cuadro">
                <h3>Imagen del Problema</h3>
                <img src="images/problema.png" alt="Problema" class="problem-image">
            </div>
            <!-- Datos -->
            <div class="cuadro">
                <h3>Datos</h3>
                <ul>
                    <li><b>Q:</b> Energía generada</li>
                    <li><b>K:</b> Coeficiente de radiación</li>
                    <li><b>t:</b> Tiempo, en minutos</li>
                    <li><b>S:</b> Área, cm²</li>
                    <li><b>r:</b> Rendimiento</li>
                </ul>
            </div>
            <!-- Fórmulas -->
            <div class="cuadro">
                <h3>Fórmulas</h3>
                <ul>
                    <li>\( Q = K \cdot t \cdot S \cdot r \) en kcal</li>
                    <li>Convertir a kWh (base 1 h)</li>
                </ul>
            </div>
            <!-- Solución -->
            <div class="cuadro">
                <h3>Solución</h3>
                <p>La potencia útil es de 75 000 W.</p>
                <p>El rendimiento del panel es del 50 %, y por tanto la potencia total obtenida por este es:</p>
                <div class="equation">\( \eta = \frac{P_{util}}{P_{real}} \quad \rightarrow \quad P_{real} = \frac{P_{util}}{\eta} = \frac{75 000}{0.5} = 15 \cdot 10^4 \, \mathrm{W} \)</div>
                <p>Despejando la fórmula:</p>
                <div class="equation">\( S = \frac{P}{K} = \frac{15 \cdot 10^4 \, \mathrm{W}}{1000 \, \mathrm{W/m^2}} = 150 \, \mathrm{m^2} \)</div>
            </div>
            <!-- Resultado -->
            <div class="cuadro">
                <h3>Resultado</h3>
                <button id="calcular-btn">Mostrar Resultado</button>
                <p id="resultado-texto" style="display: none;">La superficie del panel es de \( 150 \, \mathrm{m^2} \).</p>
            </div>
        </section>
        <footer>
            <p>Creative Commons 4.0 - 2024</p>
        </footer>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
