<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resultado de la Expansión del Binomio</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }
    .container {
        max-width: 600px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .result {
        margin-top: 20px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
</style>
</head>
<body>
    <div class="container">
        <h2>Resultado de la Expansión del Binomio</h2>
        <?php
        // Función para obtener el coeficiente binomial C(n, k)
        function coeficienteBinomial($n, $k) {
            if ($k == 0 || $k == $n) {
                return 1;
            } else {
                return coeficienteBinomial($n - 1, $k - 1) + coeficienteBinomial($n - 1, $k);
            }
        }

        // Función para calcular la potencia del binomio
        function potenciaBinomio($n) {
            $resultado = '';

            // Generación de términos
            for ($k = 0; $k <= $n; $k++) {
                $coeficiente = coeficienteBinomial($n, $k);
                $termino = '';

                // Añadir coeficiente
                if ($coeficiente > 1) {
                    $termino .= $coeficiente;
                }

                // Añadir 'a' con exponente
                if ($n - $k > 0) {
                    $termino .= 'a';
                    if ($n - $k > 1) {
                        $termino .= '^' . ($n - $k);
                    }
                }

                // Añadir 'b' con exponente
                if ($k > 0) {
                    $termino .= 'b';
                    if ($k > 1) {
                        $termino .= '^' . $k;
                    }
                }

                // Concatenar el término con el resultado final
                $resultado .= ($resultado === '') ? $termino : ' + ' . $termino;
            }

            // Formatear el resultado
            $resultado = "(a + b)^$n = $resultado";

            return $resultado;
        }

        // Obtener la potencia desde el formulario
        if (isset($_POST['potencia'])) {
            $potencia = $_POST['potencia'];
            // Validar que la potencia sea un número positivo
            if (!is_numeric($potencia) || $potencia < 0 || intval($potencia) != $potencia) {
                echo '<div class="result">Por favor, ingrese un número entero positivo.</div>';
            } else {
                // Calcular la potencia del binomio y mostrar el resultado
                $resultado = potenciaBinomio($potencia);
                echo '<div class="result">' . $resultado . '</div>';
            }
        } else {
            echo '<div class="result">Por favor, ingrese la potencia.</div>';
        }
        ?>
    </div>
</body>
</html>
