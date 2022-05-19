<?php
//Verificar se existe valor na passagem do parâmetro
if( isset($_GET['cor'])) {
    //Indentação
    //Declaração de variáveis

    $nome;
    $idade;

    //Parâmetro
    $cor = $_GET["cor"];

    //Atribuir valor para uma variável
    //Popular a vaiável

    //Variável nome que recebe

    $nome = 'Luiz';

    //Apresentar o valor da variável
    echo $nome;

    ?><br>

    <?php

    //Concatenar
    echo "Olá" . $nome;

    $idade = 1;

    echo $idade;

    $a = $idade + 1;

    $b = "2";

    $c = $b + $a;

    echo $a ."<br>";
    echo $b ."<br>";
    echo $c ."<br>";

    echo "A cor escolhida foi " .$cor;

    }
    ?>