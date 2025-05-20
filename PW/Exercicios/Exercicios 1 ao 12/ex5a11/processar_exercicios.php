<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultados dos Exercícios</title>
</head>
<body>
    <h1>Resultados dos Exercícios</h1>

    <?php
        // Exercício 5: Soma dos quadrados      
            $num1_ex5 = $_POST['num5_1'];
            $num2_ex5 = $_POST['num5_2'];
            $num3_ex5 = $_POST['num5_3'];
            $soma_quadrados = ($num1_ex5 * $num1_ex5) + ($num2_ex5 * $num2_ex5) + ($num3_ex5 * $num3_ex5);
            echo "<p><strong>Exercício 5: Soma dos quadrados = </strong> " . $soma_quadrados . "</p>";
        

        // Exercício 6: Salário líquido
            $salario_bruto = $_POST['salario_bruto'];
            $gratificacao = $salario_bruto * 0.10;
            $imposto_renda = ($salario_bruto + $gratificacao) * 0.20;
            $salario_liquido = $salario_bruto + $gratificacao - $imposto_renda;
            echo "<p><strong>Exercício 6: Salário líquido = </strong> " . number_format($salario_liquido, 2, ',', '.') . "</p>";
        

        // Exercício 7: Média aritmética
            $nota1_ex7 = $_POST['nota7_1'];
            $nota2_ex7 = $_POST['nota7_2'];
            $nota3_ex7 = $_POST['nota7_3'];
            $nota4_ex7 = $_POST['nota7_4'];
            $media = ($nota1_ex7 + $nota2_ex7 + $nota3_ex7 + $nota4_ex7) / 4;
            echo "<p><strong>Exercício 7: Média aritmética = </strong> " . number_format($media, 2, ',', '.') . " - ";
            if ($media >= 6) {
                echo "Aprovado</p>";
            } elseif ($media < 3) {
                echo "Retido</p>";
            } else {
                echo "Exame</p>";
            }
        

        // Exercício 8: Maior e menor número
            $num1_ex8 = $_POST['num8_1'];
            $num2_ex8 = $_POST['num8_2'];
            $num3_ex8 = $_POST['num8_3'];
            $maior = max($num1_ex8, $num2_ex8, $num3_ex8);
            $menor = min($num1_ex8, $num2_ex8, $num3_ex8);
            echo "<p><strong>Exercício 8: Maior número = </strong> " . $maior . ", <strong>Menor número = </strong> " . $menor . "</p>";
        

        // Exercício 9: Soma de ímpares no intervalo
            $inicio = $_POST['inicio_intervalo'];
            $fim = $_POST['fim_intervalo'];
            $soma_impares = 0;
            for ($i = min($inicio, $fim); $i <= max($inicio, $fim); $i++) {
                if ($i % 2 != 0) {
                    $soma_impares += $i;
                }
            }
            echo "<p><strong>Exercício 9: Soma dos números ímpares no intervalo = </strong> " . $soma_impares . "</p>";
        

        // Exercício 10: Par ou ímpar
            $num10 = $_POST['num10'];
            echo "<p><strong>Exercício 10: O número " . $num10 . " é </strong> ";
            if ($num10 % 2 == 0) {
                echo "par</p>";
            } else {
                echo "ímpar</p>";
            }
        

        // Exercício 11: Calculadora básica
            $num1_ex11 = $_POST['num11_1'];
            $num2_ex11 = $_POST['num11_2'];
            $operador = $_POST['operador'];
            $resultado = 0;
            switch ($operador) {
                case '+':
                    $resultado = $num1_ex11 + $num2_ex11;
                    break;
                case '-':
                    $resultado = $num1_ex11 - $num2_ex11;
                    break;
                case '/':
                    if ($num2_ex11 != 0) {
                        $resultado = $num1_ex11 / $num2_ex11;
                    } else {
                        $resultado = "Erro: Divisão por zero!";
                    }
                    break;
                case '*':
                    $resultado = $num1_ex11 * $num2_ex11;
                    break;
                default:
                    $resultado = "Operador inválido!";
            }
            echo "<p><strong>Exercício 11: Resultado da calculadora = </strong> " . $resultado . "</p>";
        
        
    ?>
</body>
</html>