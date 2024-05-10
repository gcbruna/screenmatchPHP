<?php
//sub-rotina                           //void indica que não tem um retorno, não tem nenhum valor sendo retornado 
function exibeMensagemLancamento (int $ano): void {
    if($ano > 2022){
        echo "Esse filme é um lançamento. ";
    } else if ($ano > 2020){
        echo "Esse filme ainda é novo. ";
    } else {
        echo "Esse filme não é novo. ";
    };
}

//função                               //Para informar o retorno de uma função. que é um valor booleano
function incluidoNoPlano(bool $planoPrime, int $anoLancamento): bool {
    return $planoPrime || $anoLancamento < 2020;  
    //'return' valor retornado pela função após sua execução.
    // o return devolve esse resultado para quem chamou a função
}