<?php 

    //Equivalente ao var pode ser alterada
    $nome = "Cristhian";

    //echo "Meu nome e ".$nome;

    //Variaveis constantes que não podem ser alteradas no projeto
    //define('NOME', 'Cristhian');    

    //echo NOME;


    function printNome($nome){
        echo '<h3><strong>Meu nome e '.$nome.'</strong></h3>';
        echo '<br/>';
    }

    $frase = "A danki code tem cursos de programação e marketing";

    //Funçção sub -> corta o conteudo definindo o tamanho 0,8 || O primeiro parametro e o que vai ser cortado
    /* echo substr($frase, 0, 8); */


    //Laços de repetição
    for ($i=1; $i <= 100; $i++) { 
        echo 'Guilherme'.$i;
        echo '<br/>';
    }

    //Estudar 2 outros laços de repetição

    

?>