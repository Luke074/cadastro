<?php

const ERRO_CONEX = "ERRO: não foi possivel realizar a conexão com o banco de dados";

function conexaoMySql () {
  
  $server = (string) "localhost";
  $user = (string) "root";
  $password = (string) "bcd127";
  $dataBase = (string) "db_cadastro";

  if($conexao = @mysqli_connect($server, $user, $password, $dataBase))
    return $conexao;
  else
    return alert(ERRO_CONEX);
}

?>