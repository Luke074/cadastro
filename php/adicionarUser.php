<?php

require_once('conexao.php');

$conex = conexaoMySql();

$nome = (string) null;
$cpf = (string) null;
$email = (string) null;
$senha = (string) null;

$nome = $_POST['txtNome'];
$cpf = $_POST['txtCpf'];
$email = $_POST['txtEmail'];
$senha = md5($_POST['txtSenha']);

$sql = "insert into usuario
  (
    nome, 
    cpf, 
    email, 
    senha
  ) 
  value
  (
    '".$nome."', 
    '".$cpf."', 
    '".$email."', 
    '".$senha."'
  );
";

// var_dump($sql);

if (mysqli_query($conex, $sql))
{
  echo
  ("
    <script>
        alert('Registro Inserido com sucesso!');
        location.href = '../index.html';
    </script>
  ");
}
else{
  echo
  ("
    <script>
        alert('Erro ao Inserir os dados no Banco de Dados! Favor verificar a digitação de todos os dados.');
        location.href = '../index.html';
        window.history.back();
    </script> 
  ");
}