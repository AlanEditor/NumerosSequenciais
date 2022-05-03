<?php

//Declaração da variavel
$numero = 20;


echo preencher($numero);

function preencher($num)
{
    //Vetores
    $vetor = [];
    $repeticao = [];


    //Preenchendo o vetor
    for($i = 0; $i < $num; $i++)
    {
        array_push($vetor, (rand(1, 10)));
    }

    //Atribuindo a outra variavel o valor das repeticoes do vetor
    $same = array_count_values($vetor);

    //Percorrendo o vetor 
    foreach ($same as $indice => $valor)
    {
        //Caso o número de repeticoes seja 1, ele armazena em outro vetor o valor 
        if($valor == 1 )
        {
            array_push($repeticao, $indice);
        }

    }

    //Exibindo os resultados do preenchimento aleatorio
    echo 'Valores: [ ';

    foreach($vetor as $valor)
    {
        echo $valor. ' - ';
    }
    echo ' ]';
    echo ' <br>';

    //Exibindo os números que se repetiram
    echo '<br> O(s) número(s) que não se repete(m) é (são): ' ;
    foreach($repeticao as $numero)
    {
        echo '<br>';
        echo ' - '.$numero;
    }
    

;}



?>