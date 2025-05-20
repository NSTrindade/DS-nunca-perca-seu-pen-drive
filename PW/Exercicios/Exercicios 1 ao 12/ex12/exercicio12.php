<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado Exercício 12</title>
</head>
<body>
    <h1>Números Ímpares em Ordem Decrescente</h1>

    <?php
        // Obter os valores do formulário
        $inicio_str = $_POST['inicio'];
        $fim_str = $_POST['fim'];

        // Converter para inteiros (sem intval)
        $inicio = (integer) $inicio_str;
        $fim = (integer) $fim_str;

        // Determinar o maior e o menor (sem max e min)
        if ($inicio > $fim) {
            $maior = $inicio;
            $menor = $fim;
        } else {
            $maior = $fim;
            $menor = $inicio;
        }

        $resultado = "";
        $primeiro_impar = true;

        // Iterar e encontrar os números ímpares em ordem decrescente
        for ($i = $maior; $i >= $menor; $i--) {
            if ($i % 2 != 0) {
                if (!$primeiro_impar) {
                    $resultado .= ", ";
                }
                $resultado .= $i;
                $primeiro_impar = false;
            }
        }

        // Exibir o resultado
        echo "<p>Os números ímpares no intervalo de " . $menor . " a " . $maior . " em ordem decrescente são: ";
        if ($resultado != "") {
            echo $resultado . "</p>";
        } else {
            echo "Nenhum número ímpar encontrado.</p>";
        }
    ?>
</body>
</html>