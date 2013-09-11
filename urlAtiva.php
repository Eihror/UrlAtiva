<?php

    function ativandUrl($params){
            
            $http = "http://";
            $server = $_SERVER['SERVER_NAME']; //Retorna o LOCAL ex.: dominio.com.br ou localhost
            $final = $_SERVER ['REQUEST_URI'];
            
            /*
             * Dá um explode no final do link para que possamos retirar a extensão e assim seja feita a validação          
             */
            $ativo = explode(".", $final);
            /*
             * Como o código $_SERVER ['REQUEST_URI'] retorna tudo após o dominio em que está hospedado então teremos
             * que dar mais um explode procurando a posição já separada correta.
             */
            $link = explode("/", $ativo[0]);
            
            /*
             * Define um variavel e já a seta com falsa
             */
            $pag_atual = false;
            /*
             * Após isso, cria uma uma validação para caso o link com a posição e o nome dele já separados seja igual
             * ao paramentro declarado pelo usuário seja iguais, então a mesma variavel que antes foi setada como falsa,
             * agora se torna verdadeira.
             */
            if($link[2] == $params){
                $pag_atual = true;
            }
            /*
             * E então, é retornado essa variavel
             */
            return $pag_atual;
    }
    
?>
