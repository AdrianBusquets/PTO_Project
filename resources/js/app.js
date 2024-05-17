import './bootstrap';

window.imc = function() {
    let estatura = parseFloat(document.querySelector('.estatura').value);
    let peso = parseFloat(document.querySelector('.peso').value);
    let resultado = document.querySelector('.resultado');
    let mensaje = document.querySelector('.mensaje');
    
    if (isNaN(estatura) || isNaN(peso) || estatura <= 0 || peso <= 0) {
        resultado.value = "Valores inválidos";
        return;
    }
    

    let imc = peso / (estatura * estatura);
    resultado.value = imc.toFixed(2);

    if (imc < 18.5) {
        mensaje.textContent = "Peso bajo";
    } else if (imc >= 18.5 && imc < 24.9) {
        mensaje.textContent = "Peso ideal";
    } else if (imc >= 25 && imc < 29.9) {
        mensaje.textContent = "Sobrepeso";
    } else if (imc >= 30 && imc < 34.9) {
        mensaje.textContent = "Obesidad";
    } else if (imc >= 35 && imc < 39.9) {
        mensaje.textContent = "Obesidad severa";
    } else {
        mensaje.textContent = "Obesidad morbida";
    }
}
