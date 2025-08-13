<?php
    echo "<h2>ARRAY</h2>";
    echo "Uma array é na verdade, um mapa oudenado. Ou seja, <br> é um tipo que relaciona valores a chaves. <br> Portanto, é uma lista de valores que serão armazenados na memória.";
    echo "<hr>";
    echo "<h2>Criando o array</h2>";
    $arr = ["primeiro","segundo","terceiro"];
    print_r($arr);
    echo "<hr>";
    echo "<h2>Outra maneira de criar o array</h2>";
    $arr = array("primeiro","segundo","terceiro");
    print_r($arr);
    echo "<hr>";
    echo "<h2>Utilizando o índice do array</h2>";
    $arr = array("primeiro","segundo","terceiro");
    echo $arr[2];
    echo "<hr>";
    echo "<h2>Array Associativo</h2>";
    $arrac = array("nome"=>"Alberto","sobrenome"=>"Roberto","idade"=>"105");
    echo "Nome: ".$arrac["nome"]. "<br>";
    echo "Sobrenome: ".$arrac["sobrenome"]. "<br>";
    echo "Idade : " .$arrac["idade"];
    echo "<hr>";
    echo "<h2>Array Multidimencional</h2>";
    $arr = array(
        array("primeiro","segundo"),
        array("terceiro","quarto")
    );
    print_r($arr);
    echo "<br>";
    print_r($arr[0]);
    echo "<br>";
    echo $arr[1][1];
    echo "<hr>";
    echo "<h2>Contando os elementos de um array</h2>";
    $numeros = [1,2,300,7000,23,56,89,21,54,34,345];
    echo count($numeros);
    echo "<br>";
    $num = 0;
    $soma = 0;
    foreach($numeros as $numero){
        $soma = $num + $numero;
        $num = $soma;
    }
    echo "A soma dos números foi: $num";
    echo "<hr>";
    echo "<h2>Adicionando dinamicamente em um array</h2>";
    $arr = array();
    $arr[] ="azul";
    $arr[] = "vermelho";
    $arr[] = "amarelo";
    print_r($arr);
    echo "<hr>";
    echo "<h2>Adicionando do início do array</h2>";
    $frutas = array("maça","melão","melancia");
    array_unshift($frutas, "abacaxi");
    print_r($frutas);
    echo "<hr>";
    echo "<h2>Adicionando do final do array</h2>";
    $frutas = array("maça","melão","melancia");
    array_push($frutas, "abacaxi");
    print_r($frutas);
    echo "<hr>";
    echo "<h2>Removendo o primeiro elemento do array</h2>";
    $frutas = array("maça","melão","melancia");
    array_shift($frutas);
    print_r($frutas);
    echo "<hr>";
    echo "<h2>Procurando um elemento do array</h2>";
    $frutas = array("maça","melão","melancia","uva","goiaba","amora");
    $proc = "laranja";
    $index = array_search($proc, $frutas);
    if ($index !== false) {
        echo "O elemento $proc esta na posição $index";
    }else{
        echo "Elemento não encontrado";
    }
    

?>