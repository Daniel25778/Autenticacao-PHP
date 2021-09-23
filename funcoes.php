<?php

    function lerArquivo($nomeArquivo){
        //le o arquivo como string
        $arquivo = file_get_contents($nomeArquivo);
        //transforma a string em array
        $jsonArray = json_decode($arquivo);

        return $jsonArray;
    }

    /*
     1- usuario vindo do form
     2- senha vindo do form
     3- dados do arquivo

    */



    function realizarLogin($usuario, $senha, $dados){
        foreach($dados as $dado){
            if($dado->usuario == $usuario && $dado->senha == $senha){
                    //* VARIAVEL DE SESSÃO *//
                    $_SESSION["usuario"] = $dado->usuario;
                    $_SESSION["id"] = session_id();
                    $_SESSION["data_hora"] = date('d/m/Y - h:i:s');
                    header("location: area_restrita.php");
                   
                    exit;
            }else{ 
             
                header("location: index.php");
             
            }
        }
        exit;
    }

  