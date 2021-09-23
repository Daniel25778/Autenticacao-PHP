<?php

 //* CRIANDO UMA SESSÃO *//

 session_start();

 //* VERIFICANDO O ID DA SESSÃO *//

 echo session_id();

 //* CRIANDO VARIAVEIS DE SESSÃO *//

$_SESSION["nome"] = "Daniel Wilson";

//  $nome = "Daniel Wilson";

//  echo $nome;