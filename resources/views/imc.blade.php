<x-layout>
    <h2 class="tituloPagina">Calcula tu IMC</h2>
    <img class="imgTabla" src="{{ asset('img/tablaIMC.jpg') }}" alt="Tabla IMC">

    <div class="formImc">
        <h5>
            Estatura (metros)
        </h5>
        <input class="estatura" type="number">
        <h5>
            Peso (kilogramos)
        </h5>
        <input class="peso" type="number">
        <h5>
            Resultado (%)
        </h5>
        <input class="resultado" type="number"  readonly>
        <div class="mensaje"></div>
        <a class="btn" href="#" onclick="imc()">Calcular</a>
    </div>
    
</x-layout>