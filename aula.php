<?php

    //Variaveis

    $nome = 'Guilherme';
    $idade = '26';

    //Se colocar o $$ duas vezes em uma mesma variavel ela chama o nome da variavel de variavel
    $Guilherme = 'Bla Bla';

    //No php para concatenar variaveis e utilizado o '.'
    //echo 'O meu nome e '.$nome;

    // '===' em php significa como identico compara o valor e o tipo
    /* if ($idade == 'Guilherme') {
        echo 'Verdadeiro';
    }else{
        echo 'Falso';
    } */


    //Loops em php
    /* for ($i=0; $i < 10; $i++) { 
        echo $i;
        echo '<hr>';
    } */

   /*  $i = 0
    while($i < 10) {
        echo $i;
        echo '<br>';
        $i++;
    } */

    //Funções em php
/* 
    function printNumero($n){
        echo $n;
    }
    printNumero(30);
    echo '<br>';
    printNumero(40); */

    //Classes e objetos
   /*  class Pessoa{
        public $nome;
        public $idade;

        public function __construct($nome, $idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function printNomeIdade(){
            echo $this->nome;
            echo '<br>';
            echo $this->idade;
        }
    }

    $pessoa = new Pessoa('Guilherme', '26');

    $pessoa->printNomeIdade(); */

    //Arrays 
    $arr = [ 'guikherme', 'joao', 'felipe' ];

    echo $arr[0];

?>
