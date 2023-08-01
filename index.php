<?php

    //Definição de variavel com php começa com $
    //Este tipo de atribuição no home, transforme o indice em uma chave
    //o indice 0 parte depois do home
    $paginas = [ 'home' => 'Minha pagina home aqui!', 'sobre' => 'Estou na pagina Sobre', 'contato' ];


    $paginas['contato'] = '<form><input type="text" placeholder="Se nome ... "/></form>';


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aulas Php</title>
    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header{
            background-color:#069;
            padding: 8px 10px;
            text-align: center;
        }
        a{
            display: inline-block;
            margin: 0 10px;
            color: white;
            font-size: 17px
        }
        section{
            max-width: 960px;
            margin: 20px auto;
            padding: 0 2%
        }
        h2{
            background-color:#069;
            color: white;
            padding: 8px 10px;
        }
        p{
            color: black;
            margin-top: 10px;
            font-size: 16px;
        }

    </style>
</head>
<body>
    <header>
        <?php 
            foreach ($paginas as $key => $value) {
                echo '<a href="?page='.$key.'">'.ucfirst($key).'</a> ';
            }
        ?>
    </header>
    <section>
        <h2>
            <?php
                $pagina = ( isset($_GET['page']) ? $_GET['page'] : 'home' );
                
                if (!array_key_exists($pagina, $paginas)) {
                    $pagina = 'home';
                }
                echo ucfirst($pagina);
            ?>
        </h2>
        <p><?php
            echo $paginas[$pagina];
        ?> </p>
    </section>
</body>
</html>