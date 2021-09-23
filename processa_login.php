<?php

require("./funcoes.php");

session_start();

realizarLogin($_POST['txt_usuario'],$_POST['txt_senha'], lerArquivo("./dados/usuarios.json"));