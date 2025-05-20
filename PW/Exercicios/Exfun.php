<?php

class OperacoesMatematicas {
    /**
     * Multiplica dois números.
     *
     * @param float|int $num1 O primeiro número.
     * @param float|int $num2 O segundo número.
     * @return float|int O produto dos dois números.
     */
    public static function multiplicar($num1, $num2) {
        return $num1 * $num2;
    }
}

// Chamando a função estática sem criar uma instância da classe
$numero1 = 8;
$numero2 = 7;
$resultado = OperacoesMatematicas::multiplicar($numero1, $numero2);

echo "Exercício 1: O resultado de $numero1 * $numero2 é: " . $resultado . "<br><br>";
// Saída esperada: Exercício 1: O resultado de 8 * 7 é: 56




/**
 * Calcula o n-ésimo número da sequência de Fibonacci de forma recursiva.
 *
 * @param int $n A posição na sequência (começando de 0).
 * @return int O n-ésimo número de Fibonacci. Retorna 0 para n <= 0.
 */
function fibonacci($n) {
    // Casos base da recursão
    if ($n <= 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    }
    // Passo recursivo
    else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

// Calculando o 5º número (lembrando que a sequência geralmente começa em 0: 0, 1, 1, 2, 3, 5, ...)
$posicao = 5;
$resultadoFib = fibonacci($posicao);

echo "Exercício 2: O " . $posicao . "-ésimo número de Fibonacci é: " . $resultadoFib . "<br>";
// Saída esperada: Exercício 2: O 5-ésimo número de Fibonacci é: 5

// Teste com outra posição
$posicao_7 = 7;
echo "Exercício 2: O " . $posicao_7 . "-ésimo número de Fibonacci é: " . fibonacci($posicao_7) . "<br><br>";
// Saída esperada: Exercício 2: O 7-ésimo número de Fibonacci é: 13



class Livro {
    // Propriedades públicas
    public $titulo;
    public $autor;

    /**
     * Construtor opcional para facilitar a criação do objeto.
     *
     * @param string $titulo O título do livro.
     * @param string $autor O autor do livro.
     */
    public function __construct($titulo = "", $autor = "") {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    /**
     * Exibe as informações do livro (título e autor).
     */
    public function exibirInformacoes() {
        echo "Título: " . $this->titulo . ", Autor: " . $this->autor . "<br><br>";
    }
}

echo "Exercício 3:<br>";

// Criando um objeto (instância) da classe Livro
$meuLivro = new Livro();

// Atribuindo valores às propriedades públicas
$meuLivro->titulo = "O Guia do Mochileiro das Galáxias";
$meuLivro->autor = "Douglas Adams";

// Chamando o método público para exibir as informações
$meuLivro->exibirInformacoes();
// Saída esperada: Título: O Guia do Mochileiro das Galáxias, Autor: Douglas Adams



/**
 * Calcula o preço final após aplicar um desconto percentual.
 *
 * @param float $preco O preço original.
 * @param float $percentual O percentual de desconto (valor padrão é 10%).
 * @return float O preço com o desconto aplicado.
 */
function desconto($preco, $percentual = 10.0) {
    // Validação básica do percentual
    if ($percentual < 0) {
        echo "Aviso: Percentual de desconto não pode ser negativo. Usando 0%.<br>";
        $percentual = 0;
    }

    $valorDesconto = $preco * ($percentual / 100);
    return $preco - $valorDesconto;
}

echo "Exercício 4:\n";

$precoProduto = 150.00;

// Chamando a função sem o segundo parâmetro (usará o padrão 10%)
$precoComDescontoPadrao = desconto($precoProduto);
echo "Preço original: R$ " . number_format($precoProduto, 2, ',', '.') . "<br>";
echo "Preço com desconto padrão (10%): R$ " . number_format($precoComDescontoPadrao, 2, ',', '.') . "<br>";
// Saída esperada: Preço com desconto padrão (10%): R$ 135,00

// Chamando a função com um percentual específico (25%)
$precoComDescontoEspecifico = desconto($precoProduto, 25);
echo "Preço com desconto de 25%: R$ " . number_format($precoComDescontoEspecifico, 2, ',', '.') . "<br><br>";
// Saída esperada: Preço com desconto de 25%: R$ 112,50


class Imposto {
    const TAXA_PERCENTUAL = 5.0; // Define a taxa como uma constante (boa prática)

    /**
     * Calcula o valor do imposto sobre um determinado preço.
     *
     * @param float $preco O preço do produto.
     * @return float O valor do imposto (5% do preço). Retorna 0 se o preço for negativo.
     */
    public static function calcularImposto($preco) {
        if ($preco < 0) {
            return 0; // Imposto não pode ser calculado sobre preço negativo
        }
        // return $preco * 0.05; // 5%
        // Ou usando a constante da classe:
        return $preco * (self::TAXA_PERCENTUAL / 100);
    }
}

echo "Exercício 5:<br>";

$precoDoItem = 250.00;

// Chamando a função estática, passando o preço como argumento
$valorDoImposto = Imposto::calcularImposto($precoDoItem);

echo "Preço do item: R$ " . number_format($precoDoItem, 2, ',', '.') . "<br>";
echo "Valor do imposto (" . Imposto::TAXA_PERCENTUAL . "%): R$ " . number_format($valorDoImposto, 2, ',', '.') . "<br>";
// Saída esperada: Valor do imposto (5%): R$ 12,50

$outroPreco = 1000;
$outroImposto = Imposto::calcularImposto($outroPreco);
echo "Imposto sobre R$ " . number_format($outroPreco, 2, ',', '.') . ": R$ " . number_format($outroImposto, 2, ',', '.') . "<br>";
// Saída esperada: Imposto sobre R$ 1.000,00: R$ 50,00

?>