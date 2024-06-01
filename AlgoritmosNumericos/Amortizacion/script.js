function calcularTablaAmortizacion() {
    // Obtener los valores del formulario
    let monto = parseFloat(document.getElementById('monto').value);
    let plazoMeses = parseInt(document.getElementById('plazo').value);
    let tasaInteres = parseFloat(document.getElementById('tasa').value) / 100;

    // Validar los valores ingresados
    if (isNaN(monto) || isNaN(plazoMeses) || isNaN(tasaInteres) || monto <= 0 || plazoMeses <= 0 || tasaInteres <= 0) {
        alert("Por favor ingrese valores válidos y mayores a cero.");
        return;
    }

    // Inicializar variables
    let saldo = monto;
    let cuota = calcularCuota(saldo, tasaInteres, plazoMeses);
    let tablaAmortizacion = [];

    // Limpiar tabla de amortización anterior
    document.getElementById('tablaAmortizacion').innerHTML = '';

    // Crear encabezados de la tabla
    let tabla = document.createElement('table');
    tabla.innerHTML = `
        <tr>
            <th>Periodo</th>
            <th>Saldo</th>
            <th>Interés</th>
            <th>Abono Capital</th>
            <th>Cuota</th>
        </tr>
    `;

    // Calcular tabla de amortización
    for (let periodo = 1; periodo <= plazoMeses; periodo++) {
        let interes = saldo * tasaInteres;
        let abonoCapital = cuota - interes;
        saldo -= abonoCapital;

        // Crear fila de la tabla
        let fila = document.createElement('tr');
        fila.innerHTML = `
            <td>${periodo}</td>
            <td>Q ${saldo.toFixed(2)}</td>
            <td>Q ${interes.toFixed(2)}</td>
            <td>Q ${abonoCapital.toFixed(2)}</td>
            <td>Q ${cuota.toFixed(2)}</td>
        `;

        // Agregar fila a la tabla
        tabla.appendChild(fila);
    }

    // Agregar tabla al contenedor
    document.getElementById('tablaAmortizacion').appendChild(tabla);

    // Ocultar formulario después de mostrar la tabla
    document.getElementById('amortizacionForm').style.display = 'none';
}

function calcularCuota(saldo, tasaInteres, plazoMeses) {
    // Calcular la cuota mensual con el método de cuota sobre saldos
    let factor = Math.pow(1 + tasaInteres, plazoMeses);
    let cuota = saldo * (tasaInteres * factor) / (factor - 1);
    return cuota;
}
