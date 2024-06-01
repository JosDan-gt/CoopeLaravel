function calcularFactorial() {
    // Obtener el número ingresado por el usuario
    let numero = document.getElementById("numero").value;
    
    // Validar que se ingresó un número positivo
    if (numero < 0) {
        alert("Por favor ingresa un número positivo.");
        return;
    }
    
    // Calcular el factorial
    let factorial = 1;
    for (let i = 1; i <= numero; i++) {
        factorial *= i;
    }
    
    // Mostrar el resultado en el elemento con id "resultado"
    document.getElementById("resultado").innerText = `${numero}! = ${factorial}`;
}
