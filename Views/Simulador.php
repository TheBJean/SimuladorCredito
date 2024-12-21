<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador Plazo Fijo</title>
    <link rel="stylesheet" href="public/CSS/simulador.css">
</head>

<body>
    <div class="inicio">
        <img src="public/Imagen/images.png" alt="Banco Pichincha">
    </div>
    <div class="simulador">
        <p>Ingresa el monto a invertir</p>

        <input type="number" name="monto" id="monto" class="monto" placeholder="$0.00" style="text-align: center; font-size: 18px;" oninput="updatePlaceholder()">
        <p class="error" id="errorMsg1"></p>
        <p>Podrás invertir entre $500 y $100,000,000</p>
        <h2>Selecciona el tipo de plazo</h2>

        <div class="botones">
            <button id="mesesBtn">Meses</button>
            <button id="diasBtn">Días</button>

            <!-- Menú desplegable para "Meses" -->
            <div id="mesesMenu" class="menu">
                <button>12</button>
                <button>9</button>
                <button>6</button>
                <button id="otroMesesBtn" style="width: 80px; align-items: center; height: 40px;">Otro Plazo</button>
            </div>
            <!-- Menú desplegable para "Días" -->
            <div id="diasMenu" class="menu">
                <button>31</button>
                <button>61</button>
                <button>91</button>
                <button id="otrosDiasBtn" style="width: 80px; align-items: center; height: 40px;">Otro Plazo</button>
            </div>
            <div id="resultado" class="resultado">
                <p>En <span id="mesesResultado">0</span> <span id="tipoPlazoResultado">meses</span> recibirás:</p>
                <p>$<span id="montoResultado">0.00</span></p>
                <p>Con un interés de: <span id="interesResultado">0.00%</span></p>
            </div>
            <!-- Campo para ingresar otro plazo -->
            <div id="otroPlazo" class="otro-plazo">
                <label for="inputPlazo">Ingresa el número de <span id="tipoPlazo"></span>:</label>
                <input type="number" id="inputPlazo" />
                <p class="error" id="errorMsg"></p>
                <div class="button-container">
                    <button id="aceptarBtn">Aceptar</button>
                    <button id="cancelarBtn">Cancelar</button>
                </div>
            </div>
        </div>
        <!-- Botón Invertir Ahora -->
        <button id="invertirAhora" class="invertir-ahora">Invertir Ahora</button>
    </div>
    <script src="public/JS/script.js"></script>
</body>

</html>
